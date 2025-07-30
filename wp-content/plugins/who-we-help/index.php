<?php
    /*
        Plugin Name: Who we help
        Plugin URI: https://clinicgrowth.co.uk
        Version: 1.0
        Author: Prabhat Dawadi
        Author URI: https://prabhatdawadi.com
        Description: Plugin to add who we help.
    */
 
function whoWeHelp() {
 
    $labels = array(
        'name' => _x( 'Who we help', 'who-we-help' ),
        'singular_name' => _x( 'Who we help', 'who-we-help' ),
        'add_new' => _x( 'Add New', 'who-we-help' ),
        'add_new_item' => _x( 'Add New', 'who-we-help' ),
        'edit_item' => _x( 'Edit', 'who-we-help' ),
        'new_item' => _x( 'New', 'who-we-help' ),
        'view_item' => _x( 'View', 'who-we-help' ),
        'search_items' => _x( 'Search', 'who-we-help' ),
        'not_found' => _x( 'Not found.', 'who-we-help' ),
        'not_found_in_trash' => _x( 'No data found in trash.', 'who-we-help' ),
        'parent_item_colon' => _x( 'Who we help:', 'who-we-help' ),
        'menu_name' => _x( 'Who we help', 'who-we-help' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Who we help.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-groups',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'rewrite' => ['slug' => 'who-we-help', 'with_front' => false],
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('who-we-help', $args);
}
 
add_action('init', 'whoWeHelp');

?>