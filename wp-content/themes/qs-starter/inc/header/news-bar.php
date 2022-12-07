<?php
/**
 * New bar scroller
 */

//https://codepen.io/jaredkc/pen/PogdXB

$news_args = array(
	'post_type' => 'news',
	'posts_per_page' => -1,
	'meta_query' => array(
		array(
			'key' => 'hide',
			'value' => true,
			'compare' => '!='
		)
	)
);

$news = new WP_Query( $news_args );
 
?>

<?php if( $news->have_posts() ) : ?>
	<section class="section" id="news-bar">
		<div class="wide-container">
			<div class="news-bar-inner">
				<div class="twitter-scroll">
					<?php 
						while( $news->have_posts() ) :  $news->the_post(); 
							$permalink = get_field( 'news_permalink' );
							$news_date = get_field( 'news_date' );
						?>
						<a class="item-link" href="<?php echo esc_url($permalink); ?>" target="_blank">
							<span class="item-date"><?php echo esc_html( $news_date ); ?></span>
							<span class="item-text"><?php echo esc_html( get_the_title() ); ?></span>
							<span class="item-arrow">
								<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.1748 1.175L2.35814 5L6.1748 8.825L4.9998 10L-0.000195245 5L4.9998 -5.13609e-08L6.1748 1.175Z" fill="#070F44"/>
								</svg>
							</span>
						</a>
					<?php endwhile; ?>
				</div>

				<div class="pause-news-bar">
					<button type="button">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11C20.5 16.2467 16.2467 20.5 11 20.5C5.75329 20.5 1.5 16.2467 1.5 11C1.5 5.75329 5.75329 1.5 11 1.5C16.2467 1.5 20.5 5.75329 20.5 11ZM22 11C22 17.0751 17.0751 22 11 22C4.92487 22 0 17.0751 0 11C0 4.92487 4.92487 0 11 0C17.0751 0 22 4.92487 22 11ZM9.9002 15.4H7.7002V6.60004H9.9002V15.4ZM14.3002 15.4H12.1002V6.60004H14.3002V15.4Z" fill="#070F44"/>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>
