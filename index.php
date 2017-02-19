<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

get_header();
?>

<section class="page">
	<?php
	if ( have_posts() ) :
		if ( is_home() && !is_front_page() ) : ?>
			<header clas="page__header">
				<h1 class="page__title"><?php single_post_title(); ?></h1>
			</header><!-- .page__header -->

		<?php
		endif;

		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile;

		the_posts_navigation();

	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</section><!-- .page -->

<?php
get_footer();
