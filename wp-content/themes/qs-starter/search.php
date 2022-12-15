<?php
/**
 * Search page template
 *
 * @package WordPress
 */

get_header(); ?>

<section class="section" id="search-results-page">
	<div class="container">
		<div class="meta">
			<div class="title">תוצאות חיפוש: <span><?php echo get_search_query() ;?></span></div>
			<div class="subtitle">כ-<?php echo esc_html( $wp_query->found_posts ); ?> תוצאות חיפוש עבור "<?php echo get_search_query() ;?>"</div>
		</div>

		<div class="search-form-wrapper">
			<?php get_search_form(); ?>
		</div>

		<div class="search-results-posts">
			<?php while( have_posts() ) :  the_post(); ?>
				<?php get_template_part( 'inc/loop/search', 'result' ); ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
