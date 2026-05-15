@extends('layouts.app')

@section('title', '人物與故事')
@section('meta_description', '回顧香港抗戰人物、村落記憶、民間互助與救援故事，看見普通人在危難中的選擇與抵抗。')

@section('content')
<main class="people-and-stories">
    <section class="hero">
        <img src="{{ asset('img/people-and-stories/banner_人物與故事.jpg') }}" alt="人物與故事" class="hero-img" style="object-position: 100% top;">
        <img src="{{ asset('img/home/section_header-人物與故事.svg') }}" alt="人物與故事" class="hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('people.index', ['tab' => 'resistance-figures']) }}" data-tab-link="resistance-figures">抗戰人物</a>
                <a href="{{ route('people.index', ['tab' => 'village-memories']) }}" data-tab-link="village-memories">村落記憶</a>
                <a href="{{ route('people.index', ['tab' => 'mutual-aid']) }}" data-tab-link="mutual-aid">民間互助</a>
                <a href="{{ route('people.index', ['tab' => 'rescue-stories']) }}" data-tab-link="rescue-stories">救援故事</a>
            </div>
        </div>
    </section>

    @include('people-and-stories.resistance-figures')

    @include('people-and-stories.village-memories')

    @include('people-and-stories.mutual-aid')

    @include('people-and-stories.rescue-stories')

    @include('partials.accordion')
</main>
@endsection
