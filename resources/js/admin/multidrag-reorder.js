import Sortable, { MultiDrag } from 'sortablejs'

if (!Sortable.__multiDragMounted) {
    Sortable.mount(new MultiDrag())
    Sortable.__multiDragMounted = true
}

const style = document.createElement('style')
style.textContent =
    '.fi-sortable-selected{outline:1px solid #0ea5e9 !important;' +
    'outline-offset:-1px !important;background-color:rgba(14,165,233,0.18) !important}'
document.head.appendChild(style)

const sortableDirective = (el) => {
    let animation = parseInt(el.dataset?.sortableAnimationDuration)

    if (animation !== 0 && !animation) {
        animation = 300
    }

    // console.log('[multidrag-reorder] directive RAN on element', el)

    el.sortable = Sortable.create(el, {
        group: el.getAttribute('x-sortable-group'),
        draggable: '[x-sortable-item]',
        handle: '[x-sortable-handle]',
        dataIdAttr: 'x-sortable-item',
        animation,
        ghostClass: 'fi-sortable-ghost',
        multiDrag: true,
        selectedClass: 'fi-sortable-selected',
        // onSelect(event) {
        //     console.log('[multidrag-reorder] onSelect fired', event.item)
        // },
        // onDeselect(event) {
        //     console.log('[multidrag-reorder] onDeselect fired', event.item)
        // },
        // onStart() {
        //     console.log('[multidrag-reorder] onStart (drag began)')
        // },
        onEnd(event) {
            // MultiDrag handles its own DOM insertion for multiple items
            if (event.items && event.items.length > 1) {
                return
            }

            // Single-item: replicate Filament's workaround for incorrect DOM reinsertion
            // https://github.com/filamentphp/filament/issues/17402
            const {
                item: draggedNode,
                to: parentNode,
                oldDraggableIndex,
                newDraggableIndex,
            } = event

            if (oldDraggableIndex === newDraggableIndex) {
                return
            }

            const draggableSelector = this.options.draggable
            const previousNode = parentNode.querySelectorAll(
                `:scope > ${draggableSelector}`,
            )[newDraggableIndex - 1]

            if (previousNode) {
                parentNode.insertBefore(draggedNode, previousNode.nextSibling)
            }
        },
    })
}

// Filament registers its own `sortable` directive inside its alpine:init listener
// (Alpine.plugin(Sortable)). This script is injected via SCRIPTS_AFTER, so our
// alpine:init listener is added after Filament's and therefore runs last — letting
// our MultiDrag-enabled directive override Filament's. Do NOT register before
// alpine:init fires, or Filament's listener will clobber us afterwards.
document.addEventListener('alpine:init', () => {
    window.Alpine.directive('sortable', sortableDirective)

    // console.log('[multidrag-reorder] sortable directive overridden with MultiDrag')
})
