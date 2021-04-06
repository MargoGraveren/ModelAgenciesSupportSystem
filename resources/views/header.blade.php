<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html">Mercedes Models Management</a></h1>

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
                    <li class="drop-down"><a href="">Campaigns</a>
                        <ul>
                            <li><a href="/campaign">List</a></li>
                            <li><a href="/campaign/create">Create</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Ranking</a></li>
                    <li class="drop-down"><a href="/gallery">Gallery</a>
                        <ul>
                            <li><a href="/album/create">Add New</a></li>
                            <li><a href="#">List</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="/profile">Profile</a>
                        <ul>
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Offer</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>

                @endauth
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
