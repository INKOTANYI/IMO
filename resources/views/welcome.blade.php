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
    .header-nav .header-nav-wrapper { background-color: #009A49 !important; }
    .header-nav .header-nav-wrapper.navbar-scrolltofixed { background-color: #009A49 !important; }
    .header-nav .header-nav-wrapper.navbar-scrolltofixed.is-fixed { background-color: #009A49 !important; }
    .menuzord .menuzord-menu > li > a { color: #FFFFFF; }
    .menuzord .menuzord-menu > li > a:hover { color: #FFC107; }
    .dropdown { background-color: #0052A5; }
    .menuzord .dropdown { background-color: #0052A5 !important; }
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
    section { padding: 16px 0 !important; }
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
    .widget.widget_nav_menu .menu-quick-links-container ul.menu li a { color: #FFFFFF !important; font-size: 0.95rem; transition: color 0.3s ease; }
    .widget.widget_nav_menu .menu-quick-links-container ul.menu li a:hover { color: #FFC107 !important; text-decoration: none; }
    .tp-caption { color: #FFFFFF; text-shadow: 2px 3px 10px rgba(0,0,0,0.85); padding: 6px 10px; font-family: 'Roboto', sans-serif; letter-spacing: .2px; white-space: normal !important; max-width: 92vw; text-align: center; display: inline-block; }
    .rev-slidebg { object-fit: cover; width: 100%; height: 100%; filter: brightness(0.7); }
    .btn-slider { transition: all 0.3s ease; border-radius: 50px; padding: 12px 30px; }
    .btn-slider:hover { transform: scale(1.1); box-shadow: 0 4px 12px rgba(0,0,0,0.4); background-color: #FFD54F !important; }
    .btn-slider-secondary { border: 2px solid #FFFFFF; background-color: transparent !important; color: #FFFFFF !important; }
    .btn-slider-secondary:hover { background-color: #0052A5 !important; color: #FFFFFF !important; border-color: #0052A5; }

    /* Hide slider arrows and style bullets */
    .tparrows { display: none !important; }
    .tp-bullets { display: none !important; }
    .tp-bullets .tp-bullet { display: none !important; }

    /* Service cards hover and shadows */
    .tm-service { border-radius: 14px; box-shadow: 0 6px 18px rgba(0,0,0,0.10) !important; transition: transform .2s ease, box-shadow .2s ease !important; }
    .tm-service:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(0,0,0,0.18) !important; }
    .tm-service .title a { color: #003d76; font-weight: 700; }
    .tm-service .title a:hover { color: #0052A5; text-decoration: none; }
    .tm-service .paragraph { color: #495057; }

    /* Hero overlay for better readability */
    .rev_slider_wrapper { position: relative; }
    .rev_slider_wrapper::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.35) 35%, rgba(0,0,0,0.35) 65%, rgba(0,0,0,0.6) 100%);
      pointer-events: none;
      z-index: 1; /* above image */
    }
    .rev_slider { position: relative; z-index: 2; } /* captions/buttons stay above overlay */
    .rev-slidebg { position: relative; z-index: 0; }

    /* Remove background from captions on desktop; use subtle bg on small screens */
    .tp-caption { background: transparent; }

    /* Volunteer + footer spacing refinements */
    #volunteer { padding: 24px 0 !important; background: linear-gradient(90deg, #0052A5 0%, #0079d3 100%) !important; }
    .welcome-banner { position: relative; padding: 8px 0 !important; }
    .welcome-banner h2 { margin-bottom: 2px; }
    .welcome-banner .lead { margin-bottom: 0; }
    #volunteer .btn { padding: 10px 18px; box-shadow: 0 6px 14px rgba(0,0,0,0.18); border-radius: 9999px; }
    #volunteer .btn:hover { transform: translateY(-1px); }

    /* Footer: use original inline styles from markup; no fixed positioning */
    /* Intentionally no overriding CSS here to respect section's inline styles */

    /* Footer compact tweaks (keep existing colors) */
    footer.footer .footer-widget-area { padding-top: 8px !important; padding-bottom: 8px !important; }
    footer.footer .container.pt-40.pb-40 { padding-top: 10px !important; padding-bottom: 10px !important; }
    footer.footer .widget-title { font-size: 1.02rem; margin-bottom: 6px; }
    /* Quick Links: remove decorative arrows and extra indent */
    footer.footer .widget_nav_menu ul.menu { list-style: none; margin: 0; padding: 0; }
    footer.footer .widget_nav_menu ul.menu li { margin: 4px 0; }
    footer.footer .widget_nav_menu ul.menu li a { padding-left: 0 !important; position: relative; }
    footer.footer .widget_nav_menu ul.menu li a::before { content: none !important; }
    /* Opening Hours: tighter rows */
    footer.footer .tm-widget-opening-hours li { margin: 4px 0; line-height: 1.2; }
    footer.footer .tm-widget-opening-hours .value { font-weight: 600; }
    /* Social icons smaller and tighter */
    footer.footer .tm-widget-social-list .social-link i { font-size: 14px; }
    footer.footer .tm-widget-social-list .social-link { width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center; }
    /* Bottom bar compact */
    footer.footer .footer-bottom .row.pt-20.pb-20 { padding-top: 8px !important; padding-bottom: 8px !important; }

    /* Subtle vertical separators between footer columns on desktop */
    @media (min-width: 992px) {
      footer.footer .footer-widget-area .row > [class*="col-"]:not(:first-child) {
        border-left: 1px solid rgba(255,255,255,0.18);
      }
      footer.footer .footer-widget-area .row > [class*="col-"]:not(:first-child) { padding-left: 18px; }
    }
    @media (max-width: 991px) {
      footer.footer .footer-widget-area .row > [class*="col-"] { border-left: none; padding-left: 15px; }
    }

    /* Visual separation above footer (no color change) */
    footer.footer { margin-top: 0 !important; position: relative; }
    footer.footer::before { content: ''; position: absolute; top: -1px; left: 0; right: 0; height: 0; }

    /* Modern footer & CTA styles (local to footer area) */
    .footer-modern { background: #0a1a2b !important; }
    .footer-modern .footer-bottom { background: #071421 !important; }
    .footer-modern .footer-paragraph { color: #94a3b8 !important; }
    .footer-modern .widget-title { color: #e2e8f0 !important; font-weight: 800; }
    .footer-modern a { color: #e2e8f0 !important; }
    .footer-modern a:hover { color: #FFC107 !important; }
    .footer-modern .tm-widget-opening-hours span, .footer-modern .tm-widget-opening-hours .value { color: #cbd5e1; }
    .footer-modern .contact-card { border: 1px solid rgba(148,163,184,0.25); border-radius: 12px; padding: 14px; background: rgba(2,6,23,0.15); }
    .footer-modern .contact-card .icon { color: #FFC107; margin-right: 10px; }
    .footer-modern .social-link { background: #0f243a; color: #e2e8f0 !important; border-radius: 8px; width: 36px; height: 36px; display:inline-flex;align-items:center;justify-content:center; }
    .footer-modern .social-link:hover { background: #183556; }
    /* Center footer content */
    footer.footer .footer-widget-area .row { justify-content: center; text-align: center; }
    footer.footer .footer-widget-area .widget-title, footer.footer .footer-paragraph { text-align: center; }

    /* CTA subscribe (green) */
    .cta-band { background: transparent; padding: 0; margin-top: 10px !important; margin-bottom: 10px !important; }
    .cta-band .container { padding-top: 0 !important; padding-bottom: 0 !important; }
    .cta-card { margin: 0 !important; }
    .cta-card { background: #009A49; border: none; border-radius: 12px; padding: 12px; color: #ffffff; display: flex; align-items: center; justify-content: space-between; gap: 14px; }
    .cta-card h3 { margin: 0; font-weight: 800; font-size: 1.05rem; color: #ffffff; }
    .subscribe-wrap { display: flex; align-items: center; gap: 10px; width: 100%; max-width: 520px; }
    .subscribe-input { flex: 1; background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); color: #ffffff; padding: 10px 12px; border-radius: 10px; outline: none; }
    .subscribe-input::placeholder { color: rgba(255,255,255,0.85); }
    .subscribe-btn { background: #FFC107; color: #0f172a; font-weight: 700; padding: 10px 14px; border-radius: 10px; border: none; cursor: pointer; white-space: nowrap; }
    .subscribe-note { font-size: .85rem; color: rgba(255,255,255,0.9); margin-top: 6px; }
    @media (max-width: 768px){ .cta-card { flex-direction: column; align-items: stretch; } .subscribe-wrap { max-width: 100%; } }

    /* Compact contact/footer spacing */
    #contact { padding-top: 4px !important; padding-bottom: 0 !important; }
    #contact .container { padding-bottom: 0 !important; }
    #contact .row:last-child { margin-bottom: 0 !important; }
    #contact h4 { margin-bottom: 6px !important; }
    #contact .map-responsive { margin-bottom: 10px; }

    /* Footer top padding tighter so it sits closer to CTA */
    footer.footer .footer-widget-area { padding-top: 4px !important; }
    footer.footer .container.pt-20.pb-20 { padding-top: 6px !important; }

    /* Modal popup for newsletter success */
    .modal-backdrop-lite { position: fixed; inset: 0; background: rgba(0,0,0,0.45); display: none; align-items: center; justify-content: center; z-index: 1050; }
    .modal-card { background: #ffffff; border-radius: 12px; padding: 18px; width: 90%; max-width: 420px; box-shadow: 0 10px 24px rgba(0,0,0,0.2); text-align: center; }
    .modal-card h4 { margin: 0 0 6px; color: #0f172a; font-weight: 800; }
    .modal-card p { margin: 0; color: #334155; }

    /* Updated CSS for mobile menu toggle */
    @media (max-width: 991px) {
      /* Smaller top header on tablet/phone */
      .header-top { padding: 6px 0 !important; }
      .header-top .element.contact-info li { font-size: 0.95rem; }

      /* Hide hero buttons on tablet/phone */
      .btn-slider { display: none !important; }

      /* Mobile menu links in white */
      .dropdown-item, .menuzord-menu > li > a { color: #ffffff !important; }
      /* Hide welcome banner on phones/tablets */
      .welcome-banner { display: none !important; }
    }

    .welcome-banner .container { padding-top: 10px !important; padding-bottom: 15px !important; }
    .welcome-banner { margin-bottom: 10px !important; }
    .welcome-banner h2 { margin-bottom: 6px !important; }
    .welcome-banner p { margin-bottom: 8px !important; }
    #who-we-are { margin-top: 10px !important; padding-top: 0 !important; margin-bottom: 10px !important; }
    #who-we-are .container { padding-top: 0 !important; padding-bottom: 0 !important; }
    #mission-vision { margin-top: 0 !important; padding-top: 0 !important; }
    #mission-vision .container { padding-top: 0 !important; }
    /* What We Do spacing: keep only 10px between sections */
    #what-we-do { margin-top: 10px !important; margin-bottom: 10px !important; padding-top: 0 !important; padding-bottom: 0 !important; }
    #what-we-do .container { padding-top: 0 !important; padding-bottom: 0 !important; }

    /* Global: keep 10px gap between all homepage sections */
    section { margin-top: 10px !important; margin-bottom: 10px !important; }
    section > .container { padding-top: 0 !important; padding-bottom: 0 !important; }

    .menuzord .dropdown > li > a { color: #FFFFFF !important; }

      .menuzord-menu-toggle {
        display: block;
        font-size: 1.5rem;
        color: #FFFFFF;
        padding: 15px;
      }
      .menuzord-menu > li {
        display: block;
        text-align: left;
      }
      .menuzord-menu > li > a {
        padding: 15px 20px;
        display: block;
        font-size: 1.2rem;
        color: #FFFFFF;
      }
      .dropdown > li > a {
        padding: 12px 30px;
        font-size: 1.1rem;
        color: #FFFFFF;
      }
      .dropdown > li > a:hover {
        background-color: #FFC107;
        color: #0052A5;
      }
    }
    /* Menu active/hover: white background with green text */
    .menuzord-menu > li:hover > a,
    .menuzord-menu > li > a:focus,
    .menuzord-menu > li.active > a { background:#ffffff !important; color:#009A49 !important; }
    .menuzord .dropdown > li:hover > a,
    .menuzord .dropdown > li > a:focus,
    .menuzord .dropdown > li.active > a { background:#ffffff !important; color:#009A49 !important; }
    @media (max-width: 768px) {
      .tp-caption { font-size: 1.28rem !important; line-height: 1.55 !important; padding: 8px 12px; background: rgba(0,0,0,0.30); border-radius: 8px; }
      .rev_slider_wrapper { height: 420px !important; }
      /* Force absolute-positioned RS elements to center horizontally */
      .rev_slider .tp-mask-wrap,
      .rev_slider .tp-parallax-wrap,
      .rev_slider .tp-caption { left: 50% !important; transform: translateX(-50%) !important; margin-left: 0 !important; text-align: center !important; }
    
      /* Even tighter top header on phones */
      .header-top { padding: 4px 0 !important; }
      .header-top .element.contact-info li { font-size: 0.9rem; }
      .menuzord-menu > li > a { font-size: 1.3rem; }
      .dropdown > li > a { font-size: 1.2rem; }
      section { padding: 15px 0 !important; }
      .tm-service { min-height: 300px; padding: 15px; }
    }
    @media (max-width: 480px) {
      .tp-caption { font-size: 1.15rem !important; line-height: 1.55 !important; padding: 8px 10px; background: rgba(0,0,0,0.34); border-radius: 8px; }
      .rev_slider_wrapper { height: 400px !important; }
      .rev_slider .tp-mask-wrap,
      .rev_slider .tp-parallax-wrap,
      .rev_slider .tp-caption { left: 50% !important; transform: translateX(-50%) !important; margin-left: 0 !important; text-align: center !important; }
      .btn-slider { padding: 8px 15px; font-size: 1.0rem !important; }
      .menuzord-menu > li > a { font-size: 1.2rem; }
      .dropdown > li > a { font-size: 1.1rem; }
      section { padding: 10px 0 !important; }
      .tm-service { min-height: 250px; padding: 10px; font-size: 0.9rem; }
      .welcome-banner { padding: 8px 0 !important; }
    }

    /* Custom CSS for scrolling partners */
    #partners .partners-scroll {
      overflow-x: auto;
      white-space: nowrap;
      padding: 20px 0;
      -webkit-overflow-scrolling: touch;
    }
    #partners .partners-scroll .tm-partner {
      display: inline-block;
      vertical-align: middle;
      margin: 0 15px;
      transition: transform 0.3s ease;
    }
    #partners .partners-scroll .tm-partner:hover {
      transform: scale(1.1);
    }
    #partners .partners-scroll img {
      max-height: 100px;
      width: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    @media (max-width: 768px) {
      #partners .partners-scroll img { max-height: 80px; }
    }
    @media (max-width: 480px) {
      #partners .partners-scroll img { max-height: 60px; }
    }
  </style>

  <!-- Scripts (correct order) -->
  <script src="{{ asset('assets/dist/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}"></script>
  <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}" defer></script>

  <!-- Custom Script -->
  <script>
  $(document).ready(function() {
      // Initialize Menuzord
      try {
          $("#top-primary-nav").menuzord({
              showDelayed: 0,
              hideDelayed: 0,
              align: "right",
              clone: true,
              mobileMenu: { autoCollapse: true, scrollTo: false }
          });
      } catch (e) {
          console.error("Menuzord initialization failed:", e);
      }

      // Fix dropdowns for mobile
      $(document).on('click', '.menuzord-menu > li > a', function(e) {
          if ($(window).width() <= 991) {
              var $link = $(this);
              var $dropdown = $link.next('.dropdown');
              if ($dropdown.length) {
                  e.preventDefault();
                  // close others
                  $('.menuzord-menu .dropdown').not($dropdown).slideUp(300).removeClass('open');
                  // toggle this one
                  $dropdown.stop(true, true).slideToggle(300).toggleClass('open');
              }
          }
      });
  });
  </script>
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
                                                <li class="{{ Route::is('who-we-are', 'our-founders', 'our-board', 'our-staff', 'our-values', 'our-history', 'mission-vision') ? 'active' : '' }}"><a href="#">Who We Are</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('our-founders') }}">Our Founders</a></li>
                                                        <li><a href="{{ route('our-board') }}">Our Board</a></li>
                                                        <li><a href="{{ route('our-staff') }}">Our Staff</a></li>
                                                        <li><a href="{{ route('our-values') }}">Our Values</a></li>
                                                        <li><a href="{{ route('our-history') }}">Our History</a></li>
                                                        <li><a href="{{ route('mission-vision') }}">Our Mission and Vision</a></li>
                                                        <li><a href="{{ route('our-partners') }}">Our Partners</a></li>
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
                                                        <li><a href="{{ route('events.index') }}">Events</a></li>
                                                        <li><a href="{{ route('news-updates') }}">News Updates</a></li>
                                                        <li><a href="{{ route('publications') }}">Publications</a></li>
                                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Route::is('careers', 'tenders') ? 'active' : '' }}"><a href="#">Opportunities</a>
                                                    <ul class="dropdown">
                                                        <li><a href="#">Careers</a></li>
                                                        <li><a href="#">Tenders</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('/#contact') }}">Contact-Us</a></li>
                                                @guest
                                                <li><a href="#" data-toggle="modal" data-target="#loginModal">Admin</a></li>
                                                @else
                                                <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                                                @endguest
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Mobile Clone Nav -->
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
                        <div class="form-group form-check"><input type="checkbox" class="form-check-input" id="remember" name="remember"><label class="form-check-label" for="remember">Remember Me</label></div>
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
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="height: 6px; background-color: rgba(255,193,7,0.7);"></div>
                            </div>
                        </div>
                        <script>
                            var tpj=jQuery;tpj.noConflict();tpj(document).ready(function(){if(tpj("#rev_slider_home").revolution==undefined){console.error("Revolution Slider Error: Plugin not loaded");}else{tpj("#rev_slider_home").show().revolution({sliderType:"standard",jsFileLocation:"{{ asset('assets/dist/js/revolution-slider/js/') }}",sliderLayout:"fullwidth",dottedOverlay:"none",delay:5000,navigation:{keyboardNavigation:"on",keyboard_direction:"horizontal",mouseScrollNavigation:"off",onHoverStop:"on",touch:{touchenabled:"on",swipe_threshold:75,swipe_min_touches:1,swipe_direction:"horizontal",drag_block_vertical:false},arrows:{enable:true,style:'uranus',left:{h_align:"left",v_align:"center",h_offset:20,v_offset:0},right:{h_align:"right",v_align:"center",h_offset:20,v_offset:0}},bullets:{enable:true,style:'uranus',tmp:'',hide_onmobile:true,hide_under:600,hide_onleave:true,hide_delay:200,hide_delay_mobile:1200,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:20,space:10}},viewPort:{enable:true,outof:"wait",visible_area:"90%"},responsiveLevels:[1240,1024,768,480],gridwidth:[1200,1000,750,450],gridheight:[420,320,260,200],lazyType:"smart",parallax:{type:"scroll",origo:"enterpoint",speed:200,levels:[2,4,6,8,10,12,14,16,18,20]},shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",hideThumbsOnMobile:"on",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLimit:0,debugMode:false,fallbacks:{simplifyAll:"on",nextSlideOnWindowFocus:"off",disableFocusListener:false}})}});
                        </script>
                    </div>
                </div>
            </div>
        </section>

    <!-- Newsletter Success Modal -->
    <div id="nlModal" class="modal-backdrop-lite">
      <div class="modal-card">
        <h4 id="modalTitle">Notice</h4>
        <p id="modalText">Action completed.</p>
      </div>
    </div>

        <!-- Welcome Section -->
        <section class="bg-theme-colored1 welcome-banner" style="background-color: #0052A5 !important;">
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
                    <div class="col-md-12">
                        <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-text">
                                <h3 class="icon-box-title">What We Do</h3>
                                <div class="content">
                                    <p>At Izere Mubyeyi Organization, we turn vision into action. We work tirelessly to ensure that children and youth with intellectual and developmental disabilities, along with their families, are empowered, supported, and included in every aspect of society.</p>
                                    <p>Through a holistic approach that combines inclusive education, specialized health care, family and economic empowerment, research and advocacy, and community engagement, we break barriers, challenge stigma, and create lasting change. Every program we run is designed not only to meet immediate needs but to unlock potential, strengthen families, and transform communities.</p>
                                    <p>Our work is guided by compassion, professionalism, and a relentless commitment to inclusion, because we believe that every child deserves the chance to learn, grow, and thrive.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ([
                        ['route' => 'inclusive-education', 'icon' => 'fa-school', 'title' => 'Inclusive and Special Needs Education', 'desc' => 'Providing inclusive early childhood and primary education, individualized support, and vocational training for youth with disabilities.'],
                        ['route' => 'health-care', 'icon' => 'fa-heartbeat', 'title' => 'Specialized Health Care', 'desc' => 'Physiotherapy, occupational therapy, and psychosocial support for children, parents, teachers, and caregivers.'],
                        ['route' => 'capacity-building', 'icon' => 'fa-chalkboard-teacher', 'title' => 'Capacity Building', 'desc' => 'Training teachers, caregivers, and community representatives on inclusive practices and disability rights.'],
                        ['route' => 'family-resilience', 'icon' => 'fa-users', 'title' => 'Family Resilience & Economic Empowerment', 'desc' => 'Peer support networks, entrepreneurship training, and income-generating initiatives that strengthen families.'],
                        ['route' => 'research-advocacy', 'icon' => 'fa-bullhorn', 'title' => 'Research & Advocacy', 'desc' => 'Evidence generation, awareness-raising, and policy influence to advance disability rights and inclusion.'],
                        ['route' => 'community-engagement', 'icon' => 'fa-handshake', 'title' => 'Community Engagement', 'desc' => 'Mobilizing leaders and communities to challenge stigma and build disability-friendly practices.']
                    ] as $service)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="tm-service services type-services status-publish" style="background:#ffffff;border-radius:16px;box-shadow:0 10px 24px rgba(0,0,0,0.10);transition:transform .25s ease, box-shadow .25s ease; padding:22px; height:100%; display:flex;">
                                <div class="details" style="display:flex; flex-direction:column; gap:10px;">
                                    <div style="width:56px;height:56px;border-radius:12px;background:#e6f0fa;color:#0052A5;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas {{ $service['icon'] }}" style="font-size:24px;"></i>
                                    </div>
                                    <h4 class="title" style="margin:6px 0 0 0;">
                                        <a href="{{ route($service['route']) }}" style="color:#0f172a;font-weight:800;font-size:1.05rem; text-decoration:none;">{{ $service['title'] }}</a>
                                    </h4>
                                    <div class="paragraph text-muted" style="font-size:0.96rem;line-height:1.6;">{{ $service['desc'] }}</div>
                                    <div class="mt-auto">
                                        <a href="{{ route($service['route']) }}" class="btn btn-sm" style="background:#009A49;color:#fff;font-weight:700;border-radius:10px;padding:8px 14px;">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Volunteer With Us (Card) -->
        <section id="volunteer">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card" style="border:1px solid rgba(0,0,0,0.08); border-radius:12px; box-shadow:0 6px 16px rgba(0,0,0,0.06);">
                  <div class="card-body" style="padding:20px;">
                    <h2 class="mb-2 text-center" style="color:#0052A5; font-weight:800;">Volunteer with us</h2>
                    <p class="mb-3" style="margin-bottom:12px;">
                      Make a real difference in the lives of children, youth, and families. Our volunteer opportunities cover all program areas, from assisting in inclusive classrooms and vocational training workshops, supporting healthcare and therapy services, engaging in family resilience and economic empowerment activities, to contributing to research, advocacy, and community awareness campaigns. Whether short-term or long-term, volunteering with us allows you to learn, grow, and give back, while actively participating in the journey toward inclusive education, health, and community empowerment.
                    </p>
                    <div class="text-center">
                      <a href="{{ route('volunteer-form') }}" class="btn btn-round" style="background-color:#009A49; color:#ffffff; font-weight:700;">Become a Volunteer</a>
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
                <div class="row">
                  <div class="col-md-12">
                    <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                      <div class="icon-text">
                        <h3 class="icon-box-title">Contact Us</h3>
                        <div class="content">
                          <p>We would love to hear from you. Whether you are a parent seeking support, a donor exploring partnership opportunities, a volunteer eager to contribute, or a community member wanting to learn more, we welcome your message. Reach out today and join us in creating inclusive, empowering, and transformative opportunities for children, youth, and families.</p>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="row" style="text-align:left;">
                        <div class="col-md-6">
                          <h4 class="mb-20">Contact Information</h4>
                          <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker mr-10"></i>KK 35 Avenue, Kicukiro District, Kigali, Rwanda</li>
                            <li><i class="fa fa-phone mr-10"></i>+250786721626</li>
                            <li><i class="fa fa-envelope-o mr-10"></i><a href="mailto:info@izeremubyeyi.org">info@izeremubyeyi.org</a></li>
                          </ul>
                          <h4 class="mt-20 mb-10">Our Location</h4>
                          <div class="map-responsive">
                            <iframe src="https://www.google.com/maps?q=KK%2035%20Avenue%2C%20Kicukiro%20District%2C%20Kigali%2C%20Rwanda&output=embed" width="100%" height="300" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h4 class="mb-20">Send Us a Message</h4>
                          @if (session('status'))
                              <div id="flashSuccess" class="alert alert-success" role="alert">{{ session('status') }}</div>
                          @endif
                          @error('service')<div class="text-danger small">{{ $message }}</div>@enderror
                          <form id="contactForm" class="contact-form" action="{{ route('contact.store') }}" method="post">
                              @csrf
                              <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name" required aria-label="Your Name"></div>
                              <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Your Email" required aria-label="Your Email"></div>
                              <div class="form-group">
                                <select name="service" class="form-control" required aria-label="Service">
                                  <option value="" disabled selected>Select a service</option>
                                  <option value="Essential Health Care">Essential Health Care</option>
                                  <option value="Inclusive Education">Inclusive Education</option>
                                  <option value="Family Resilience">Family Resilience</option>
                                  <option value="Community Engagement">Community Engagement</option>
                                  <option value="Research & Advocacy">Research & Advocacy</option>
                                  <option value="Other">Other</option>
                                </select>
                              </div>
                              <div class="form-group"><textarea name="message" class="form-control" rows="5" placeholder="Your Message" required aria-label="Your Message"></textarea></div>
                              <div class="form-group text-center"><button type="submit" class="btn btn-theme-colored1 btn-round">Send Message</button></div>
                              <div id="formMessage"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
     </div>

    <!-- CTA Band (above footer) -->
    <section class="cta-band">
      <div class="container">
        <div class="cta-card">
          <div>
            <h3>Subscribe for our news</h3>
            <div class="subscribe-note">Get updates about inclusion, events and opportunities.</div>
          </div>
          @if (session('newsletter_status'))
            <div id="newsletterFlash" class="subscribe-note">{{ session('newsletter_status') }}</div>
          @endif
          @error('newsletter_email')
            <div class="subscribe-note" style="color:#ffb3b3">{{ $message }}</div>
          @enderror
          <form class="subscribe-wrap" method="post" action="{{ route('newsletter.subscribe') }}">
            @csrf
            <input type="email" name="newsletter_email" class="subscribe-input" placeholder="Enter your email" required aria-label="Email address" value="{{ old('newsletter_email') }}">
            <button type="submit" class="subscribe-btn">Subscribe</button>
          </form>
        </div>
      </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', function(){
        var f = document.getElementById('newsletterFlash');
        if (f) setTimeout(function(){ f.style.display='none'; }, 3000);

        var form = document.querySelector('form.subscribe-wrap');
        var input = document.querySelector('input[name="newsletter_email"]');
        var errorNode = document.getElementById('nlError');
        var modal = document.getElementById('nlModal');
        var modalTitle = document.getElementById('modalTitle');
        var modalText = document.getElementById('modalText');

        if (!errorNode) {
          errorNode = document.createElement('div');
          errorNode.id = 'nlError';
          errorNode.className = 'subscribe-note';
          errorNode.style.color = '#ffb3b3';
          form.parentElement.insertBefore(errorNode, form.nextSibling);
        }

        if (form) {
          form.addEventListener('submit', async function(e){
            e.preventDefault();
            errorNode.textContent = '';
            try {
              const fd = new FormData(form);
              const res = await fetch(form.action, {
                method: 'POST',
                headers: { 'Accept': 'application/json' },
                body: fd
              });
              if (res.ok) {
                if (modal) {
                  modalTitle.textContent = 'Subscribed';
                  modalText.textContent = 'Thanks! You are now subscribed to our news.';
                  modal.style.display = 'flex';
                  setTimeout(function(){ modal.style.display = 'none'; }, 2500);
                }
                // clear
                if (input) input.value = '';
              } else if (res.status === 422) {
                const data = await res.json();
                const msg = data?.errors?.newsletter_email?.[0] || 'Please provide a valid email.';
                errorNode.textContent = '';
                if (modal) {
                  modalTitle.textContent = 'Already Subscribed';
                  modalText.textContent = msg;
                  modal.style.display = 'flex';
                  setTimeout(function(){ modal.style.display = 'none'; }, 2500);
                }
              } else {
                errorNode.textContent = 'Unable to subscribe right now. Please try again later.';
              }
            } catch (err) {
              errorNode.textContent = 'Network error. Please try again.';
            }
          });
        }

        // Contact form AJAX
        var cForm = document.getElementById('contactForm');
        if (cForm) {
          cForm.addEventListener('submit', async function(e){
            e.preventDefault();
            var cData = new FormData(cForm);
            // clear previous inline errors
            var existing = cForm.querySelectorAll('.text-danger.small, .field-error');
            existing.forEach(function(el){ el.remove(); });
            try {
              const res = await fetch(cForm.action, { method: 'POST', headers: { 'Accept': 'application/json' }, body: cData });
              if (res.ok) {
                if (modal) {
                  modalTitle.textContent = 'Message Sent';
                  modalText.textContent = 'Thank you! Your message has been sent.';
                  modal.style.display = 'flex';
                  setTimeout(function(){ modal.style.display = 'none'; }, 2500);
                }
                // clear form
                cForm.reset();
              } else if (res.status === 422) {
                const data = await res.json();
                const errs = data.errors || {};
                Object.keys(errs).forEach(function(field){
                  var fieldEl = cForm.querySelector('[name="'+field+'"]');
                  if (fieldEl) {
                    var node = document.createElement('div');
                    node.className = 'field-error text-danger small';
                    node.textContent = errs[field][0];
                    fieldEl.parentElement.appendChild(node);
                  }
                });
              } else {
                if (modal) {
                  modalTitle.textContent = 'Error';
                  modalText.textContent = 'Unable to send message right now. Please try again later.';
                  modal.style.display = 'flex';
                  setTimeout(function(){ modal.style.display = 'none'; }, 2500);
                }
              }
            } catch (err) {
              if (modal) {
                modalTitle.textContent = 'Network Error';
                modalText.textContent = 'Please check your connection and try again.';
                modal.style.display = 'flex';
                setTimeout(function(){ modal.style.display = 'none'; }, 2500);
              }
            }
          });
        }
      });
    </script>

    <!-- Footer -->
    <footer id="footer" class="footer footer-modern" style="background-color: #0a1a2b !important;">
      <div class="footer-widget-area">
        <div class="container pt-20 pb-20">
          <div class="row align-items-start">
            <!-- Left: org summary + socials -->
            <div class="col-md-6">
              <div class="widget">
                <h4 class="widget-title">Izere Mubyeyi Organization</h4>
                <p class="footer-paragraph">Empowering children with disabilities, supporting families, and building inclusive communities in Rwanda.</p>
                <div class="footer-paragraph">
                  Follow us:
                  <a href="https://facebook.com/izeremubyeyi">Facebook</a> |
                  <a href="https://twitter.com/izeremubyeyi">Twitter</a> |
                  <a href="#">LinkedIn</a> |
                  <a href="https://instagram.com/izeremubyeyi">Instagram</a> |
                  <a href="https://youtube.com/izeremubyeyi">YouTube</a>
                </div>
              </div>
            </div>
            <!-- Right: contact card -->
            <div class="col-md-6">
              <div class="contact-card">
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-start mb-2"><span class="icon mr-2"><i class="fa fa-map-marker"></i></span><span>Niboye, Kicukiro, Kigali, Rwanda</span></li>
                  <li class="d-flex align-items-start mb-2"><span class="icon mr-2"><i class="fa fa-phone"></i></span><span>+250 786 721 626</span></li>
                  <li class="d-flex align-items-start"><span class="icon mr-2"><i class="fa fa-envelope-o"></i></span><span>info@izeremubyeyi.org</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row pt-20 pb-20 justify-content-center text-center">
              <div class="col-12">
                <div class="footer-paragraph">© 2025 Izere Mubyeyi Organization. All rights reserved.</div>
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
    <!-- Floating Chat Button -->
    <style>
      .chat-float{position:fixed;right:18px;bottom:18px;z-index:9999;display:inline-flex;align-items:center;gap:8px;padding:10px 14px;border-radius:9999px;background:#25D366;color:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.25);transition:transform .2s ease,box-shadow .2s ease;text-decoration:none;font-weight:600}
      .chat-float:hover{transform:scale(1.03);box-shadow:0 8px 22px rgba(0,0,0,0.3);color:#fff}
      .chat-float i{font-size:20px;line-height:1}
      @media (max-width:480px){.chat-float{right:14px;bottom:14px;padding:9px 12px;font-size:.95rem}}
      @media (max-width:360px){.chat-float{right:12px;bottom:12px;padding:8px 10px;font-size:.9rem}}
    </style>
    <a href="https://wa.me/250786721626" class="chat-float" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
      <i class="fab fa-whatsapp"></i>
      <span>Chat with us</span>
    </a>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var flash = document.getElementById('flashSuccess');
        if (flash) {
          setTimeout(function(){ flash.style.display = 'none'; }, 3000);
        }
      });
    </script>
</body>
</html>