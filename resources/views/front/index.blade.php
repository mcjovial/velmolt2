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
        <section>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                    "symbols": [
                    {
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    },
                    {
                        "description": "Tesla",
                        "proName": "NASDAQ:TSLA"
                    }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "light",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </section>

        <!--cover section slider end -->

        <!--event info -->

        <div id="tored"></div>

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

        {{-- <section style="padding-top: 20px !important; padding-bottom: 15px !important;">
            <div class="container" id="iframe-parent">
                    <div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
        
            </div>
        
        </section> --}}


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

        {{-- <section style="height: 80vh_; min-height: 400px; object-fit: cover;" class="section-video text-light d-flex-center" data-bg-video="{{url('/')}}/asset/nova/site-images/vid.mp4">
            <div class="html5vid video-loaded" id="video-rpptn"><video playsinline="" style="object-fit: cover;" autoplay loop muted="true" poster="{{url('/')}}/asset/nova/site-images/konsulting_bull_reverse.jpg" preload="auto"><source src="{{url('/')}}/asset/nova/site-images/bg-chc.mp4" type="video/mp4"></video></div>
            <div class="bg-overlay yuwjw7jjjk" style="opacity: .5 !important; background-color: #112b77 !important;"></div>
            <div class="container container-fullscreen">
            <div class="text-middle text-center text-light">
                <h1 class="text-uppercase text-lg headng_stef d-font-exempt" style=" font-size: 26px !important; margin-bottom: 0; color: #fff !important">VELMOLT INVESTMENTS</h1>
                <p class="lead">
                    <span style="font-size: 20px; font-weight: bold; color: #fdfcfb; text-transform: uppercase !important;">The Revolution In Cryptocurrency Investments Management <br>
                    </span>
                    <span class="d-sm-none_c" style="color: #fdfcfb">
                        We offer an array of
                        cryptocurrency investment products. Our primary focus has been on
                        emerging and rapid growth markets with an emphasis on Bitcoin and
                        other top performing crypto currencies.
        
                        <!-- We are proud to work to the
                        highest ethical standards of Bitcoin mining and trading strategies.
                        We are pleased to offer some of the most dynamic and high-performing
                        trading strategies available.  -->
        
                        We are known to work to the
                        highest ethical standards of Bitcoin mining and trading strategies.
                        We are pleased to offer some of the most dynamic and high-performing
                        cryptocurrency trading and investments services available.
                    </span>
        
                </p>
            <a href="{{route('register')}}" class="btn">Get Started</a>
            </div>
            </div>
        </section>
        
        <section data-animate="fadeIn" style="padding-top: 25px !important; padding-bottom: 25px !important;">
            <div class="container">
            <h2 class="tup" style="font-size: 25px !important; font-weight: bold !important;">Our Partners:</h2>
            <div class="row client-logos carousel-description-clients carousel-description-style ">
            <div class="col-lg-4">
            <div class="description">
            <h2 class="tup" style="font-size: 18px !important;">$500M+ raised from world's leading investors</h2> <span style="font-size: 15px !important;">
                Velmolt is one of the world’s largest and most secure cryptocurrency investments company with thousands of individuals and hundreds of comapnies around the world as investment account holders.
            </span>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="carousel dots-grey tyu6ytyujh" data-items="4" data-arrows="false">
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/coinone-1.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/plasmapay-1.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/bbva-2019.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/montex-network-cryptocurrency-connecting.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/zcash.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/the-blockchain-group-tbg.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/waves-6.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/keep-solutions.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/huobi-1.svg"></a>
            </div>
            <div>
            <a href="#"><img alt="" src="{{url('/')}}/asset/nova/site-images/logos/ledger-new-logo-.svg"></a>
            </div>
            </div>
             </div>
            </div>
            </div>
        </section>
        
        
        <section style="padding-top: 20px !important; padding-bottom: 15px !important;">
            <div class="container" id="iframe-parent">
                    <div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=10&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="649px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
        
            </div>
        
        </section>
        
        <br>
        
        
        <!-- section content begin -->
        <!-- <div class="uk-section uk-section-default in-wave-15 in-offset-bottom-40 uk-background-contain uk-background-center-right uk-background-image@m" style="background-image: url(img/in-wave-background-3.png);">
            <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-1-3@m">
                <h2 class="tup hhhsuusjsj9wjkwmkkwuuuwu" style="font-size: 25px">Join over <span class="uk-text-primary">3 million</span> cryptocurrency investors over the world</h2>
                <p>Sign up for your free investments account now.</p>
                <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Sign up</a>
        
            </div>
            <div class="uk-width-expand@m uk-flex uk-flex-center in-margin-medium-top@s">
                <img src="img/in-wave-mockup-4.png" alt="wave-mockup" width="292" height="286">
            </div>
            <div class="uk-width-auto@m uk-visible@m">
                <a class="uk-flex uk-flex-middle uk-light in-wave-15-button" href="#">
                    <h3>Learn more</h3>
                    <i class="fas fa-chevron-right fa-lg uk-margin-left"></i>
                </a>
            </div>
            </div>
            </div>
        </div> -->
        
        
        <style>
            .yuwnk7826stef img{
                height: 420px !important;
                object-fit: cover !important;
            }
        </style>
        
        <section class="pftb background-grey">
            <div class="container">
            <div class="row">
            <div class="col-lg-6 m-b-30" data-animate="fadeInLeft">
            <div class="carousel yuwnk7826stef" data-items="1">
            <a href="{{url('/')}}/asset/nova/site-images/WhatWeDoPeople2x.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/WhatWeDoPeople2x.jpg" alt=""></a>
            <a href="{{url('/')}}/asset/nova/site-images/BMO_CS_TradingFloor.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/BMO_CS_TradingFloor.jpg" alt=""></a>
        
            <a href="{{url('/')}}/asset/nova/site-images/team1.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/team1.jpg" alt=""></a>
            <a href="{{url('/')}}/asset/nova/site-images/team2.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/team2.jpg" alt=""></a>
            <a href="{{url('/')}}/asset/nova/site-images/team3.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/team3.jpg" alt=""></a>
        
            <a href="{{url('/')}}/asset/nova/site-images/stock-trading.jpg" data-lightbox="gallery-image" title="Your image title here!"><img src="{{url('/')}}/asset/nova/site-images/stock-trading.jpg" alt=""></a>
            </div>
            </div>
            <div class="col-lg-6 p-l-40 p-r-40" data-animate="fadeInRight">
            <div class="m-b-40 f15">
            <h2 class="tup">VELMOLT INVESTMENTS</h2>
            <p>We offer our investors access to high-growth investment opportunities in the Bitcoin markets through the utility of state-of-the-art technical facilities and the implementation of industry standard cryptocurrency trading strategies.</p>
            <p> We’re proud to be an asset management company whose culture is driven by strong values and a long-term vision. At Velmolt Investments, our vision, mission and core values serve as the catalyst in our relations with our clients, employees, shareholders and in the communities in which we live and work. They are our guiding compass in our business each day.</p>
            </div>
            <a class="btn" href="{{route('about')}}"><span>Learn more</span></a>
            </div>
            </div>
            </div>
        </section>
        
        
        
        
        <style>
            .uue73uw_uq818 a:not(.btn):not(.badge):hover{
                color: #fff !important;
            }
        
            .uue73uw_uq818 a{
                text-transform: uppercase !important;
            }
        
            .uue73uw_uq818 .fa-lg{
                font-size: 2.1em !important;
            }
        </style>
        
        <section>
            <div data-animate="fadeIn" class="uk-section uk-section-muted uk-padding-large uk-background-cover uk-background-center-center" style="background-image: url({{url('/')}}/asset/nova/img/in-wave-background-3.jpg);">
                <div class="uk-container in-wave-7">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m">
                            <h4 class="uk-text-primary uk-margin-remove-bottom">Invest with confidence</h4>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">New level of capital <span class="in-highlight">security</span></h1>
                            <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-grid" data-uk-grid="">
                
                                <div class="uk-first-column ujwsu8k_stef37hjh">
                                    <img class="uk-margin-remove-bottom" style="width: 200px" src="{{url('/')}}/asset/nova/img/undraw_safe_bnk7.svg" alt="wave-icon" width="64">
                                    <h3 class="uk-margin-small-top tup" style="font-size: 23px">Velmolt is secured</h3>
                                    <p>Guaranted protection. When we say that you are secured we really mean it. We have built one of the world most sophisticated security system that have never been compromised. Members records are kept confidential from third parties.</p>
                                </div>
                
                                <div>
                                    <img class="uk-margin-remove-bottom" style="width: 200px" src="{{url('/')}}/asset/nova/img/undraw_business_deal_cpi9.svg" alt="wave-icon" width="64">
                                    <h3 class="uk-margin-small-top tup" style="font-size: 20px">Fully regulated &amp; invested funds are protected by insurance </h3>
                                    <p>Our company is fully regulated by the FCA and CySec and your funds are, additionally, covered by our insurance policy so you don't have to worry about losing your invested capital.
                                    </p>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        
        
        <style>
            .crypto-logos img{
                height: 70px;
            }
        </style>
        
        <section>
            <div data-animate="fadeIn" class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-card uk-card-secondary">
                                <div class="uk-card-body">
                                    <style>
                                        .uejje7893hh38 .uk-width-expand p{
                                            font-size: 14px !important;
                                        }
            
                                        .uejje7893hh38 .in-icon-wrapper.small.theme-color{
                                            font-size: 16px;
                                        }
                                    </style>
                                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m uejje7893hh38" data-uk-grid="">
                                        <div class="uk-first-column">
                                            <div class="uk-grid uk-grid-small">
                                                <div class="uk-width-auto">
                                                    <div class="in-icon-wrapper small theme-color"> 1 </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-margin-remove-bottom">Register</h3>
                                                    <p class="uk-margin-small-top uk-margin-remove-bottom">To get started, you need to create a new Velmolt Account. <br> Fill in the required infomrmation on the "create account" page to create your free Velmolt investment account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-grid uk-grid-small">
                                                <div class="uk-width-auto">
                                                    <div class="in-icon-wrapper small theme-color"> 2 </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-margin-remove-bottom">Fund</h3>
                                                    <p class="uk-margin-small-top uk-margin-remove-bottom">Before you can purchase an investment plan and commence investing you will need to fund your account. <br> You can fund your investment account using either Bitcoin, Ethereum or Bitcoin Cash.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="uk-grid uk-grid-small">
                                                <div class="uk-width-auto">
                                                    <div class="in-icon-wrapper small theme-color"> 3 </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-margin-remove-bottom">Earn</h3>
                                                    <p class="uk-margin-small-top uk-margin-remove-bottom">After you have made an investment, you can sit back and watch your balance grow daily while our traders manage your risks for you. <br> You can withdraw your earnings (ROI) when they mature.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="uk-width-1-1 ryr93k3k monee-payment-list uk-margin-medium-top uk-grid-margin uk-first-column">
                                            <hr>
                                            <div class="uk-grid-divider crypto-logos uk-child-width-1-6@m uk-child-width-1-2@s uk-grid"
                                                data-uk-grid="">
                                                <div class="uk-first-column"> <img class="uk-align-center btc-crypto-logo"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/bitcoin-logo.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-mastercard.svg" alt="monee-mastercard"
                                                        width="103" height="32" data-uk-img=""> </div>
                                                <div> <img class="uk-align-center" style="width: 100% !important; height: 100px !important"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/ethereum.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-visa.svg" alt="monee-visa" width="103"
                                                        height="32" data-uk-img=""> </div>
                                                <div> <img class="uk-align-center"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/ripple.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-paypal.svg" alt="monee-paypal" width="103"
                                                        height="32" data-uk-img=""> </div>
                                                <div> <img class="uk-align-center"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/aricoin.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-skrill.svg" alt="monee-skrill" width="103"
                                                        height="32" data-uk-img=""> </div>
                                                <div class="uk-visible@m"> <img class="uk-align-center"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/libra-2.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-neteller.svg" alt="monee-neteller" width="103"
                                                        height="32" data-uk-img=""> </div>
                                                <div class="uk-visible@m"> <img class="uk-align-center"
                                                        src="{{url('/')}}/asset/nova/site-images/crypto-logos/husd-3.svg"
                                                        data-src="{{url('/')}}/asset/nova/img/monee-payment-unionpay.svg" alt="monee-unionpay" width="103"
                                                        height="32" data-uk-img=""> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <style>
            .testimonial-item p{
                font-size: 14px !important;
            }
        </style>
        <section data-animate="fadeIn" style="padding-top: 35px; padding-bottom: 40px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                    <h2 class="tup" style="font-size: 23px;">What our investors are saying about us</h2>
                    <p class="lead" style="font-size: 15px">We use the reviews of our investors as the yard stick to measure how well or otherwise we are doing in the dispensation of our services to our investors all over the world. <br> We are always happy to share the positive reviews of our investors and improve on the areas we have been found wanting.</p>
                    </div>
                    <div class="col-lg-7">
                    <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1" data-animate-in="fadeIn" data-animate-out="fadeOut" data-arrows="false">
                    
                    <div class="testimonial-item">
                    <img src="{{url('/')}}/asset/nova/img/reviewer2.jpg" alt="">
                    <p>I've had incredible customer service since I started investing here, I'm a repeat investor. I've been investng with Velmolt Investments for nearly 3 years now and i've loved every bit of the experience so far.</p>
                    <span>Ron DiCicco</span>
                    <span>Florida, United States</span>
                    </div>
                    
                    
                    <div class="testimonial-item">
                    <img src="{{url('/')}}/asset/nova/img/reviewer3.jpg" alt="">
                    <p>Transparent, profitable, and reliable bitcoin investment company that will make you real money. Thanks to all of you at Velmolt Investments for the excellent service.  </p>
                    <span>Diane Podmanik</span>
                    <span>Budapest, Hungary</span>
                    </div>
                    
                    
                    <div class="testimonial-item">
                    <img src="{{url('/')}}/asset/nova/img/reviewer5.jpg" alt="">
                    <p>I have always been searching for an opportunity to earn on bitcoin and finally I found Velmolt investments and they have proven to be very reliable since I've been investing with them.</p>
                    <span>Joe Tantillo</span>
                    <span>Prague, Czech Republic</span>
                    </div>
                    
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>
         --}}

        {{-- <section style="position: relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <video-js id="my-about" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">
                            <source src="/videosw/trade.webm" type="video/webm">
                            <source src="/videosw/trade.webm" type="video/webm">       
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that supports HTML5 video.
                            </p>
                        </video-js>
                    </div>
                </div>
            </div>
        </section> --}}
        

        <!--event countdown -->

        <section class="mt50">
            <div class="plan">
                <div class="plan__heading text-center">
                    {{-- <h3 class="h3-heading text-center">Price list</h3> --}}
                    <h1 class="mb15">plans we offer</h1>
                    <div class="divider">
                        <div class="divider__span">
                            <i class="ti-more-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="container-custom">
                    <div class="row mt60">
                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 mb100">
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
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
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
                                    <p>support@velmolt.com</p>
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

    {{-- <section class="pt100 join-bg pb100">
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
    </section> --}}
@stop