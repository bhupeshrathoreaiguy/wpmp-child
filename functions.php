<?php
/**
 * WP Maintenance Packages Child — functions.php
 * Loads the Kadence parent styles. Custom template logic lives inside
 * front-page.php and the page-*.php templates, so this stays minimal.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'kadence-parent', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->parent()->get( 'Version' ) );
}, 20 );
