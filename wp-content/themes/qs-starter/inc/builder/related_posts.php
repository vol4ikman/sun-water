<?php
/**
 * Related posts builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$thumbnail_size   = 'related';
$layout           = $data['acf_fc_layout'];
$main_title       = isset( $data['main_title'] ) ? $data['main_title'] : '';
$chosen_posts     = isset( $data['chosen_posts'] ) ? $data['chosen_posts'] : array();

if( ! $chosen_posts ) {
	return;
}

$related = new WP_Query(
	array(
		'posts_per_page' => -1,
		'post__in' => $chosen_posts,
		'orderby' => 'post__in'
	)
);
?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item-inner">

		<div class="builder-item__row">

			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if( $related->have_posts() ) : ?>
				<div class="related-posts">
					<?php while( $related->have_posts() ) : $related->the_post(); ?>
						<div class="related-post-item" data-type="<?php echo esc_html($post->post_type); ?>">
							<div class="thumb">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail($thumbnail_size); ?>
								</a>
							</div>
							<div class="meta">
								<div class="post-title"><?php the_title(); ?></div>
								<div class="post-excerpt"><?php the_excerpt(); ?></div>
								<div class="post-permalink">
									<a href="<?php the_permalink(); ?>">
										<span class="title">קרא עוד</span>
										<span class="icon"></span>
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>
			
		</div>

	</div>

</div>