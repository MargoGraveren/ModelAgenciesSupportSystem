<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        @guest()
            <h1 class="logo mr-auto"><a href="/">Mercedes Models Management</a></h1>
        @endguest
        @auth()
            <h1 class="logo mr-auto"><a href="/campaign">Mercedes Models Management</a></h1>
        @endauth

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @guest()
                    <li><a href="/">Home</a></li>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#offer">Offer</a></li>
                    <li><a href="/#portfolio">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="drop-down active"><a href="">Join Us</a>
                        <ul>
                            <li><a id="login-link" href="/login">Log In</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="/#contact">Contact</a></li>
                @endguest
                @auth()
                    <li class="drop-down"><a>Campaigns</a>
                        <ul>
                            <li><a href="/campaign">View Campaigns</a></li>
                            <li><a href="/campaign/create">Create Campaign</a></li>
                        </ul>
                    </li>
                    <li><a href="/ranking">Ranking</a></li>
                    <li class="drop-down"><a>Gallery</a>
                        <ul>
                            <li><a href="/gallery">View Gallery</a></li>
                            <li><a href="/album/create">Create Album</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a>Profile</a>
                        <ul>
                            <li><a href="/profile/{{ Auth::user()->id }}">View Profile</a></li>
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="/settings">Settings</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>

                @endauth
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
