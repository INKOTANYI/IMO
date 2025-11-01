<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Izere Mubyeyi Organization - Empowering Children with Disabilities">
    <meta name="keywords" content="charity, disability, inclusion, education, Rwanda, non-profit">
    <meta name="author" content="Izere Mubyeyi Organization">
    <title>Izere Mubyeyi Organization NGO</title>

    <!-- Explicitly set no favicon to prevent default icon -->
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/javascript-plugins-bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/menuzord/css/menuzord.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" async>

    <!-- Revolution Slider CSS -->
    <link href="{{ asset('assets/dist/js/revolution-slider/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/revolution-slider/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/js/revolution-slider/css/navigation.css') }}" rel="stylesheet">

    <!-- Inline CSS (Aligned with Volunteer Page) -->
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #FFFFFF; }
        .section { position: relative; }
        .text-theme-colored1 { color: #0052A5 !important; }
        .text-theme-colored2 { background-color: #FFC107 !important; color: #fff !important; }
        .btn-theme-colored1 {
            background-color: #0052A5; color: #fff; padding: 10px 20px; border-radius: 5px;
        }
        .btn-theme-colored2 {
            background-color: #FFC107; color: #fff; padding: 10px 20px; border-radius: 5px;
        }
        .header-top { background-color: #0052A5; color: #FFFFFF; }
        .header-nav { background-color: #009A49; }
        .menuzord .menuzord-menu > li > a { color: #FFFFFF; }
        .menuzord .menuzord-menu > li > a:hover { color: #FFC107; }
        .dropdown { background-color: #0052A5; }
        .dropdown li a { color: #FFFFFF; }
        .dropdown li a:hover { background-color: #FFC107; color: #0052A5; }
        .contact-form .form-control { border-radius: 5px; margin-bottom: 15px; }
        #formMessage { color: #0052A5; margin-top: 10px; }
        .footer-widget-area { background-color: #0052A5 !important; text-align: center; }
        .footer-widget-area .widget h4 {
            font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #fff !important;
        }
        .footer-widget-area ul li { font-size: 1.1rem; margin-bottom: 8px; }
        .footer-widget-area .contact-info .description {
            font-size: 1.1rem; font-weight: 400; color: #fff !important;
        }
        .footer-widget-area .contact-info .text {
            font-size: 1.1rem; font-weight: 400; color: #fff !important;
        }
        .footer-widget-area .contact-info .text a { color: #fff !important; }
        .footer-widget-area .contact-info .text a:hover {
            text-decoration: underline; color: #FFC107 !important;
        }
        .footer-widget-area .menu-quick-links-container a {
            font-size: 1.1rem; font-weight: 400; color: #fff !important;
        }
        .footer-widget-area .menu-quick-links-container a:hover {
            text-decoration: underline; color: #FFC107 !important;
        }
        .footer-widget-area .styled-icons {
            display: flex; justify-content: center; gap: 8px; margin-top: 20px;
        }
        .footer-widget-area .styled-icons li { margin-right: 8px; }
        .footer-widget-area .styled-icons i { font-size: 1.2rem; }
        .footer-widget-area hr { border-color: rgba(255, 255, 255, 0.2); margin: 12px 0; }
        .footer-widget-area .tm-widget-opening-hours { margin-top: 20px; }
        .footer-widget-area .tm-widget-opening-hours li { font-size: 1.1rem; font-weight: 400; }
        .footer-bottom { background-color: #0052A5 !important; }
        .footer-paragraph { color: #fff; font-size: 1.0rem; font-weight: 400; text-align: center; }
        .tm-service { min-height: 350px; display: flex; flex-direction: column; }
        section { padding: 20px 0 !important; }
        .container.pt-50, .container.pb-70, .container.pt-70 { padding-top: 10px !important; padding-bottom: 10px !important; }
        .row.mb-80, .row.mb-40 { margin-bottom: 10px !important; }
        .mb-30, .mb-md-30 { margin-bottom: 10px !important; }
        .modal-content { border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); }
        .modal-header { background-color: #0052A5; color: #FFFFFF; border-radius: 10px 10px 0 0; }
        .modal-body { padding: 20px; }
        .modal-footer { border-top: none; }
        .login-form .form-control { border: 1px solid #0052A5; border-radius: 5px; }
        .login-form .btn { width: 100%; }
        #googleMap { height: 300px; width: 100%; border-radius: 10px; }
        .widget.widget_nav_menu .menu-quick-links-container ul.menu li a {
            color: #FFFFFF !important; font-size: 0.95rem; transition: color 0.3s ease;
        }
        .widget.widget_nav_menu .menu-quick-links-container ul.menu li a:hover {
            color: #FFC107 !important; text-decoration: none;
        }
        .tp-caption { color: #FFFFFF; text-shadow: 3px 3px 6px rgba(0,0,0,0.8); padding: 8px 12px; font-family: 'Roboto', sans-serif; }
        .rev-slidebg { object-fit: cover; width: 100%; height: 100%; filter: brightness(0.7); }
        .btn-slider { transition: all 0.3s ease; border-radius: 50px; padding: 12px 30px; }
        .btn-slider:hover { transform: scale(1.1); box-shadow: 0 4px 12px rgba(0,0,0,0.4); background-color: #FFD54F !important; }
        .btn-slider-secondary { border: 2px solid #FFFFFF; background-color: transparent !important; color: #FFFFFF !important; }
        .btn-slider-secondary:hover { background-color: #0052A5 !important; color: #FFFFFF !important; border-color: #0052A5; }
        @media (max-width: 767px) {
            .footer-widget-area .col-lg-4 { margin-bottom: 25px; }
            .footer-widget-area .col-lg-4:not(:last-child) {
                border-bottom: 1px solid rgba(255, 255, 255, 0.2); padding-bottom: 25px;
            }
            .tp-caption { font-size: 1.1rem !important; line-height: 1.5 !important; padding: 6px 10px; }
            .rev_slider_wrapper { height: 400px !important; }
            .btn-slider { padding: 10px 20px; font-size: 1.1rem !important; }
            section { padding: 15px 0 !important; }
            .tm-service { min-height: 300px; padding: 15px; }
        }
        @media (max-width: 480px) {
            .tp-caption { font-size: 1.0rem !important; padding: 5px 8px; }
            .rev_slider_wrapper { height: 300px !important; }
            .btn-slider { padding: 8px 15px; font-size: 1.0rem !important; }
            section { padding: 10px 0 !important; }
            .tm-service { min-height: 250px; padding: 10px; font-size: 0.9rem; }
            h2.title { font-size: 1.5rem !important; }
            .lead { font-size: 1rem !important; }
        }
        /* Menuzord Responsive Styles from Volunteer Page */
        @media (max-width: 991px) {
            .menuzord-responsive .menuzord-menu {
                background: #009A49; position: absolute; top: 100%; left: 0; width: 100%;
                z-index: 1001; box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            }
            .menuzord-responsive .menuzord-menu > li > a {
                padding: 15px 20px; display: block; font-size: 1.2rem; color: #FFFFFF;
            }
            .menuzord-responsive .dropdown { background: #0052A5; }
            .menuzord-responsive .dropdown > li > a {
                padding: 12px 30px; font-size: 1.1rem; color: #FFFFFF;
            }
            .menuzord-responsive .dropdown > li > a:hover {
                background-color: #FFC107; color: #0052A5;
            }
        }
    </style>

    <!-- Scripts (Aligned with Volunteer Page) -->
    <script src="{{ asset('assets/dist/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" defer></script>
    @include('partials.tawk')
    <script>
        jQuery(document).ready(function($) {
            try {
                $("#top-primary-nav").menuzord({
                    effect: "fade",
                    animation: "none",
                    align: "right",
                    showSpeed: 0,
                    hideSpeed: 0
                });
                console.log("Menuzord initialized successfully");
            } catch (e) {
                console.error("Menuzord initialization failed:", e);
            }
        });
    </script>
</head>
<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
<div id="wrapper" class="clearfix">
    <!-- Header (Copied from Volunteer Page) -->
    <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                        <ul class="element contact-info">
                            <li class="contact-phone"><i class="fas fa-phone font-icon sm-display-block"></i> Tel: +250786721626 <a href="https://wa.me/250786721626" class="ml-10" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp" style="color:#25D366;"></i> WhatsApp</a></li>
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
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to Izere Mubyeyi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="login-form" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group"><label for="email">Email Address</label><input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required></div>
                        <div class="form-group"><label for="password">Password</label><input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required></div>
                        <div class="form-group form-check"><input type="checkbox" class="form-check-input" id="remember"><label class="form-check-label" for="remember">Remember Me</label></div>
                        <button type="submit" class="btn btn-theme-colored1 btn-round">Login</button>
                    </form>
                    <div id="loginMessage" class="mt-3"></div>
                </div>
                <div class="modal-footer"><a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a></div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content-area">
        <!-- Slider Section -->
        <section id="home" class="p-0">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col">
                        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34">
                            <div id="rev_slider_home" class="rev_slider fullwidthabanner" data-version="5.0.7">
                                <ul>
                                    @foreach ([
                                        'izere1.jpg' => ['Making a Bright Future', 'Empower Children Now', 'Support inclusive education for kids with disabilities.'],
                                        'izere2.jpg' => ['Start Learning For', 'A Successful Future', 'Tailored education and vocational training for youth.'],
                                        'izere3.jpg' => ['Join Today to', 'Transform Communities', 'Join our mission to foster inclusion and resilience.']
                                    ] as $image => $texts)
                                        <li data-index="rs-{{ $loop->index + 1 }}" data-transition="parallax" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="700" data-thumb="{{ asset('images/bg/' . $image) }}" data-rotate="0" data-saveperformance="on" data-title="Slide {{ $loop->index + 1 }}">
                                            <img src="{{ asset('images/bg/' . $image) }}" alt="Slide {{ $loop->index + 1 }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina loading="lazy">
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['70','60','50','40']" data-fontsize="['30','26','22','18']" data-lineheight="['40','36','32','28']" data-fontweight="['700','700','700','700']" data-width="['900','800','700','600']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:500;e:Power4.easeInOut;" data-transform_out="y:50px;opacity:0;s:500;e:Power4.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; font-family: 'Roboto', sans-serif; text-shadow: 3px 3px 6px rgba(0,0,0,0.8);">{{ $texts[0] }}</div>
                                            <div class="tp-caption tp-resizeme text-white text-uppercase font-roboto rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['130','110','90','80']" data-fontsize="['54','46','38','32']" data-lineheight="['64','54','44','36']" data-fontweight="['900','900','900','900']" data-width="['900','800','700','600']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:500;e:Power4.easeInOut;" data-transform_out="y:50px;opacity:0;s:500;e:Power4.easeInOut;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; font-family: 'Roboto', sans-serif; text-shadow: 3px 3px 6px rgba(0,0,0,0.8);">{{ $texts[1] }}</div>
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','170','140','120']" data-fontsize="['22','20','18','16']" data-lineheight="['32','30','28','26']" data-fontweight="['400','400','400','400']" data-width="['900','800','700','600']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:500;e:Power4.easeInOut;" data-transform_out="y:50px;opacity:0;s:500;e:Power4.easeInOut;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; font-family: 'Roboto', sans-serif; text-shadow: 3px 3px 6px rgba(0,0,0,0.8);">{{ $texts[2] }}</div>
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['290','230','190','160']" data-fontsize="['22','20','18','16']" data-lineheight="['32','30','28','26']" data-fontweight="['700','700','700','700']" data-width="['900','800','700','600']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:500;e:Power4.easeInOut;" data-transform_out="y:-50px;opacity:0;s:500;e:Power4.easeInOut;" data-start="1100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7;">
                                                <a href="{{ route('donate') }}" class="btn btn-slider btn-theme-colored1 mr-15" style="font-size: 1.2rem; background-color: #FFC107 !important; color: #0052A5 !important; font-family: 'Roboto', sans-serif;" aria-label="Donate Now">Donate Now</a>
                                                <a href="{{ route('volunteer-form') }}" class="btn btn-slider btn-slider-secondary mr-15" style="font-size: 1.2rem; font-family: 'Roboto', sans-serif;" aria-label="Join Us">Join Us</a>
                                                <a href="https://wa.me/250786721626" class="btn btn-slider" style="font-size: 1.2rem; background-color: #25D366 !important; color: #FFFFFF !important; font-family: 'Roboto', sans-serif;" target="_blank" rel="noopener" aria-label="WhatsApp Chat">WhatsApp</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="height: 6px; background-color: rgba(255,193,7,0.7);"></div>
                            </div>
                        </div>
                        <script>
                            var tpj=jQuery;tpj.noConflict();tpj(document).ready(function(){if(tpj("#rev_slider_home").revolution==undefined){console.error("Revolution Slider Error: Plugin not loaded");}else{tpj("#rev_slider_home").show().revolution({sliderType:"standard",jsFileLocation:"{{ asset('assets/dist/js/revolution-slider/js/') }}",sliderLayout:"fullwidth",dottedOverlay:"none",delay:5000,navigation:{keyboardNavigation:"on",keyboard_direction:"horizontal",mouseScrollNavigation:"off",onHoverStop:"on",touch:{touchenabled:"on",swipe_threshold:75,swipe_min_touches:1,swipe_direction:"horizontal",drag_block_vertical:false},arrows:{enable:true,style:'uranus',left:{h_align:"left",v_align:"center",h_offset:20,v_offset:0},right:{h_align:"right",v_align:"center",h_offset:20,v_offset:0}},bullets:{enable:true,style:'uranus',tmp:'',hide_onmobile:true,hide_under:600,hide_onleave:true,hide_delay:200,hide_delay_mobile:1200,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:20,space:10}},viewPort:{enable:true,outof:"wait",visible_area:"90%"},responsiveLevels:[1240,1024,768,480],gridwidth:[1200,1000,750,450],gridheight:[650,550,450,350],lazyType:"smart",parallax:{type:"scroll",origo:"enterpoint",speed:200,levels:[2,4,6,8,10,12,14,16,18,20]},shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",hideThumbsOnMobile:"on",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLimit:0,debugMode:false,fallbacks:{simplifyAll:"on",nextSlideOnWindowFocus:"off",disableFocusListener:false}})}});
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <!-- Welcome Section -->
        <section class="bg-theme-colored1" style="background-color: #0052A5 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="text-white">Welcome To Izere Mubyeyi Non-Profit & Organization</h2>
                        <p class="lead text-white">Empowering Children with Disabilities – Strengthening Families, Transforming Communities</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Who We Are Section -->
        <section id="who-we-are" style="background-color: #ffffff !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">Who We Are</h3>
                                <div class="content">
                                    <p>Izere Mubyeyi Organization is a pioneering community-based initiative in Rwanda dedicated to advancing disability rights and inclusion. We exist to ensure that children and youth with intellectual and developmental disabilities are not left in the shadows, but are given equal access to education, health care, family support, and opportunities to thrive. Guided by dignity, inclusion, and empowerment, we stand at the forefront of transforming lives, strengthening families, and shaping communities into places where every child belongs and every potential is valued.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, & Values Section -->
        <section id="mission-vision">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">Mission</h3>
                                <div class="content">
                                    <p>To enhance the well-being of children and youth with intellectual disabilities and learning difficulties, and their families, by promoting full inclusion, equal opportunities, and active participation in Rwandan society.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">Vision</h3>
                                <div class="content">
                                    <p>A Rwanda free from discrimination, where children and youth with intellectual disabilities and learning difficulties, together with their families, are fully included, empowered, and able to thrive and participate equally in all aspects.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">Our Values</h3>
                                <div class="content">
                                    <p>We recognize God as the ultimate source of wisdom, strength, and compassion. This reverence guides our actions, inspires our service, and grounds us in humility and integrity as we work for the dignity of every child and family.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do Section -->
        <section id="what-we-do" class="bg-no-repeat bg-img-right-bottom" style="background-color: #f8f9fa !important;" data-tm-bg-img="{{ asset('images/causes/semi-circle.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="title text-uppercase mt-0"><span class="text-dark">What</span> <span style="color: #0052A5;">We Do</span></h2>
                        <p class="text-muted">We empower children with disabilities through inclusive education, health care, family support, advocacy, and community engagement.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ([
                        ['route' => 'inclusive-education', 'icon' => 'fa-school', 'title' => 'Inclusive and Special Needs Education', 'desc' => 'Providing inclusive early childhood and primary education, individualized support, and vocational training for youth with disabilities.'],
                        ['route' => 'health-care', 'icon' => 'fa-heartbeat', 'title' => 'Essential Health Care', 'desc' => 'Delivering physiotherapy, occupational therapy, and psychosocial support for children, parents, and caregivers.'],
                        ['route' => 'capacity-building', 'icon' => 'fa-chalkboard-teacher', 'title' => 'Capacity Building', 'desc' => 'Training teachers, caregivers, and community representatives on inclusive practices and disability rights.'],
                        ['route' => 'research-advocacy', 'icon' => 'fa-bullhorn', 'title' => 'Research and Advocacy', 'desc' => 'Generating evidence and influencing policies to advance disability rights and inclusion in Rwanda.'],
                        ['route' => 'family-resilience', 'icon' => 'fa-users', 'title' => 'Family Resilience', 'desc' => 'Strengthening families through peer support, entrepreneurship training, and income-generating initiatives.'],
                        ['route' => 'community-engagement', 'icon' => 'fa-handshake', 'title' => 'Community Engagement', 'desc' => 'Mobilizing communities to challenge stigma and foster disability-friendly practices through awareness and participation.']
                    ] as $service)
                        <div class="col-md-4 col-sm-6">
                            <div class="tm-service services type-services status-publish" style="background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: transform 0.3s ease, box-shadow 0.3s ease; padding: 20px; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden;">
                                <div class="details" style="flex-grow: 1;">
                                    <i class="fas {{ $service['icon'] }} fa-3x mb-15" style="color: #0052A5;"></i>
                                    <h4 class="title"><a href="{{ route($service['route']) }}" style="color: #0052A5; font-size: 1.25rem; font-weight: 600;">{{ $service['title'] }}</a></h4>
                                    <div class="paragraph mb-15 text-muted" style="font-size: 0.95rem; line-height: 1.6;">{{ $service['desc'] }}</div>
                                    <div class="btn-view-details mt-auto">
                                        <a href="{{ route($service['route']) }}" class="btn btn-outline btn-sm" style="border-color: #0052A5; color: #0052A5; padding: 8px 16px; font-size: 0.9rem;">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Photo Gallery Section -->
        <section id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h2 class="title text-uppercase mt-0"><span>Photo</span> <span class="text-theme-colored1">Gallery</span></h2>
                        <p>Explore our impactful moments and activities through our photo gallery.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-sc tm-sc-gallery tm-sc-gallery-masonry gallery-style1-current-theme">
                            <div class="isotope-layout-filter filter-style-2 text-center cat-filter-default" data-link-with="gallery-holder-1">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#festival" data-filter=".festival">Festival</a>
                                <a href="#picnic" data-filter=".picnic">Picnic</a>
                                <a href="#meeting" data-filter=".meeting">Meeting</a>
                            </div>
                            <div id="gallery-holder-1" class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    <div class="isotope-item isotope-item-sizer"></div>
                                    @foreach (['festival picnic', 'festival picnic', 'meeting picnic', 'festival picnic', 'festival', 'meeting'] as $category)
                                        <div class="isotope-item {{ $category }}">
                                            <div class="isotope-item-inner tm-gallery">
                                                <div class="tm-gallery-inner">
                                                    <div class="thumb"><a href="#"><img src="{{ asset('images/bg/izere1.jpg') }}" alt="Gallery Image"></a></div>
                                                    <div class="tm-gallery-content-wrapper">
                                                        <div class="tm-gallery-content">
                                                            <div class="tm-gallery-content-inner">
                                                                <div class="icons-holder-inner">
                                                                    <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                        <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{ asset('images/bg/P1110133-1024x768.jpg') }}" data-src="{{ asset('images/bg/children-eating-at-school-2-1.jpg') }}" title="Project Title" href="{{ asset('images/bg/izere3.jpg') }}"><i class="fa fa-plus"></i></a>
                                                                        <a class="styled-icons-item" title="Project Title" href="#"><i class="fa fa-link"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="title-holder"><h5 class="title"><a href="#">Project Title</a></h5></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Volunteer Call to Action -->
        <section id="volunteer" class="divider" style="background-color: #0052A5 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="text-white font-weight-600" style="font-size: 36px;">Volunteer With Us</h2>
                        <p class="text-white" style="font-size: 16px;">Make a Real Difference for Inclusion</p>
                        <div class="tm-sc tm-sc-button text-center mt-15">
                            <a href="{{ route('volunteer-form') }}" target="_self" class="btn btn-round" style="background-color: #002c42 !important; color: #FFC107 !important;">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section id="contact" style="background-color: #f8f9fa !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h2 class="title text-uppercase mt-0"><span>Contact</span> <span class="text-theme-colored1">Us</span></h2>
                        <p>Get in touch with us for more information or to join our mission.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-20">Contact Information</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt mr-10"></i>KK 35 Avenue, Kicukiro District, Kigali, Rwanda</li>
                            <li><i class="fas fa-phone mr-10"></i>+250786721626</li>
                            <li><i class="fas fa-envelope mr-10"></i><a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a></li>
                        </ul>
                        <h4 class="mt-20 mb-20">Our Location</h4>
                        <div class="map-responsive">
                          <iframe src="https://www.google.com/maps?q=KK%2035%20Avenue%2C%20Kicukiro%20District%2C%20Kigali%2C%20Rwanda&output=embed" width="100%" height="300" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <h4 class="mt-20 mb-20">Follow Us</h4>
                        <ul class="tm-widget tm-widget-social-list styled-icons icon-dark icon-rounded icon-theme-colored1">
                            <li><a class="social-link" href="https://facebook.com/izeremubyeyi"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="social-link" href="https://twitter.com/izeremubyeyi"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="social-link" href="https://youtube.com/izeremubyeyi"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="social-link" href="https://instagram.com/izeremubyeyi"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-20">Send Us a Message</h4>
                        <form class="contact-form" action="" method="post">
                            @csrf
                            <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name" required aria-label="Your Name"></div>
                            <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Your Email" required aria-label="Your Email"></div>
                            <div class="form-group"><textarea name="message" class="form-control" rows="5" placeholder="Your Message" required aria-label="Your Message"></textarea></div>
                            <div class="form-group text-center"><button type="submit" class="btn btn-theme-colored1 btn-round">Send Message</button></div>
                            <div id="formMessage"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section id="partners" style="background-color: #ffffff !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h2 class="title text-uppercase mt-0"><span>Our</span> <span style="color: #0052A5;">Partners</span></h2>
                        <p class="text-muted">We collaborate with organizations and individuals to amplify our impact.</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6"><div class="tm-partner"><a href="#"><img src="{{ asset('images/partners/partner1.jpg') }}" alt="Partner 1" class="img-fluid"></a></div></div>
                    <div class="col-md-3 col-sm-6"><div class="tm-partner"><a href="#"><img src="{{ asset('images/partners/partner2.jpg') }}" alt="Partner 2" class="img-fluid"></a></div></div>
                    <div class="col-md-3 col-sm-6"><div class="tm-partner"><a href="#"><img src="{{ asset('images/partners/partner3.jpg') }}" alt="Partner 3" class="img-fluid"></a></div></div>
                    <div class="col-md-3 col-sm-6"><div class="tm-partner"><a href="#"><img src="{{ asset('images/partners/partner4.jpg') }}" alt="Partner 4" class="img-fluid"></a></div></div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    @include('partials.footer-welcome')

    <!-- Footer Scripts -->
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}" defer></script>
    <style>
      .whatsapp-float{position:fixed;right:18px;bottom:18px;z-index:9999;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;background:#25D366;color:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.25);transition:transform .2s ease,box-shadow .2s ease}
      .whatsapp-float:hover{transform:scale(1.05);box-shadow:0 8px 22px rgba(0,0,0,0.3)}
      .whatsapp-float i{font-size:28px;line-height:1}
      @media (max-width:480px){.whatsapp-float{width:52px;height:52px;right:14px;bottom:14px}}
      @media (max-width:360px){.whatsapp-float{width:48px;height:48px;right:12px;bottom:12px}}
    </style>
    <a href="https://wa.me/250786721626" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>
</body>
</html>