jQuery(window).ready(function() {
	var socialTriggerPostion = jQuery('#gallery').position().top;
	var socialWidget = jQuery('div.social');

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

	// Event for showing social widget on HP
	jQuery(window).on('scroll', function(event) {
		var scroll = jQuery(this).scrollTop();
		if(scroll > socialTriggerPostion) {
			socialWidget.addClass('show');
		} else {
			socialWidget.removeClass('show');
		}
	});
});