<footer id="footer" class="mainfooter" role="contentinfo">
    <div class="footer-middle">
        <div class="container">
            <div class="row  d-flex justify-content-center">
                {{--                <div class="col-md-3 col-sm-6">--}}
                {{--                    <!--Column1-->--}}
                {{--                    <div class="footer-pad">--}}
                {{--                        <h4>Heading 1</h4>--}}
                {{--                        <ul class="list-unstyled">--}}
                {{--                            <li><a href="#"></a></li>--}}
                {{--                            <li><a href="#">Payment Center</a></li>--}}

                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6>@lang('custom.contacting_us')<br>
                        <a href="">@lang('custom.click_here')</a>
                    </h6>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6>@lang('custom.follow_us')</h6>
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6>@lang('custom.privacy')<br>
                        <a href="{{route('privacy')}}">@lang('custom.click_here')</a>
                    </h6>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 copy">
                    <p class="text-center">&copy; Copyright 2023 - {{__('custom.title')}}. All rights reserved.</p>
                </div>
            </div>


        </div>
    </div>
</footer>
