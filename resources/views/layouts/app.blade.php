<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
        <div class="row" style="background-color: #c0c0c0;">
            <div class="col-2 offset-3" style="border-left: 1px solid #fff; text-align: center; font-size: 1.4em; color: #f0f0f0; padding: 5px;" ><i class="fas fa-phone-volume"></i> (1) 756 0060</div>
            <div class="col-2" style="border-left: 1px solid #fff; text-align: center; font-size: 1.4em; color: #f0f0f0; padding: 5px;"><i class="fas fa-phone-volume"></i> 300 203 5430</div>
            <div class="col-2" style="border-left: 1px solid #fff; border-right: 1px solid #fff; text-align: center; font-size: 1.4em; color: #f0f0f0; padding: 5px;"><i class="fab fa-whatsapp"></i> 304 484 8594</div>
        </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " data-toggle="dropdown"> <i class="fas fa-bars"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} [{{ Auth::user()->email }}]<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <ul style="margin: 5px;">|</ul>
                    <ul style="margin: 5px;"><i class="far fa-user-circle"></i></ul>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="display: block; margin: 0 auto;">
                        <img  src="{{ asset('img/logo.png') }}">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <ul style="margin: 5px;"><div style="border-right: 1px solid #000; text-align: center; font-size: 1.4em; padding: 5px;" >Buscar <i class="fas fa-search" style="margin-left: 5px; margin-right: 5px;"></i></div></ul>
                        <ul style="margin: 5px;"><div style="border-right: 1px solid #000; text-align: center; font-size: 1.4em; padding: 5px;" >Tiempo <i class="far fa-clock" style="margin-left: 5px; margin-right: 5px;"></i></div></ul>
                        <ul style="margin: 5px;"><div style="text-align: center; font-size: 1.4em; padding: 5px;" >Carrito <i class="fas fa-shopping-cart" style="margin-left: 5px; margin-right: 5px;"></i></div></ul>
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
