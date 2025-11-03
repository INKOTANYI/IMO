<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Izere Mubyeyi Organization - Empowering Children with Disabilities">
    <meta name="keywords" content="charity, disability, inclusion, education, Rwanda, non-profit">
    <meta name="author" content="Izere Mubyeyi Organization">
    <title>Izere Mubyeyi Organization NGO</title>

    <!-- Favicon -->
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/javascript-plugins-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/menuzord/css/menuzord.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/style-main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Revolution Slider CSS -->
    <link href="{{ asset('assets/dist/js/revolution-slider/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/revolution-slider/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/revolution-slider/css/navigation.css') }}" rel="stylesheet">

    <!-- Inline CSS -->
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #FFFFFF; }
        .header-top { background-color: #0052A5; color: #FFFFFF; }
        .header-nav { background-color: #009A49; }
        .menuzord .menuzord-menu > li > a { color: #FFFFFF; }
        .menuzord .menuzord-menu > li > a:hover { color: #FFC107; }
        .dropdown { background-color: #0052A5; }
        .dropdown li a { color: #FFFFFF; }
        .dropdown li a:hover { background-color: #FFC107; color: #0052A5; }
        .btn-theme-colored1 { background-color: #FFC107 !important; color: #0052A5 !important; }
        .btn-theme-colored1:hover { background-color: #0052A5 !important; color: #FFFFFF !important; }
        .contact-form .form-control { border-radius: 5px; margin-bottom: 15px; }
        #formMessage { color: #0052A5; margin-top: 10px; }
        .footer-widget-area { text-align: center; }
        .footer-bottom { text-align: center; }
        .footer-paragraph { display: inline-block; }
        .tm-service { min-height: 350px; display: flex; flex-direction: column; }
        /* Optimized spacing */
        section { padding: 40px 0 !important; }
        .container.pt-50, .container.pb-70, .container.pt-70 { padding-top: 20px !important; padding-bottom: 20px !important; }
        .row.mb-80, .row.mb-40 { margin-bottom: 20px !important; }
        .mb-30, .mb-md-30 { margin-bottom: 15px !important; }
        /* Modal Styling */
        .modal-content { border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); }
        .modal-header { background-color: #0052A5; color: #FFFFFF; border-radius: 10px 10px 0 0; }
        .modal-body { padding: 20px; }
        .modal-footer { border-top: none; }
        .login-form .form-control { border: 1px solid #0052A5; border-radius: 5px; }
        .login-form .btn { width: 100%; }
        /* Map Styling */
        #googleMap { height: 300px; width: 100%; border-radius: 10px; }
        /* Quick Links Styling */
        .widget.widget_nav_menu .menu-quick-links-container ul.menu li a {
            color: #FFFFFF !important;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }
        .widget.widget_nav_menu .menu-quick-links-container ul.menu li a:hover {
            color: #FFC107 !important;
            text-decoration: none;
        }
        /* Slider Text */
        .tp-caption {
            color: #FFFFFF;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);
            font-family: 'Roboto', sans-serif;
        }
        .rev-slidebg {
            object-fit: cover;
            width: 100%;
            height: 100%;
            filter: brightness(0.65);
        }
        .btn-slider {
            transition: all 0.3s ease;
            border-radius: 30px;
            padding: 8px 20px;
            font-size: 0.9rem;
        }
        .btn-slider:hover {
            transform: scale(1.05);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
            background-color: #FFD54F !important;
        }
        .btn-slider-secondary {
            border: 2px solid #FFFFFF;
            background-color: transparent !important;
            color: #FFFFFF !important;
        }
        .btn-slider-secondary:hover {
            background-color: #0052A5 !important;
            color: #FFFFFF !important;
            border-color: #0052A5;
        }
        /* Mobile Menu Toggle */
        .menuzord .showhide {
            display: none;
            float: right;
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: #009A49;
            border-radius: 5px;
            margin: 10px;
        }
        .menuzord .showhide em {
            display: block;
            width: 24px;
            height: 3px;
            background: #FFFFFF;
            margin: 5px auto;
        }
        @media (max-width: 991px) {
            .menuzord .showhide {
                display: block;
            }
            .menuzord-menu {
                display: none;
                width: 100%;
                background: #009A49;
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                padding: 10px 0;
            }
            .menuzord-menu.show {
                display: block;
            }
            .menuzord-menu > li {
                display: block;
                text-align: left;
            }
            .menuzord-menu > li > a {
                padding: 12px 20px;
                display: block;
                font-size: 1rem;
            }
            .dropdown {
                position: static;
                display: none;
                background: #0052A5;
            }
            .dropdown.show {
                display: block;
            }
            .dropdown > li > a {
                padding: 10px 30px;
            }
        }
        /* Responsive Slider Adjustments */
        @media (max-width: 991px) {
            .tp-caption {
                font-size: 0.9rem !important;
                line-height: 1.3 !important;
            }
            .rev_slider_wrapper {
                height: 400px !important;
            }
            .btn-slider {
                padding: 7px 18px;
                font-size: 0.85rem !important;
            }
        }
        @media (max-width: 767px) {
            .tp-caption {
                font-size: 0.8rem !important;
                line-height: 1.2 !important;
            }
            .rev_slider_wrapper {
                height: 350px !important;
            }
            .btn-slider {
                padding: 6px 15px;
                font-size: 0.8rem !important;
            }
        }
        @media (max-width: 480px) {
            .tp-caption {
                font-size: 0.7rem !important;
                line-height: 1.1 !important;
            }
            .rev_slider_wrapper {
                height: 300px !important;
            }
            .btn-slider {
                padding: 5px 12px;
                font-size: 0.75rem !important;
            }
        }
        @media (max-width: 320px) {
            .tp-caption {
                font-size: 0.65rem !important;
                line-height: 1.1 !important;
            }
            .rev_slider_wrapper {
                height: 250px !important;
            }
            .btn-slider {
                padding: 4px 10px;
                font-size: 0.7rem !important;
            }
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" defer></script>
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
                            <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +250786721626 <a href="https://wa.me/250786721626" class="ml-10" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp" style="color:#25D366;"></i> WhatsApp</a></li>
                            <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i> info@izeremubyeyi.org</li>
                            <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> KK 35 Avenue, Kicukiro District</li>
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
                                            <img class="logo-default logo-1x" src="{{ asset('images/bg/Logo-izere.png') }}" alt="Izere Mubyeyi Logo">
                                            <img class="logo-default logo-2x retina" src="{{ asset('images/logo-wide@2x.png') }}" alt="Izere Mubyeyi Logo">
                                        </a>
                                    </div>
                                    <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                        <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
                                            <div class="showhide"><em></em><em></em><em></em></div>
                                            <ul id="main-nav" class="menuzord-menu">
                                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                                <li class="{{ Route::is('who-we-are', 'our-founders', 'our-board', 'our-staff', 'our-values', 'our-history', 'mission-vision') ? 'active' : '' }}"><a href="#">Who We Are</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('our-founders') }}">Our Founders</a></li>
                                                        <li><a href="{{ route('our-board') }}">Our Board</a></li>
                                                        <li><a href="{{ route('our-staff') }}">Our Staff</a></li>
                                                        <li><a href="{{ route('our-values') }}">Our Values</a></li>
                                                        <li><a href="{{ route('our-history') }}">Our History</a></li>
                                                        <li><a href="{{ route('mission-vision') }}">Our Mission and Vision</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('inclusive-education', 'health-care', 'capacity-building', 'research-advocacy', 'family-resilience', 'community-engagement') ? 'active' : '' }}"><a href="#">What We Do</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('inclusive-education') }}">Inclusive and Special Needs Education</a></li>
                                                        <li><a href="{{ route('health-care') }}">Essential Health Care</a></li>
                                                        <li><a href="{{ route('capacity-building') }}">Capacity Building</a></li>
                                                        <li><a href="{{ route('research-advocacy') }}">Research and Advocacy</a></li>
                                                        <li><a href="{{ route('family-resilience') }}">Family Resilience</a></li>
                                                        <li><a href="{{ route('community-engagement') }}">Community Engagement</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('events.index', 'news-updates', 'publications', 'gallery') ? 'active' : '' }}"><a href="#">Media</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Events</a></li>
                                                        <li><a href="#">News Updates</a></li>
                                                        <li><a href="#">Publications</a></li>
                                                        <li><a href="#">Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('careers', 'tenders') ? 'active' : '' }}"><a href="#">Opportunities</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('careers') }}">Careers</a></li>
                                                        <li><a href="{{ route('tenders') }}">Tenders</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="#contact">Contact</a></li>
                                            </ul>
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
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Izere Mubyeyi</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="login-form" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-theme-colored1 btn-round">Login</button>
                    </form>
                    <div id="loginMessage" class="mt-3"></div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content-area">
        

        <!-- Tenders Section -->
        <section id="tenders" style="background-color:#ffffff !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">Tenders</h3>
                                <div class="content">
                                    <p>Partner with us to deliver impactful programs and services across all our core areas: inclusive education, healthcare, family empowerment, research and advocacy, and community engagement. Our Tenders section provides opportunities for suppliers, service providers, and partners to contribute goods, services, or expertise that support children with disabilities and their families. Collaborating with Izere Mubyeyi Organization ensures that your solutions reach the communities that need them most and strengthen our mission of building inclusive, resilient, and empowered communities.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
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