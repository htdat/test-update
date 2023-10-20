<?php
/**
 * Plugin Name: Test Update
 * WC tested up to: 7.8.0
 * Requires at least: 6.0
 * Requires PHP: 7.3
 * Version: 1.0
 */

add_action( 'plugins_loaded', 'test_update_init', 11 );

function test_update_init() {
	// Do nothing.
	add_action( 'admin_print_footer_scripts', function () {
		include_once __DIR__ . '/include.php';
	} );
}
