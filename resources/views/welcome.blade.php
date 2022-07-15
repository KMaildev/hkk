@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <section id="categories">
        <div class="container">
            <div class="row justify-content-center">
                <style>
                    @media only screen and (max-width: 600px) {
                        .padding {
                            padding-top: 60px;
                        }
                    }
                </style>
                <div class="col-lg-10 col-md-12 col-xs-12 padding">
                    <div id="categories-icon-slider" class="categories-wrapper owl-carousel owl-theme">

                        @foreach ($jobs as $job)
                            <div class="item">
                                <a href="{{ route('cv.index') }}">
                                    <div class="category-icon-item">
                                        <div class="icon-box">
                                            <div class="icon">
                                                <img src="{{ asset('data/job-search.png') }}" alt=""
                                                    style="width: 50%;">
                                            </div>
                                            <h4>
                                                {{ $job->title ?? '' }}
                                            </h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xs-12">
                    <div class="about-wrapper">
                        <h2 style="color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Htoo Kaung Kyaw Services Company
                        </h2>
                        <span style="font-size: 17px; color: black; text-shadow: 1px 1px 1px gray; font-weight: bold;">
                            Overseas Employment Agency
                        </span>
                        <p class="intro-desc py-3" style="text-align: justify">
                            We at Htoo Kaung Kyaw Services Co.,Ltd takes pride in introducing ourselves as one of the
                            leading 300+ licensed overseas recruiting companies in Myanmar with MOEAF certification &
                            catering to all categories of work force requirement with precision.
                            <br><br>
                            Since our inception in 2000, we have established and grown in this industry by providing right
                            to workforce to our clients with excellent and quality service successfully.
                            We also provide consultancy on:
                        </p>
                        <div class="post-btn">
                            <a class="btn btn-common" href="{{ route('about.index') }}">
                                <i class="fa fa-arrow-right"></i>
                                Know More
                            </a>

                            <a class="btn btn-common" href="{{ route('contact.index') }}">
                                <i class="fa fa-arrow-right"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <img class="img-fluid" src="{{ asset('data/about.JPG') }}" alt=""
                        style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; border: 1px solid #f6bb33; padding: 5px;">
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area pb-100 py-3" style="background-color: #e2e0dc;">
        <div class="container">
            <br>
            <h4 style="text-align: center; color: #E93F33; text-shadow: 3px 3px 3px gray; font-weight: bold;">
                Our Culture
            </h4>
            <p style="text-align: justify; color: #000000; font-weight: 400;">
                At Htoo Kaung Kyaw Services Company, we abide by the concept of human development for organizational
                development in order to achieve our ultimate goal of delivering the best value to our customers and
                business partners in line with the following principles.
            </p>

            <div class="row py-5">


                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/icon/3.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <br>
                            <h2 style="font-size: 1em; line-height: 1em; text-align: center;">
                                <span style="color: #E93F33;">Collaborative</span>
                            </h2>
                            <p>
                                <span style="color: #000000; font-weight: 400;">To cooperate and support each other by
                                    sharing ideas and
                                    listening. In order to create and expand success.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img class="alignnone wp-image-21120" src="{{ asset('data/icon/1.png') }}" alt=""
                                    width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <br>
                            <h2 style="font-size: 1em; line-height: 1em; text-align: center;">
                                <span style="color: #E93F33;">Can-Do Attitude</span>
                            </h2>
                            <p style="text-align: left;">
                                <span style="color: #000000; text-align: center;">
                                    Using a positive and “Can-Do”
                                    attitude to seize the moment and realize the opportunity. Think of obstacles as
                                    challenges then strive for success.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21124" src="{{ asset('data/icon/2.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <br>
                            <h2 style="font-size: 1em; line-height: 1em; text-align: center;">
                                <span style="color: #E93F33;">Accountability</span>
                            </h2>
                            <p>
                                <span style="color: #000000;">Have responsibility and good conscience with awareness of the
                                    organization’s overall results with honesty and ethical standards.
                                </span>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 py-5">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/icon/5.png') }}"
                                    alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <br>
                            <h2 style="font-size: 1em; line-height: 1em; text-align: center;">
                                <span style="color: #E93F33;">
                                    Learning and Development
                                </span>
                            </h2>
                            <p>
                                <span style="font-weight: 400; color: #000000;">
                                    Open mind to learn new things. Continuous self improvement with modern knowledge and
                                    skill set.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 py-5">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">
                                <img loading="lazy" class="alignnone wp-image-21123"
                                    src="{{ asset('data/icon/4.png') }}" alt="" width="75" height="56"
                                    sizes="(max-width: 75px) 100vw, 75px">
                            </p>
                            <br>
                            <h2 style="font-size: 1em; line-height: 1em; text-align: center;">
                                <span style="color: #E93F33;">
                                    Customer Centric
                                </span>
                            </h2>
                            <p>
                                <span style="font-weight: 400; color: #000000;">
                                    Being service minded. Emphasizing and adhering to the customer’s success is the first
                                    priority.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services bg-light section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title"
                        style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Our Value Partners
                    </h3>
                </div>
                @foreach ($partners as $partner)
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
                            <div class="icon">
                                <i class="fa fa-flag"></i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        {{ $partner->company_name ?? '' }}
                                    </a>
                                </h3>
                                <p>
                                    {{ $partner->city ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="counter-section section-padding"
        style="background-image: url({{ asset('data/counter_bg.jpeg') }})">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon">
                            <i class="lni-layers"></i>
                        </div>
                        <h2 class="counterUp">20</h2>
                        <p>
                            Our Experience
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon">
                            <i class="lni-users"></i>
                        </div>
                        <h2 class="counterUp">
                            120000
                        </h2>
                        <p>
                            Students

                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <h2 class="counterUp">
                            9300
                        </h2>
                        <p>
                            Sending Workers
                        </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <h2 class="counterUp">
                            75
                        </h2>
                        <p>
                            Jobs Available
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="section-padding">
        <div class="container">
            <h2 class="section-title"
                style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                Activities
            </h2>
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12 py-3">
                        <div class="heading-line-bottom">
                            <h6 style="color: black !important; font-size: 20px;">
                                {{ $activitie->title }}
                            </h6>
                            <p>
                                {{ $activitie->description }}
                            </p>
                        </div>
                        <hr>
                    </div>
                    @php
                        $values = explode(',', $activitie->photo);
                    @endphp
                    @foreach ($values as $photo)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-blog-post">
                                <div class="blog-img">
                                    <img data-enlargeable="" src="{{ $photo }}" alt="Image"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>


    <section id="blog" class="section-padding" style="background-color: #f2eded">
        <div class="container">
            <h2 class="section-title">
                Blog Post
            </h2>
            <div class="row">
                @foreach ($blogs as $new)
                    <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                        <div class="blog-item-wrapper">
                            <div class="blog-item-img">
                                <a href="single-post.html">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 150px; background-size: center; object-fit: cover;">
                                </a>
                            </div>
                            <div class="blog-item-text">
                                <h3>
                                    <a href="single-post.html">
                                        {{ $new->title_eng ?? '' }}
                                    </a>
                                </h3>
                                <p>
                                    {{ Str::limit($new->description_eng, 120) }}
                                </p>
                                <a href="{{ route('blog.show', $new->id) }}" class="btn btn-common">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
