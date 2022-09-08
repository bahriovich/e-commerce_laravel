@php
	function settingFooter(array $settings, $key){return $settings[array_search($key, array_column($settings, 'meta_name'))]['meta_desc'];}
	$setting = 'settingFooter';
@endphp

                <!-- start footer -->
                    <footer id="footer" class="footer footer--style-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            <div class="footer__item">
                                                <a class="site-logo" href="/">
                                                    <img class="img-fluid  lazy" src="{{asset('assets/user/img/blank.gif')}}" data-src="{{asset('assets/user/img/site_logo_footer.png')}}" alt="Ecomarc eat clean" />
                                                </a>
                                            </div>
                                        </div>
        
                                        <div class="col-12 col-sm">
                                            <div class="footer__item">
                                                <nav id="footer__navigation" class="navigation">
                                                    <div class="row justify-content-sm-center">
                                                        <div class="col-auto">
                                                            <ul>
                                                                <li class="{{Route::currentRouteName() == 'index' ? 'active' : ''}}"><a href="/">Accueil</a></li>
                                                                <li class="{{Route::currentRouteName() == 'ecomarc' ? 'active' : ''}}"><a href="/ecomarc">Ecomarc</a></li>
                                                                <li class="{{Route::currentRouteName() == 'pleurotes' ? 'active' : ''}}"><a href="/pleurotes">Pleurotes</a></li>
                                                                <li class="{{Route::currentRouteName() == 'fruits' ? 'active' : ''}}"><a href="/404">Fruits & Légumes</a></li>
                                                                <li class="{{Route::currentRouteName() == 'shop' ? 'active' : ''}}"><a href="/shop">Shop</a></li>
                                                                <li class="{{Route::currentRouteName() == 'contacts' ? 'active' : ''}}"><a href="/contacts">Contactez-Nous</a></li>
                                                            </ul>
                                                        </div>
        
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
        
                                        <div class="col-12 my-lg-3"></div>
                                    </div>
        
                                    <div class="row align-items-end justify-content-between">
                                        <div class="col-12 col-lg-9">
                                            <div class="footer__item">
                                                <address>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                                                            <h5 class="__title">email</h5>
        
                                                            <p>
                                                                <a href="mailto:{{$setting($settings, 'email')}}">{{$setting($settings, 'email')}}</a>
                                                            </p>
                                                        </div>
        
                                                        <div class="col-12 col-sm-6">
                                                            <h5 class="__title">Téléphone</h5>
        
                                                            <p>
                                                                +(216) {{$setting($settings, 'telephone')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </address>
                                            </div>
                                        </div>
        
                                        <div class="col-12 col-lg-auto">
                                            <div class="footer__item">
                                                <div class="social-btns">
                                                    <a href="{{$setting($settings, 'instagram')}}" target="_blank"><i class="fontello-instagram"></i></a>
                                                    <a href="{{$setting($settings, 'facebook')}}" target="_blank"><i class="fontello-facebook"></i></a>
                                                    <a href="{{$setting($settings, 'youtube')}}" target="_blank"><i class="fontello-youtube"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="row justify-content-lg-between copyright">
                                        <div class="col-12 col-lg">
                                            <div class="footer__item">
                                                <span class="__copy"></span>
                                            </div>
                                        </div>
        
                                        <div class="col-12 col-lg-auto">
                                            <div class="footer__item">
                                                <span class="__copy">© Copyrights 2020 | All Rights Reserved.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="map-container">
                            <!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3993.9251149419833!2d9.781790564377081!3d36.65898120764793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fcdb2cd91b00e3%3A0x48d1e80549d1a66e!2sECOMARC!5e0!3m2!1sen!2stn!4v1602014039717!5m2!1sen!2stn" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </footer>
                    <!-- end footer -->
                <div id="btn-to-top-wrap">
                    <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
                </div>
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>
        
                <script type="text/javascript" src="{{asset('assets/user/js/main.js')}}"></script>
                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
                <!--script>
                    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='https://www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','G-3VT0D4DDM4','auto');ga('send','pageview');
                </script-->
            </body>
        </html>