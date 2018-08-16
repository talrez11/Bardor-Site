jQuery(window).ready(function() {
	var socialTriggerPostion = jQuery('#gallery').position().top;
	var socialWidget = jQuery('div.social');

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