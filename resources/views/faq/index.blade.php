@extends('layouts.app')
@section('title', 'Employer FAQ')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/faq_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Employer FAQ's
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Employer FAQ's
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-faq text-center">
                        <h2 class="section-title"
                            style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                            Frequently Asked Questions
                        </h2>
                    </div>

                    <div class="panel-group" id="accordion">
                        @foreach ($faqs as $key => $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne_{{ $key }}">
                                            {{ $faq->question_eng ?? '' }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_{{ $key }}"
                                    class="panel-collapse collapse {{ $key == 0 ? 'show' : '' }}">
                                    <div class="panel-body">
                                        <p>
                                            {{ $faq->answer_eng ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
