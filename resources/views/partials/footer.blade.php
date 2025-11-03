<!-- resources/views/partials/footer.blade.php -->
<footer id="footer" class="footer" style="background-color: #0a1a2b;">
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
        <div class="footer-bottom" style="background-color: #071421;">
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
<!-- Floating WhatsApp Button -->
<style>
  .whatsapp-float{position:fixed;right:18px;bottom:18px;z-index:9999;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;background:#25D366;color:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.25);transition:transform .2s ease,box-shadow .2s ease}
  .whatsapp-float:hover{transform:scale(1.05);box-shadow:0 8px 22px rgba(0,0,0,0.3)}
  .whatsapp-float i{font-size:28px;line-height:1}
  @media (max-width:480px){.whatsapp-float{width:52px;height:52px;right:14px;bottom:14px}}
  @media (max-width:360px){.whatsapp-float{width:48px;height:48px;right:12px;bottom:12px}}
  /* Footer link colors to match welcome footer */
  #footer .widget_nav_menu ul.menu li a{color:#e2e8f0 !important}
  #footer .widget_nav_menu ul.menu li a:hover{color:#FFC107 !important;text-decoration:none}
  #footer .widget-title{color:#e2e8f0}
  /* Footer general text and social link styling for dark background */
  #footer, #footer .footer-paragraph, #footer .tm-widget-contact-info .description { color:#cbd5e1; }
  #footer .widget-social-list-custom .social-link{ background:#0f243a; color:#e2e8f0 !important; border-radius:8px; width:36px; height:36px; display:inline-flex; align-items:center; justify-content:center; }
  #footer .widget-social-list-custom .social-link:hover{ background:#183556; color:#FFC107 !important; }
</style>
<a href="https://wa.me/250786721626" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>