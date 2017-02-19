<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

?>

<article class="post">
	<header class="post__header">
		<?php the_title( sprintf( '<h2 class="post__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post__meta">
			<?php aube_posted_on(); ?>
		</div><!-- .post__meta -->
		<?php endif; ?>
	</header><!-- .post__header -->

	<div class="post__summary">
		<?php the_excerpt(); ?>
	</div><!-- .post__summary -->

	<footer class="post__footer">
		<?php aube_entry_footer(); ?>
	</footer><!-- .post__footer -->
</article><!-- .post -->
