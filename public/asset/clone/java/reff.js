(function($){
    // jQuery(window).load(function (e) {
    //     'use strict';



    // })
    
    /* global AOS $  Typed*/

    'use strict';
    
    AOS.init({
        duration: 1200,
        once: true
    })
    
    $(window).load(function() {
        $('.loader').delay(500).fadeOut('slow');
    });
    
    $(function(){
        $('.tablist__item .tab__label').on('click', function(){
            let element = $(this).data('tablist');
            $('.tablist__content .active').removeClass('active').addClass('hide')
            $('.' + element).removeClass('hide').addClass('active')
        })
    })
    
    $(window).on('scroll', function () {
        if ($(window).scrollTop() < 50) {
            $('.header').removeClass('sticky_header');
            $('.navbar-brand .first').removeClass('unhide').addClass('hide')
            $('.navbar-brand .last').removeClass('hide');
        } else {
            $('.header').addClass('sticky_header');
            $('.navbar-brand .first').removeClass('hide').addClass('unhide')
            $('.navbar-brand .last').addClass('hide');
        }
    });
    
    $(function(){
        $('.tablist__item .tab__label').on('click', function(){
            let element = $(this).data('tablist');
            $('.tablist__content .active').removeClass('active').addClass('hide')
            $('.' + element).removeClass('hide').addClass('active')
        })
    })
    
    $("#elevator").on("click", function() {
        $('html, body').animate({
               scrollTop: 0
            }, 1000);
    })
       
    $(document).ready(function() {
        
        $(window).scroll(function () {
        if ($(window).scrollTop() > 900) {
            $('#elevator').addClass('reveal');
                
        }
        if ($(window).scrollTop() < 1000) {
            $('#elevator').removeClass('reveal');
        }
        });
    });

    jQuery('.finali').click(function () {
        $('#finali').slideDown(500)
        $('#mensa').slideUp(500)
        $('#magister').slideUp()
        $('#finali2').slideUp()
    });
    
    jQuery('.finali2').click(function () {
        $('#finali2').slideDown(500)
        $('#mensa').slideUp(500)
        $('#magister').slideUp()
        $('#finali').slideUp()
    });


    jQuery('.liso').click(function () {
        $('#mensa').slideDown(500)
        $('#magister').slideUp()
        $('#finali').slideUp(500)
        $('#finali2').slideUp()
    });

    jQuery('.sapientia').click(function () {
        $('#magister').slideDown(500)
        $('#mensa').slideUp()
        $('#finali').slideUp(500)
        $('#finali2').slideUp()
    });

    jQuery("#signin").mouseover(function () {
        $("#appear").fadeIn()
    })

    jQuery("#signin,#appear").mouseleave(function () {
        $("#appear").fadeOut()
    })

    jQuery('.protecti').click(function () {
        $('#paito').slideDown(500)
        $('#vitoti2').slideUp(500)
        $('#litoti3').slideUp(500)
        $('#litoti4').slideUp(500)
    });

    jQuery('.hitoti2').click(function () {
        $('#vitoti2').slideDown(500)
        $('#litoti3').slideUp(500)
        $('#litoti4').slideUp(500)
        $('#paito').slideUp(500)
    });
    jQuery('.fatoy').click(function () {
        $('#litoti3').slideDown(500)
        $('#vitoti2').slideUp()
        $('#litoti4').slideUp(500)
        $('#paito').slideUp(500)
    });

    jQuery('.fatoti3').click(function () {
        $('#litoti4').slideDown(500)
        $('#vitoti2').slideUp(500)
        $('#litoti3').slideUp(500)
        $('#paito').slideUp(500)
    });


    jQuery('.longi').click(function () {
        $('#termi').slideDown(500)
        $('#lito').slideUp(500)
        $('#vito').slideUp(500)
        $('#lito2').slideUp(500)
    });

    jQuery('.fato').click(function () {
        $('#lito').slideDown(500)
        $('#vito').slideUp(500)
        $('#lito2').slideUp(500)
        $('#termi').slideUp(500)
    });
    jQuery('.hito').click(function () {
        $('#vito').slideDown(500)
        $('#lito').slideUp()
        $('#lito2').slideUp(500)
        $('#termi').slideUp(500)
    });

    jQuery('.fato2').click(function () {
        $('#lito2').slideDown(500)
        $('#vito').slideUp(500)
        $('#lito').slideUp(500)
        $('#termi').slideUp(500)
    });


    jQuery('.mergin').click(function(){
        $('#mergind').slideDown(500)
        $('#vitoti').slideUp(500)
        $('#litoti').slideUp(500)
        $('#litoti2').slideUp(500)
    })


    jQuery('.hitoti').click(function () {
        $('#vitoti').slideDown(500)
        $('#litoti').slideUp(500)
        $('#litoti2').slideUp(500)
        $('#mergind').slideUp(500)
    });
    jQuery('.fatoti').click(function () {
        $('#litoti').slideDown(500)
        $('#vitoti').slideUp()
        $('#litoti2').slideUp(500)
        $('#mergind').slideUp(500)
    });

    jQuery('.fatoti2').click(function () {
        $('#litoti2').slideDown(500)
        $('#vitoti').slideUp(500)
        $('#litoti').slideUp(500)
        $('#mergind').slideUp(500)
    });

    jQuery('#viewfaqs').click(function () {
        $('html,body').animate({
            scrollTop: $("#tored").offset().top
        }, 1000);
    })

})(jQuery);

