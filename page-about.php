<?php
/**
 * Template: About  —  URL /about/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'About Us | WP Maintenance Packages',
	'desc'  => 'The team behind WP Maintenance Packages: WordPress maintenance specialists led by Bhupesh Rathore, founder of ThinkFlow Media. Who we are and how we work.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>

<section class="page-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>About</nav>
		<span class="eyebrow">About us</span>
		<h1>WordPress maintenance is all we do, and we do it properly.</h1>
		<p class="lead">WP Maintenance Packages is a specialist WordPress care service run by <a href="<?php echo esc_url( $c['company_url'] ); ?>" target="_blank" rel="noopener" style="color:var(--accent-deep);font-weight:600"><?php echo esc_html( $c['company'] ); ?></a>. We keep business websites secure, fast and online so owners can stop worrying about the technical side and get back to running the business.</p>
	</div>
</section>

<section style="padding-top:44px">
	<div class="wrap">
		<div class="prose">
			<h2>Why we exist</h2>
			<p>Most WordPress sites are built once and then quietly neglected. Plugins go out of date, backups are never tested, speed decays, and everything runs fine right up until the day it does not. We started WP Maintenance Packages because the businesses hit hardest by that neglect are the ones least equipped to handle it: the local service company, the small store, the founder wearing ten hats. They do not need a lecture on server logs. They need someone to just handle it.</p>
			<p>So that is what we do. Flat monthly packages, real WordPress developers, and a promise that the boring, critical work, updates, security, backups, speed, monitoring, actually happens every week, whether or not anyone is looking.</p>

			<h2>How we work</h2>
			<p>Three principles run through everything:</p>
			<p><strong>Specialists, not generalists.</strong> We work on WordPress and WooCommerce exclusively. WordPress powers a large share of the web and has its own threat landscape, update rhythm and performance quirks. Focused expertise catches problems a maintain-anything provider misses. You can read exactly what that looks like on our <a href="<?php echo esc_url( home_url( '/wordpress-website-maintenance-services/' ) ); ?>">WordPress website maintenance services</a> page.</p>
			<p><strong>Prevention over firefighting.</strong> Every update is backed up first and tested. Security is layered and monitored continuously. Backups run daily and off-site. The goal is that emergencies rarely happen, and when they do, they are a quick fix rather than a crisis.</p>
			<p><strong>Honesty, even when it costs us a sale.</strong> If the cheaper plan is the right one for your site, we say so. If you do not need us at all, we say that too. Trust is the entire business; we are not going to trade it for one upsell.</p>

			<h2>Who is behind it</h2>
			<p>WP Maintenance Packages is led by <strong><?php echo esc_html( $c['founder'] ); ?></strong>, founder of <?php echo esc_html( $c['company'] ); ?>, with over seven years working in SEO, WordPress and website growth across more than a hundred sites. You can read more on the <a href="<?php echo esc_url( home_url( '/author-profile/' ) ); ?>">author profile</a>, or connect on <a href="<?php echo esc_url( $c['linkedin'] ); ?>" target="_blank" rel="noopener">LinkedIn</a>.</p>
		</div>
	</div>
</section>

<section class="stats"><div class="wrap stats-grid">
	<div class="stat"><div class="n">150+</div><div class="l">Sites under care</div></div>
	<div class="stat"><div class="n">99.9%</div><div class="l">Average uptime</div></div>
	<div class="stat"><div class="n">&lt;4 hr</div><div class="l">Support response</div></div>
	<div class="stat"><div class="n">12+</div><div class="l">Years on WordPress</div></div>
</div></section>

<section style="text-align:center">
	<div class="wrap">
		<span class="eyebrow" style="justify-content:center">Work with us</span>
		<h2 style="margin:14px 0 14px">Let&#8217;s keep your site healthy.</h2>
		<p class="lead" style="margin:0 auto 26px">Book a free 30-minute call or send your URL for a no-obligation site audit.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Book a free call</a>
	</div>
</section>

<script type="application/ld+json">
<?php
echo wp_json_encode( array(
	'@context' => 'https://schema.org',
	'@graph'   => array(
		array(
			'@type' => 'Organization',
			'@id'   => home_url( '/#organization' ),
			'name'  => $c['brand'],
			'url'   => home_url( '/' ),
			'email' => $c['email'],
			'founder' => array( '@type' => 'Person', 'name' => $c['founder'] ),
			'parentOrganization' => array( '@type' => 'Organization', 'name' => $c['company'], 'url' => $c['company_url'] ),
			'sameAs' => array( $c['linkedin'], $c['x'] ),
		),
		array(
			'@type' => 'AboutPage',
			'url'   => home_url( '/about/' ),
			'name'  => 'About WP Maintenance Packages',
		),
	),
), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
?>
</script>

<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
