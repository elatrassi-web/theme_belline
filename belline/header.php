<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- SEO Audit Recommendation: Added viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!-- Google Tag Manager (from original) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M6BTGDKT');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) (from original) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6BM8LLELJ5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-6BM8LLELJ5');
    </script>

    <style>
    /* Status Displayer CSS from original site */
    .status-displayer span::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: inherit;
        animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
    @keyframes ping {
        75%, 100% {
            transform: scale(2);
            opacity: 0;
        }
    }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6BTGDKT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'belline' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding" style="text-align: center; padding: 20px 0;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="display: inline-block;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_a_faire.png" alt="<?php bloginfo( 'name' ); ?> - Entre ésotérisme et magie" style="max-width: 100%; height: auto;">
            </a>
            <?php
            $availability_status = get_option('belline_availability_status', 'disponible');
            if ($availability_status === 'disponible') {
                $status_color = '#00b050';
                $status_text = 'DISPONIBLE';
            } elseif ($availability_status === 'en_voyance') {
                $status_color = '#ffa500';
                $status_text = 'EN VOYANCE';
            } else {
                $status_color = '#ff0000';
                $status_text = 'NON DISPONIBLE';
            }
            ?>
            <div style="margin-top: 20px;">
                <div style="display: inline-block; border: 2px solid #000; border-radius: 5px; padding: 5px 15px; font-family: sans-serif; font-weight: bold; font-size: 14px; background-color: rgba(255, 255, 255, 0.2); box-shadow: inset 0 0 5px rgba(0,0,0,0.5);">
                    <span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; background-color: <?php echo esc_attr($status_color); ?>; margin-right: 8px; vertical-align: middle; box-shadow: inset -2px -2px 4px rgba(0,0,0,0.4);"></span>
                    <span style="color: #000; vertical-align: middle;"><?php echo esc_html($status_text); ?></span>
                </div>
            </div>

        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
