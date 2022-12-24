<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">BJM</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                {{-- untuk mengecek apakah sudah login atau belum/sesition --}}
                @guest
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto" href="/Contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="login">Log In</a></li>
                @else 
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/AboutUs">About</a></li>
                <li><a class="nav-link scrollto" href="/Contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="login">{{Auth::user()->nama}}</a></li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                                               document.getElementById('logout-form').submit();">
                         Log Out    
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

