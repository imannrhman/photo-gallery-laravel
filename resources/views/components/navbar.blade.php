<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">PHOTO GALLERY<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('login') ? 'active' : '' }}" href="#team">Team</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('') ? 'active' : '' }}" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
