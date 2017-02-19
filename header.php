<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aube
 */

include_once 'inc/walkers/class-site-menu-walker.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
	<div class="site">

		<header class="site__header" role="banner">
			<div class="site__branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site__description"><?php echo $description; ?></p>
				<?php
				endif; ?>
			</div><!-- .site__branding -->

			<nav class="site__nav" role="navigation">
				<button class="site__toggle"><?php esc_html_e( 'Menu', 'aube' ); ?></button>
				<?php
				if ( has_nav_menu( 'site-header' ) ) {
					wp_nav_menu( array( 
						'theme_location'  => 'site-header',
						'menu_id'         => 'site-menu',
						'menu_class'      => 'site__menu',
						'container_class' => 'site__menu-container',
						'walker'          => new Site_Menu_Walker()
					) );
				}
				?>
			</nav><!-- .site__nav -->
		</header><!-- .site__header -->

		<main class="site__content">