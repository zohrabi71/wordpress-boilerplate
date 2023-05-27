<?php
//get theme information
$th_name  = wp_get_theme();
$version = $th_name->get( 'Version' );

if ( defined( 'WP_DEBUG' ) ) {
	$version = current_time( 'timestamp' ); //for development time only
}

//define the constants
define( 'XNAME_THEME_URL', get_parent_theme_file_path() );
define( 'XNAME_THEME_ASSETS_URI', get_theme_file_uri('/assets/') );
define( 'XNAME_THEME_URI', get_parent_theme_file_uri() );
define( 'XNAME_THEME_INC_DIR', get_parent_theme_file_path('/inc/') );
define( 'XNAME_THEME_VERSION', $version );

/**
 * Setup Theme
 */
require_once XNAME_THEME_INC_DIR . 'main/theme-setup.php';

/**
 * Register Styles and Scripts
 */
require_once XNAME_THEME_INC_DIR . 'main/reg-scripts.php';

/**
 * Register Widget areas
 */
require_once XNAME_THEME_INC_DIR . 'main/reg-widget.php';

/**
 * Theme Functions
 */
require_once XNAME_THEME_INC_DIR . 'main/theme-functions.php';
