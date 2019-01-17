@php
    $socials = json_decode(\App\Variable::getByKey('social'));
@endphp
<footer>
    <div class="container">
        <div class="row section pt-50 pb-50">
            <div class="footer-widget col-lg-2 col-xs-12 wow fadeIn hidden-md-down"><img
                        src="{{ asset('assets/img/logo.png')  }}"
                        width="150px" height="100px" alt="TekMedi logo"></div>
            <div class="footer-widget col-lg-3 col-xs-12 col-sm-4 wow fadeIn" data-wow-delay=".2s">
                <h3 class="small-title text-uppercase">TEKMEDI</h3>
                <div class="menu-horizontal">
                    <ul>
                        <li>
                            <h4>
                                <a href="{{route('news')}}">Tin tức</a>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="{{route('contact')}}">Liên hệ</a>
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-widget col-lg-4 col-xs-12 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <h3 class="small-title text-uppercase">Follow us on</h3>
                <div class="col-md-12 pl-0 mrfooter">
                    <ul class="social-network social-circle">
                        <li>
                            <a class="icoFacebook" href="{{$socials->facebook}}" title="Facebook"
                               target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="icoTwitter" href="{{$socials->twitter}}" title="Twitter"
                               target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="icoLinkedin" href="{{$socials->linkedin}}" title="Linkedin"
                               target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a class="iconskype" onclick="window.location.href='{{$socials->skype}}'" title="skype"><i
                                        class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p class="copyright-text text-center">© Designed by
                        <a href="http://dolphinsolutions.vn/">Dolphin Solutions</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>