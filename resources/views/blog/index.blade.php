@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('blog.alert')

                @if(!$posts->count())
                    <dir class="alert alert-info">
                        <p>Nothing Found</p>
                    </dir>
                @else


                    @foreach($posts as $post)
                    
                        <article class="post-item">
                            
                            @if($post -> image)

                                <div class="post-item-image">
                                    <a href="{{ route('blog.shows', $post->slug) }}">
                                        <img src="{{ $post->image_url }}" alt="">
                                    </a>
                                </div>

                            @endif

                            <div class="post-item-body">
                                <div class="padding-10">
                                    <h2>
                                        <a href="{{ route('blog.shows',$post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <p>{!! $post->excerpt_html !!}</p>
                                </div>

                                <div class="post-meta padding-10 clearfix">
                                    <div class="pull-left">
                                        <ul class="post-meta-group">
                                            <li>
                                                <a href="{{ route('author',$post->author->slug) }}">
                                                    <i class="fa fa-user"></i>
                                                    {{ $post->author->name }}
                                                </a>
                                            </li>
                                            <li><i class="fa fa-clock-o"></i>
                                                <time> {{ $post->date }}</time>
                                            </li>
                                            <li>
                                                <a href="{{ route('category', $post->category->slug) }}"> 
                                                    <i class="fa fa-folder"></i>
                                                    {{ $post->category->title }}
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-tag"></i>
                                                {!! $post->tags_html !!}
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i><a href="#">4 Comments</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('blog.shows',$post->slug) }}">Continue Reading &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    
                    @endforeach

                @endif

                <nav>
                  {{ $posts->appends(request()->only(['term']))->links() }}
                </nav>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>

@endsection
 
