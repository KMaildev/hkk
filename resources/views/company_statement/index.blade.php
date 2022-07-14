@extends('layouts.app')
@section('title', 'VISION / MISSION / VALUES')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/vision_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            VISION / MISSION / VALUES
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                VISION / MISSION / VALUES
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class=""
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #935820;
        background: -webkit-gradient(linear, left top, left bottom, from(#935820), to(#301903));
        background: -webkit-linear-gradient(top, #935820, #301903);
        background: -moz-linear-gradient(top, #935820, #301903);
        background: -ms-linear-gradient(top, #935820, #301903);
        background: -o-linear-gradient(top, #935820, #301903); 
       ">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/vision.png') }}" alt="Image" style="width: 80%;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    Our Vision
                                </h2>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Produce learners who are competent to face the Japanese community with their
                                        obtained knowledge, confidence by constant practice and global competence through
                                        the continual life long journey of learning.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #3b9124;
        background: -webkit-gradient(linear, left top, left bottom, from(#3b9124), to(#0d0606));
        background: -webkit-linear-gradient(top, #3b9124, #0d0606);
        background: -moz-linear-gradient(top, #3b9124, #0d0606);
        background: -ms-linear-gradient(top, #3b9124, #0d0606);
        background: -o-linear-gradient(top, #3b9124, #0d0606); 
    ">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/mission.png') }}" alt="Image" style="width: 80%;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    OUR MISSION
                                </h2>
                                <div>
                                    <p style="color: white; text-align: justify; font-size: 18px;">
                                        Provide an adequate learning experience that would enable to be equipped with
                                        Japanese Language knowledge. <br>
                                        Promote cultural understanding of Japanese customs, Manners and Traditions.
                                        Exercise the Japanese way of discipline to become responsible, better citizens to
                                        the society and as well as in international arena.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>


    <section class=""
        style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
    background-color: #bb8d2f;
    background: -webkit-gradient(linear, left top, left bottom, from(#bb8d2f), to(#9b517c));
    background: -webkit-linear-gradient(top, #bb8d2f, #9b517c);
    background: -moz-linear-gradient(top, #bb8d2f, #9b517c);
    background: -ms-linear-gradient(top, #bb8d2f, #9b517c);
    background: -o-linear-gradient(top, #bb8d2f, #9b517c); 
">
        <br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="app-img-1">
                                <img src="{{ asset('data/value.png') }}" alt="Image" style="width: 80%;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="app-downloading-content">
                                <h2 class="entry-title text-black text-uppercase pt-0 mt-0"
                                    style="text-shadow: 2px 2px gray; color: white;">
                                    OUR CORE VALUE
                                </h2>
                                <div>
                                    <ul>
                                        <li style="color: white; font-size: 18px;">Integrity</li>
                                        <li style="color: white; font-size: 18px;">Collaboration</li>
                                        <li style="color: white; font-size: 18px;">Trust</li>
                                        <li style="color: white; font-size: 18px;">Honesty</li>
                                        <li style="color: white; font-size: 18px;">Respect</li>
                                        <li style="color: white; font-size: 18px;">Courage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

@endsection
@section('script')
@endsection
