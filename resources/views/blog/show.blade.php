@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">
                    @if($post->image_url)
                        <div class="post-item-image">
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        </div>
                    @endif

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{ $post->title }}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li>
                                        <a href="{{ route('author',$post->author->slug) }}">
                                            <i class="fa fa-user"></i>{{ $post->author->name }}
                                        </a>
                                    </li>

                                    <li>
                                        <i class="fa fa-clock-o"></i><time>{{ $post->date }}</time>
                                    </li>
                                    <li>
                                        <a href="
                                            {{ route('category', $post->category->slug) }}"> 
                                            <i class="fa fa-folder"></i>
                                            {{ $post->category->title }}
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i>
                                        {!! $post->tags_html !!}
                                    </li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                            {!! $post->body_html !!}
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <a href="{{ route('author', $post->author->slug) }}">
                          <img alt="{{ $post->author->name }}" src="{{ $post->author->gravatar() }}" class="media-object" width="100px" height="100px">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                            <a href="{{ route('author', $post->author->slug) }}">
                                {{ $post->author->name}}
                            </a>
                        </h4>
                        <div class="post-author-count">
                          <a href="{{ route('author', $post->author->slug) }}">
                              <i class="fa fa-clone"></i>
                              <?php $postCount = $post->author->posts->count() ?>
                              {{ $postCount }} {{ str_plural('post', $postCount) }}
                          </a>
                        </div>
                        <p>{!! $post->author->bio !!}</p>
                      </div>
                    </div>
                </article>

                <!--Comment here-->
                
            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
 
