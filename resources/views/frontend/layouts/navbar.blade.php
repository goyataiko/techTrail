<!-- Navbar-Area-Start -->

<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container col-md-9">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('frontend/assets/images/logo-x-w.png') }}" alt="Tech Trail">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/#home-page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about-page">About</a>
                </li>
                <li class="nav-item">
                    @if (request()->path() === '/')
                        <a class="nav-link" href="/#portfolio-page">Portfolio</a>
                    @else
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#skills-page">Skills</a>
                </li>
                <li class="nav-item">
                    @if (request()->path() === '/')
                        <a class="nav-link" href="/#blog-page">Blog</a>
                    @else
                        <a class="nav-link" href="/blog">Blog</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact-page">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>





<!-- Navbar-Area-End -->
