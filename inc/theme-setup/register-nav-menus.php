<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Register Menus
register_nav_menus( array(
    'header_menu' => __( 'Header', 'arabian_adventures' ),
) );


// wp_nav_menu() li Additional Class Add
function arabian_adventures_li_class( $classes, $item, $args ) {
    if ( isset( $args->link_class ) ) {
        $classes[] = $args->link_class;
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'arabian_adventures_li_class', 10, 3 );


// wp_nav_menu() li >a Additional Class Add
function arabian_adventures_anchor_class( $classes, $item, $args ) {
    if ( isset( $args->anchor_class ) ) {
        $classes['class'] = $args->anchor_class;
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'arabian_adventures_anchor_class', 10, 3 );


// wp_nav_menu() li >a First Child Class Add
function arabian_adventures_link_first_child_class( $classes, $item, $args ) {
    if ( isset( $args->link_first_child_class ) ) {
        $classes[] = $args->link_first_child_class;
        // if ( in_array( 'current-menu-item', $classes ) ) {
        // }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'arabian_adventures_link_first_child_class', 10, 3 );


// wp_nav_menu() ul Afterbegin Prefix Add
function arabian_adventures_prefix_menu_items_afterbegin( $items, $args ) {
    if ( isset( $args->menu_items_before ) ) {
        $items = $args->menu_items_before . $items;
    }
    return $items;
}
// add_filter( 'wp_nav_menu_items', 'arabian_adventures_prefix_menu_items_afterbegin', 1, 2 );
