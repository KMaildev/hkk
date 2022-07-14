@extends('layouts.app')
@section('title', 'Activities')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/gallery_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Activities</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">Activities</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #f7bc33; padding: 10px;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection
