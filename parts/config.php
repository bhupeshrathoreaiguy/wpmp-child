<?php
/**
 * parts/config.php — one place for brand + contact info used across every
 * template part. Edit here and it changes site-wide. No phone by design.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'wpmp_cfg' ) ) {
	function wpmp_cfg() {
		return array(
			'brand'    => 'WP Maintenance Packages',
			'email'    => 'hello@thinkflow.agency',
			'calendly' => 'https://calendly.com/bhupesh-thinkflow/30min',
			'linkedin' => 'https://www.linkedin.com/in/bhupesh-rathore/',
			'x'        => 'https://x.com/bhupeshrathodz',
			'founder'  => 'Bhupesh Rathore',
			'company'  => 'ThinkFlow Media',
			'company_url' => 'https://thinkflow.agency',
		);
	}
}

/* Shared icon helper (guarded so it never collides with a template copy). */
if ( ! function_exists( 'fp_icon' ) ) {
	function fp_icon( $name ) {
		$paths = array(
			'refresh' => '<path d="M21 12a9 9 0 1 1-2.64-6.36M21 3v6h-6"/>',
			'shield'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
			'save'    => '<path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><path d="M17 21v-8H7v8M7 3v5h8"/>',
			'gauge'   => '<path d="M12 21a9 9 0 1 1 9-9"/><path d="M12 12l4-2"/>',
			'pulse'   => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
			'wrench'  => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.1 2.1-2.1-.5-.5-2.1 2.1-2.1z"/>',
			'check'   => '<path d="M20 6 9 17l-5-5"/>',
			'arrow'   => '<path d="M5 12h14M13 6l6 6-6 6"/>',
			'alert'   => '<path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><path d="M12 9v4M12 17h.01"/>',
			'clock'   => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
			'trend'   => '<path d="M22 7 13.5 15.5l-5-5L2 17"/><path d="M16 7h6v6"/>',
			'lock'    => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
			'users'   => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
			'store'   => '<path d="M3 9h18l-1-5H4L3 9z"/><path d="M5 9v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9"/>',
			'mail'    => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/>',
			'user'    => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/>',
			'cal'     => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
			'linkedin'=> '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>',
			'x'       => '<path d="M4 4l16 16M20 4L4 20"/>',
			'map'     => '<path d="M9 20l-6-3V4l6 3 6-3 6 3v13l-6-3-6 3z"/><path d="M9 7v13M15 4v13"/>',
		);
		$p = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
	}
}
