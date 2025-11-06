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
    @include('partials.header')

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