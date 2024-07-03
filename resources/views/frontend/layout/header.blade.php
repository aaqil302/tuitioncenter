<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'home')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('frontend/css/pricing.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
        

    </head>

    <body>
        <div id="loadingBar" class="hide"></div>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar start -->
        <div class="container-fluid fixed-top" style="padding: 0;">
            <div class="container-fluid topbar d-none d-lg-block" style="padding: 0;">
                <div class="topbar-inner">
                    <div class="row gx-0">
                        <div class="col-lg-7 text-start">
                            <div class="h-100 d-inline-flex align-items-center me-4">
                                <span class="fa fa-phone-alt me-2 text-light"></span>
                                <a href="#" class="text-light"><span>+92301-9680302</span></a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="far fa-envelope me-2 text-light"></span>
                                <a  href="mailto:support@qurantuitioncenter.com" class="text-light"><span>support@qurantuitioncenter.com</span></a>
                            </div>
                            {{-- <div class="h-100 d-inline-flex align-items-center">
                                <span class="far fa-envelope me-2 text-dark"></span>
                                <a href="mailto:support@qurantuitioncenter.com"><span class="text-dark">support@qurantuitioncenter.com</span></a>
                            </div> --}}
                        </div>
                        <div class="col-lg-5 text-end">
                            <div class="h-100 d-inline-flex align-items-center">
                                <span class="text-light">Follow Us:</span>
                                <a class="text-light px-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="text-light px-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="text-light px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="text-light px-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="text-light ps-4" href="{{route('price-form')}}"><i class="fa fa-lock text-light me-1"></i> Signup/login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="padding: 0;">
                <nav class="navbar navbar-light navbar-expand-lg" style="max-height: 80px;">
                    <a href="{{route('index')}}" class="navbar-brand">
                        <img src="{{asset('frontend/img/logo.png')}}" alt="logo" style="height: 80px; max-width: 100%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav ms-lg-auto mx-xl-auto">
                            <a href="{{route('index')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>
                            <a href="{{route('price')}}" class="nav-item nav-link {{ Request::is('price') ? 'active' : '' }}">Price</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                                <div class="dropdown-menu m-0 rounded-0">
                                    <a href="{{route('madani-qaida-course')}}" class="dropdown-item {{ Request::is('madani-qaida-course') ? 'active' : '' }}">Madani Qaida Course</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('nazra-tul-quran')}}" class="dropdown-item {{ Request::is('nazra-tul-quran') ? 'active' : '' }}">Nazra-tul-Quran</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('hifz-ul-quran')}}" class="dropdown-item {{ Request::is('hifz-ul-quran') ? 'active' : '' }}">Hifz-ul-Quran</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('tarjuma-tul-quran')}}" class="dropdown-item {{ Request::is('tarjuma-tul-quran') ? 'active' : '' }}">Tarjuma-tul-Quran</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('tafsir-al-quran')}}" class="dropdown-item {{ Request::is('tafsir-al-quran') ? 'active' : '' }}">Tafsir-al-Quran</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('farz-uloom-course')}}" class="dropdown-item {{ Request::is('farz-uloom-course') ? 'active' : '' }}">Farz-Uloom Course</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('namaz-course')}}" class="dropdown-item {{ Request::is('namaz-course') ? 'active' : '' }}">Namaz Course</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('seerat-e-mustafa-course')}}" class="dropdown-item {{ Request::is('seerat-e-mustafa-course') ? 'active' : '' }}">Seerat-e-Mustafa Course</a>
                                </div>
                            </div>
                            <a href="{{route('contact')}}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Topbar End -->
        
