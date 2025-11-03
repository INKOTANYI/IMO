<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Izere Mubyeyi Organization - Building Inclusive Communities through Engagement"/>
    <meta name="keywords" content="community engagement, disability, inclusion, Rwanda"/>
    <meta name="author" content="Izere Mubyeyi Organization"/>
    <meta property="og:title" content="Community Engagement - Izere Mubyeyi Organization NGO"/>
    <meta property="og:description" content="Discover Izere Mubyeyi Organization’s Community Engagement program, fostering inclusive communities for children with disabilities in Rwanda."/>
    <meta property="og:image" content="{{ asset('images/bg/Logo-izere.png') }}"/>
    <meta property="og:url" content="{{ url('/community-engagement') }}"/>
    <meta name="twitter:card" content="summary_large_image"/>

    <!-- Page Title -->
    <title>Community Engagement - Izere Mubyeyi Organization NGO</title>

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
        .content-section ul, .content-section ol {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 15px;
            padding-left: 30px;
        }
        .content-section ul li, .content-section ol li {
            margin-bottom: 8px;
        }
        .content-section ul ul, .content-section ol ol {
            padding-left: 30px;
        }
        .content-section .community-card {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
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
                                            <img class="logo-default logo-1x" src="{{ asset('images/bg/Logo-izere.png') }}" alt="Izere Mubyeyi Organization Logo">
                                            <img class="logo-default logo-2x retina" src="{{ asset('images/logo-wide@2x.png') }}" alt="Izere Mubyeyi Organization Logo">
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
    <div id="main-content">
        <!-- Community Engagement Hero Section -->
        <section class="section" data-tm-bg-color="#0052A5">
            <div class="container pt-40 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-4">Community Engagement</h1>
                            <p class="text-white lead">Building Inclusive Communities Together</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Community Engagement Content Section -->
        <section class="section">
            <div class="container pt-20 pb-20">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="content-section">
                                        <h4>Our Community Engagement Program</h4>
                                        <div class="community-card">
                                            <h5><i class="fas fa-users"></i> Program Overview</h5>
                                            <p>At Izere Mubyeyi Organization, we recognize that lasting inclusion requires active participation from the entire community. Our Community Engagement program is designed to empower local leaders, families, and community members to embrace children with disabilities, challenge stigma, and create environments where all children can thrive.</p>
                                        </div>
                                        <div class="community-card">
                                            <h5><i class="fas fa-bullhorn"></i> Key Components of Our Program</h5>
                                            <ol>
                                                <li><strong>Awareness and Sensitization:</strong>
                                                    <ul>
                                                        <li>We conduct community campaigns, workshops, and dialogue sessions to raise awareness about disability rights, inclusive education, and the capabilities of children with intellectual disabilities.</li>
                                                        <li>These activities help dismantle stereotypes, reduce discrimination, and promote positive attitudes toward inclusion.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Community Mobilization:</strong>
                                                    <ul>
                                                        <li>Local leaders, parents, and community volunteers are actively engaged in identifying children with disabilities who are often hidden or excluded from education and services.</li>
                                                        <li>Communities participate in planning, monitoring, and supporting programs, ensuring that inclusion is not just a policy but a lived reality.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Capacity Building:</strong>
                                                    <ul>
                                                        <li>We train teachers, caregivers, and community representatives on inclusive practices, disability rights, and supportive interventions, strengthening local capacity to sustain inclusive initiatives.</li>
                                                        <li>By equipping communities with knowledge and skills, we ensure that children with disabilities are supported beyond our center.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Local Voices for Change:</strong>
                                                    <ul>
                                                        <li>Our program encourages communities to voice their needs and influence local decision-making, contributing to policies and practices that promote equitable access to education, health, and social services.</li>
                                                        <li>We work hand-in-hand with community institutions to ensure inclusive practices are embedded in local structures, from schools to health facilities.</li>
                                                    </ul>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="community-card">
                                            <h5><i class="fas fa-star"></i> Why Our Program is Unique</h5>
                                            <ul>
                                                <li>Focuses on community ownership of inclusion, ensuring that change is sustainable and culturally rooted.</li>
                                                <li>Combines education, awareness, and capacity building to address both attitudinal and structural barriers.</li>
                                                <li>Strengthens partnerships between families, leaders, and institutions, creating a supportive ecosystem where children with disabilities can thrive.</li>
                                            </ul>
                                        </div>
                                        <div class="community-card">
                                            <h5><i class="fas fa-handshake"></i> Partner with Us to Foster Inclusive Communities</h5>
                                            <p>We invite government agencies, civil society, private sector partners, and international donors to collaborate with us. Your support helps expand awareness campaigns, train local champions, and implement community-based initiatives that transform attitudes, promote inclusion, and ensure every child has the opportunity to reach their full potential.</p>
                                        </div>
                                        <div class="community-card">
                                            <h5><i class="fas fa-hand-holding-heart"></i> Our Partners</h5>
                                            <p>We are deeply thankful to our partners for their invaluable contributions, which have allowed us to scale up our impact, reach more children and families, and continuously improve our services.</p>
                                            <p>At Izere Mubyeyi Organization, we believe that partnership is at the heart of sustainable impact. Over the years, we have been fortunate to collaborate with a diverse network of government institutions, development agencies, private sector actors, civil society organizations; local, regional and international donors. These partnerships strengthen our programs, expand our reach, and ensure that children with disabilities and their families receive the support and opportunities they need.</p>
                                            <h6>The Role of Our Partners:</h6>
                                            <ul>
                                                <li><strong>Capacity Building and Technical Support:</strong> Partners help us enhance the skills of our staff, teachers, therapists, and caregivers through specialized training, mentorship, and knowledge exchange.</li>
                                                <li><strong>Resource Mobilization:</strong> By providing funding, equipment, learning materials, and assistive devices, partners enable us to deliver high-quality education, health care, and family empowerment programs.</li>
                                                <li><strong>Infrastructure Expansion:</strong> Partners support the development and improvement of our facilities, including classrooms, therapy rooms, vocational workshops, and community spaces, creating safe, accessible, and stimulating environments for children, youth, and families.</li>
                                                <li><strong>Policy and Advocacy Support:</strong> Many partners collaborate with us to influence national and local policies, promote inclusive practices, and ensure that disability rights are mainstreamed across sectors.</li>
                                                <li><strong>Community Outreach:</strong> Through joint initiatives, partners help us identify children with disabilities in communities, raise awareness, and foster social acceptance and inclusion.</li>
                                                <li><strong>Innovation and Program Development:</strong> Partners contribute technical expertise, innovative tools, and global best practices, allowing us to improve program quality and expand services to more children and families.</li>
                                            </ul>
                                            <h6>Join Us in Partnership:</h6>
                                            <p>We invite government agencies, private companies, civil society organizations, foundations, and international donors to join our mission. By partnering with Izere Mubyeyi Organization, you help create inclusive, supportive, and empowered communities where every child, regardless of ability; can thrive, families are resilient, and societies are stronger.</p>
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