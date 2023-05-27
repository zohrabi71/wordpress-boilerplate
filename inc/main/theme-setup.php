<?php 
if ( ! function_exists( 'theme_name_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * Note that this function is hooked into the after_setup_theme hook, which
    * runs before the init hook. The init hook is too late for some features, such
    * as indicating support for post thumbnails.
    */
    function theme_name_setup() {
        /*
        * Make theme available for translation.
        * If you're building a theme based on theme_name, use a find and replace
        * to change 'theme_name' to the name of your theme in all the template files
        */
        load_theme_textdomain( 'theme_name', get_theme_file_path('/languages') );

        // Switch default core markup to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'gallery',
            'caption',
        ));
        
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        //Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add image sizes
        add_image_size( 'kelidy_post_thumb', 500, 500, true );

        // Register Nav Menu
        register_nav_menu( 'primary', esc_html__( 'Menu', 'kelidy' ) );

        // Support Woocommerce
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        // Register Nav Menu
        register_nav_menu( 'primary', esc_html__(  'Primary Menu', 'theme_name' ) );
    }

    add_action( 'after_setup_theme', 'theme_name_setup' );
endif;