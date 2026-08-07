<?php
/** Template: Terms of Service — URL /terms/ */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$wpmp_seo = array(
	'title' => 'Terms of Service | WP Maintenance Packages',
	'desc'  => 'The terms that govern use of WP Maintenance Packages services and website.',
);
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
?>
<section class="page-hero"><div class="wrap">
	<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>Terms of Service</nav>
	<span class="eyebrow">Legal</span><h1>Terms of Service</h1>
	<p class="lead">Last updated <?php echo esc_html( date( 'F Y' ) ); ?>.</p>
</div></section>
<section style="padding-top:40px"><div class="wrap"><div class="prose">
	<p>These Terms of Service govern your use of the <?php echo esc_html( $c['brand'] ); ?> website and services, operated by <?php echo esc_html( $c['company'] ); ?>. By using the site or purchasing a plan, you agree to these terms.</p>
	<h2>Our services</h2>
	<p>We provide ongoing WordPress website maintenance on a monthly basis, including updates, security, backups, performance work, monitoring and support as described in the plan you select. Specific inclusions depend on your chosen package.</p>
	<h2>Plans, billing and cancellation</h2>
	<ul>
		<li>Plans are billed monthly in advance unless otherwise agreed.</li>
		<li>There are no long-term contracts; you may cancel at any time, effective at the end of your current billing period.</li>
		<li>Fees are non-refundable for time already served, except where required by law.</li>
	</ul>
	<h2>Your responsibilities</h2>
	<p>You are responsible for providing accurate information and the access we need to perform the service (such as WordPress and hosting credentials), and for holding appropriate rights to any content on your site.</p>
	<h2>Backups and liability</h2>
	<p>We take reasonable care, including backups before changes, but we cannot guarantee against every possible outcome of third-party software, hosting failures or pre-existing issues. Our liability is limited to the fees paid for the service in the month in which a claim arises, to the fullest extent permitted by law.</p>
	<h2>Third-party software</h2>
	<p>Your site relies on third-party themes, plugins and hosting we do not control. We are not responsible for defects, discontinuation or licensing of third-party products, though we will advise and help where we can.</p>
	<h2>Changes to these terms</h2>
	<p>We may update these terms from time to time. Material changes will be posted here with an updated date.</p>
	<h2>Contact</h2>
	<p>Questions? Email <a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a>.</p>
	<p style="font-size:.9rem;color:var(--muted)"><em>This template is a general starting point and not legal advice. Have it reviewed by a qualified professional before relying on it.</em></p>
</div></div></section>
<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
