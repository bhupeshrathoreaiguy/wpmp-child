<?php
/**
 * parts/head.php — doctype + head + design-system CSS + <body> open.
 * Used by the new content pages (about, contact, legal, author).
 * SEO title/meta are handled by Rank Math; a light fallback fires only if no
 * SEO plugin is active. Set $wpmp_seo = array('title'=>..,'desc'=>..) before include.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
require_once get_theme_file_path( 'parts/config.php' );
$c = wpmp_cfg();
$has_seo = ( defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || defined( 'AIOSEO_VERSION' ) || function_exists( 'aioseo' ) || defined( 'SEOPRESS_VERSION' ) );
$seo = isset( $wpmp_seo ) ? $wpmp_seo : array();
$wpmp_canonical = ( is_singular() || is_front_page() ) ? ( get_permalink( get_queried_object_id() ) ?: home_url( '/' ) ) : '';
add_filter( 'rank_math/frontend/canonical', function( $canon ) use ( $wpmp_canonical ) { return $wpmp_canonical ?: $canon; } );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! $has_seo && ! empty( $seo ) ) : ?>
		<?php if ( ! empty( $seo['desc'] ) ) : ?><meta name="description" content="<?php echo esc_attr( $seo['desc'] ); ?>"><?php endif; ?>
		<meta name="robots" content="index, follow, max-image-preview:large">
	<?php endif; ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="canonical" href="<?php echo esc_url( $wpmp_canonical ); ?>">
	<?php wp_head(); ?>
	<style>
	:root{--bg:#FAFAF6;--surface:#FFFFFF;--ink:#10141A;--muted:#5A6573;--line:#E7E6DF;--accent:#0E9F6E;--accent-deep:#0B7E58;--accent-soft:#E6F6EF;--warn:#E0533D;--warn-soft:#FBE7E2;--shadow:0 1px 2px rgba(16,20,26,.04),0 12px 40px rgba(16,20,26,.06);--radius:16px;--maxw:1140px;--display:'Bricolage Grotesque',Georgia,serif;--body:'Hanken Grotesk',system-ui,sans-serif}
	*{box-sizing:border-box}html{scroll-behavior:smooth}
	body.fp{margin:0;background:var(--bg);color:var(--ink);font-family:var(--body);font-size:17px;line-height:1.7;-webkit-font-smoothing:antialiased}
	.fp .wrap{max-width:var(--maxw);margin:0 auto;padding:0 22px}
	.fp a{color:inherit;text-decoration:none}
	.fp h1,.fp h2,.fp h3{font-family:var(--display);font-weight:700;line-height:1.1;letter-spacing:-.02em;margin:0}
	.fp h1{font-size:clamp(2.2rem,4.8vw,3.4rem)}
	.fp h2{font-size:clamp(1.7rem,3.4vw,2.5rem)}
	.fp h3{font-size:1.2rem}
	.fp p{margin:0}
	.fp svg{width:22px;height:22px}
	.fp section{padding:76px 0}
	.fp .eyebrow{font-size:.82rem;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--accent-deep);display:inline-flex;align-items:center;gap:8px}
	.fp .eyebrow::before{content:"";width:22px;height:2px;background:var(--accent)}
	.fp .lead{color:var(--muted);font-size:1.14rem;max-width:60ch}
	.fp .tldr{background:var(--accent-soft);border:1px solid #cdeede;border-left:4px solid var(--accent);border-radius:12px;padding:15px 20px;margin:22px 0 0;font-size:1.02rem;line-height:1.55;color:#17251d;max-width:72ch}
	.fp .tldr strong:first-child{color:var(--accent-deep);font-weight:800}
	
	.fp .center{text-align:center;max-width:720px;margin:0 auto 46px}
	.fp .center .lead{margin:14px auto 0}
	/* buttons */
	.fp .btn{display:inline-flex;align-items:center;gap:9px;font-weight:700;font-size:1rem;padding:15px 26px;border-radius:12px;cursor:pointer;border:1px solid transparent;transition:transform .15s,background .15s}
	.fp .btn svg{width:18px;height:18px}
	.fp .btn-primary{background:var(--accent);color:#fff;box-shadow:0 8px 22px rgba(14,159,110,.28)}
	.fp .btn-primary:hover{background:var(--accent-deep);transform:translateY(-2px)}
	.fp .btn-ghost{background:transparent;color:var(--ink);border-color:var(--line)}
	.fp .btn-ghost:hover{border-color:var(--ink);transform:translateY(-2px)}
	.fp .btn-dark{background:var(--ink);color:#fff}
	/* header (base classes; extras live in site-header.php) */
	.fp .top-bar{background:var(--ink);color:#cdd6df;font-size:.83rem;font-weight:600}
	.fp .top-bar-inner{display:flex;align-items:center;justify-content:space-between;height:38px}
	.fp .site-head{position:sticky;top:0;z-index:50;background:rgba(250,250,246,.85);backdrop-filter:saturate(140%) blur(12px);border-bottom:1px solid var(--line)}
	.fp .head-inner{display:flex;align-items:center;justify-content:space-between;height:72px}
	.fp .logo{display:flex;align-items:center;gap:11px}
	.fp .logo-text{display:flex;flex-direction:column;line-height:1;font-family:var(--display)}
	.fp .logo-text b{font-weight:800;font-size:1.15rem;letter-spacing:-.02em;color:var(--ink)}
	.fp .logo-text i{font-style:normal;font-weight:700;font-size:.6rem;letter-spacing:.28em;color:var(--accent-deep);margin-top:3px}
	.fp .head-nav{display:flex;gap:24px;font-weight:600;font-size:.95rem}
	.fp .head-nav a:hover{color:var(--accent-deep)}
	.fp .head-actions{display:flex;align-items:center;gap:14px}
	/* page hero */
	.fp .page-hero{padding:56px 0 40px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-soft),transparent)}
	.fp .page-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(50% 60% at 85% 0%,rgba(14,159,110,.12),transparent 60%);pointer-events:none}
	.fp .crumbs{font-size:.86rem;color:var(--muted);margin-bottom:16px;position:relative}
	.fp .crumbs a{color:var(--accent-deep);font-weight:600}
	.fp .crumbs .sep{margin:0 8px;opacity:.5}
	.fp .page-hero h1{max-width:20ch;position:relative}
	.fp .page-hero .lead{margin-top:16px;position:relative}
	/* prose */
	.fp .prose{max-width:820px;margin:0 auto}
	.fp .prose>*{margin:0 0 20px}
	.fp .prose h2{font-size:1.7rem;margin:40px 0 14px}
	.fp .prose h3{font-size:1.28rem;margin:30px 0 10px}
	.fp .prose p{color:#232a33}
	.fp .prose a{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
	.fp .prose ul,.fp .prose ol{padding-left:24px;color:#232a33}
	.fp .prose li{margin-bottom:9px}
	.fp .prose strong{font-weight:700}
	.fp .prose blockquote{border-left:3px solid var(--accent);background:var(--accent-soft);margin:0 0 20px;padding:16px 22px;border-radius:0 12px 12px 0}
	/* cards + grids */
	.fp .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
	.fp .card{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:26px;transition:transform .18s,box-shadow .18s}
	.fp .card:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
	.fp .card .ic{width:46px;height:46px;border-radius:12px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center;margin-bottom:16px}
	.fp .card h3{margin-bottom:8px}
	.fp .card p{color:var(--muted);font-size:.98rem}
	/* stat strip */
	.fp .stats{background:var(--ink);color:#fff;padding:40px 0}
	.fp .stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;text-align:center}
	.fp .stat .n{font-family:var(--display);font-weight:800;font-size:2.1rem}
	.fp .stat .l{color:#9aa6b2;font-size:.9rem;font-weight:600;margin-top:4px}
	/* contact */
	.fp .contact-grid{display:grid;grid-template-columns:1fr 1.1fr;gap:44px;align-items:start}
	.fp .contact-list{list-style:none;padding:0;margin:22px 0 0;display:grid;gap:14px}
	.fp .contact-list li{display:flex;gap:12px;align-items:center;font-weight:600}
	.fp .contact-list a{color:var(--accent-deep)}
	.fp .contact-list svg{color:var(--accent-deep);flex:0 0 20px}
	.fp .cal-embed{background:var(--surface);border:1px solid var(--line);border-radius:18px;box-shadow:var(--shadow);overflow:hidden;min-height:640px}
	.fp .cal-embed iframe{width:100%;min-height:640px;border:0;display:block}
	/* author profile */
	.fp .author-hero{display:grid;grid-template-columns:200px 1fr;gap:32px;align-items:center}
	.fp .author-hero .photo{width:200px;height:200px;border-radius:20px;object-fit:cover;border:1px solid var(--line);background:var(--accent-soft)}
	.fp .author-hero .ph-fallback{width:200px;height:200px;border-radius:20px;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center}
	.fp .author-hero .ph-fallback svg{width:70px;height:70px}
	.fp .badges{display:flex;flex-wrap:wrap;gap:8px;margin-top:16px}
	.fp .badges span{font-size:.85rem;font-weight:700;color:var(--accent-deep);background:var(--accent-soft);border:1px solid #cdeede;padding:6px 13px;border-radius:99px}
	/* mobile bar */
	.fp .mobile-bar{display:none;position:fixed;bottom:0;left:0;right:0;z-index:60;background:#fff;border-top:1px solid var(--line);padding:10px 14px;gap:10px;box-shadow:0 -6px 24px rgba(16,20,26,.08)}
	.fp .mobile-bar .btn{flex:1;justify-content:center;padding:14px}
	@media(max-width:900px){
		.fp .grid-4{grid-template-columns:repeat(2,1fr)}
		.fp .grid-3,.fp .contact-grid,.fp .author-hero{grid-template-columns:1fr}
		.fp .author-hero{justify-items:center;text-align:center}
		.fp .stats-grid{grid-template-columns:repeat(2,1fr);gap:28px}
		.fp section{padding:56px 0}
		.fp .head-nav{display:none}.fp .head-book{display:none}.fp .top-bar{display:none}
		.fp .mobile-bar{display:flex}body.fp{padding-bottom:76px}
	}
	</style>
</head>
<body <?php body_class( 'fp' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
