@extends('layouts.app')

@section('title', $gallery->title . ' | 香港淪陷史')
@section('meta_description', $gallery->title . ' 相冊')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/gallery/banner_相冊.jpg') }}" alt="" class="hero-img" aria-hidden="true" style="object-position: 100% center;">
        <img src="{{ asset('img/gallery/section_header_相冊.svg') }}" alt="相冊" class="hero-title gallery-hero-title">
    </section>

    <section class="section-padding">
        <div class="container">
            {{-- <a href="{{ route('galleries.index') }}" class="gallery-show-back">&larr; 返回相冊</a> --}}
            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
            <h3 class="text-center mb-5">{{ $gallery->title }}</h3>
            <livewire:gallery-show :gallery="$gallery" />
        </div>
    </section>
</main>
@endsection
