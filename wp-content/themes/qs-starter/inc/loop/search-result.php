<?php
/**
 * Search page template
 *
 * @package WordPress
 */
?>

<div <?php post_class('search-result-item'); ?>>
	<div class="post-title">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</div>
	<div class="post-excerpt"><?php the_excerpt(); ?></div>
	<div class="post-permalink">
		<a href="<?php the_permalink(); ?>">
			<span class="title">קרא עוד</span>
			<span class="icon"></span>
		</a>
	</div>
</div>