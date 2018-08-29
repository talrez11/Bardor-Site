jQuery(window).ready(function() {
	var loader = jQuery('.lds-roller');
	var successResponse = 'תודה שנרשמתם! נציג מטעמנו יחזור אלייכם בקרוב';
	var errorMessage = 'Something went wrong';
	jQuery('#signup').on('submit', function() {
		event.preventDefault();
		loader.addClass('show');
	    var ajax_form_data = jQuery(this).serialize();
	    console.log(ajax_form_data);
	    jQuery.ajax({
	        url: '/wp-admin/admin-ajax.php',
	        type:   'post',
	        data:   ajax_form_data,
	        async: true,
	    }).done (function (response) {
	    	console.log(response);
	    	if(response == 1) {
	    		jQuery('#response').html(successResponse);
	    	} else {
	    		jQuery('#response').html(errorMessage);
	    	}
	    	loader.removeClass('show');
	    	setTimeout(removeResponseMessage, 5000);
	    });
	});

	function removeResponseMessage() {
		jQuery('#response').html(' ');
	}
});