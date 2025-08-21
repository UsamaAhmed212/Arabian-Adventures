<?php 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// We check if the Elementor plugin has been installed / activated.
if ( defined( 'ELEMENTOR_PATH' ) && class_exists( 'Elementor\Widget_Base' ) ) {
    // Slider
    require_once( __DIR__ . '/slider/slider.php' );
    
    // Adventures
    require_once( __DIR__ . '/adventures/adventures.php' );
    
    // Tours
    require_once( __DIR__ . '/tours/tours.php' );
    
    // Images Gallery
    require_once( __DIR__ . '/image-gallery/image-gallery.php' );
    
    // Celebrity Visits
    require_once( __DIR__ . '/celebrity-visits/celebrity-visits.php' );

}