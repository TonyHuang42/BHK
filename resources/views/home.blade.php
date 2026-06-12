@extends('layouts.app')

@section('title', '香港淪陷史：保衛戰、日治歲月與抗日抵抗')
@section('meta_description', '回顧香港在二戰中的歷史脈絡，涵蓋香港保衛戰、三年零八個月日治統治、敵後游擊行動及人物故事，認識戰火下香港人的抵抗與記憶。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/home/banner.jpg') }}" alt="Home banner" class="hero-img" style="object-position: 50% center;">
        <img src="{{ asset('img/home/section_header_香港抗戰歷史.svg') }}" alt="香港抗戰歷史" class="hero-title home-hero-title">
    </section>

    <section class="home-intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h5 class="mb-0 text-center text-white">
                        {!! __('home.home_description') !!}
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="home-overview section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center bottom-padding">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-5">
                            {!! __('home.home_section_1_title') !!}
                        </h3>
                        <p class="mb-0 text-center">
                            {{ __('home.home_section_1_p1') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid gx-0">
            <div class="row g-0">
                <div class="col-6 col-md">
                    <a href="{{ route('battle.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_香港保衛戰.jpg') }}" alt="香港保衛戰" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-香港保衛戰.svg') }}" alt="香港保衛戰" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-6 col-md">
                    <a href="{{ route('guerrilla.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_游擊與抵抗.jpg') }}" alt="游擊與抵抗" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-游擊與抵抗.svg') }}" alt="游擊與抵抗" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-6 col-md">
                    <a href="{{ route('occupation.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_日治下的香港.jpg') }}" alt="日治下的香港" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-日治下的香港.svg') }}" alt="日治下的香港" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-6 col-md">
                    <a href="{{ route('people.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_人物與故事.jpg') }}" alt="人物與故事" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-人物與故事.svg') }}" alt="人物與故事" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center top-padding">
                        <p>
                            {{ __('home.home_section_1_p2') }}
                        </p>
                        <p class="mb-0">
                            {{ __('home.home_section_1_p3') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
