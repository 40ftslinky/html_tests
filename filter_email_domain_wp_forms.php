<?php
/* DON'T copy the first line (above) if your functions.php already has it.
 * ---------------------------------------------------------------------- */

/**
 * WPForms Email Blacklist
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/wpforms-email-blacklist
 *
 * @param string $honeypot, empty if not spam, honeypot text is used in WPForms Log
 * @param array $fields
 * @param array $entry
 * @param array $form_data
 */
function be_wpforms_email_blacklist( $honeypot, $fields, $entry, $form_data, $errors ) {
  	// Use the email as the key. The value will be used in the log
		// Blocked domains
	$blacklist = array(
		'info@ranksindia.com',
		'gmail.com',
		'hotmail.com'
	);

	/*
	* $domain = substr(strrchr($email, "@"), 1); //extract domain name from email
	* if(in_array($domain, $blacklist)){

	*/

	// Get visitor email domain
    $email = explode( '@', $form_data );

	foreach( $form_data['fields'] as $id => $field ) {
	// 	if( 'email' == $field['type'] && array_key_exists( $entry['fields'][$id], $blacklist ) )
	// 		$honeypot = '[Blacklist] ' . $blacklist[$entry['fields'][$id]];
	// }
			if( 'email' == $field['type'] && in_array( $email[1], $blacklist ) )
        // $errors->add('invalid_email', __('ERROR: Please use another email.'));
				// $errors[ $form_id ]['header'] = __( 'Form has not been submitted, please see the errors below.', 'wpforms' );
				$honeypot = '[Blacklist] ' . $blacklist[$entry['fields'][$id]];
			}

	//return $honeypot;
}
add_filter( 'wpforms_process_honeypot', 'be_wpforms_email_blacklist', 10, 4 );
