@extends('layout')
@section('css')

@stop
@section('content')

    <!--Banner Section Starts-->
        <section data-bg="{{ asset('/img/3.jpg') }}" id="homepage-hero-banner" class="banner rocket-lazyload mySlides" style="background-image: url(/img/3.jpg);">
            <div class="container">
                <div class="banner__content">
                    <h1 style="color: #fff;">Re-innovating real-time options trading activities </h1>
                    <p style="color: #fff;">OptionWhale is an algorithm-based options flow Investment platform that exposes smart money whale trades and creates a vastly more simple, efficient and affordable closing experience in the Crypto stock and equity option markets.</p>
                    <div class="anchors-wrapper">
                        <a href="/" class="button__main button--arrow" target="_self">Our Vision<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="/" class="button__secondary button--white-mobile button--arrow" target="_self">Let's Talk<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg="{{ asset('/img/reff.jpg') }}" id="homepage-hero-banner" class="banner b2 rocket-lazyload mySlides" style="background-image: url(/img/reff.jpg);">
            <div class="container">
                <div class="banner__content">
                    <h1 style="color: #fff;">OptionWhales CryptoCurrency Investments </h1>
                    <p style="color: #fff;">Your single point of access to professional cryptoasset investment solution. Built for investors interested in stable returns and high liquidity. We offer an array of cryptocurrency investment products.</p>
                    <div class="anchors-wrapper">
                        <a href="/" class="button__main button--arrow" target="_self">Our Vision<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="/" class="button__secondary button--white-mobile button--arrow" target="_self">Let's Talk<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section data-bg="{{ asset('/img/3.jpg') }}" id="homepage-hero-banner" class="banner b3 rocket-lazyload mySlides" style="background-image: url(/img/thanksy.jpg);">
            <div class="container">
                <div class="banner__content">
                    <h1 style="color: #fff;">More Investment Options. More Opportunities To Grow.</h1>
                    <p style="color: #fff;">With over 5 years of experience we've developed unique strategies to offer you unparalleled trades. Join our Platform today to get started</p>
                    <div class="anchors-wrapper">
                        <a href="/" class="button__main button--arrow" target="_self">Our Vision<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="/" class="button__secondary button--white-mobile button--arrow" target="_self">Let's Talk<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section data-bg="{{ asset('/img/3.jpg') }}" id="homepage-hero-banner" class="banner rocket-lazyload mySlides" style="background-image: url(/img/3.jpg);">
            <div class="container">
                <div class="banner__content">
                    <h1 style="color: #fff;">Re-innovating real-time options trading activities </h1>
                    <p style="color: #fff;">OptionWhale is an algorithm-based options flow Investment platform that exposes smart money whale trades and creates a vastly more simple, efficient and affordable closing experience in the Crypto stock and equity option markets.</p>
                    <div class="anchors-wrapper">
                        <a href="/" class="button__main button--arrow" target="_self">Our Vision<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a href="/" class="button__secondary button--white-mobile button--arrow" target="_self">Let's Talk<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section> --}}
    <!--Banner Section Ends-->
    <!--Focus Section Starts-->
        <section class="tech-help">
            <div class="container">
                <div class="tech__wrapper is_card_list">
                    <div class="techContent">
                        <h2>Technology that leads the way</h2>
                        <p>OptionWhales was founded at the end of 2015. After almost 2 years of development, OptionWhales was officially launched in 2017 and since then has consistently taken measures to ensure its platform makes online trading and investing accessible and profitable to both corporate and individual investors. By focusing on ease of access to beginners and improving upon important more complex trading technologies for more experienced investors, OptionWhales has solidified itself as one of the world’s leading financial trading platforms.</p>
                        <a href="/" class="arrow_link" target="">Learn More</a>
                    </div> <!--/.techContent-->
                    <div class="techCards is_card_list">
                        <div class="card">
                            <a href="/" target="_self" class="link-overlay">
                                <div class="card-inner">
                                    <span class="tech-info">
                                        <p class="h4 heading_bold">World Class Crypto Trading Technologies</p>
                                        <p class="body_description">Returns completed settlement statements in under one minute.</p>
                                    </span>
                                    <span class="button-arrow--next">
                                        <span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </div><!--/.card-inner-->
                            </a>
                        </div><!--/.card-->
                        <div class="card">
                            <a href="/" target="_self" class="link-overlay">
                                <div class="card-inner">
                                    <span class="tech-info">
                                        <p class="h4 heading_bold">Strongly regulated</p>
                                        <p class="body_description">Returns completed settlement statements in under one minute.</p>
                                    </span>
                                    <span class="button-arrow--next">
                                        <span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </div><!--/.card-inner-->
                            </a>
                        </div><!--/.card-->
                        <div class="card">
                            <a href="/" target="_self" class="link-overlay">
                                <div class="card-inner">
                                    <span class="tech-info">
                                        <p class="h4 heading_bold">Lucrative Returns</p>
                                        <p class="body_description">Returns completed settlement statements in under one minute.</p>
                                    </span>
                                    <span class="button-arrow--next">
                                        <span>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </div><!--/.card-inner-->
                            </a>
                        </div><!--/.card-->
                    </div>
                </div>
            </div>
        </section>
    <!--Focus Section Ends-->
    <!--Cards Section Starts-->
        <section class="tech-help cards__section ">
            <div class="container">
                <div class="help__wrapper">
                    <h3>Grow your knowledge</h3>
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
                                              <time class="entry-date published" datetime="2022-04-01T14:33:30+00:00">{{date("M j, Y", strtotime($post->created_at))}}</time>
                                            </span>
                                            <span class="reading-time clock">1 minute read</span>
                                          </div>
                                        </div>
                                      </div><!-- /.doma-post-item -->
                                    </div>
                                  </div><!-- /.doma-posts-list__item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    <!--Cards Section Ends-->


    	<!--50/50 Section Starts-->
        <section class="hero-banner diversity section-with-image">
            <div class="container">
                <div class="banner__wrapper columns-wrapper">
                    <div class="hero-banner__description column--first">
                        <h1 class="label-as-button">Service Model</h1>
                        <h1 class="section-title">A bespoke <br />service and <br />operations model</h1>
                        <p><p>A team in your corner, dedicated to your success. Enabling you to deliver faster and friction-free closings.</p></p>				
                    </div>
                    <div class="column-content__wrapper column--second">
                        <img class='' src="/img/investor.jpg" alt="" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/2021-05-31_144930.jpg">
                        <noscript><img class='' src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/2021-05-31_144930.jpg" alt=""></noscript>
                    </div>
                </div>
            </div>
        </section>
    <!--50/50 Section Ends-->
    <!--Resources Section Starts-->
        <section class="resource columns__image-text section__margin-default no-background resource together bg-pattern__wireframe-right equal-columns">
            <div class="container">
                <div class="resource-wrapper columns-wrapper row_reverse">
                    <div class="resource-content column--first">
                        <h2>Together we <br />will go far</h2>
                        <p>Success is a team sport and to help your business thrive we offer a comprehensive service-focused team dedicated to your needs. Whether that is managing the relationship, monitoring daily trades, or handling an exception we have a specialist for you every step of the way.</p>
                    </div>
                    <div class="resource-image column--second">
                        <img src="/img/reff.jpg" alt="" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Bitmap-2.png">
                        <noscript><img src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Bitmap-2.png" alt=""></noscript>
                    </div>
                </div>
            </div>
        </section>
    <!--Resources Section Ends-->

    <!-- icon-boxes__content Section Starts-->
        <section class="icon-boxes__section">
            <div class="container">
                <div class="icon-boxes__content content__wrapper">
                    <h1 class="label-as-button">Investment Plans</h1>
                    <div class="icon-boxes__row">
                        <div class="icon-box">
                            <div class="icon-box__inner text-center">
                                <img src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Customer-Success-Manager-Icon.svg" class="doma-icon" alt="" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Customer-Success-Manager-Icon.svg">
                                <div class="icon-box__content no-cta">
                                    <span class="icon-box__head">
                                        <h4 class="heading--bold text-center">Rookie Plan <strong style='color: #156CEF;'><em>9%</em></strong></h4>
                                        <p class="text-center"><em>Weekly</em></p>
                                        <hr>
                                        <ul class="text-center">
                                            <li>Minimum deposit  -  $999</li>
                                            <li>Maximum deposit  -  $24,900</li>
                                            <li>Referral-commission  -  3%</li>
                                        </ul>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="text-center">
                                            <a href="{{ route('user.plans') }}"><h1 class="label-as-button">Purchase Plan</h1></a>
                                        </div>
                                        {{-- <p class="body_description">A dedicated business ally, providing white-glove service to manage the relationship and ensure it delivers to your strategic goals.</p> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon-box__inner text-center">
                                <img src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Operations-Account-Manager-Icon.svg" class="doma-icon" alt="Operations-Account-Manager-Icon" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/Operations-Account-Manager-Icon.svg">
                                <div class="icon-box__content no-cta">
                                    <span class="icon-box__head">
                                        <h4 class="heading--bold text-center">Deepstake Plan <strong style='color: #156CEF;'><em>18%</em></strong></h4>
                                        <p class="text-center"><em>Monthly</em></p>
                                        <hr>
                                        <ul class="text-center">
                                            <li>Minimum deposit  -  $25,000</li>
                                            <li>Maximum deposit  -  $99,000</li>
                                            <li>Referral-commission  -  5%</li>
                                        </ul>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="text-center">
                                            <a href="{{ route('user.plans') }}"><h1 class="label-as-button">Purchase Plan</h1></a>
                                        </div>
                                        {{-- <p class="body_description">A dedicated operational specialist that supports your production-related business requirements.</p> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon-box__inner text-center">
                                <img src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/icon-3.svg" class="doma-icon" alt="icon-3" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/05/icon-3.svg">
                                <div class="icon-box__content no-cta">
                                    <span class="icon-box__head">
                                        <h4 class="heading--bold text-center">Premium Plan <strong style='color: #156CEF;'><em>25%</em></strong></h4>
                                        <p class="text-center"><em>Quarterly</em></p>
                                        <hr>
                                        <ul class="text-center">
                                            <li>Minimum deposit  -  $100,000</li>
                                            <li>Maximum deposit  -  $700,000</li>
                                            <li>Referral-commission  -  7%</li>
                                        </ul>
                                        <br>
                                        <hr>
                                        <br>
                                        <div class="text-center">
                                            <a href="{{ route('user.plans') }}"><h1 class="label-as-button">Purchase Plan</h1></a>
                                        </div>
                                        {{-- <p class="body_description">Industry experts organized by customer and product to ensure success at every stage of the loan cycle.</p> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Doma Intelligence Section Ends-->
    
    <!--Resources Section Starts-->
        <section class="resource columns__image-text section__margin-default bg-pattern__gradient-colored--left bg-pattern__transparent--right equal-columns">
            <div class="container">
                <div class="resource-wrapper columns-wrapper row_no_reverse">
                    <div class="resource-content column--first">
                        <h2>Customer stories</h2><h4>Partners in transforming the future!</h4><p>We use the reviews of our investors as the yard stick to measure how well or otherwise we are doing in the dispensation of our services to our investors all over the world.
                            We are always happy to share the positive reviews of our investors and improve on the areas we have been found wanting.</p>
                        <a href="/" class="downloadBtn button__main button--arrow" target="_self">Learn More<i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                    </div>
                    <div class="resource-image column--second">
                        <img src="/img/strategy.jpg" alt="" data-lazy-src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/06/Resource-Spotlight-Image.jpg">
                        <noscript><img src="https://4cbjf638a92wwst9w2nry0fj-wpengine.netdna-ssl.com/wp-content/uploads/2021/06/Resource-Spotlight-Image.jpg" alt=""></noscript>
                    </div>
                </div>
            </div>
        </section>
    <!--Resources Section Ends-->
@stop

@section('js')
<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 5000); // Change image every 2 seconds
    }
    </script>
@endsection