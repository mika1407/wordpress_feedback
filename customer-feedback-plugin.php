<?php
/*
Plugin Name: Customer Feedback Plugin
Description: Plugin for managing and displaying customer feedback.
Version: 1.0
Author: Mika Tiihonen
*/

// Register custom post type for feedback
require_once( plugin_dir_path( __FILE__ ) . 'inc/feedback-post-type.php' );

// Register widget for displaying feedback
require_once( plugin_dir_path( __FILE__ ) . 'inc/feedback-widget.php' );


function cfeedback_assets() {
    wp_enqueue_style('cfeedback-css', plugin_dir_url(__FILE__) . 'css/customer-feedback-plugin.css');
}

add_action('wp_enqueue_scripts', 'cfeedback_assets');