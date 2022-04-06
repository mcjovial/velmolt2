@extends('layout')

@section('css')
    
@endsection

@section('content')
  <main id="primary" class="site-main single-post">
    <article id="post-4614" class="blog-post post-4614 post type-post status-publish format-standard has-post-thumbnail hentry category-home-buyers resource-type-articles">
      <div class="container-narrow">
          <header class="blog-post__header">
            <div class="blog-post__resources"><a class="label-as-button">Article</a></div>
            <h1 class="entry-title">{{ $post->title }}</h1>
            <div class="blog-post__meta">
              <div class="column column--left">
                <span class="posted-on">
                  <time class="entry-date published" datetime="2022-04-01T14:33:30+00:00">{{date("M j, Y", strtotime($post->created_at))}}</time>
                </span>
                <span class="reading-time clock">1 minute read</span>
              </div>
              <div class="column column--right">
              <div class="social-share ">
                <a class="social-share__link facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="social-share__link twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="social-share__link linkedin" href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                <button class="social-share__link js-copybtn" data-url="{{url('/')}}/single/{{$post->id}}/{{str_slug($post->title)}}"><i class="fas fa-copy"></i></button>
              </div>
            </div><!-- .entry-meta -->
          </header><!-- .entry-header -->
      </div>
      <div class="container">
      <div class="blog-post__thumbnail"><img width="2560" height="1520" src="{{url('/')}}/asset/thumbnails/{{$post->image}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
      <div class="container-narrow">
        <div class="entry-content blog-post__content">
          <p>{!!$post->details!!}</p>
        </div><!-- .entry-content -->
      </div>
    </article><!-- #post-4614 -->
    

      </main><!-- #main -->
@endsection