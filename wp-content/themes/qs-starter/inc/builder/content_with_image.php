<?php
$data = isset( $args['data'] ) ? $args['data'] : array();

$layout             = $data['acf_fc_layout'];
$content            = isset( $data['content'] ) ? $data['content'] : '';
$image              = isset( $data['image'] ) ? $data['image'] : '';
$youtube_video_id   = isset( $data['youtube_video_id'] ) ? $data['youtube_video_id'] : '';
?>

<?php if ( $content || $image || $youtube_video_id ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item__row flex">

		<?php if( $content ) : ?>
			<div class="col content-column">
				<div class="wp-editor">
					<?php echo wp_kses_post($content); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $image || $youtube_video_id ) : ?>
			<div class="col image-column">
				<?php if ( $youtube_video_id ) : ?>
					<div class="youtube-iframe-wrapper">
						<iframe width="600" height="375" 
							src="https://www.youtube.com/embed/<?php echo esc_html($youtube_video_id); ?>" 
							title="YouTube video player" frameborder="0" 
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
							allowfullscreen></iframe>
					</div>
				<?php else : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>">
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

</div>

<?php endif; ?>