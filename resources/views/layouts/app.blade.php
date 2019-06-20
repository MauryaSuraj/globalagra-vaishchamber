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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row py-1">
                <div class="col-md">
                    <div class="row">
                        <div class="col-md">
                            <img src="https://image.flaticon.com/icons/svg/134/134951.svg" style="width: 20px" alt=""> <strong class="pl-2">: +91-9873927287</strong>
                        </div>
                        <div class="col-md">
                            <img src="https://image.flaticon.com/icons/svg/321/321817.svg" style="width: 20px" alt=""> <strong class="pl-2">: info@globalagra-vaishchamber.com</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <div class="bg-facebook">
                            <img src="https://image.flaticon.com/icons/svg/160/160154.svg" alt="" class="socialicon">
                        </div>
                        <div class="bg-twitter">
                            <img src="https://image.flaticon.com/icons/svg/134/134099.svg" alt="" class="socialicon">
                        </div>
                        <div class="bg-skype">
                            <img src="https://image.flaticon.com/icons/svg/134/134086.svg" alt="" class="socialicon">
                        </div>
                        <div class="bg-linkdin">
                            <img src="https://image.flaticon.com/icons/svg/126/126738.svg" alt="" class="socialicon">
                        </div>
                        <div class="bg-youtube">
                            <img src="https://image.flaticon.com/icons/svg/134/134141.svg" alt="" class="socialicon">
                        </div>
                        <div class="bg-gplus">
                            <img src="https://image.flaticon.com/icons/svg/1051/1051335.svg" alt="" class="socialicon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    <img src="http://globalagra-vaishchamber.com/wp-content/uploads/2018/02/logo2-e1557846477241.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('index') }}" class="nav-link">{{ _('Home') }}</a>
                            </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">{{ _('About') }}</a>
                        </li>
                            <li class="nav-item">
                                <a href="{{ route('supporter') }}" class="nav-link"> {{ _('Supporter') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">{{ _('Contact') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="my-5">
            @yield('content')
        </main>
        <footer class="d-flex justify-content-center bg-dark p-5 text-white">
            <a href="/" class="text-white">All Right Reserved  {{ config('app-name', 'Global Agra Vaishchamber') }}</a>
        </footer>
    </div>
</body>
</html>
