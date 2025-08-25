<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//Theme Css and Js File Enqueue
function arabian_adventures_css_js_enqueue() {
    // Fonts Enqueue
    // wp_register_style( 'arabian_adventures-google-fonts', arabian_adventures_fonts_url(), array(), null);
    // wp_enqueue_style( 'arabian_adventures-google-fonts' );

    // TripSans Font Css Enqueue
    wp_register_style( 'arabian_adventures-TripSans', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/fonts/TripSans/TripSans.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-TripSans' );
    

    // Emirates Font Css Enqueue
    wp_register_style( 'arabian_adventures-Emirates', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/fonts/Emirates/Emirates.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-Emirates' );



    /* 
     *Theme Css Enqueue Start
    */

    // Bootstrap Css Enqueue
    wp_register_style( 'arabian_adventures-bootstrap-min', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/bootstrap.min.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'arabian_adventures-bootstrap-min' );

    
    // Owl Carousel Css Enqueue
    wp_register_style( 'arabian_adventures-owl-carousel-min', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/plugins/OwlCarousel2/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_register_style( 'arabian_adventures-owl-carousel-theme-default', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/plugins/OwlCarousel2/owl.theme.default.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-owl-carousel-min' );
    wp_enqueue_style( 'arabian_adventures-owl-carousel-theme-default' );

    
    // Flatpickr Css Enqueue
    wp_register_style( 'arabian_adventures-flatpickr-min', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/plugins/flatpickr/flatpickr.min.css', array(), '5.0.2', 'all' );
    wp_enqueue_style( 'arabian_adventures-flatpickr-min' );

    
    // Style Css Enqueue
    wp_register_style( 'arabian_adventures-index-style', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/styles/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-index-style' );
    
    // Home Css Enqueue
    wp_register_style( 'arabian_adventures-home-style', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/styles/css/home.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-home-style' );


    // single-Page Css Enqueue
    wp_register_style( 'arabian_adventures-single-page-style', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/styles/css/single-page.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-single-page-style' );

    
    // Responsive Css Enqueue
    wp_register_style( 'arabian_adventures-responsive', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/styles/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'arabian_adventures-responsive' );


    wp_enqueue_style( 'arabian_adventures-style', get_stylesheet_uri() );
    // Theme Css Enqueue End



    /*
     *Theme Js Enqueue Start
     */

    // jQuery CDN Enqueue
    wp_register_script( 'jquery-core', false, array(), false, true );
    wp_enqueue_script( 'jquery-core' );


    // Bootstrap Js Enqueue
    // (try to remove bootstrap.bundle.min.js because it's just only open&close menu.and this file size 77KB)
    wp_register_script( 'arabian_adventures-bootstrap-min', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'arabian_adventures-bootstrap-min' );

    
    // Owl Carousel Js Enqueue
    wp_register_script( 'arabian_adventures-owl-carousel-min', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/plugins/OwlCarousel2/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'arabian_adventures-owl-carousel-min' );


    // Flatpickr Js Enqueue
    wp_register_script( 'arabian_adventures-flatpickr', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/plugins/flatpickr/flatpickr.js', array(), '1.0.0', true );
    wp_enqueue_script( 'arabian_adventures-flatpickr' );


    // app Js Enqueue
    wp_register_script( 'arabian_adventures-app', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/scripts/app.js', array(), '1.0.0', true );
    wp_enqueue_script( 'arabian_adventures-app' );
    // Theme Js Enqueue End

}
add_action( 'wp_enqueue_scripts', 'arabian_adventures_css_js_enqueue');

// Fonts Enqueue Function
function arabian_adventures_fonts_url() {
    $fonts_url = '';

    $NunitoSans = _x( 'on', 'NunitoSans font: on or off', 'arabian_adventures' );
    $Poppins = _x( 'on', 'Poppins font: on or off', 'arabian_adventures' );
    $Roboto = _x( 'on', 'Roboto font: on or off', 'arabian_adventures' );

    if ( 'off' !== $NunitoSans || 'off' !== $Poppins || 'off' !== $Roboto ) {
        $font_families = array();

        if ( 'off' !== $NunitoSans ) {
            $font_families[] = 'Nunito+Sans';
        }

        if ( 'off' !== $Poppins ) {
            $font_families[] = 'Poppins';
        }

        if ( 'off' !== $Roboto ) {
            $font_families[] = 'Roboto:wght@400;500;700';
        }

        $query_args = array(
            'family' => implode( '&family=', $font_families ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
    }

    return esc_url_raw( $fonts_url );
}
