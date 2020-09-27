<?php
function bondhon_form_submit() {
	global $wpdb;
	$submit_data = false;
	$full_name = $email = $message = '';
	if ($_POST['action']) {
		$table_name = $wpdb->prefix . "form_data";
		$full_name = text_san($_POST['full_name']);
		$message = text_san($_POST['message']);
		$email = text_san($_POST['email']);
		if ($full_name != '' && $message != '' && $email != '') {
			//send a mail
			$to = get_option('admin_email');
			$subject = "Form submit -".$full_name;
			$headers = 'From: '. $email . "\r\n" .
			    'Reply-To: ' . $email . "\r\n";
			wp_mail($to, $subject, strip_tags($message), $headers);

			//insert data
			$wpdb->insert( $table_name, array(
				'full_name'	=> $full_name,
				's_email'	=> $email,
				's_message'	=> $message
			));

			echo 'true';
			
		}else {
			echo 'false';
		}
		exit();
	}

}
function text_san($text) {
	return trim(filter_var($text, FILTER_SANITIZE_STRING));
}
add_action( 'admin_post_bondhon_form_submit', 'bondhon_form_submit' );