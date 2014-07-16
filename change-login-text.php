<?php
/*
Plugin Name: Change Login Text
Plugin URI: https://www.vanpattenmedia.com/
Description: Modify text on the WordPress login page to reflect email-based login
Author: Van Patten Media
Version: 1.0
Author URI: https://www.vanpattenmedia.com/
*/

/**
 * vpm_username_to_email
 * Modify text on login page for email-based login
 *
 * @return string
 */
function vpm_username_to_email( $buffer ) {
	// Login page
	$buffer = str_replace( 'Username', 'Email Address', $buffer );

	// Password reset page
	$buffer = str_replace( 'username or ', '', $buffer );
	$buffer = str_replace( ' or E-mail', '', $buffer );

	// Send it back
	return $buffer;
}

/**
 * vpm_buffer_start
 */
function vpm_buffer_start() {
	ob_start('vpm_username_to_email');
}
add_action('login_head', 'vpm_buffer_start');

/**
 * vpm_buffer_end
 */
function vpm_buffer_end() {
	ob_end_flush();
}
add_action('login_footer', 'vpm_buffer_end');
