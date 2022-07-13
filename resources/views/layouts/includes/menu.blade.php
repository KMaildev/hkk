<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="roof-social float-left">

                        <a href="tel:+9595002998">
                            <i class="lni-phone"></i>
                            +959 500 2998,
                        </a>
                        <a href="tel:+959775002998">
                            +959 775 002 998
                        </a>

                        <a href="mailto:captainukt@gmail.com">
                            <i class="lni-envelope"></i>
                            captainukt@gmail.com
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#">
                            <i class="lni-facebook-filled"></i>
                        </a>
                        <a class="twitter" href="#">
                            <i class="lni-twitter-filled"></i>
                        </a>
                        <a class="instagram" href="#">
                            <i class="lni-instagram-filled"></i>
                        </a>
                        <a class="linkedin" href="#">
                            <i class="lni-linkedin-fill"></i>
                        </a>
                        <a class="google" href="#">
                            <i class="lni-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="https://preview.uideck.com/items/nexusplus/assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">

                    <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">
                            Home
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Listings
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                            <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                            <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                        </div>
                    </li>

                    <li class="nav-item {{ Request::routeIs('contact.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact.index') }}">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="post-btn">
                    <a class="btn btn-common" href="post-ads.html">
                        <i class="lni-pencil-alt"></i>
                        Post an Ad
                    </a>
                </div>
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a class="active" href="#">
                    Home
                </a>
                <ul class="dropdown">
                    <li><a class="active" href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                </ul>
            </li>
            <li>
                <a href="category.html">Categories</a>
            </li>
            <li>
                <a href="#">
                    Listings
                </a>
                <ul class="dropdown">
                    <li><a href="adlistinggrid.html">Ad Grid</a></li>
                    <li><a href="adlistinglist.html">Ad Listing</a></li>
                    <li><a href="ads-details.html">Listing Detail</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="ads-details.html">Ads Details</a></li>
                    <li><a href="post-ads.html">Ads Post</a></li>
                    <li><a href="pricing.html">Packages</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Blog</a>
                <ul class="dropdown">
                    <li><a href="blog.html">Blog - Right Sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                    <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
                    <li><a href="single-post.html">Blog Details</a></li>
                </ul>
            </li>
            <li>
                <a href="contact.html">Contact Us</a>
            </li>
        </ul>

    </nav>

    @if (request()->route()->getName() == 'home')
        @include('layouts.includes.slider')
    @endif

</header>
