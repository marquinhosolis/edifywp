<?php

// REGISTRA OS MENUS
register_nav_menus(array(
    'main_menu' => 'Main Menu',
));

// THUMBNAILS
add_theme_support('post-thumbnails');
// add_image_size( 'thumb', 240, 99999 ); 
//add_image_size('thumb', 600, 450, array('center', 'center'));

// LIMIT EXCERPT
function mytheme_custom_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

// REMOVE JQUERY MIGRATE FROM FRONT-END
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );