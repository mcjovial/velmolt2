<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="velmolt is an Investment firm that generates passive incomes for her potential 
    Investors, we offer Crypto, Blockchain and forex related investment services.">
    <meta name="keywords" lang="en" content="stock exchanges, cryptocurrency, forex, bitcoin, investment, ethereum, markets, velmolt, crypto-investment">
    <meta property="og:url"                content="index.html" />
    <meta property="og:type"               content="Organization" />
    <meta property="og:title"              content="velmolt Investment Firm" />
    <meta property="og:description"        content="velmolt is an Investment firm that generates passive incomes for her potential Investors, we offer Crypto, Blockchain and forex related investment services." />
    <meta property="og:image"              content="../i.ibb.co/09t77QX/tradeon.jpg" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <meta name="generator" content="velmolt company developer">
    <meta name="revisit-after" content="1 days">
    <meta name="distribution" content="global">
    <meta name="copyright" content="index.html">
    <meta name="contact" content="support@velmolt.com">
    <meta name="robots" content="index, follow, all">
    <meta name="identifier-url" content="index.html">
    <meta name="apple-mobile-web-app-capable" content="velmolt">
    
     
    
    <title> velmolt investment firm </title>
    
    <!-- Critical preload -->
    <link rel="preload" href="{{url('/')}}/asset/clone/java/uikit.min.js" as="script">
    <link rel="preload" href="{{url('/')}}/asset/clone/stylesheet/uikit.min.css" as="style">    
    {{-- <link rel="preload" href="{{url('/')}}/asset/clone/stylesheet/style.css" as="style">     --}}
    
    <link rel="icon" href="{{url('/')}}/asset/{{$logo->image_link2}}">
    <link href="{{url('/')}}/asset/clone/stylesheet/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/aos.css">
    <link href="{{url('/')}}/asset/clone/stylesheet/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/swiper.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}r/asset/clone/webfont/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/webfont/cryptocoins-colors.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/simple-line-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/micell.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
    @yield('css')
</head>
<script type="application/ld+json">    
{
  "@context": "https://schema.org",
  "@type": "organization",
  "name": "velmolt",
  "url": "http://www.velmolt.com",
  "sameAs": [
    "http://instagram.com/velmolt.investments"
  ]
}
</script>

<!--<span itemscope itemtype="https://schema.org/Organization">-->
<!--  <link itemprop="url" href="http://www.velmolt.com">-->
<!--  <a itemprop="sameAs" href="http://www.instagram.com/velmolt.investments">FB</a>-->
<!--</span>-->
<body>
    
<!--<div id="google_translate_element"></div>-->
    
{{-- <div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div> --}}

<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!-- Navigation -->

<style>
    .noti{
        opacity: 1 !important;
    }
    
    .alert.noti{
        z-index: 2000;
    }
    
    .alert-close{
        margin-right: 50px;
    }
    
    .alert-success a{
        color: #3c763d;
        text-decoration: underline;
        font-size: inherit;
    }
    
    .alert-danger a{
        color: #a94442;
        text-decoration: underline;
        font-size: inherit;
    }
    .alert-danger a:active, .alert-success a:active{
        transform: translateY(3px);
    }
</style>

