jQuery(window).ready(function() {
	var socialTriggerPostion = jQuery('#gallery').position().top + 600;
	var socialWidget = jQuery('div.social');
	console.log(socialTriggerPostion, socialWidget);

	jQuery('.gallery').bxSlider({
		mode: 'fade',
		speed: 1000,
		pause: 5000,
		pager: false,
		controls: false,
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

	// Event for showing social widget on HP
	jQuery(window).on('scroll', function(event) {
		var scroll = jQuery(this).scrollTop();
		console.log(scroll);
		if(scroll > socialTriggerPostion) {
			socialWidget.addClass('show');
		} else {
			socialWidget.removeClass('show');
		}
	});
});