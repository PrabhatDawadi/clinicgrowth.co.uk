<?php

/*
Plugin Name: Clinic Growth FAQs
Plugin URI: https://clinicgrowth.co.uk
Version: 1.0
Author: Prabhat Dawadi
Author URI: https://prabhatdawadi.com
Description: Plugin to add FAQs in Clinic Growth Website
*/
 
function clinicGrowthFAQs() {
 
    $labels = array(
        'name' => _x( 'Our FAQs', 'clinic-growth-faqs' ),
        'singular_name' => _x( 'Our FAQs', 'clinic-growth-faqs' ),
        'add_new' => _x( 'Add New', 'clinic-growth-faqs' ),
        'add_new_item' => _x( 'Add New', 'clinic-growth-faqs' ),
        'edit_item' => _x( 'Edit', 'clinic-growth-faqs' ),
        'new_item' => _x( 'New', 'clinic-growth-faqs' ),
        'view_item' => _x( 'View', 'clinic-growth-faqs' ),
        'search_items' => _x( 'Search', 'clinic-growth-faqs' ),
        'not_found' => _x( 'Not found.', 'clinic-growth-faqs' ),
        'not_found_in_trash' => _x( 'No FAQ found in trash.', 'clinic-growth-faqs' ),
        'parent_item_colon' => _x( 'Our FAQs', 'clinic-growth-faqs' ),
        'menu_name' => _x( 'Our FAQs', 'clinic-growth-faqs' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Our FAQs',
        'supports' => array('title','editor','media-uploads','thumbnail','custom-fields','page-attributes'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-feedback',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type('clinic-growth-faqs', $args);
}
 
add_action('init', 'clinicGrowthFAQs');

?>