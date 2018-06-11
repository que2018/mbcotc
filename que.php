<?php
/**
 *
 * @link              https://github.com/que2018
 * @since             1.0.0
 * @package           WPHW
 *
 * @wordpress-plugin
 * Plugin Name:       Que
 * Plugin URI:        https://github.com/que2018/mbcotc
 * Description:       MBCOTC Daily Devotion API
 * Version:           0.0.1
 * Author:            Sam Shao
 * Author URI:        https://saminthebox.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'login_message', 'wphw_login_message' );
/**
 * Adds 'Hello World' above the login form in the WordPress login form.
 *
 * @param    string $message    The default message to display above the form.
 * @return   string $message    The message to display above the form.
 */
function wphw_login_message( $message ) {

	$message = '<h2>';
		$message .= 'Hello World!';
	$message .= '</h2>';

	return $message ;
}
