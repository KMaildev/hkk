@extends('layouts.app')
@section('title', 'Our Value Partners')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/gallery_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Our Value Partners
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Our Value Partners
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

@endsection

@section('script')
@endsection
