<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Page</title>

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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Fake News Detector
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('/home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('goto-home').submit();">
                                        {{ __('Home') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/profile/edit') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('edit-profile').submit();">
                                        {{ __('Edit Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/profile/password') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('edit-password').submit();">
                                        {{ __('Edit Password') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/two-factor') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('authenticate').submit();">
                                        {{ __('Two Factor Authentication') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="authenticate" action="{{ url('/two-factor') }}" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="goto-home" action="{{ url('/home') }}" class="d-none">
                                        @csrf
                                    </form>
                                    
                                    <form id="edit-profile" action="{{ url('/profile/edit') }}" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="edit-password" action="{{ url('/profile/password') }}" class="d-none">
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
