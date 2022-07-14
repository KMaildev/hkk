@extends('layouts.app')
@section('title', 'Submit Your CV')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/employer_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Submit Your CV
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Submit Your CV
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="content" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-xs-12" style="background-color: #f7f7fb; padding: 30px;">
                    <h3 class="product-title"
                        style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Submit Your CV
                    </h3>
                    <hr>
                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Full Name*</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Additional Note</label>
                                    <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="choose-img">
                                    <label for="img">Select your CV to upload</label>
                                    <input type="file" id="img" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control" />
                                    @error('attachment_file')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <hr>
                                <button type="submit" class="btn btn-common">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
