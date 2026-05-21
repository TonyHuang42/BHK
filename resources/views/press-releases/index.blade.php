@extends('layouts.app')

@section('title', '新聞稿 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的最新新聞稿與公告。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/press-release/banner_新聞稿.jpg') }}" alt="" class="hero-img" aria-hidden="true" style="object-position: 5% center;">
        <img src="{{ asset('img/press-release/section_header_新聞稿.svg') }}" alt="人物與故事" class="hero-title press-release-hero-title" style="top: 45%; left: 25%;">
    </section>

    <section class="section-padding">
        <div class="container">
            <livewire:press-release-index />
        </div>
    </section>
</main>
@endsection
