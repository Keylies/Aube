<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

?>

<article class="post">
	<header class="post__header">
		<?php the_title( '<h1 class="post__title">', '</h1>' ); ?>
	</header><!-- .post__header -->

	<div class="post__content">
		<?php the_content(); ?>
	</div><!-- .post__content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="post__footer">
			POST FOOTER
		</footer><!-- .post__footer -->
	<?php endif; ?>
</article><!-- .post -->
