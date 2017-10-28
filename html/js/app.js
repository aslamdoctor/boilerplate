// Slideout Menu
var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
});
slideout.on('open', function() {
	jQuery(".btn-mobile-menu").addClass('is-active');
});
slideout.on('close', function() {
	jQuery(".btn-mobile-menu").removeClass('is-active');
});


(function($) {
	// On Dom Ready
	$(document).ready(function() {
		// Mobile Menu Button
		$(".btn-mobile-menu").click(function(event) {
			event.preventDefault();
			$(this).toggleClass('is-active');
			slideout.toggle();
		});

		// Disable slideout on carousel touch
	    $('.the-carousel').bind('touchstart', function(e) {
	        slideout.disableTouch();
	    });
	    $('.the-carousel').bind('touchend', function(e) {
	        slideout.enableTouch();
		});
		
		// Carousels
		posts_carousel("#featured-posts .the-carousel");
		posts_carousel("#related-posts .the-carousel");
	});

	// After page loaded completely
	$(window).bind("load", function() {
	});

})(jQuery);


// Featured posts carousel
function posts_carousel(ele){
	jQuery(ele).slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		responsive: [
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 569,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
}
