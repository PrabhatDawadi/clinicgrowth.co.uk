<?php
    /*
        Plugin Name: Results
        Plugin URI: https://clinicgrowth.co.uk
        Version: 1.0
        Author: Prabhat Dawadi
        Author URI: https://prabhatdawadi.com
        Description: Plugin to add results.
    */
 
function ourResults() {
 
    $labels = array(
        'name' => _x( 'Results', 'results' ),
        'singular_name' => _x( 'Results', 'results' ),
        'add_new' => _x( 'Add New', 'results' ),
        'add_new_item' => _x( 'Add New', 'results' ),
        'edit_item' => _x( 'Edit', 'results' ),
        'new_item' => _x( 'New', 'results' ),
        'view_item' => _x( 'View', 'results' ),
        'search_items' => _x( 'Search', 'results' ),
        'not_found' => _x( 'Not found.', 'results' ),
        'not_found_in_trash' => _x( 'No Results found in trash.', 'results' ),
        'parent_item_colon' => _x( 'Results:', 'results' ),
        'menu_name' => _x( 'Results', 'results' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Results.',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-thumbs-up',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'rewrite' => ['slug' => 'results', 'with_front' => false],
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('results', $args);
}
 
add_action('init', 'ourResults');

?>