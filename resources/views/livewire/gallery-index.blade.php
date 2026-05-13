<div>
    @if ($categories->isNotEmpty())
        <div class="gallery-filter mb-5">
            <ul class="gallery-filter-list">
                <li>
                    <button
                        type="button"
                        wire:click="setCategory('')"
                        class="gallery-filter-link {{ $category === '' ? 'is-active' : '' }}"
                    >All</button>
                </li>
                @foreach ($categories as $cat)
                    <li>
                        <button
                            type="button"
                            wire:click="setCategory('{{ $cat->slug }}')"
                            class="gallery-filter-link {{ $category === $cat->slug ? 'is-active' : '' }}"
                        >{{ $cat->name }}</button>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($galleries->isEmpty())
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="mb-0">暫無相冊。</p>
            </div>
        </div>
    @else
        <div class="row row-gap-5">
            @foreach ($galleries as $gallery)
                <div class="col-6 col-lg-4" wire:key="gallery-{{ $gallery->id }}">
                    <button type="button" class="gallery-card-trigger" data-pswp-items="{{ json_encode($gallery->lightbox_items, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}">
                        <article class="gallery-card">
                            <div class="gallery-card-image-wrapper">
                                <img src="{{ asset('storage/' . $gallery->thumbnail) }}" alt="{{ $gallery->title }}" class="gallery-card-image">
                            </div>
                            <h5 class="gallery-card-title">{{ $gallery->title }}</h5>
                        </article>
                    </button>
                </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                {{ $galleries->links() }}
            </div>
        </div>
    @endif
</div>
