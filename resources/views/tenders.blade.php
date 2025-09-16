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
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
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
                            <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +250786721626</li>
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
                                                <li class="{{ Route::is('public.events.index', 'news-updates', 'publications', 'gallery') ? 'active' : '' }}"><a href="#">Media</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Events</a></li>
                                                        <li><a href="#">News Updates</a></li>
                                                        <li><a href="#">Publications</a></li>
                                                        <li><a href="#">Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('careers', 'tenders') ? 'active' : '' }}"><a href="#">Opportunities</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Careers</a></li>
                                                        <li><a href="#">Tenders</a></li>
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
                                        <li data-index="rs-{{ $loop->index + 1 }}" data-transition="slidedown" data-slotamount="default" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="600" data-thumb="{{ asset('images/bg/' . $image) }}" data-rotate="0" data-saveperformance="on" data-title="Slide {{ $loop->index + 1 }}">
                                            <img src="{{ asset('images/bg/' . $image) }}" alt="Slide {{ $loop->index + 1 }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina loading="lazy">
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                                                data-y="['top','top','top','top','top']" data-voffset="['50','40','30','25','20']"
                                                data-fontsize="['26','22','18','16','14']"
                                                data-lineheight="['34','30','26','24','22']"
                                                data-fontweight="['700','700','700','700','700']"
                                                data-width="['700','600','500','400','300']"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-transform_out="y:20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-start="400"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-responsive_offset="on"
                                                style="z-index: 7; font-family: 'Roboto', sans-serif; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);">{{ $texts[0] }}</div>
                                            <div class="tp-caption tp-resizeme text-white text-uppercase font-roboto rs-parallaxlevel-0"
                                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                                                data-y="['top','top','top','top','top']" data-voffset="['100','80','60','50','40']"
                                                data-fontsize="['44','36','28','24','20']"
                                                data-lineheight="['52','44','36','32','28']"
                                                data-fontweight="['900','900','900','900','900']"
                                                data-width="['700','600','500','400','300']"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-transform_out="y:20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-start="600"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-responsive_offset="on"
                                                style="z-index: 6; font-family: 'Roboto', sans-serif; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);">{{ $texts[1] }}</div>
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                                                data-y="['top','top','top','top','top']" data-voffset="['160','120','90','80','70']"
                                                data-fontsize="['18','16','14','12','10']"
                                                data-lineheight="['26','24','22','20','18']"
                                                data-fontweight="['400','400','400','400','400']"
                                                data-width="['700','600','500','400','300']"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-transform_out="y:20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-start="800"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-responsive_offset="on"
                                                style="z-index: 7; font-family: 'Roboto', sans-serif; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);">{{ $texts[2] }}</div>
                                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                                data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                                                data-y="['top','top','top','top','top']" data-voffset="['220','170','130','110','90']"
                                                data-fontsize="['18','16','14','12','10']"
                                                data-lineheight="['26','24','22','20','18']"
                                                data-fontweight="['700','700','700','700','700']"
                                                data-width="['700','600','500','400','300']"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-transform_idle="o:1;"
                                                data-transform_in="y:20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-transform_out="y:-20px;opacity:0;s:300;e:Power2.easeInOut;"
                                                data-start="1000"
                                                data-splitin="none"
                                                data-splitout="none"
                                                data-responsive_offset="on"
                                                style="z-index: 7;">
                                                <a href="{{ route('donate') }}" class="btn btn-slider btn-theme-colored1 mr-10" style="font-family: 'Roboto', sans-serif;" aria-label="Donate Now">Donate Now</a>
                                                <a href="{{ route('volunteer-form') }}" class="btn btn-slider btn-slider-secondary" style="font-family: 'Roboto', sans-serif;" aria-label="Join Us">Join Us</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 193, 7, 0.7);"></div>
                            </div>
                        </div>
                        <script>
                            var tpj = jQuery;
                            tpj.noConflict(); // Prevent jQuery conflicts
                            var revapi34;
                            tpj(document).ready(function() {
                                // Initialize Revolution Slider
                                if (tpj("#rev_slider_home").revolution == undefined) {
                                    revslider_showDoubleJqueryError("#rev_slider_home");
                                } else {
                                    revapi34 = tpj("#rev_slider_home").show().revolution({
                                        sliderType: "standard",
                                        jsFileLocation: "{{ asset('assets/dist/js/revolution-slider/js/') }}",
                                        sliderLayout: "fullwidth",
                                        dottedOverlay: "none",
                                        delay: 5000,
                                        navigation: {
                                            keyboardNavigation: "on",
                                            keyboard_direction: "horizontal",
                                            mouseScrollNavigation: "off",
                                            onHoverStop: "on",
                                            touch: {
                                                touchenabled: "on",
                                                swipe_threshold: 75,
                                                swipe_min_touches: 1,
                                                swipe_direction: "vertical",
                                                drag_block_vertical: false
                                            },
                                            arrows: {
                                                enable: true,
                                                style: 'uranus',
                                                left: { h_align: "left", v_align: "center", h_offset: 15, v_offset: 0 },
                                                right: { h_align: "right", v_align: "center", h_offset: 15, v_offset: 0 }
                                            },
                                            bullets: {
                                                enable: true,
                                                style: 'uranus',
                                                tmp: '',
                                                hide_onmobile: true,
                                                hide_under: 480,
                                                hide_onleave: true,
                                                hide_delay: 200,
                                                hide_delay_mobile: 1200,
                                                direction: "horizontal",
                                                h_align: "center",
                                                v_align: "bottom",
                                                h_offset: 0,
                                                v_offset: 15,
                                                space: 8
                                            }
                                        },
                                        viewPort: { enable: true, outof: "wait", visible_area: "90%" },
                                        responsiveLevels: [1240, 1024, 768, 480, 320],
                                        gridwidth: [1200, 1000, 750, 450, 300],
                                        gridheight: [600, 500, 400, 300, 250],
                                        lazyType: "all",
                                        parallax: { type: "scroll", origo: "enterpoint", speed: 150, levels: [2, 3, 4, 5, 6] },
                                        shadow: 0,
                                        spinner: "off",
                                        stopLoop: "off",
                                        stopAfterLoops: -1,
                                        stopAtSlide: -1,
                                        shuffle: "off",
                                        autoHeight: "off",
                                        hideThumbsOnMobile: "on",
                                        hideSliderAtLimit: 0,
                                        hideCaptionAtLimit: 0,
                                        hideAllCaptionAtLimit: 0,
                                        debugMode: false,
                                        fallbacks: {
                                            simplifyAll: "on",
                                            nextSlideOnWindowFocus: "off",
                                            disableFocusListener: false
                                        }
                                    });
                                }
                                // Initialize Menuzord
                                tpj("#top-primary-nav").menuzord({
                                    align: "right",
                                    effect: "slide",
                                    animation: "none",
                                    showSpeed: 200,
                                    hideSpeed: 200,
                                    trigger: "click",
                                    showDelay: 0,
                                    hideDelay: 0,
                                    responsive: true,
                                    show: function() {
                                        tpj(this).find(".menuzord-menu").addClass("show");
                                    },
                                    hide: function() {
                                        tpj(this).find(".menuzord-menu").removeClass("show");
                                    }
                                });
                                // Manual toggle for mobile menu
                                tpj(".showhide").on("click", function() {
                                    tpj(".menuzord-menu").toggleClass("show");
                                    tpj(".dropdown").removeClass("show"); // Close dropdowns when toggling
                                });
                                // Handle dropdowns on mobile
                                tpj(".menuzord-menu > li > a").on("click", function(e) {
                                    if (tpj(window).width() <= 991) {
                                        var dropdown = tpj(this).next(".dropdown");
                                        if (dropdown.length) {
                                            e.preventDefault();
                                            dropdown.toggleClass("show");
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <!-- Welcome Section -->
        <section class="bg-theme-colored1" style="background-color: #0052A5 !important;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-white">Welcome To Izere Mubyeyi Non-Profit & Organization</h2>
                            <p class="lead text-white">Empowering Children with Disabilities – Strengthening Families, Transforming Communities</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values Section -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row" data-tm-margin-top="-100px">
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
            </div>
        </section>

        <!-- Who We Are Section -->
        <section style="background-color: #ffffff !important;">
            <div class="container">
                <div class="section-content">
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
            </div>
        </section>

        <!-- Volunteer Call to Action -->
        <section class="divider" style="background-color: #0052A5 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="text-white font-weight-600" style="font-size: 36px;">Join Us as a Volunteer</h2>
                        <p class="text-white" style="font-size: 16px;">Be part of our mission to empower children with disabilities and transform communities. Sign up today!</p>
                        <div class="tm-sc tm-sc-button text-center mt-15">
                            <a href="{{ route('volunteer-form') }}" target="_self" class="btn btn-round" style="background-color: #002c42 !important; color: #FFC107 !important;">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do Section -->
        <section class="bg-no-repeat bg-img-right-bottom" style="background-color: #f8f9fa !important;" data-tm-bg-img="{{ asset('images/causes/semi-circle.png') }}">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <h2 class="title text-uppercase mt-0"><span class="text-dark">What</span> <span style="color: #0052A5;">We Do</span></h2>
                            <p class="text-muted">We empower children with disabilities through inclusive education, health care, family support, advocacy, and community engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
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
            </div>
        </section>

        <!-- Photo Gallery Section -->
        <section>
            <div class="container">
                <div class="section-title text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <h2 class="title text-uppercase mt-0"><span>Photo</span> <span class="text-theme-colored1">Gallery</span></h2>
                            <p>Explore our impactful moments and activities through our photo gallery.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
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
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{ asset('images/bg/izere1.jpg') }}" alt="Gallery Image"></a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{ asset('images/bg/P1110133-1024x768.jpg') }}" data-src="{{ asset('images/bg/children-eating-at-school-2-1.jpg') }}" title="Project Title" href="{{ asset('images/bg/izere3.jpg') }}"><i class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item" title="Project Title" href="#"><i class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="title-holder">
                                                                        <h5 class="title"><a href="#">Project Title</a></h5>
                                                                    </div>
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
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="layer-overlay overlay-white-4" data-tm-bg-color="#f8f4f0" data-tm-bg-img="{{ asset('images/testimonials/bg.png') }}">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <h2 class="title text-uppercase mt-0"><span>Clients</span> <span class="text-theme-colored1">Testimonials</span></h2>
                            <p>Hear from those who have experienced the impact of our work.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tm-sc tm-sc-testimonials tm-sc-testimonials-masonry testimonial-style4-modern testimonial-has-quote-icon">
                                <div class="isotope-layout masonry grid-3 clearfix">
                                    <div class="isotope-item isotope-item-sizer"></div>
                                    @foreach ([
                                        ['name' => 'Masa Daw', 'position' => 'Employee', 'image' => 'images/testimonials/1.png', 'rating' => '80%'],
                                        ['name' => 'Ismo Duo', 'position' => 'C.E.O', 'image' => 'images/testimonials/2.jpg', 'rating' => '90%'],
                                        ['name' => 'Zakaria Jacon', 'position' => 'Employee', 'image' => 'images/testimonials/3.jpg', 'rating' => '100%']
                                    ] as $testimonial)
                                        <div class="isotope-item">
                                            <div class="tm-testimonial testimonials type-testimonials">
                                                <div class="testimonial-inner">
                                                    <div class="testimonial-text-holder bg-white">
                                                        <div class="author-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati.</div>
                                                        <div class="star-rating">
                                                            <span data-tm-width="{{ $testimonial['rating'] }}"></span>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-author-details">
                                                        <div class="testimonial-image-holder">
                                                            <div class="author-thumb">
                                                                <img src="{{ asset($testimonial['image']) }}" class="img-thumbnail rounded-circle wp-post-image" alt="{{ $testimonial['name'] }} testimonial">
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-author-info-holder">
                                                            <span class="name">{{ $testimonial['name'] }}</span>
                                                            <span class="job-position">{{ $testimonial['position'] }}</span>
                                                            <a class="company-url" href="http://www.izeremubyeyi.org">izeremubyeyi.org</a>
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

        <!-- Contact Us Section -->
        <section id="contact" style="background-color: #f8f9fa !important;">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <h2 class="title text-uppercase mt-0"><span>Contact</span> <span class="text-theme-colored1">Us</span></h2>
                            <p>Get in touch with us for more information or to join our mission.</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-20">Contact Information</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker mr-10"></i>KK 35 Avenue, Kicukiro District, Kigali, Rwanda</li>
                                <li><i class="fa fa-phone mr-10"></i>+250786721626</li>
                                <li><i class="fa fa-envelope-o mr-10"></i><a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a></li>
                            </ul>
                            <h4 class="mt-20 mb-20">Our Location</h4>
                            <div id="googleMap"></div>
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
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required aria-label="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required aria-label="Your Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required aria-label="Your Message"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-theme-colored1 btn-round">Send Message</button>
                                </div>
                                <div id="formMessage"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer" style="background-color: #0052A5 !important;">
        <div class="footer-widget-area">
            <div class="container pt-40 pb-40">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-contact-info">
                            <div class="tm-widget tm-widget-contact-info contact-info contact-info-style1 contact-icon-theme-colored1">
                                <div class="description">KK 35 Avenue, Kicukiro District, Kigali, Rwanda</div>
                                <ul>
                                    <li class="contact-email">
                                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="text"><a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a></div>
                                    </li>
                                    <li class="contact-phone">
                                        <div class="icon"><i class="fa fa-phone"></i></div>
                                        <div class="text">+250786721626</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-social-list-custom">
                            <h4 class="widget-title text-white">Follow Us</h4>
                            <ul class="tm-widget tm-widget-social-list tm-widget-social-list-custom styled-icons icon-dark icon-rounded icon-theme-colored1">
                                <li><a class="social-link" href="https://facebook.com/izeremubyeyi"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="social-link" href="https://twitter.com/izeremubyeyi"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="social-link" href="https://youtube.com/izeremubyeyi"><i class="fab fa-youtube"></i></a></li>
                                <li><a class="social-link" href="https://instagram.com/izeremubyeyi"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title text-white">Quick Links</h4>
                            <div class="menu-quick-links-container">
                                <ul class="menu">
                                    <li><a href="{{ route('who-we-are') }}">About Us</a></li>
                                    <li><a href="{{ route('public.events.index') }}">Events</a></li>
                                    <li><a href="{{ route('news-updates') }}">News Updates</a></li>
                                    <li><a href="{{ route('donate') }}">Donate</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-blog-list">
                            <h4 class="widget-title text-white">Latest News</h4>
                            <div class="tm-widget tm-widget-blog-list">
                                @foreach ([
                                    ['title' => 'Water for Poor Children', 'image' => 'images/blog/3.jpg', 'date' => '2019-05-15'],
                                    ['title' => 'School for Poor', 'image' => 'images/blog/4.jpg', 'date' => '2019-07-15'],
                                    ['title' => 'Shelter for Homeless', 'image' => 'images/blog/5.jpg', 'date' => '2019-09-15']
                                ] as $post)
                                    <article class="post media-post clearfix">
                                        <a class="post-thumb" href="#"><img width="100" height="70" src="{{ asset($post['image']) }}" class="" alt="{{ $post['title'] }}"></a>
                                        <div class="post-right">
                                            <h5 class="post-title"><a href="#">{{ $post['title'] }}</a></h5>
                                            <span class="post-date">
                                                <time class="entry-date" datetime="{{ $post['date'] }}T06:10:26+00:00">{{ \Carbon\Carbon::parse($post['date'])->format('F d, Y') }}</time>
                                            </span>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-opening-hours-compressed">
                            <h4 class="widget-title text-white">Opening Hours</h4>
                            <ul class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
                                <li class="clearfix"><span>Monday - Tuesday</span><div class="value">9:00 - 17:00</div></li>
                                <li class="clearfix"><span>Wednesday</span><div class="value">9:00 - 16:00</div></li>
                                <li class="clearfix"><span>Thursday - Friday</span><div class="value">9:00 - 16:00</div></li>
                                <li class="clearfix"><span>Saturday</span><div class="value">9:00 - 16:00</div></li>
                                <li class="clearfix"><span>Sunday</span><div class="value">Closed</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" style="background-color: #002c42 !important;">
                <div class="container">
                    <div class="row pt-20 pb-20 justify-content-center">
                        <div class="col-sm-12">
                            <div class="footer-paragraph text-white">
                                © 2025 Izere Mubyeyi Organization. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </footer>

    <!-- Footer Scripts -->
    <script src="{{ asset('assets/dist/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}" defer></script>
    <!-- Google Maps Initialization -->
    <script>
        function initMap() {
            var location = { lat: -1.961054, lng: 30.108164 }; // Approximate coordinates for KK 35 Ave, Kicukiro, Kigali
            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Izere Mubyeyi Organization - KK 35 Avenue, Kicukiro District'
            });
        }
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>
</html>