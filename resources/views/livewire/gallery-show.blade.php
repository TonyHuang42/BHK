<div>
    @if (empty($lightboxItems))
        <p>此相冊暫無圖片。</p>
    @else
        <div class="row row-gap-4">
            @foreach ($lightboxItems as $index => $item)
                <div class="col-6 col-lg-3">
                    <button
                        type="button"
                        class="gallery-card-trigger gallery-show-trigger"
                        data-pswp-items="{{ json_encode($lightboxItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}"
                        data-pswp-index="{{ $index }}"
                    >
                        <div class="gallery-show-thumb-wrapper">
                            <img
                                src="{{ $item['msrc'] ?? $item['src'] }}"
                                alt="{{ $item['alt'] }}"
                                class="gallery-show-thumb-image"
                                loading="lazy"
                            >
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
    @endif
</div>
