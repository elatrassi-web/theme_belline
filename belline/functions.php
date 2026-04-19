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


/**
 * Register Custom Post Type for Form Messages
 */
function belline_register_messages_cpt() {
    $labels = array(
        'name'                  => 'Messages Formulaires',
        'singular_name'         => 'Message',
        'menu_name'             => 'Messages',
        'all_items'             => 'Tous les Messages',
        'view_item'             => 'Voir le Message',
        'search_items'          => 'Chercher un message',
        'not_found'             => 'Aucun message trouvé',
        'not_found_in_trash'    => 'Aucun message dans la corbeille',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-email',
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
    );

    register_post_type( 'belline_message', $args );
}
add_action( 'init', 'belline_register_messages_cpt' );

/**
 * Customize Columns for Messages CPT
 */
function belline_messages_columns( $columns ) {
    $new_columns = array(
        'cb' => $columns['cb'],
        'title' => 'Sujet / Expéditeur',
        'form_section' => 'Section de Provenance',
        'sender_email' => 'Email',
        'date' => $columns['date'],
    );
    return $new_columns;
}
add_filter( 'manage_belline_message_posts_columns', 'belline_messages_columns' );

function belline_messages_custom_column( $column, $post_id ) {
    switch ( $column ) {
        case 'form_section':
            echo esc_html( get_post_meta( $post_id, 'form_section', true ) );
            break;
        case 'sender_email':
            echo esc_html( get_post_meta( $post_id, 'sender_email', true ) );
            break;
    }
}
add_action( 'manage_belline_message_posts_custom_column', 'belline_messages_custom_column', 10, 2 );


/**
 * Form Submission Handler
 */
function belline_handle_form_submission() {
    // Check nonce for security
    if ( ! isset( $_POST['belline_form_nonce'] ) || ! wp_verify_nonce( $_POST['belline_form_nonce'], 'submit_belline_form' ) ) {
        wp_die( 'La vérification de sécurité a échoué. Veuillez réessayer.' );
    }

    $section = isset( $_POST['form_section'] ) ? sanitize_text_field( wp_unslash( $_POST['form_section'] ) ) : 'Inconnue';
    $prenom  = isset( $_POST['prenom'] ) ? sanitize_text_field( wp_unslash( $_POST['prenom'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';

    // Collect all other fields dynamically
    $content = "<h2>Nouveau message depuis : " . esc_html( $section ) . "</h2>";
    $content .= "<ul>";

    foreach ( $_POST as $key => $value ) {
        // Skip hidden/system fields
        if ( in_array( $key, array('action', 'belline_form_nonce', '_wp_http_referer', 'form_section') ) ) {
            continue;
        }
        $label = ucfirst( str_replace( '_', ' ', $key ) );
        $val   = sanitize_textarea_field( wp_unslash( $value ) );
        $content .= "<li><strong>" . esc_html( $label ) . ":</strong> " . esc_html( $val ) . "</li>";
    }
    $content .= "</ul>";

    // Handle File Upload (Photo)
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    require_once( ABSPATH . 'wp-admin/includes/media.php' );

    $attachment_id = 0;
    if ( isset( $_FILES['photo'] ) && ! empty( $_FILES['photo']['name'] ) ) {
        $attachment_id = media_handle_upload( 'photo', 0 );
        if ( is_wp_error( $attachment_id ) ) {
            // Log error or append to content
            $content .= "<p><em>Erreur lors de l'upload de la photo : " . $attachment_id->get_error_message() . "</em></p>";
            $attachment_id = 0;
        } else {
            $photo_url = wp_get_attachment_url( $attachment_id );
            $content .= "<p><strong>Photo jointe :</strong><br><img src='" . esc_url( $photo_url ) . "' style='max-width:300px;'/></p>";
        }
    }

    // Create the Post
    $post_title = 'Message de ' . $prenom . ' (' . $section . ')';
    $post_data = array(
        'post_title'   => wp_strip_all_tags( $post_title ),
        'post_content' => $content,
        'post_status'  => 'publish',
        'post_type'    => 'belline_message',
    );

    $post_id = wp_insert_post( $post_data );

    if ( $post_id ) {
        // Save meta data for columns
        update_post_meta( $post_id, 'form_section', $section );
        update_post_meta( $post_id, 'sender_email', $email );

        // Attach image to post if successful
        if ( $attachment_id ) {
            wp_update_post( array(
                'ID'          => $attachment_id,
                'post_parent' => $post_id
            ) );
        }

        // Redirect back with success message
        $redirect_url = add_query_arg( 'form_success', '1', wp_get_referer() );
        wp_safe_redirect( $redirect_url );
        die();
    } else {
        wp_die( 'Erreur lors de la sauvegarde du message.' );
    }
}
add_action( 'admin_post_submit_belline_form', 'belline_handle_form_submission' );
add_action( 'admin_post_nopriv_submit_belline_form', 'belline_handle_form_submission' );

// Auto-create PayPal Thank You and Cancel pages
function belline_create_paypal_pages() {
    $pages_to_create = array(
        'remerciement-don' => array(
            'title'   => 'Remerciement Don',
            'content' => '<div style="text-align:center; padding: 50px 20px;"><h1 style="color: #ffff00;">Merci beaucoup !</h1><p style="font-size: 18px; color: #fff;">Votre don a bien été reçu. Votre soutien est très apprécié et m\'aide à continuer ce travail.</p><br><br><a href="' . home_url('/') . '" style="color: #000; background-color: #ffff00; padding: 10px 20px; text-decoration: none; font-weight: bold; border-radius: 5px;">Retour à l\'accueil</a></div>'
        ),
        'annulation-don' => array(
            'title'   => 'Annulation de Don',
            'content' => '<div style="text-align:center; padding: 50px 20px;"><h1 style="color: #ff0000;">Don Annulé</h1><p style="font-size: 18px; color: #fff;">Votre don a été annulé. Aucune somme ne vous a été débitée.</p><br><br><a href="' . home_url('/') . '" style="color: #000; background-color: #ffff00; padding: 10px 20px; text-decoration: none; font-weight: bold; border-radius: 5px;">Retour à l\'accueil</a></div>'
        )
    );

    foreach ($pages_to_create as $slug => $page_data) {
        $page_check = get_page_by_path($slug);
        if (!isset($page_check->ID)) {
            $new_page = array(
                'post_type'    => 'page',
                'post_title'   => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_name'    => $slug,
            );
            wp_insert_post($new_page);
        }
    }
}
add_action('init', 'belline_create_paypal_pages');