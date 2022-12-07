<?php
/**
 * Homepage main slider
 */

$home_slider = get_field( 'home_slider' );
if( ! $home_slider ) {
	return;
}
?>

<section class="section home-main-slider">

	<div dir="rtl" class="swiper">

		<div class="swiper-wrapper">

			<?php 
				foreach( $home_slider as $item ) : 
					$image         = isset( $item['image'] ) ? $item['image'] : '';
					$title         = isset( $item['title'] ) ? $item['title'] : '';
					$description   = isset( $item['description'] ) ? $item['description'] : '';
					$btn_title     = isset( $item['btn_title'] ) ? $item['btn_title'] : '';
					$btn_link      = isset( $item['btn_link'] ) ? $item['btn_link'] : '';
				?>
				<div class="swiper-slide" style="background-image:url(<?php echo esc_url( $image['url'] ); ?>);">
					<!-- <img src="<?php echo esc_url( $image['url'] ); ?>"> -->
					<div class="wide-container">
						<div class="slide-inner">
							<?php if ( $title ) : ?>
								<div class="title"><?php echo esc_html( $title ) ?></div>
							<?php endif; ?>
							<?php if ( $description ) : ?>
								<div class="desc"><?php echo wp_kses_post( $description ); ?></div>
							<?php endif; ?>
							<?php if ( $btn_link ) : ?>
								<a href="<?php echo esc_url( $btn_link ); ?>" class="button yellow-btn">
									<?php echo esc_html( $btn_title ); ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<?php /* If we need navigation buttons
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
		*/ ?>

	</div>
</section>