<?php
/**
 * parts/site-header.php — shared top bar + header. No phone. Calendly booking.
 * Include with:  <?php include get_theme_file_path( 'parts/site-header.php' ); ?>
 * Assumes the design-system CSS is already on the page (each template loads it).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
?>
<style>
/* header-specific extras layered on top of the design system */
.fp .head-book{display:inline-flex}
.fp .top-bar .top-links{display:inline-flex;gap:18px;align-items:center}
.fp .top-bar .top-links a{color:#fff;font-weight:700;display:inline-flex;align-items:center;gap:6px}
.fp .top-bar .top-links svg{width:13px;height:13px;color:#3fd9a3}
</style>
<div class="top-bar">
	<div class="wrap top-bar-inner">
		<span>Free site audit &middot; No lock-in contracts &middot; US-based WordPress team</span>
		<span class="top-links">
			<a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo fp_icon( 'mail' ); ?><?php echo esc_html( $c['email'] ); ?></a>
			<a href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Book a call</a>
		</span>
	</div>
</div>

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
			<a href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>">Packages</a>
			<a href="<?php echo esc_url( home_url( '/#cost' ) ); ?>">Pricing Guide</a>
			<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
		</nav>
		<div class="head-actions">
			<a class="btn btn-primary head-book" href="<?php echo esc_url( $c['calendly'] ); ?>" target="_blank" rel="noopener"><?php echo fp_icon( 'cal' ); ?>Book a call</a>
		</div>
	</div>
</header>
