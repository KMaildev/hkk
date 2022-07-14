<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="list-inline">
                        <li>
                            <i class="lni-phone"></i>
                            <span>
                                +959 500 2998,
                            </span>
                            <span>
                                +959 775 002 998
                            </span>
                        </li>

                        <li>
                            <i class="lni-envelope"></i>
                            <span>
                                captainukt@gmail.com,
                            </span>
                            <span>
                                info@hkkservices.com
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#">
                            <i class="lni-facebook-filled"></i>
                        </a>
                        <a class="twitter" href="#">
                            <i class="lni-twitter-filled"></i>
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
                    <img src="{{ asset('data/logo.jpg') }}" alt="" style="width: 50px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">

                    <li class="nav-item {{ Request::routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link nav-menu">
                            Home
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="adlistinggrid.html">
                                Our Company Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('statement.index') }}">
                                Our Vision and Mission
                            </a>
                            <a class="dropdown-item" href="adlistinggrid.html">
                                Our Strengths & Presence
                            </a>
                            <a class="dropdown-item" href="{{ route('organization.index') }}">
                                Corporate Structure/Organization Chart
                            </a>
                            <a class="dropdown-item" href="adlistinglist.html">
                                Management Team
                            </a>
                            <a class="dropdown-item" href="adlistinglist.html">
                                e-Brochure
                            </a>
                            <a class="dropdown-item" href="{{ route('partners.index') }}">
                                Our Value Partners
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('jobs.index') }}">
                                Jobs Available In Japan
                            </a>
                            <a class="dropdown-item" href="{{ route('recruitment.index') }}">
                                Our Recruitment Process
                            </a>
                            <a class="dropdown-item" href="{{ route('training.index') }}">
                                Recruiter Training Program
                            </a>
                            <a class="dropdown-item" href="{{ route('milestones.index') }}">
                                Milestones
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Candidates Zone
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('cv.index') }}">
                                Submit CV
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu" href="{{ route('employer.index') }}">
                            Employer Zone
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link nav-menu dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('gallery.index') }}" class="dropdown-item">
                                Activities
                            </a>

                            <a href="{{ route('blog.index') }}" class="dropdown-item">
                                Blog
                            </a>

                            <a href="{{ route('faq.index') }}" class="dropdown-item">
                                Employer FAQ's
                            </a>
                        </div>
                    </li>

                    <li class="nav-item {{ Request::routeIs('contact.index') ? 'active' : '' }}">
                        <a class="nav-link nav-menu" href="{{ route('contact.index') }}">
                            Contact
                        </a>
                    </li>
                </ul>

                <div class="post-btn">
                    <a class="btn btn-common" href="post-ads.html">
                        <i class="lni-pencil-alt"></i>
                        FMCJ
                    </a>
                </div>

                <div class="post-btn" style="margin-left: 5px;">
                    <a class="btn btn-common" href="post-ads.html">
                        <i class="lni-pencil-alt"></i>
                        JOBGTOP
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
