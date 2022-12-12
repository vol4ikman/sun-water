<?php
/**
 * Homepage services section
 * 
 * @package WordPress
 */

$section_title = get_field('section_title');
$services = get_field('services');
if( ! $services ) {
	return;
}
?>

<section class="section" id="home-services-section">
	<div class="section-inner">
		<?php if ( $section_title ) : ?>
			<div class="section-title"><?php echo wp_kses_post( $section_title ); ?></div>
		<?php endif; ?>

		<div class="section-content">
			<div class="services-grid">
				<?php 
					foreach( $services as $service ) : 
						$icon   = isset( $service['icon'] ) ? $service['icon']['url'] : '';
						$title  = isset( $service['title'] ) ? $service['title'] : '';
						$url    = isset( $service['url'] ) ? $service['url'] : '';
				?>
					<div class="service">
						<?php if( $url ) : ?><a href="<?php echo esc_url( $url ); ?>"><?php endif; ?>
							<?php if ( $icon ) : ?>
								<div class="icon"><img src="<?php echo esc_url( $icon ); ?>"></div>
							<?php endif; ?>
							<div class="title"><?php echo wp_kses_post( $title ); ?></div>
						<?php if( $url ) : ?></a><?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>