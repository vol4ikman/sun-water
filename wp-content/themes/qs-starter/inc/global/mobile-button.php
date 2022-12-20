<?php
/**
 * Mobile floating bottom section
 * 
 * @package WordPress
 */

if( ! wp_is_mobile() ) {
	return;
} else {
	$cb_list = get_field( 'cb_list', 'option' );
}
?>

<div class="mobile-bottom-section">
	<div class="mobile-section-inner">

		<button class="caller mobile-actions-call" data-target="mobile-actions-call-init">
			<span class="icon"></span>
			<span class="title">פעולות נפוצות</span>
		</button>

		<button class="caller mobile-sharer-call">
			<span class="icon"></span>
		</button>

		<button class="caller mobile-search-call">
			<span class="icon"></span>
			<span class="title">חיפוש</span>
		</button>
		
	</div>

	<div id="mobile-actions-call-init" class="mobile-actions-wrapper">
		<div class="call-init-inner"></div>
	</div>
</div>