<?php
/**
 * Belline functions and definitions
 */

if ( ! function_exists( 'belline_setup' ) ) :
	function belline_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register menus
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'belline' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'belline_setup' );

/**
 * Enqueue scripts and styles.
 */
function belline_scripts() {
	// Enqueue main stylesheet
	wp_enqueue_style( 'belline-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // OpenElement Base CSS
    wp_enqueue_style( 'open-element', get_template_directory_uri() . '/assets/css/openElement.css', array(), '1.57.9' );
    wp_enqueue_style( 'site-fonts', get_template_directory_uri() . '/assets/css/Fonts.css', array(), '1.0' );
    wp_enqueue_style( 'oe-template-base', get_template_directory_uri() . '/assets/css/Base.css', array(), '1.0' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false );

    // Enqueue scripts (using WP's jQuery)
    wp_enqueue_script( 'oe-min', get_template_directory_uri() . '/assets/js/oe.min.js', array('jquery'), '1.57.9', true );
}
add_action( 'wp_enqueue_scripts', 'belline_scripts' );
