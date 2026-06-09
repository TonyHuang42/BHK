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

    @livewireStyles
</head>

<body>

<header>
    
<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Logo -->
        <a class="navbar-brand me-0 d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('img/home/logo.svg') }}" alt="logo" class="logo">
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-end w-100 gap-2">

                <!-- Battle -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('battle.*') ? 'nav-link--current' : '' }}"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('messages.battle') }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'before-the-storm']) }}">{{ __('messages.battle_dropdown_1') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'eighteen-days-of-battle']) }}">{{ __('messages.battle_dropdown_2') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'black-christmas']) }}">{{ __('messages.battle_dropdown_3') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('battle.index', ['tab' => 'wartime-timeline']) }}">{{ __('messages.battle_dropdown_4') }}</a></li>
                    </ul>
                </li>

              <!-- Guerrilla -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('guerrilla.*') ? 'nav-link--current' : '' }}"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('messages.guerrilla') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'hk-kowloon-brigade']) }}">{{ __('messages.guerrilla_dropdown_1') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'guerrilla-warfare']) }}">{{ __('messages.guerrilla_dropdown_2') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'intelligence-and-rescue']) }}">{{ __('messages.guerrilla_dropdown_3') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('guerrilla.index', ['tab' => 'underground-resistance']) }}">{{ __('messages.guerrilla_dropdown_4') }}</a></li>
                    </ul>
                </li>

                <!-- Occupation -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('occupation.*') ? 'nav-link--current' : '' }}"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('messages.occupation') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'occupation-rule']) }}">{{ __('messages.occupation_dropdown_1') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'survival-and-rationing']) }}">{{ __('messages.occupation_dropdown_2') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'economy-and-society']) }}">{{ __('messages.occupation_dropdown_3') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('occupation.index', ['tab' => 'everyday-life-wartime']) }}">{{ __('messages.occupation_dropdown_4') }}</a></li>
                    </ul>
                </li>

                <!-- People -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('people.*') ? 'nav-link--current' : '' }}"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ __('messages.people') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'resistance-figures']) }}">{{ __('messages.people_dropdown_1') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'village-memories']) }}">{{ __('messages.people_dropdown_2') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'mutual-aid']) }}">{{ __('messages.people_dropdown_3') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('people.index', ['tab' => 'rescue-stories']) }}">{{ __('messages.people_dropdown_4') }}</a></li>
                    </ul>
                </li>

                <!-- Gallery -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galleries.*') ? 'nav-link--current' : '' }}" href="{{ route('galleries.index') }}">
                        {{ __('messages.gallery') }}
                    </a>
                </li>

                <!-- Press -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('press-releases.*') ? 'nav-link--current' : '' }}" href="{{ route('press-releases.index') }}">
                        {{ __('messages.press') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle="dropdown">
                        {{ __('messages.contact') }}
                    </a>
                     <div class="dropdown-menu dropdown-menu-end contact-popup-bg">
                                <button type="button" class="btn-close" style="font-size: 0.8rem; position: absolute; top: 16px; right: 16px;" aria-label="Close" onclick="this.closest('.dropdown').querySelector('.nav-link').click()"></button>
                                <div class="contact-popup">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h3 class="fw-bold mb-1" style="color:#692626;">{{ __('messages.contact') }}</h3>
                                    </div>
                                    <div style="margin-left: 225px;">
                                        <p class="mb-3 fw-normal">{{ __('messages.contact_label') }}</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><strong>{{ __('messages.contact_mail') }}</strong> <a href="mailto:inquiry@battle-of-hk.com" class="text-decoration-none fw-normal" style="color: #672727;">inquiry@battle-of-hk.com</a></li>
                                            {{-- <li><strong>電話：</strong> <a href="tel:+12345678" class="text-decoration-none">+1234 5678</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </li>

                <!-- Language Switch (STATIC) -->
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    🌐 {{ app()->getLocale() }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('lang.switch', 'zh') }}">
                            中文
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}">
                            English
                        </a>
                    </li>
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
            <div>© {{ date('Y') }} {{ __('messages.footer_copy_right') }}</div>
        </div>
    </div>
</footer>

@livewireScripts
</body>
</html>
