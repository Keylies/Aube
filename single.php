<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Aube
 */

get_header();
?>

<section class="single">
	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', get_post_format() );

		the_post_navigation();

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		
	endwhile;
	?>
</section><!-- .single -->

<?php
get_footer();
