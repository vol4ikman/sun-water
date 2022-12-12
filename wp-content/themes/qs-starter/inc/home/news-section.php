<?php
/**
 * Homepage NEWS section
 * 
 * @package WordPress
 */

$news_section_title = get_field( 'news_section_title' );
$news_to_display = get_field( 'news_to_display' );
if( ! $news_to_display ) {
	return;
}
?>

<section class="section" id="home-news-section">
	<div class="section-inner">
		<?php if ( $news_section_title ) : ?>
			<div class="section-title"><?php echo wp_kses_post( $news_section_title ); ?></div>
		<?php endif; ?>

		<div class="section-content">
			<div class="news-section-slider">
				<div class="swiper" data-total="5">
					<div class="swiper-wrapper">
						
						<div class="swiper-slide">
							<div class="news-box">
								<a href="#" class="content-wrapper">
									<div class="news-box__content">
										<div class="title">פרוייקטים אחרונים</div>
										<div class="desc">תאגיד מי שמש משקיע רבות בשיקום ופיתוח תשתיות בעיר בית שמש...</div>
										<div class="permalink">רקא עוד</div>
									</div>
									<div class="image">
										<img src="<?php echo THEME; ?>/images/news-thumb.png">
									</div>
								</a>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="news-box">
								<a href="#" class="content-wrapper">
									<div class="news-box__content">
										<div class="title">פרוייקטים אחרונים</div>
										<div class="desc">תאגיד מי שמש משקיע רבות בשיקום ופיתוח תשתיות בעיר בית שמש...</div>
										<div class="permalink">רקא עוד</div>
									</div>
									<div class="image">
										<img src="<?php echo THEME; ?>/images/news-thumb.png">
									</div>
								</a>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="news-box">
								<a href="#" class="content-wrapper">
									<div class="news-box__content">
										<div class="title">פרוייקטים אחרונים</div>
										<div class="desc">תאגיד מי שמש משקיע רבות בשיקום ופיתוח תשתיות בעיר בית שמש...</div>
										<div class="permalink">רקא עוד</div>
									</div>
									<div class="image">
										<img src="<?php echo THEME; ?>/images/news-thumb.png">
									</div>
								</a>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="news-box">
								<a href="#" class="content-wrapper">
									<div class="news-box__content">
										<div class="title">פרוייקטים אחרונים</div>
										<div class="desc">תאגיד מי שמש משקיע רבות בשיקום ופיתוח תשתיות בעיר בית שמש...</div>
										<div class="permalink">רקא עוד</div>
									</div>
									<div class="image">
										<img src="<?php echo THEME; ?>/images/news-thumb.png">
									</div>
								</a>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="news-box">
								<a href="#" class="content-wrapper">
									<div class="news-box__content">
										<div class="title">פרוייקטים אחרונים</div>
										<div class="desc">תאגיד מי שמש משקיע רבות בשיקום ופיתוח תשתיות בעיר בית שמש...</div>
										<div class="permalink">רקא עוד</div>
									</div>
									<div class="image">
										<img src="<?php echo THEME; ?>/images/news-thumb.png">
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="swiper-button-control swiper-button-prev"></div>
				<div class="swiper-button-control swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>