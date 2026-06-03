import Sortable, { MultiDrag } from 'sortablejs'

// The ESM build already mounts the AutoScroll plugin by default, so enabling the
// scroll options below is enough to get page auto-scroll while reordering.
if (!Sortable.__multiDragMounted) {
    Sortable.mount(new MultiDrag())
    Sortable.__multiDragMounted = true
}

const style = document.createElement('style')
style.textContent =
    '.fi-sortable-selected{outline:1px solid #0ea5e9 !important;' +
    'outline-offset:-1px !important;background-color:rgba(14,165,233,0.18) !important}'
document.head.appendChild(style)

// Sortable containers currently on the page, so we can restore their selection
// after Livewire re-renders (morphs) the table.
const sortableEls = new Set()

// Re-apply the user's selection after a morph. Livewire's morph strips the
// `selectedClass` (it isn't part of the server-rendered HTML) and may swap the
// row nodes, which also desyncs the MultiDrag plugin's internal element list.
// We clear the plugin's state, then re-select the rows matching the ids we
// tracked via onSelect/onDeselect.
const reapplySelection = (el) => {
    const ids = el._fiSelectedIds

    if (!ids || ids.size === 0) {
        return
    }

    // Snapshot first: _deselectMultiDrag() dispatches a `deselect` event per item,
    // which fires our onDeselect handler and empties el._fiSelectedIds. Without the
    // snapshot we'd iterate an already-cleared set and restore nothing.
    const snapshot = [...ids]

    // Flush the plugin's selection so any stale (detached) row nodes from the morph
    // are dropped before we re-select the fresh ones.
    el.sortable?.multiDrag?._deselectMultiDrag?.()

    snapshot.forEach((id) => {
        const node = el.querySelector(`:scope > [x-sortable-item="${CSS.escape(id)}"]`)

        if (!node) {
            return
        }

        // Force the class on too: utils.select() early-returns (leaving the class off)
        // if the plugin still considers this node selected after a partial morph.
        node.classList.add('fi-sortable-selected')
        Sortable.utils.select(node)

        // utils.select() does NOT dispatch a `select` event (unlike a real user
        // selection), so our onSelect never runs — re-track the id by hand,
        // otherwise the set stays empty and the next morph can't restore anything.
        el._fiSelectedIds.add(id)
    })
}

const sortableDirective = (el) => {
    let animation = parseInt(el.dataset?.sortableAnimationDuration)

    if (animation !== 0 && !animation) {
        animation = 300
    }

    // console.log('[multidrag-reorder] directive RAN on element', el)

    el._fiSelectedIds = new Set()
    sortableEls.add(el)

    el.sortable = Sortable.create(el, {
        group: el.getAttribute('x-sortable-group'),
        draggable: '[x-sortable-item]',
        handle: '[x-sortable-handle]',
        dataIdAttr: 'x-sortable-item',
        animation,
        ghostClass: 'fi-sortable-ghost',
        multiDrag: true,
        selectedClass: 'fi-sortable-selected',
        // Keep items selected after dropping so the user can reorder the same
        // selection again without re-picking each item.
        avoidImplicitDeselect: true,
        // Auto-scroll the page when dragging near the top/bottom edge so the
        // user doesn't have to manually scroll while reordering.
        scroll: true,
        forceAutoScrollFallback: true,
        bubbleScroll: true,
        scrollSensitivity: 100,
        scrollSpeed: 30,
        onSelect(event) {
            el._fiSelectedIds.add(event.item.getAttribute('x-sortable-item'))
        },
        onDeselect(event) {
            el._fiSelectedIds.delete(event.item.getAttribute('x-sortable-item'))
        },
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

// After every Livewire request (reordering issues one), the table is morphed and
// the selection styling/state is lost. Restore it once the new DOM is in place.
document.addEventListener('livewire:init', () => {
    window.Livewire.hook('commit', ({ succeed }) => {
        succeed(() => {
            queueMicrotask(() => {
                sortableEls.forEach((el) => {
                    if (!el.isConnected) {
                        sortableEls.delete(el)

                        return
                    }

                    reapplySelection(el)
                })
            })
        })
    })
})