<div class="shatti">
    <div class="micell"> 
    <div class="blacklivesmatter">
        <!--<a style="text-decoration: underline" href="/black-friday-contracts">-->
        <!--    <span>Black Friday Investment Contracts, Take up to 20% off our Investment Services</span>-->
        <!--</a>-->
        <div class="dropdown mini-drop-lang">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Language
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" onclick="trans('#googtrans(en|en)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/gb.svg"
                  class="img-fluid mr-2 mb-0" width="20">English</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|es)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/es.svg"
                  class="img-fluid mr-2 mb-0" width="20">Spanish</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|pt)')"><img src="{{url('/')}}/asset/clone/-icon-css/flags/pt.svg"
                  class="img-fluid mr-2 mb-0" width="20">Portuguese</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|el)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/gr.svg"
                  class="img-fluid mr-2 mb-0" width="20">Greek</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|fr)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/fr.svg"
                  class="img-fluid mr-2 mb-0" width="20">French</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|zh-CN)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/cn.svg"
                  class="img-fluid mr-2 mb-0" width="20">Chinese</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|ar)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/sa.svg"
                  class="img-fluid mr-2 mb-0" width="20">Arabic</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|sv)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/se.svg"
                  class="img-fluid mr-2 mb-0" width="20">Swedish</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|nl)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/nl.svg"
                  class="img-fluid mr-2 mb-0" width="20">Dutch</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|de)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/de.svg"
                  class="img-fluid mr-2 mb-0" width="20">German</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|ru)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/ru.svg"
                  class="img-fluid mr-2 mb-0" width="20">Russian</a>
              {{-- <!--<a class="dropdown-item" onclick="trans('#googtrans(en|uk)')"><img src="/flag-icon-css/flags/ua.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Ukraine</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|tl)')"><img src="/flag-icon-css/flags/ph.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Filipino</a>--> --}}
              <a class="dropdown-item" onclick="trans('#googtrans(en|it)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/it.svg"
                  class="img-fluid mr-2 mb-0" width="20">Italian</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|ko)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/kp.svg"
                  class="img-fluid mr-2 mb-0" width="20">Korean</a>
            </div>
        </div>
    </div>
    {{-- <!-- <div class="covid19">-->
    <!--     <div style="margin-right: 2rem"><span>Offer Ends In:  &nbsp;</span></div>-->
    <!--     <div class="flex-w cd100 p-t-15 p-b-15" id="cd100">-->
                <!--	<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">-->
                <!--		<span class="l1-txt1 wsize1 days" id="days"></span>&nbsp;-->
                <!--		<span class="m1-txt1 p-b-2">Days</span>-->
                <!--	</div>-->

                <!--	<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">-->
                <!--		<span class="l1-txt1 wsize1 hours" id="hours"></span>&nbsp;-->
                <!--		<span class="m1-txt1 p-b-2">Hr</span>-->
                <!--	</div>-->

                <!--	<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">-->
                <!--		<span class="l1-txt1 wsize1 minutes" id="minutes"></span>&nbsp;-->
                <!--		<span class="m1-txt1 p-b-2">Min</span>-->
                <!--	</div>-->

                <!--	<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">-->
                <!--		<span class="l1-txt1 wsize1 seconds" id="seconds"></span>&nbsp;-->
                <!--		<span class="m1-txt1 p-b-2">Sec</span>-->
                <!--	</div>-->
                <!--</div>-->
    <!-- </div>--> --}}
    </div>
</div>


<div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

    <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
    </label>

    <div class="navigation__bg">&nbsp;</div>
    <nav class="navigation__nav">
        <ul class="navigation__list">
            <li class="navigation__item">
                <a href="{{route('home')}}" class="navigation__link"  id="active"  >Home</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('about')}}" class="navigation__link" >About Us</a>
            </li>
            <li class="navigation__item">
                <a href="{{route('contact')}}" class="navigation__link" >Support</a>
            </li>
            <!--<li class="navigation__item">-->
            <!--    <a href="/trading" class="navigation__link" >Fx-Trading</a>-->
            <!--</li>-->
            <li class="navigation__item">
                <a href="{{route('faq')}}" class="navigation__link" >F.A.Q</a>
            </li>
            <!--<li class="navigation__item">-->
            <!--    <a href="/ai-bot" class="navigation__link" >Ai-bot</a>-->
            <!--</li>-->
            
                <li class="navigation__item">
                    <a href="{{route('login')}}" class="navigation__link">Log in</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('register')}}" class="navigation__link">Register</a>
                </li>
            
            {{-- <li class="navigation__item">
                <a href="referral-program.html" class="navigation__link" >Affiliate</a>
            </li> --}}
        </ul>
    </nav>

</div>

<div class="logo-resp">
    <div class="logo__img">
        <img src="{{url('/')}}/asset/{{$logo->image_link}}" class="last" alt="Trade">
    </div>
</div>

