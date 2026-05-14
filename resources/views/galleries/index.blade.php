@extends('layouts.app')

@section('title', '相冊 | 香港淪陷史')
@section('meta_description', '瀏覽香港淪陷史的相冊集，回顧戰時與淪陷時期的影像與歷史紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/gallery/banner_相冊.jpg') }}" alt="" class="hero-img" aria-hidden="true">
    </section>

    <section class="section-padding">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3 class="mb-0">相冊</h3>
                    </div>
                </div>
            </div> --}}

            <livewire:gallery-index />
        </div>
    </section>
</main>
@endsection
