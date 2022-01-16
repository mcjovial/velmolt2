/* global Swiper $ jQuery*/

'use strict'

let logSwiper = new Swiper('.swiper-container', {
    effect: 'fade',
    speed: 3000,
    autoplay: { 
        delay: 5000,
    },
    simulateTouch: false,
});

$(function(){
    $('#show_password').on('click', function() {
        if($(this).hasClass('ti-eye')){
            $(this).removeClass('ti-eye').addClass('ti-na');
            $('#pass').attr('type', 'text');
        } else {
            $(this).removeClass('ti-bell').addClass('ti-eye');
            $('#pass').attr('type', 'password');
        }
    })
});

$('#embrace').magnificPopup({
    type: 'iframe',
    iframe: {
        patterns: {
            youtube: {
                index: 'youtube.com/', 
                id: function(url) {        
                    var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                    if ( !m || !m[1] ) return null;
                    return m[1];
                },
                src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0&enablejsapi=1'
            }
            
        }
    }
});

$(document).on('click', '.addedback', function(){
    $('.section-container__first').removeClass('first-opac');
    $('.section-container__second').removeClass('reveal');
    $('button').attr({'data-text': 'next'});
    $('#backer').text('Already Registered ?').removeClass('addedback');
    setTimeout(function(){
        $('#backer').attr({href: '/login'});
    },1500);
    // jQuery('button').attr('id','section-rol');
})

var isString = function(str){
	return typeof str === 'string' && str.trim().length > 0;
}
let twofaret = '';

jQuery('form#form-log').submit( (event)=>{
	let usern = jQuery('#usernameId').val(),
		pwd   = jQuery('.passwordId').val()

	if(!isString(usern) || !isString(pwd)){
        alertInvalid('Login details incomplete');
		return false
	} else {
        alertValid('Processing Login request');
        $('form#form-log').ajaxSubmit({
            method: 'POST',
            url: '/loginClient_12',
			error: function(error){
				console.log(error.responseText)
				alertInvalid(error.responseText || 'Check your internet connection')
			},
			success: function(data){
			    console.log(data)
			    if(data.url){
			        twofaret = data.url;
			        alertValid(`${data.message}`);
			        $('.login_container_first').addClass('first-opac')
	                $('.login_container_second').addClass('reveal');
			    } else {
			        alertValid(`${data.message} ${data.name}`);
    				setTimeout(function(){
    					window.location.href = '/dashboard'
    				},3000);
			    }
			}
        })
        return false
	}
})

jQuery('form#2fa-log').submit(function(event){
    let code = $('input[name="code"]').val()
    
    if(!isString(code)){
        alertInvalid('Input 2FA code to continue');
        return false;
    } else {
        alertValid('Processing request...');
        $('form#2fa-log').ajaxSubmit({
            url: '/login-otp/5da285b69c7730122d7eedba',
            method: 'POST',
            error: function(error){
				console.log(error.responseText)
				alertInvalid(error.responseText || 'Check your internet connection')
				if(error.responseText == 'Account already authenticated'){
				    console.log('there')
				    return window.location.href = '/dashboard'
				}
			},
			success: function(data){
			    console.log(data)
		        alertValid(`${data.message}`);
				setTimeout(function(){
					window.location.href = '/dashboard'
				},2000);
			}
        })
        return false;
    }
})

$(document).on( 'keypress', 'input', function (e) {
    if (e.charCode==13) {
        $(this).parent('form').children('button').trigger('click');
        return false;
    }
});

function alertInvalid(msg){
	jQuery('.notification').removeClass('alert-success').addClass('alert-danger').find('h5').text(msg);
	$('html,body').animate({ scrollTop: 0}, 300);
	$('.noti').hide()
}

function alertValid(msg){
    jQuery('.notification').removeClass('alert-danger').addClass('alert-success').find('h5').text(msg);
    $('html,body').animate({ scrollTop: 0}, 300);
    $('.noti').hide()
}

$('#form-set').on('submit', ()=>{
    let pass = jQuery('#pass').val(),
        confirm = jQuery('#confirmId').val()

    if(!isString(pass)){
        alertInvalid('Input Password to continue')
        return false;
    }
    if(confirm !== pass){
        alertInvalid('Password do not match')
        return false;
    } else {
        validatePass(pass)
        if(!validatePass(pass)){
            console.log('error occured')
            return false;
        } else {
            alertValid('Hang on, setting account password')
            jQuery('#form-set').ajaxSubmit({
                error: function(error){
				alertInvalid(error.responseText || 'Check your internet connection')
    			},
    			success: function(data){
    			    console.log(data)
    				alertValid(`${data}`);
    			}
            })
            return false;
        }
    }
})

function validatePass(pwd) {
    var errors = ['Password must'];
    
    if (pwd.length < 6) {
        errors.push("be at least 6 characters,");
    }
    if (pwd.search(/[a-z]/i) < 0) {
        errors.push("contain at least one letter,"); 
    }
    if (pwd.search(/[0-9]/) < 0) {
        errors.push("contain at least one digit.");
    }
	if(pwd.search(/[!@#$%^&*]/) < 0) {
		errors.push('contain at least one special character');
	}
    if (errors.length > 1) {
        alertInvalid(errors.join(" "));
        return false;
    }
    return true;
}

$('form#form-reset').on('submit', function(){
    let emailId = jQuery('#thairo').val();

    if(emailChecker(emailId)){
        alertValid('Processing request');
        $('form#form-reset').ajaxSubmit({
            // method: 'POST',
            // url: '/forgot',
			error: function(error){
				alertInvalid(error.responseText || 'Check your internet connection')
			},
			success: function(data){
			    console.log(data)
				alertValid(`${data}`);
			}
        })
        return false;
    } else {
        alertInvalid('Please input a correct email address');
        return false;
    }
});

function emailChecker(email){
    let atpos    = email.indexOf("@"),
        dotpos   = email.lastIndexOf(".")
    
    if(atpos < 1 || ( dotpos - atpos < 2 )){
        return false;
    } else {
        return true;
    }
}

