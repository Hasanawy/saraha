

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
       
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
        
    </head>
    <body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section start -->
    

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel nav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('messages') }}">
                    Saraha
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">{{ __('About Us') }}</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/contact">{{ __('Contact Us') }}</a>
                            </li>
                        @else
                            <li class="nav-link"><a href="{{route('messages')}}">Messages</a></li>
                            <li class="nav-link"><a href="/profile/{{Auth::user()->id}}">Profile</a></li>
                            <li class="nav-link"><a href="{{route('messages')}}">Settings</a></li>
                            <li class="nav-link"><a href="{{route('messages')}}">About Us</a></li>
                            <li class="nav-link"><a href="{{route('messages')}}">Contact Us</a></li>
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


    <!-- Hero section start -->
    <section class="hero-section sec">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
                <div class="hs-text  text-center">
                    <h2 class="hs-title logo">Saraha</h2>
                    <p class="hs-des">Send Your Massage <br>& No One Know!</p>
                    <a href = "{{route('login')}}" class = "btn btn-primary mybtn hs-des">Sign In</a>
                </div>
            </div>
            <div class="hs-item set-bg text-center sp-pad" data-setbg="img/hero-slider/2.jpg">
                <div class="hs-text">
                    <h2 class="hs-title logo">Saraha</h2>
                    <p class="hs-des">Don't Have An Account<br>No Problem !</p>
                    <a href = "{{route('register')}}" class = "btn btn-primary mybtn hs-des">Sign Up</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    </div>
    <!-- Intro section start -->


         
         <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
         <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
         <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
         <script src="{{ asset('js/mixitup.min.js') }}" defer></script>
         <script src="{{ asset('js/circle-progress.min.js') }}" defer></script>
         <script src="{{ asset('js/main.js') }}" defer></script>

    





</body>
</html>
