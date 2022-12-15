<?php
/**
 * Feedback module
 * 
 * @package WordPress
 */

$hide_feedback    = get_field('hide_feedback');
if( $hide_feedback ) {
	return;
}
$feedback_title   = get_field('feedback_title');

$yes_title    = get_field('yes_title');
$yes_icon     = get_field('yes_icon');

$no_title   = get_field('no_title');
$no_icon    = get_field('no_icon');
?>

<?php if ( $feedback_title ) : ?>
	
<section class="section" id="feedback-section">
	<div class="container">
		<div class="feedback-module-inner">
			<?php if ( $feedback_title ) : ?>
				<div class="feedback-title"><?php echo esc_html($feedback_title); ?></div>
			<?php endif; ?>

			<div class="feedback-answers" data-id="<?php echo esc_html( $post->ID ); ?>">
				<button class="yes">
					<div class="icon">
						<img src="<?php echo esc_url($yes_icon['url'] ); ?>">
					</div>
					<div class="title"><?php echo esc_html( $yes_title ) ;?></div>
				</button>

				<button class="no">
					<div class="icon">
						<img src="<?php echo esc_url($no_icon['url'] ); ?>">
					</div>
					<div class="title"><?php echo esc_html( $no_title ) ;?></div>
				</button>
			</div>

			<div class="feedback-ajax"></div>
		</div>
	</div>
</section>

<?php endif; ?>