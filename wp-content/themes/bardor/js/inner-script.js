jQuery(window).ready(function() {
	// Detecting mobile devices
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

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

	if(!isMobile.any()) {
		if(jQuery('ul.slides')) {
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
		}
	}

	// Event for showing social widget on HP
	jQuery(window).on('scroll', function(event) {
		var scroll = jQuery(this).scrollTop();
		if(scroll > socialTriggerPostion) {
			socialWidget.addClass('show');
		} else {
			socialWidget.removeClass('show');
		}
	});

	jQuery('header a.menu').on('click', function(event) {
		event.preventDefault();
		jQuery(this).toggleClass('open');
		jQuery('nav').toggleClass('open');
	});

	jQuery('li.menu-item-has-children').on('click', function() {
		jQuery('nav').toggleClass('open');
	});
});