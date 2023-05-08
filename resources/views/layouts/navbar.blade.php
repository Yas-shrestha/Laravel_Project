<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="frontend/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Home</a></li>

                <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('/abouts') }}">About Us</a></li>
                        <li><a href="{{ url('/teams') }}">Team</a></li>
                        <li><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/portfolios') }}">Portfolio</a></li>
                <li><a href="{{ url('/pricings') }}">Pricing</a></li>
                <li><a href="{{ url('/blogs') }}">Blog</a></li>
                <li><a href="{{ url('/contacts') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <ul class="navbar-nav ms-auto d-inline-block">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link hover-btn-new log orange" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</header>
