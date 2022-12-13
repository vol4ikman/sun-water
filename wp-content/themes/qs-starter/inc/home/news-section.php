<?php
/**
 * Homepage NEWS section
 * 
 * @package WordPress
 */

$news_section_title = get_field( 'news_section_title' );
$news_to_display = get_field( 'news_to_display' );
if( ! $news_to_display ) {
	return;
}
$news_args = array(
	'post__in' => $news_to_display,
	'posts_per_page' => -1,
	'orderby' => 'post__in'
);
$news = new WP_Query( $news_args );
?>

<section class="section" id="home-news-section">
	<div class="section-inner">
		<?php if ( $news_section_title ) : ?>
			<div class="section-title"><?php echo wp_kses_post( $news_section_title ); ?></div>
		<?php endif; ?>

		<div class="section-content">
			<div class="news-section-slider">
				<div class="swiper" data-total="5">
					<div class="swiper-wrapper">
						<?php while( $news->have_posts() ) : $news->the_post(); ?>
							<div class="swiper-slide">
								<div class="news-box">
									<a href="<?php the_permalink(); ?>" class="content-wrapper">
										<div class="news-box__content">
											<div class="title"><?php the_title(); ?></div>
											<div class="desc"><?php the_excerpt(); ?></div>
											<div class="permalink">רקא עוד</div>
										</div>
										<div class="image">
											<?php the_post_thumbnail( 'home-news' ); ?>
										</div>
									</a>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>

					</div>
				</div>

				<div class="swiper-button-control swiper-button-prev"></div>
				<div class="swiper-button-control swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>