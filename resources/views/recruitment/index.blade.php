@extends('layouts.app')
@section('title', 'Our Recruitment Process')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/recruitment_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Our Recruitment Process
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Our Recruitment Process
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="works section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title"
                        style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Our Recruitment Process
                    </h3>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-users"></i>
                        </div>
                        <p>
                            Manpower Requests
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-bookmark-alt"></i>
                        </div>
                        <p>
                            Demand Letter & Power of Attorney
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-check"></i>
                        </div>
                        <p>
                            Protectors’ Permission
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                        <p>
                            Apply & Submission
                        </p>
                    </div>
                </div>
                <hr class="works-line">

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-hand-pointer"></i>
                        </div>
                        <p>
                            Interview & Selection
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-passport"></i>
                        </div>
                        <p>
                            Visa Stamping
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-chart-bar"></i>
                        </div>
                        <p>
                            Deployment
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fa fa-calendar-check"></i>
                        </div>
                        <p>
                            Happy Life
                        </p>
                    </div>
                </div>

                <hr class="works-line">


            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
