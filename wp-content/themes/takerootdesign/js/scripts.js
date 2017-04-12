(function( root, $, undefined ) {
	"use strict";

	$(function () {
	//Slick Startup!
		  $('.root-slider').slick({
					infinite: true,
				  speed: 500,
				  fade: true,
				  cssEase: 'linear'
		  });




	//Page and Single Header heights
	$(function() {
		var height = $('.slick-track').height();
		//var origHeight = $('.header-page').height();
		$('.header-page').css('height', (height-40) + 'px');
		$('.header-page').css('padding', (height/5) + 'px');

	});




	//Woo Lightbox
	$('a.gallery').featherlightGallery({
		previousIcon: '&#9664;',     /* Code that is used as previous icon */
		nextIcon: '&#9654;',         /* Code that is used as next icon */
		galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
		galleryFadeOut: 300          /* fadeOut speed before slide is loaded */
	});


    //Fixed Nav
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll > 10) {
                $(".nav").addClass("background-on");
            } else {
                $(".nav").removeClass("background-on");
            }
        });




	});

} ( this, jQuery ));