$('#pullcalc').click(function(){
    let perchange = $('#percentage-select').val();
    let amount = $('#amountchange').val();
    if(perchange == 'starter'){
        if(amount < 1000){
            alert(`${amount} is less than the required minimum price for ${perchange}`)
            // amount = $('#amountchange').val('1000');
        } else if(amount > 9999){
            alert(`${amount} is higher than the required minimum price for ${perchange}`)
            // amount = $('#amountchange').val('20000');
        } else {
            let calc = amount / 100;
            let final = calc * 4;
            let rand = final.toFixed(2)
            $("#revenue").text(rand)
        }
    }
    
    if (perchange == 'basic') {
        if (amount < 10000) {
            alert(`${amount} is less than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('20000');
        } else if (amount > 19999) {
            alert(`${amount} is higher than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('49999');
        } else {
            let calc = amount / 100;
            let final = calc * 7;
            let rand = final.toFixed(2)
            $("#revenue").text(rand)
        }
    }
    
    if (perchange == 'deluxe') {
        if (amount < 20000) {
            alert(`${amount} is less than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('20000');
        } else if (amount > 49999) {
            alert(`${amount} is higher than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('49999');
        } else {
            let calc = amount / 100;
            let final = calc * 10;
            let rand = final.toFixed(2)
            $("#revenue").text(rand)
        }
    }

    if (perchange == 'enterprize') {
        if (amount < 50000) {
            alert(`${amount} is less than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('50000');
        } else if (amount > 99999) {
            alert(`${amount} is higher than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('99999');
        } else {
            let calc = amount / 100;
            let final = calc * 15;
            let rand = final.toFixed(2)
            $("#revenue").text(rand)
        }
    }

    if (perchange == 'premium') {
        if (amount < 100000) {
            alert(`${amount} is less than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('100000');
        } else if (amount > 700000) {
            alert(`${amount} is higher than the required minimum price for ${perchange} tier`)
            // amount = $('#amountchange').val('500000');
        } else {
            let calc = amount / 100;
            let final = calc * 20;
            let rand = final.toFixed(2)
            $("#revenue").text(rand)
        }
    }
})

function changePer() {
    let perchange = $('#percentage-select').val();
    console.log(perchange)
    if (perchange == 'starter') {
        $('#amountchange').val('1000');
        $('#start-amount').text('$1,000')
        $('#end-amount').text('$9,999')
        $("#revenue").text('40')
    }
    
    if (perchange == 'basic') {
        $('#amountchange').val('10000');
        $('#start-amount').text('$10,000')
        $('#end-amount').text('$19,999')
        $("#revenue").text('700')
    }
    
    if (perchange == 'deluxe') {
        $('#amountchange').val('20000')
        $('#start-amount').text('$20,000')
        $('#end-amount').text('$49,999')
        $("#revenue").text('2000')
    }
    if (perchange == 'enterprize') {
        $('#amountchange').val('50000')
        $('#start-amount').text('$50,000')
        $('#end-amount').text('$99,999')
        $("#revenue").text('7500')
    }
    if (perchange == 'premium') {
        $('#amountchange').val('100000')
        $('#start-amount').text('$100,000')
        $('#end-amount').text('$500,000')
        $("#revenue").text('20000')
    }
    
}

changePer();