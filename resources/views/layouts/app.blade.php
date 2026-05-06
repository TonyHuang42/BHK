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
        <nav class="navbar navbar-expand-lg">
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
                                <li><a class="dropdown-item" href="{{ route('battle.before-the-storm') }}">戰前背景</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.eighteen-days-of-battle') }}">戰役經過</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.black-christmas') }}">黑色聖誕</a></li>
                                <li><a class="dropdown-item" href="{{ route('battle.wartime-timeline') }}">戰時時間線</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('guerrilla.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                游擊與抵抗
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('guerrilla.hk-kowloon-brigade') }}">港九大隊</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.guerrilla-warfare') }}">游擊戰</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.intelligence-and-rescue') }}">情報與營救</a></li>
                                <li><a class="dropdown-item" href="{{ route('guerrilla.underground-resistance') }}">敵後抵抗網絡</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('occupation.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                日治下的香港
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('occupation.occupation-rule') }}">佔領統治</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.survival-and-rationing') }}">生存與配給</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.economy-and-society') }}">經濟與社會</a></li>
                                <li><a class="dropdown-item" href="{{ route('occupation.everyday-life-wartime') }}">戰時日常</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('people.*') ? 'nav-link--current' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                人物與故事
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('people.resistance-figures') }}">抗戰人物</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.village-memories') }}">村落記憶</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.mutual-aid') }}">民間互助</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.rescue-stories') }}">救援故事</a></li>
                            </ul>
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
