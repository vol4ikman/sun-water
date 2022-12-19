<?php
/**
 * Forms builder module
 * 
 * @package WordPress
 */

// [gravityform id="1" title="true"]

$data = isset( $args['data'] ) ? $args['data'] : array();

$layout       = $data['acf_fc_layout'];
$main_title   = isset( $data['main_title'] ) ? $data['main_title'] : '';
$forms        = isset( $data['forms'] ) ? $data['forms'] : '';
?>

<?php if( $main_title || $forms ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	<div class="builder-item-inner">
		<div class="builder-item__row">

			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if ( $forms ) : ?>
				<div class="forms-head">שם הטופס</div>
				<ul class="forms-list">
					<?php 
						$form_item = 0;
						foreach( $forms as $item ) :
							$form_item++;
							$form_name                 = isset( $item['form_name'] ) ? $item['form_name'] : '';
							$gravity_form_id           = isset( $item['gravity_form_id'] ) ? $item['gravity_form_id'] : '';
							$gravity_form_shortcode    = isset( $item['gravity_form_shortcode'] ) ? $item['gravity_form_shortcode'] : '';
							$pdf_file_url              = isset( $item['pdf_file'] ) ? $item['pdf_file'] : '';

							if( !$pdf_file_url ) {
								$label = 'מלא טופס';
							} else {
								$label = 'הדפסה';
							}

					?>
						<li>
							<a href="#gravity-form-<?php echo esc_html($form_item); ?>" class="form-title call-gravity-form" 
								title="<?php echo esc_html( $form_name ); ?>">
								<?php echo esc_html( $form_name ); ?>
							</a>
							<a href="<?php echo $pdf_file_url ? esc_url( $pdf_file_url ) : '#gravity-form-' . esc_html($form_item); ?>"
								target="_blank" <?php echo $pdf_file_url ? 'class="form-pdf"' : 'class="form-pdf call-gravity-form"'; ?>>
								<?php echo esc_html( $label ); ?>
							</a>
							<div class="gravity-form-popup mfp-hide" id="gravity-form-<?php echo esc_html($form_item); ?>">
								<div class="gravity-form-inner">
									<?php echo do_shortcode( $gravity_form_shortcode ); ?>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>