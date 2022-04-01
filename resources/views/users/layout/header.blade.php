<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

        .list-card {
            padding-left: 0 !important;
            list-style: none;
            width: 600px;
            max-width: 90%;
        }

        .item-card {
            display: flex;
            align-items: center;
            clear: both;
            counter-increment: list;
            font-size: 1.1rem;
            line-height: 1.375;
            position: relative;
        }

        .item-card:before {
            font: bold 1.1rem/1 var(--font-number);
            content: counter(list);
            flex: 0 0 1.7rem;
            height: 1.7rem;
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
            font-size: 19px;
            word-break: break-word;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{\Illuminate\Support\Facades\URL::asset('img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Stylesheets -->
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

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
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

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="register">Register</a>
                            @endif
                        @endauth
                    @endif--}}
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar">
        <!-- Logo -->
        <a href="" class="site-logo" style="font-size: 36px; font-weight: 900; color: black; padding-top: 10px;">
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
