<?php
/**
 * front-page.php — WP Website Maintenance Packages (SEO Homepage v2)
 * ---------------------------------------------------------------------------
 * Target URL:   https://wpwebsitemaintenancepackages.com/
 * Primary kw:   website maintenance packages  (cluster ~7,900/mo US, KD~1)
 * Also covers:  wordpress website maintenance packages, monthly website
 *               maintenance packages, website maintenance plans, care plans
 *
 * Built from live SERP analysis (Aug 2026): ranking pages for these terms are
 * HYBRID pages — service + buyer's-guide depth (what's included, market
 * pricing, how to choose, FAQ). This page follows that winning shape:
 * conversion blocks up top, ~6,000+ words of genuine depth underneath.
 *
 * DEPLOY: replace your existing front-page.php in the active theme folder.
 * Settings > Reading must point "Your homepage displays" at a static page.
 *
 * EDITING: everything repeatable lives in $cfg below. If ACF is active and
 * the same field names are filled (brand, phone, prices...), those values
 * override $cfg automatically — same system as your service page.
 *
 * SCHEMA NOTE: AggregateRating is OFF by default ($cfg['reviews_are_real']).
 * Do not switch it on until the rating/review numbers are real. Fake review
 * schema is a manual-action risk.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* =========================================================================
   1. CONFIG
   ========================================================================= */
