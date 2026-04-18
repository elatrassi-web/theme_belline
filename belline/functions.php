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


/**
 * Custom Settings for Availability Status
 */
function belline_register_settings() {
    add_option( 'belline_availability_status', 'disponible' );
    register_setting( 'belline_options_group', 'belline_availability_status' );
}
add_action( 'admin_init', 'belline_register_settings' );

function belline_register_options_page() {
    add_options_page('Statut Voyance', 'Statut Voyance', 'manage_options', 'belline_status', 'belline_options_page');
}
add_action('admin_menu', 'belline_register_options_page');

function belline_options_page() {
    ?>
    <div class="wrap">
        <h2>Statut de Disponibilité</h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'belline_options_group' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Statut actuel:</th>
                    <td>
                        <?php $status = get_option('belline_availability_status', 'disponible'); ?>
                        <label>
                            <input type="radio" name="belline_availability_status" value="disponible" <?php checked($status, 'disponible'); ?> />
                            Disponible (Vert)
                        </label><br/>
                        <label>
                            <input type="radio" name="belline_availability_status" value="indisponible" <?php checked($status, 'indisponible'); ?> />
                            Non Disponible (Rouge)
                        </label>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
