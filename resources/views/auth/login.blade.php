
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Take a step today by joining us here at velmolt and get started on our investment platform, already registered? login to your account dashboard">
    <meta name="keywords" content="crytpo, cryptocurrency, forex, bitcoin, investment, ethereum, litecoin, velmolt, crypto-investment">
    <meta name="author" content="velmolt company developer">
    <meta name="identifier-url" content="index.html">
    <meta name="contact" content="support@velmolt.com">
    <meta name="robots" content="index, follow, all">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> Velmolt | Authentication (Take a step today by joining us)</title>
    <link rel="icon" href="{{url('/')}}/asset/{{$logo->image_link2}}">
    <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
    <link href="{{url('/')}}/asset/clone/stylesheet/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/swiper.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/pe-icon-7-stroke.css"> 
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/webfont/cryptocoins.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/simple-line-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/clone/stylesheet/login.css">
    <link rel="stylesheet" href="{{url('/')}}/asset/css/toast.css" type="text/css">
</head>

<body>

    <main>
        <section>
            <div class="row">
                <div class="col-md-4">
                    <header class="header">
                        <div class="row align-items-center">
                            <div class="col-6 text-left">
                                <div class="header__img">
                                    <a href="{{route('home')}}"><img src="{{url('/')}}/asset/{{$logo->image_link2}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="header__btn widthper">
                                    <a class="btn__normal coloured roll--text" data-text="sign up" href="{{route('register')}}">sign up</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    
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
                    
                    <div style="position: relative">
                        <div class="notification">
                            <h5></h5>
                        </div>
                    </div>

                    <div class="formo">
                        <div class="formo__container">
                            <div class="formo__heading mb100 mt50">
                                <h5>Login</h5>
                            </div>
                            <div class="login_container_first">
                                <form role="form" action="{{route('submitlogin')}}" method="POST" class="form" id="form-log" autocomplete="off" spellcheck="false" autocorrect="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-group__container">
                                            <div><i class="ti-user"></i></div>
                                            <div>
                                                <input type="email" oninput="this.value=this.value.toLowerCase()" name="email" autocapitalize="none" class="form-control" id="usernameId" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        @if ($errors->has('email'))
                                          <span class="error form-error-msg ">
                                            <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb30">
                                        <div class="form-group__container">
                                            <div><i class="ti-key"></i></div>
                                            <div>
                                                <input type="password" id="pass" name="password" class="form-control passwordId" placeholder="Account Password">
                                                <i class="ti-eye" id="show_password"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                          <span class="error form-error-msg ">
                                            <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                        @endif
                                    </div>
    
                                    <div class="form-group__submit mb25">
                                        <div>
                                            <a href="{{route('user.password.request')}}">Forgot Password ?</a>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn__normal coloured roll--text" data-text="Login">Login</button>
                                        </div>
                                    </div>

                                    @if($set->recaptcha==1)
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                {{ $errors->first('g-recaptcha-response') }}
                                            </span>
                                        @endif
                                    @endif
    
                                    <div class="divider text-center pseudo form-group__divider mb50">
                                        <div class="divider__span">
                                            <span>or</span>
                                        </div>
                                    </div>
                                </form>
                                <div class="formo__option mb50">
                                    <div>
                                        <i class="ti-user"></i>
                                    </div>
                                    <div>
                                        <a class="btn__normal coloured roll--text text-center" data-text="Create new account" href="{{route('register')}}">Create new account </a>
                                        <!-- hello there -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="login_container_second">
                                <form action="#" class="form login2fa" id="2fa-log" style="width: 100%" autocomplete="off" spellcheck="false" autocorrect="off">
                                    <div class="form-group">
                                        <div class="form-group__container">
                                            <label style='font-size: 1.5rem; font-weight: 600'>Enter google generated 2FA code</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb30">
                                        <div class="form-group__container">
                                            <div><i class="ti-lock"></i></div>
                                            <div>
                                                <input type="text" id="code" name="code" class="form-control passwordId" placeholder="Enter 2FA code">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group__submit mb25">
                                        <div>
                                            <a href="login.html">Lost device ?</a>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn__normal coloured roll--text" data-text="Authorize">Authorize</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="footer">
                        <div class="row align-items-center">
                            <div class="col-8">
                                Email: support@velmolt.com
                            </div>
                            <div class="col-4 text-right">
                                <i class="cc BTC"></i>
                                <i class="cc ETH"></i>
                                <i class="cc BCH-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-8 swiper__holder">
                    <div class="">
                        <div class="swiper-container">
                            <div class="swiper-wrapper swiper">
                                <div class="swiper-slide bg-img">
                                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.1)"></div>
                                </div>
                                <div class="swiper-slide bg-img">
                                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.3)"></div>
                                </div>
                                <div class="swiper-slide bg-img">
                                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.2)"></div>
                                </div>
                            </div>
                            <div class="swiper__text">
                                <div class="swiper__video mb40">
                                    <a href="#" class="text-center">
                                        <span class="ti-rocket"></span>
                                    </a>
                                </div>
                                <h4>Embrace Cryptocurrency</h4>
                                <a class="socio-link" href="https://www.instagram.com/velmolt.investments"><i class="ti-instagram"></i></a>
                                <a class="socio-link" href="https://www.youtube.com/"><i class="ti-youtube"></i></a>
                                <!--<a class="socio-link" href="https://www.youtube.com/"><i class="ti-reddit"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {!!$set->livechat!!}


    <script src="{{url('/')}}/asset/clone/java/jquery.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/popper.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/bootstrap.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/swiper.js"></script>
    <script src="{{url('/')}}/asset/clone/java/login.js"></script>
    <script src="{{url('/')}}/asset/js/toast.js"></script>

</body>
</html>
@if (session('success'))
    <script>
      "use strict";
      toastr.success("{{ session('success') }}");
    </script>    
@endif

@if (session('alert'))
    <script>
      "use strict";
      toastr.warning("{{ session('alert') }}");
    </script>
@endif

@if($set->recaptcha==1)
  {!! NoCaptcha::renderJs() !!}
@endif