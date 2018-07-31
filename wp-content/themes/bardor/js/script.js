jQuery(window).ready(function() {
	jQuery('ul.slides').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1000,
		pauseOnHover: false,
		arrows: false,
		mobileFirst: true,
	});
});