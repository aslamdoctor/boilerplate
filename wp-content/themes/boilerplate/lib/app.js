(function($) {
	// On Dom Ready
	$(document).ready(function() {
		// Featuerd Posts Carousel
		$('#featured-posts .the-carousel').slick({
			dots: true,
			arrows:true,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			adaptiveHeight: true,
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
		
		// Related Posts Carousel
		$('#related-posts .the-carousel').slick({
			dots: true,
			arrows:true,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			adaptiveHeight: true,
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
	});

	// After page loaded completely
	$(window).bind("load", function() {
	});

})(jQuery);