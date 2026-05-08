@extends('layouts.app')

@section('title', '香港淪陷史：保衛戰、日治歲月與抗日抵抗')
@section('meta_description', '回顧香港在二戰中的歷史脈絡，涵蓋香港保衛戰、三年零八個月日治統治、敵後游擊行動及人物故事，認識戰火下香港人的抵抗與記憶。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/home/banner.jpg') }}" alt="Home banner" class="hero-img" style="object-position: 65% center;">
    </section>

    <section class="home-intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h5 class="mb-0 text-center text-white">
                        香港在二戰中曾經歷入侵、淪陷與長達三年零八個月的日治歲月。<br class="d-none d-xxl-block">
                        本網站回望香港保衛戰、敵後抵抗、民間生活與人物故事，<br class="d-none d-xxl-block">
                        呈現香港人在戰火中守護家園、支援中國抗戰的歷史記憶。
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="home-overview section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-2">在戰火與淪陷之中，香港人如何守護家園？</h3>
                        <p class="mb-0 text-center">從香港保衛戰到敵後游擊，從日治生活到人物記憶，回望香港在二戰中的苦難、抵抗與互助，理解這段歷史。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid gx-0">
            <div class="row g-0">
                <div class="col-sm-6 col-md">
                    <a href="{{ route('battle.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_香港保衛戰_.png') }}" alt="香港保衛戰" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-香港保衛戰.svg') }}" alt="香港保衛戰" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-sm-6 col-md">
                    <a href="{{ route('guerrilla.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_游擊與抵抗.jpg') }}" alt="游擊與抵抗" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-游擊與抵抗.svg') }}" alt="游擊與抵抗" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-sm-6 col-md">
                    <a href="{{ route('occupation.index') }}">
                        <article class="overview-card">
                            <img src="{{ asset('img/home/image_日治下的香港.jpg') }}" alt="日治下的香港" class="w-100 h-100 overview-card-image">
                            <div class="overview-card-content text-center p-5">
                                <img src="{{ asset('img/home/section_header-日治下的香港.svg') }}" alt="日治下的香港" class="img-fluid">
                            </div>
                        </article>
                    </a>
                </div>

                <div class="col-sm-6 col-md">
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
                    <div class="text-center mt-5">
                        <p>當我們走進這段歷史，看到的不只是戰役的勝敗，也是一座城市在極端困境中的選擇。有人在前線抵抗，有人在敵後傳遞情報；有人冒險營救他人，有人在飢餓、恐懼與壓迫中守護家人與鄰里。這些經歷共同構成香港抗戰記憶的一部分，也讓我們重新理解香港與中國抗戰之間的深刻連繫。
                        </p>
                        <p class="mb-0">今日回望，不是為了停留在苦難之中，而是為了保存仍會被遺忘的名字、地方與故事。願這個網站成為一個起點，讓更多人認識香港在二戰中的位置，也繼續追尋那些藏在村落、街道、檔案與口述記憶之中的歷史。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
