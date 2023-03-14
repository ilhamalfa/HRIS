<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">

    {{-- Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    {{-- Topbar Start --}}
    <nav class="topbar">
        <div class="nav-logo">
            <a href="">KaryaOne</a>
        </div>
        <div class="nav-extra">
            <a href="">
                <i data-feather="bell">1</i>
            </a>
            <a href="" onclick="event.preventDefault()">
                <i data-feather="menu" id="hamburger-menu">1</i>
            </a>
        </div>
    </nav>
    {{-- Topbar End --}}

    {{-- Sidebar Start --}}
    <nav class="sidebar">
        @if (Auth::user())
        <a href="">
            <i data-feather="home">1</i>
            <span>Dashboard</span>
        </a>
        <a href="">
            <i data-feather="folder">1</i>
            <span>Manage</span>
        </a>
        <a href="">
            <i data-feather="mail">1</i>
            <span>Letter</span>
        </a>
        <a href="">
            <i data-feather="settings">1</i>
            <span>Settings</span>
        </a>
        @endif
        @guest
            @if (Route::has('login') && Route::has('register'))
            <a href="{{ route('login') }}">
                <i data-feather="log-in">1</i>
                <span>Login</span>
            </a>
            <a href="{{ route('register') }}">
                <i data-feather="file-text">1</i>
                <span>Register</span>
            </a>
            @endif
            @else
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i data-feather="log-out">1</i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </nav>
    {{-- Sidebar End --}}

    {{-- Main Start --}}
    <main>
        @yield('content')
    </main>
    {{-- Main End --}}

    {{-- Footer Start --}}
    <footer>

    </footer>
    {{-- Footer End --}}

    {{-- Feather Icons --}}
    <script>
        feather.replace()
    </script>

    {{-- Hamburger Menu Animation --}}
    <script src="{{ asset('layout/js/script.js') }}"></script>
</body>
</html>