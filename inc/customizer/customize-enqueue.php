<?php 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Check if user is logged in
if ( is_user_logged_in() ) {
    /**
     * Customize Controls Panel Enqueue Styles and scripts.
    **/
    function arabian_adventure_customize_enqueue() {
    
        // Customize Css Enqueue
        wp_register_style( 'arabian_adventure-customize', ARABIAN_ADVENTURES_THEME_DIR_URI . 'inc/customizer/assets/css/customize.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'arabian_adventure-customize' );
        
        // Customize Js Enqueue
        wp_enqueue_script( 'arabian_adventure-customize', ARABIAN_ADVENTURES_THEME_DIR_URI . 'inc/customizer/assets/js/customize.js', array(), '1.0.0', true );
		
    }
    add_action( 'customize_controls_enqueue_scripts', 'arabian_adventure_customize_enqueue' );
    add_action( 'customize_preview_init', 'arabian_adventure_customize_enqueue' );
    
}
