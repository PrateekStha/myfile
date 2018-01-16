 <!--Newsletter Area Start-->
 <div class="newsletter-area">


                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="newsletter-form angle">
                                    <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                            <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html" style="color: white"><h2>{{$abouts[0]->name}}</h2></a>
                                    </div>
                                    <p>As if You Have any doubt and have any question please visit our School</p>
                                    <div class="social-icons">
                                        <a href="{{$abouts[0]->website}}"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>GET IN TOUCH</h3>
                                    <a href="tel:555-555-1212"><i class="fa fa-phone"></i>{{$abouts[0]->phone}}</a>
                                    <span><i class="fa fa-envelope"></i>{{$abouts[0]->gmail}}</span>
                                    <span><i class="fa fa-globe"></i>{{$abouts[0]->website}}</span>
                                    <span><i class="fa fa-map-marker"></i>{{$abouts[0]->location}}</span>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-footer-widget">
                                    <h3>Useful Links</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Our Teachers</a></li>

                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>Photos</h3>
                                    <div class="container-fluid">
                                      @foreach($gallery as $value)
                                        <div class="col-sm-4" >
                                            <a href="#"><img src="/storage/image/gallery/{{$value->image}}" alt=""></a>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget Area-->
                <!--Footer Area Start-->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <span>Copyright &copy; Educat 2017.All right reserved.Created by Opaline Technologies<a href="#">Educat</a></span>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="column-right">
                                    <span>Privacy Policy , Terms &amp; Conditions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        <!-- Color Switcher -->
        <div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="zmdi zmdi-settings"></i></a>
            <h3>Style Switcher</h3>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="storage/web/img/ec-pattren/pattren1.jpg" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="storage/web/img/ec-pattren/pattren2.jpg" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="storage/web/img/ec-pattren/pattren3.jpg" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="storage/web/img/ec-pattren/pattren4.jpg" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="storage/web/img/ec-pattren/pattren5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="storage/web/img/ec-background/bg-1.jpg" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="storage/web/img/ec-background/bg-2.jpg" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="storage/web/img/ec-background/bg-3.jpg" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="storage/web/img/ec-background/bg-4.jpg" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="storage/web/img/ec-background/bg-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Color Switcher end --> 
        
        
        <!-- jquery
        ============================================ -->
        <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>       
        <script src="web/js/vendor/jquery-1.12.4.min.js"></script>
        <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
        <!-- bootstrap JS
        ============================================ -->        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- nivo slider js
        ============================================ -->       
        <script src="web/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="web/lib/nivo-slider/home.js" type="text/javascript"></script>
        
        <!-- meanmenu JS
        ============================================ -->        
        <script src="web/js/jquery.meanmenu.js"></script>
        
        <!-- wow JS
        ============================================ -->        
        <script src="web/js/wow.min.js"></script>
        
        <!-- owl.carousel JS
        ============================================ -->        
        <script src="web/js/owl.carousel.min.js"></script>
        
        <!-- scrollUp JS
        ============================================ -->        
        <script src="web/js/jquery.scrollUp.min.js"></script>
        
        <!-- Waypoints JS
        ============================================ -->        
        <script src="web/js/waypoints.min.js"></script>
        
        <!-- Counterup JS
        ============================================ -->        
        <script src="web/js/jquery.counterup.min.js"></script>
        
        <!-- Slick JS
        ============================================ -->        
        <script src="web/js/slick.min.js"></script>
        
        <!-- Animated Headlines JS
        ============================================ -->        
        <script src="web/js/animated-headlines.js"></script>
        
        <!-- Textilate JS
        ============================================ -->        
        <script src="web/js/textilate.js"></script>
        
        <!-- Lettering JS
        ============================================ -->        
        <script src="web/js/lettering.js"></script>
        
        <!-- Video Player JS
        ============================================ -->        
        <script src="web/js/jquery.mb.YTPlayer.js"></script>
        
        <!-- Mail Chimp JS
        ============================================ -->        
        <script src="web/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- AJax Mail JS
        ============================================ -->        
        <script src="web/js/ajax-mail.js"></script>
        
        <!-- plugins JS
        ============================================ -->        
        <script src="web/js/plugins.js"></script>
        
        <!-- StyleSwitch JS
        ============================================ -->    
        <script src="web/js/styleswitch.js"></script>
        
        <!-- main JS
        ============================================ -->        
        <script src="web/js/main.js"></script>
    </body>
</html>