<?php
    /*
        Plugin Name: Services
        Plugin URI: https://clinicgrowth.co.uk
        Version: 1.0
        Author: Prabhat Dawadi
        Author URI: https://prabhatdawadi.com
        Description: Plugin to add services.
    */
 
function ourServices() {
 
    $labels = array(
        'name' => _x( 'Services', 'services' ),
        'singular_name' => _x( 'Services', 'services' ),
        'add_new' => _x( 'Add New', 'services' ),
        'add_new_item' => _x( 'Add New', 'services' ),
        'edit_item' => _x( 'Edit', 'services' ),
        'new_item' => _x( 'New', 'services' ),
        'view_item' => _x( 'View', 'services' ),
        'search_items' => _x( 'Search', 'services' ),
        'not_found' => _x( 'Not found.', 'services' ),
        'not_found_in_trash' => _x( 'No Services found in trash.', 'services' ),
        'parent_item_colon' => _x( 'Services:', 'services' ),
        'menu_name' => _x( 'Services', 'services' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Services.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => site_url()."/wp-content/plugins/services/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'rewrite' => ['slug' => 'services', 'with_front' => false],
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('services', $args);
}
 
add_action('init', 'ourServices');

?>