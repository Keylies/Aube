<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aube
 */

get_header();
?>

<section class="404">
	<header class="404__header">
		<h1 class="404__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aube' ); ?></h1>
	</header><!-- .page-header -->

	<div class="404__content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'aube' ); ?></p>

		<?php get_search_form(); ?>

	</div><!-- .page-content -->
</section>

<?php
get_footer();
