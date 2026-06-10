@extends('layouts.app')

@section('title', '游擊與抵抗')
@section('meta_description', '回顧香港淪陷後的敵後抗戰：港九大隊的整編、游擊戰術、情報與營救行動，以及深植民間的抵抗網絡。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/guerrilla-resistance/banner_游擊與抵抗.jpg') }}" alt="游擊與抵抗" class="hero-img" style="object-position: 60% 90%;">
        <img src="{{ asset('img/home/section_header-游擊與抵抗.svg') }}" alt="游擊與抵抗" class="hero-title" style="top: 45%; left: 13%;">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('guerrilla.index', ['tab' => 'hk-kowloon-brigade']) }}" data-tab-link="hk-kowloon-brigade">{{ __('guerrilla.guerrilla_warfare.guerrilla_tab_1') }}</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'guerrilla-warfare']) }}" data-tab-link="guerrilla-warfare">{{ __('guerrilla.guerrilla_warfare.guerrilla_tab_2') }}</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'intelligence-and-rescue']) }}" data-tab-link="intelligence-and-rescue">{{ __('guerrilla.guerrilla_warfare.guerrilla_tab_3') }}</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'underground-resistance']) }}" data-tab-link="underground-resistance">{{ __('guerrilla.guerrilla_warfare.guerrilla_tab_4') }}</a>
            </div>
        </div>
    </section>

    @include('guerrilla-resistance.hk-kowloon-brigade')

    @include('guerrilla-resistance.guerrilla-warfare')

    @include('guerrilla-resistance.intelligence-and-rescue')

    @include('guerrilla-resistance.underground-resistance')

    @include('partials.accordion')
</main>
@endsection
