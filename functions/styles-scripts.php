<?php

// Style Sheets
function hopscotch_kid_styles_scripts() {
    
    // Default Style Sheet
    // Location: css > default.css
    // Source: css > sass > default.scss
    wp_enqueue_style( 'hopscotch-kid-style-default', get_stylesheet_directory_uri() . '/css/default.css', array( 'hopscotch-style-default' ), '1.0', 'all' );
    wp_enqueue_style( 'hopscotch-kid-style-web-product', get_stylesheet_directory_uri() . '/css/web-product.css', array( 'hopscotch-kid-style-default' ), '1.0', 'all' );
    
    // Fonts
    // Location: functions > fonts.php
    // Enable if you have a font other than Lato
    // wp_enqueue_style( 'hopscotch-kid-fonts', hopscotch_fonts_url(), array(), null );
    
    if( ! is_admin() ) {
        
        // Enable if you have JS Functions
        // wp_enqueue_script( 'hopscotch-kid-js-functions', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery', 'hopscotch-js-functions' ), '1.0', true );
    }
}
add_action('wp_enqueue_scripts', 'hopscotch_kid_styles_scripts');