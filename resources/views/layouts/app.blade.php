<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        :root {
            --bg: #fdfdfd;
            --highlight1: #ED4264;
            --highlight2: #FFEDBC;
            --color: #1a1e24;
            --font-number: Montserrat, Roboto, Helvetica, Arial, sans-serif;
            --font-head: "Space Mono", Consolas, Menlo, Monaco, "Courier New", monospace;
            --font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .list {
            list-style: none;
            width: 600px;
            max-width: 90%;
        }

        .item-card {
            display: flex;
            align-items: center;
            clear: both;
            counter-increment: list;
            padding-bottom: 4rem;
            font-size: 1.1rem;
            line-height: 1.375;
            position: relative;
        }

        .item-card:before {
            font: bold 1.25rem/1 var(--font-number);
            content: counter(list);
            flex: 0 0 2rem;
            height: 2rem;
            float: left;
            margin: 0 1.5rem 0.75rem 0;
            color: var(--bg);
            background: var(--highlight1) linear-gradient(to bottom right, var(--highlight1) 25%, var(--highlight2));
            text-shadow: 0 0 2px var(--highlight1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            shape-outside: ellipse();
            z-index: 1;
        }

        .item:after {
            width: 2.5rem;
            height: 2.5rem;
            position: absolute;
            top: 0;
            left: 0;
            content: "";
            background: var(--highlight1);
            z-index: -1;
            border-top-left-radius: 3px;
        }


        .headline {
            padding: 0 0 0 0;
            margin: 0 0 1rem 0;
            font-size: 22px;
            word-break: break-word;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{\Illuminate\Support\Facades\URL::asset('img/favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <style>
        .login {
            background-color: beige;
            padding: 16px 31px;
            font-weight: 700;
            color: black;
            font-size: 18px;
        }

        .register {
            background-color: beige;
            padding: 16px 31px;
            color: black;
            font-size: 18px;
            font-weight: 700;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} "/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}} "/>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}} "/>
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}} "/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}} "/>
    <title>AZScenter</title>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


</head>
<body>
<header class="header-section clearfix">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-md-left text-white">
                    Low prices on all
                </div>
                <div class="col-md-6 text-md-right">

                    {{--@if (Route::has('login'))
                        @auth
                            --}}{{--<a href="{{ url('/home') }}"
                               class="login">Вошел</a>--}}{{--
                            @guest
                                @if (Route::has('login'))

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif



                                --}}{{-- @if (Route::has('register'))
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                     </li>
                                 @endif--}}{{--
                            @else

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    {{ Auth::user()->name }}
                                </button>

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                     aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item" href="{{route('admin-home')}}">
                                                    {{ __('Главная') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>


                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            @endguest
                        @else
                            <a href="{{ route('login') }}"
                               class="login">Log in</a>

                            --}}{{-- @if (Route::has('register'))
                                 <a href="{{ route('register') }}"
                                    class="register">Register</a>
                             @endif--}}{{--
                        @endauth
                    @endif--}}
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar">
        <!-- Logo -->
        <a href="/" class="site-logo">
            AZSCenter
        </a>
        <div class="header-right">
            <div class="header-info-box">
                <div class="hib-icon">
                    <img src="{{\Illuminate\Support\Facades\URL::asset('img/icons/phone.png')}}" alt="" class="">
                </div>
                <div class="hib-text">
                    <h6>+546 990221 123</h6>
                    <p>contact@industryalinc.com</p>
                </div>
            </div>
            <div class="header-info-box">
                <div class="hib-icon">
                    <img src="img/icons/map-marker.png" alt="" class="">
                </div>
                <div class="hib-text">
                    <h6>Main Str, no 23</h6>
                    <p>NY, New York PK 23589</p>
                </div>
            </div>
            <button class="search-switch"><i class="fa fa-search"></i></button>
        </div>
        <!-- Menu -->
        <nav class="site-nav-menu">
            <ul>
                <li class="active"><a href="">Главная</a></li>
                <li><a href="">О нас</a></li>
                <li><a href="">Цены</a>
                    <ul class="sub-menu">
                        <li><a href="">Элементы</a></li>
                    </ul>
                </li>
                <li><a href="">Блог</a></li>
                <li><a href="">Контакты</a></li>


            </ul>
        </nav>

    </div>
</header>
<div id="app">
    {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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
    </nav>--}}

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Footer section -->
<footer class="footer-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget about-widget">
                    <img src="img/logo-light.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est
                        quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et
                        commodo interdum. </p>
                    <div class="footer-social">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-dribbble"></i></a>
                        <a href=""><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h2 class="fw-title">Useful Resources</h2>
                    <ul>
                        <li><a href="">Jobs Vacancies</a></li>
                        <li><a href="">Client Testimonials</a></li>
                        <li><a href="">Green Energy</a></li>
                        <li><a href="">Chemical Research</a></li>
                        <li><a href="">Oil Extractions</a></li>
                        <li><a href="">About our Work</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h2 class="fw-title">Our Solutions</h2>
                    <ul>
                        <li><a href="">Metal Industry</a></li>
                        <li><a href="">Agricultural Engineering</a></li>
                        <li><a href="">Green Energy</a></li>
                        <li><a href="">Chemical Research</a></li>
                        <li><a href="">Oil Extractions</a></li>
                        <li><a href="">Manufactoring</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-7">
                <div class="footer-widget">
                    <h2 class="fw-title">Contact Us</h2>
                    <div class="footer-info-box">
                        <div class="fib-icon">
                            <img src="img/icons/map-marker.png" alt="" class="">
                        </div>
                        <div class="fib-text">
                            <p>Main Str, no 23 NY,<br>New York PK 23589</p>
                        </div>
                    </div>
                    <div class="footer-info-box">
                        <div class="fib-icon">
                            <img src="img/icons/phone.png" alt="" class="">
                        </div>
                        <div class="fib-text">
                            <p>+546 990221 123<br>contact@industryalinc.com</p>
                        </div>
                    </div>
                    <form class="footer-search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-buttom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 p-0">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 p-0">
                    <ul class="footer-menu">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="solutions.html">Solutions</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--	<script src="js/circle-progress.min.js"></script>-->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>
