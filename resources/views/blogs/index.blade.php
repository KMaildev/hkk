@extends('layouts.app')
@section('title', 'Blog')
@section('content')

    <div class="page-header" style="background: url({{ asset('data/blog_banner.jpeg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}">Home /</a>
                            </li>
                            <li class="current">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 col-xs-12">
                    @foreach ($blogs as $new)
                        <div class="blog-post">
                            <div class="post-thumb">
                                <a href="{{ route('blog.show', $new->id) }}">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 320px; background-size: center; object-fit: cover;">
                                </a>
                                <div class="hover-wrap"></div>
                            </div>

                            <div class="post-content">
                                <div class="meta">
                                    <span class="meta-part">
                                        <a href="#">
                                            <i class="lni-user"></i>
                                            {{ $new->author ?? '' }}
                                        </a>
                                    </span>
                                </div>
                                <h2 class="post-title">
                                    <a href="{{ route('blog.show', $new->id) }}">
                                        {{ $new->title_eng ?? '' }}
                                    </a>
                                </h2>
                                <div class="entry-summary">
                                    <p style="text-align: justify">
                                        {{ Str::limit($new->description_eng, 200) }}
                                    </p>
                                </div>
                                <a href="{{ route('blog.show', $new->id) }}" class="btn btn-common">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
                    <div class="widget categories">
                        <h4 class="widget-title">
                            Quick Links
                        </h4>
                        @include('layouts.shared.quick_links')
                    </div>

                    <div class="widget widget-popular-posts">
                        <h4 class="widget-title">Recent Posts</h4>
                        @include('layouts.shared.recents_posts')
                    </div>
                </aside>

            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
