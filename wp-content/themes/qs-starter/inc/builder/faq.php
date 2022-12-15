<?php
/**
 * Links builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$layout             = $data['acf_fc_layout'];
$main_title         = isset( $data['main_title'] ) ? $data['main_title'] : '';
$select_faq_posts   = isset( $data['select_faq_posts'] ) ? $data['select_faq_posts'] : array();
?>

<?php if( $main_title || $select_faq_posts ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item-inner">

		<div class="builder-item__row">

			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if ( $select_faq_posts ) : ?>
				<ul class="faq-list">
					<?php foreach( $select_faq_posts as $item ) : ?>
						<li>
							<div class="question">
								<div class="question-inner">
									<div class="title"><?php echo esc_html( get_the_title($item) ); ?></div>
									<button class="indicator"></button>
								</div>
							</div>

							<div class="answer">
								<?php echo wpautop( get_the_content( null,false, $item ) ); ?>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		
	</div>

</div>

<?php endif; ?>