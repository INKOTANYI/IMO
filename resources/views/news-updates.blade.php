<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Izere Mubyeyi Organization - Latest News on Disability Inclusion"/>
    <meta name="keywords" content="news, disability, inclusion, education, health, advocacy, Rwanda"/>
    <meta name="author" content="Izere Mubyeyi Organization"/>
    <meta property="og:title" content="News Updates - Izere Mubyeyi Organization NGO"/>
    <meta property="og:description" content="Read the latest stories on disability inclusion, program milestones, and announcements from Izere Mubyeyi Organization."/>
    <meta property="og:image" content="{{ asset('images/bg/Logo-izere.png') }}"/>
    <meta property="og:url" content="{{ url('/news-updates') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <link rel="canonical" href="{{ url('/news-updates') }}"/>

    <!-- Page Title -->
    <title>News Updates - Izere Mubyeyi Organization NGO</title>

    <!-- Favicon and Touch Icons -->
    
    <!-- Stylesheet -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/javascript-plugins-bundle.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/js/menuzord/css/menuzord.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" async>

    <!-- Inline CSS -->
    <style>
        .section {
            position: relative;
        }
        .text-theme-colored1 {
            color: #0052A5 !important;
        }
        .text-theme-colored2 {
            background-color: #FFC107 !important;
            color: #fff !important;
        }
        .btn-theme-colored1 {
            background-color: #0052A5;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-theme-colored1:hover {
            background-color: #003d7a;
            transform: translateY(-2px);
        }
        .btn-theme-colored2 {
            background-color: #FFC107;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-theme-colored2:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }
        p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            font-weight: 400;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #fff, #F8F9FA);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 25px;
        }
        .content-section h4 {
            font-size: 1.6rem;
            font-weight: bold;
            color: #0052A5;
            margin-bottom: 20px;
            text-align: center;
        }
        .content-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }
        .content-section .news-date {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }
        .content-section .news-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #0052A5;
            margin-bottom: 10px;
        }
        .content-section .news-excerpt {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }
        .content-section .read-more {
            color: #FFC107;
            font-weight: 500;
            text-decoration: none;
        }
        .content-section .read-more:hover {
            text-decoration: underline;
            color: #e0a800;
        }
        /* Login Modal Styles */
        .login-modal .modal-content {
            background-color: #FFFFFF;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 82, 165, 0.3);
            border: none;
        }
        .login-modal .modal-header {
            background-color: #0052A5;
            border-radius: 15px 15px 0 0;
            padding: 20px;
            border-bottom: none;
        }
        .login-modal .modal-title {
            color: #FFFFFF;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .login-modal .modal-body {
            padding: 30px;
            background: linear-gradient(135deg, #FFFFFF, #F8F9FA);
        }
        .login-modal .form-control {
            border: 2px solid #009A49;
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 15px;
        }
        .login-modal .form-control:focus {
            border-color: #FFC107;
            box-shadow: 0 0 8px rgba(255, 193, 7, 0.3);
            outline: none;
        }
        .login-modal .btn-login {
            background-color: #0052A5;
            color: #FFFFFF;
            border-radius: 8px;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .login-modal .btn-login:hover {
            background-color: #FFC107;
            color: #0052A5;
            transform: translateY(-2px);
        }
        .login-modal .close {
            color: #FFFFFF;
            opacity: 0.8;
            font-size: 1.5rem;
            transition: opacity 0.3s ease;
        }
        .login-modal .close:hover {
            opacity: 1;
        }
        .login-modal .form-label {
            color: #0052A5;
            font-weight: 500;
            font-size: 0.95rem;
        }
        .login-modal .modal-footer {
            border-top: none;
            padding: 15px 30px;
            background-color: #F8F9FA;
            border-radius: 0 0 15px 15px;
        }
        .login-modal .forgot-password {
            color: #009A49;
            font-size: 0.9rem;
            text-decoration: none;
        }
        .login-modal .forgot-password:hover {
            color: #FFC107;
            text-decoration: underline;
        }
        .modal.fade .modal-dialog {
            transform: translate(0, -50px);
        }
        .modal.show .modal-dialog {
            transform: translate(0, 0);
            transition: transform 0.3s ease-out;
        }
        @media (max-width: 767px) {
            .card {
                margin-bottom: 15px;
            }
            .content-section h4 {
                font-size: 1.4rem;
            }
            .content-section .news-title {
                font-size: 1.2rem;
            }
            .footer-widget-area .col-lg-4 {
                margin-bottom: 25px;
            }
            .footer-widget-area .col-lg-4:not(:last-child) {
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                padding-bottom: 25px;
            }
        }
    </style>
</head>
<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
<div id="wrapper" class="clearfix">
    <!-- Header -->
    <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                        <ul class="element contact-info">
                            <li class="contact-phone"><i class="fas fa-phone font-icon sm-display-block"></i> Tel: +250786721626</li>
                            <li class="contact-email"><i class="fas fa-envelope font-icon sm-display-block"></i> info@izeremubyeyi.org</li>
                            <li class="contact-address"><i class="fas fa-map-marker-alt font-icon sm-display-block"></i> KK 35 Avenue, Kicukiro District</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed green">
                <div class="menuzord-container header-nav-container green">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col">
                                <div class="row header-nav-col-row">
                                    <div class="col-sm-auto align-self-center">
                                        <a class="menuzord-brand site-brand" href="{{ route('home') }}">
                                            <img class="logo-default logo-1x" src="{{ asset('images/bg/Logo-izere.png') }}" srcset="{{ asset('images/logo-wide@2x.png') }} 2x" alt="Izere Mubyeyi Organization Logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                        <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
                                            <ul id="main-nav" class="menuzord-menu">
                                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}" {{ Route::is('home') ? 'aria-current="page"' : '' }}>Home</a></li>
                                                <li class="{{ Route::is('our-founders', 'our-board', 'our-staff', 'our-values', 'our-history', 'mission-vision') ? 'active' : '' }}">
                                                    <a href="#">Who We Are</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('our-founders') }}" {{ Route::is('our-founders') ? 'aria-current="page"' : '' }}>Our Founders</a></li>
                                                        <li><a href="{{ route('our-board') }}" {{ Route::is('our-board') ? 'aria-current="page"' : '' }}>Our Board</a></li>
                                                        <li><a href="{{ route('our-staff') }}" {{ Route::is('our-staff') ? 'aria-current="page"' : '' }}>Our Staff</a></li>
                                                        <li><a href="{{ route('our-values') }}" {{ Route::is('our-values') ? 'aria-current="page"' : '' }}>Our Values</a></li>
                                                        <li><a href="{{ route('our-history') }}" {{ Route::is('our-history') ? 'aria-current="page"' : '' }}>Our History</a></li>
                                                        <li><a href="{{ route('mission-vision') }}" {{ Route::is('mission-vision') ? 'aria-current="page"' : '' }}>Our Mission and Vision</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('inclusive-education', 'health-care', 'capacity-building', 'research-advocacy', 'family-resilience', 'community-engagement') ? 'active' : '' }}">
                                                    <a href="#">What We Do</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('inclusive-education') }}" {{ Route::is('inclusive-education') ? 'aria-current="page"' : '' }}>Inclusive and Special Needs Education</a></li>
                                                        <li><a href="{{ route('health-care') }}" {{ Route::is('health-care') ? 'aria-current="page"' : '' }}>Essential Health Care</a></li>
                                                        <li><a href="{{ route('capacity-building') }}" {{ Route::is('capacity-building') ? 'aria-current="page"' : '' }}>Capacity Building</a></li>
                                                        <li><a href="{{ route('research-advocacy') }}" {{ Route::is('research-advocacy') ? 'aria-current="page"' : '' }}>Research and Advocacy</a></li>
                                                        <li><a href="{{ route('family-resilience') }}" {{ Route::is('family-resilience') ? 'aria-current="page"' : '' }}>Family Resilience</a></li>
                                                        <li><a href="{{ route('community-engagement') }}" {{ Route::is('community-engagement') ? 'aria-current="page"' : '' }}>Community Engagement</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('events.index', 'news-updates', 'publications', 'gallery') ? 'active' : '' }}">
                                                    <a href="#">Media</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('events.index') }}" {{ Route::is('events.index') ? 'aria-current="page"' : '' }}>Events</a></li>
                                                        <li><a href="{{ route('news-updates') }}" {{ Route::is('news-updates') ? 'aria-current="page"' : '' }}>News Updates</a></li>
                                                        <li><a href="{{ route('publications') }}" {{ Route::is('publications') ? 'aria-current="page"' : '' }}>Publications</a></li>
                                                        <li><a href="{{ route('gallery') }}" {{ Route::is('gallery') ? 'aria-current="page"' : '' }}>Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('careers', 'tenders') ? 'active' : '' }}">
                                                    <a href="#">Opportunities</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('careers') }}" {{ Route::is('careers') ? 'aria-current="page"' : '' }}>Careers</a></li>
                                                        <li><a href="{{ route('tenders') }}" {{ Route::is('tenders') ? 'aria-current="page"' : '' }}>Tenders</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}" {{ Route::is('contact-us') ? 'aria-current="page"' : '' }}>Contact</a></li>
                                                <li class="{{ Route::is('donate') ? 'active' : '' }}"><a href="{{ route('donate') }}" {{ Route::is('donate') ? 'aria-current="page"' : '' }}>Donate</a></li>
                                                <li class="{{ Route::is('volunteer') ? 'active' : '' }}"><a href="{{ route('volunteer') }}" {{ Route::is('volunteer') ? 'aria-current="page"' : '' }}>Volunteer</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row d-block d-xl-none">
                                    <div class="col-12">
                                        <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                                            <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable"></ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Modal -->
    <div class="modal fade login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Izere Mubyeyi</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login-form" action="{{ route('login') }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-login btn-block">Login</button>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="forgot-password">Register here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content" role="main">
        <!-- News Hero Section -->
        <section class="section" data-tm-bg-color="#0052A5">
            <div class="container pt-40 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-4">News Updates</h1>
                            <p class="text-white lead">Stay Informed on Our Impact</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Content Section -->
        <section class="section">
            <div class="container pt-20 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="content-section">
                                        <h4>News Updates</h4>
                                        <p>Latest stories on disability inclusion, our program milestones, and important announcements from Izere Mubyeyi Organization.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="section" data-tm-bg-color="#f2f3f5">
            <div class="container pt-60 pb-60">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-theme-colored1 mb-30">Stay Connected</h2>
                            <p class="lead mb-30">Want to stay updated on our latest news and initiatives? Contact us to join our newsletter or follow our journey.</p>
                            <a href="{{ route('contact-us') }}" class="btn btn-theme-colored1 btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('partials.footer-welcome')

    <!-- Footer Scripts -->
    <script src="{{ asset('assets/dist/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/custom.js') }}" defer></script>
</div>
</body>
</html>