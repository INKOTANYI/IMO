<!-- resources/views/partials/header.blade.php -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top" style="background-color: #0052A5;">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Tel: +250-78-123-4567</li>
                        <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i> info@izeremubyeyi.rw</li>
                        <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> Kigali, Rwanda</li>
                    </ul>
                </div>
                <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
                    <div class="element">
                        <ul class="header-top-nav list-inline">
                            <li class="menu-item"><a href="{{ url('/') }}" class="menu-item-link"><strong>Home</strong></a></li>
                            <li class="menu-item"><a href="{{ url('/donate') }}" class="menu-item-link"><strong>Donate</strong></a></li>
                            <li class="menu-item"><a href="{{ url('/contact') }}" class="menu-item-link"><strong>Contact Us</strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed" style="background-color: #009A49;">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col">
                            <div class="row header-nav-col-row">
                                <div class="col-sm-auto align-self-center">
                                    <a class="menuzord-brand site-brand" href="{{ url('/') }}">
                                        <img class="logo-default logo-1x" src="{{ asset('images/logo-wide.png') }}" alt="IMO Logo">
                                        <img class="logo-default logo-2x retina" src="{{ asset('images/logo-wide@2x.png') }}" alt="IMO Logo">
                                    </a>
                                </div>
                                <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                    <nav id="top-primary-nav" class="menuzord" data-effect="fade" data-animation="none" data-align="right">
                                        <ul id="main-nav" class="menuzord-menu">
                                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ url('/about') }}">About</a></li>
                                            <li><a href="{{ url('/services') }}">Services</a></li>
                                            <li><a href="{{ url('/causes') }}">Causes</a></li>
                                            <li><a href="{{ url('/photos') }}">Photos</a></li>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
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
