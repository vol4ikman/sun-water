<?php
/**
 * Single tender page
 * 
 * @package WordPress
 */

$page_builder   = get_field('page_builder');

get_header();
get_template_part('inc/header/banner');
?>

<section class="section" id="single-tender-section">

	<div class="container">

		<div class="section-wrapper">

			<div class="section-sidebar">
				<?php get_sidebar(); ?>
			</div>

			<div class="section-inner">
				
				<div class="tender-wp-the-content">
					<?php the_content(); ?>
				</div>

				<?php get_template_part('inc/tender/top', 'table'); ?>

				<?php get_template_part('inc/tender/short', 'description'); ?>

				<?php get_template_part('inc/tender/blue', 'table'); ?>

				<?php get_template_part('inc/tender/updates'); ?>

				<?php get_template_part('inc/tender/buttons'); ?>

				<div class="single-tender-section-devider"></div>

				<section class="section" id="page-builder-section">
					<div class="container">
						<div class="builder-inner">
							<?php foreach( $page_builder as $builder ) : ?>
								<?php get_template_part( 'inc/builder/' . $builder['acf_fc_layout'], '', array('data' => $builder) ); ?>
							<?php endforeach; ?>
						</div>
					</div>
				</section>

			</div>
		</div>

	</div>

</section>

<?php
get_footer();