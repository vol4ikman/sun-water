<?php
/**
 * Site header
 *
 * @package WordPress
 */

$logo = get_field( 'logo', 'options' );
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title( '' ); ?>
		<?php
		if ( wp_title( '', false ) ) {
				echo ' :';
		}
		?>
		<?php bloginfo( 'name' ); ?>
	</title>
	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php /* Please create favicon files with http://iconogen.com/ */ ?>
	<link rel="shortcut icon" href="<?php echo esc_url( THEME ); ?>/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( THEME ); ?>/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo esc_url( THEME ); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo esc_url( THEME ); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo esc_url( THEME ); ?>/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo esc_url( THEME ); ?>/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="<?php echo esc_url( THEME ); ?>/images/favicon/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo esc_url( THEME ); ?>/images/favicon/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo esc_url( THEME ); ?>/images/favicon/widetile.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo esc_url( THEME ); ?>/images/favicon/largetile.png" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="site-wrapper">

	<header class="header clear" role="banner">

		<?php get_template_part('inc/header/search', 'bar' ); ?>

		<div class="header-inner">
			<?php if ( $logo ) : ?>
				<div class="logo-wrapper">
					<a href="<?php echo esc_url( get_home_url() ); ?>">
						<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="">
					</a>
				</div>
			<?php endif; ?>

			<div class="menu-wrapper">
				<?php header_menu(); ?>
			</div>

			<div class="action-buttons">
				<ul>
					<li>
						<button class="lang-button">
							<span class="lang-name">English</span>
						</button>
					</li>
					<li>
						<button class="search-button">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.8821 13.9762H14.8783L14.5226 13.6332C15.7677 12.1847 16.5174 10.3043 16.5174 8.25869C16.5174 3.69735 12.82 0 8.25869 0C3.69735 0 0 3.69735 0 8.25869C0 12.82 3.69735 16.5174 8.25869 16.5174C10.3043 16.5174 12.1847 15.7677 13.6332 14.5226L13.9762 14.8783V15.8821L18.1069 20L20 18.1069L15.8821 13.9762ZM8.25869 13.9762C5.09498 13.9762 2.54113 11.4224 2.54113 8.25869C2.54113 5.09498 5.09498 2.54113 8.25869 2.54113C11.4224 2.54113 13.9762 5.09498 13.9762 8.25869C13.9762 11.4224 11.4224 13.9762 8.25869 13.9762Z" fill="#255197"/>
							</svg>
						</button>
					</li>	
					<li>
						<button class="contrast-button">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 0C4.47656 0 0 4.47656 0 10C0 15.5234 4.47656 20 10 20C15.5234 20 20 15.5234 20 10C20 4.47656 15.5234 0 10 0ZM10 18.332V1.66797C14.6016 1.66797 18.332 5.39844 18.332 10C18.332 14.6016 14.6016 18.332 10 18.332Z" fill="#255197"/>
							</svg>
						</button>
					</li>								
				</ul>
			</div>
		</div>

	</header> 

	<?php get_template_part('inc/header/news', 'bar'); ?>
