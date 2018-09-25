<?php
	// Mobile detect class
	include_once 'includes/Mobile_Detect.php';
	include_once 'includes/env2.php';

	// Add featured image support
	add_theme_support( 'post-thumbnails' );

	// Register theme menues
	function print_site_menues() {
		register_nav_menus(
			array(
				'Main Menu' => __( 'Main Menu' ),
				'Features Menu' => __( 'Feature Menu' ),
				'Main Navigation' => __('Main Navigation'),
				'Project Menu' => __('Project Menu')
			)
		);
	}
	add_action( 'init', 'print_site_menues' );

	// action for sending to mailchimp
	add_action('wp_ajax_send_to_mailchimp', 'send_to_mailchimp');
	add_action('wp_ajax_nopriv_send_to_mailchimp', 'send_to_mailchimp');

	function send_to_mailchimp() {
		// Put your MailChimp API and List ID hehe
		$api_key = MAILCHIMP_API;
		$list_id = 'fc2738ac68';
		$to = 'office@bardor.co.il';
		$cc = 'talreznic11@gmail.com';
		$from = $_POST['email'];
		$subject = 'פנייה מאתר בר-דור שערים';
		$email_content = $_POST['message'];
		$content_type = 'Content-Type: text/html; charset=UTF-8';
		$headers = array();
		$headers[] = "From: $from <$from> \r\n";
		$headers[] = "CC: $cc";
		$headers[] = $content_type;

		wp_mail($to, $subject, $email_content, $headers);

		// Let's start by including the MailChimp API wrapper
		include('includes/MailChimp.php');

		$MailChimp = new MailChimp($api_key);
		$memberId = $MailChimp->subscriberHash($_POST['email']);

		// Submit subscriber data to MailChimp
		// For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
		// For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
		$result = $MailChimp->put("lists/$list_id/members/".$memberId, [
			'email_address' => $_POST["email"],
			'merge_fields'  => ['FNAME'=>$_POST["fname"], 'PHONE'=>$_POST["phone"]],
			'status'        => 'subscribed'
		]);

		if ($MailChimp->success()) {
			echo 1;
		} else {
			echo $MailChimp->getLastError();
		}
		die();
	}

	// Function for detecting mobile version
	function is_mobile() {
		$detect = new Mobile_Detect;

		// Exclude tablets.
		if( $detect->isMobile() && !$detect->isTablet() ){
		 	return true;
		}
	}
?>