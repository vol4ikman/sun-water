<?php
/**
 * Links builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$layout       = $data['acf_fc_layout'];
$main_title   = isset( $data['main_title'] ) ? $data['main_title'] : '';
$links        = isset( $data['links'] ) ? $data['links'] : '';
?>

<?php if( $main_title || $links ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item__row">

		<?php if( $main_title ) : ?>
			<div class="builder-item__title">
				<?php echo $main_title; ?>
			</div>
		<?php endif; ?>

		<?php if ( $links ) : ?>
			<ul class="links-list">
				<?php foreach( $links as $item ) : ?>
					<li>
						<a href="<?php echo esc_url( $item['link']['url'] ); ?>">
							<?php echo esc_html( $item['link']['title'] ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>

</div>

<?php endif; ?>