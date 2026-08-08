<?php
/**
 * parts/person-schema.php — canonical Person entity for the site's author/founder.
 * Establishes a real, named expert for E-E-A-T and LLM attribution. Does not
 * duplicate Rank Math's Organization; this is a standalone Person with a stable @id.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$person = array(
	'@context'    => 'https://schema.org',
	'@type'       => 'Person',
	'@id'         => 'https://wpwebsitemaintenancepackages.com/#bhupesh-rathore',
	'name'        => 'Bhupesh Rathore',
	'url'         => 'https://wpwebsitemaintenancepackages.com/author-profile/',
	'image'       => 'https://wpwebsitemaintenancepackages.com/wp-content/uploads/2026/08/bhupesh-rathore-1.webp',
	'jobTitle'    => 'Founder',
	'worksFor'    => array(
		'@type' => 'Organization',
		'name'  => 'ThinkFlow Media',
		'url'   => 'https://thinkflow.agency',
	),
	'knowsAbout'  => array(
		'WordPress website maintenance',
		'Website security and malware removal',
		'WordPress',
		'WooCommerce',
		'Website performance and Core Web Vitals',
		'Search engine optimization',
	),
	'sameAs'      => array(
		'https://www.linkedin.com/in/bhupesh-rathore/',
		'https://x.com/bhupeshrathodz',
	),
	'description' => 'Founder of ThinkFlow Media with 8+ years in WordPress, SEO and website operations. Speaker at the Chiang Mai SEO Conference 2025.',
);
echo '<script type="application/ld+json">' . wp_json_encode( $person, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
