<?php
/**
 * Website breadcrumbs
 *
 * @package WordPress
 */

?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
	<div class="breadcrumbs-wrap">
		<?php yoast_breadcrumb( '<div id="breadcrumbs">','</div>' ); ?>
	</div>
<?php endif; ?>
