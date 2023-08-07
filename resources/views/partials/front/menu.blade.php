<!-- ======= Header ======= -->
<header id="header" class="fixed-top " style="background: #7f0505">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto" style="font-size: 5em">
        <a href="index.html">
        </a></h1> --}}
        <img src="{{ asset('front-office/logo/Image4.png') }}" alt="" width="250" class="logo me-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto  @if(Route::currentRouteName()=='site.home') active @endif" href="{{ route('site.home') }}">Accueil</a></li>
                <li><a class="nav-link scrollto  @if(Route::currentRouteName()=='site.about') active @endif" href="{{ route('site.about') }}">A propos</a></li>
                <li><a class="nav-link scrollto  @if(Route::currentRouteName()=='site.service') active @endif" href="{{ route('site.services') }}">Nos services</a></li>
                <li><a class="nav-link scrollto  @if(Route::currentRouteName()=='site.blog') active @endif" href="{{ route('site.blog') }}">Blog</a></li>
                {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
                <li><a class="nav-link scrollto  @if(Route::currentRouteName()=='site.contact') active @endif" href="{{ route('site.contact') }}">Contact</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>
                            FR
                            {{-- <img
                                src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png"
                                width="40" alt="">  --}}
                        </span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="#">
                                FR
                                {{-- <img
                                    src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png"
                                    width="40" alt="">  --}}
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                EN
                                {{-- <img src=" https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png"
                                    width="40" alt=""> --}}
                            </a>
                        </li>

                    </ul>
                </li>

                <li><a class="getstarted scrollto" href="{{ route('login') }} "> Accès client </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
