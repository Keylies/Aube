<?php
/**
 * Aube functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aube
 */

class Aube_Init {

	function __construct() {
		add_filter( 'stylesheet_uri', array( $this, 'change_stylesheet_uri' ), 10, 2 );

		add_action( 'after_setup_theme', array( $this, 'add_theme_supports' ) );
		add_action( 'after_setup_theme', array( $this, 'register_menus' ) );
		//add_action( 'init', array( $this, 'register_post_types' ) );
		//add_action( 'init', array( $this, 'register_taxonomies' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );

		$this->load_extras();
	}

	function add_theme_supports() {
		load_theme_textdomain( 'aube', get_template_directory() . '/languages' );

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
	}

	function register_menus() {
		register_nav_menus( array(
			'site-header' => esc_html__( 'Header Menu', 'aube' ),
		));

		register_nav_menus( array(
			'site-footer' => esc_html__( 'Footer Menu', 'aube' ),
		));
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function change_stylesheet_uri( $stylesheet_uri, $stylesheet_dir_uri ) {
		return $stylesheet_dir_uri . '/styles';
	}

	private function get_scripts_uri() {
		return get_template_directory_uri() . '/js';
	}

	function register_styles() {
		wp_enqueue_style( 'aube', get_stylesheet_uri() . '/style.css' );
	}

	function register_scripts() {
		wp_enqueue_script( 'app', $this->get_scripts_uri() . '/app.js' );

		//wp_deregister_script( 'jquery' );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	private function load_extras() {
		include_once 'inc/template-tags.php';
	}
}

new Aube_Init();