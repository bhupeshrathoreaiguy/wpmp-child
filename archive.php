<?php
/**
 * archive.php — category, tag, author and date archives.
 * Matches the child-theme design system. SEO/title/robots handled by Rank Math.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
include get_theme_file_path( 'parts/blog-css.php' );
$c = wpmp_cfg();

if ( is_category() ) {
	$arch_title = single_cat_title( '', false );
	$arch_kick  = 'Category';
} elseif ( is_tag() ) {
	$arch_title = single_tag_title( '', false );
	$arch_kick  = 'Tag';
} elseif ( is_author() ) {
	$arch_title = get_the_author();
	$arch_kick  = 'Author';
} elseif ( is_date() ) {
	$arch_title = get_the_archive_title();
	$arch_kick  = 'Archive';
} else {
	$arch_title = get_the_archive_title();
	$arch_kick  = 'Archive';
}
$arch_desc = trim( wp_strip_all_tags( term_description() ) );
?>
<section class="blog-hero">
	<div class="wrap">
		<nav class="crumbs" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) ); ?>">Blog</a><span class="sep">/</span><?php echo esc_html( $arch_title ); ?></nav>
		<span class="eyebrow" style="position:relative"><?php echo esc_html( $arch_kick ); ?></span>
		<h1><?php echo esc_html( $arch_title ); ?></h1>
		<?php if ( $arch_desc ) : ?>
			<p class="lead"><?php echo esc_html( $arch_desc ); ?></p>
		<?php else : ?>
			<p class="lead">Guides and how-tos on <?php echo esc_html( strtolower( $arch_title ) ); ?>, from the WP Maintenance Packages team.</p>
		<?php endif; ?>
	</div>
</section>

<div class="blog-wrap">
	<div class="wrap">
		<?php if ( have_posts() ) : ?>
			<div class="post-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php include get_theme_file_path( 'parts/post-card.php' ); ?>
				<?php endwhile; ?>
			</div>

			<?php
			echo '<nav class="pagination" aria-label="Archive pages">';
			echo paginate_links( array(
				'mid_size'  => 1,
				'prev_text' => '&larr; Prev',
				'next_text' => 'Next &rarr;',
			) );
			echo '</nav>';
			?>
		<?php else : ?>
			<div class="blog-empty">
				<p>No posts here yet. Browse the <a class="pc-more" style="display:inline-flex" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) ); ?>">full blog</a> or grab our free <a class="pc-more" style="display:inline-flex" href="<?php echo esc_url( home_url( '/website-maintenance-checklist/' ) ); ?>">maintenance checklist</a>.</p>
			</div>
		<?php endif; ?>

		<div class="blog-cta">
			<h2>Let us handle the maintenance</h2>
			<p>Everything we write about, done for you every week, from $59/mo, no contracts.</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>"><?php echo fp_icon( 'check' ); ?>See maintenance plans</a>
		</div>
	</div>
</div>

<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
