<?php

// Require
require_once 'inc/custom-post.php';
require_once 'inc/acf.php';

// Include Scripts and CSS
function buildbox_scripts() {
    
    //scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', null, true );
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/node_modules/what-input/dist/what-input.min.js', 'jquery', null, true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/node_modules/foundation-sites/dist/js/foundation.min.js', 'jquery', null, true );
    wp_enqueue_script( 'splide', get_template_directory_uri() . '/node_modules/@splidejs/splide/dist/js/splide.min.js', array(), null, true );
    wp_enqueue_script( 'foundation-app', get_template_directory_uri() . '/js/app.js', 'foundation', null, true );

    //css
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/css/app.css' );

}
add_action( 'wp_enqueue_scripts', 'buildbox_scripts' );