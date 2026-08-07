<?php
/**
 * single.php — Blog post template for WP Maintenance Packages child theme.
 * Brand-matched to front-page.php. SEO (title/meta/Article schema) is left to
 * Rank Math; this template only handles layout, so nothing double-fires.
 *
 * Upload to the repo alongside front-page.php. Every post uses it automatically.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$brand     = 'WP Maintenance Packages';
$phone     = '+1 (555) 010-2030';
$phone_raw = '+15550102030';
if ( function_exists( 'get_field' ) ) {
	$b = get_field( 'brand', get_option( 'page_on_front' ) );
	if ( $b ) { $brand = $b; }
}

if ( ! function_exists( 'fp_icon' ) ) {
	function fp_icon( $name ) {
		$paths = array(
			'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>',
			'arrow' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
			'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
			'user'  => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/>',
			'check' => '<path d="M20 6 9 17l-5-5"/>',
		);
		$p = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
		return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
	}
}

/* reading time from the post body */
$rt_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
$rt_min   = max( 1, (int) ceil( $rt_words / 220 ) );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<style>
	:root{--bg:#FAFAF6;--surface:#FFFFFF;--ink:#10141A;--muted:#5A6573;--line:#E7E6DF;--accent:#0E9F6E;--accent-deep:#0B7E58;--accent-soft:#E6F6EF;--shadow:0 1px 2px rgba(16,20,26,.04),0 12px 40px rgba(16,20,26,.06);--radius:16px;--display:'Bricolage Grotesque',Georgia,serif;--body:'Hanken Grotesk',system-ui,sans-serif}
	*{box-sizing:border-box}html{scroll-behavior:smooth}
	body.fp{margin:0;background:var(--bg);color:var(--ink);font-family:var(--body);font-size:17px;line-height:1.7;-webkit-font-smoothing:antialiased}
	.fp .wrap{max-width:1140px;margin:0 auto;padding:0 22px}
	.fp a{color:inherit;text-decoration:none}
	.fp h1,.fp h2,.fp h3{font-family:var(--display);font-weight:700;line-height:1.12;letter-spacing:-.02em;margin:0}
	.fp svg{width:22px;height:22px}
	.fp .btn{display:inline-flex;align-items:center;gap:9px;font-weight:700;font-size:1rem;padding:15px 26px;border-radius:12px;cursor:pointer;border:1px solid transparent;transition:transform .15s,background .15s}
	.fp .btn svg{width:18px;height:18px}
	.fp .btn-primary{background:var(--accent);color:#fff;box-shadow:0 8px 22px rgba(14,159,110,.28)}
	.fp .btn-primary:hover{background:var(--accent-deep);transform:translateY(-2px)}
	.fp .btn-ghost{background:transparent;color:var(--ink);border-color:var(--line)}
	/* top bar + header */
	.fp .top-bar{background:var(--ink);color:#cdd6df;font-size:.83rem;font-weight:600}
	.fp .top-bar-inner{display:flex;align-items:center;justify-content:space-between;height:38px}
	.fp .top-phone{display:inline-flex;align-items:center;gap:7px;color:#fff;font-weight:700}
	.fp .top-phone svg{width:14px;height:14px;color:#3fd9a3}
	.fp .site-head{position:sticky;top:0;z-index:50;background:rgba(250,250,246,.85);backdrop-filter:saturate(140%) blur(12px);border-bottom:1px solid var(--line)}
	.fp .head-inner{display:flex;align-items:center;justify-content:space-between;height:72px}
	.fp .logo{display:flex;align-items:center;gap:11px}
	.fp .logo-text{display:flex;flex-direction:column;line-height:1;font-family:var(--display)}
	.fp .logo-text b{font-weight:800;font-size:1.15rem;letter-spacing:-.02em;color:var(--ink)}
	.fp .logo-text i{font-style:normal;font-weight:700;font-size:.6rem;letter-spacing:.28em;color:var(--accent-deep);margin-top:3px}
	.fp .head-nav{display:flex;gap:26px;font-weight:600;font-size:.95rem}
	.fp .head-nav a:hover{color:var(--accent-deep)}
	.fp .head-phone{font-weight:700;display:inline-flex;align-items:center;gap:8px}
	.fp .head-phone svg{width:17px;height:17px;color:var(--accent-deep)}
	/* article */
	.fp .article-head{padding:44px 0 8px;background:linear-gradient(180deg,var(--accent-soft),transparent)}
	.fp .crumbs{font-size:.86rem;color:var(--muted);margin-bottom:18px}
	.fp .crumbs a{color:var(--accent-deep);font-weight:600}
	.fp .crumbs .sep{margin:0 8px;opacity:.5}
	.fp .cat{display:inline-block;font-size:.76rem;font-weight:800;letter-spacing:.1em;text-transform:uppercase;color:var(--accent-deep);background:#fff;border:1px solid #cdeede;padding:5px 13px;border-radius:99px;margin-bottom:16px}
	.fp .article-head h1{font-size:clamp(2rem,4.4vw,3.1rem);max-width:20ch}
	.fp .meta{display:flex;flex-wrap:wrap;gap:18px;margin-top:20px;color:var(--muted);font-size:.92rem;font-weight:600;align-items:center}
	.fp .meta span{display:inline-flex;align-items:center;gap:7px}
	.fp .meta svg{width:15px;height:15px;color:var(--accent-deep)}
	.fp .feat-img{max-width:1140px;margin:26px auto 0;padding:0 22px}
	.fp .feat-img img{width:100%;height:auto;border-radius:var(--radius);border:1px solid var(--line)}
	/* prose (editor content) */
	.fp .layout{display:grid;grid-template-columns:minmax(0,760px);justify-content:center;padding:44px 0 20px}
	.fp .prose{font-size:1.09rem}
	.fp .prose>*{margin:0 0 20px}
	.fp .prose h2{font-size:1.7rem;margin:40px 0 14px}
	.fp .prose h3{font-size:1.28rem;margin:30px 0 10px}
	.fp .prose p{color:#232a33}
	.fp .prose a{color:var(--accent-deep);font-weight:600;text-decoration:underline;text-decoration-color:rgba(14,159,110,.4);text-underline-offset:3px}
	.fp .prose ul,.fp .prose ol{padding-left:24px;color:#232a33}
	.fp .prose li{margin-bottom:9px}
	.fp .prose img{max-width:100%;height:auto;border-radius:12px;border:1px solid var(--line)}
	.fp .prose blockquote{border-left:3px solid var(--accent);background:var(--accent-soft);margin:0 0 20px;padding:16px 22px;border-radius:0 12px 12px 0;font-size:1.08rem}
	.fp .prose blockquote p:last-child{margin:0}
	.fp .prose strong{font-weight:700}
	.fp .prose h2,.fp .prose h3{scroll-margin-top:90px}
	/* author box */
	.fp .author{max-width:760px;margin:30px auto 0;display:flex;gap:16px;align-items:center;background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:22px}
	.fp .author .av{flex:0 0 54px;width:54px;height:54px;border-radius:50%;background:var(--accent-soft);color:var(--accent-deep);display:grid;place-items:center}
	.fp .author .av svg{width:26px;height:26px}
	.fp .author b{font-family:var(--display);font-size:1.05rem}
	.fp .author p{margin:4px 0 0;color:var(--muted);font-size:.94rem}
	/* CTA band */
	.fp .cta{background:var(--ink);color:#fff;margin-top:52px}
	.fp .cta-inner{max-width:760px;margin:0 auto;padding:52px 22px;text-align:center}
	.fp .cta h2{color:#fff;font-size:1.9rem;max-width:22ch;margin:0 auto 12px}
	.fp .cta p{color:#aeb8c2;max-width:52ch;margin:0 auto 24px}
	/* related */
	.fp .related{padding:56px 0}
	.fp .related h2{text-align:center;font-size:1.6rem;margin-bottom:28px}
	.fp .rel-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
	.fp .rel{display:block;background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:24px;transition:transform .18s,box-shadow .18s}
	.fp .rel:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
	.fp .rel .k{font-size:.74rem;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:var(--accent-deep)}
	.fp .rel h3{font-size:1.12rem;margin:10px 0 0;color:var(--ink)}
	/* footer */
	.fp .site-foot{background:var(--ink);color:#9aa6b2;padding:44px 0 30px;font-size:.94rem}
	.fp .foot-top{display:flex;justify-content:space-between;flex-wrap:wrap;gap:20px;align-items:center;padding-bottom:22px;border-bottom:1px solid rgba(255,255,255,.1)}
	.fp .foot-logo{font-family:var(--display);font-weight:800;font-size:1.15rem;color:#fff}
	.fp .foot-bottom{padding-top:20px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px}
	.fp .foot-bottom a{color:#cdd6df}
	@media(max-width:860px){.fp .rel-grid{grid-template-columns:1fr}.fp .head-nav{display:none}.fp .head-phone{display:none}.fp .top-bar{display:none}}
	</style>
</head>
<body <?php body_class( 'fp single' ); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<?php include get_theme_file_path( 'parts/site-header.php' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<main>
	<div class="article-head">
		<div class="wrap">
			<nav class="crumbs" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><span class="sep">/</span>
				<?php the_title(); ?>
			</nav>
			<?php
			$cats = get_the_category();
			if ( ! empty( $cats ) ) {
				echo '<a class="cat" href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
			}
			?>
			<h1><?php the_title(); ?></h1>
			<div class="meta">
				<span><?php echo fp_icon( 'clock' ); ?><?php echo (int) $rt_min; ?> min read</span>
				<span><?php echo fp_icon( 'user' ); ?><?php the_author(); ?></span>
				<span>Updated <?php echo esc_html( get_the_modified_date() ); ?></span>
			</div>
		</div>
	</div>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="feat-img"><?php the_post_thumbnail( 'large', array( 'loading' => 'lazy', 'decoding' => 'async' ) ); ?></div>
	<?php endif; ?>

	<div class="wrap layout">
		<article class="prose"><?php the_content(); ?></article>
	</div>

	<div class="wrap">
		<div class="author">
			<span class="av"><?php echo fp_icon( 'user' ); ?></span>
			<div>
				<b><?php the_author(); ?></b>
				<p><?php echo esc_html( get_the_author_meta( 'description' ) ? get_the_author_meta( 'description' ) : 'WordPress maintenance specialist at ' . $brand . '. We keep ' . '150+' . ' sites secure, fast and online.' ); ?></p>
			</div>
		</div>
	</div>

	<section class="cta">
		<div class="cta-inner">
			<h2>Rather have experts handle all of this?</h2>
			<p>Our <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:#3fd9a3;font-weight:700">website maintenance packages</a> cover updates, security, backups, speed and support from $59/mo. No contracts.</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/#pricing' ) ); ?>">See Packages &amp; Pricing <?php echo fp_icon( 'arrow' ); ?></a>
		</div>
	</section>
</main>
<?php endwhile; ?>

<?php
$rel = new WP_Query( array(
	'category__in'        => wp_get_post_categories( get_queried_object_id() ),
	'post__not_in'        => array( get_queried_object_id() ),
	'posts_per_page'      => 3,
	'ignore_sticky_posts' => 1,
	'no_found_rows'       => true,
) );
if ( $rel->have_posts() ) :
?>
<section class="related">
	<div class="wrap">
		<h2>Keep reading</h2>
		<div class="rel-grid">
			<?php while ( $rel->have_posts() ) : $rel->the_post(); ?>
				<a class="rel" href="<?php the_permalink(); ?>">
					<?php $rc = get_the_category(); if ( ! empty( $rc ) ) : ?><span class="k"><?php echo esc_html( $rc[0]->name ); ?></span><?php endif; ?>
					<h3><?php the_title(); ?></h3>
				</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; wp_reset_postdata(); ?>

<?php include get_theme_file_path( 'parts/site-footer.php' ); ?>

<?php wp_footer(); ?>
</body>
</html>
