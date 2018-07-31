jQuery(window).ready(function() {
	jQuery('.gallery').bxSlider({
		mode: 'fade',
		speed: 1000,
		pause: 8000,
		pager: false,
		controls: true,
		auto: true,
		touchEnabled: true,
		swipeThreshold: 50,
		wrapperClass: 'my-class',
		preloadImages: 'visible'
	});
	// Logos Slider
	jQuery('ul.slides').slick({
		slidesToShow: 8,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1000,
		pauseOnHover: false,
		arrows: false,
		mobileFirst: true,
		rtl: true
	});
});