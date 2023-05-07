<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('welcome.name', 'Ever After') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="welcomePage">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm  ">
            <div class="container" >
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-3" href="/">
                <img src="./img/Logo.png" alt="Logo" width="130" height="140" class="d-inline-block align-text-center">
                EVER AFTER: A StuDate Website for Me & You
                </a>
  </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container collapse navbar-collapse w-50 p-3 fs-4 rounded-4" id="navbarSupportedContent" style="background-color: #F8B0B0">
                    <div class="fw-bold m-auto ps-5">Have an account?</div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="nav-link fs-3 btn text-white m-0 pt-0 pb-0" role="button" style="background-color: #7C2222" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            <!-- <div class="vr opacity-25" ></div> -->
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fs-3 btn text-white m-0 pt-0 pb-0" role="button" style="background-color: #7C2222" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown fw-bold fs-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fw-bold fs-5" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item fw-bold fs-5" href="/profile">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item fw-bold fs-5" href="/preference">
                                        {{ __('Preference') }}
                                    </a>

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
            
            <div class="container-fluid d-flex align-items-center homePage">
                <div class="col-5 text-end text-Black pt-5 mt-5" style="height: 600px">
                    <img src="./img/ChatPic1.png" style="width: 450px" style="height: 600px">
                </div> 
            </div>
            
            
        <main class="">
            @yield('contents')
        </main>
    </div>
</body>
</html>
