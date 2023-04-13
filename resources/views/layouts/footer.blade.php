<footer id="footer" class="mainfooter" role="contentinfo">
    <div class="footer-middle">
        <div class="container">
            <div class="row  d-flex justify-content-center custom">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    @auth
                        <form action="{{route('logout') }}" method="post" id="logout-form">
                            @csrf
                        </form>
                        <a class="font-weight-bold" href="#"
                           onclick="document.getElementById('logout-form').submit();">@lang('custom.logout') </a>
                    @else
                        <a href="{{route('login')}}" class="font-weight-bold">@lang('custom.Login')/ </a>
                        <a href="{{route('register')}}" class="font-weight-bold">@lang('custom.register')</a>
                    @endauth
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <h6>@lang('custom.follow_us')</h6>
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <a href="{{route('privacy')}}" class="font-weight-bold">@lang('custom.privacy')</a>
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
