

<!DOCTYPE html>
<html>
  <head>
    <title>Optionwhales - Login</title>
    <link rel="icon" href="" sizes="32x32">
    <link rel="icon" href="" sizes="192x192">
    <link rel="apple-touch-icon" href="">
    <meta name="msapplication-TileImage" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://info.statestitle.com/rs/876-PJR-864/images/Domagenstyle.css">
    <link rel="stylesheet" type="text/css" href="https://info.statestitle.com/rs/876-PJR-864/images/Domaformstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Domagenstyle.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Domaformstyle.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, nofollow">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    </style>
    <style type="text/css">
    header {
        display: block;

        background-color: #ffffff;
        box-shadow: 0px 0px 21px #e5e5e5;
    }

    .banner {
        display: none;
        padding: 0 !important;
        position: relative;
        z-index: 1;
    }

    .mktoImg {
        width: 100% !important;
    }

    .banner img {
        width: 100% !important;
        border-radius: 0 !important;
    }

    .sec1 {
        display: block;

        background-color: #ffffff;
    }

/*    .sec1 .sec1ImgWrap {
        display: ${showSec1LeftImage};
    }*/

    .sec1 .content2 {
        display: block;
    }

    .sec1 .formContainer {
        display: block;
        background-color: #F8F9F9;
    }

   /* .sec1 .sec1RightImg {
        display: none;
    }*/

    .sec1 .sec1RightImg.none {
        margin-top: 0 !important;
    }

    footer {
        display: block;
        background-color: #f9f9f9;

        background-color: #f9f9f9;
    }
    </style>
<link rel="icon" href="" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" >
<link rel="icon" href="/favicon.ico" type="image/x-icon" >


<style>.mktoGen.mktoImg {display:inline-block; line-height:0;}</style>
<style>
    .mktoform input[type=password] {
        width: 100%;
        height: auto;
        font-size: 20px;
        line-height: 30px;
        font-weight: 400;
        padding: 13px 20px;
        color: #2C2C2C;
        font-family: Inter, sans-serif;
        border: 1px solid #979797;
        border-radius: 15px;
        box-shadow: none;
        outline: none;
        opacity: 1;
        background-color: #ffffff;
    }
</style>
</head>

