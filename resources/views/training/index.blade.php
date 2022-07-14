@extends('layouts.app')
@section('title', 'Nozomi Japanese Language School')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/training_banner.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">
                            Nozomi Japanese Language School
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">
                                Nozomi Japanese Language School
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-padding">
        <div class="container">

            <div class="product-info row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="ads-details-wrapper">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{ asset('data/training/1.jpg') }}" alt=""
                                        style="width: 100%; height: 350px; background-size: center; object-fit: cover; border: 3px solid #f7bc33; padding: 10px;">
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{ asset('data/training/2.JPG') }}" alt=""
                                        style="width: 100%; height: 350px; background-size: center; object-fit: cover; border: 3px solid #f7bc33; padding: 10px;">
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-img">
                                    <img class="img-fluid" src="{{ asset('data/training/3.jpeg') }}" alt=""
                                        style="width: 100%; height: 350px; background-size: center; object-fit: cover; border: 3px solid #f7bc33; padding: 10px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-box">
                        <div class="ads-details-info">
                            <h2>
                                Nozomi Japanese Language School
                            </h2>
                            <p class="mb-4">
                                1. For those who want to work in Japan, there is a car parts factory in Japan. Inside the
                                building ... a factory that produces cosmetics; Construction work; Livestock Agriculture;
                                This is an introductory course to work in the printing industry. <br><br>

                                2. It is also a course that is planned and taught so that students can study Japanese and go
                                to work between the ages of (20) and (30). <br><br>

                                3. Experienced teachers and Japanese teachers supervise. <br><br>

                                4. During the training period, weekly; This is a course that conducts monthly exams and
                                assesses and teaches real comprehension. <br><br>

                                5. In addition to the Japanese language, culture, custom lifestyle The rules that need to be
                                followed Legal training is also provided.
                                Directions - YBS 4, located near Botajung Pagoda and Yangon Eastern Hospital with convenient
                                transportation. 24, 26, 31, 57 65 70 81 89 and opened in an easily accessible place.
                            </p>
                        </div>
                        <div class="tag-bottom">
                            <div class="float-right">
                                <div class="share">
                                    <div class="social-link">
                                        <a class="facebook" data-toggle="tooltip" data-placement="top" title="facebook"
                                            href="https://www.facebook.com/Nozomi-Japanese-Language-School-427030791157796"
                                            target="_blank">
                                            <i class="lni-facebook-filled"></i>
                                        </a>
                                        <a class="twitter" data-toggle="tooltip" data-placement="top" title="twitter"
                                            href="#">
                                            <i class="lni-twitter-filled"></i>
                                        </a>
                                        <a class="linkedin" data-toggle="tooltip" data-placement="top" title="linkedin"
                                            href="#">
                                            <i class="lni-linkedin-fill"></i>
                                        </a>
                                        <a class="google" data-toggle="tooltip" data-placement="top" title="google plus"
                                            href="#">
                                            <i class="lni-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <aside class="details-sidebar">
                        <div class="widget">
                            <h4 class="widget-title">
                                Facebook Page
                            </h4>
                            <div id="fb-root">
                                <div class="fb-page"
                                    data-href="https://www.facebook.com/Nozomi-Japanese-Language-School-427030791157796/?ref=page_internal"
                                    data-tabs="timeline" data-height="240" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                </div>

                                <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src =
                                            'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1&appId=310515396183252&autoLogAppEvents=1';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 py-5">
                    <h2 class="section-title"
                        style="text-align: center; color: #E93F33; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                        Training Photo
                    </h2>
                    <div class="row">
                        @foreach ($training_photos as $training_photo)
                            @php
                                $values = explode(',', $training_photo->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
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
            </div>

        </div>
    </div>


@endsection
@section('script')
@endsection