$cfg = array(

	'brand'        => 'WP Maintenance Packages',
	'topbar'       => true,   // slim value-prop strip above the header. false to hide.
	'topbar_text'  => '✅ Git deploy test — this text was pushed from GitHub · Free site audit · No contracts',
	'phone'        => '+1 (555) 010-2030',
	'phone_raw'    => '+15550102030',
	'email'        => 'hello@wpwebsitemaintenancepackages.com',
	'form_shortcode' => '[fluentform id="3"]',
	'book_url'       => '',

	'rating'           => '4.9',
	'reviews'          => '120+',
	'reviews_are_real' => false,   // schema rating stays OFF until this is true
	'sites_managed'    => '150+',
	'response_time'    => 'under 4 hrs',

	'seo_title' => 'Website Maintenance Packages | WordPress Plans From $59/mo',
	'seo_desc'  => 'Flat-rate website maintenance packages for WordPress: weekly updates, security, daily backups, speed tuning and same-day fixes. US-focused team, no contracts, plans from $59/mo.',

	'stats' => array(
		array( 'num' => '150+',  'label' => 'Sites under care' ),
		array( 'num' => '99.9%', 'label' => 'Average uptime' ),
		array( 'num' => '<4 hr', 'label' => 'Support response' ),
		array( 'num' => '12+',   'label' => 'Years on WordPress' ),
	),

	'plans' => array(
		array(
			'name' => 'Essential Care', 'price' => '59', 'period' => '/mo',
			'blurb' => 'The safety net. For brochure sites and blogs that need to stay updated, backed up and online.',
			'popular' => false,
			'features' => array(
				'Weekly WordPress core, theme & plugin updates',
				'Daily off-site backups (30-day archive)',
				'24/7 uptime monitoring with alerts',
				'Security hardening & malware scanning',
				'Monthly plain-English health report',
				'Email support',
			),
			'cta' => 'Start Essential',
		),
		array(
			'name' => 'Growth', 'price' => '129', 'period' => '/mo',
			'blurb' => 'The most popular package. Full maintenance plus speed work and real developer time every month.',
			'popular' => true,
			'features' => array(
				'Everything in Essential Care',
				'Speed & Core Web Vitals optimization',
				'Advanced firewall + same-day malware cleanup',
				'Priority support (under 4-hour response)',
				'2 hours of content edits / dev work monthly',
				'Staging-tested updates before going live',
			),
			'cta' => 'Start Growth',
		),
		array(
			'name' => 'Pro / Agency', 'price' => '249', 'period' => '/mo',
			'blurb' => 'For WooCommerce stores, high-traffic sites and agencies that need white-label care at scale.',
			'popular' => false,
			'features' => array(
				'Everything in Growth',
				'Unlimited small content edits',
				'WooCommerce & payment gateway support',
				'Dedicated account manager',
				'White-label monthly reports for your clients',
				'Emergency phone support',
			),
			'cta' => 'Talk to us',
		),
	),

	'included' => array(
		array( 'icon' => 'refresh', 'title' => 'Core, theme & plugin updates', 'desc' => 'Tested weekly updates with a full backup taken first and instant rollback if anything misbehaves.' ),
		array( 'icon' => 'shield',  'title' => 'Security & malware protection', 'desc' => 'Firewall, login protection, file integrity checks, continuous scanning and same-day cleanup if you are ever hit.' ),
		array( 'icon' => 'save',    'title' => 'Daily off-site backups', 'desc' => 'Automatic daily backups stored away from your host, restorable to any recent point in one click.' ),
		array( 'icon' => 'gauge',   'title' => 'Speed & Core Web Vitals', 'desc' => 'Caching, image compression, database cleanup and front-end tuning that keep pages fast and Google happy.' ),
		array( 'icon' => 'pulse',   'title' => '24/7 uptime monitoring', 'desc' => 'Your site checked around the clock. We usually know it is down before you or your customers do.' ),
		array( 'icon' => 'wrench',  'title' => 'Content edits & fixes', 'desc' => 'Text changes, new sections, broken layouts, white screens: send it over and a real developer handles it.' ),
		array( 'icon' => 'trend',   'title' => 'Monthly reports', 'desc' => 'What we updated, what we blocked, uptime, backups and speed scores in plain English. No jargon.' ),
		array( 'icon' => 'store',   'title' => 'WooCommerce support', 'desc' => 'Checkout, payment gateways and product catalogs kept current, secure and fast during peak traffic.' ),
	),

	'risks' => array(
		array( 'icon' => 'alert', 'title' => 'Hacked & blacklisted', 'desc' => 'The vast majority of WordPress hacks exploit outdated plugins. A breached site can land on Google blocklists, killing traffic and trust overnight.' ),
		array( 'icon' => 'clock', 'title' => 'Downtime you find out about last', 'desc' => 'Without monitoring, the first person to notice your site is down is usually a customer. Every hour offline is leads, sales and ad spend gone.' ),
		array( 'icon' => 'gauge', 'title' => 'Slow decay, lower rankings', 'desc' => 'Bloat creeps in quietly: revisions, spam, oversized images, plugin conflicts. Speed drops, visitors bounce, rankings slide.' ),
		array( 'icon' => 'lock',  'title' => 'No backup when it matters', 'desc' => 'One failed update or server fault can erase months of work. A backup that lives on the same server that just crashed is not a backup.' ),
	),

	'audiences' => array(
		array( 'icon' => 'wrench', 'title' => 'Small & local businesses', 'desc' => 'HVAC, legal, medical, trades, home improvement. Your site brings in leads, and it needs to be up, fast and trusted every single day.' ),
		array( 'icon' => 'store',  'title' => 'WooCommerce stores', 'desc' => 'A broken checkout costs money by the minute. We keep the register open, gateways current and the store quick under load.' ),
		array( 'icon' => 'users',  'title' => 'Agencies & freelancers', 'desc' => 'White-label maintenance for the sites you build. Your brand on the reports, our team doing the 2am firefighting.' ),
		array( 'icon' => 'trend',  'title' => 'Content & lead-gen sites', 'desc' => 'Blogs, media and affiliate sites where uptime and speed are the business model. We keep performance tight as traffic scales.' ),
	),

	'steps' => array(
		array( 'title' => 'Free site audit',   'desc' => 'Send your URL. We run a full health, security and speed check and tell you honestly what shape the site is in. No charge, no strings.' ),
		array( 'title' => 'Pick your package', 'desc' => 'Choose the maintenance package that fits your site and budget. Month to month. Upgrade, downgrade or cancel any time.' ),
		array( 'title' => 'We take over',      'desc' => 'Grant us secure access and within 24 hours everything is backed up, hardened, updated and monitored.' ),
		array( 'title' => 'You stop thinking about it', 'desc' => 'Updates, security, backups and fixes run on autopilot. You get one clear report a month and your evenings back.' ),
	),

	'testimonials' => array(
		array( 'quote' => 'We broke our own site twice trying to keep up with updates. Since handing it over, the monthly report is the only reminder that maintenance is even happening.', 'name' => 'Priya Nayar', 'role' => 'Owner, Nayar Dental' ),
		array( 'quote' => 'A plugin update killed our booking form on a Friday night. It was fixed before I saw the alert email. That one save covered the plan for the year.', 'name' => 'Greg Olsen', 'role' => 'Director, Olsen Roofing' ),
		array( 'quote' => 'We white-label their maintenance for every client site we build. Our retainers got more profitable and our weekends came back.', 'name' => 'Sara Kim', 'role' => 'Founder, Northlight Studio' ),
	),

	/* FAQ — PAA-driven. These feed FAQPage schema. */
	'faqs' => array(
		array( 'q' => 'What is a website maintenance package?', 'a' => 'A website maintenance package is a fixed monthly service that keeps your website updated, secure, backed up, fast and working. Instead of paying a developer by the hour every time something needs attention, one flat fee covers software updates, security monitoring, daily backups, uptime monitoring, performance work and support, handled proactively on a schedule.' ),
		array( 'q' => 'What is included in a website maintenance package?', 'a' => 'A complete package covers six jobs: weekly WordPress core, theme and plugin updates; security hardening with malware scanning and removal; daily off-site backups; 24/7 uptime monitoring; speed and Core Web Vitals optimization; and support for content edits and fixes. Higher tiers add dedicated developer hours, staging-tested updates, WooCommerce support and white-label reporting.' ),
		array( 'q' => 'How much do website maintenance packages cost?', 'a' => 'Across the US market, website maintenance packages range from roughly $25 per month for automated-only plans to $600 or more for enterprise care. Most small businesses land between $75 and $250 per month for professional, human-handled maintenance. Our packages run $59 to $249 per month, flat rate, with no contracts and no surprise hourly bills.' ),
		array( 'q' => 'Are website maintenance packages worth it?', 'a' => 'If your website generates leads or sales, yes. Compare the monthly fee against the cost of one incident: a hack cleanup typically runs $300 to $1,000+, a day of downtime costs whatever a day of your leads or orders is worth, and a slow site quietly bleeds rankings all year. Maintenance is cheaper than any single one of those going wrong once.' ),
		array( 'q' => 'What is the difference between a maintenance package and a care plan?', 'a' => 'Nothing meaningful. "Website maintenance package," "care plan," "support plan" and "website management plan" are different names for the same category of service: recurring monthly care for your website. Some providers use "care plan" for WordPress-specific service, but the deliverables (updates, security, backups, support) are the same.' ),
		array( 'q' => 'Do I need website maintenance if I have good hosting?', 'a' => 'Yes. Hosting keeps a server running; maintenance keeps your website running. Your host will not update your plugins, test your forms, clean malware out of WordPress files, optimize your database or fix a layout that broke after an update. Even managed WordPress hosts only cover a slice of it. Hosting and maintenance are two different jobs.' ),
		array( 'q' => 'How often should a WordPress website be maintained?', 'a' => 'Software updates should be reviewed at least weekly, since plugin vulnerabilities are patched constantly and attackers exploit them within days. Backups should run daily. Uptime monitoring should be continuous. Performance and database work is typically monthly. That cadence is exactly what a maintenance package automates so you never have to think about the schedule.' ),
		array( 'q' => 'Will updates break my website?', 'a' => 'Sometimes updates conflict, and that is precisely why professional maintenance exists. We take a complete backup before every update round, test changes on staging for higher plans, and roll back instantly if anything misbehaves. If we ever break something, we fix it the same day at no cost.' ),
		array( 'q' => 'Do you only maintain WordPress websites?', 'a' => 'WordPress and WooCommerce are our specialty, and it is where our packages deliver the most value. WordPress powers over 40% of the web, which also makes it the most attacked platform, so focused expertise matters more than a generalist who maintains everything shallowly.' ),
		array( 'q' => 'Can I cancel my maintenance plan anytime?', 'a' => 'Yes. Every package is month to month with no lock-in contract. Upgrade, downgrade or cancel whenever you want. We keep clients by being useful, not by trapping them in agreements.' ),
		array( 'q' => 'What happens if my website gets hacked while on a plan?', 'a' => 'We clean it, same day, at no extra cost on Growth and Pro plans. That includes removing the malware, restoring from a clean backup if needed, closing the vulnerability that let the attacker in, and requesting blocklist removal from Google if the site was flagged.' ),
		array( 'q' => 'Do you offer white-label maintenance for agencies?', 'a' => 'Yes. Our Pro / Agency package includes white-label monthly reports with your branding, so you can sell maintenance to your clients under your own name while our team does the work. Volume pricing is available for agencies managing five or more sites.' ),
		array( 'q' => 'How long does website maintenance take each month?', 'a' => 'Done properly, expect three to five hours a month for a typical business site: weekly update rounds with backups and post-update checks, daily backup verification, monthly database and performance work, and quarterly audits. Ecommerce sites take more because every update round needs checkout and payment testing. That time commitment, applied consistently and without skipped weeks, is exactly what a maintenance package replaces, which is why the professional tier of the market prices where it does.' ),
		array( 'q' => 'Can I do website maintenance myself?', 'a' => 'Technically yes, and our maintenance checklist above shows the full task list if you want to. The honest catch is consistency: the checklist only protects you if it runs every single week, and most owners keep it up for about six weeks before updates start slipping. Outdated plugins are precisely what attackers scan for. If you are disciplined and your time is cheap, DIY works. If your site earns money and your time is worth more than a package costs, the decision makes itself.' ),
		array( 'q' => 'How do I get started?', 'a' => 'Request the free site audit. We check your site\'s health, security and speed, send you an honest report, and recommend the right package. If you would rather just get going, pick a plan and we take over within 24 hours.' ),
		array( 'q' => 'Do you work with my hosting provider?', 'a' => 'Yes, we work with every major host: Kinsta, WP Engine, SiteGround, Cloudways, Bluehost, GoDaddy and the rest. If your hosting is what is actually holding your site back, we will tell you straight and can migrate you somewhere better as part of onboarding.' ),
	),

	/* Silo links — flip 'live' to true as each page ships. Never link to a 404. */
	'related' => array(
		array( 'url' => '/wordpress-website-maintenance-services/', 'label' => 'WordPress Website Maintenance Services', 'live' => true ),
		array( 'url' => '/website-maintenance-cost/',               'label' => 'Website Maintenance Cost Guide',          'live' => false ),
		array( 'url' => '/website-maintenance-plans/',              'label' => 'Website Maintenance Plans',               'live' => false ),
		array( 'url' => '/wordpress-care-plans/',                   'label' => 'WordPress Care Plans',                    'live' => false ),
		array( 'url' => '/wordpress-malware-removal-security/',     'label' => 'Malware Removal & Security',              'live' => false ),
		array( 'url' => '/ecommerce-website-maintenance/',          'label' => 'Ecommerce Website Maintenance',           'live' => false ),
		array( 'url' => '/small-business-website-maintenance/',     'label' => 'Small Business Website Maintenance',      'live' => false ),
		array( 'url' => '/website-hosting-and-maintenance/',        'label' => 'Website Hosting & Maintenance',           'live' => false ),
		array( 'url' => '/website-maintenance-checklist/',          'label' => 'Free Maintenance Checklist',              'live' => false ),
		array( 'url' => '/website-maintenance-contract-template/',  'label' => 'Free Maintenance Contract Template',      'live' => false ),
	),
);

/* ---- ACF overrides (same field names as the service page) ---- */
if ( function_exists( 'get_field' ) ) {
	foreach ( array( 'brand','phone','phone_raw','email','book_url','form_shortcode','rating','reviews','sites_managed','response_time','seo_title','seo_desc' ) as $f ) {
		$v = get_field( $f );
		if ( $v !== null && $v !== '' ) { $cfg[ $f ] = $v; }
	}
	foreach ( array( 0 => 'essential_price', 1 => 'growth_price', 2 => 'pro_price' ) as $i => $f ) {
		$v = get_field( $f );
		if ( $v !== null && $v !== '' && isset( $cfg['plans'][ $i ] ) ) { $cfg['plans'][ $i ]['price'] = $v; }
	}
}

/* ---- SEO plumbing ---- */
$has_seo_plugin = ( defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || defined( 'AIOSEO_VERSION' ) || function_exists( 'aioseo' ) || defined( 'SEOPRESS_VERSION' ) );

if ( ! $has_seo_plugin ) {
	add_filter( 'document_title_parts', function( $parts ) use ( $cfg ) {
		$parts['title'] = $cfg['seo_title'];
		unset( $parts['tagline'], $parts['site'] );
		return $parts;
	}, 99 );
}

