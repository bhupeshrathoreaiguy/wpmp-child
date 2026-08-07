<?php
/**
 * Service Page Template — "WordPress Website Maintenance Services"
 * ---------------------------------------------------------------------------
 * URL it produces:  /wordpress-website-maintenance-services/
 *
 * HOW TO USE (60 seconds):
 *   1. Drop this file into your active theme (use a CHILD theme so updates don't wipe it).
 *   2. In WP admin go to  Pages > Add New.
 *   3. Title the page "WordPress Website Maintenance Services".
 *      Make sure the slug (permalink) is exactly:  wordpress-website-maintenance-services
 *   4. Publish. WordPress auto-loads THIS file because of the page-{slug}.php naming rule.
 *      You do NOT need to assign a template manually.
 *
 * SEO NOTES:
 *   - If you run Yoast / RankMath / AIOSEO / SEOPress, set the title + meta there.
 *     This file detects those plugins and stays out of their way.
 *   - If you run NO SEO plugin, this file outputs a clean title, meta description,
 *     canonical, OG/Twitter tags, and JSON-LD (Service + FAQ + Breadcrumb + Rating)
 *     so the page is fully indexable and rich-snippet ready out of the box.
 *
 * Self-contained on purpose, same as your front-page.php: it renders its own
 * head/header/footer so nothing distracts from conversion, while still firing
 * wp_head() / wp_body_open() / wp_footer() so analytics, SEO and caching work.
 *
 * EDIT EVERYTHING IN THE $cfg ARRAY BELOW.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* =========================================================================
   1. CONFIG — match these to your front-page.php so NAP stays consistent.
   ========================================================================= */
