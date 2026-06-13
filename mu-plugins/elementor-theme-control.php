<?php
/**
 * Disable Elementor frontend when a specific theme is active.
 * mu-plugins load before everything else, including theme functions.php
 */

add_action( 'plugins_loaded', function() {
    if ( get_template() === 'static' ) {
        add_action( 'elementor/init', function() {
            remove_action( 'wp_enqueue_scripts', [ elementor()->frontend, 'enqueue_scripts' ], 20 );
            remove_action( 'wp_enqueue_styles', [ elementor()->frontend, 'enqueue_styles' ], 20 );
            add_filter( 'elementor/utils/is_elementor_page', '__return_false' );
        } );
    }
} );