<header class="header navbar fixed-top navbar-expand-lg">
    <div class="container">
        <div class="dropdown-show langue">
            <button class=" btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Language
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" onclick="trans('#googtrans(en|en)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/gb.svg"
                  class="img-fluid mr-2 mb-0" width="20">English</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|es)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/es.svg"
                  class="img-fluid mr-2 mb-0" width="20">Spanish</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|pt)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/pt.svg"
                  class="img-fluid mr-2 mb-0" width="20">Portuguese</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|el)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/gr.svg"
                  class="img-fluid mr-2 mb-0" width="20">Greek</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|fr)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/fr.svg"
                  class="img-fluid mr-2 mb-0" width="20">French</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|zh-CN)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/cn.svg"
                  class="img-fluid mr-2 mb-0" width="20">Chinese</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|ar)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/sa.svg"
                  class="img-fluid mr-2 mb-0" width="20">Arabic</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|sv)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/se.svg"
                  class="img-fluid mr-2 mb-0" width="20">Swedish</a>
              <a class="dropdown-item" onclick="trans('#googtrans(en|nl)')"><img src="{{url('/')}}/asset/clone/flag-icon-css/flags/nl.svg"
                  class="img-fluid mr-2 mb-0" width="20">Dutch</a>
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|de)')"><img src="/flag-icon-css/flags/de.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">German</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|ru)')"><img src="/flag-icon-css/flags/ru.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Russian</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|uk)')"><img src="/flag-icon-css/flags/ua.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Ukraine</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|tl)')"><img src="/flag-icon-css/flags/ph.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Filipino</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|it)')"><img src="/flag-icon-css/flags/it.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Italian</a>-->
              <!--<a class="dropdown-item" onclick="trans('#googtrans(en|ko)')"><img src="/flag-icon-css/flags/kp.svg"-->
              <!--    class="img-fluid mr-2 mb-0" width="20">Korean</a>-->
            </div>
        </div>
        <a class="navbar-brand logo" href="{{route('home')}}">
            <!--<img src="/img/shortlog-light.png" class="hide first" alt="Velmolt"> -->
            <img src="{{url('/')}}/asset/{{$logo->image_link}}" class="last" width="125" alt="Velmolt"/>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}"   id="active" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('about')}}"  >About us</a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link " href="/trading"  >Fx-trading</a>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link " href="/ai-bot"  >Ai-bot</a>-->
                <!--</li>-->
                
                <li class="nav-item">
                    <a class="nav-link " href="{{route('faq')}}"  >F.A.Q</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link " href="referral-program.html"  >Affiliate</a>
                </li> --}}
                
                
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('register')}}">Register</a>
                    </li>
                
                
                <li class="nav-item">
                    <a class="nav-link " href="{{route('contact')}}"  >Support</a>
                </li>
            </ul>
        </div>
    </div>
</header>



@yield('content')


