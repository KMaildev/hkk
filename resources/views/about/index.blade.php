@extends('layouts.app')
@section('title', ' Our Company Profile')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/about_banner.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Our Company Profile
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Our Company Profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <img class="img-fluid" src="{{ asset('data/about.JPG') }}" alt=""
                        style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; border: 1px solid #f6bb33; padding: 5px;">
                </div>
            </div>
        </div>
    </section>


    <section class="counter-section section-padding" style="background-image: url({{ asset('data/counter_bg.jpeg') }})">
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


    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <h4 style="text-align: center; color: #E93F33; text-shadow: 3px 3px 3px gray; font-weight: bold;">
                        Responsibility
                    </h4>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h4 style="color: #E93F33; text-shadow: 3px 3px 3px gray; font-weight: bold; font-size: 20px;">
                            Htoo Kaung Kyaw Responsibility
                        </h4>
                        <p class="intro-desc py-3" style="text-align: justify">
                            Sourcing the candidates as per the clients require skill set. Receiving and accommodating the
                            clients. Arranging permission for client interview from the Emigration Authority. Arrangement
                            for the skill test for the clients. Medical Test for selected candidates prior to visa process.
                            Visa Stamping, Emigration clearance if required. Departure as per schedule.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12">
                    <div class="about-wrapper">
                        <h4 style="color: #E93F33; text-shadow: 3px 3px 3px gray; font-weight: bold; font-size: 20px;">
                            Employer Responsibility
                        </h4>
                        <p class="intro-desc py-3" style="text-align: justify">
                            As per the Ministry of External Affairs Rules employers are required to provide the following
                            documents necessary for getting permission for Placing advertisement, Conducting Interview, and
                            getting emigration clearance from the Protector of Emigrants. Demand Letter from the Employer.
                            Power of attorney from the Employer. Specimen Employment Contract. Individual employment
                            contract agreement between foreign employer and Myanmar workers. Service Charges are applied as
                            per category and skill sets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area pb-100 py-5" style="background-color: #e2e0dc;">
        <div class="container">
            <h4 style="text-align: center; color: #E93F33; text-shadow: 3px 3px 3px gray; font-weight: bold;">
                Our Culture
            </h4>
            <p>
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
                                <img loading="lazy" class="alignnone wp-image-21124"
                                    src="{{ asset('data/icon/2.png') }}" alt="" width="75" height="56"
                                    sizes="(max-width: 75px) 100vw, 75px">
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
                                <img loading="lazy" class="alignnone wp-image-21123"
                                    src="{{ asset('data/icon/5.png') }}" alt="" width="75" height="56"
                                    sizes="(max-width: 75px) 100vw, 75px">
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

@endsection
@section('script')
@endsection
