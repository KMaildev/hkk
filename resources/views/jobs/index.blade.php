@extends('layouts.app')
@section('title', 'Jobs Available In Japan')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/jobs_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Jobs Available In Japan
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Jobs Available In Japan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="live-jobs-area-two pb-70 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h4 style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Jobs Available In Japan
                    </h4>
                    <p style="text-align: center">
                        Can't find the right job? Submit your resume and we will revert
                        once a job matches your profile
                    </p>
                </div>

                <div class="col-lg-12 col-md-12 py-5">
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-md-4 col-sm-12">
                                <a href="{{ route('cv.index') }}">
                                    <div class="alert alert-dismissible alert-primary">
                                        <strong>
                                            {{ $job->title ?? '' }}
                                        </strong>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
