<div>
    @if (empty($lightboxItems))
        <p>此相冊暫無圖片。</p>
    @else
        @php($pswpItems = json_encode($lightboxItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE))
        <div class="gallery-justified" data-justified-gallery data-pswp-items="{{ $pswpItems }}" wire:ignore>
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
