@extends('layouts.app')
@section('title', 'Milestones')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/milestones_banner.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Milestones
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Milestones
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="who-we-are-page"
        style="
        box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
        background-color: #f6bb33;
        background: -webkit-gradient(linear, left top, left bottom, from(#f6bb33), to(#a5517a));
        background: -webkit-linear-gradient(top, #f6bb33, #a5517a);
        background: -moz-linear-gradient(top, #f6bb33, #a5517a);
        background: -ms-linear-gradient(top, #f6bb33, #a5517a);
        background: -o-linear-gradient(top, #f6bb33, #a5517a); 
    ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 14px;">
                    <center>
                        <h2 class="m-b10" style="color: white; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Milestones
                        </h2>
                    </center>
                </div>

                @foreach ($milestones as $milestone)
                    <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 14px;">
                        <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                            <img src="{{ $milestone->photo }}" alt="" data-enlargeable=""
                                style="object-position: top; width: 100%; height: 350px; object-fit: cover; background-size: corver; border: 2px solid #555;"
                                class="img-enlargeable">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
