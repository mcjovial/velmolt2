@extends('layout')

@section('css')
    
@endsection

@section('content')
  <section class="site-main content header-content no-link"><div class="container"><h2 class="header-content-heading">Articles</h2></div></section>      <section class="doma-blog">
    <div class="doma-blog__container">
      <div class="doma-posts-list">
        <div class="doma-posts-list__content">
          @foreach ($posts as $post)
            <div class="doma-posts-list__item">
              <div class="doma-posts-list__item-content">
                <div class="doma-post-item resource-type_article">
                  <div class="doma-post-item__inner">
                    <div class="doma-post-item__content">
                      <a class="doma-post-item__top" title="{{ $post->title }}" href="{{url('/')}}/single/{{$post->id}}/{{str_slug($post->title)}}" >
                        <div class="cat">Article </div>
                        <div data-bg="{{url('/')}}/asset/thumbnails/{{$post->image}}" class="doma-post-item__bg rocket-lazyload" style="background-image: url({{url('/')}}/asset/thumbnails/{{$post->image}})">
                        </div>
                      </a>
                      <h3 class="doma-post-item__title">
                        <a class="doma-post-item__title-link" title="{{ $post->title }}" href="{{url('/')}}/single/{{$post->id}}/{{str_slug($post->title)}}" >{{ $post->title }}</a>
                      </h3>
                      <div class="doma-post-item__excerpt doma-post-item__excerpt--featured-pane">{!!  \Illuminate\Support\Str::limit($post->content, 60) !!}..</div>
                      <span class="posted-on">
                        {{-- <time class="entry-date published" datetime="2022-04-01T14:33:30+00:00">{{date("M j, Y", strtotime($post->created_at))}}</time> --}}
                      </span>
                      <span class="reading-time clock">1 minute read</span>
                    </div>
                  </div>
                </div><!-- /.doma-post-item -->
              </div>
            </div><!-- /.doma-posts-list__item -->
          @endforeach
        </div>
      </div><!-- /.doma-posts-list -->
    </div>
  </section><!-- /.doma-blog -->
@endsection