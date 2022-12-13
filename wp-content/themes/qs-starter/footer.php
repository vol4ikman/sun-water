<?php
/**
 * Site footer
 *
 * @package WordPress
 */

$i = 1;
$footer_logo              = get_field( 'footer_logo', 'option' );
$footer_contact_details   = get_field( 'footer_contact_details', 'option' );

$footer_menus = array(
	array(
		'title' => get_field( 'footer_menu_1_title', 'option'),
		'menu' => get_field( 'footer_menu_1', 'option'),
	),
	array(
		'title' => get_field( 'footer_menu_2_title', 'option'),
		'menu' => get_field( 'footer_menu_2', 'option'),
	),
	array(
		'title' => get_field( 'footer_menu_3_title', 'option'),
		'menu' => get_field( 'footer_menu_3', 'option'),
	),
);

$facebook_url = get_field( 'facebook_url', 'option' );

?>

<footer class="footer" role="contentinfo">

	<div class="container">
		<div class="footer-inner">
			<div class="row">
				<div class="footer-column col-1">
					<a class="footer-logo" href="<?php echo esc_url( get_home_url() ); ?>">
						<img src="<?php echo esc_url( $footer_logo['url'] ); ?>">
					</a>
				</div>
				<?php foreach( $footer_menus as $footer_menu ) : $i++; ?>
					<div class="footer-column col-<?php echo $i; ?> menu-column">
						<div class="menu-title"><?php echo esc_html( $footer_menu['title'] ); ?></div>
						<?php 
							wp_nav_menu(
								array(
									'menu' 		=> $footer_menu['menu'],
									'container' => ''
								)
							); 
						?>
					</div>
				<?php endforeach; ?>
				<div class="footer-column col-5 col-contacts">
					<div class="menu-title">פרטי יצירת קשר עם התאגית</div>
					<div class="contact-details">
						<?php echo wp_kses_post($footer_contact_details); ?>
						<?php if( $facebook_url ) : ?>
							<div class="footer-facebook">
								<a href="<?php echo esc_url($facebook_url); ?>" target="_blank">
									<img src="<?php echo esc_url(THEME); ?>/images/footer-facebook.png">
								</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="footer-devider"></div>

	<div class="container">
		<div class="row last-row">
			<div class="rights">כל הזכויות שמורות למי שמש בע"מ</div>
			<div class="credits"><a href="https://dooble.co.il" target="_blank">dooble</a></div>
		</div>
	</div>

</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
