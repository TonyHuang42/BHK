@extends('layouts.app')

@section('title', '相冊 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的相冊集，回顧戰時與淪陷時期的影像與歷史紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner.png') }}" alt="" class="hero-img" aria-hidden="true">
    </section>

    <section class="section-padding">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-0">相冊</h3>
                    </div>
                </div>
            </div> --}}

            @if ($galleries->isEmpty())
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="mb-0">暫無相冊。</p>
                    </div>
                </div>
            @else
                <div class="row row-gap-5">
                    @foreach ($galleries as $gallery)
                        <div class="col-6 col-lg-4">
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
    </section>
</main>
@endsection
