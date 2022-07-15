@extends('layouts.app')
@section('title', 'Management Team')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/management_team_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Management Team
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Management Team
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="job-information-area py-5">
        <div class="container">
            <div class="job-information">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="who-we-are-img" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Image"
                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            <center>
                                <div class="blog-content" style="background-color: #F6BB33; padding: 20px;">
                                    <span style="color: white">
                                        U Ko latt
                                    </span>
                                    <br>
                                    <span style="color: white">
                                        Managing Director
                                    </span>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="who-we-are-content">
                            <h2
                                style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                                MD’S MESSAGE
                            </h2>
                            <p style="text-align: justify; font-size: 18px;">
                                If those who get back after a three-year contract are those who have Japanese language with
                                work experience and qualifications, the good news is that there are plans to introduce job
                                opportunities in Japanese factories in Myanmar. <br><br>
                                Our company's main objective is to facilitate Myanmar skillfull workers across the world by
                                getting employment opportunities for them. <br><br>
                                Recruiting the right candidate at the right company at the right time is our essence.
                                Rather than quantity, we look forward to a qualitative approach. <br><br>
                                The mission of the company is to provide quality support to the employer through a process
                                of counseling, education, training, testing, consultancy and continuing professional
                                development program. <br><br>
                                Candidates satisfaction by continuously updating services; Increase canidates capacity by
                                practicing camp training techniques. <br><br>
                                We are sending technology trainees workers to Japan with reliable and systematic services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="job-information-area py-2" style="background-color: #efede8;">
        <div class="container">
            <div class="job-information">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 py-5">
                        <h2 style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Our Team
                        </h2>
                    </div>
                    @foreach ($teams as $team)
                        <div class="col-lg-3">
                            <div class="who-we-are-img" style="box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                                <img src="{{ $team->photo }}" alt="Image"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                <center>
                                    <div class="blog-content" style="background-color: #F6BB33; padding: 20px;">
                                        <span style="color: white">
                                            {{ $team->name }}
                                        </span>
                                        <br>
                                        <span style="color: black">
                                            {{ $team->position }}
                                        </span>
                                    </div>
                                </center>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br><br>
    </section>




@endsection
@section('script')
@endsection
