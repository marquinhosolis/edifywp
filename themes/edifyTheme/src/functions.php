<?php

function register_cpt_user() {
    $labels = array(
        'name'                  => _x( 'Users', 'Post type general name', 'users' ),
        'singular_name'         => _x( 'User', 'Post type singular name', 'user' ),
        'menu_name'             => _x( 'Users', 'Admin Menu text', 'users' )
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Users custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
        'menu_icon' => 'dashicons-id'
    );
      
    register_post_type( 'users', $args );
}
add_action( 'init', 'register_cpt_user' );