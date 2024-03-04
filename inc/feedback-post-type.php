<?php
// Register custom post type for feedback
function register_feedback_post_type() {
    $labels = array(
        'name'                  => _x( 'Palaute', 'Post Type General Name', 'customer-feedback-plugin' ),
        'singular_name'         => _x( 'Feedback', 'Post Type Singular Name', 'customer-feedback-plugin' ),
        'menu_name'             => __( 'Palaute', 'customer-feedback-plugin' ),
        'archives'              => __( 'Feedback Archives', 'customer-feedback-plugin' ),
        'attributes'            => __( 'Feedback Attributes', 'customer-feedback-plugin' ),
        'parent_item_colon'     => __( 'Parent Feedback:', 'customer-feedback-plugin' ),
        'all_items'             => __( 'Kaikki palaute', 'customer-feedback-plugin' ),
        'add_new_item'          => __( 'Lisää uusi palaute', 'customer-feedback-plugin' ),
        'add_new'               => __( 'Lisää uusi', 'customer-feedback-plugin' ),
        'new_item'              => __( 'New Feedback', 'customer-feedback-plugin' ),
        'edit_item'             => __( 'Edit Feedback', 'customer-feedback-plugin' ),
        'update_item'           => __( 'Update Feedback', 'customer-feedback-plugin' ),
        'view_item'             => __( 'View Feedback', 'customer-feedback-plugin' ),
        'view_items'            => __( 'View Feedback', 'customer-feedback-plugin' ),
        'search_items'          => __( 'Search Feedback', 'customer-feedback-plugin' ),
        'not_found'             => __( 'Not found', 'customer-feedback-plugin' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'customer-feedback-plugin' ),
        'featured_image'        => __( 'Featured Image', 'customer-feedback-plugin' ),
        'set_featured_image'    => __( 'Set featured image', 'customer-feedback-plugin' ),
        'remove_featured_image' => __( 'Remove featured image', 'customer-feedback-plugin' ),
        'use_featured_image'    => __( 'Use as featured image', 'customer-feedback-plugin' ),
        'insert_into_item'      => __( 'Insert into feedback', 'customer-feedback-plugin' ),
        'uploaded_to_this_item' => __( 'Uploaded to this feedback', 'customer-feedback-plugin' ),
        'items_list'            => __( 'Feedback list', 'customer-feedback-plugin' ),
        'items_list_navigation' => __( 'Feedback list navigation', 'customer-feedback-plugin' ),
        'filter_items_list'     => __( 'Filter feedback list', 'customer-feedback-plugin' ),
    );
    $args = array(
        'label'                 => __( 'Palaute', 'customer-feedback-plugin' ),
        'description'           => __( 'Customer Feedback', 'customer-feedback-plugin' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-chat',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'feedback', $args );
}
add_action( 'init', 'register_feedback_post_type', 0 );
