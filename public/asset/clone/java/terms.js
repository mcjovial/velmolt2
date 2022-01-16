/* global AOS $ */

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
