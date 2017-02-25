(function($) {
	// On Dom Ready
	$(document).ready(function() {
		featured_posts_carousel();
		related_posts_carousel();

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
	});

	// After page loaded completely
	$(window).bind("load", function() {
	});

})(jQuery);


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


// Featured posts carousel
function featured_posts_carousel(){
	jQuery('#featured-posts .the-carousel').slick({
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

// Related posts carousel
function related_posts_carousel(){
	jQuery('#related-posts .the-carousel').slick({
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