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

$(document).ready(function(){

    $.fn.roamiGmap.defaults.key = 'AIzaSyBmuHw9v9qcgFSv99DuGsb7LMFDezEC8Cw';

    var chicagoMap = $('.map-main'),
    searchChicagoMap = $('#search-chicago-gmap'),
    sfMap = $('.roamiGmap-sf');

    chicagoMap.roamiGmap({
        // center: 'Chicago, IL',
        center: 'Bowery',
        minHeight: 700,
        infowindow: {
            content: '<h1>Hello, This is Chicago, IL!</h1>',
        },

        mapOptions: {
            zoom: 13,
            
            styles: [{
              "elementType": "geometry",
              "stylers": [{
                  "color": "#212121"
              }]
            }, {
              "elementType": "labels.icon",
              "stylers": [{
                  "visibility": "off"
              }]
            }, {
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#757575"
              }]
            }, {
              "elementType": "labels.text.stroke",
              "stylers": [{
                  "color": "#212121"
              }]
            }, {
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#757575"
              }]
            }, {
              "featureType": "administrative.country",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#9e9e9e"
              }]
            }, {
              "featureType": "administrative.land_parcel",
              "stylers": [{
                  "visibility": "off"
              }]
            }, {
              "featureType": "administrative.locality",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#bdbdbd"
              }]
            }, {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#757575"
              }]
            }, {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#181818"
              }]
            }, {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#616161"
              }]
            }, {
              "featureType": "poi.park",
              "elementType": "labels.text.stroke",
              "stylers": [{
                  "color": "#1b1b1b"
              }]
            }, {
              "featureType": "road",
              "elementType": "geometry.fill",
              "stylers": [{
                  "color": "#2c2c2c"
              }]
            }, {
              "featureType": "road",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#8a8a8a"
              }]
            }, {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#373737"
              }]
            }, {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#3c3c3c"
              }]
            }, {
              "featureType": "road.highway.controlled_access",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#4e4e4e"
              }]
            }, {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#616161"
              }]
            }, {
              "featureType": "transit",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#757575"
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#000000"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [{
                  "color": "#3d3d3d"
              }]
            }]
        }

        // bind more actions once the map has loaded
        // onMapLoad: function() {
        //     var $this = this;
        //     // perform searches on our map
        //     // when the search form is sumbitted
        //     searchChicagoMap.submit(function(e){
        //         e.preventDefault();
        //         var _keyword = $(e.target).find('input[name="keyword"]').val();
        //         if (_keyword.length) {
        //             $this.searchPlaces({
        //                 keyword: _keyword,
        //             });
        //         }
        //         return false;
        //     });
        // }
    });
})

$('#contact-rol').click(function() {
    $('html,body').animate({
    scrollTop: $("#contact-rol").offset().top},
    900);
});


$('#contactSubmit').on('submit',function(event) {
    // event.preventDefault()
    let captcha = grecaptcha.getResponse();
    if(captcha.length == 0) {
        alert('Please accept captcha to continue')
        return false
    } else {
        $('form').submit();
        return true
    }
    // return false;
});