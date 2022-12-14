<?php
/**
 * Header Banner
 * 
 * @package WordPress
 */

$header_banner_description = get_field( 'header_banner_description' );
?>

<section class="section <?php echo $header_banner_description ? 'has-description' : ''; ?>" id="header-banner">
	<div class="header-banner-inner">
		<?php get_template_part('inc/global/breadcrumbs'); ?>
		<div class="banner-title"><?php echo get_the_title(); ?></div>
		<?php if ( $header_banner_description ) : ?>
		<div class="banner-description"><?php echo wp_kses_post($header_banner_description); ?></div>
		<?php endif; ?>
	</div>
</section>