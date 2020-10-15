// Slideout Menu Actions
var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 207,
    'tolerance': 70
});
slideout.on('open', function () {
	$(".mobile-menu-open").addClass('is-active');
	$(".mobile-menu-open span.hamburger-label").text('Close');
});

slideout.on('close', function () {
	$(".mobile-menu-open").removeClass('is-active');
	$(".mobile-menu-open span.hamburger-label").text('open');
});


// Related Posts Carousel
$('#related-posts .the-carousel').slick({
	dots: true,
	arrows:true,
	infinite: true,
	speed: 300,
	slidesToShow: 1,
	slidesToScroll: 1,
	adaptiveHeight: true
});


// Disable slideout on carousel touch
$('.the-carousel').bind('touchstart', function(e) {
	slideout.disableTouch();
});
$('.the-carousel').bind('touchend', function(e) {
	slideout.enableTouch();
});