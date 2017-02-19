<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

get_header();
?>

<section class="archive">
	<header class="archive__header">
		<?php
			the_archive_title( '<h1 class="archive__title">', '</h1>' );
			the_archive_description( '<div class="archive__description">', '</div>' );
		?>
	</header><!-- .archive__header -->
	
	<?php if ( have_posts() ) : ?>
	<div class="archive__content">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile;

		the_posts_navigation();
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif; 
	?>
	</div><!-- .archive__content -->
</section><!-- .archive -->

<?php
get_footer();
