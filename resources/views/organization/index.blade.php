@extends('layouts.app')
@section('title', 'Our Organization Chart')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/recruitment_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Our Organization Chart
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Our Organization Chart
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="who-we-are-page pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1 class="section-title"
                        style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Our Organization Chart
                    </h1>
                    <div class="who-we-are-img">
                        <img src="{{ asset('data/org.png') }}" alt="Image"
                            style="width: 100%; height: auto; background-size: center; object-fit: cover; border: 3px solid #f7bc33; padding: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

@endsection
@section('script')
@endsection
