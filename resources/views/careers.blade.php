<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Izere Mubyeyi Organization - Careers for Passionate Professionals"/>
    <meta name="keywords" content="careers, jobs, disability, inclusion, education, health, advocacy, Rwanda"/>
    <meta name="author" content="Izere Mubyeyi Organization"/>
    <meta property="og:title" content="Careers - Izere Mubyeyi Organization NGO"/>
    <meta property="og:description" content="Join Izere Mubyeyi Organization to transform lives through inclusive education, healthcare, family empowerment, research, advocacy, and community engagement."/>
    <meta property="og:image" content="{{ asset('images/bg/Logo-izere.png') }}"/>
    <meta property="og:url" content="{{ url('/careers') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <link rel="canonical" href="{{ url('/careers') }}"/>

    <!-- Page Title -->
    <title>Careers - Izere Mubyeyi Organization NGO</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" sizes="72x72" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" sizes="114x114" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" sizes="144x144" rel="apple-touch-icon">

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
        .content-section ul {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
            padding-left: 20px;
        }
        .content-section ul li {
            margin-bottom: 8px;
        }
        .content-section ul li i {
            color: #FFC107;
            margin-right: 10px;
        }
        .footer-widget-area {
            background-color: #0052A5 !important;
        }
        .footer-widget-area .widget h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff !important;
        }
        .footer-widget-area ul li {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .footer-widget-area .contact-info .description {
            font-size: 1.1rem;
            font-weight: 400;
            color: #fff !important;
        }
        .footer-widget-area .contact-info .text {
            font-size: 1.1rem;
            font-weight: 400;
            color: #fff !important;
        }
        .footer-widget-area .contact-info .text a {
            color: #fff !important;
        }
        .footer-widget-area .contact-info .text a:hover {
            text-decoration: underline;
            color: #FFC107 !important;
        }
        .footer-widget-area .menu-quick-links-container a {
            font-size: 1.1rem;
            font-weight: 400;
            color: #fff !important;
        }
        .footer-widget-area .menu-quick-links-container a:hover {
            text-decoration: underline;
            color: #FFC107 !important;
        }
        .footer-widget-area .styled-icons {
            display: flex;
            justify-content: left;
            gap: 8px;
            margin-top: 20px;
        }
        .footer-widget-area .styled-icons li {
            margin-right: 8px;
        }
        .footer-widget-area .styled-icons i {
            font-size: 1.2rem;
        }
        .footer-widget-area hr {
            border-color: rgba(255, 255, 255, 0.2);
            margin: 12px 0;
        }
        .footer-widget-area .tm-widget-opening-hours {
            margin-top: 20px;
        }
        .footer-widget-area .tm-widget-opening-hours li {
            font-size: 1.1rem;
            font-weight: 400;
        }
        .footer-bottom {
            background-color: #0052A5 !important;
        }
        .footer-paragraph {
            color: #fff;
            font-size: 1.0rem;
            font-weight: 400;
            text-align: center;
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
                                                <li class="{{ Route::is('public.events.index', 'news-updates', 'publications', 'gallery') ? 'active' : '' }}">
                                                    <a href="#">Media</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('public.events.index') }}" {{ Route::is('public.events.index') ? 'aria-current="page"' : '' }}>Events</a></li>
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
        <!-- Careers Hero Section -->
        <section class="section" data-tm-bg-color="#0052A5">
            <div class="container pt-40 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-4">Careers</h1>
                            <p class="text-white lead">Join Our Team to Transform Lives</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Careers Content Section -->
        <section class="section">
            <div class="container pt-20 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card" tabindex="0" aria-label="Careers Opportunities">
                                <div class="card-body">
                                    <div class="content-section">
                                        <h4>Join Our Mission</h4>
                                        <p>Join a team that is transforming lives and fostering inclusion across Rwanda. At Izere Mubyeyi Organization, our careers span Special Needs and Inclusive Education, Health Care Services, Family Resilience and Economic Empowerment, Research and Advocacy, and Community Engagement. We seek passionate professionals who are eager to drive impact, innovate, and lead initiatives that empower children with disabilities, strengthen families, and influence inclusive policies.</p>
                                        <p>Our work focuses on the following core areas:</p>
                                        <ul>
                                            <li><i class="fas fa-graduation-cap"></i> Special Needs and Inclusive Education</li>
                                            <li><i class="fas fa-heartbeat"></i> Health Care Services</li>
                                            <li><i class="fas fa-users"></i> Family Resilience and Economic Empowerment</li>
                                            <li><i class="fas fa-search"></i> Research and Advocacy</li>
                                            <li><i class="fas fa-handshake"></i> Community Engagement</li>
                                        </ul>
                                        <p>Explore our current openings and become part of a workplace where your skills help build a more equitable, inclusive, and thriving society. If you’re ready to make a difference, we want to hear from you!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
       
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="footer-widget-area">
            <div class="container pt-40 pb-30">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="widget widget-contact-info">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="tm-widget tm-widget-contact-info contact-info contact-info-style1 contact-icon-theme-colored1">
                                <div class="description">KK 35 Avenue, Kicukiro District, Rwanda</div>
                                <ul>
                                    <li class="contact-email">
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                        <div class="text"><a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a></div>
                                    </li>
                                    <li class="contact-phone">
                                        <div class="icon"><i class="fas fa-phone"></i></div>
                                        <div class="text">+250786721626</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-social-list-custom">
                                <ul class="tm-widget tm-widget-social-list tm-widget-social-list-custom styled-icons icon-dark icon-rounded icon-theme-colored1">
                                    <li><a class="social-link" href="https://facebook.com/izeremubyeyi"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="social-link" href="https://twitter.com/izeremubyeyi"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="social-link" href="https://youtube.com/izeremubyeyi"><i class="fab fa-youtube"></i></a></li>
                                    <li><a class="social-link" href="https://instagram.com/izeremubyeyi"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <div class="menu-quick-links-container">
                                <ul class="menu">
                                    <li><a href="{{ route('donate') }}" {{ Route::is('donate') ? 'aria-current="page"' : '' }}>Donate</a></li>
                                    <li><a href="{{ route('volunteer') }}" {{ Route::is('volunteer') ? 'aria-current="page"' : '' }}>Volunteer</a></li>
                                    <li><a href="{{ route('inclusive-education') }}" {{ Route::is('inclusive-education') ? 'aria-current="page"' : '' }}>Inclusive Education</a></li>
                                    <li><a href="{{ route('health-care') }}" {{ Route::is('health-care') ? 'aria-current="page"' : '' }}>Health Care</a></li>
                                    <li><a href="{{ route('community-engagement') }}" {{ Route::is('community-engagement') ? 'aria-current="page"' : '' }}>Community Engagement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="widget widget-opening-hours-compressed">
                            <h4 class="widget-title">Opening Hours</h4>
                            <ul class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
                                <li class="clearfix"><span>Monday - Friday</span><div class="value">9.00 - 17.00</div></li>
                                <li class="clearfix"><span>Saturday</span><div class="value">9.00 - 16.00</div></li>
                                <li class="clearfix"><span>Sunday</span><div class="value">Closed</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-tm-bg-color="#0052A5">
                <div class="container">
                    <div class="row pt-15 pb-15">
                        <div class="col-sm-12 text-center">
                            <div class="footer-paragraph">
                                © 2025 IMO. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="scrollToTop" href="#"><i class="fas fa-angle-up"></i></a>
    </footer>

    <!-- Footer Scripts -->
    <script src="{{ asset('assets/dist/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/custom.js') }}" defer></script>
</div>
</body>
</html>