<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.Velmolt.org/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 10:44:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Take a step today by joining us here at Velmolt and get started on our investment platform, already registered? login to your account dashboard">
    <meta name="keywords" content="crytpo, cryptocurrency, forex, bitcoin, investment, ethereum, litecoin, Velmolt, crypto-investment">
    <meta name="author" content="Velmolt company developer">
    <meta name="identifier-url" content="index.html">
    <meta name="contact" content="support@Velmolt.org">
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
                                    <a href="{{route('home')}}"><img src="{{url('/')}}/asset/{{$logo->image_link}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="header__btn widthper">
                                    <a class="btn__normal coloured roll--text" data-text="Login" href="{{route('login')}}">Login</a>
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
                            <div class="formo__heading mb80 mt70">
                                <h5>Sign Up</h5>
                            </div>
                            <form action="{{route('submitregister')}}" class="form" method="POST" >
                                @csrf
                                <div class="section-container">
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="text" name="first_name" autocapitalize="none" class="form-control reg" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="text" name="last_name" autocapitalize="none" class="form-control reg" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="text" name="username"  autocapitalize="none" class="form-control reg" placeholder="Enter username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="email" name="email" autocapitalize="none" class="form-control reg" placeholder="Enter Email address">
                                            </div>
                                        </div>
        
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="password" name="password"  class="form-control reg" placeholder="Enter Password">
                                            </div>
                                        </div>
        
                                        <div class="form-group mb10">
                                            <div class="form-group__container">
                                                <input type="text" name="ref" class="form-control reg" placeholder="Referral Id - Optional" value="{{ request()->ref }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="checkbox" name="terms&cond" class="hide" id="terms" required>
                                                <label for="terms" class="terms__checkbox">
                                                    <span>
                                                        <i class="ti-check"></i>
                                                    </span>
                                                    <span>I Agree to the <a href="{{route('terms')}}" target="_blank">Terms and Conditions.</a></span>
                                                </label>
                                            </div>
                                        </div>
    
                                        <div>
                                            <a href="{{route('login')}}" id="backer">Already Registered ?</a>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit"  class="btn__normal coloured">register</button>
                                        </div>

                                    @if($set->recaptcha==1)
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                {{ $errors->first('g-recaptcha-response') }}
                                            </span>
                                        @endif
                                    @endif
    
                                    <div class="divider text-center pseudo form-group__divider mb30">
                                        <div class="divider__span">
                                            <span>or</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="formo__option mb30">
                                <div>
                                    <i class="ti-unlock"></i>
                                </div>
                                <div>
                                    <a href="{{route('user.password.request')}}" class="btn__normal coloured roll--text text-center" data-text="reset password ?" href="#">.</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sucRegister">
                            <div class="sucRegister_first">
                                <div class="sucRegister__body">
                                    <div class="icon">
                                        <span class="ti-check-box text-success"></span>
                                    </div>
                                    <div class="text text-center">
                                        Welcome to Velmolt!, <strong>Thanks</strong> for Joining us. A verification link has just been sent to
                                        <span></span> with further instructions.
                                    </div>
                                </div>
                                <div class="regFactor" style="">
                                    <button type="button" id="activate_factor" class="btn__normal coloured roll--text" data-text="setup two factor authentication">setup two factor authentication</button>
                                    <div class="text-center" id="skip">
                                        <a href="javascript:void(0)">Skip and do this later.</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sucRegister_second">
                                <div style="width: 100%">
                                    <div class="text-center mb30" >
                                        <img src="#" alt="qr code">
                                    </div>
                                    <div class="keytin mb10"><b style="display: flex;justify-content: space-between;">Authentication Key: <span></span></b></div>
                                    <div class="alert alert-warning open"><i class="ti-info"></i>&nbsp; Write down your <b>authentication key</b> in a safe place, this makes it possible to restore
                                    access into your investment account.
            						</div>
                                    <form id="setinupfac">
                                        <div class="form-group">
                                            <div class="form-group__container">
                                                <input type="text" name="code" style="font-family: 'open sans" class="form-control reg" placeholder="Enter generated code">
                                            </div>
                                        </div>
                                        <div class="form-group mb30">
                                            <div class="form-group__container">
                                                <input type="checkbox" name="written" class="hide" id="2facheck">
                                                <label for="2facheck" class="terms__checkbox">
                                                    <span>
                                                        <i class="ti-check"></i>
                                                    </span>
                                                    <span>I have written down my authentication key</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group__submit mb20">
                                            <div>
                                                <a href="javascript:void(0)" id="pushback">Go Back</a>
                                            </div>
                                            <div class="text-right">
                                                <button type="button" id="activate_fac" class="btn__normal coloured roll--text" data-text="Enable" href="#">Enable</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sucRegister__body suc2fa">
                                <div class="icon">
                                    <span class="ti-lock text-success"></span>
                                </div>
                                <div class="text text-center">
                                    Two factor authentication enabled successfully. You will be prompted to input your 2fa code
                                    the next time you login.
                                </div>
                            </div>
                            <div class="text-center lastskip" id="skip" style="font-weight: ;margin-top: 2rem;">
                                <a href="login.html" style="font-weight: 700;">Navigate to Dashboard</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="footer">
                        <div class="row align-items-center">
                            <div class="col-8">
                                Email: support@Velmolt.com
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
                                <a class="socio-link" href="https://www.instagram.com/Velmolt.investments"><i class="ti-instagram"></i></a>
                                <a class="socio-link" href="https://www.youtube.com/"><i class="ti-youtube"></i></a>
                                <!--<a class="socio-link" href="https://www.youtube.com/"><i class="ti-reddit"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{url('/')}}/asset/clone/java/jquery.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/popper.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/bootstrap.min.js"></script>
    <script src="{{url('/')}}/asset/clone/java/swiper.js"></script>
    <script src="{{url('/')}}/asset/clone/java/login.js"></script>
</body>

<!-- Mirrored from www.Velmolt.org/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 10:44:38 GMT -->
</html>
<script src="{{url('/')}}/asset/clone/java/register.js"></script>

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