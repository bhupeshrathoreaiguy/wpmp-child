<?php
/**
 * parts/site-header.php — shared top bar + header with a working mobile menu.
 * No phone. Calendly booking. Icons inlined so they always render.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();

$nav = array(
	array( 'Packages',      home_url( '/#pricing' ) ),
	array( 'Pricing Guide', home_url( '/#cost' ) ),
	array( 'Blog',          home_url( '/blog/' ) ),
	array( 'About',         home_url( '/about/' ) ),
	array( 'Contact',       home_url( '/contact/' ) ),
);
$svg_cal  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>';
$svg_mail = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>';
?>
<style>
.fp .top-bar .top-links{display:inline-flex;gap:18px;align-items:center}
.fp .top-bar .top-links a{color:#fff;font-weight:700;display:inline-flex;align-items:center;gap:6px}
.fp .top-bar .top-links svg{width:13px;height:13px;color:#3fd9a3}
.fp .head-actions{display:flex;align-items:center;gap:12px}
/* hamburger + mobile menu */
.fp .nav-toggle{position:absolute;opacity:0;pointer-events:none}
.fp .hamburger{display:none;flex-direction:column;gap:5px;width:46px;height:46px;border:1px solid var(--line);border-radius:11px;background:#fff;cursor:pointer;align-items:center;justify-content:center}
.fp .hamburger span{display:block;width:20px;height:2px;background:var(--ink);border-radius:2px;transition:transform .22s,opacity .22s}
.fp .mobile-nav{display:none;flex-direction:column;padding:8px 22px 20px;background:rgba(250,250,246,.98);backdrop-filter:blur(12px);border-bottom:1px solid var(--line)}
.fp .mobile-nav a{padding:15px 4px;font-weight:600;font-size:1.05rem;border-bottom:1px solid var(--line)}
.fp .mobile-nav a.btn{border:0;margin-top:14px;justify-content:center;color:#fff}
@media(max-width:900px){
	.fp .hamburger{display:flex}
	.fp .head-actions .head-book{display:none}
	.fp .nav-toggle:checked ~ .site-head .mobile-nav{display:flex}
	.fp .nav-toggle:checked ~ .site-head .hamburger span:nth-child(1){transform:translateY(7px) rotate(45deg)}
	.fp .nav-toggle:checked ~ .site-head .hamburger span:nth-child(2){opacity:0}
	.fp .nav-toggle:checked ~ .site-head .hamburger span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
}
</style>

<div class="top-bar">
	<div class="wrap top-bar-inner">
		<span>Free site audit &middot; No lock-in contracts &middot; US-based WordPress team</span>
		<span class="top-links">
			<a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo $svg_mail; ?><?php echo esc_html( $c['email'] ); ?></a>
			<a href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo $svg_cal; ?>Book a call</a>
		</span>
	</div>
</div>

<input type="checkbox" id="wpmp-nav-toggle" class="nav-toggle" aria-hidden="true">
<header class="site-head">
	<div class="wrap head-inner">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( $c['brand'] ); ?> home">
			<span aria-hidden="true">
				<svg viewBox="0 0 48 48" width="38" height="38">
					<rect x="1" y="1" width="46" height="46" rx="13" fill="#0E9F6E"/>
					<path d="M24 10 L35 14 V24 C35 31 30 35 24 38 C18 35 13 31 13 24 V14 Z" fill="none" stroke="#fff" stroke-width="2.4" stroke-linejoin="round"/>
					<path d="M16 24 H20 L22 19.5 L26 29 L28 24 H32" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
			<span class="logo-text"><b>WP Maintenance</b><i>PACKAGES</i></span>
		</a>
		<nav class="head-nav" aria-label="Primary">
			<?php foreach ( $nav as $n ) : ?>
				<a href="<?php echo esc_url( $n[1] ); ?>"><?php echo esc_html( $n[0] ); ?></a>
			<?php endforeach; ?>
		</nav>
		<div class="head-actions">
			<a class="btn btn-primary head-book" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo $svg_cal; ?>Book a call</a>
			<label for="wpmp-nav-toggle" class="hamburger" role="button" aria-label="Toggle menu" aria-controls="wpmp-nav-toggle" tabindex="0">
				<span></span><span></span><span></span>
			</label>
		</div>
	</div>
	<nav class="mobile-nav" aria-label="Mobile">
		<?php foreach ( $nav as $n ) : ?>
			<a href="<?php echo esc_url( $n[1] ); ?>"><?php echo esc_html( $n[0] ); ?></a>
		<?php endforeach; ?>
		<a class="btn btn-primary" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo $svg_cal; ?>Book a free call</a>
	</nav>
</header>
