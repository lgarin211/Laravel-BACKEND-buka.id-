<!-- Start Header -->
<header id="mu-hero" class="fixed-bottom" data-aos="fade-up">
    <div class="container">
        <nav id="da" class="navbar navbar-expand-lg navbar-light mu-navbar">
            <!-- Text based logo -->
            <a class="navbar-brand mu-logo" href="index.html">
                <span>Buka.in</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mu-navbar-nav">
                    <li class="nav-item active">
                        <a href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('profile.show')}}">{{ __('Profile') }}</a>
                    </li>
                    <!-- Authentication -->
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <nav id="da2" class="navbar navbar-expand-lg navbar-light mu-navbar text-center">
            <div class="aroiba2 row">
                <a href="/user/sortLink" class="col-md-6 col-sm-6 btn btn-primary">
                    <h6 id="base">Sort Link <i class="fas fa-house-damage"></i></h6>
                </a>
                <a href="/user/linkthri" class="col-md-6 col-sm-6 btn btn-primary">
                    <h6 id="base">Link Thri <i class="fas fa-igloo"></i></h6>
                </a>
            </div>
            <div class="row">
                <div class="row text-center m-auto">
                    <a class="col-sm-3 btn btn-primary" href="#mu-slider"><i style="font-size:30px"
                            class="fa fa-home"></i></a>
                    <a class="col-sm-3 btn btn-primary" href="#mu-about"><i style="font-size:30px"
                            class="fas fa-city"></i></a>
                    <a class="col-sm-3 btn btn-primary" href="#mu-service"><i style="font-size:30px"
                            class="fas fa-coffee"></i></a>
                    <a class="col-sm-3 btn btn-primary" href="login"><i style="font-size:30px"
                            class="fas fa-sign-in-alt"></i></a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->
