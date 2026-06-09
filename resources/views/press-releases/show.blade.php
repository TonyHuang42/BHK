@extends('layouts.app')

@section('title', $pressRelease->localized('title') . ' | 香港淪陷史')
@section('meta_description', $pressRelease->localized('summary'))

@section('content')
    <main>
        <img src="{{ asset('storage/' . $pressRelease->featured_image) }}" alt="{{ $pressRelease->localized('title') }}" class="press-release-hero-img" aria-hidden="true">

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto press-release-content">
                        {{-- <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image"> --}}
                        <h3 class="mb-3">{{ $pressRelease->localized('title') }}</h3>
                        <p class="mb-5">
                            @if ($pressRelease->category)
                                <span class="press-release-card-category">{{ $pressRelease->category->localized('name') }}</span>
                                <span class="mx-1">|</span>
                            @endif
                            <span>{{ $pressRelease->date->format('Y-m-d') }}</span>
                        </p>

                        {!! $pressRelease->localized('body') !!}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