$canonical = home_url( '/' );
$book_link = ! empty( $cfg['book_url'] ) ? esc_url( $cfg['book_url'] ) : '#contact';

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
			'wp'      => '<circle cx="12" cy="12" r="10"/><path d="M4 9h4l2 8 2.5-8H16l2 8 2-8"/>',
		);
		$p = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
	}
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! $has_seo_plugin ) : ?>
	<meta name="description" content="<?php echo esc_attr( $cfg['seo_desc'] ); ?>">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
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
		--bg:#FAFAF6;--surface:#FFFFFF;--ink:#10141A;--muted:#5A6573;
		--line:#E7E6DF;--accent:#0E9F6E;--accent-deep:#0B7E58;--accent-soft:#E6F6EF;
		--warn:#E0533D;--warn-soft:#FBE7E2;
		--shadow:0 1px 2px rgba(16,20,26,.04),0 12px 40px rgba(16,20,26,.06);
		--radius:16px;--maxw:1140px;
		--display:'Bricolage Grotesque',Georgia,serif;--body:'Hanken Grotesk',system-ui,sans-serif;
	}
	*{box-sizing:border-box}
	html{scroll-behavior:smooth}
	body.fp{margin:0;background:var(--bg);color:var(--ink);font-family:var(--body);font-size:17px;line-height:1.65;-webkit-font-smoothing:antialiased}
	.fp .wrap{max-width:var(--maxw);margin:0 auto;padding:0 22px}
	.fp h1,.fp h2,.fp h3{font-family:var(--display);font-weight:700;line-height:1.07;letter-spacing:-.02em;margin:0}
	.fp h1{font-size:clamp(2.4rem,5.6vw,3.9rem)}
	.fp h2{font-size:clamp(1.8rem,3.6vw,2.7rem)}
	.fp h3{font-size:1.18rem;letter-spacing:-.01em}
	.fp p{margin:0}
	.fp a{color:inherit;text-decoration:none}
	.fp section{padding:84px 0}
	.fp .eyebrow{font-size:.82rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--accent-deep);display:inline-flex;align-items:center;gap:8px}
	.fp .eyebrow::before{content:"";width:22px;height:2px;background:var(--accent)}
	.fp .lead{color:var(--muted);font-size:1.12rem;max-width:56ch}
	.fp svg{width:22px;height:22px}
	.fp .btn{display:inline-flex;align-items:center;gap:9px;font-family:var(--body);font-weight:700;font-size:1rem;padding:15px 26px;border-radius:12px;cursor:pointer;border:1px solid transparent;transition:transform .15s,box-shadow .15s,background .15s}
	.fp .btn svg{width:18px;height:18px}
	.fp .btn-primary{background:var(--accent);color:#fff;box-shadow:0 8px 22px rgba(14,159,110,.28)}
	.fp .btn-primary:hover{background:var(--accent-deep);transform:translateY(-2px)}
	.fp .btn-ghost{background:transparent;color:var(--ink);border-color:var(--line)}
	.fp .btn-ghost:hover{border-color:var(--ink);transform:translateY(-2px)}
	.fp .btn-dark{background:var(--ink);color:#fff}
	.fp .btn-dark:hover{transform:translateY(-2px)}
	/* top utility bar */
	.fp .top-bar{background:var(--ink);color:#cdd6df;font-size:.83rem;font-weight:600}
	.fp .top-bar-inner{display:flex;align-items:center;justify-content:space-between;height:38px}
	.fp .top-msg{display:inline-flex;align-items:center;gap:8px}
	.fp .top-msg svg{width:14px;height:14px;color:#3fd9a3}
	.fp .top-phone{display:inline-flex;align-items:center;gap:7px;color:#fff;font-weight:700}
	.fp .top-phone svg{width:14px;height:14px;color:#3fd9a3}
	/* header */
	.fp .site-head{position:sticky;top:0;z-index:50;background:rgba(250,250,246,.85);backdrop-filter:saturate(140%) blur(12px);border-bottom:1px solid var(--line)}
	.fp .head-inner{display:flex;align-items:center;justify-content:space-between;height:72px}
	.fp .logo{display:flex;align-items:center;gap:11px}
	.fp .logo-mark{display:inline-flex;filter:drop-shadow(0 4px 10px rgba(14,159,110,.22))}
	.fp .logo-mark svg{display:block}
	.fp .logo-text{display:flex;flex-direction:column;line-height:1;font-family:var(--display)}
	.fp .logo-text b{font-weight:800;font-size:1.15rem;letter-spacing:-.02em;color:var(--ink)}
	.fp .logo-text i{font-style:normal;font-weight:700;font-size:.6rem;letter-spacing:.28em;color:var(--accent-deep);margin-top:3px}
	.fp .head-nav{display:flex;gap:26px;font-weight:600;font-size:.95rem}
	.fp .head-nav a:hover{color:var(--accent-deep)}
	.fp .head-actions{display:flex;align-items:center;gap:16px}
	.fp .head-phone{font-weight:700;display:inline-flex;align-items:center;gap:8px}
	.fp .head-phone svg{width:17px;height:17px;color:var(--accent-deep)}
	/* hero */
	.fp .hero{padding:72px 0 84px;position:relative;overflow:hidden}
	.fp .hero::before{content:"";position:absolute;inset:0;background:
		radial-gradient(55% 55% at 82% 8%,rgba(14,159,110,.13),transparent 62%),
		radial-gradient(45% 40% at 4% 42%,rgba(14,159,110,.07),transparent 60%),
		linear-gradient(180deg,rgba(14,159,110,.03),transparent 40%);pointer-events:none}
	.fp .hero-grid{display:grid;grid-template-columns:1.06fr .94fr;gap:56px;align-items:center;position:relative}
	.fp .hero-pill{display:inline-flex;align-items:center;gap:8px;background:#fff;border:1px solid var(--line);border-radius:99px;padding:8px 16px;font-size:.85rem;font-weight:700;color:var(--accent-deep);box-shadow:var(--shadow)}
	.fp .hero-pill .dot{width:8px;height:8px;border-radius:50%;background:var(--accent);animation:pulse 1.8s infinite}
	.fp .hero h1{margin:20px 0 0}
	.fp .hero h1 em{font-style:normal;color:var(--accent-deep);position:relative}
	.fp .hero h1 em::after{content:"";position:absolute;left:0;right:0;bottom:6px;height:.32em;background:var(--accent-soft);z-index:-1;border-radius:4px}
	.fp .hero .lead{margin-top:20px;font-size:1.18rem}
	.fp .hero-cta{display:flex;flex-wrap:wrap;gap:14px;margin-top:30px}
	.fp .hero-bullets{display:flex;flex-wrap:wrap;gap:10px 22px;margin-top:26px;font-size:.94rem;font-weight:600;color:var(--muted)}
	.fp .hero-bullets span{display:inline-flex;align-items:center;gap:7px}
	.fp .hero-bullets svg{width:16px;height:16px;color:var(--accent)}
	.fp .hero-trust{display:flex;flex-wrap:wrap;gap:20px;margin-top:26px;align-items:center;color:var(--muted);font-size:.95rem;font-weight:600}
	.fp .stars{color:#E0A422;letter-spacing:2px}
	.fp .hero-trust .sep{width:1px;height:18px;background:var(--line)}
	/* hero card */
	.fp .health{background:var(--surface);border:1px solid var(--line);border-radius:22px;box-shadow:var(--shadow);padding:24px;animation:rise .7s ease both;position:relative}
	.fp .health::before{content:"";position:absolute;inset:-1px;border-radius:22px;padding:1px;background:linear-gradient(140deg,var(--accent),transparent 40%);-webkit-mask:linear-gradient(#fff 0 0) content-box,linear-gradient(#fff 0 0);-webkit-mask-composite:xor;mask-composite:exclude;pointer-events:none;opacity:.5}
	.fp .health-top{display:flex;align-items:center;justify-content:space-between;padding-bottom:14px;border-bottom:1px solid var(--line)}
	.fp .health-top b{font-family:var(--display);font-size:1.05rem}
	.fp .live{font-size:.78rem;font-weight:700;color:var(--accent-deep);display:inline-flex;align-items:center;gap:7px}
	.fp .live .dot{width:8px;height:8px;border-radius:50%;background:var(--accent);animation:pulse 1.8s infinite}
	.fp .health-row{display:flex;align-items:center;justify-content:space-between;padding:12px 0;border-bottom:1px dashed var(--line);font-weight:600;font-size:.97rem}
	.fp .health-row:last-child{border-bottom:0}
	.fp .health-row .ok{font-size:.83rem;font-weight:700;color:var(--accent-deep);background:var(--accent-soft);padding:4px 11px;border-radius:99px;display:inline-flex;align-items:center;gap:6px}
	.fp .health-row .ok svg{width:13px;height:13px}
	.fp .health-foot{margin-top:14px;font-size:.85rem;color:var(--muted);text-align:center}
	/* stats */
	.fp .stats{background:var(--ink);color:#fff;padding:42px 0}
	.fp .stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center}
	.fp .stat .n{font-family:var(--display);font-weight:800;font-size:2.2rem}
	.fp .stat .l{color:#9aa6b2;font-size:.92rem;font-weight:600;margin-top:4px}
	/* generic */
	.fp .center{text-align:center;max-width:700px;margin:0 auto 50px}
	.fp .center .lead{margin:14px auto 0}
	.fp .prose{max-width:840px}
	.fp .prose p{margin:0 0 18px;font-size:1.07rem}
	.fp .prose p.muted{color:var(--muted)}
	.fp .prose h2{margin:0 0 22px}
	.fp .prose h3{margin:30px 0 12px;font-size:1.3rem}
	.fp .prose ul{margin:0 0 18px;padding-left:22px;color:var(--muted)}
	.fp .prose li{margin-bottom:8px}
	.fp .prose a{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.35);text-underline-offset:3px}
	.fp .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
	.fp .card{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:26px;transition:transform .18s,box-shadow .18s,border-color .18s}
	.fp .card:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
	.fp .card .ic{width:46px;height:46px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:16px}
	.fp .card.risk .ic{background:var(--warn-soft);color:var(--warn)}
	.fp .card h3{margin-bottom:8px}
	.fp .card p{color:var(--muted);font-size:.98rem}
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
	.fp .plan-blurb{color:var(--muted);font-size:.92rem;margin:8px 0 18px;min-height:44px}
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
	/* compare table */
	.fp .table-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:var(--radius);background:var(--surface)}
	.fp table{width:100%;border-collapse:collapse;min-width:640px}
	.fp th,.fp td{padding:15px 18px;text-align:left;border-bottom:1px solid var(--line);font-size:.96rem}
	.fp thead th{font-family:var(--display);font-size:1rem}
	.fp thead th:first-child{font-family:var(--body);font-weight:600;color:var(--muted)}
	.fp .col-us{background:var(--accent-soft)}
	.fp td.col-us{font-weight:700;color:var(--accent-deep)}
	.fp tbody tr:last-child td{border-bottom:0}
	.fp .x{color:var(--warn);font-weight:700}
	/* pricing context cards */
	.fp .market{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;margin-top:34px}
	.fp .mk{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:22px}
	.fp .mk b{font-family:var(--display);font-size:1.35rem;display:block}
	.fp .mk span{font-size:.85rem;color:var(--muted);font-weight:600}
	.fp .mk p{font-size:.9rem;color:var(--muted);margin-top:10px}
	/* quotes */
	.fp .quotes{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .quote{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:26px}
	.fp .quote .stars{font-size:.95rem;margin-bottom:12px;display:block}
	.fp .quote p{font-size:1.02rem;line-height:1.55}
	.fp .quote .who{margin-top:18px;font-size:.9rem}
	.fp .quote .who b{display:block}
	.fp .quote .who span{color:var(--muted)}
	/* guarantee */
	.fp .guarantee{background:var(--ink);color:#fff;text-align:center}
	.fp .guarantee h2{color:#fff;max-width:20ch;margin:0 auto}
	.fp .guarantee p{color:#aeb8c2;max-width:58ch;margin:16px auto 0}
	/* faq */
	.fp details{background:var(--surface);border:1px solid var(--line);border-radius:14px;padding:0 22px;margin-bottom:12px}
	.fp details[open]{border-color:#d2d1c7}
	.fp summary{list-style:none;cursor:pointer;font-family:var(--display);font-weight:700;font-size:1.06rem;padding:19px 0;display:flex;justify-content:space-between;align-items:center;gap:16px}
	.fp summary::-webkit-details-marker{display:none}
	.fp summary .pm{flex:0 0 auto;width:22px;height:22px;position:relative}
	.fp summary .pm::before,.fp summary .pm::after{content:"";position:absolute;background:var(--accent-deep);border-radius:2px;transition:transform .2s}
	.fp summary .pm::before{top:10px;left:3px;width:16px;height:2px}
	.fp summary .pm::after{top:3px;left:10px;width:2px;height:16px}
	.fp details[open] summary .pm::after{transform:rotate(90deg);opacity:0}
	.fp details p{color:var(--muted);padding:0 0 22px;font-size:1rem}
	.fp .faq-wrap{max-width:840px;margin:0 auto}
	/* related silo */
	.fp .silo{display:flex;flex-wrap:wrap;gap:12px;justify-content:center}
	.fp .silo a{font-size:.93rem;font-weight:700;color:var(--accent-deep);background:var(--accent-soft);padding:11px 18px;border-radius:99px;border:1px solid #cdeede;transition:background .15s,transform .15s}
	.fp .silo a:hover{background:#d4f0e4;transform:translateY(-2px)}
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
	.fp .foot-links{display:flex;flex-wrap:wrap;gap:8px 20px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,.1);font-size:.9rem}
	.fp .foot-links a{color:#cdd6df}
	.fp .foot-links a:hover{color:#fff}
	.fp .foot-bottom{padding-top:22px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px}
	.fp .foot-bottom a{color:#cdd6df}
	.fp .mobile-bar{display:none;position:fixed;bottom:0;left:0;right:0;z-index:60;background:#fff;border-top:1px solid var(--line);padding:10px 14px;gap:10px;box-shadow:0 -6px 24px rgba(16,20,26,.08)}
	.fp .mobile-bar .btn{flex:1;justify-content:center;padding:14px}
	@keyframes pulse{0%,100%{box-shadow:0 0 0 0 rgba(14,159,110,.5)}50%{box-shadow:0 0 0 6px rgba(14,159,110,0)}}
	@keyframes rise{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:none}}
	@media(max-width:980px){.fp .grid-4,.fp .market{grid-template-columns:repeat(2,1fr)}.fp .steps{grid-template-columns:repeat(2,1fr)}.fp .head-nav{display:none}}
	@media(max-width:900px){
		.fp .hero-grid,.fp .grid-3,.fp .plans,.fp .quotes,.fp .contact-grid,.fp .use-grid{grid-template-columns:1fr}
		.fp .stats-grid{grid-template-columns:repeat(2,1fr);gap:30px}
		.fp .plan.popular{transform:none}
		.fp section{padding:60px 0}
		.fp .head-phone{display:none}
		.fp .top-bar{display:none}
		.fp .logo-text b{font-size:1.05rem}
		.fp .mobile-bar{display:flex}
		body.fp{padding-bottom:76px}
	}
	@media(max-width:520px){.fp .hero-cta .btn{width:100%;justify-content:center}.fp .market,.fp .grid-4,.fp .steps{grid-template-columns:1fr 1fr}}
	</style>
</head>
<body <?php body_class( 'fp' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<!-- ======================= TOP UTILITY BAR ======================= -->
<?php if ( ! empty( $cfg['topbar'] ) ) : ?>
<div class="top-bar">
	<div class="wrap top-bar-inner">
		<span class="top-msg"><?php echo fp_icon( 'check' ); ?><?php echo esc_html( $cfg['topbar_text'] ); ?></span>
		<a class="top-phone" href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo fp_icon( 'phone' ); ?><?php echo esc_html( $cfg['phone'] ); ?></a>
	</div>
</div>
<?php endif; ?>

<!-- ======================= HEADER ======================= -->
<header class="site-head">
	<div class="wrap head-inner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( $cfg['brand'] ); ?> home">
			<span class="logo-mark" aria-hidden="true">
				<svg viewBox="0 0 48 48" width="38" height="38">
					<rect x="1" y="1" width="46" height="46" rx="13" fill="#0E9F6E"/>
					<path d="M24 10 L35 14 V24 C35 31 30 35 24 38 C18 35 13 31 13 24 V14 Z" fill="none" stroke="#fff" stroke-width="2.4" stroke-linejoin="round"/>
					<path d="M16 24 H20 L22 19.5 L26 29 L28 24 H32" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
			<span class="logo-text"><b>WP Maintenance</b><i>PACKAGES</i></span>
		</a>
		<nav class="head-nav" aria-label="Primary">
			<a href="#pricing">Packages</a>
			<a href="#included">What&#8217;s Included</a>
			<a href="#cost">Pricing Guide</a>
			<a href="#faq">FAQ</a>
		</nav>
		<div class="head-actions">
			<a class="head-phone" href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>">
				<?php echo fp_icon( 'phone' ); ?><?php echo esc_html( $cfg['phone'] ); ?>
			</a>
			<a class="btn btn-primary" href="#pricing">See Packages <?php echo fp_icon( 'arrow' ); ?></a>
		</div>
	</div>
</header>

<!-- ======================= HERO ======================= -->
<section class="hero">
	<div class="wrap hero-grid">
		<div>
			<span class="hero-pill"><span class="dot"></span> Trusted by <?php echo esc_html( $cfg['sites_managed'] ); ?> WordPress sites</span>
			<h1>WordPress Website <em>Maintenance Packages</em> That Pay for Themselves</h1>
			<p class="lead">Flat-rate monthly care that keeps your website updated, secure, backed up and fast, handled by real WordPress developers. One hack cleanup or one day of downtime costs more than a year of maintenance. We make sure you never pay for either.</p>
			<div class="hero-cta">
				<a class="btn btn-primary" href="#pricing">Compare Packages <?php echo fp_icon( 'arrow' ); ?></a>
				<a class="btn btn-ghost" href="#contact"><?php echo fp_icon( 'check' ); ?>Get a Free Site Audit</a>
			</div>
			<div class="hero-bullets">
				<span><?php echo fp_icon( 'check' ); ?>No contracts, cancel anytime</span>
				<span><?php echo fp_icon( 'check' ); ?>Same-day emergency fixes</span>
				<span><?php echo fp_icon( 'check' ); ?>From $<?php echo esc_html( $cfg['plans'][0]['price'] ); ?>/mo flat</span>
			</div>
			<div class="hero-trust">
				<span><span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <?php echo esc_html( $cfg['rating'] ); ?> from <?php echo esc_html( $cfg['reviews'] ); ?> clients</span>
				<span class="sep"></span>
				<span>Replies <?php echo esc_html( $cfg['response_time'] ); ?></span>
			</div>
		</div>
		<div class="health" aria-label="What every maintenance package includes">
			<div class="health-top">
				<b>Every package includes</b>
				<span class="live"><span class="dot"></span>Always on</span>
			</div>
			<?php
			$incl_rows = array( 'Weekly tested updates', 'Security & malware protection', 'Daily off-site backups', 'Speed & Core Web Vitals', '24/7 uptime monitoring', 'Real developer support' );
			foreach ( $incl_rows as $r ) :
			?>
			<div class="health-row">
				<span><?php echo esc_html( $r ); ?></span>
				<span class="ok"><?php echo fp_icon( 'check' ); ?> Included</span>
			</div>
			<?php endforeach; ?>
			<div class="health-foot">Everything WordPress needs to stay healthy, in one flat monthly fee.</div>
		</div>
	</div>
</section>

<!-- ======================= STATS ======================= -->
<section class="stats" style="padding:42px 0">
	<div class="wrap stats-grid">
		<?php foreach ( $cfg['stats'] as $s ) : ?>
			<div class="stat"><div class="n"><?php echo esc_html( $s['num'] ); ?></div><div class="l"><?php echo esc_html( $s['label'] ); ?></div></div>
		<?php endforeach; ?>
	</div>
</section>

<!-- ======================= DEFINITION (snippet + AI-citable) ======================= -->
<section id="what" style="padding-bottom:40px">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Start here</span>
			<h2 style="margin-top:14px">What Is a Website Maintenance Package?</h2>
			<p>A website maintenance package is a fixed monthly service that keeps your website updated, secure, backed up and running properly, without you having to hire a developer every time something needs attention. Instead of reacting to problems after they happen and paying emergency hourly rates, a maintenance package handles the work proactively on a schedule: software updates every week, backups every day, security monitoring around the clock, and a real human to call when something breaks.</p>
			<p class="muted">The names vary between providers. You will see the same service sold as website maintenance packages, <a href="/wordpress-care-plans/" onclick="return false" style="pointer-events:none;color:inherit;text-decoration:none;font-weight:inherit">WordPress care plans</a>, support plans, or website management plans. The label matters less than what is inside: updates, security, backups, speed, monitoring and support are the six jobs any serious package must cover.</p>
			<p class="muted">WordPress powers more than 40% of all websites, which makes it both the best-supported platform on the web and the most attacked. Plugins and themes release security patches constantly, and attackers actively scan for sites that have not applied them. That is the entire reason maintenance exists as a category: a WordPress site is not a finished product you launch and forget, it is software that needs ongoing care like anything else your business depends on.</p>
			<p class="muted">Packages are almost always structured in tiers, and the tiers map to how much human attention your site gets. The entry tier automates the fundamentals: scheduled updates, daily backups, monitoring, baseline security. The middle tier adds the judgment layer, where a developer verifies updates, works on speed, and puts hands on the site every month. The top tier adds depth for complexity: staging environments, store support, dedicated hours, white-label reporting for agencies. Understanding that structure makes every provider on the market easier to evaluate, because beneath the branding, nearly all of them tier the same way. The question is never really which provider has the longest feature list; it is which tier of attention your website actually warrants, and whether the people behind the package are developers or a dashboard.</p>
		</div>
	</div>
</section>

<!-- ======================= PRICING (money section, high) ======================= -->
<section id="pricing" class="pricing">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Simple flat pricing</span>
			<h2 style="margin-top:14px">Our Website Maintenance Packages &amp; Pricing</h2>
			<p class="lead">Three packages, no hidden fees, no lock-in contracts. Every plan puts a real WordPress developer on your side for less than the cost of a single emergency call-out.</p>
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
		<p class="pricing-note">Not ready for a monthly package? We also do <a href="<?php echo esc_attr( $book_link ); ?>">one-time WordPress fixes from $99</a>, no plan required.</p>
	</div>
</section>

<!-- ======================= WHAT'S INCLUDED (cards) ======================= -->
<section id="included">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">What&#8217;s included</span>
			<h2 style="margin-top:14px">Everything Your Website Needs, in One Package</h2>
			<p class="lead">No juggling separate plugins, hosts and freelancers. One team owns the entire maintenance job so nothing falls through the cracks.</p>
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

<!-- ======================= DEEP DIVE: the six jobs (prose depth) ======================= -->
<section style="padding-top:0">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">The details</span>
			<h2 style="margin-top:14px">Inside a Professional Maintenance Package: The Six Jobs Explained</h2>
			<p class="muted">Most providers list the same bullet points. What separates a professional maintenance package from a cheap automated one is how each job is actually done. Here is what each area involves and what to look for.</p>

			<h3>1. WordPress core, theme and plugin updates</h3>
			<p class="muted">Updates are the single most important maintenance task, because outdated software is how the overwhelming majority of WordPress sites get hacked. But blindly auto-updating is how sites break. Professional maintenance means every update round starts with a fresh backup, updates are applied in a controlled order, the site is checked afterward, and anything that misbehaves is rolled back immediately. On our Growth and Pro packages, updates are tested on a staging copy of your site before they ever touch the live version. That is the difference between updates as a risk and updates as a routine.</p>

			<h3>2. Security, malware scanning and cleanup</h3>
			<p class="muted">Security in a real package is layered: a web application firewall filtering malicious traffic, login protection against brute-force attempts, file integrity monitoring that flags any core file that changes when it should not, and continuous malware scanning. Just as important is what happens when something gets through. A serious provider cleans the infection, restores from a clean backup if needed, closes the hole the attacker used, and handles Google blocklist removal so your traffic recovers. Ask any provider what their hack response actually includes; vague answers mean you will be paying extra when it happens.</p>

			<h3>3. Daily off-site backups</h3>
			<p class="muted">The word that matters is off-site. A backup stored on the same server as your website disappears with the server. Professional packages back up your files and database daily to independent storage, keep a rolling archive of at least 30 days, and can restore the whole site to any recent point in minutes. Backups are also what make safe updates possible: every change we make is reversible because a clean copy always exists from minutes before.</p>

			<h3>4. Speed and Core Web Vitals</h3>
			<p class="muted">WordPress sites slow down over time. Post revisions pile up in the database, images get uploaded at full camera resolution, plugins add scripts to every page, and caching gets misconfigured. Speed work inside a maintenance package means server-side caching, image compression and modern formats, database cleanup, and front-end tuning measured against Google&#8217;s Core Web Vitals, the metrics Google itself uses as a ranking signal. A fast site converts more visitors and ranks better. This is maintenance that directly earns money rather than just preventing loss.</p>

			<h3>5. Uptime monitoring, 24/7</h3>
			<p class="muted">Monitoring means your site is checked around the clock from multiple locations, and a human is alerted the moment it stops responding. Without it, downtime gets discovered by customers, sometimes hours or days later. With it, most incidents are resolved before anyone outside the team notices. Monitoring should also cover the things that fail silently: SSL certificates about to expire, domains about to lapse, forms that stopped delivering email.</p>

			<h3>6. Support, edits and fixes</h3>
			<p class="muted">The part you actually feel month to month: a real person who answers. Text changes, a new section on a page, a plugin behaving strangely, the dreaded white screen. In a good package these go to a developer who already knows your site, not a ticket queue offshore reading from a script. Our packages include set response times, and Growth and Pro plans include dedicated developer hours every month for improvements, not just repairs.</p>
		</div>
	</div>
</section>

<!-- ======================= WHY / RISKS ======================= -->
<section id="why" style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Why it matters</span>
			<h2 style="margin-top:14px">What Unmaintained Websites Actually Cost</h2>
			<p class="lead">Neglect is invisible until the invoice arrives. These are the four ways it shows up.</p>
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
		<div class="prose" style="margin-top:44px">
			<p class="muted">Put numbers on it and the case makes itself. A professional malware cleanup from a specialist firm typically costs $300 to $1,000 or more, and that is after the damage: lost sales while the site served spam or redirects, and the slow climb back if Google flagged the domain. A day of downtime costs whatever a day of your leads or orders is worth. A site that drifts from fast to sluggish loses rankings gradually, which is the most expensive failure of all because nobody sees it happen. Against any one of those, a maintenance package at $59 to $249 a month is not an expense. It is the cheapest insurance your business buys, and unlike insurance, it also actively improves the asset it protects.</p>
		</div>
	</div>
</section>

<!-- ======================= MARKET PRICING GUIDE ======================= -->
<section id="cost">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Buyer&#8217;s guide</span>
			<h2 style="margin-top:14px">How Much Do Website Maintenance Packages Cost?</h2>
			<p class="muted">Across the US market, monthly website maintenance packages range from around $25 at the bottom to $600 and beyond at the enterprise end. The spread is wide because the word &#8220;maintenance&#8221; covers everything from a script that auto-clicks the update button to a dedicated developer team on retainer. Here is how the market actually tiers, so you can see where any quote fits.</p>
		</div>
		<div class="market">
			<div class="mk"><b>$25&#8211;$75</b><span>Automated-only</span><p>Software runs updates and backups unattended. Nobody checks whether an update broke your site. Fine for hobby sites, risky for a business.</p></div>
			<div class="mk"><b>$75&#8211;$250</b><span>Professional</span><p>Human-verified updates, layered security, real support and speed work. Where most small businesses should be. Our packages sit here.</p></div>
			<div class="mk"><b>$250&#8211;$600</b><span>Premium / store</span><p>WooCommerce depth, staging workflows, dedicated developer hours, faster response commitments. For sites where an hour offline is real money.</p></div>
			<div class="mk"><b>$600+</b><span>Enterprise</span><p>Retainer-level teams, custom infrastructure, SLAs. Overkill for most businesses; the right call for large or mission-critical platforms.</p></div>
		</div>
		<div class="prose" style="margin-top:36px">
			<p class="muted">One warning from inside the industry: the cheapest tier is usually the most expensive. A $50 automated plan looks like a bargain until the first incident, at which point the emergency work is billed hourly on top, and a single hack cleanup or downtime crisis erases years of the &#8220;savings.&#8221; When you compare packages, compare what happens when something goes wrong, not just the monthly number. That is the scenario you are actually buying protection for.</p>
			<p class="muted">Our own pricing is deliberately flat and public: $<?php echo esc_html( $cfg['plans'][0]['price'] ); ?>, $<?php echo esc_html( $cfg['plans'][1]['price'] ); ?> or $<?php echo esc_html( $cfg['plans'][2]['price'] ); ?> per month depending on how much hands-on work your site needs, with emergency fixes included rather than billed as surprises.</p>
		</div>
	</div>
</section>

<!-- ======================= COMPARISON TABLE ======================= -->
<section style="padding-top:0">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Compare your options</span>
			<h2 style="margin-top:14px">Maintenance Package vs DIY vs Hourly Freelancer</h2>
		</div>
		<div class="table-wrap">
			<table>
				<thead>
					<tr><th>What you get</th><th class="col-us"><?php echo esc_html( $cfg['brand'] ); ?></th><th>Doing it yourself</th><th>Hourly freelancer</th></tr>
				</thead>
				<tbody>
					<tr><td>24/7 uptime monitoring</td><td class="col-us">Included</td><td class="x">Only when you look</td><td class="x">Rarely offered</td></tr>
					<tr><td>Daily off-site backups</td><td class="col-us">Included</td><td>Plugin to configure</td><td>Extra cost</td></tr>
					<tr><td>Tested weekly updates</td><td class="col-us">Yes, backed up first</td><td>Hours of your week</td><td>When available</td></tr>
					<tr><td>Same-day hack cleanup</td><td class="col-us">Included (Growth+)</td><td class="x">Risky DIY</td><td>$300&#8211;$1,000 per incident</td></tr>
					<tr><td>Speed &amp; Core Web Vitals</td><td class="col-us">Every plan</td><td class="x">Specialist skill</td><td>Billed hourly</td></tr>
					<tr><td>Developer who knows your site</td><td class="col-us">Yes</td><td class="x">Just you</td><td>Starts over each hire</td></tr>
					<tr><td>Predictable monthly cost</td><td class="col-us">Flat rate</td><td>Hidden time cost</td><td class="x">Variable, spiky</td></tr>
					<tr><td>Break/fix guarantee</td><td class="col-us">Same day, no charge</td><td class="x">None</td><td class="x">None</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<!-- ======================= WHO IT'S FOR ======================= -->
<section id="who" style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">Who it&#8217;s for</span>
			<h2 style="margin-top:14px">Built for Websites That Earn Their Keep</h2>
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

<!-- ======================= WORDPRESS SPECIFIC ======================= -->
<section id="wordpress">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">WordPress specialists</span>
			<h2 style="margin-top:14px">Why WordPress Maintenance Is Its Own Discipline</h2>
			<p class="muted">Generic &#8220;we maintain any website&#8221; providers treat WordPress as one platform among many. That is exactly backwards. WordPress&#8217;s scale, powering over 40% of the web, means it has its own threat landscape, its own update rhythm, its own performance quirks and its own ecosystem of tens of thousands of plugins with wildly different quality. Maintaining it well is a specialty.</p>
			<p class="muted">Practically, that means knowing which plugin combinations conflict before they take a site down. Knowing that a major WooCommerce release needs staging first, always. Knowing the difference between a false-positive scanner alert and the file change pattern of a real injection. Knowing how to tune a database that has accumulated five years of revisions and transients. Our team works on WordPress and WooCommerce exclusively, which is why our packages catch problems that generalists miss.</p>
			<p class="muted">If you want the full breakdown of the WordPress-specific service, our <a href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">WordPress website maintenance services</a> page covers exactly what our developers do week to week, and how our care approach handles stores, membership sites and high-traffic builds.</p>
		</div>
	</div>
</section>

<!-- ======================= HOW TO CHOOSE ======================= -->
<section style="padding-top:0">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Choosing well</span>
			<h2 style="margin-top:14px">How to Choose the Right Maintenance Package</h2>
			<p class="muted">Match the package to what your website does for your business, not to the length of the feature list. Three questions get you there.</p>
			<h3>What does an hour of downtime cost you?</h3>
			<p class="muted">If the honest answer is &#8220;not much,&#8221; a basic package with solid updates, backups and monitoring is enough. If your site books appointments, captures leads or takes orders, downtime has a real hourly price, and you want the tier with priority response and same-day emergency work. Store owners should count abandoned checkouts, not just visits.</p>
			<h3>How often does your site change?</h3>
			<p class="muted">A brochure site that changes quarterly needs protection more than production. A site with weekly content updates, landing pages and campaigns needs a package with monthly developer hours built in, otherwise every small edit becomes a separate invoice and a separate wait.</p>
			<h3>Do you sell anything through the site?</h3>
			<p class="muted">Ecommerce changes the stakes and the work. Payment gateways, checkout flows and inventory systems need their own testing after every update round. If you run WooCommerce, choose a package that names it explicitly, ours is the Pro tier, because generic maintenance quietly skips the store-specific checks that matter most.</p>
			<p class="muted">Still unsure? Send us the site. The free audit tells you which tier actually fits, and we will say so honestly, including when the cheaper plan is the right answer.</p>
		</div>
	</div>
</section>

<!-- ======================= DIY CHECKLIST (utility + checklist kw) ======================= -->
<section style="background:#fff;border-top:1px solid var(--line)">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Do it yourself?</span>
			<h2 style="margin-top:14px">The Website Maintenance Checklist (If You Want to Handle It Yourself)</h2>
			<p class="muted">Fair is fair: not every site needs a paid package, and you deserve to know exactly what the job involves before deciding. This is the actual working checklist, the same cadence our team runs for clients. If you can commit to all of it, every week, without fail, you genuinely do not need us.</p>

			<h3>Daily</h3>
			<ul>
				<li>Verify last night&#8217;s backup completed and is stored off-server</li>
				<li>Check uptime alerts and investigate anything that flagged overnight</li>
				<li>Scan the security log for repeated failed logins or unfamiliar admin activity</li>
			</ul>

			<h3>Weekly</h3>
			<ul>
				<li>Take a fresh full backup, then review and apply core, theme and plugin updates</li>
				<li>Click through the site afterward: forms, checkout, menus, key pages</li>
				<li>Run a malware scan and check Google Search Console for security warnings</li>
				<li>Clear caches after updates and confirm pages render correctly</li>
			</ul>

			<h3>Monthly</h3>
			<ul>
				<li>Test page speed and Core Web Vitals; compress any oversized new images</li>
				<li>Clean the database: post revisions, expired transients, spam comments</li>
				<li>Test a backup restore on a staging copy, because an untested backup is a hope, not a plan</li>
				<li>Review user accounts and remove anyone who no longer needs access</li>
				<li>Check for abandoned plugins that have not been updated by their developers in 6+ months</li>
			</ul>

			<h3>Quarterly</h3>
			<ul>
				<li>Audit every installed plugin: remove what you no longer use, replace what is abandoned</li>
				<li>Check SSL certificate and domain expiry dates</li>
				<li>Review site search queries and 404 logs for broken content</li>
				<li>Update passwords and confirm two-factor authentication is on for every admin</li>
			</ul>

			<p class="muted">Total that up honestly and it comes to three to five hours a month of disciplined, slightly tedious technical work, more in weeks when an update misbehaves. That is the real trade. Most business owners who start this checklist keep it up for about six weeks, then updates start slipping, and slipping is precisely the state attackers scan for. If your time is worth more than the price of a package, the math answers itself. If not, this checklist is yours, no hard feelings.</p>
		</div>
	</div>
</section>

<!-- ======================= BY SITE TYPE ======================= -->
<section>
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">By website type</span>
			<h2 style="margin-top:14px">What Maintenance Looks Like for Different Kinds of Websites</h2>
			<p class="muted">Maintenance is not one-size-fits-all. The right package depends on what your website actually is, because each type fails differently and each failure costs differently.</p>

			<h3>Brochure and local business sites</h3>
			<p class="muted">The classic five-to-fifteen page business site: services, about, contact. These change rarely, which makes owners assume they need nothing. The opposite is true: because nobody logs in for months, breaches and breakage go unnoticed the longest. A brochure site hacked in January is often still serving spam links in June. What these sites need most is the invisible layer: monitoring, updates and backups running whether anyone is watching or not. Essential Care exists for exactly this.</p>

			<h3>Lead generation sites</h3>
			<p class="muted">If your site exists to fill a pipeline, its forms are the whole business. And forms are fragile: a plugin update changes an email routing setting, and leads silently stop arriving while the thank-you page keeps smiling at visitors. Nothing looks broken. Lead-gen maintenance means testing the conversion path itself after every change, form submission through to email delivery, plus keeping pages fast, because every second of load time measurably cuts conversion. This is Growth-tier work.</p>

			<h3>WooCommerce and ecommerce stores</h3>
			<p class="muted">Stores are the highest-stakes category. More moving parts (payment gateways, shipping calculators, inventory, tax rules), more sensitive data, and a direct dollar cost per minute of downtime. WooCommerce also updates aggressively, and its extensions must stay compatible with each other, with WooCommerce itself, and with WordPress core, a three-way compatibility problem that generic maintenance ignores. Store maintenance means staging-tested updates, checkout testing after every round, PCI-conscious security and performance work that holds up under sale-day traffic. This is why our Pro tier names WooCommerce explicitly.</p>

			<h3>Membership, LMS and community sites</h3>
			<p class="muted">Sites where users log in, learn or pay recurring fees combine store-level stakes with heavy database load. User records, course progress and payment subscriptions make backups both more critical and more delicate: restoring yesterday&#8217;s backup can mean losing today&#8217;s signups, so restore strategy has to be thought through before an incident, not during one. These sites need the same tier of care as a store, with particular attention to database health and update testing.</p>
		</div>
	</div>
</section>

<!-- ======================= QUESTIONS TO ASK ======================= -->
<section style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Hold every provider to this</span>
			<h2 style="margin-top:14px">Seven Questions to Ask Before Buying Any Maintenance Package</h2>
			<p class="muted">Including ours. Feature lists all look the same; the answers to these do not. Any provider worth paying will answer all seven without flinching.</p>
			<p class="muted"><strong>1. Where exactly are my backups stored, and how often do you test restoring them?</strong> The only acceptable answer is off-server storage plus periodic restore tests. A backup nobody has ever restored is a guess.</p>
			<p class="muted"><strong>2. What happens, specifically, if my site is hacked while on your plan?</strong> Listen for: cleanup included or billed, response time, whether they close the vulnerability, and whether they handle Google blocklist removal. Vague answers here become invoices later.</p>
			<p class="muted"><strong>3. Do you test updates before or after they hit my live site?</strong> Staging-first is the professional answer for anything that earns money. &#8220;We auto-update and monitor&#8221; means your live site is the test environment.</p>
			<p class="muted"><strong>4. Who actually does the work?</strong> A developer who knows WordPress, or software with a support inbox in front of it? Both are sold as &#8220;maintenance.&#8221; They are not the same product.</p>
			<p class="muted"><strong>5. What is your response time, and is it a commitment or an aspiration?</strong> Get the number in writing and ask what happens when it is missed.</p>
			<p class="muted"><strong>6. What is not included?</strong> The honest providers tell you plainly. The others let you discover the boundaries through surprise invoices.</p>
			<p class="muted"><strong>7. Can I leave whenever I want?</strong> Month-to-month terms mean the provider retains you by being good. Twelve-month contracts mean they retain you with paperwork. Draw your own conclusion about which provider expects to keep you happy.</p>
			<p class="muted">Our answers, for the record: off-site daily with monthly restore tests; same-day cleanup included on Growth and Pro with blocklist removal handled; staging-first on Growth and Pro; real WordPress developers; under four hours committed; one-time projects and full redesigns are the main exclusions; and yes, month to month, leave whenever.</p>
		</div>
	</div>
</section>

<!-- ======================= PROCESS ======================= -->
<section id="process" style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">How it works</span>
			<h2 style="margin-top:14px">Fully Managed Within 24 Hours</h2>
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

<!-- ======================= MAINTENANCE x SEO ======================= -->
<section style="padding-top:0">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">The compounding effect</span>
			<h2 style="margin-top:14px">How Website Maintenance Affects Your Google Rankings</h2>
			<p class="muted">Maintenance is usually sold as damage prevention. That undersells it. Several of the things a good package does are direct or near-direct Google ranking inputs, which means well-maintained sites do not just avoid losses, they quietly compound gains.</p>
			<p class="muted"><strong>Speed is a ranking signal, officially.</strong> Google&#8217;s Core Web Vitals, how fast your page paints, how quickly it responds to taps, how much it shifts while loading, feed into rankings and are measured from real visitor data. Maintenance that keeps images compressed, caching tuned and the database lean holds those scores up as the site grows. Sites without it drift slower every quarter and never notice the ranking cost, because it arrives gradually.</p>
			<p class="muted"><strong>Downtime and crawl errors erode trust.</strong> If Google&#8217;s crawler repeatedly hits an unreachable site, crawl frequency drops and rankings follow. Uptime monitoring keeps outages short enough that crawlers rarely see them.</p>
			<p class="muted"><strong>A hack can erase years of SEO in a week.</strong> When Google detects malware or spam injection, it flags the site in search results or removes pages entirely. Traffic falls off a cliff, and recovery after cleanup can take weeks of reduced trust. The businesses that experience this once never run an unprotected site again. Maintenance means you skip the lesson.</p>
			<p class="muted"><strong>Broken pages leak authority.</strong> Redesigns, deleted pages and expired plugins leave behind 404s and broken internal links that waste the link equity your content earned. Routine maintenance catches and redirects them, keeping the authority you built flowing to pages that can use it.</p>
			<p class="muted">None of this replaces an SEO strategy. But every dollar spent on SEO is partially wasted on a slow, unstable or compromised site. Maintenance is the foundation that makes the rest of your marketing spend actually count.</p>
		</div>
	</div>
</section>

<!-- ======================= SWITCHING + HONESTY ======================= -->
<section style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
	<div class="wrap">
		<div class="prose">
			<span class="eyebrow">Switching is easy</span>
			<h2 style="margin-top:14px">Already Have a Provider? Switching Takes One Day</h2>
			<p class="muted">Moving between maintenance providers is far simpler than owners expect, and you do not need to involve your current provider at all. The whole process needs three things from you: WordPress admin access, hosting access, and fifteen minutes to fill in our onboarding form. From there we take a full independent backup, document how the site is configured, harden security with our own stack, and take over the update and monitoring schedule. Your site stays live throughout; visitors never see a thing. If you are locked into a contract elsewhere, we will honestly tell you whether it is worth buying out early or riding out the term with us shadowing, we have seen both make sense.</p>

			<h2 style="margin:44px 0 22px">When You Genuinely Do Not Need a Maintenance Package</h2>
			<p class="muted">Selling everyone is how providers lose trust, so here is the honest boundary. You probably do not need a paid package if your website is a hobby or personal project with nothing at stake when it breaks; if you are technically capable, actually enjoy the upkeep, and demonstrably keep the checklist above running month after month; or if your site lives on a closed platform like Squarespace or Wix, where the platform itself handles the software layer. And if your site is on managed WordPress hosting with a very simple build, a cheaper package covers the gap between what the host does and what the site needs, you do not need our top tier and we will say so in the audit.</p>
			<p class="muted">Everyone else, meaning any WordPress site that generates leads, sales or reputation, needs the six jobs handled by someone. The only real question is whether that someone is you, a freelancer on call, or a team with a system. You now know exactly what the job involves; choose with clear eyes.</p>
		</div>
	</div>
</section>

<!-- ======================= TESTIMONIALS ======================= -->
<section>
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">What clients say</span>
			<h2 style="margin-top:14px">Owners Who Stopped Worrying About Their Websites</h2>
		</div>
		<div class="quotes">
			<?php foreach ( $cfg['testimonials'] as $t ) : ?>
			<div class="quote">
				<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				<p>&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;</p>
				<div class="who"><b><?php echo esc_html( $t['name'] ); ?></b><span><?php echo esc_html( $t['role'] ); ?></span></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ======================= GUARANTEE ======================= -->
<section class="guarantee">
	<div class="wrap">
		<span class="eyebrow" style="color:#3fd9a3">Our promise</span>
		<h2 style="margin-top:14px">If We Break It, We Fix It. Same Day. No Charge.</h2>
		<p>Every update is backed up first and verified after. If anything ever goes wrong on our watch, we roll it back and make it right at no cost. That is the deal on every package, every time.</p>
		<div style="margin-top:26px"><a class="btn btn-primary" href="#pricing">Get Protected <?php echo fp_icon( 'arrow' ); ?></a></div>
	</div>
</section>

<!-- ======================= FAQ ======================= -->
<section id="faq">
	<div class="wrap">
		<div class="center">
			<span class="eyebrow">FAQ</span>
			<h2 style="margin-top:14px">Website Maintenance Packages: Every Question Answered</h2>
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

<!-- ======================= RELATED / SILO ======================= -->
<?php
$live_related = array_filter( $cfg['related'], function( $r ) { return ! empty( $r['live'] ); } );
if ( ! empty( $live_related ) ) :
?>
<section style="padding-top:0">
	<div class="wrap">
		<div class="center" style="margin-bottom:28px">
			<span class="eyebrow">Go deeper</span>
			<h2 style="margin-top:14px;font-size:1.6rem">Explore Our Maintenance Services</h2>
		</div>
		<div class="silo">
			<?php foreach ( $live_related as $r ) : ?>
				<a href="<?php echo esc_url( home_url( $r['url'] ) ); ?>"><?php echo esc_html( $r['label'] ); ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- ======================= CONTACT ======================= -->
<section id="contact" class="contact" style="border-top:1px solid var(--line)">
	<div class="wrap contact-grid">
		<div>
			<span class="eyebrow">Get started</span>
			<h2>Get Your Free Website Audit</h2>
			<p class="lead">Send us your URL. We reply <?php echo esc_html( $cfg['response_time'] ); ?> with an honest health, security and speed report, and the package that actually fits, even if that is the cheapest one.</p>
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
					<textarea id="fp-msg" name="message" rows="3" placeholder="A maintenance package, a one-time fix, a free audit..."></textarea>
					<button class="btn btn-primary" type="submit">Get My Free Audit <?php echo fp_icon( 'arrow' ); ?></button>
				</form>
				<p style="font-size:.82rem;color:var(--muted);margin-top:10px">Demo form. Paste a real form shortcode into <code>$cfg['form_shortcode']</code> to capture leads.</p>
				<?php
			}
			?>
		</div>
	</div>
</section>

<!-- ======================= FOOTER ======================= -->
<footer class="site-foot">
	<div class="wrap">
		<div class="foot-top">
			<span class="foot-logo"><?php echo esc_html( $cfg['brand'] ); ?></span>
			<a class="btn btn-primary" href="#pricing">See Packages <?php echo fp_icon( 'arrow' ); ?></a>
		</div>
		<?php if ( ! empty( $live_related ) ) : ?>
		<div class="foot-links">
			<?php foreach ( $live_related as $r ) : ?>
				<a href="<?php echo esc_url( home_url( $r['url'] ) ); ?>"><?php echo esc_html( $r['label'] ); ?></a>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<div class="foot-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( $cfg['brand'] ); ?>. All rights reserved.</span>
			<span><a href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo esc_html( $cfg['phone'] ); ?></a></span>
		</div>
	</div>
</footer>

<div class="mobile-bar">
	<a class="btn btn-ghost" href="tel:<?php echo esc_attr( $cfg['phone_raw'] ); ?>"><?php echo fp_icon( 'phone' ); ?>Call</a>
	<a class="btn btn-primary" href="#pricing">See Packages</a>
</div>

<!-- ======================= JSON-LD ======================= -->
<script type="application/ld+json">
<?php
$provider = array(
	'@type'     => 'ProfessionalService',
	'@id'       => home_url( '/#organization' ),
	'name'      => $cfg['brand'],
	'url'       => home_url( '/' ),
	'telephone' => $cfg['phone_raw'],
	'email'     => $cfg['email'],
	'priceRange' => '$' . $cfg['plans'][0]['price'] . '-$' . $cfg['plans'][2]['price'] . '/mo',
	'areaServed' => array( '@type' => 'Country', 'name' => 'United States' ),
);
if ( ! empty( $cfg['reviews_are_real'] ) ) {
	$provider['aggregateRating'] = array(
		'@type'       => 'AggregateRating',
		'ratingValue' => $cfg['rating'],
		'reviewCount' => preg_replace( '/[^0-9]/', '', $cfg['reviews'] ),
	);
}
$ld = array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		$provider,
		array(
			'@type' => 'WebSite',
			'@id'   => home_url( '/#website' ),
			'url'   => home_url( '/' ),
			'name'  => $cfg['brand'],
			'publisher' => array( '@id' => home_url( '/#organization' ) ),
		),
		array(
			'@type'       => 'Service',
			'serviceType' => 'Website Maintenance Packages',
			'name'        => 'Website Maintenance Packages',
			'url'         => home_url( '/' ),
			'description' => $cfg['seo_desc'],
			'provider'    => array( '@id' => home_url( '/#organization' ) ),
			'hasOfferCatalog' => array(
				'@type' => 'OfferCatalog',
				'name'  => 'Monthly Website Maintenance Packages',
				'itemListElement' => array_map( function( $p ) {
					return array(
						'@type'         => 'Offer',
						'name'          => $p['name'],
						'price'         => $p['price'],
						'priceCurrency' => 'USD',
						'description'   => $p['blurb'],
					);
				}, $cfg['plans'] ),
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
