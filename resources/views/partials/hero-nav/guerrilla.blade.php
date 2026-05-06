<section class="hero">
    <img src="{{ asset('img/guerrilla-resistance/banner.png') }}" alt="游擊與抵抗" class="hero-img" style="object-position: 60% 90%;">
    <img src="{{ asset('img/home/section_header-游擊與抵抗.svg') }}" alt="游擊與抵抗" class="hero-title battle-of-hong-kong-hero-title">
</section>

<section class="border-bottom hero-subnav">
    <div class="container py-4">
        <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
            <a href="{{ route('guerrilla.hk-kowloon-brigade') }}" {!! request()->routeIs('guerrilla.hk-kowloon-brigade') ? 'aria-current="page"' : '' !!}>港九大隊</a>
            <a href="{{ route('guerrilla.guerrilla-warfare') }}" {!! request()->routeIs('guerrilla.guerrilla-warfare') ? 'aria-current="page"' : '' !!}>游擊戰</a>
            <a href="{{ route('guerrilla.intelligence-and-rescue') }}" {!! request()->routeIs('guerrilla.intelligence-and-rescue') ? 'aria-current="page"' : '' !!}>情報與營救</a>
            <a href="{{ route('guerrilla.underground-resistance') }}" {!! request()->routeIs('guerrilla.underground-resistance') ? 'aria-current="page"' : '' !!}>敵後抵抗網絡</a>
        </div>
    </div>
</section>
