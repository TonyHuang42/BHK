@extends('layouts.app')

@section('title', '日治下的香港')
@section('meta_description', '回顧三年零八個月的日治歲月：佔領統治的建立、市民的生存與配給、經濟與社會的變遷，以及戰時的日常生活紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/under-japanese-occupation/banner_日治下的香港.jpg') }}" alt="日治下的香港" class="hero-img under-japanese-occupation-hero-img">
        <img src="{{ asset('img/home/section_header-日治下的香港.svg') }}" alt="日治下的香港" class="hero-title right-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('occupation.index', ['tab' => 'occupation-rule']) }}" data-tab-link="occupation-rule">佔領統治</a>
                <a href="{{ route('occupation.index', ['tab' => 'survival-and-rationing']) }}" data-tab-link="survival-and-rationing">生存與配給</a>
                <a href="{{ route('occupation.index', ['tab' => 'economy-and-society']) }}" data-tab-link="economy-and-society">經濟與社會</a>
                <a href="{{ route('occupation.index', ['tab' => 'everyday-life-wartime']) }}" data-tab-link="everyday-life-wartime">戰時日常</a>
            </div>
        </div>
    </section>

    @include('under-japanese-occupation.occupation-rule')

    @include('under-japanese-occupation.survival-and-rationing')

    @include('under-japanese-occupation.economy-and-society')

    @include('under-japanese-occupation.everyday-life-wartime')

    @include('partials.accordion')
</main>
@endsection
