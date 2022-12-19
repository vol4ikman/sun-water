<?php
/**
 * Single project page
 * 
 * @package WordPress
 */

$google_maps = get_field('google_maps');
get_header();
get_template_part('inc/header/banner');
?>

<section class="section" id="single-project-section">
	<div class="container">
		<div class="section-wrapper">
			<div class="section-sidebar">
				<?php get_sidebar(); ?>
			</div>

			<div class="section-inner">
				
				<div class="content-row">
					<div class="col content-col">
						<div class="project-title"><?php echo esc_html( get_the_title() ); ?></div>
						<div class="project-content"><?php the_content(); ?></div>
					</div>
					<div class="col image-col">
						<?php the_post_thumbnail('single-project'); ?>
					</div>
				</div>

				<div class="google-maps">
					<?php echo $google_maps; ?>
				</div>

			</div>
		</div>

	</div>
</section>

<?php
get_footer();