<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/templates/travel/assets/images/favicon.png">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Seo meta tags for Search Engine Optimization -->
        @yield('meta')
        <!-- Bootstrap and Jquery scripts -->
        <script src="/templates/travel/js/jquery-3.1.1.min.js"></script>
        <script src="/templates/travel/js/bootstrap.min.js"></script>
        <script src="/templates/travel/js/popper.min.js"></script>

        <!-- Aditional scripts -->
        <script src="/templates/travel/js/jquery.magnific-popup.min.js"></script>
        <script src="/templates/travel/js/smooth-scroll.min.js"></script>
        <script src="/templates/travel/js/jquery-ui.js"></script>
        <script src="/templates/travel/js/initslider.js"></script>
        <script src="/templates/travel/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/templates/travel/js/ofi.js"></script>

        <!-- Main scripts -->
        <script src="/templates/travel/js/main.js"></script>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/templates/travel/css/bootstrap.min.css">
        <link rel="stylesheet" href="/templates/travel/css/jquery-ui.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="/templates/travel/css/font-awesome-animation.min.css">
        <link rel="stylesheet" href="/templates/travel/css/magnific-popup.css">
        <link rel="stylesheet" href="/templates/travel/css/style.css" type="text/css">
    </head>

   <body class="home1 datepicker">
    <!-- navbar -->
    <div id="wrapper-navbar">
        <nav id="top" class="navbar py-3 fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand ml-sm-5" href="#"><img src="/templates/travel/assets/images/logo.png" alt="Du lịch Lý Sơn"></a>
            <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button> 
            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3 {{ request()->is('/') ? 'activemenu' : '' }}" href="{{ route('travel.index.index') }}">
                                Trang chủ
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-menu-right  ml-lg-0 ml-3 mr-3 my-lg-0 my-2 {{ request()->is('gioi-thieu') ? 'activemenu' : '' }}" href="{{ route('travel.index.about') }}">
                            Giới thiệu
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mr-3 open my-lg-0 my-2 ml-lg-0 ml-3 {{ request()->is('thue-xe*') ? 'activemenu' : '' }}" href="{{ route('travel.travel.index') }}">
                        Thuê xe
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="dropdown-divider d-lg-none"></div>
                        <a class="nav-link mr-3 my-lg-0 my-2 ml-lg-0 ml-3 {{ request()->is('tour*') ? 'activemenu' : '' }}" href="{{ route('travel.tour.index') }}">
                            Tours
                        </a>
                    </li>

                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-menu-right  ml-lg-0 ml-3 mr-3 my-lg-0 my-2 {{ request()->is('blog*') ? 'activemenu' : '' }}" href="{{ route('travel.post.index') }}" >
                            Tin tức
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-menu-right  ml-lg-0 ml-3 mr-3 my-lg-0 my-2 {{ request()->is('lien-he') ? 'activemenu' : '' }}" href="{{ route('travel.index.contact') }}">
                            Liên hệ
                        </a>
                    </li>

                </ul>               

            </div>        
        </nav>
    </div>