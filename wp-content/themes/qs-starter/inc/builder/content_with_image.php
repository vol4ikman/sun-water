<?php
$data = isset( $args['data'] ) ? $args['data'] : array();

$content = isset( $data['content'] ) ? $data['content'] : '';
$image = isset( $data['image'] ) ? $data['image'] : '';


?>

<div class="builder-item" data-layout="<?php echo esc_html( $data['acf_fc_layout'] ); ?>">
	
	<div class="builder-item__row flex">

		<?php if( $content ) : ?>
			<div class="col content-column">
				<div class="wp-editor">
					<?php echo wp_kses_post($content); ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if ( $image ) : ?>
			<div class="col image-column">
				<img src="<?php echo esc_url( $image['url'] ); ?>">
			</div>
		<?php endif; ?>
	</div>

</div>