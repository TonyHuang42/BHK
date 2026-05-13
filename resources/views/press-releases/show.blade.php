@extends('layouts.app')

@section('title', $pressRelease->title . ' | 香港淪陷史')
@section('meta_description', $pressRelease->summary)

@section('content')
    <main>
        <img src="{{ asset('storage/' . $pressRelease->thumbnail) }}" alt="{{ $pressRelease->title }}" class="press-release-hero-img" aria-hidden="true">

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto press-release-content top-padding-sm">
                        {{-- <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image"> --}}
                        <h2 class="mb-3">{{ $pressRelease->title }}</h2>
                        <p class="small mb-5">
                            @if ($pressRelease->category)
                                <span class="press-release-card-category">{{ $pressRelease->category->name }}</span>
                                <span class="mx-1">|</span>
                            @endif
                            <span>{{ $pressRelease->date->format('Y-m-d') }}</span>
                        </p>

                        {!! $pressRelease->body !!}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
