/* global jQuery isString alertInvalid emailChecker $ validatePass alertValid*/

// console.log(document.cookie.compRef);

let cook = document.cookie
console.log(cook)


$('button#section-rol').click(function(event){
	var full    = jQuery('input[name="first_name"]').val(),
		last   = jQuery('input[name="last_name"]').val(),
		usern   = jQuery('input[name="username"]').val(),
		countr  = jQuery('select[name="country"]').val(),
		email   = jQuery('input[name="email"]').val()

	if(!isString(full)){
		return alertInvalid('First name is required');
	}
	if(!isString(last)){
		return alertInvalid('Last name is required');
	}
	if(!isString(usern)){
		return alertInvalid('Please Input an account username');
	}
	if(full == usern){
		return alertInvalid("Account fullname can't be the same with username")
	}
	if(!emailChecker(email)){
		return alertInvalid('Input a correct email address');
	}
	if(isString(full),isString(usern),isString(email),isString(last)){
        jQuery(this).addClass('reg-register');

        $('.section-container__first').addClass('first-opac');
        $('.section-container__second').addClass('reveal');
        $('#section-rol').attr({'data-text': 'register'});
        $('#backer').text('Go Back').addClass('addedback').attr({href: 'javascript:void(0)'});

		// jQuery(this).attr('id','').unbind('click');
		// $('input[name="phone"]').focus();
	} else {
		alertInvalid('Details are incomplete');
	}
})

function phoneChecker(str){
	// var path = new RegExp(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)
	//  return path.test(str);
	if(isNaN(str)){
		return false
	} else {
		return true
	}
}

var himp = '';

// $(document).on('click', '.reg-register', function(){
// 	let phone    = jQuery('input[name="phone"]').val(),
// 		pwd  = jQuery('input[name="password"]').val(),
// 		pwdConf = jQuery('input[name="confirmPass"]').val(),
// 		email   = jQuery('input[name="email"]').val()
	
// 	// if(!isString(phone) || !phoneChecker(phone)){
// 	// 	alertInvalid('A valid Phone number is required');
// 	// 	return false;
// 	// }
// 	if(!isString(pwd)){
// 		alertInvalid('Input Password to continue');
// 		return false;
// 	}
// 	if(pwdConf !== pwd){
// 		alertInvalid('Password do not match');
// 		return false;
// 	} else {
// 		validatePass(pwd)
// 		if(!validatePass(pwd)){ 
// 			console.log('error occured')
// 			return false;
// 		} 
// 		if (document.getElementById('terms').checked != true) {
// 			alertInvalid('To continue, accept the terms and conditions');
// 			return false;
// 		} else {
// 			alertValid(`Hang on, Registration in progress`)
// 			// $('form').ajaxSubmit({
// 			// 	method: 'POST',
// 			// 	url: '/registeral2',
// 			// 	error: function(error){
// 			// 		alertInvalid(error.responseText)
// 			// 	},
// 			// 	success: function(data){
// 			// 		alertValid(data.message);
// 			// 		himp = data.twofac;
// 			// 		$('input').val('');
// 			// 		$.get(`${data.link}`)
// 			// 		.then(function(data){
// 			// 			jQuery('.notification').removeClass('alert-danger').addClass('alert-success').find('h5').html(data);
// 			// 		    $('html,body').animate({ scrollTop: 0}, 300);
// 			// 		    $('.noti').hide();
// 			// 			$('.formo__container').addClass('hide');
// 			// 			$('#activate_factor').attr('data-text','setup two factor authentication');
// 			// 			$('.sucRegister__body .text span').text(email);
// 			// 			$('.sucRegister, .sucRegister_first').fadeIn(1500);
// 			// 		})
// 			// 		.fail(function(error){
// 			// 			alertInvalid(error.responseText || 'Check your internet connection');
// 			// 			// console.log(error.responseText || 'Check your internet connection')
// 			// 		})
// 			// 	}
// 			// })
// 			return false;
// 		}
// 	}
// })

$('#activate_fac').click(function(){
	let code = jQuery('input[name="code"]').val();
	
	if(!isString(code)){
		console.log(code)
		alertInvalid('Input generated code from google authenticator');
		return false;
	} 
	if (document.getElementById('2facheck').checked != true) {
		alertInvalid(`To continue, accept that you've written down your key`);
		return false;
	} else{
		alertValid('Please wait, authenticating...')
		$('form#setinupfac').ajaxSubmit({
			url: `/login-otp/${himp}`,
			// url: `/login-otp/5ef0b5d3ac1bd32b18d04c4f`,
			method: 'POST',
			error: function(error){
				alertInvalid(error.responseText || 'Check your internet connection');
			},
			success: function(data){
			    console.log(data);
				$('.sucRegister_first, .sucRegister_second').addClass('hide');
				$('.sucRegister__body.suc2fa').fadeIn(1500);
				$('.lastskip').fadeIn();
				alertValid(data.message);
			}
		})
	}
})

$('form#form-rec2far').submit(function(event){
	let auth = $('input[name="authKey"]').val()
	,   pass = $('input[name="password"]').val()
	
	if(!isString(auth) || !isString(pass)){
		console.log(auth, pass);
		alertInvalid('Required credentials incomplete');
		return false;
	} else {
		console.log(auth, pass);
		let urll = $('form#form-rec2far').attr('action');
		alertValid('Verifying credentials...');
		$('form#form-rec2far').ajaxSubmit({
			method: 'POST',
			url: urll,
			error: function(error){
				alertInvalid(error.responseText)
				console.log(error);
			},
			success: function(data){
				console.log(data)
			    $('.formo__container').fadeOut(1300)
				$('.sucRegister_second').addClass('reveal')
				$('.sucRegister').fadeIn(2000);
				$('.sucRegister_second img,.sucRegister_restore img').attr('src', data.qrImage);
				$('.keytin span').text(data.key);
				console.log(data.key[0]);
				alertValid('Key generated successfully!');
			}
		})
		return false;
	}
})

$(document).on('click', '#pushback', ()=>{
	$('.sucRegister_first').removeClass('first-opac')
	$('.sucRegister_second').removeClass('reveal')
	$('input').val('');
})

$('#activate_factor').on('click', function(){
	alertValid('Wait, Generating Authentication key')
	var ul = `/setup2fa/${himp}`
	if(ul){
		$.ajax({
			url: ul,
			// url: `/setup2fa/5ef0b5d3ac1bd32b18d04c4f`,
			method: 'GET',
			error: function(error){
				alertInvalid(error.responseText || 'Check your internet connection')
			},
			success: function(data){
			    console.log(data)
			    $('.sucRegister_first').addClass('first-opac')
				$('.sucRegister_second').addClass('reveal')
				$('.sucRegister_second img').attr('src', data.qrImage);
				$('.keytin span').text(data.key);
				console.log(data.key[0]);
				alertValid('Key generated successfully!');
			}
		})
	}
})
$('#skip a').click(function(){
	$('.regFactor').slideUp(400)
})