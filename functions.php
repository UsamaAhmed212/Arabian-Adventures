<?php
/**
 * Theme Functions File
 *
 * This file initializes the Arabian Adventures theme,
 * sets up constants, loads required files, and integrates plugins.
 *
 * @package Arabian_Adventures
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * ---------------------------------------------------------
 * Define Theme Constants
 * ---------------------------------------------------------
 */

// Root path of the theme directory.
define( 'ARABIAN_ADVENTURES_THEME_DIR', trailingslashit( get_template_directory() ) );

// Theme directory URI (for assets like CSS/JS).
define( 'ARABIAN_ADVENTURES_THEME_DIR_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * ---------------------------------------------------------
 * Load Text Domain for Translations
 * ---------------------------------------------------------
 */
add_action( 'after_setup_theme', function() {
    load_theme_textdomain( 'arabian_adventures', get_template_directory() . '/languages' );
});

/**
 * ---------------------------------------------------------
 * Theme Setup and File Inclusions
 * ---------------------------------------------------------
 */
add_action( 'after_setup_theme', function() {

    // Load WordPress plugin functions (used to check if plugins are active).
    require_once ABSPATH . 'wp-admin/includes/plugin.php';

    /**
     * -----------------------------------------------------
     * Core Theme Files
     * -----------------------------------------------------
     */
    require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/enqueue.php';                          // Enqueue scripts and styles.
    require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/theme-setup/theme-setup.php';          // Theme setup (menus, supports, etc.).
    // require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/theme-options/theme-options.php';      // (Optional) Theme options panel.
    require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/customizer/customize.php';             // Theme customizer settings.
    require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/tgm-plugin-activation/activation.php'; // TGM plugin activation.
    // require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/breadcrumb.php';                    // (Optional) Breadcrumb functions.

    /**
     * -----------------------------------------------------
     * Custom Post Types
     * -----------------------------------------------------
     */
    require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/custom-post-type/custom-post-type.php';

    // Remove Posts from Admin Menu
    function remove_default_post_type_menu() {
        remove_menu_page('edit.php'); // Hides "Posts"
    }
    // add_action('admin_menu', 'remove_default_post_type_menu');
    
    
    /**
     * -----------------------------------------------------
     * Third-Party Plugin Integrations
     * -----------------------------------------------------
     */

    // Elementor Integration (only load if Elementor is active).
    if ( is_plugin_active( 'elementor/elementor.php' ) ) {
        require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/elementor/elementor.php';
    }

    // Contact Form 7 Integration (uncomment if needed).
    // if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
    //     require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/contact-form-7/contact-form-7.php';
    // }

}, 20);
