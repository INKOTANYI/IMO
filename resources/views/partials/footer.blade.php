<!-- resources/views/partials/footer.blade.php -->
<footer id="footer" class="footer" style="background-color: #0052A5;">
    <div class="footer-widget-area">
        <div class="container pt-90 pb-60">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="widget widget-contact-info">
                        <div class="tm-widget tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                            <div class="thumb">
                                <img alt="IMO Logo" src="{{ asset('images/logo-wide-white.png') }}">
                            </div>
                            <div class="description">Kigali, Rwanda</div>
                            <ul>
                                <li class="contact-email">
                                    <div class="icon"><i class="fa fa-globe"></i></div>
                                    <div class="text"><a href="mailto:info@izeremubyeyi.rw">info@izeremubyeyi.rw</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget-social-list-custom">
                        <h4 class="widget-title text-white">Social List</h4>
                        <ul class="tm-widget tm-widget-social-list styled-icons icon-rounded icon-theme-colored1">
                            <li><a class="social-link" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="social-link" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title text-white">Useful Links</h4>
                        <ul class="menu">
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/donate') }}">Donate</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
               
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="widget widget-opening-hours-compressed">
                        <h4 class="widget-title text-white">Opening Hours</h4>
                        <ul class="tm-widget tm-widget-opening-hours opening-hours border-dark">
                            <li class="clearfix"><span>Monday - Friday</span><div class="value">8:00 - 17:00</div></li>
                            <li class="clearfix"><span>Saturday</span><div class="value">9:00 - 13:00</div></li>
                            <li class="clearfix"><span>Sunday</span><div class="value">Closed</div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="background-color: #009A49;">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-white">
                            © 2025 Izere Mubyeyi. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-paragraph text-white text-right">
                            Designed by Sebazungu Jean Lambert
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>