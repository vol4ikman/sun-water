<?php
/**
 * Default search form template
 *
 * @package WordPress
 */

?>
<form class="search" method="get" action="<?php echo esc_url( home_url() ); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="מה ברצונכם לחפש?">
	<button class="search-submit" type="submit" role="button" title="חיפוש"></button>
</form>
