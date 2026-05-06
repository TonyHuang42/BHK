<section class="hero">
    <img src="{{ asset('img/people-and-stories/banner.png') }}" alt="人物與故事" class="hero-img" style="object-position: 35% center;">
    <img src="{{ asset('img/home/section_header-人物與故事.svg') }}" alt="人物與故事" class="hero-title under-japanese-occupation-hero-title">
</section>

<section class="border-bottom hero-subnav">
    <div class="container py-4">
        <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
            <a href="{{ route('people.resistance-figures') }}" {!! request()->routeIs('people.resistance-figures') ? 'aria-current="page"' : '' !!}>抗戰人物</a>
            <a href="{{ route('people.village-memories') }}" {!! request()->routeIs('people.village-memories') ? 'aria-current="page"' : '' !!}>村落記憶</a>
            <a href="{{ route('people.mutual-aid') }}" {!! request()->routeIs('people.mutual-aid') ? 'aria-current="page"' : '' !!}>民間互助</a>
            <a href="{{ route('people.rescue-stories') }}" {!! request()->routeIs('people.rescue-stories') ? 'aria-current="page"' : '' !!}>救援故事</a>
        </div>
    </div>
</section>
