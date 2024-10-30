<?php
/**
 * Fired when the plugin is uninstalled.
 *   
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$option_name = 'woocommerce_intrxn_pay_settings';
delete_option($option_name);