<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Izere Mubyeyi Organization - Empowering Children with Disabilities"/>
    <meta name="keywords" content="disability, inclusion, education, health, advocacy, Rwanda"/>
    <meta name="author" content="Izere Mubyeyi Organization"/>

    <!-- Page Title -->
    <title>Events - Izere Mubyeyi Organization NGO</title>

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

    <!-- Revolution Slider 5.x CSS -->
    <link href="{{ asset('assets/dist/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/dist/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/dist/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

    <!-- External JavaScripts -->
    <script src="{{ asset('assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" defer></script>

    <style>
        :root {
            --primary-blue: #0052A5; /* NUDOR Blue */
            --accent-yellow: #FFC107; /* NUDOR Yellow */
            --secondary-green: #009A49; /* NUDOR Green */
            --background-white: #FFFFFF; /* NUDOR White */
        }
        .section {
            position: relative;
        }
        .text-theme-colored1 {
            color: var(--primary-blue) !important;
        }
        .text-theme-colored2 {
            background-color: var(--accent-yellow) !important;
            color: var(--background-white) !important;
        }
        .btn-theme-colored1 {
            background-color: var(--primary-blue);
            color: var(--background-white);
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-theme-colored2 {
            background-color: var(--accent-yellow);
            color: var(--background-white);
            padding: 10px 20px;
            border-radius: 5px;
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
            background-color: var(--background-white);
        }
        .card-body {
            padding: 25px;
        }
        .content-section h4 {
            font-size: 1.4rem;
            font-weight: bold;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        .content-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
        }
        .event-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .event-card .card-body {
            padding: 20px;
        }
        .event-card h5 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        .event-card p {
            font-size: 1.0rem;
            line-height: 1.6;
            color: #333;
        }
        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            margin-bottom: 15px;
        }
        .no-events {
            font-size: 1.1rem;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }
        .footer-widget-area {
            background-color: var(--primary-blue) !important;
        }
        .footer-widget-area .widget h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--background-white) !important;
        }
        .footer-widget-area ul li {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .footer-widget-area .contact-info .description {
            font-size: 1.1rem;
            font-weight: 400;
            color: var(--background-white) !important;
        }
        .footer-widget-area .contact-info .text {
            font-size: 1.1rem;
            font-weight: 400;
            color: var(--background-white) !important;
        }
        .footer-widget-area .contact-info .text a {
            color: var(--background-white) !important;
        }
        .footer-widget-area .contact-info .text a:hover {
            text-decoration: underline;
            color: var(--accent-yellow) !important;
        }
        .footer-widget-area .menu-quick-links-container a {
            font-size: 1.1rem;
            font-weight: 400;
            color: var(--background-white) !important;
        }
        .footer-widget-area .menu-quick-links-container a:hover {
            text-decoration: underline;
            color: var(--accent-yellow) !important;
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
            background-color: var(--primary-blue) !important;
        }
        .footer-paragraph {
            color: var(--background-white);
            font-size: 1.0rem;
            font-weight: 400;
            text-align: center;
        }
        @media (max-width: 767px) {
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
                                            <ul id="main-nav" class="menuzord-menu">
                                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                                <li class="{{ Route::is('who-we-are', 'our-founders', 'our-board', 'our-staff', 'our-values', 'our-history', 'mission-vision') ? 'active' : '' }}">
                                                    <a href="#">Who We Are</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('who-we-are') }}">About Us</a></li>
                                                        <li><a href="{{ route('our-founders') }}">Our Founders</a></li>
                                                        <li><a href="{{ route('our-board') }}">Our Board</a></li>
                                                        <li><a href="{{ route('our-staff') }}">Our Staff</a></li>
                                                        <li><a href="{{ route('our-values') }}">Our Values</a></li>
                                                        <li><a href="{{ route('our-history') }}">Our History</a></li>
                                                        <li><a href="{{ route('mission-vision') }}">Our Mission and Vision</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('inclusive-education', 'health-care', 'capacity-building', 'research-advocacy', 'family-resilience', 'community-engagement') ? 'active' : '' }}">
                                                    <a href="#">What We Do</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('inclusive-education') }}">Inclusive and Special Needs Education</a></li>
                                                        <li><a href="{{ route('health-care') }}">Essential Health Care</a></li>
                                                        <li><a href="{{ route('capacity-building') }}">Capacity Building</a></li>
                                                        <li><a href="{{ route('research-advocacy') }}">Research and Advocacy</a></li>
                                                        <li><a href="{{ route('family-resilience') }}">Family Resilience</a></li>
                                                        <li><a href="{{ route('community-engagement') }}">Community Engagement</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('events.index', 'news-updates', 'publications', 'gallery') ? 'active' : '' }}">
                                                    <a href="#">Media</a>
                                                    <ul class="dropdown">
                                                        <li class="{{ Route::is('events.index') ? 'active' : '' }}"><a href="{{ route('events.index') }}">Events</a></li>
                                                        <li><a href="{{ route('news-updates') }}">News Updates</a></li>
                                                        <li><a href="{{ route('publications') }}">Publications</a></li>
                                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Opportunities</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('careers') }}">Careers</a></li>
                                                        <li><a href="{{ route('tenders') }}">Tenders</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                <li><a href="{{ route('donate') }}">Donate</a></li>
                                                <li><a href="{{ route('login') }}">Login</a></li>
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

    <!-- Main Content -->
    <div id="main-content">
        <!-- Events Hero Section -->
        <section class="section" data-tm-bg-color="var(--primary-blue)">
            <div class="container pt-40 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-4">Events</h1>
                            <p class="text-white lead">Join Us in Making a Difference</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Content Section -->
        <section class="section">
            <div class="container pt-20 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="content-section">
                                        <h4>Our Events</h4>
                                        <p>Stay updated on our key events, including awareness campaigns, training workshops, advocacy forums, and community celebrations. These events bring together communities, families, and stakeholders to promote inclusion, share knowledge, and celebrate the achievements of children with disabilities.</p>

                                        <h4>Upcoming Events</h4>
                                        @if($events->isEmpty())
                                            <p class="no-events">No upcoming events at the moment. Please check back later for updates.</p>
                                        @else
                                            <div class="row">
                                                @foreach($events as $event)
                                                    <div class="col-md-6">
                                                        <div class="event-card">
                                                            @if($event->image)
                                                                <a href="{{ route('events.show', $event->id) }}">
                                                                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->title }}">
                                                                </a>
                                                            @else
                                                                <a href="{{ route('events.show', $event->id) }}">
                                                                    <img src="{{ asset('images/placeholder-event.jpg') }}" alt="Event Placeholder">
                                                                </a>
                                                            @endif
                                                            <div class="card-body">
                                                                <h5><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></h5>
                                                                <p>
                                                                    <strong>Date:</strong> {{ $event->date_time->format('F j, Y, g:i A') }}<br>
                                                                    <strong>Location:</strong> {{ $event->location }}<br>
                                                                    <strong>Description:</strong> {{ Str::limit($event->description, 100, '...') }}
                                                                </p>
                                                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-theme-colored2 btn-sm">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
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
                            <h2 class="text-theme-colored1 mb-30">Get Involved</h2>
                            <p class="lead mb-30">Join our events to support inclusion and empower children with disabilities.</p>
                            <a href="{{ route('contact') }}" class="btn btn-theme-colored2 btn-lg">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                <div class="thumb">
                                    <img alt="Izere Mubyeyi Logo" src="{{ asset('images/logo-wide-white.png') }}" style="max-width: 80px;">
                                </div>
                                <div class="description">KK 35 Avenue, Kicukiro District, Rwanda</div>
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
                            <div class="widget widget-social-list-custom">
                                <ul class="tm-widget tm-widget-social-list tm-widget-social-list-custom styled-icons icon-dark icon-rounded icon-theme-colored1">
                                    <li><a class="social-link" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="social-link" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="social-link" href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="social-link" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <div class="menu-quick-links-container">
                                <ul class="menu">
                                    <li><a href="{{ route('who-we-are') }}">About Us</a></li>
                                    <li><a href="#">Online Video</a></li>
                                    <li><a href="{{ route('contact') }}">Contact with Us</a></li>
                                    <li><a href="{{ route('news-updates') }}">News Portal</a></li>
                                    <li><a href="#">Press Release</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="widget widget-opening-hours-compressed">
                            <ul class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
                                <li class="clearfix"><span>Monday - Friday</span><div class="value">9.00 - 17.00</div></li>
                                <li class="clearfix"><span>Saturday</span><div class="value">9.00 - 16.00</div></li>
                                <li class="clearfix"><span>Sunday</span><div class="value">Closed</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-tm-bg-color="var(--primary-blue)">
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
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

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
</body>
</html>
