@extends('layout')
@section('css')

@stop
@section('content')

<link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/stylesheet/faq.css">
<!--<link rel="stylesheet" type="text/css" href="/stylesheet/magnific-popup.css">-->

<main>
    <section>
        <div class="about">
            <div class="about__bg bg-img">
                <div class="overlay_dark about__bg--gradient"></div>
                <div class="about__text container hundper">
                    <div class="widthper mt40">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h4 class="mb25 text-center"> <span id="laito"> most frequently</span> <span id="about-feature">asked questions</span></h4>
                                <p class="text-center">All your Questions answered in one place. Get to know about Velmolt's
                                most frequntly asked questions from our investors.</p>

                                <div id="abt-btn-first" >
                                    <div data-aos-duration="2000" data-aos-once="false" data-aos="fade-right" data-aos-delay="1000">
                                        <div id="viewfaqs" class="btn__normal transparent mt15">
                                            View Faq &nbsp;&nbsp;&nbsp;
                                            <i class="ti-book"></i>
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
    
    <section class="bg-two pt120 pb100" >
        <div class="intro__wel text-center container ">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos-duration="1400" data-aos-once="true">
                    <h4>Knowledge-base</h4>
                    <p>find out the commonly most asked questions forwarded to Velmolt from our investors.
                    You can easily get in touch with us in case you have other questions by sending an email to <strong>support@velmolt.com </strong></p>
                    <div>
                        <div class="divider pseudo">
                            <span class="divider__span" style="background-color: inherit">
                                <i class="ti-more-alt"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tored">
        <div class="faqs">
            <div class="container">
                <div class="faqs_heading">
                    <h4>Frequently Asked Questions</h4>
                </div>

                <div class="faqs_main">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faqs_main_tab">
                                <h6>Account with Velmolt  <small>( <i class="ti-user"></i> )</small></h6>
                                <div class="faqs_box">
                                    <div class="borderd">
                                        <div id="show" class="hitoti">
                                            How do I get started as an investor with Velmolt?
                                    
                                        </div>
                                        <div class="hidden" id="vitoti">
                                            <p>You can get started as an investor with Velmolt here: <a href="register.html">https://www.velmolt.com/register</a></p>

                                            <p>
                                                The entire account creation and investment process is completed online via the Velmolt website. You will be
                                                prompted to provide or verify any required information, as well as make the necessary acknowledgments electronically. Don't make an investment to any individual or broker as we don't partner with any.
                                            </p>

                                            <div class="faqs_box_button">

                                                <a class="btn__normal coloured animated--text" href="register.html">Invest </a>
                                                <a class="btn__normal gray animated--text" href="login.html">Get in touch </a>
                                                
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <div class="borderd">
                                        <div id="show" class="fatoti">
                                            <i class="fa fa-file"></i> What type of package can I invest through?
                                    
                                        </div>
                                        <div class="hidden" id="litoti">
                                            <p>We currently support four different investment packages which includes:
                                            Starter, Deluxe, Enterprise and the Premium package. Each investment package
                                            has it's own investment plans and durations. We offer both short term and long term investment for
                                            each of the package, 3 months to 12 months. Please note that investment returns per week varies
                                            with duration of investment.</p>

                                        </div>
                                    </div>

                                    <div class="borderd">
                                        <div id="show" class="fatoti2">
                                            <i class="fa fa-phone"></i> Can I invest if I live in another state or country?
                                        </div>
                                        <div class="hidden" id="litoti2">
                                            <p>As we may have all known, cryptocurrency is the world's common currency
                                            and as such our investment services is not limited to any state or
                                            country in question. All you need is a valid crypto wallet address of any of the
                                            cryptocurrencies of which we support, we look forward to adding more cryptocurrencies in the future.</p>
                                    
                                        </div>
                                    </div>

                                    <div class="noborderd">
                                        <div id="show" class="mergin">
                                            <i class="fa fa-phone"></i> Must I invest before I can have a Velmolt account?
                                        </div>
                                        <div class="hidden" id="mergind">
                                            <p>No, There is no obligation to make an investment upon registeration
                                            to Velmolt's investment platform, it's totally free to create an
                                            account. Though you will be required to make a minimum investment
                                            of $1000 or it's equivalent in cryptocurrency only when you need to start
                                            an investment with us.</p>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="faqs_main_tab">
                                <h6>Investment <small>( <i class="ti-import"></i> )</small></h6>
                                <div class="faqs_box">
                                    <div class="borderd">
                                        <div id="show" class="hito">
                                            When should you expect your first ROI distribution?
                            
                                        </div>
                                        <div class="hidden" id="vito">
                                            <p>
                                                If you're to start an investment with us by 1st January, then you should
                                                expect your first return of investment by 8th of January. Give us 7 days to go into the market and do
                                                what we're good at, and you should
                                                be able to receive your weekly cashflow by January 8. The reason why
                                                we distribute ROI every week is because we all want a cash every week.
                                                You deserve a weekly cashflow, though we've got an option if you'd like to accumulate
                                                your returns.
                                            </p>
                            
                                            <div class="faqs_box_button">
                            
                                                <a class="btn__normal coloured animated--text" href="register.html">Invest </a>
                                                <a class="btn__normal gray animated--text" href="login.html">Get in touch </a>
                            
                                            </div>
                            
                                        </div>
                                    </div>
                                    <div class="borderd">
                                        <div id="show" class="fato">
                                            <i class="fa fa-file"></i> 
                                            Why is the ROI small when compared to other platforms?
                            
                                        </div>
                                        <div class="hidden" id="lito">
                                            <p>The deal is what makes a difference, Velmolt only promise and guarantee you a return of investment of which we're sure we can pay you in a week. Why are they promising you so much, if it's such a good deal? If it's a good deal then it's a good deal, what you want is a good deal not a big promise.</p>
                            
                                        </div>
                                    </div>
                            
                                    <div class="borderd">
                                        <div id="show" class="fato2">
                                            <i class="fa fa-phone"></i> Can I add Funds after my initial Investment?
                                        </div>
                                        <div class="hidden" id="lito2">
                                            <p>Yes, you can add extra funds to your active investment after you must've made your
                                            initial investment. We require a minimum additional deposit of $500 for
                                            investors who wish to add more funds to their investment. The additional
                                            funds earn the same initial weekly return of investment.</p>
                            
                                        </div>
                                    </div>
                            
                                    <div class="noborderd">
                                        <div id="show" class="longi">
                                            <i class="fa fa-phone"></i> How long is the term of the Fund?
                                        </div>
                                        <div class="hidden" id="termi">
                                            <p>We offer both long term and short term investment, each investment has
                                            a duration of funding assigned to it. They're all 3 months by default.
                                            </p>
                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6">
                            <div class="faqs_main_tab">
                                <h6>Risks, Security and Insurance <small>( <i class="ti-lock"></i> )</small></h6>
                                <div class="faqs_box">
                                    <div class="borderd">
                                        <div id="show" class="hitoti2">
                                            What are the risks involved?
                        
                                        </div>
                                        <div class="hidden" id="vitoti2">
                                            <p>
                                                Just like any other investment, there is always a risk, but we've got
                                                all the resources required to make a good trade in the cryptocurrency
                                                market with an addition to mining of cryptocurrency.
                                            </p>

                                            <p>
                                                Can we promise you that we do that? no we can't, but we can promise you
                                                this: our tremendous team of expert traders together with our already programmed forecast
                                                engine fight for everything in the Cryptocurrency market and we don't
                                                sleep until a good trade is made even in a bearish market, and of course
                                                your capital is protected and insured. Freak not, cause we've got all our
                                                energy invested in it, we don't win if you don't make a guaranteed profit.
                                            </p>
                        
                                        </div>
                                    </div>
                                    <div class="borderd">
                                        <div id="show" class="fatoy">
                                            <i class="fa fa-file"></i>
                                            How secured is Velmolt's investment platform?
                        
                                        </div>
                                        <div class="hidden" id="litoti3">
                                            <p>The act of data encryption from prying eyes is something we don't joke with here in
                                            Velmolt, we take security and data Encryption to it's core. We ensure
                                            that all http requests that are forwarded towards our domain's server are all chanelled
                                            to a secured protocol (https).</p>

                                            <p>As an extra layer of security to your investment account, we've added
                                            2FA feature to our platform and we advise that all users enable this
                                            option in their investment account as this prevents unauthorized access and
                                            transactions to the core without your direct permission.</p>

                                            <p>Velmolt developers have worked earnestly to support both device based 
                                            Two Factor Authentication and external USB device based encryption to your investment account.</p>

                                            <p>We currently support Google Authenticator app(<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=en_us" target="_blank">Google Authenticator</a>) and Fido USB based Two Factor
                                            Authentication device(<a href="https://www.amazon.com/fido-usb/s?k=fido+usb" target="_blank">Fido USB</a>).</p>
                        
                                        </div>
                                    </div>
                        
                                    <div class="borderd">
                                        <div id="show" class="fatoti3">
                                            <i class="fa fa-phone"></i> What happens to my funds if I pass away?
                                        </div>
                                        <div class="hidden" id="litoti4">
                                            <p>Velmolt has added an option for setting up a successors account after we got
                                            this question from some of our investors. You can setup this option in
                                            your investment account by navigating to the security page. Note that you
                                            must have 2FA enabled before you can make use of this feature. This option is
                                            successfully set up after you must've included the successor's email address and
                                            an upload of the successor's passport ID.</p>
                        
                                        </div>
                                    </div>
                        
                                    <div class="noborderd">
                                        <div id="show" class="protecti">
                                            <i class="fa fa-phone"></i> Is my capital protected and Insured?
                                        </div>
                                        <div class="hidden" id="paito">
                                            <p>Velmolt's investors capital(Principal) are all protected and that's
                                            why many invest with us. All our potential investors, who must've
                                            completed their investment duration with us can easily withdraw their Principal if
                                            they wish to pull out from the investment. Note that you can as well recycle your
                                            investment with us by clicking on the Reinvest button in your account dashboard,
                                            which is only made available to you at the end of your investment.</p>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="faqs_main_tab">
                                <h6>General <small>( <i class="ti-layers"></i> )</small></h6>
                                <div class="faqs_box">
                                    <div class="borderd">
                                        <div id="show" class="liso">
                                            What is the minimum amount for withdrawal?
                        
                                        </div>
                                        <div class="hidden" id="mensa">
                                            <p>
                                                The minimum amount for withdrawal from your generated return of investment is $10 USD.
                                            </p>
                        
                                        </div>
                                    </div>
                        
                                    <div class="borderd">
                                        <div id="show" class="sapientia">
                                            <i class="fa fa-phone"></i> What are Velmolt's Underlying Assets?
                                        </div>
                                        <div class="hidden" id="magister">
                                            <p>Underlying assets are all assets being traded on the market, such as stocks, Crytpocurrencies indices, commodities and
                                            forex currency pairs. The constantly changing market value of those assets is the basis for binary options trading.
                                            Velmolt offers a variety of underlying assets for trading.</p>
                        
                                        </div>
                                    </div>
                        
                                    <div class="borderd">
                                        <div id="show" class="finali">
                                            <i class="fa fa-phone"></i> How do Velmolt make profit aside our ROI?
                                        </div>
                                        <div class="hidden" id="finali">
                                            <p>We make our profits from the extra percentage points we earn from your investments.
                                            </p>
                        
                                        </div>
                                    </div>
                                    <div class="noborderd">
                                        <div id="show" class="finali2">
                                            <i class="fa fa-phone"></i> I have other questions?
                                        </div>
                                        <div class="hidden" id="finali2">
                                            <p>Contact our support team at <a href="mailto: support@velmolt.com">support@velmolt.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs_footer">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="mini-help">
                                    <div class="row align-content-center">
                                        <div class="col-md-9">
                                            <div class="help-stat">
                                                <i class="ti-comments text-left-md text-center"></i>
                                                <div class="help text-left-md text-center">
                                                    <strong>
                                                        Still have questions about our Investment service?
                                                    </strong>
                                                    <strong>We will gladly assist you if you contact Velmolt.</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-right-md text-center">
                                                <a class="btn__normal roll--text gray mt15" data-text=" support" href="contact.html">support</a>
                                            </div>
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

</main>

@stop