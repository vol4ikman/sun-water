<?php
/**
 * Global floating contact form
 * 
 * @package WordPress
 */

$main_cb_title    = get_field( 'main_cb_title', 'option' );
$cb_list          = get_field( 'cb_list', 'option' );
?>

<div class="floating-form-wrapper">
	<div class="floating-form-inner">
		<button class="main-cb-button">
			<span class="icon"></span>	
			<span class="title"><?php echo esc_html( $main_cb_title ); ?></span>
		</button>
	</div>
</div>