@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/contact_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Contact Us</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <form class="contact-form" data-toggle="validator" action="{{ route('contact.store') }}"
                        method="POST" id="create-form">
                        @csrf
                        <h1 class="contact-title"
                            style="color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold; font-size: 20px;">
                            Send Message Us
                        </h1>
                        <p>
                            Please fill in the following form with a short description about yourself and your needs, and we
                            will contact you shortly.
                        </p>
                        <br>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="help-block with-danger text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control"
                                        value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message" class="form-control" cols="30" rows="4" data-error="Write your message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-common">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="information">
                        <h3 style="background-color: #F7BC33; color: white;">
                            Contact Info
                        </h3>
                        <div class="contact-datails">
                            <p style="text-align: justify; font-weight: bold;">
                                If you have any queries about recruitments, vacancies, or anything else, our team is ready
                                to response all your queries.
                            </p>
                        </div>
                        <div class="contact-datails">
                            <ul class="list-unstyled info">
                                <li>
                                    <span>Address : </span>
                                    <p>
                                        No.23, 2nd Flr, Botahtaung Avenue 2d Lane,
                                        4th Qtr, Botahtaung Township, Yangon, Myanmar.
                                    </p>
                                </li>
                                <li>
                                    <span>Email : </span>
                                    <p>
                                        <a href="mailto:captainukt@gmail.com">
                                            captainukt@gmail.com
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <span>Email : </span>
                                    <p>
                                        <a href="mailto:info@hkkservices.com">
                                            info@hkkservices.com
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <span>Email : </span>
                                    <p>
                                        <a href="mailto:admin@hkkservices.com">
                                            admin@hkkservices.com
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <span>Phone : </span>
                                    <p>
                                        <a href="tel:+959 500 2998">
                                            +959 500 2998
                                        </a>
                                    </p>
                                </li>

                                <li>
                                    <span>Phone : </span>
                                    <p>
                                        <a href="tel:+959775002998">
                                            +959 775 002 998
                                        </a>
                                    </p>
                                </li>
                            </ul>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12 py-5">
                    <object style="border:0; height: 450px; width: 100%;"
                        data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584"></object>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContacts', '#create-form') !!}
@endsection
