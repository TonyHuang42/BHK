<div>
    @if ($categories->isNotEmpty())
        <div class="gallery-filter mb-5">
            <ul class="gallery-filter-list">
                <li>
                    <a
                        href="{{ route('galleries.index') }}"
                        wire:click.prevent="$set('category', '')"
                        class="gallery-filter-link {{ $category === '' ? 'is-active' : '' }}"
                    >全部</a>
                </li>
                @foreach ($categories as $cat)
                    <li>
                        <a
                            href="{{ route('galleries.index', ['category' => $cat->slug]) }}"
                            wire:click.prevent="$set('category', '{{ $cat->slug }}')"
                            class="gallery-filter-link {{ $category === $cat->slug ? 'is-active' : '' }}"
                        >{{ $cat->localized('name') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (empty($lightboxItems))
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="mb-0">暫無圖片。</p>
            </div>
        </div>
    @else
        @php($pswpItems = json_encode($lightboxItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE))
        <div class="gallery-justified" data-justified-gallery data-pswp-items="{{ $pswpItems }}">
            @foreach ($lightboxItems as $index => $item)
                <button
                    type="button"
                    class="gallery-card-trigger gallery-justified-item"
                    data-pswp-index="{{ $index }}"
                    data-width="{{ $item['width'] }}"
                    data-height="{{ $item['height'] }}"
                >
                    <img
                        src="{{ $item['msrc'] ?? $item['src'] }}"
                        alt="{{ $item['alt'] }}"
                        class="gallery-justified-image"
                        loading="lazy"
                    >
                </button>
            @endforeach
        </div>
    @endif
</div>
