<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

?>

<article class="post">
	<header class="post__header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="post__title">', '</h1>' );
		else :
			the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; 
		?>
	</header><!-- .post__header -->

	<div class="post__content">
		<?php
		the_content( sprintf(
			wp_kses( __( 'Continue reading %s', 'aube' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="post__more-title">"', '"</span>', false )
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="post__footer">
		POST FOOTER
	</footer><!-- .post__footer -->
</article><!-- .post -->
