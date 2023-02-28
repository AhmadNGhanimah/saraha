<nav class="navbar navbar-expand-lg navbar-light" style="background: #10bbb3">
    <a class="navbar-brand" href="#">Saraha</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="menu">
            @if(Auth::user())
                <li>
                    <a href="{{ route('logout') }}">Logout </a>
                </li>
            @else
                <li >
                    <a href="{{ route('login') }}">Login </a>
                </li>
            @endif
            <li class="active"><a href="#">Home</a>
            </li>
            <li><a href="{{route('messages')}}">Messages</a>
            </li>
            @if(Auth::user())
                <li>
                <li><a href="#"></a></li>
                </li>
            @else
                <li >
                <li><a href="{{route('register')}}">Registar</a></li>
                </li>
            @endif
            <li><a href="#">Contact Us</a>
            </li>
            <li>
                @if(app()->getLocale()=='ar')
                    <a href="{{route('lang','en')}}">EN</a>
                @else
                    <a href="{{route('lang','ar')}}">AR</a>
                @endif
            </li>
        </ul>
    </div>
</nav>
