<?php
/** Template: Privacy Policy — URL /privacy-policy/ */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Privacy Policy | WP Maintenance Packages',
	'desc'  => 'How WP Maintenance Packages collects, uses and protects your data.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<section class="page-hero"><div class="wrap">
	<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Privacy Policy</nav>
	<span class="eyebrow">Legal</span><h1>Privacy Policy</h1>
	<p class="lead">Last updated <?php echo esc_html( date( 'F Y' ) ); ?>.</p>
</div></section>
<section style="padding-top:40px"><div class="wrap"><div class="prose">
	<p>This Privacy Policy explains how <?php echo esc_html( $c['brand'] ); ?> ("we", "us"), operated by <?php echo esc_html( $c['company'] ); ?>, handles information when you use this website and our services.</p>
	<h2>Information we collect</h2>
	<p>We collect information you give us directly, such as your name, email address and website URL when you contact us, request an audit or book a call. We also collect standard technical data (such as IP address, browser type and pages visited) through analytics and server logs to operate and improve the site.</p>
	<h2>How we use your information</h2>
	<ul>
		<li>To respond to enquiries and provide the services you request</li>
		<li>To send you information you asked for, such as an audit or proposal</li>
		<li>To operate, secure and improve our website</li>
		<li>To meet legal and accounting obligations</li>
	</ul>
	<p>We do not sell your personal information.</p>
	<h2>Cookies and analytics</h2>
	<p>We use cookies and analytics tools to understand how visitors use the site. You can control cookies through your browser settings. Disabling them may affect some features.</p>
	<h2>Third-party services</h2>
	<p>We use trusted third parties to run our business, including scheduling (Calendly), form handling and email delivery. These providers process data only as needed to deliver their service and under their own privacy terms.</p>
	<h2>Data retention and security</h2>
	<p>We keep personal data only as long as needed for the purposes above or as required by law, and we take reasonable technical and organisational measures to protect it.</p>
	<h2>Your rights</h2>
	<p>Depending on your location, you may have rights to access, correct or delete your personal data. To make a request, email us at <a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a>.</p>
	<h2>Contact</h2>
	<p>Questions about this policy? Email <a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a>.</p>
	<p style="font-size:.9rem;color:var(--muted)"><em>This template is a general starting point and not legal advice. Have it reviewed against your jurisdiction (GDPR, CCPA, etc.) before relying on it.</em></p>
</div></div></section>
<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
