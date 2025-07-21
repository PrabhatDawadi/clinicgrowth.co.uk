<?php

/*
Plugin Name: Client Testimonials
Plugin URI: https://clinicgrowth.co.uk
Version: 1.0
Author: Prabhat Dawadi
Author URI: https://prabhatdawadi.com
Description: Plugin to add Client Testimonials
*/
 
function ourClientTestimonials() {
 
    $labels = array(
        'name' => _x( 'Client Testimonials', 'client-testimonials' ),
        'singular_name' => _x( 'Client Testimonials', 'client-testimonials' ),
        'add_new' => _x( 'Add New', 'client-testimonials' ),
        'add_new_item' => _x( 'Add New', 'client-testimonials' ),
        'edit_item' => _x( 'Edit', 'client-testimonials' ),
        'new_item' => _x( 'New', 'client-testimonials' ),
        'view_item' => _x( 'View', 'client-testimonials' ),
        'search_items' => _x( 'Search', 'client-testimonials' ),
        'not_found' => _x( 'Not found.', 'client-testimonials' ),
        'not_found_in_trash' => _x( 'No Testimonial found in trash.', 'client-testimonials' ),
        'parent_item_colon' => _x( 'Client Testimonials', 'client-testimonials' ),
        'menu_name' => _x( 'Testimonials', 'client-testimonials' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Client Testimonials',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'menu_icon' => site_url()."/wp-content/plugins/client-testimonials/icon.png",
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('client-testimonials', $args);
}
 
add_action('init', 'ourClientTestimonials');

?>