<body id="bodyId">
    
    <header>
        <div class="container">
            <div class="mktoImg mktoGen" id="mkto_gen_headerLogo">
                <a href="/" target="_blank">
                    <img src="/img/log.png" alt="" id="headerLogo" width="300">
                </a>
            </div>
        </div>
    </header>
    <section class="sec1">
        <div class="container">
            <div class="secWrap">
                <div class="secLeft">
                    <div class="mktoText" id="sec1heading">
                        <h5>Embrace The Innovation</h5>
                    </div>
                    <div class="content">
                        <div class="mktoText" id="sec1text1">
                            <p>Lucrative CryptoCurrency Investment opportunity at your fingertips.</p>
                        </div>
                    </div>
                    <div class="sec1ImgWrap" style="display: block">
                        <div class="mktoImg mktoGen" id="mkto_gen_sec1Img">
                            <img src="/img/investor.jpg" class="lpimg" id="sec1Img">
                        </div>
                    </div>
                    <div class="cta">
                        <div class="mktoText" id="sec1leftcta"></div>
                    </div>
                </div>
                <div class="secRight clearfix">
                    <div class="secRightWrap">
                        <div class="formContainer" style="margin-bottom: 40px">
                            <div class="formHeader">
                                <div class="mktoText" id="sec1FormHeader"><h2>LOGIN HERE</h2></div>
                            </div>
                            <div class="mktoForm" id="sec1rightForm">
                                <div id='lpeCDiv_30154' class='lpeCElement SEA_LP_6_Shortcuts_to_a_7_Day_Close-1214FORM_SEA-6_Shortcuts_to_a_7_Day_Close-1521'>
                                    <span class='lpContentsItem formSpan'>
                                        <form id="mktoForm_1450" novalidate="novalidate" class="mktoForm mktoHasWidth mktoLayoutLeft" style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(51, 51, 51);" action="{{route('submitlogin')}}" method="post">
                                            @csrf
                                            <style type="text/css"></style>

                                            <div class="mktoFormRow">
                                                <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 10px;">
                                                    <div class="mktoOffset" style="width: 10px;"></div>
                                                    <div class="mktoFieldWrap mktoRequiredField">
                                                        <label for="Email" id="LblEmail" class="mktoLabel mktoHasWidth" style="">
                                                            <div class="mktoAsterix">*</div>
                                                            Email Address:
                                                        </label>
                                                        <div class="mktoGutter mktoHasWidth" style=""></div>
                                                        <input id="Email" name="email" maxlength="255" aria-labelledby="LblEmail InstructEmail" type="email" class="mktoField mktoEmailField mktoHasWidth mktoRequired mktoInvalid" aria-required="true" style="" aria-invalid="true">
                                                        <span id="InstructEmail" tabindex="-1" class="mktoInstruction"></span>
                                                        <div class="mktoClear"></div>
                                                    </div>
                                                    <div class="mktoClear"></div>
                                                </div>
                                                <div class="mktoClear"></div>
                                            </div>
                                            <div class="mktoFormRow">
                                                <div class="mktoFieldDescriptor mktoFormCol" style="margin-bottom: 10px;">
                                                    <div class="mktoOffset" style="width: 10px;"></div>
                                                    <div class="mktoFieldWrap mktoRequiredField">
                                                        <label for="Phone" id="LblPhone" class="mktoLabel mktoHasWidth" style="">
                                                            <div class="mktoAsterix">*</div>
                                                            Password:
                                                        </label>
                                                        <div class="mktoGutter mktoHasWidth" style=""></div>
                                                        <input id="password" name="password" maxlength="255" aria-labelledby="LblPhone InstructPhone" type="tel" class="mktoField mktoTelField mktoHasWidth mktoRequired mktoInvalid" aria-required="true" style="" aria-invalid="true">
                                                        <span id="InstructPhone" tabindex="-1" class="mktoInstruction"></span>
                                                        <div class="mktoClear"></div>
                                                    </div>
                                                    <div class="mktoClear"></div>
                                                </div>
                                                <div class="mktoClear"></div>
                                            </div>
                        
                                            <div class="mktoButtonRow">
                                                <span class="mktoButtonWrap mktoNative" style="margin-left: 120px;">
                                                    <button type="submit" class="mktoButton">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footerLogo">
                        <div class="mktoImg mktoGen" id="mkto_gen_footerLogo">
                            <a href="/" target="_blank">
                                {{-- <img src="" alt="" id="footerLogo"> --}}
                                <h3>Whales</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-links row">
                        <div class="footer-links-copy col-md-8">
                           <div class="mktoText" id="footerCopyright">
                        	<ul>
	                           <li>
	                              <p>© 2022 Option-whales, Inc. All rights reserved.</p>
	                           </li>
	                           
	                        </ul>
                        </div>
                        </div>
                        <div class="footer-links-social col-md-4 text-right">
                             <div class="mktoText" id="footertext4">
                                <ul>
                                    <li>
                                        <p>Follow Us:</p>
                                    </li>
                                    <li>
                                        <a href="/" target="_blank">
                                            <img src="https://info.statestitle.com/rs/876-PJR-864/images/ATE_REG_linkedin.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="https://info.statestitle.com/rs/876-PJR-864/images/ATE_REG_twitter.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/" target="_blank">
                                            <img src="https://info.statestitle.com/rs/876-PJR-864/images/ATE_REG_instagram.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <img src="https://info.statestitle.com/rs/876-PJR-864/images/ATE_REG_facebook.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-below-content">
                        <div class="mktoText" id="footertext3">
                     	<p>Optionwhales is an investment company, whose team is working on making money from the volatility of cryptocurrencies and offer great returns to our clients.
                            We are committed to making sure you are educated on investments and help achieve your investment goals, with full mining network and affiliate system at your disposal. Our brokers are passionate about cryptocurrency and seek to use their strong understanding of the market to deliver the best possible results for clients.</p>
                     </div>
                    </div>
                </div>
            </div>
        
    </footer>
<script type="text/javascript" src="//munchkin.marketo.net//munchkin.js"></script><script>Munchkin.init('876-PJR-864', {customName: 'SEA-LP-6Shortcutstoa7DayClose', wsInfo: 'iFRR'});</script>
<script type="text/javascript" src="/js/stripmkttok.js"></script></body>

</html>
