<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ url("") }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route("home") }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route("about") }}" class="nav-item nav-link">About</a>
                    <a href="{{ url("tour_packages") }}" class="nav-item nav-link">Tour Packages</a>
                    <div class="nav-item dropdown">
                        <a href="{{ url("#") }}" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{ route("blog_travel") }}" class="dropdown-item">Blog Travel</a>
                            {{-- <a href="{{ url("single.html") }}" class="dropdown-item">Blog Detail</a> --}}
                            <a href="{{ route("destination") }}" class="dropdown-item">Destination</a>
                            <a href="{{ route("guide") }}" class="dropdown-item">Travel Guides</a>
                            <a href="{{ route("testimonial") }}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ url("contact") }}" class="nav-item nav-link">Contact</a>
                    <a href="{{ url("login") }}" class="nav-item nav-link">Log in</a>
                    <a href="{{ url("register") }}" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
