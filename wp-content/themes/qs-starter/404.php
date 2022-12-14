<?php 
/**
 * 404 page
 * 
 * @package WordPress
 */

$content_404    = get_field( 'content_404', 'option' );
$image_404      = get_field( 'image_404', 'option' );
$back_to_home   = get_field( 'back_to_home', 'option' );

get_header(); 
?>

<section class="section" id="page-404-wrapper">
	<div class="container">
		<div class="logo-404">
			<div class="number first-number">4</div>
			<div class="icon">
				<img src="<?php echo esc_url($image_404['url']); ?>">
			</div>
			<div class="number last-number">4</div>
		</div>

		<div class="title"><?php echo esc_html( $content_404 ); ?></div>

		<?php if ( $back_to_home ) : ?>
			<div class="home-button">
				<a href="<?php echo esc_url( $back_to_home['url'] ); ?>">
					<?php echo esc_html( $back_to_home['title'] ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
