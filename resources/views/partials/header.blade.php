<!-- resources/views/partials/header.blade.php -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top" style="background-color: #0052A5;">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +250786721626</li>
                        <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i> info@izeremubyeyi.org</li>
                        <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> KK 35 Avenue, Kicukiro District</li>
                    </ul>
                </div>
                <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
                    <div class="element">
                        <ul class="header-top-nav list-inline">
                            <li class="menu-item"><a href="{{ url('/') }}" class="menu-item-link"><strong>Home</strong></a></li>
                            <li class="menu-item"><a href="{{ url('/donate') }}" class="menu-item-link"><strong>Donate</strong></a></li>
                            <li class="menu-item"><a href="{{ url('/#contactus') }}" class="menu-item-link"><strong>Contact Us</strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed green" style="background-color: #009A49;">
            <div class="menuzord-container header-nav-container green">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col">
                            <div class="row header-nav-col-row">
                                <div class="col-sm-auto align-self-center d-flex align-items-center">
                                    <a class="menuzord-brand site-brand d-flex align-items-center" href="{{ route('home') }}">
                                        <img class="logo-default logo-1x" src="{{ asset('images/bg/Logo-izere.png') }}" alt="Izere Mubyeyi Logo">
                                        <img class="logo-default logo-2x retina" src="{{ asset('images/logo-wide@2x.png') }}" alt="Izere Mubyeyi Logo">
                                        <span style="color:#ffffff; font-weight:800; margin-left:10px; white-space:nowrap;">Izere Mubyeyi Organization NGO</span>
                                    </a>
                                </div>
                                <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                    <nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">
                                        <ul id="main-nav" class="menuzord-menu">
                                            <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="{{ Route::is('our-founders', 'our-board', 'our-staff', 'our-values', 'our-history', 'mission-vision') ? 'active' : '' }}">
                                                <a href="#">Who We Are</a>
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
                                                    <li><a href="{{ url('/events') }}">Events</a></li>
                                                    <li><a href="{{ route('news-updates') }}">News Updates</a></li>
                                                    <li><a href="{{ route('publications') }}">Publications</a></li>
                                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Route::is('careers', 'tenders') ? 'active' : '' }}">
                                                <a href="#">Opportunities</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                                    <li><a href="{{ route('tenders') }}">Tenders</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/#contactus') }}">Contact-Us</a></li>
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

