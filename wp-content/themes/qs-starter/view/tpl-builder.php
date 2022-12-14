<?php
/**
 * Template Name: Page Builder
 * 
 * @package WordPress
 */

$page_builder = get_field('page_builder');
get_header();
get_template_part('inc/header/banner');
?>

<section class="section" id="page-builder-section">
	<div class="container">
		<div class="builder-inner">
			<?php foreach( $page_builder as $builder ) : ?>
				<?php get_template_part( 'inc/builder/' . $builder['acf_fc_layout'], '', array('data' => $builder) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php
get_footer();