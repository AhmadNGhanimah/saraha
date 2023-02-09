<nav class="navbar navbar-expand-lg navbar-light" style="background: #10bbb3">
    <div class="container-fluid navbar-saraha">
        <a class=" name-of-logo" href="#">Saraha</a>
        <div class=" float-lg-right" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link nav-link-color" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">On WebSite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registar</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

                <select class="changelang">
{{--                    just for design--}}
                    <option value="1" >Arabic</option>
                    <option value="2">English</option>
                </select>


            </ul>
        </div>
    </div>

</nav>
