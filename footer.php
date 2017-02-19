<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aube
 */

include_once 'inc/walkers/class-site-footer-menu-walker.php';
?>

	</main><!-- .site__content -->

	<footer class="site__footer" role="contentinfo">
		<?php
		if ( has_nav_menu( 'site-footer' ) ) {
			wp_nav_menu( array( 
				'theme_location'  => 'site-footer',
				'menu_id'         => 'site-footer-menu',
				'menu_class'      => 'site__footer-menu',
				'container_class' => 'site__footer-menu-container',
				'walker'          => new Site_Footer_Menu_Walker()
			) );
		}
		?>
	</footer><!-- .site__footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
