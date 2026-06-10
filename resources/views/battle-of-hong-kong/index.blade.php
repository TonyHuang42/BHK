@extends('layouts.app')

@section('title', '香港保衛戰')
@section('meta_description', '回顧1941年香港保衛戰的歷史脈絡，從戰前背景、十八日戰事經過到黑色聖誕投降，以及戰時時間線的完整紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner_香港保衛戰.jpg') }}" alt="香港保衛戰" class="hero-img" aria-hidden="true" style="object-position: 55% center;">
        <img src="{{ asset('img/home/section_header-香港保衛戰.svg') }}" alt="香港保衛戰" class="hero-title" style="top: 40%; left: 7%;">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('battle.index', ['tab' => 'before-the-storm']) }}" data-tab-link="before-the-storm">{{ __('battle.before_storm.battle_tab_1') }}</a>
                <a href="{{ route('battle.index', ['tab' => 'eighteen-days-of-battle']) }}" data-tab-link="eighteen-days-of-battle">{{ __('battle.before_storm.battle_tab_2') }}</a>
                <a href="{{ route('battle.index', ['tab' => 'black-christmas']) }}" data-tab-link="black-christmas">{{ __('battle.before_storm.battle_tab_3') }}</a>
                <a href="{{ route('battle.index', ['tab' => 'wartime-timeline']) }}" data-tab-link="wartime-timeline">{{ __('battle.before_storm.battle_tab_4') }}</a>
            </div>
        </div>
    </section>

    @include('battle-of-hong-kong.before-the-storm')

    @include('battle-of-hong-kong.eighteen-days-of-battle')

    @include('battle-of-hong-kong.black-christmas')

    @include('battle-of-hong-kong.wartime-timeline')

    @include('partials.accordion')
</main>
@endsection
