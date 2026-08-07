<?php
/**
 * parts/site-footer.php — shared footer: service silo + company + legal columns,
 * socials, email, sitemap link. Carries its own CSS so any template can use it.
 * Pages not yet built are marked 'soon' and render as plain text (no 404 links).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();

/* Flip 'live' => true as each page ships, so the footer never links to a 404. */
$services = array(
	array( 'WordPress Website Maintenance Services', '/wordpress-website-maintenance-services/', true ),
	array( 'Website Maintenance Cost Guide',        '/website-maintenance-cost/',               true ),
	array( 'Website Maintenance Plans',             '/website-maintenance-plans/',              true ),
	array( 'WordPress Care Plans',                  '/wordpress-care-plans/',                   true ),
	array( 'Website Maintenance Company (USA)',     '/website-maintenance-company/',            true ),
	array( 'Malware Removal & Security',            '/wordpress-malware-removal-security/',     false ),
	array( 'Ecommerce Website Maintenance',         '/ecommerce-website-maintenance/',          true ),
	array( 'Website Hosting &amp; Maintenance',        '/website-hosting-and-maintenance/',        true ),
	array( 'Small Business Website Maintenance',    '/small-business-website-maintenance/',     false ),
);
$company = array(
	array( 'About Us',        '/about/',   true ),
	array( 'Contact',         '/contact/', true ),
	array( 'Blog',            '/blog/',    true ),
	array( 'Author: ' . $c['founder'], '/author-profile/', true ),
	array( 'Free Contract Template', '/website-maintenance-contract-template/', true ),
);
$legal = array(
	array( 'Privacy Policy',  '/privacy-policy/', true ),
	array( 'Terms of Service','/terms/',          true ),
	array( 'XML Sitemap',     '/sitemap_index.xml', true ),
);

function wpmp_foot_links( $items ) {
	foreach ( $items as $it ) {
		list( $label, $url, $live ) = $it;
		if ( $live ) {
			$full = ( strpos( $url, 'http' ) === 0 || strpos( $url, '.xml' ) !== false ) ? $url : home_url( $url );
			echo '<li><a href="' . esc_url( $full ) . '">' . esc_html( $label ) . '</a></li>';
		} else {
			echo '<li><span class="soon">' . esc_html( $label ) . ' <em>soon</em></span></li>';
		}
	}
}
?>
<style>
.fp .site-foot{background:var(--ink);color:#9aa6b2;padding:56px 0 30px;font-size:.94rem}
.fp .foot-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:36px;padding-bottom:34px;border-bottom:1px solid rgba(255,255,255,.1)}
.fp .foot-brand .foot-logo{font-family:var(--display);font-weight:800;font-size:1.2rem;color:#fff;display:block;margin-bottom:12px}
.fp .foot-brand p{max-width:34ch;line-height:1.6}
.fp .foot-social{display:flex;gap:10px;margin-top:18px}
.fp .foot-social a{width:38px;height:38px;border-radius:10px;border:1px solid rgba(255,255,255,.15);display:grid;place-items:center;color:#cdd6df;transition:background .15s,color .15s}
.fp .foot-social a:hover{background:#0E9F6E;color:#fff;border-color:#0E9F6E}
.fp .foot-social svg{width:17px;height:17px}
.fp .foot-col h4{font-family:var(--display);font-size:.95rem;color:#fff;margin:0 0 14px}
.fp .foot-col ul{list-style:none;margin:0;padding:0;display:grid;gap:9px}
.fp .foot-col a{color:#cdd6df}
.fp .foot-col a:hover{color:#fff}
.fp .foot-col .soon{color:#6b7682;font-size:.9rem}
.fp .foot-col .soon em{font-style:normal;font-size:.7rem;background:rgba(255,255,255,.08);padding:1px 6px;border-radius:6px;margin-left:4px}
.fp .foot-book{margin-top:16px}
.fp .foot-bottom{padding-top:22px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px}
.fp .foot-bottom a{color:#cdd6df}
.fp .mobile-bar{display:none;position:fixed;bottom:0;left:0;right:0;z-index:60;background:#fff;border-top:1px solid var(--line);padding:10px 14px;gap:10px;box-shadow:0 -6px 24px rgba(16,20,26,.08)}
.fp .mobile-bar .btn{flex:1;justify-content:center;padding:14px}
@media(max-width:900px){.fp .mobile-bar{display:flex}body.fp{padding-bottom:76px}}
@media(max-width:860px){.fp .foot-grid{grid-template-columns:1fr 1fr}.fp .foot-brand{grid-column:1/-1}}
@media(max-width:520px){.fp .foot-grid{grid-template-columns:1fr}}
/* ===== global mobile + speed hardening (loads on every page) ===== */
html{-webkit-text-size-adjust:100%}
body.fp{overflow-x:clip}
.fp img,.fp svg,.fp video{max-width:100%}
.fp img{height:auto}
.fp table{max-width:100%}
/* wide tables scroll instead of breaking the layout on phones */
@media(max-width:680px){
	.fp table{display:block;overflow-x:auto;-webkit-overflow-scrolling:touch;white-space:nowrap}
	.fp .blob{display:none!important}          /* drop GPU-heavy blur on mobile */
	.fp .marquee-track{animation-duration:24s}
	.fp section{padding:48px 0}
	.fp h1{font-size:clamp(1.9rem,7vw,2.6rem)}
	.fp h2{font-size:clamp(1.5rem,5.5vw,2rem)}
	.fp .btn{width:100%;justify-content:center}
	.fp .head-actions .btn{width:auto}
}
/* never let anything force a horizontal scrollbar */
.fp .wrap{width:100%}
/* keep the sticky header below the WP admin bar when logged in */
body.admin-bar .site-head{top:32px!important}
@media(max-width:782px){body.admin-bar .site-head{top:46px!important}}
</style>

<footer class="site-foot">
	<div class="wrap">
		<div class="foot-grid">
			<div class="foot-col foot-brand">
				<span class="foot-logo"><?php echo esc_html( $c['brand'] ); ?></span>
				<p>Done-for-you WordPress website maintenance packages: updates, security, backups, speed and support. Run by <a href="<?php echo esc_url( $c['company_url'] ); ?>" target="_blank" rel="noopener" style="color:#cdd6df;text-decoration:underline"><?php echo esc_html( $c['company'] ); ?></a>.</p>
				<div class="foot-social">
					<a href="<?php echo esc_url( $c['linkedin'] ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
					<a href="<?php echo esc_url( $c['x'] ); ?>" target="_blank" rel="noopener" aria-label="X"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M4 4l16 16M20 4L4 20"/></svg></a>
					<a href="mailto:<?php echo esc_attr( $c['email'] ); ?>" aria-label="Email"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg></a>
				</div>
				<a class="btn btn-primary foot-book" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>Book a free call</a>
			</div>
			<div class="foot-col">
				<h4>Services</h4>
				<ul><?php wpmp_foot_links( $services ); ?></ul>
			</div>
			<div class="foot-col">
				<h4>Company</h4>
				<ul><?php wpmp_foot_links( $company ); ?></ul>
			</div>
			<div class="foot-col">
				<h4>Legal</h4>
				<ul><?php wpmp_foot_links( $legal ); ?></ul>
			</div>
		</div>
		<div class="foot-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( $c['brand'] ); ?>. All rights reserved.</span>
			<span><a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a></span>
		</div>
	</div>
</footer>

<div class="mobile-bar">
	<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>">Packages</a>
	<a class="btn btn-primary" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>Book a call</a>
</div>