$cfg = array(

	'brand'        => 'WP Maintenance Packages',
	'phone'        => '+1 (555) 010-2030',
	'phone_raw'    => '+15550102030',
	'email'        => 'hello@wpwebsitemaintenancepackages.com',

	'form_shortcode' => '',   // e.g. '[wpforms id="123"]'  — empty uses the fallback form
	'book_url'       => '',    // optional Calendly link; empty anchors to #contact

	'rating'        => '4.9',
	'reviews'       => '120+',
	'sites_managed' => '150+',
	'response_time' => 'under 4 hrs',

	/* ----- SEO copy you control. Used only if no SEO plugin is active. ----- */
	'seo_title'   => 'WordPress Website Maintenance Services | Updates, Security & Speed',
	'seo_desc'    => 'Done-for-you WordPress website maintenance services: weekly updates, security, daily backups, speed tuning and same-day fixes. No contracts. Plans from $59/mo.',

	'stats' => array(
		array( 'num' => '150+',  'label' => 'Sites under care' ),
		array( 'num' => '99.9%', 'label' => 'Average uptime' ),
		array( 'num' => '<4 hr', 'label' => 'Support response' ),
		array( 'num' => '12+',   'label' => 'Years on WordPress' ),
	),

	/* ----- What's included (deeper than the homepage on purpose) ----- */
	'included' => array(
		array( 'icon' => 'refresh', 'title' => 'Core, theme & plugin updates', 'desc' => 'Every update is tested and run on a schedule. We back up before we touch anything and roll back instantly if a plugin misbehaves, so your site never breaks on update day.' ),
		array( 'icon' => 'shield',  'title' => 'Security hardening & malware removal', 'desc' => 'Firewall, login protection, file integrity checks and continuous malware scanning. If you ever get hit, we clean it the same day and lock the hole that let it in.' ),
		array( 'icon' => 'save',    'title' => 'Daily off-site backups', 'desc' => 'Automatic daily backups stored away from your host, not on the same server that could fail. One click restores your entire site to any recent point.' ),
		array( 'icon' => 'gauge',   'title' => 'Speed & Core Web Vitals', 'desc' => 'Caching, image optimization, database cleanup and front-end tuning. Faster pages keep visitors around and Google rewards good Core Web Vitals with rankings.' ),
		array( 'icon' => 'pulse',   'title' => '24/7 uptime monitoring', 'desc' => 'We watch your site around the clock and get alerted the second it goes down, usually before a single customer notices. Then we act on it.' ),
		array( 'icon' => 'wrench',  'title' => 'Edits & emergency fixes', 'desc' => 'Need a content change, a new section, or hit the white screen of death? Send it over. A real WordPress developer handles it, not a ticket bot.' ),
		array( 'icon' => 'trend',   'title' => 'Monthly performance reports', 'desc' => 'A plain-English report every month: what we updated, what we blocked, uptime, speed scores and backup status. No jargon, no mystery.' ),
		array( 'icon' => 'store',   'title' => 'WooCommerce & store support', 'desc' => 'Stores have more moving parts and more to lose. We keep checkout working, payment gateways current and your catalog fast during peak traffic.' ),
	),

	/* ----- The cost of NOT maintaining (risk framing, different angle) ----- */
	'risks' => array(
		array( 'icon' => 'alert', 'title' => 'Hacked & blacklisted', 'desc' => 'Most WordPress hacks exploit outdated plugins. A breached site can get blacklisted by Google, killing your traffic and your reputation overnight.' ),
		array( 'icon' => 'clock', 'title' => 'Downtime = lost revenue', 'desc' => 'Every hour your site is down is sales, leads and ad spend wasted. Without monitoring, you often find out from an angry customer, not a dashboard.' ),
		array( 'icon' => 'gauge', 'title' => 'Slow site, lower rankings', 'desc' => 'Bloat creeps in over time. Slow pages bleed visitors and quietly drag down your Google rankings while you focus on running the business.' ),
		array( 'icon' => 'lock',  'title' => 'No backup when it counts', 'desc' => 'A failed update or bad plugin can wipe months of work. If your only backup lives on the same host that just crashed, you have no backup at all.' ),
	),

	/* ----- Who it's for ----- */
	'audiences' => array(
		array( 'icon' => 'wrench', 'title' => 'Small business & local services', 'desc' => 'HVAC, legal, home improvement, clinics. Your site brings in leads. It needs to be up, fast and trusted, not a side project you forget about.' ),
		array( 'icon' => 'store',  'title' => 'WooCommerce & online stores', 'desc' => 'Downtime or a broken checkout costs real money by the minute. We keep the cash register open and the store fast under load.' ),
		array( 'icon' => 'users',  'title' => 'Agencies & freelancers', 'desc' => 'White-label care for the sites you build so you can stop firefighting client emergencies. We are the maintenance team behind your brand.' ),
		array( 'icon' => 'trend',  'title' => 'High-traffic & content sites', 'desc' => 'Blogs, media and lead-gen sites where speed and uptime are the business. We keep performance tight as your traffic scales.' ),
	),

	/* ----- Plans (page-specific blurbs, NOT copied from homepage) ----- */
	'plans' => array(
		array(
			'name'     => 'Essential Care',
			'price'    => '59',
			'period'   => '/mo',
			'blurb'    => 'The safety net for small sites that just need to stay online and protected.',
			'popular'  => false,
			'features' => array(
				'Weekly core & plugin updates',
				'Daily off-site backups',
				'24/7 uptime monitoring',
				'Security hardening',
				'Monthly health report',
			),
			'cta'      => 'Start Essential',
		),
		array(
			'name'     => 'Growth',
			'price'    => '129',
			'period'   => '/mo',
			'blurb'    => 'Full maintenance plus speed and developer time for sites that earn their keep.',
			'popular'  => true,
			'features' => array(
				'Everything in Essential',
				'Speed & Core Web Vitals tuning',
				'Advanced security + malware cleanup',
				'Priority support (under 4 hr)',
				'2 hours of edits / dev work monthly',
			),
			'cta'      => 'Start Growth',
		),
		array(
			'name'     => 'Pro / Agency',
			'price'    => '249',
			'period'   => '/mo',
			'blurb'    => 'Hands-on care for stores, high-traffic sites and agencies running many sites.',
			'popular'  => false,
			'features' => array(
				'Everything in Growth',
				'Unlimited small edits',
				'WooCommerce / store support',
				'Dedicated account manager',
				'Staging + white-label reports',
			),
			'cta'      => 'Talk to us',
		),
	),

	'steps' => array(
		array( 'title' => 'Free site audit',  'desc' => 'Send us your URL. We run a full health, security and speed check and tell you exactly what shape your site is in. No charge, no obligation.' ),
		array( 'title' => 'Pick your plan',   'desc' => 'Choose the maintenance package that fits. Month to month, no contracts, change or cancel any time.' ),
		array( 'title' => 'We take over',     'desc' => 'Give us secure access. Within 24 hours we audit, back up, harden and bring everything current.' ),
		array( 'title' => 'You stop worrying','desc' => 'We update, monitor, back up and fix on autopilot. You get a clear report each month and your time back.' ),
	),

	/* ----- Testimonials (fresh, NOT reused from homepage) ----- */
	'testimonials' => array(
		array( 'quote' => 'We tried doing updates ourselves and broke the site twice. Handed it over and have not thought about it since. The monthly report is the only time I remember we even have a website to maintain.', 'name' => 'Priya Nayar', 'role' => 'Owner, Nayar Dental' ),
		array( 'quote' => 'A plugin update took our booking form down on a Friday night. They had it fixed before I even saw the alert. That one save paid for a year of the plan.', 'name' => 'Greg Olsen', 'role' => 'Director, Olsen Roofing' ),
		array( 'quote' => 'As an agency we were drowning in client maintenance. White-labeling it to this team gave us our weekends back and made our retainers more profitable.', 'name' => 'Sara Kim', 'role' => 'Founder, Northlight Studio' ),
	),

	/* ----- FAQ (long-tail, "People Also Ask" style, different from homepage) ----- */
	'faqs' => array(
		array( 'q' => 'What do WordPress website maintenance services include?', 'a' => 'A full maintenance plan covers weekly core, theme and plugin updates, daily off-site backups, 24/7 uptime monitoring, security hardening, malware scanning and removal, speed and Core Web Vitals optimization, and a monthly report. Higher tiers add developer hours, priority support and WooCommerce support.' ),
		array( 'q' => 'How much do WordPress maintenance services cost?', 'a' => 'Plans here start at $59/month for essential care and go up to $249/month for stores and agency-level support. Prices depend on site size, traffic and how much hands-on developer work you need. We also do one-time fixes from $99 if you do not want a monthly plan.' ),
		array( 'q' => 'Is WordPress maintenance really worth it?', 'a' => 'If your site brings in leads or sales, yes. The cost of one hack cleanup, lost ranking from a slow site, or a day of downtime almost always dwarfs a monthly plan. Maintenance is insurance plus performance, not a luxury.' ),
		array( 'q' => 'What happens if I do not maintain my WordPress site?', 'a' => 'Outdated plugins are the number one way WordPress sites get hacked. Over time sites also slow down, accumulate broken features, and risk data loss from a bad update with no backup. Neglect usually stays invisible right up until it becomes an expensive emergency.' ),
		array( 'q' => 'Will updates break my website?', 'a' => 'We take a full backup before every update and test changes before pushing them live on higher plans. If anything ever breaks on our watch, we roll it back the same day at no extra cost. That is the whole point of a managed service.' ),
		array( 'q' => 'Do you maintain WooCommerce and online stores?', 'a' => 'Yes. Stores have more moving parts, so our Pro plan includes WooCommerce support: keeping checkout, payment gateways and extensions current, and keeping the store fast and stable during high-traffic periods.' ),
		array( 'q' => 'Do you work with my hosting provider?', 'a' => 'Yes, we support every major host including Kinsta, WP Engine, Cloudways, SiteGround, Bluehost and others. If your host is the thing holding your site back, we can migrate you somewhere better as part of onboarding.' ),
		array( 'q' => 'Is there a contract, and how do I get started?', 'a' => 'No lock-in contracts. Everything is month to month and you can cancel any time. To start, send us your URL for a free site audit, pick a plan, and we take over within 24 hours.' ),
	),
);

/* =========================================================================
   2. SEO — detect existing SEO plugin; only add tags if none is present.
   ========================================================================= */
$has_seo_plugin = (
	defined( 'WPSEO_VERSION' )      // Yoast
	|| class_exists( 'RankMath' )   // Rank Math
	|| defined( 'AIOSEO_VERSION' )  // All in One SEO
	|| function_exists( 'aioseo' )
	|| defined( 'SEOPRESS_VERSION' )// SEOPress
);

