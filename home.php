<?php
/**
 * home.php — the blog posts index (the /blog/ page set as Posts Page).
 * Matches the child-theme design system. SEO/title handled by Rank Math.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
include get_theme_file_path( 'parts/head.php' );
include get_theme_file_path( 'parts/site-header.php' );
include get_theme_file_path( 'parts/blog-css.php' );
$c = wpmp_cfg();
?>
<section class="blog-hero">
	<div class="wrap">
		<span class="eyebrow" style="position:relative">Guides, tips &amp; how-tos</span>
		<h1>The WordPress Maintenance Blog</h1>
		<p class="lead">Practical, no-nonsense guidance on keeping WordPress sites secure, fast and profitable, from updates and backups to security, speed and WooCommerce.</p>
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
			echo '<nav class="pagination" aria-label="Blog pages">';
			echo paginate_links( array(
				'mid_size'  => 1,
				'prev_text' => '&larr; Prev',
				'next_text' => 'Next &rarr;',
			) );
			echo '</nav>';
			?>
		<?php else : ?>
			<div class="blog-empty">
				<p>No posts published yet. Check back soon, or in the meantime, grab our free <a class="pc-more" style="display:inline-flex" href="<?php echo esc_url( home_url( '/website-maintenance-checklist/' ) ); ?>">maintenance checklist</a>.</p>
			</div>
		<?php endif; ?>

		<div class="blog-cta">
			<h2>Rather not do the maintenance yourself?</h2>
			<p>We keep WordPress sites secure, updated, backed up and fast, from $59/mo, no contracts.</p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/website-maintenance-plans/' ) ); ?>"><?php echo fp_icon( 'check' ); ?>See maintenance plans</a>
		</div>
	</div>
</div>

<?php include get_theme_file_path( 'parts/site-footer.php' ); wp_footer(); ?>
</body></html>
