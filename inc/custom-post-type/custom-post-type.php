<?php 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Define constants
 */
// Elementor Templates Library path/URI.
$custom_post_type_directory_end_path = str_replace( '\\', '/', str_replace( str_replace( '/', '\\', get_template_directory() ), '', str_replace( '/', '\\', __DIR__ ) ) );

define( 'CUSTOM_POST_TYPE_DIR', get_template_directory() . $custom_post_type_directory_end_path );
define( 'CUSTOM_POST_TYPE_DIR_URI', esc_url( get_template_directory_uri() ) . $custom_post_type_directory_end_path );

/**
 * -----------------------------------------------------
 * Custom Post Types
 * -----------------------------------------------------
 */

// Tours
require_once( __DIR__ . '/tours/tours.php' );
