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