/* -------------------------------------------------------------------------
   ACF (free) — pull editable values from the WP admin if they're filled in.
   Every field falls back to the $cfg defaults above when it's empty, or when
   ACF isn't active, so the page can never break. Fields start empty, which
   means the page looks identical until you type something in wp-admin.
   ------------------------------------------------------------------------- */
$hero_heading = 'WordPress Website <em>Maintenance Services</em> done for you';
$hero_lead    = 'Keep your WordPress site secure, fast and online without lifting a finger. Real developers handle updates, security, backups, speed and fixes, and jump in the moment anything breaks. No contracts, cancel anytime.';

if ( function_exists( 'get_field' ) ) {

	// Simple fields that map straight onto $cfg keys.
	$acf_simple = array( 'brand', 'phone', 'phone_raw', 'email', 'book_url', 'form_shortcode', 'rating', 'reviews', 'sites_managed', 'response_time', 'seo_title', 'seo_desc' );
	foreach ( $acf_simple as $f ) {
		$v = get_field( $f );
		if ( $v !== null && $v !== '' ) { $cfg[ $f ] = $v; }
	}

	// Plan prices (index order matches $cfg['plans']: 0 Essential, 1 Growth, 2 Pro).
	$acf_prices = array( 0 => 'essential_price', 1 => 'growth_price', 2 => 'pro_price' );
	foreach ( $acf_prices as $i => $f ) {
		$v = get_field( $f );
		if ( $v !== null && $v !== '' && isset( $cfg['plans'][ $i ] ) ) { $cfg['plans'][ $i ]['price'] = $v; }
	}

	// Hero copy.
	$hh = get_field( 'hero_heading' );
	$hl = get_field( 'hero_lead' );
	if ( $hh !== null && $hh !== '' ) { $hero_heading = esc_html( $hh ); }
	if ( $hl !== null && $hl !== '' ) { $hero_lead    = esc_html( $hl ); }
}

if ( ! $has_seo_plugin ) {
	add_filter( 'document_title_parts', function( $parts ) use ( $cfg ) {
		$parts['title'] = $cfg['seo_title'];
		unset( $parts['tagline'], $parts['site'] );
		return $parts;
	}, 99 );
}

$canonical = '';
if ( function_exists( 'get_permalink' ) ) {
	$canonical = get_permalink( get_queried_object_id() );
}
if ( ! $canonical ) {
	$canonical = home_url( '/wordpress-website-maintenance-services/' );
}

/* helper for inline SVG icons (guarded so it never collides with front-page.php) */
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
			'phone'   => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>',
			'arrow'   => '<path d="M5 12h14M13 6l6 6-6 6"/>',
			'alert'   => '<path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><path d="M12 9v4M12 17h.01"/>',
			'clock'   => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
			'trend'   => '<path d="M22 7 13.5 15.5l-5-5L2 17"/><path d="M16 7h6v6"/>',
			'lock'    => '<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
			'users'   => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
			'store'   => '<path d="M3 9h18l-1-5H4L3 9z"/><path d="M5 9v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9"/>',
			'mail'    => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/>',
		);
		$p = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
	}
}

