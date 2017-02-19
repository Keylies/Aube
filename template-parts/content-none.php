<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aube
 */

?>

<section class="page">
	<header class="page__header">
		<h1 class="page__title"><?php esc_html_e( 'Nothing Found', 'aube' ); ?></h1>
	</header><!-- .page__header -->

	<div class="page__content">
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'aube' ); ?></p>
		<?php get_search_form(); ?>
	</div><!-- .page__content -->
</section><!-- .page -->
