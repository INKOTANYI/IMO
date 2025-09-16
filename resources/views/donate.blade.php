<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Donate to Izere Mubyeyi Organization - Support Inclusion for Children with Disabilities"/>
    <meta name="keywords" content="donate, disability inclusion, children, Rwanda, empowerment"/>
    <meta name="author" content="Izere Mubyeyi Organization"/>
    <meta property="og:title" content="Donate - Izere Mubyeyi Organization NGO"/>
    <meta property="og:description" content="Support Izere Mubyeyi Organization’s mission to empower children with disabilities through education, health care, and community inclusion in Rwanda."/>
    <meta property="og:image" content="{{ asset('images/bg/Logo-izere.png') }}"/>
    <meta property="og:url" content="{{ url('/donate') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <link rel="canonical" href="{{ url('/donate') }}"/>

    <!-- Page Title -->
    <title>Donate - Izere Mubyeyi Organization NGO</title>

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
        }
        .btn-theme-colored2 {
            background-color: #FFC107;
            color: #fff;
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
            background-color: #fff;
        }
        .card-body {
            padding: 25px;
        }
        .content-section h4 {
            font-size: 1.4rem;
            font-weight: bold;
            color: #0052A5;
            margin-bottom: 10px;
        }
        .content-section h5 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0052A5;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .content-section h5 i {
            margin-right: 10px;
            color: #009A49;
        }
        .content-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
            padding-left: 30px;
        }
        .content-section ul {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
            padding-left: 30px;
        }
        .content-section ul li {
            margin-bottom: 8px;
        }
        .content-section .donation-card {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .content-section .donation-card ul li strong {
            font-weight: 700;
            font-size: 1.15rem;
            color: #0052A5;
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
    <div id="main-content" role="main">
        <!-- Donation Hero Section -->
        <section class="section" data-tm-bg-color="#0052A5">
            <div class="container pt-40 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-4">Donate Now</h1>
                            <p class="text-white lead">Support Our Mission for Inclusion</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donation Content Section -->
        <section class="section">
            <div class="container pt-20 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="content-section">
                                        <h4>Join Our Movement</h4>
                                        <div class="donation-card">
                                            <h5><i class="fas fa-heart"></i> Make a Difference</h5>
                                            <p>Your generosity empowers children with intellectual disabilities to learn, grow, and thrive. By supporting Izere Mubyeyi Organization, you’re helping build a Rwanda where every child is valued, families are strengthened, and communities embrace inclusion. Together, we can transform lives!</p>
                                        </div>
                                        <div class="donation-card">
                                            <h5><i class="fas fa-map-marker-alt"></i> Our Location</h5>
                                            <p>KK 35 Avenue<br>Kanombe Sector<br>Kicukiro District<br>Kigali City, Rwanda</p>
                                        </div>
                                        <div class="donation-card">
                                            <h5><i class="fas fa-university"></i> Where to Send Your Donation</h5>
                                            <p>Please make your donation via bank transfer using the details below and contact us at <a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a> to confirm your contribution:</p>
                                            <ul>
                                                <li><strong>Bank Name:</strong> Bank Of Kigali Plc</li>
                                                <li><strong>Account Name:</strong> Izere Mubyeyi Organization</li>
                                                <li><strong>Account Number:</strong> 100015930513/RWF</li>
                                                <li><strong>SWIFT Code:</strong> BKIGRWRW</li>
                                                <li><strong>Branch:</strong> Giporoso Branch</li>
                                            </ul>
                                            <p>Every contribution, no matter the size, brings us closer to a more inclusive future. Thank you for your support!</p>
                                        </div>
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
                                    <li><a href="{{ route('who-we-are') }}" {{ Route::is('who-we-are') ? 'aria-current="page"' : '' }}>About Us</a></li>
                                    <li><a href="{{ route('gallery') }}" {{ Route::is('gallery') ? 'aria-current="page"' : '' }}>Gallery</a></li>
                                    <li><a href="{{ route('contact-us') }}" {{ Route::is('contact-us') ? 'aria-current="page"' : '' }}>Contact with Us</a></li>
                                    <li><a href="{{ route('news-updates') }}" {{ Route::is('news-updates') ? 'aria-current="page"' : '' }}>News Portal</a></li>
                                    <li><a href="{{ route('publications') }}" {{ Route::is('publications') ? 'aria-current="page"' : '' }}>Publications</a></li>
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