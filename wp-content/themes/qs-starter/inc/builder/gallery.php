<?php
/**
 * Gallery builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$thumbnail_size   = 'contact-video-cover';
$layout           = $data['acf_fc_layout'];
$media_gallery    = isset( $data['media_gallery'] ) ? $data['media_gallery'] : array();
?>

<?php if( $media_gallery ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item-inner">

		<div class="builder-item__row">

			<div class="swiper builder-gallery-carousel">

				<div class="swiper-wrapper">
					<?php 
						foreach( $media_gallery as $media ) : 
							$image        = isset( $media['image'] ) ? $media['image'] : array();
							$youtube_id   = isset( $media['youtube_id'] ) ? $media['youtube_id'] : '';
						?>
						<div class="swiper-slide">
							<div class="gallery-item">

								<?php if ( ! $youtube_id ) : ?>
									<?php echo wp_get_attachment_image( $image['ID'], $thumbnail_size ); ?>
								<?php else: ?>
									<a href="http://www.youtube.com/watch?v=<?php echo esc_html($youtube_id); ?>" class="popup-youtube">
										<span class="play-video-button"></span>
										<?php echo wp_get_attachment_image( $image['ID'], $thumbnail_size ); ?>
									</a>
								<?php endif; ?>
								
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>

			<div class="swiper-button-control swiper-button-prev"></div>
			<div class="swiper-button-control swiper-button-next"></div>
			
		</div>

	</div>

</div>

<?php endif; ?>