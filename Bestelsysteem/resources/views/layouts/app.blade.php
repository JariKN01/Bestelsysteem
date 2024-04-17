<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bestelsysteem') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white bg-gradient bg-opacity-25 shadow-sm">
            <div class="">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Bestelsysteem') }}</a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="d-flex">
                        <img class="h-25 w-25 border border-opacity-75 shadow-sm rounded" src="https://cdn.discordapp.com/attachments/1204338336047697980/1230096062707007488/cow.png?ex=6632133b&is=661f9e3b&hm=08470be27fd0d1fefdcfff25ec492a510c009c27a6a5d8da6022bdcbd92f68d4&">
                        <h4 class="ms-3 my-auto">Rik Bakker</h4>
                    </div>

                    <!-- Middle Side Of Navar -->
                    <img class="mx-auto w-25" href="{{ url('/') }}" src="https://cdn.discordapp.com/attachments/1204338336047697980/1230095705927061594/download.png?ex=663212e6&is=661f9de6&hm=8d33b1638a2e539c47a06540757333c01e895458e391fa5e1cc3f1df09c24869&">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
