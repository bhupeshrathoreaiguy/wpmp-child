<?php
/**
 * Template: Contact  —  URL /contact/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Contact | WP Maintenance Packages',
	'desc'  => 'Get in touch about WordPress maintenance packages. Book a free 30-minute call, email us, or send your site for a free audit. US-based team.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>

<section class="page-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Contact</nav>
		<span class="eyebrow">Contact</span>
		<h1>Talk to a WordPress maintenance specialist.</h1>
		<p class="lead">Book a free call, drop us an email, or send your URL for a no-obligation audit. We reply within four hours on business days.</p>
	</div>
</section>

<section style="padding-top:40px">
	<div class="wrap contact-grid">
		<div>
			<h2 style="font-size:1.5rem">Book a free 30-minute call</h2>
			<p style="color:var(--muted);margin-top:10px">Pick a time that suits you. We&#8217;ll review your site, answer questions, and recommend the right package, no pressure.</p>
			<ul class="contact-list">
				<li><?php echo fp_icon( 'mail' ); ?><a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a></li>
				<li><?php echo fp_icon( 'linkedin' ); ?><a href="<?php echo esc_url( $c['linkedin'] ); ?>" target="_blank" rel="noopener">Connect on LinkedIn</a></li>
				<li><?php echo fp_icon( 'x' ); ?><a href="<?php echo esc_url( $c['x'] ); ?>" target="_blank" rel="noopener">Message on X</a></li>
				<li><?php echo fp_icon( 'check' ); ?>No contracts. Cancel anytime.</li>
			</ul>
			<div style="margin-top:24px"><a class="btn btn-primary" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Open booking in new tab</a></div>
		</div>
		<div class="cal-embed">
			<iframe src="<?php echo esc_url( $c['calendly'] ); ?>?hide_gdpr_banner=1" title="Book a call" loading="lazy"></iframe>
		</div>
	</div>
</section>

<section style="padding-top:0">
	<div class="wrap" style="max-width:760px">
		<div class="center" style="margin-bottom:26px">
			<span class="eyebrow" style="justify-content:center">Prefer to write?</span>
			<h2 style="margin-top:12px;font-size:1.7rem">Send us a message</h2>
			<p class="lead" style="margin:12px auto 0">Tell us about your site and we&#8217;ll come back with next steps.</p>
		</div>
		<?php echo do_shortcode( '[fluentform id="3"]' ); ?>
	</div>
</section>

<script type="application/ld+json">
<?php
echo wp_json_encode( array(
	'@context' => 'https://schema.org',
	'@type'    => 'ContactPage',
	'url'      => home_url( '/contact/' ),
	'name'     => 'Contact WP Maintenance Packages',
	'mainEntity' => array(
		'@type' => 'Organization',
		'name'  => $c['brand'],
		'email' => $c['email'],
		'sameAs'=> array( $c['linkedin'], $c['x'] ),
	),
), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
?>
</script>

<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
