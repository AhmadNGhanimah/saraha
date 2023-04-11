<body>
<nav class="navbar navbar-expand-md navbar-light" >

   <div class="d-flex justify-content-start logo">
       <a href="{{url('/')}}"> <img src="{{asset('image/LogoWebsite.png')}}" alt="logo"></a>
   </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto py-4 py-md-0">

            @auth
{{--            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">--}}
{{--                <a class="nav-link" href="{{route('manage')}}"><i class="fa-solid fa-gear"></i> Account Setting</a>--}}
{{--            </li>--}}
            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="{{route('messages')}}"><i class="fa-solid fa-message"></i> @lang('custom.messages')</a>
            </li>
            @endauth
{{--            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">--}}
{{--                <a class="nav-link" href="{{route('contact-us')}}"><i class="fa-solid fa-phone"></i> Contact Us</a>--}}
{{--            </li>--}}

            @auth
                <form action="{{route('logout') }}" method="post" id="logout-form">
                    @csrf
                </form>
                <li class=" nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i>@lang('custom.logout') </a>
                </li>
            @else
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i>@lang('custom.Login')</a>
                </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> @lang('custom.register') </a>
                    </li>
                @endauth


                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    @if(app()->getLocale()=='ar')
                        <a href="{{route('lang','en')}}" class="nav-link"><i class="fa-solid fa-globe"></i> EN</a>
                    @else
                        <a href="{{route('lang','ar')}}" class="nav-link"><i class="fa-solid fa-globe"></i> AR</a>
                    @endif
                </li>
        </ul>
    </div>

</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

@yield('headerr')





