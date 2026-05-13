@extends('layouts.app')

@section('title', '新聞稿 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的最新新聞稿與公告。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner.png') }}" alt="" class="hero-img" aria-hidden="true">
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-0">新聞稿</h3>
                    </div>
                </div>
            </div>

            @if ($pressReleases->isEmpty())
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="mb-0">暫無新聞稿。</p>
                    </div>
                </div>
            @else
                <div class="row row-gap-5">
                    @foreach ($pressReleases as $pressRelease)
                        <div class="col-12">
                            <article class="press-release-card row align-items-center g-4 g-lg-5">
                                <div class="col-lg-6">
                                    <div class="press-release-card-image-wrapper">
                                        <img
                                            src="{{ asset('storage/' . $pressRelease->thumbnail) }}"
                                            alt="{{ $pressRelease->title }}"
                                            class="press-release-card-image"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @if ($pressRelease->category)
                                        <p class="press-release-card-category mb-2">{{ $pressRelease->category->name }}</p>
                                    @endif
                                    <h2 class="mb-3">{{ $pressRelease->title }}</h2>
                                    @if ($pressRelease->summary)
                                        <p class="mb-3">{{ $pressRelease->summary }}</p>
                                    @endif
                                    <p class="mb-0 text-muted small">{{ $pressRelease->date->format('Y-m-d') }}</p>
                                </div>
                            </article>
                        </div>
                        @if (!$loop->last)
                            <div class="col-12 press-release-card-divider p-0"></div>
                        @endif
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $pressReleases->links() }}
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection
