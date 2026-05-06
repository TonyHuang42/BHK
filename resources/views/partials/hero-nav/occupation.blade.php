<section class="hero">
    <img src="{{ asset('img/under-japanese-occupation/banner.png') }}" alt="日治下的香港" class="hero-img under-japanese-occupation-hero-img">
    <img src="{{ asset('img/home/section_header-日治下的香港.svg') }}" alt="日治下的香港" class="hero-title under-japanese-occupation-hero-title">
</section>

<section class="border-bottom hero-subnav">
    <div class="container py-4">
        <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
            <a href="{{ route('occupation.occupation-rule') }}" {!! request()->routeIs('occupation.occupation-rule') ? 'aria-current="page"' : '' !!}>佔領統治</a>
            <a href="{{ route('occupation.survival-and-rationing') }}" {!! request()->routeIs('occupation.survival-and-rationing') ? 'aria-current="page"' : '' !!}>生存與配給</a>
            <a href="{{ route('occupation.economy-and-society') }}" {!! request()->routeIs('occupation.economy-and-society') ? 'aria-current="page"' : '' !!}>經濟與社會</a>
            <a href="{{ route('occupation.everyday-life-wartime') }}" {!! request()->routeIs('occupation.everyday-life-wartime') ? 'aria-current="page"' : '' !!}>戰時日常</a>
        </div>
    </div>
</section>
