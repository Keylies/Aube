<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Aube
 */

get_header();
?>

<section class="search">
<?php if ( have_posts() ) : ?>

	<header class="search__header">
		<h1 class="search__title"><?php printf( esc_html__( 'Search Results for: %s', 'aube' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .search__header -->

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'search' );

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
</section><!-- .page -->

<?php
get_footer();