$book_link = ! empty( $cfg['book_url'] ) ? esc_url( $cfg['book_url'] ) : '#contact';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! $has_seo_plugin ) : ?>
	<meta name="description" content="<?php echo esc_attr( $cfg['seo_desc'] ); ?>">
	<meta name="robots" content="index, follow, max-image-preview:large">
	<link rel="canonical" href="<?php echo esc_url( $canonical ); ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo esc_attr( $cfg['seo_title'] ); ?>">
	<meta property="og:description" content="<?php echo esc_attr( $cfg['seo_desc'] ); ?>">
	<meta property="og:url" content="<?php echo esc_url( $canonical ); ?>">
	<meta property="og:site_name" content="<?php echo esc_attr( $cfg['brand'] ); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo esc_attr( $cfg['seo_title'] ); ?>">
	<meta name="twitter:description" content="<?php echo esc_attr( $cfg['seo_desc'] ); ?>">
	<?php endif; ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
	:root{
		--bg:#FAFAF6; --surface:#FFFFFF; --ink:#10141A; --muted:#5A6573;
		--line:#E7E6DF; --accent:#0E9F6E; --accent-deep:#0B7E58; --accent-soft:#E6F6EF;
		--warn:#E0533D; --warn-soft:#FBE7E2; --shadow:0 1px 2px rgba(16,20,26,.04),0 12px 40px rgba(16,20,26,.06);
		--radius:16px; --maxw:1140px;
		--display:'Bricolage Grotesque',Georgia,serif; --body:'Hanken Grotesk',system-ui,sans-serif;
	}
	*{box-sizing:border-box}
	html{scroll-behavior:smooth}
	body.fp{margin:0;background:var(--bg);color:var(--ink);font-family:var(--body);font-size:17px;line-height:1.6;-webkit-font-smoothing:antialiased}
	.fp .wrap{max-width:var(--maxw);margin:0 auto;padding:0 22px}
	.fp h1,.fp h2,.fp h3{font-family:var(--display);font-weight:700;line-height:1.07;letter-spacing:-.02em;margin:0}
	.fp h1{font-size:clamp(2.3rem,5.4vw,3.7rem)}
	.fp h2{font-size:clamp(1.8rem,3.6vw,2.7rem)}
	.fp h3{font-size:1.18rem;letter-spacing:-.01em}
	.fp p{margin:0}
	.fp a{color:inherit;text-decoration:none}
	.fp section{padding:84px 0}
	.fp .eyebrow{font-size:.82rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--accent-deep);display:inline-flex;align-items:center;gap:8px}
	.fp .eyebrow::before{content:"";width:22px;height:2px;background:var(--accent)}
	.fp .lead{color:var(--muted);font-size:1.12rem;max-width:54ch}
	.fp svg{width:22px;height:22px}

	/* buttons */
	.fp .btn{display:inline-flex;align-items:center;gap:9px;font-family:var(--body);font-weight:700;font-size:1rem;padding:15px 26px;border-radius:12px;cursor:pointer;border:1px solid transparent;transition:transform .15s ease,box-shadow .15s ease,background .15s ease}
	.fp .btn svg{width:18px;height:18px}
	.fp .btn-primary{background:var(--accent);color:#fff;box-shadow:0 8px 22px rgba(14,159,110,.28)}
	.fp .btn-primary:hover{background:var(--accent-deep);transform:translateY(-2px);box-shadow:0 12px 28px rgba(14,159,110,.34)}
	.fp .btn-ghost{background:transparent;color:var(--ink);border-color:var(--line)}
	.fp .btn-ghost:hover{border-color:var(--ink);transform:translateY(-2px)}
	.fp .btn-dark{background:var(--ink);color:#fff}
	.fp .btn-dark:hover{transform:translateY(-2px)}

	/* header */
	.fp .site-head{position:sticky;top:0;z-index:50;background:rgba(250,250,246,.82);backdrop-filter:saturate(140%) blur(12px);border-bottom:1px solid var(--line)}
	.fp .head-inner{display:flex;align-items:center;justify-content:space-between;height:70px}
	.fp .logo{font-family:var(--display);font-weight:800;font-size:1.18rem;letter-spacing:-.02em;display:flex;align-items:center;gap:9px}
	.fp .logo .dot{width:11px;height:11px;border-radius:50%;background:var(--accent);box-shadow:0 0 0 4px var(--accent-soft);animation:pulse 2.4s ease-in-out infinite}
	.fp .head-actions{display:flex;align-items:center;gap:18px}
	.fp .head-phone{font-weight:700;display:inline-flex;align-items:center;gap:8px;color:var(--ink)}
	.fp .head-phone svg{width:17px;height:17px;color:var(--accent-deep)}

	/* breadcrumb */
	.fp .crumbs{font-size:.88rem;color:var(--muted);padding:18px 0 0}
	.fp .crumbs a{color:var(--accent-deep);font-weight:600}
	.fp .crumbs .sep{margin:0 8px;opacity:.5}

	/* hero */
	.fp .hero{padding:34px 0 76px;position:relative;overflow:hidden}
	.fp .hero::before{content:"";position:absolute;inset:0;background:
		radial-gradient(60% 50% at 78% 0%,rgba(14,159,110,.10),transparent 60%),
		radial-gradient(50% 40% at 8% 30%,rgba(14,159,110,.06),transparent 60%);pointer-events:none}
	.fp .hero-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:54px;align-items:center;position:relative}
	.fp .hero h1{margin:18px 0 0}
	.fp .hero h1 em{font-style:normal;color:var(--accent-deep)}
	.fp .hero .lead{margin-top:20px;font-size:1.18rem}
	.fp .hero-cta{display:flex;flex-wrap:wrap;gap:14px;margin-top:30px}
	.fp .hero-trust{display:flex;flex-wrap:wrap;gap:22px;margin-top:30px;align-items:center;color:var(--muted);font-size:.95rem;font-weight:600}
	.fp .stars{color:#E0A422;letter-spacing:2px}
	.fp .hero-trust .sep{width:1px;height:18px;background:var(--line)}

	/* included card (hero right) */
	.fp .health{background:var(--surface);border:1px solid var(--line);border-radius:20px;box-shadow:var(--shadow);padding:22px;animation:rise .7s ease both}
	.fp .health-top{display:flex;align-items:center;justify-content:space-between;padding-bottom:14px;border-bottom:1px solid var(--line)}
	.fp .health-top b{font-family:var(--display);font-size:1.05rem}
	.fp .live{font-size:.78rem;font-weight:700;color:var(--accent-deep);display:inline-flex;align-items:center;gap:7px}
	.fp .live .dot{width:8px;height:8px;border-radius:50%;background:var(--accent);animation:pulse 1.8s infinite}
	.fp .health-row{display:flex;align-items:center;justify-content:space-between;padding:13px 0;border-bottom:1px dashed var(--line);font-weight:600}
	.fp .health-row:last-child{border-bottom:0}
	.fp .health-row .ok{font-size:.85rem;font-weight:700;color:var(--accent-deep);background:var(--accent-soft);padding:4px 11px;border-radius:99px;display:inline-flex;align-items:center;gap:6px}
	.fp .health-row .ok svg{width:13px;height:13px}
	.fp .health-foot{margin-top:14px;font-size:.84rem;color:var(--muted);text-align:center}

	/* stat bar */
	.fp .stats{background:var(--ink);color:#fff;padding:40px 0}
	.fp .stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center}
	.fp .stat .n{font-family:var(--display);font-weight:800;font-size:2.2rem;color:#fff}
	.fp .stat .l{color:#9aa6b2;font-size:.92rem;font-weight:600;margin-top:4px}

	/* generic section heads */
	.fp .center{text-align:center;max-width:680px;margin:0 auto 50px}
	.fp .center .lead{margin:14px auto 0}

	/* intro prose + table of contents */
	.fp .intro{padding-bottom:30px}
	.fp .prose{max-width:820px}
	.fp .prose p{margin:0 0 18px;font-size:1.08rem}
	.fp .prose p.muted{color:var(--muted);font-size:1.04rem}
	.fp .prose strong{font-weight:700}
	.fp .toc{display:flex;flex-wrap:wrap;gap:10px;margin-top:30px}
	.fp .toc a{font-size:.9rem;font-weight:600;color:var(--accent-deep);background:var(--accent-soft);padding:9px 15px;border-radius:99px;border:1px solid #cdeede;transition:background .15s}
	.fp .toc a:hover{background:#d4f0e4}

	/* card grids */
	.fp .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
	.fp .card{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:26px;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
	.fp .card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:#d7d6cd}
	.fp .card .ic{width:46px;height:46px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:16px}
	.fp .card.risk .ic{background:var(--warn-soft);color:var(--warn)}
	.fp .card h3{margin-bottom:8px}
	.fp .card p{color:var(--muted);font-size:.98rem}

	/* who it's for */
	.fp .use-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}
	.fp .use{display:flex;gap:16px;align-items:flex-start;background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:24px}
	.fp .use .ic{flex:0 0 46px;width:46px;height:46px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center}
	.fp .use h3{font-size:1.1rem;margin-bottom:6px}
	.fp .use p{color:var(--muted);font-size:.96rem}

	/* pricing */
	.fp .pricing{background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)}
	.fp .plans{display:grid;grid-template-columns:repeat(3,1fr);gap:22px;align-items:start}
	.fp .plan{background:var(--bg);border:1px solid var(--line);border-radius:18px;padding:30px 26px;position:relative;display:flex;flex-direction:column}
	.fp .plan.popular{background:var(--ink);color:#fff;border-color:var(--ink);box-shadow:0 24px 50px rgba(16,20,26,.18);transform:translateY(-8px)}
	.fp .plan.popular .plan-blurb,.fp .plan.popular .feat{color:#c7d0d9}
	.fp .badge{position:absolute;top:-13px;left:50%;transform:translateX(-50%);background:var(--accent);color:#fff;font-size:.74rem;font-weight:800;letter-spacing:.06em;text-transform:uppercase;padding:6px 14px;border-radius:99px;white-space:nowrap}
	.fp .plan h3{font-size:1.25rem}
	.fp .plan-blurb{color:var(--muted);font-size:.92rem;margin:8px 0 18px;min-height:42px}
	.fp .price{font-family:var(--display);font-weight:800;font-size:2.6rem;line-height:1}
	.fp .price small{font-family:var(--body);font-size:1rem;font-weight:600;color:var(--muted)}
	.fp .plan.popular .price small{color:#9aa6b2}
	.fp .feat-list{list-style:none;padding:0;margin:22px 0 26px;display:grid;gap:11px}
	.fp .feat{display:flex;gap:10px;align-items:flex-start;font-size:.96rem;font-weight:500}
	.fp .feat svg{width:18px;height:18px;color:var(--accent);flex:0 0 18px;margin-top:3px}
	.fp .plan.popular .feat svg{color:#3fd9a3}
	.fp .plan .btn{width:100%;justify-content:center;margin-top:auto}
	.fp .pricing-note{text-align:center;color:var(--muted);margin-top:28px;font-size:.96rem}
	.fp .pricing-note a{color:var(--accent-deep);font-weight:700;text-decoration:underline}

	/* steps */
	.fp .steps{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;counter-reset:s}
	.fp .step{position:relative;padding:26px;border:1px solid var(--line);border-radius:var(--radius);background:var(--surface)}
	.fp .step::before{counter-increment:s;content:"0" counter(s);font-family:var(--display);font-weight:800;font-size:2.2rem;color:var(--accent);opacity:.25;line-height:1}
	.fp .step h3{margin:10px 0 8px;font-size:1.1rem}
	.fp .step p{color:var(--muted);font-size:.96rem}

	/* compare */
	.fp .compare{background:var(--bg)}
	.fp .table-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:var(--radius);background:var(--surface)}
	.fp table{width:100%;border-collapse:collapse;min-width:620px}
	.fp th,.fp td{padding:16px 18px;text-align:left;border-bottom:1px solid var(--line);font-size:.97rem}
	.fp thead th{font-family:var(--display);font-size:1rem}
	.fp thead th:first-child{font-family:var(--body);font-weight:600;color:var(--muted)}
	.fp .col-us{background:var(--accent-soft)}
	.fp td.col-us{font-weight:700;color:var(--accent-deep)}
	.fp tbody tr:last-child td{border-bottom:0}
	.fp .x{color:var(--warn);font-weight:700}

	/* testimonials */
	.fp .quotes{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .quote{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:26px}
	.fp .quote .stars{font-size:.95rem;margin-bottom:12px;display:block}
	.fp .quote p{font-size:1.02rem;line-height:1.55}
	.fp .quote .who{margin-top:18px;font-size:.9rem}
	.fp .quote .who b{display:block}
	.fp .quote .who span{color:var(--muted)}

	/* guarantee */
	.fp .guarantee{background:var(--ink);color:#fff;text-align:center}
	.fp .guarantee h2{color:#fff;max-width:18ch;margin:0 auto}
	.fp .guarantee p{color:#aeb8c2;max-width:56ch;margin:16px auto 0}

	/* faq */
	.fp details{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:0 22px;margin-bottom:12px;transition:border-color .15s}
	.fp details[open]{border-color:#d2d1c7}
	.fp summary{list-style:none;cursor:pointer;font-family:var(--display);font-weight:700;font-size:1.08rem;padding:20px 0;display:flex;justify-content:space-between;align-items:center;gap:16px}
	.fp summary::-webkit-details-marker{display:none}
	.fp summary .pm{flex:0 0 auto;width:22px;height:22px;position:relative}
	.fp summary .pm::before,.fp summary .pm::after{content:"";position:absolute;background:var(--accent-deep);border-radius:2px;transition:transform .2s}
	.fp summary .pm::before{top:10px;left:3px;width:16px;height:2px}
	.fp summary .pm::after{top:3px;left:10px;width:2px;height:16px}
	.fp details[open] summary .pm::after{transform:rotate(90deg);opacity:0}
	.fp details p{color:var(--muted);padding:0 0 22px;font-size:1rem}
	.fp .faq-wrap{max-width:820px;margin:0 auto}

	/* contact */
	.fp .contact{background:var(--bg)}
	.fp .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
	.fp .contact h2{margin-bottom:14px}
	.fp .contact .lead{margin-bottom:24px}
	.fp .contact-list{list-style:none;padding:0;margin:0;display:grid;gap:14px}
	.fp .contact-list li{display:flex;gap:12px;align-items:center;font-weight:600}
	.fp .contact-list svg{color:var(--accent-deep)}
	.fp .form-card{background:var(--surface);border:1px solid var(--line);border-radius:18px;padding:30px;box-shadow:var(--shadow)}
	.fp .form-card label{display:block;font-weight:600;font-size:.9rem;margin-bottom:6px}
	.fp .form-card input,.fp .form-card textarea{width:100%;padding:13px 15px;border:1px solid var(--line);border-radius:10px;font-family:var(--body);font-size:1rem;margin-bottom:16px;background:var(--bg)}
	.fp .form-card input:focus,.fp .form-card textarea:focus{outline:2px solid var(--accent);border-color:var(--accent)}
	.fp .form-card .btn{width:100%;justify-content:center}

	/* footer */
	.fp .site-foot{background:var(--ink);color:#9aa6b2;padding:50px 0 34px;font-size:.94rem}
	.fp .foot-top{display:flex;justify-content:space-between;flex-wrap:wrap;gap:24px;align-items:center;padding-bottom:26px;border-bottom:1px solid rgba(255,255,255,.1)}
	.fp .foot-logo{font-family:var(--display);font-weight:800;font-size:1.15rem;color:#fff}
	.fp .foot-bottom{padding-top:22px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px}
	.fp .foot-bottom a{color:#cdd6df}

	/* mobile sticky CTA */
	.fp .mobile-bar{display:none;position:fixed;bottom:0;left:0;right:0;z-index:60;background:#fff;border-top:1px solid var(--line);padding:10px 14px;gap:10px;box-shadow:0 -6px 24px rgba(16,20,26,.08)}
	.fp .mobile-bar .btn{flex:1;justify-content:center;padding:14px}

	@keyframes pulse{0%,100%{box-shadow:0 0 0 0 rgba(14,159,110,.5)}50%{box-shadow:0 0 0 6px rgba(14,159,110,0)}}
	@keyframes rise{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:none}}

	@media(max-width:980px){
		.fp .grid-4{grid-template-columns:repeat(2,1fr)}
		.fp .steps{grid-template-columns:repeat(2,1fr)}
	}
	@media(max-width:900px){
		.fp .hero-grid,.fp .grid-3,.fp .plans,.fp .quotes,.fp .stats-grid,.fp .contact-grid,.fp .use-grid{grid-template-columns:1fr}
		.fp .stats-grid{grid-template-columns:repeat(2,1fr);gap:30px}
		.fp .plan.popular{transform:none}
		.fp section{padding:60px 0}
		.fp .head-phone{display:none}
		.fp .mobile-bar{display:flex}
		body.fp{padding-bottom:76px}
		.fp .hero .health{margin-top:8px}
	}
	@media(max-width:520px){
		.fp .hero-cta .btn{width:100%;justify-content:center}
		.fp .stats-grid,.fp .grid-4,.fp .steps{grid-template-columns:repeat(2,1fr)}
	}
	</style>
</head>

<body <?php body_class( 'fp' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- HEADER -->
<header class="site-head">
	<div class="wrap head-inner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="dot"></span><?php echo esc_html( $cfg['brand'] ); ?>
		</a>
		<div class="head-actions">
			<a class="head-phone" href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>">
				<?php echo fp_icon( 'phone' ); ?><?php echo esc_html( $cfg['phone'] ); ?>
			</a>
			<a class="btn btn-primary" href="#pricing">See Plans <?php echo fp_icon( 'arrow' ); ?></a>
		</div>
	</div>
</header>

<!-- BREADCRUMB -->
<div class="wrap">
	<nav class="crumbs" aria-label="Breadcrumb">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
		<span class="sep">/</span>
		<span>WordPress Website Maintenance Services</span>
	</nav>
</div>

<!-- HERO -->
<section class="hero">
	<div class="wrap hero-grid">
		<div>
			<span class="eyebrow">Managed WordPress maintenance, USA</span>
			<h1><?php echo $hero_heading; ?></h1>
			<p class="lead"><?php echo $hero_lead; ?></p>
			<div class="hero-cta">
				<a class="btn btn-primary" href="#pricing">See Plans &amp; Pricing <?php echo fp_icon( 'arrow' ); ?></a>
				<a class="btn btn-ghost" href="#contact"><?php echo fp_icon( 'check' ); ?>Get a free site audit</a>
			</div>
			<div class="hero-trust">
				<span><span class="stars">★★★★★</span> <?php echo esc_html( $cfg['rating'] ); ?> from <?php echo esc_html( $cfg['reviews'] ); ?> reviews</span>
				<span class="sep"></span>
				<span><?php echo esc_html( $cfg['sites_managed'] ); ?> sites managed</span>
				<span class="sep"></span>
				<span>Replies <?php echo esc_html( $cfg['response_time'] ); ?></span>
			</div>
		</div>

		<div class="health" aria-label="What every maintenance plan includes">
			<div class="health-top">
				<b>Every plan includes</b>
				<span class="live"><span class="dot"></span>Always on</span>
			</div>
			<?php
			$incl_rows = array( 'Weekly updates', 'Security & malware', 'Daily backups', 'Speed tuning', 'Uptime monitoring', 'Real developer support' );
			foreach ( $incl_rows as $r ) :
			?>
			<div class="health-row">
				<span><?php echo esc_html( $r ); ?></span>
				<span class="ok"><?php echo fp_icon( 'check' ); ?> Included</span>
			</div>
			<?php endforeach; ?>
			<div class="health-foot">Everything you need to keep WordPress healthy, in one plan.</div>
		</div>
	</div>
</section>

<!-- STATS -->
<section class="stats" style="padding:40px 0">
	<div class="wrap stats-grid">
		<?php foreach ( $cfg['stats'] as $s ) : ?>
			<div class="stat"><div class="n"><?php echo esc_html( $s['num'] ); ?></div><div class="l"><?php echo esc_html( $s['label'] ); ?></div></div>
		<?php endforeach; ?>
	</div>
</section>

<!-- INTRO / TOPICAL DEPTH (keyword in first 100 words) -->
<section class="intro">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">The short version</span>
			<h2 style="margin:14px 0 22px">What are WordPress website maintenance services?</h2>
			<p><strong>WordPress website maintenance services</strong> are an ongoing, done-for-you plan that keeps your site updated, secure, backed up, fast and working, so you never have to think about the technical side of running it. Instead of juggling plugin updates, security scares and the occasional white screen of death yourself, a dedicated team handles all of it on a schedule and fixes problems the moment they appear.</p>
			<p class="muted">WordPress powers a huge share of the web, which also makes it the most attacked platform online. Plugins and themes update constantly, and a single outdated component can hand a hacker the keys or take your site down. Maintenance is the difference between a site that quietly earns for you and one that becomes an expensive emergency at the worst possible time.</p>
			<p class="muted">A proper plan covers six core jobs: <strong>updates, security, backups, speed, monitoring and fixes</strong>. Below is exactly what that looks like, who needs it, what it costs, and how to get started.</p>
			<div class="toc">
				<a href="#included">What's included</a>
				<a href="#why">Why it matters</a>
				<a href="#who">Who it's for</a>
				<a href="#pricing">Pricing</a>
				<a href="#process">How it works</a>
				<a href="#compare">Compare</a>
				<a href="#faq">FAQ</a>
			</div>
		</div>
	</div>
</section>

<!-- INCLUDED -->
<section id="included">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">What's included</span>
			<h2 style="margin-top:14px">Everything that keeps WordPress healthy, in one plan</h2>
			<p class="lead">No stitching together plugins, hosts and freelancers. One team owns the whole maintenance job so nothing falls through the cracks.</p>
		</div>
		<div class="grid-4">
			<?php foreach ( $cfg['included'] as $sv ) : ?>
			<div class="card">
				<div class="ic"><?php echo fp_icon( $sv['icon'] ); ?></div>
				<h3><?php echo esc_html( $sv['title'] ); ?></h3>
				<p><?php echo esc_html( $sv['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- WHY IT MATTERS (risk framing) -->
<section id="why" class="compare">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Why it matters</span>
			<h2 style="margin-top:14px">What happens when WordPress goes unmaintained</h2>
			<p class="lead">Neglect stays invisible right up until it costs you. Here is what you are actually protecting against.</p>
		</div>
		<div class="grid-4">
			<?php foreach ( $cfg['risks'] as $rk ) : ?>
			<div class="card risk">
				<div class="ic"><?php echo fp_icon( $rk['icon'] ); ?></div>
				<h3><?php echo esc_html( $rk['title'] ); ?></h3>
				<p><?php echo esc_html( $rk['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- WHO IT'S FOR -->
<section id="who">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Who it's for</span>
			<h2 style="margin-top:14px">Built for sites that actually matter to your business</h2>
		</div>
		<div class="use-grid">
			<?php foreach ( $cfg['audiences'] as $au ) : ?>
			<div class="use">
				<div class="ic"><?php echo fp_icon( $au['icon'] ); ?></div>
				<div>
					<h3><?php echo esc_html( $au['title'] ); ?></h3>
					<p><?php echo esc_html( $au['desc'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- PRICING -->
<section id="pricing" class="pricing">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Simple, flat pricing</span>
			<h2 style="margin-top:14px">WordPress maintenance plans &amp; pricing</h2>
			<p class="lead">No hidden fees, no lock-in. Every plan puts a real WordPress expert on your side, month to month.</p>
		</div>
		<div class="plans">
			<?php foreach ( $cfg['plans'] as $p ) : ?>
			<div class="plan<?php echo $p['popular'] ? ' popular' : ''; ?>">
				<?php if ( $p['popular'] ) : ?><span class="badge">Most popular</span><?php endif; ?>
				<h3><?php echo esc_html( $p['name'] ); ?></h3>
				<p class="plan-blurb"><?php echo esc_html( $p['blurb'] ); ?></p>
				<div class="price">$<?php echo esc_html( $p['price'] ); ?><small><?php echo esc_html( $p['period'] ); ?></small></div>
				<ul class="feat-list">
					<?php foreach ( $p['features'] as $f ) : ?>
						<li class="feat"><?php echo fp_icon( 'check' ); ?><span><?php echo esc_html( $f ); ?></span></li>
					<?php endforeach; ?>
				</ul>
				<a class="btn <?php echo $p['popular'] ? 'btn-primary' : 'btn-dark'; ?>" href="<?php echo esc_attr( $book_link ); ?>"><?php echo esc_html( $p['cta'] ); ?></a>
			</div>
			<?php endforeach; ?>
		</div>
		<p class="pricing-note">Just need one thing fixed? We do <a href="<?php echo esc_attr( $book_link ); ?>">one-time WordPress fixes from $99</a>, no plan required.</p>
	</div>
</section>

<!-- PROCESS -->
<section id="process">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">How it works</span>
			<h2 style="margin-top:14px">Fully managed in under 24 hours</h2>
		</div>
		<div class="steps">
			<?php foreach ( $cfg['steps'] as $st ) : ?>
			<div class="step">
				<h3><?php echo esc_html( $st['title'] ); ?></h3>
				<p><?php echo esc_html( $st['desc'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- COMPARE -->
<section id="compare" class="compare">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Compare</span>
			<h2 style="margin-top:14px">Managed service vs doing it yourself</h2>
		</div>
		<div class="table-wrap">
			<table>
				<thead>
					<tr><th>What you get</th><th class="col-us"><?php echo esc_html( $cfg['brand'] ); ?></th><th>DIY</th><th>Cheap freelancer</th></tr>
				</thead>
				<tbody>
					<tr><td>24/7 uptime monitoring</td><td class="col-us">Included</td><td class="x">Manual, if ever</td><td class="x">Rarely</td></tr>
					<tr><td>Daily off-site backups</td><td class="col-us">Included</td><td>Plugin needed</td><td>Extra cost</td></tr>
					<tr><td>Tested weekly updates</td><td class="col-us">Yes</td><td>Time sink</td><td>Inconsistent</td></tr>
					<tr><td>Same-day malware cleanup</td><td class="col-us">Yes</td><td class="x">Risky DIY</td><td>Per incident</td></tr>
					<tr><td>Speed &amp; Core Web Vitals</td><td class="col-us">Every plan</td><td class="x">Complex</td><td>Extra cost</td></tr>
					<tr><td>Real developer on call</td><td class="col-us">Yes</td><td class="x">It's just you</td><td>When available</td></tr>
					<tr><td>Predictable monthly cost</td><td class="col-us">Flat rate</td><td>Hidden time cost</td><td>Variable</td></tr>
					<tr><td>Roll-back guarantee</td><td class="col-us">Yes, same day</td><td class="x">None</td><td class="x">None</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- TESTIMONIALS -->
<section>
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">What clients say</span>
			<h2 style="margin-top:14px">Owners who stopped worrying about their site</h2>
		</div>
		<div class="quotes">
			<?php foreach ( $cfg['testimonials'] as $t ) : ?>
			<div class="quote">
				<span class="stars">★★★★★</span>
				<p>&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;</p>
				<div class="who"><b><?php echo esc_html( $t['name'] ); ?></b><span><?php echo esc_html( $t['role'] ); ?></span></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- GUARANTEE -->
<section class="guarantee">
	<div class="wrap">
		<span class="eyebrow" style="color:#3fd9a3">Our promise</span>
		<h2 style="margin-top:14px">If we break it, we fix it. Same day. No charge.</h2>
		<p>Every update is backed up first and tested. If anything ever goes wrong on our watch, we roll it back and make it right at no cost. That is the deal, every plan, every time.</p>
		<div style="margin-top:26px"><a class="btn btn-primary" href="#pricing">Get protected <?php echo fp_icon( 'arrow' ); ?></a></div>
	</div>
</section>

<!-- FAQ -->
<section id="faq">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">FAQ</span>
			<h2 style="margin-top:14px">WordPress maintenance, your questions answered</h2>
		</div>
		<div class="faq-wrap">
			<?php foreach ( $cfg['faqs'] as $fq ) : ?>
			<details>
				<summary><?php echo esc_html( $fq['q'] ); ?><span class="pm"></span></summary>
				<p><?php echo esc_html( $fq['a'] ); ?></p>
			</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- CONTACT / FINAL CTA -->
<section id="contact" class="contact">
	<div class="wrap contact-grid">
		<div>
			<span class="eyebrow">Get started</span>
			<h2>Get your free WordPress site audit</h2>
			<p class="lead">Send us your URL. We will reply <?php echo esc_html( $cfg['response_time'] ); ?> with a full health, security and speed check, plus the right plan, or fix what is broken right now.</p>
			<ul class="contact-list">
				<li><?php echo fp_icon( 'phone' ); ?><a href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo esc_html( $cfg['phone'] ); ?></a></li>
				<li><?php echo fp_icon( 'mail' ); ?><a href="mailto:<?php echo esc_attr( $cfg['email'] ); ?>"><?php echo esc_html( $cfg['email'] ); ?></a></li>
				<li><?php echo fp_icon( 'check' ); ?>No contracts. Cancel anytime.</li>
			</ul>
		</div>
		<div class="form-card">
			<?php
			if ( ! empty( $cfg['form_shortcode'] ) ) {
				echo do_shortcode( $cfg['form_shortcode'] );
			} else {
				?>
				<form action="#" method="post" onsubmit="return false;">
					<label for="fp-name">Your name</label>
					<input id="fp-name" type="text" name="name" placeholder="Jane Smith" required>
					<label for="fp-email">Email</label>
					<input id="fp-email" type="email" name="email" placeholder="jane@business.com" required>
					<label for="fp-url">Website URL</label>
					<input id="fp-url" type="url" name="website" placeholder="https://yoursite.com" required>
					<label for="fp-msg">What do you need?</label>
					<textarea id="fp-msg" name="message" rows="3" placeholder="A maintenance plan, a one-time fix, a free audit..."></textarea>
					<button class="btn btn-primary" type="submit">Get my free audit <?php echo fp_icon( 'arrow' ); ?></button>
				</form>
				<p style="font-size:.82rem;color:var(--muted);margin-top:10px">Demo form. Paste a real form shortcode into <code>$cfg['form_shortcode']</code> to capture leads.</p>
				<?php
			}
			?>
		</div>
	</div>
</section>

<!-- FOOTER -->
<footer class="site-foot">
	<div class="wrap">
		<div class="foot-top">
			<span class="foot-logo"><?php echo esc_html( $cfg['brand'] ); ?></span>
			<a class="btn btn-primary" href="#pricing">See Plans <?php echo fp_icon( 'arrow' ); ?></a>
		</div>
		<div class="foot-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( $cfg['brand'] ); ?>. All rights reserved.</span>
			<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;·&nbsp; <a href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo esc_html( $cfg['phone'] ); ?></a></span>
		</div>
	</div>
</footer>

<!-- MOBILE STICKY CTA -->
<div class="mobile-bar">
	<a class="btn btn-ghost" href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo fp_icon( 'phone' ); ?>Call</a>
	<a class="btn btn-primary" href="#pricing">See Plans</a>
</div>

<!-- SEO: JSON-LD structured data (Service + Offers + FAQ + Breadcrumb + Rating) -->
<script type="application/ld+json">
<?php
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type'       => 'Service',
			'serviceType' => 'WordPress Website Maintenance Services',
			'name'        => 'WordPress Website Maintenance Services',
			'url'         => $canonical,
			'description' => $cfg['seo_desc'],
			'provider'    => array(
				'@type'     => 'ProfessionalService',
				'name'      => $cfg['brand'],
				'url'       => home_url( '/' ),
				'telephone' => $cfg['phone_raw'],
				'email'     => $cfg['email'],
			),
			'areaServed'  => array( '@type' => 'Country', 'name' => 'United States' ),
			'aggregateRating' => array(
				'@type'       => 'AggregateRating',
				'ratingValue' => $cfg['rating'],
				'reviewCount' => preg_replace( '/[^0-9]/', '', $cfg['reviews'] ),
			),
			'hasOfferCatalog' => array(
				'@type' => 'OfferCatalog',
				'name'  => 'WordPress Maintenance Plans',
				'itemListElement' => array_map( function( $p ) {
					return array(
						'@type'     => 'Offer',
						'name'      => $p['name'],
						'price'     => $p['price'],
						'priceCurrency' => 'USD',
						'description'   => $p['blurb'],
					);
				}, $cfg['plans'] ),
			),
		),
		array(
			'@type' => 'BreadcrumbList',
			'itemListElement' => array(
				array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
				array( '@type' => 'ListItem', 'position' => 2, 'name' => 'WordPress Website Maintenance Services', 'item' => $canonical ),
			),
		),
		array(
			'@type'      => 'FAQPage',
			'mainEntity' => array_map( function( $fq ) {
				return array(
					'@type'          => 'Question',
					'name'           => $fq['q'],
					'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $fq['a'] ),
				);
			}, $cfg['faqs'] ),
		),
	),
);
echo wp_json_encode( $ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
?>
</script>

<?php wp_footer(); ?>
</body>
</html>
