<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aube
 */

if ( !is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="widgets" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- .widgets -->
