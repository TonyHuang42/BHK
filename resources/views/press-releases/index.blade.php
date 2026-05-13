@extends('layouts.app')

@section('title', '新聞稿 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的最新新聞稿與公告。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner.jpg') }}" alt="" class="hero-img" aria-hidden="true">
    </section>

    <section class="section-padding">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-0">新聞稿</h3>
                    </div>
                </div>
            </div> --}}

            <livewire:press-release-index />
        </div>
    </section>
</main>
@endsection
