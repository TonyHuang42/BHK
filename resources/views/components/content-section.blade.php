@props([
    'id',
    'title',
    'subtitle',
    'intro',
    'images' => [],
])

<section class="bg-texture-gray" id="{{ $id }}" data-tab-panel="{{ $id }}" hidden>
    <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
        <div class="container top-padding bottom-padding-sm">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <div class="text-center">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3>{{ $title }}</h3>
                        <h6>{{ $subtitle }}</h6>
                        <p class="mt-5">{{ $intro }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-section overflow-hidden">
        <div class="swiper battleSwiper">
            <div class="swiper-wrapper align-items-center">
                @foreach (array_merge($images, $images) as $index => $image)
                    <div class="swiper-slide">
                        <img src="{{ asset($image) }}" alt="Image {{ ($index % count($images)) + 1 }}" class="w-100">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
        <div class="container top-padding-sm bottom-padding">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    {{ $slot }}
                    <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-{{ $id }}">閱讀更多</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="readMoreModal-{{ $id }}" tabindex="-1" aria-labelledby="readMoreModalLabel-{{ $id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="readMoreModalLabel-{{ $id }}">閱讀更多</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
            </div>
            <div class="modal-body">
                {{ $modal }}
            </div>
        </div>
    </div>
</div>
