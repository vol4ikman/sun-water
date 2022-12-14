<?php
/**
 * Template Name: Contacts
 * 
 * @package WordPress
 */

$main_content                 = get_field('main_content');
$youtube_video_id             = get_field('youtube_video_id');
$youtube_video_cover_image    = get_field( 'youtube_video_cover_image' );

$section_title    = get_field( 'section_title' );
$contact_form     = get_field( 'contact_form' );
$contact_details  = get_field( 'contact_details' );

get_header();
get_template_part('inc/header/banner');
?>

<section class="main-content" id="contact-page-wrapper">
	<div class="container">
		
		<div class="section-row top-area">
			<div class="content-column">
				<?php if ( $main_content ) : ?>
					<div class="wp-editor-wrapper">
						<?php echo wp_kses_post($main_content); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="video-column">
				<div class="video-wrapper">
					<a href="#">
						<div class="image">
							<?php echo wp_get_attachment_image( $youtube_video_cover_image['ID'], 'contact-video-cover' );  ?>
							<span class="video-button"></span>
						</div>
						<?php if ( $youtube_video_id ) : ?>
							<div class="iframe">
								<iframe width="568" height="322" 
									src="https://www.youtube.com/embed/<?php echo $youtube_video_id; ?>" 
									title="YouTube video player" frameborder="0" 
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						<?php endif; ?>
					</a>
				</div>
			</div>

		</div>

		<div class="section-row bottom-area">

			<?php if ( $section_title ) : ?>
				<div class="section-title">
					<?php echo esc_html( $section_title ); ?>
				</div>
			<?php endif; ?>

			<div class="contacts-row">
				<div class="contact-sidebar">
					<?php 
						foreach( $contact_details as $item ) : 
							$icon = isset( $item['icon'] ) ? $item['icon']['url'] : '';
							$title = isset( $item['title'] ) ? $item['title'] : '';
							$description = isset( $item['description'] ) ? $item['description'] : '';
						?>
						<div class="contact-row">
							<?php if ( $icon ) : ?>
								<div class="icon">
									<img src="<?php echo esc_url($icon); ?>">
								</div>
							<?php endif; ?>

							<div class="desc">
								<?php if($title) : ?>
									<div class="title">
										<?php echo esc_html($title); ?>
									</div>
								<?php endif; ?>
								<?php if ( $description ) : ?>
									<div class="content">
										<?php echo wp_kses_post($description); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="'.$contact_form.'" title="עמוד צור קשר"]' ); ?>
				</div>
			</div>

		</div>

	</div>

</section>


<?php
get_footer();