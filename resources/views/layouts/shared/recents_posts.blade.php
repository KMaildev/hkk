<ul class="posts-list">
    @foreach ($recents_blogs as $recents_blog)
        <li>
            <div class="widget-thumb">
                <a href="{{ route('blog.show', $recents_blog->id) }}">
                    <img src="{{ $recents_blog->photo }}" alt=""
                        style="width: 100%; height: 50px; background-size: center; object-fit: cover;">
                </a>
            </div>
            <div class="widget-content">
                <a href="{{ route('blog.show', $recents_blog->id) }}">
                    {{ $recents_blog->title_eng ?? '' }}
                </a>
            </div>
            <div class="clearfix"></div>
        </li>
    @endforeach
</ul>