<section>
    <div class="scrollup" id="elevator">
        <i class="ti-angle-up"></i>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer__logo widthper text-left-md">
                    <img src="{{url('/')}}/asset/{{$logo->image_link}}" alt="velmolt's Logo">
                    <p>We are a professional and trusted wealth management company with specializations in Wealth Creation and Digital Assets.</p>
                    <p style="line-height: 1.5;margin-bottom: .8rem;"><i class="ti-world"></i>&nbsp; 1166 6th Ave, New York, NY 10036, United States.</p>
                    <p style="line-height: 1.5;margin-bottom: .8rem;"><i class="ti-mobile"></i>&nbsp; +1 (917)-985-7247</p>
                    <p style="line-height: 1.5;margin-bottom: .8rem;"><i class="ti-email"></i>&nbsp; support@velmolt.com</p>
                    <a href="https://www.instagram.com/velmolt.investments"><i class="ti-instagram"></i>
                        <span style="color: inherit;font-size: 14px;color: #ccc;font-weight: 600;">&nbsp;Instagram</span>
                    </a>
                    <!--<a href="mailto:support@velmolt.com">| support@velmolt.com</a>-->
                    <!--<a href="https://www.instagram.com/velmolt.investments"><i class="ti-facebook"></i></a>-->
                    <!--<a href="https://www.instagram.com/velmolt.investments"><i class="ti-youtube"></i></a>-->
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="foot_link">
                    <h3>Explore</h3>
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('about')}}">About</a>
                    <!--<a href="/ai-bot">Ai-bot</a>-->
                    <a href="{{route('contact')}}">Contact</a>
                    <a href="transaction-explor-cert-jin.html">Explore transactions</a>
                    <a href="{{route('terms')}}">Terms and conditions</a>
                    <!--<a href="/trading">Fx-trading</a>-->
                </div>
            </div>

            <div class="col-md-3">
                <div class="foot_link">
                    <h3>Learn</h3>
                    <a href="index.html#prices" class="pricescroll">Prices</a>
                    <a href="https://blockgeeks.com/guides/what-is-bitcoin/">Bitcoin</a>
                    <a href="https://blockgeeks.com/guides/what-is-blockchain-technology/">Blockchain</a>
                    <a href="https://blockgeeks.com/what-is-bitcoin-mining-an-easy-guide/">Bitcoin Mining</a>
                    <a href="https://blockgeeks.com/guides/best-cryptocurrency-exchanges/">Buy Cryptocurrencies</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="foot_link">
                    <h3>Services</h3>
                    <a href="{{route('register')}}">Register</a>
                    <a href="{{route('login')}}">Login</a>
                    <a href="{{route('faq')}}">Faq</a>
                    {{-- <a href="bug-bounty.html">Bug bounty</a> --}}
                    <!--<a href="/black-friday-contracts">Black Friday</a>-->
                    {{-- <a href="referral-program.html">Affiliate Program</a> --}}
                    
                </div>
            </div>

            <div class="col-12">
                <hr class="my-0">
            </div>
            <div class="col-md-4 text-left-md text-center">
                <small>© 2021 velmolt. All rights reserved. </small>
            </div>
            <div class="col-md-8 text-center text-right-md">
                <div>
                    <span class="cc BTC-alt BTC"></span>
                    <span class="cc BCH-alt BCH-alt"></span>
                    <span class="cc ETH-alt ETH"></span>
                    <span class="cc XRP-alt XRP"></span>
                </div>
            </div>
        </div>
    </div>
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
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='../embed.tawk.to/5d7a2bf9c22bdd393bb57e60/default.js';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script src="{{url('/')}}/asset/clone/java/jquery.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
<script src="{{url('/')}}/asset/clone/java/popper.js"></script>
<script src="{{url('/')}}/asset/clone/java/bootstrap.min.js"></script>
<script src="{{url('/')}}/asset/clone/java/waypoints.min.js"></script>
<script src="{{url('/')}}/asset/clone/java/jquery.inview.js"></script>
<script src="{{url('/')}}/asset/clone/java/jquery.counterup.min.js"></script>
<script src="{{url('/')}}/asset/clone/java/jquery.magnific-popup.min.js"></script>
<script src="{{url('/')}}/asset/clone/java/aos.js"></script>
<script src="{{url('/')}}/asset/clone/java/swiper.js"></script>


<!--// 		var countDownDate = new Date("Nov 12, 2020 15:37:25").getTime();-->
<!--// 		var x = setInterval(function () {-->
<!--// 			var now = new Date().getTime();-->
<!--// 			var distance = countDownDate - now;-->
<!--// 			var days = Math.floor(distance / (1000 * 60 * 60 * 24));-->
<!--// 			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));-->
<!--// 			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));-->
<!--// 			var seconds = Math.floor((distance % (1000 * 60)) / 1000);-->

<!--// 			document.getElementById("days").innerHTML = ('0' + days).slice(-2);-->
<!--// 			document.getElementById("hours").innerHTML = ('0' + hours).slice(-2);-->
<!--// 			document.getElementById("minutes").innerHTML = ('0' + minutes).slice(-2);-->
<!--// 			document.getElementById("seconds").innerHTML = ('0' + seconds).slice(-2);-->

<!--// 			if (distance < 0) {-->
<!--// 				clearInterval(x);-->
<!--// 				document.getElementById("cd100").innerHTML = "Offer active";-->
<!--// 			}-->
<!--// 		}, 1000);-->


<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
<script>
    function trans(lang){
      window.location = lang;
      location.reload();
    }
</script>
<!-- Custom js -->
</body>

<!-- Mirrored from www.velmolt.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 10:44:18 GMT -->
</html>
<!--<script src="/java/vid.js"></script>-->
<script src="{{url('/')}}/asset/clone/java/home.js"></script>