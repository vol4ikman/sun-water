<?php
/**
 * Sidebar template
 *
 * @package WordPress
 */

$sidebar_title = get_field( 'sidebar_title' );
$sidebar_menu = get_field( 'sidebar_menu' );
?>

<?php if ( $sidebar_title || $sidebar_menu ) : ?>

	<aside class="sidebar" role="complementary">
		<div class="sidebar-title"><?php echo esc_html($sidebar_title); ?></div>
		<div class="sidebar-menu"><?php echo wp_nav_menu( array('menu' => $sidebar_menu, 'container' => '')); ?></div>
	</aside>
	
<?php endif; ?>
