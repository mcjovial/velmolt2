@extends('layout')
@section('css')

@stop
@section('content')

    <title> velmolt investment firm </title>

    <!--<link rel="stylesheet" type="text/css" href="/stylesheet/vid.css">-->
    <!--<link rel="stylesheet" type="text/css" href="/stylesheet/theme.css">-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/stylesheet/home.css">

    <main>
        <section>
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper swiper">
                    <!-- Slides -->
                    <div class="swiper-slide swiper__bg" id="first-slide">
                        <div class="bg-darken"></div>
                        <div class="swiper__cont hundper">
                            <div class="swiper__body">
                                <div class="swiper__body--text text-center" id="swiper__body-1">
                                    <div>
                                        <h2 class="wel-h3 text-center coloured" id="wel-h3-sec">Welcome to Velmolt</h2>
                                    </div>
                                    <p>Start to grow your earnings. Invest in stocks, Crypto and derivatives or set up a personal savings plan.</p>
                                    <div id="wel-btn-first">
                                        <div class="btn__normal transparent mt15 take-tour">take a tour &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-angle-double-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper__bg" id="second-slide">
                        <div class="bg-darken enhance"></div>
                        <div class="swiper__cont hundper">
                            <div class="swiper__body" id="swiper__body-2">
                                <div class="swiper__body--text text-right">
                                    <div>
                                        <h1 class="wel-h3 text-right coloured" id="wel-h3-sec">More investment options. <br> More opportunities to grow.</h1>
                                    </div>
                                    {{-- <h1 id="wel-h1-sec">More investment options. <br> More opportunities to grow.</h1> --}}
                                    <p id="wel-para-sec">With over 5 years of experience we've developed unique strategies to offer you unparalleled trades. </p>
                                    <p>Join our Platform today to get started</p>
                                    <div id="wel-btn-sec">
                                        <a class="btn__normal roll--text coloured mt15" data-text="Open free account" href="{{route('register')}}">Open free account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-header-left">
                    <span class="ti-angle-left"></span>
                </div>
                <div class="swiper-header-right">
                    <span class="ti-angle-right"></span>
                </div>
            </div>
        </section>

        <!--cover section slider end -->

        <!--event info -->

        <div id="tored"></div>
        <section class="mb80 mt80">
            <div class="container-custom" id="sec-intro">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="short" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-speedometer short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Experienced</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                    With over 5 years of trading experience, our expert traders along with our enhanced AI trading bot are guaranteed to provide you with some of the best trading practices available on the crypto market. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="short" data-aos="zoom-in" data-aos-duration="1800" data-aos-once="true">
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-equalizer short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Multi-crypto</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                        Here at Velmolt, we give our clients the opportunity to diversify their portfolio and invest in multiple cryptocurrencies. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="short" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true"> 
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-anchor short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Reduce risks</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                        Our Experts and AI enhanced statistical models help us scale the risks in Forex and Cryptocurrency markets, ensuring relatively low risk even during periods of volatility. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<section style="position: relative">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-7">-->
        <!--                <video-js id="my-about" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
        <!--                    <source src="/videosw/trade.webm" type="video/webm">-->
        <!--                    <source src="/videosw/trade.webm" type="video/webm">-->
                        
        <!--                    <p class="vjs-no-js">-->
        <!--                        To view this video please enable JavaScript, and consider upgrading to a-->
        <!--                        web browser that supports HTML5 video.-->
        <!--                    </p>-->
        <!--                </video-js>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        

        <!--event countdown -->
        <section class="pb70">
            <div class="explain">
                <div class="row justify-content-center">
                    <div class="col-md-6 p0">
                        <div class="explain__text">
                            <div>
                                <h4 class="mb40">Our <span style="color: #e5ae47">Mission</span></h4>
                                <p class="text-left mb50 explit">
                                Helping our Clients earn Passive Income is our Major Goal. Here at velmolt,
                                    we want to provide the most transparent and stable investment platform available. 
                                    Make no mistake, investing your money into Cryptocurrencies is always a risk, but when your trades are backed by the experience of our team and our AI enhanced trading models, you stand to gain much more than you risk losing. We are a professional and trusted wealth
                                    management company with specializations in Wealth Creation and Digital Assets. We offer different rates of return for Forex and Cryptocurrency trading, determined by our traders and AI blockchain systems.

                                </p>
                                <a class="btn__normal coloured" href="{{route('login')}}">Get started &nbsp;&nbsp;<i class="ti-stats-up"></i></a>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 p0">
                        <div class="text-center">
                            <video src="//videos.ctfassets.net/vkizfq3pbtzc/OahpaQJX1xuWlFmiLRQMY/3bb543ca66ddf47c734e377a0336fa65/28Apr21_CoinExplode.mp4" autoplay="autoplay" playsinline="" muted="muted" preload="none" height="600" width="" class=""></video>
                            <!-- <img src="assets/img/hellit.jpg" data-aos="fade-left"> --> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt50">
            <div class="plan">
                <div class="plan__heading text-center">
                    <h3 class="h3-heading text-center">Price list</h3>
                    <h1 class="mb15">plans we offer</h1>
                    <div class="divider">
                        <div class="divider__span">
                            <i class="ti-more-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="container-custom">
                    <div class="row mt60">
                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-right">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Lite
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_first">9.8</per>
                                        </div>
                                        <div class="pricing__period mb15">/5 Days</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-wallet"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$100</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>4%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-1" onclick="planActivator('#duration-1')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per1">1 month <i class="fa fa-angle-double-down"></i></span> -->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                </div>

                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal gray animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-right">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Compact
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_first">12.5</per>
                                        </div>
                                        <div class="pricing__period mb15">/per Week ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-wallet"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$1,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$9,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>4.6%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-1" onclick="planActivator('#duration-1')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per1">1 month <i class="fa fa-angle-double-down"></i></span> -->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                </div>

                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-right">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Elite
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_first">15</per>
                                        </div>
                                        <div class="pricing__period mb15">/per Week ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-wallet"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$10,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$19,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>5%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-1" onclick="planActivator('#duration-1')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per1">1 month <i class="fa fa-angle-double-down"></i></span> -->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                </div>

                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-up">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Platinum
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_sec">17.6</per>
                                        </div>
                                        <div class="pricing__period mb15">/per Week ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-pulse"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$20,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$49,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>5.5%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-2" onclick="planActivator('#duration-2')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per2">1 month <i class="fa fa-angle-double-down"></i></span>-->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                </div>
                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-up" data-aos-duration="1500">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Emerald
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_third">20</per>
                                        </div>
                                        <div class="pricing__period mb15">/per Month ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-stats-up"></i>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$50,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$99,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>5.8%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-3" onclick="planActivator('#duration-3')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per3">1 month <i class="fa fa-angle-double-down"></i></span>-->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    
                                </div>
                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal gray animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb100">
                            <div class="price" data-aos="fade-up" data-aos-duration="1500">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                Premium
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_third">37.5</per>
                                        </div>
                                        <div class="pricing__period mb15">/per Quarter ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-stats-up"></i>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$100,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$700,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>8%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-3" onclick="planActivator('#duration-3')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per3">1 month <i class="fa fa-angle-double-down"></i></span>-->
                                    <!--</div>-->
                                    <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    
                                </div>
                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal gray animated--text" 
                                        
                                        
                                            href="login.html"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt20 hide-over">
            <div class="stats">
                <div class="stats__bg bg-img">
                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.4)"></div>
                    <div class="stats__container container-custom">
                        <div class="row widthper">
                            <div class="col-md-3" data-aos="fade-in" data-aos-duration="1400">
                                <div class="text-center">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">463086</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-alarm"></i>
                                        </div>
                                        <h5>Trades won</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" data-aos="fade-in" data-aos-duration="1400">
                                <div class="text-center">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">49879</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-drop"></i>
                                        </div>
                                        <h5>Happy Clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center" data-aos="fade-in" data-aos-duration="1400">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">234562</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-cloud-upload"></i>
                                        </div>
                                        <h5>Total Payout</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center" data-aos="fade-in" data-aos-duration="1400">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">9546</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-add-user"></i>
                                        </div>
                                        <h5>Referrals</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab pt200 pb150">
            <div class="tablist">
                <div class="tablist__container">
                    <ul>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" checked name="tab" id="tab-radio1">
                            <label for="tab-radio1" class="tab__label" data-tablist="tab-1">
                                <div class="first">
                                    <span>
                                        <i class="ti-lock"></i>
                                    </span>
                                    <span>secured</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio2">
                            <label for="tab-radio2" class="tab__label" data-tablist="tab-2">
                                <div>
                                    <span>
                                        <i class="ti-shield"></i>
                                    </span>
                                    <span>integrity</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio3">
                            <label for="tab-radio3" class="tab__label"  data-tablist="tab-3">
                                <div>
                                    <span>
                                        <i class="ti-pulse"></i>
                                    </span>
                                    <span>Development</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio4">
                            <label for="tab-radio4" class="tab__label"  data-tablist="tab-4">
                                <div class="last">
                                    <span>
                                        <i class="ti-check-box"></i>
                                    </span>
                                    <span>profit</span>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <div class="tablist__content text-center container">
                        <div class="tab-1 active tabo">
                            <p>
                                Real website security means end to end encryption, as well as user privacy within the system. We monitor every transaction 24/7 to help protect against fraud, email
                                phishing and identity theft. Every transaction is secured on our very own encrypted blockchain protocol, to which only we have access. Our security team works non-stop to protect against any suspicious activity. Remember that we will <strong>never</strong> ask for any sensitive information about you over email. 

                            </p>
                        </div>
                        <div class="tab-2 hide tabo">
                            <p>
                                We operate in an industry built on trust. Integrity is the central value of velmolt.
                                We strive to be the best in our field and are constantly improving ourselves to meet the highest industry
                                Standards in our industry, without exceptions. We stay grounded by focusing on what works and
                                recognizing what could be improved. We appreciate and capitalize on what keeps
                                our <strong>clients</strong>, our <strong>employees</strong>, and our <strong>mission</strong> successful.

                            </p>
                        </div>
                        <div class="tab-3 hide tabo">
                            <p>
                                After our clients are compensated according to their registered interest rate, we use any leftover funds to further develop our technology, new products
                                and services, and partnerships with notable figures within the cryptocurrency space. We believe that we are leading our industry when it comes to ease of use, innovation and access to the most
                                up to date trading strategies available. This is because we have worked hard over the years to expand our partner network to
                                provide the best services available to our clients and work to identify the new 
                                increasingly diverse products which will provide the maximum benefit to our clients. We are currently seeking to improve investment profit turnaround times through our technology and partnerships,
                                providing the best, most reliable cryptocurrency and Forex investment service available.

                            </p>
                        </div>
                        <div class="tab-4 hide tabo">
                            <p>
                                velmolt has an efficient forecast engine which was originally based on statistical analysis, and scientific research of the cryptocurrency market data and trade patterns. Its has since been upgraded into a vast neural network sourced directly by crawlers monitoring over 185,000 media channels and over 43,000 indicators. According to research, the cryptocurrency market has been directly influenced by trading behaviour. Our forecast engine is able to make objective forecasts at remarkable accuracy and analyse them in a fraction of time it would take manually. The analysis is then sent to our AI trading bot, which executes them as automatic exchange.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="mt100 mb20" id="prices">
            <div class="container">
                <div class="crypto-price">
                    <div class="crypto-price__heading mb50">
                        crypto <span style="color: #e5ae47">price</span>
                    </div>
                    <div class="row m0">
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Bitcoin</span>
                                    <h2 class="mt5 mb10"><span id="btc-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc BTC-alt BTC"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Ether</span>
                                    <h2 class="mt5 mb10"><span id="eth-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc ETH-alt ETH"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Bitcash</span>
                                    <h2 class="mt5 mb10"><span id="bch-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc BCH-alt BCH-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Litecoin</span>
                                    <h2 class="mt5 mb10"><span id="ltc-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc LTC-alt LTC"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="testimonial-bg">
            <div class="testimonial pt100 pb100" id="reviews">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="testimonial__heading text-center">
                                <h3 class="mb10">Clients <span class="primary">Reviews</span></h3>
                                <p class="mb10" style="font-weight: 500">Don't just take our word for it! &nbsp; See what our clients say</p>

                                <div class="divider" id="test-mon">
                                    <div class="divider__span" style="background: transparent">
                                        <i class="ti-more-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__carousel">
                        <div class="swiper-container pt35 swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon3.mp4" type="video/mp4">-->
                                            <!--    <source src="/videosw/testmon3.mp4" type="video/mp4">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon3.mp4" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video> 
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Amelia Anderson.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon2" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon2.webm" type="video/webm">-->
                                            <!--    <source src="/videosw/testmon2.webm" type="video/webm">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon2.webm" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video>
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Harald Dammen.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon3" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon1.webm" type="video/webm">-->
                                            <!--    <source src="/videosw/testmon1.webm" type="video/webm">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon1.webm" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video>
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Zhang Li Yáng.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--<div class="swiper-slide">-->
                                <!--    <div class="testimonial__client text-center pb30">-->
                                <!--        <div>-->
                                <!--            <img src="/img/testi/5.jpg" alt="client 1">-->
                                <!--            <div class="client__rating">99</div>-->
                                <!--        </div>-->
                                <!--    </div>-->
        
                                <!--    <div class="testimonial__text text-center">-->
                                <!--        <div class="mb10">-->
                                <!--            <p>-->
                                                
                                <!--                The Successful expansion of our business was made possible by velmolt. We-->
                                <!--                were able to achieve this through compounding our profits over a period of Six-->
                                <!--                Months. It was the best decision we made in 2017, and perhaps even in the history of our company. They offered great assistance-->
                                <!--                and support throughout the process. JOIN Them today and they might just-->
                                <!--                change your story!-->


                                                    
                                <!--            </p>-->
                                <!--        </div>-->
                                <!--        <div class="client-name">Michelle Shirley.. <i class="ti-crown"></i></div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>

                            <div class="swiper-control-left">
                                <div class="ti-angle-left"></div>
                            </div>
                            <div class="swiper-control-right">
                                <div class="ti-angle-right"></div>
                            </div>
                            
                        </div>       
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="pb100" style="background-color: #fafbfb">
            <div class="embrace">
                <div class="embrace__bg bg-img">
                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.4)"></div>
                    <div class="container main">
                        <div class="row m0">
                            <div class="col-md-6 pb40 pt40">
                                <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <h4 class="mb40">Embrace Cryptocurrency</h4>
                                    <p class="text-justify-s">
                                        <i class="ti-wallet"></i>&nbsp;&nbsp; A constant uptick in the price of cryptocurrency remains the biggest pull factor
                                        for most investors. People are encouraged to follow this trend in anticipation of a
                                        possible price hike in the future. Bitcoin has seen a drastic increase in its worth,
                                        and it’s market cap is exponentially larger than what it was at its inception. Other
                                        cryptocurrencies like Ethereum have also evolved in a similar manner since their creation and show absolutely no signs of slowing down. We leverage these emerging assets on a weekly, monthly, and yearly basis to provide our clients and our company with lucrative rewards. 

                                    </p>
                                </div>    
                            </div>
                            <div class="col-md-6 pb40">
                                <div class="text-right hundper">
                                    <div class="embrace__video hundper" data-aos="fade-left">
                                        <a href="http://www.youtube.com/watch?v=aVUqXuIcpZ4" class="" id="embrace">
                                            <i class="pe-7s-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <section class="basic">
            <div class="container">
                <div class="basic-info">
                    <div class="row m0">
                        <div class="col-md-4">
                            <div class="basic-info__box first" data-aos="fade-in">
                                <div>
                                    <span class="pe-7s-mail"></span>
                                </div>
                                <div>
                                    <span>E-Mail</span>
                                    <p>support@velmolt.org</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="basic-info__box" data-aos="fade-in" data-aos-delay="300">
                                <div>
                                    <span class="pe-7s-phone"></span>
                                </div>
                                <div>
                                    <span>Contact Us</span>
                                    <p>+1 917-985-7247</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 last">
                            <div class="basic-info__box" data-aos="fade-in" data-aos-delay="500">
                                <div>
                                    <span class="pe-7s-stopwatch"></span>
                                </div>
                                <div>
                                    <span>Work Hours</span>
                                    <p>Mon. - Fri. 8AM - 5PM</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            jaito laito..
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="pt100 join-bg pb100">
        <div class="join" id="parallax">
            <div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <p data-aos="fade-in" class="m0" data-aos-duration="1500">
                            <img src="img/planet.png" alt="">
                        </p>
                        <br>
                        <h4 class="mb30">Join over <span class="counter" data-counterup-time="2000">49879</span> clients that trust us.</h4>
                        
                        <div class="text-center">
                            <a class="btn__normal coloured" style="line-height: 3" data-aos-duration="2000" data-aos="fade-in" data-aos-delay="1000"
                            
                            
                                href="register.html"
                            
                            
                            >Join today &nbsp;&nbsp;&nbsp;<i class="ti-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop