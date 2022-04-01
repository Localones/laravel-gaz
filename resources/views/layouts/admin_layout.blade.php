<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin/images/favicon-32x32.png')}}" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
{{--    <link href="{{asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />--}}
    <!-- Bootstrap CSS -->

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/bootstrap-extended.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{asset('admin/css/pace.min.css')}}" rel="stylesheet"/>

    <!--Theme Styles-->
    <link href="{{asset('admin/css/dark-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/light-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/semi-dark.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/header-colors.css')}}" rel="stylesheet"/>

    <title>@yield('title')</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3">
                <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i>
                </div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i>
                </div>
            </form>
            <div class="top-navbar-right ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item search-toggle-icon">
                        <a class="nav-link" href="#">
                            <div class="">
                                <i class="bi bi-search"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-user-setting">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center">
                                <img src="{{asset('admin/images/avatars/avatar-1.png')}}" class="user-img" alt="">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('admin/images/avatars/avatar-1.png')}}" alt=""
                                             class="rounded-circle" width="54" height="54">
                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                            <small class="mb-0 dropdown-user-designation text-secondary">HR
                                                Manager</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages-user-profile.html">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-person-fill"></i></div>
                                        <div class="ms-3"><span>Profile</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-gear-fill"></i></div>
                                        <div class="ms-3"><span>Setting</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index2.html">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-speedometer"></i></div>
                                        <div class="ms-3"><span>Dashboard</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-piggy-bank-fill"></i></div>
                                        <div class="ms-3"><span>Earnings</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-cloud-arrow-down-fill"></i></div>
                                        <div class="ms-3"><span>Downloads</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-lock-fill"></i></div>
                                        <div class="ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="projects">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 gx-2">
                                <div class="col">
                                    <a href="ecommerce-orders.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-purple">
                                                <i class="bi bi-basket2-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Orders</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-info">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-products-grid.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-success">
                                                <i class="bi bi-trophy-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Products</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="component-media-object.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-danger">
                                                <i class="bi bi-collection-play-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Media</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="pages-user-profile.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-warning">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Account</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-voilet">
                                                <i class="bi bi-file-earmark-text-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Docs</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-orders-detail.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-branding">
                                                <i class="bi bi-credit-card-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Payment</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-desert">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Events</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-gradient-amour">
                                                <i class="bi bi-book-half"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Story</p>
                                        </div>
                                    </a>
                                </div>
                            </div><!--end row-->
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <h4 class="logo-text">Admin</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Home</div>
                </a>
                <ul>
                    <li><a href="{{route('home-page')}}"><i class="bi bi-circle"></i>Главная</a>
                    </li>
                    {{--<li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
                    </li>--}}
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                    <div class="menu-title">Карточки</div>
                </a>
                <ul>
                    <li><a href="{{route('card.index')}}"><i class="bi bi-circle"></i>Информация</a></li>
                    <li><a href="{{route('card.create')}}"><i class="bi bi-circle"></i>Добавить</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                    <div class="menu-title">Заявки</div>
                </a>
                <ul>
                    <li><a href="{{route('card.index')}}"><i class="bi bi-circle"></i>Информация</a></li>
                </ul>
            </li>
        </ul>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

        @yield('admin-content')

    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
             tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                           value="option1" checked>
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                           value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                           value="option3">
                    <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                           value="option3">
                    <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                </div>
                <hr/>
                <h6 class="mb-0">Header Colors</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/js/pace.min.js')}}"></script>
<script src="{{asset('admin/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{asset('admin/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{asset('admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>

<script src="{{asset('admin/js/table-datatable.js')}}"></script>
<script src="{{asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
{{--<script src="{{asset('admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>--}}

<!--app-->
<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{asset('admin/js/index.js')}}"></script>
<script>
    new PerfectScrollbar(".best-product")
</script>


</body>

</html>
