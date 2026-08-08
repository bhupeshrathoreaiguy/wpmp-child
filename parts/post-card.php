<?php
/**
 * parts/post-card.php — renders one post card for the current post in the loop.
 * Shows a single primary category (Rank Math primary if set, else first non-Blog/Uncategorized).
 * Used by home.php and archive.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$cats    = get_the_category();
$primary = null;

// Prefer Rank Math primary category if one is set.
$pid = get_post_meta( get_the_ID(), 'rank_math_primary_category', true );
if ( $pid ) {
	$t = get_term( (int) $pid );
	if ( $t && ! is_wp_error( $t ) ) { $primary = $t; }
}
// Otherwise the first category that isn't the generic Blog / Uncategorized bucket.
if ( ! $primary && $cats ) {
	foreach ( $cats as $ct ) {
		if ( ! in_array( $ct->slug, array( 'uncategorized', 'blog' ), true ) ) { $primary = $ct; break; }
	}
	if ( ! $primary ) { $primary = $cats[0]; }
}

$rt_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
$rt_min   = max( 1, (int) ceil( $rt_words / 220 ) );
?>
<article class="post-card">
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="pc-img" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy', 'decoding' => 'async', 'alt' => esc_attr( get_the_title() ) ) ); ?></a>
	<?php endif; ?>
	<div class="pc-body">
		<?php if ( $primary ) : ?>
			<a class="pc-cat" href="<?php echo esc_url( get_category_link( $primary ) ); ?>"><?php echo esc_html( $primary->name ); ?></a>
		<?php endif; ?>
		<h3 class="pc-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="pc-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php echo (int) $rt_min; ?> min read</div>
		<p class="pc-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26, '&hellip;' ) ); ?></p>
		<a class="pc-more" href="<?php the_permalink(); ?>">Read more <?php echo fp_icon( 'arrow' ); ?></a>
	</div>
</article>
