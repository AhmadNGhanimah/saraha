<style>



</style>
<body>
<nav class="navbar navbar-expand-md navbar-light" style=" background: linear-gradient(28deg, #16222A, #1E86AF); ">

    <a class="navbar-brand" href="{{url('/home')}}" style="font-size: 20px"><img src="{{asset('image/LogoWebsite.png')}}"> Saraha</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto py-4 py-md-0">

            @auth
            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="{{route('manage')}}"><i class="fa-solid fa-gear"></i> Account Setting</a>
            </li>
            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="{{route('messages')}}"><i class="fa-solid fa-message"></i> Messages</a>
            </li>
            @endauth
            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                <a class="nav-link" href="{{route('contact-us')}}"><i class="fa-solid fa-phone"></i> Contact Us</a>
            </li>

            @auth
                <form action="{{route('logout') }}" method="post" id="logout-form">
                    @csrf
                </form>
                <li class=" nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i> Logout </a>
                </li>
            @else
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-from-bracket"></i> Login </a>
                </li>
                @endauth
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fa-regular fa-registered"></i> Register </a>
                </li>


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

</body>

<script>
    for (var i = 0; i < document.links.length; i++) {
        if (document.links[i].href == document.URL) {
            document.links[i].className = 'active';
        } else {document.links[0].className = 'active';}
    }
</script>

@yield('headerr')




