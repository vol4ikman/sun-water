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
						<svg class="pause" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11C20.5 16.2467 16.2467 20.5 11 20.5C5.75329 20.5 1.5 16.2467 1.5 11C1.5 5.75329 5.75329 1.5 11 1.5C16.2467 1.5 20.5 5.75329 20.5 11ZM22 11C22 17.0751 17.0751 22 11 22C4.92487 22 0 17.0751 0 11C0 4.92487 4.92487 0 11 0C17.0751 0 22 4.92487 22 11ZM9.9002 15.4H7.7002V6.60004H9.9002V15.4ZM14.3002 15.4H12.1002V6.60004H14.3002V15.4Z" fill="#070F44"/>
						</svg>
						<svg class="play" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 23C5.93423 23 1 18.0653 1 12C1 5.9347 5.93423 1 12 1C18.0658 1 23 5.9347 23 12C23 18.0653 18.0658 23 12 23ZM12 1.91665C6.44002 1.91665 1.91665 6.44002 1.91665 12C1.91665 17.56 6.44002 22.0833 12 22.0833C17.56 22.0833 22.0833 17.56 22.0833 12C22.0833 6.44002 17.56 1.91665 12 1.91665Z" fill="#070F44" stroke="#070F44"/>
							<path d="M16.373 12.3852L9.95632 16.5102C9.81577 16.6019 9.63405 16.6069 9.48904 16.5272C9.34131 16.4467 9.25 16.2927 9.25 16.1248V7.87482C9.25 7.70698 9.34131 7.55298 9.48904 7.47242C9.55705 7.43525 9.63315 7.41647 9.70835 7.41647C9.79429 7.41647 9.88113 7.44066 9.95632 7.48943L16.373 11.6144C16.5037 11.6986 16.5833 11.8441 16.5833 11.9998C16.5833 12.1556 16.5037 12.301 16.373 12.3852ZM10.1667 8.71451V15.2851L15.2773 11.9998L10.1667 8.71451Z" fill="#070F44" stroke="#070F44" stroke-width="0.5"/>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; wp_reset_postdata(); ?>
