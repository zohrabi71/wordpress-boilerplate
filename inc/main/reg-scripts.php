<?php
/**
 * Enqueue styles.
 */
function theme_name_styles() {
	wp_enqueue_style( 'theme_name-style', XNAME_THEME_ASSETS_URI . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_styles' );

/**
 * Enqueue scripts.
 */
function theme_name_scripts() {
	wp_register_script(
		'theme_name-app',
		XNAME_THEME_ASSETS_URI . 'js/app.js',
		array(''),
		XNAME_THEME_VERSION,
		true
	);

    wp_enqueue_script( 'theme_name-app' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
