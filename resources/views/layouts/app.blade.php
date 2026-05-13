<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Description -->
    <title>@yield('title', '香港淪陷史：保衛戰、日治歲月與抗日抵抗')</title>
    <meta name="description" content="@yield('meta_description', '回顧香港在二戰中的歷史脈絡，涵蓋香港保衛戰、三年零八個月日治統治、敵後游擊行動及人物故事，認識戰火下香港人的抵抗與記憶。')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('img/favicon/android-chrome-512x512.png') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-xxl">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand me-5 d-flex align-items-center gap-2" href="{{ route('home') }}">
                    <img src="{{ asset('img/home/logo.svg') }}" alt="logo" class="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-end w-100 gap-0 column-gap-4">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'nav-link--current' : '' }}" href="{{ route('home') }}">
                                主頁
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('battle.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                香港保衛戰
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'before-the-storm']) }}">戰前背景</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'eighteen-days-of-battle']) }}">戰役經過</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'black-christmas']) }}">黑色聖誕</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'wartime-timeline']) }}">戰時時間線</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('guerrilla.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                游擊與抵抗
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'hk-kowloon-brigade']) }}">港九大隊</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'guerrilla-warfare']) }}">游擊戰</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'intelligence-and-rescue']) }}">情報與營救</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'underground-resistance']) }}">敵後抵抗網絡</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('occupation.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                日治下的香港
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'occupation-rule']) }}">佔領統治</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'survival-and-rationing']) }}">生存與配給</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'economy-and-society']) }}">經濟與社會</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'everyday-life-wartime']) }}">戰時日常</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('people.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                人物與故事
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'resistance-figures']) }}">抗戰人物</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'village-memories']) }}">村落記憶</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'mutual-aid']) }}">民間互助</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'rescue-stories']) }}">救援故事</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('galleries.*') ? 'nav-link--current' : '' }}" href="{{ route('galleries.index') }}">
                                相冊
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('press-releases.*') ? 'nav-link--current' : '' }}" href="{{ route('press-releases.index') }}">
                                新聞稿
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                聯繫我們
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-3 shadow-sm border" style="width: 320px;">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h6 class="mb-0 fw-bold">聯繫我們</h6>
                                    <button type="button" class="btn-close text-reset" style="font-size: 0.8rem;" aria-label="Close" onclick="this.closest('.dropdown').querySelector('.nav-link').click()"></button>
                                </div>
                                <p class="mb-3 text-muted small">聯繫我們 聯繫我們 聯繫我們 聯繫我們：</p>
                                <ul class="list-unstyled mb-0 small">
                                    <li class="mb-2"><strong>電郵：</strong> <a href="mailto:info@example.com" class="text-decoration-none">info@example.com</a></li>
                                    {{-- <li><strong>電話：</strong> <a href="tel:+12345678" class="text-decoration-none">+1234 5678</a></li> --}}
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="d-flex align-items-center">
        <div class="container">
            <div class="copyright">
                <div>© {{ date('Y') }} 香港抗戰歷史 版權所有</div>
            </div>
        </div>
    </footer>
</body>

</html>
