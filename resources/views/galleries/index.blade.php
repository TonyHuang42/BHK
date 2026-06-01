@extends('layouts.app')

@section('title', '相冊 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的相冊集，回顧戰時與淪陷時期的影像與歷史紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/gallery/banner_相冊.jpg') }}" alt="" class="hero-img" aria-hidden="true" style="object-position: 100% center;">
        <img src="{{ asset('img/gallery/section_header_相冊.svg') }}" alt="人物與故事" class="hero-title gallery-hero-title">
    </section>

    <section class="section-padding">
        <div class="container">
            <livewire:gallery-image-grid />
        </div>
    </section>
</main>
@endsection
