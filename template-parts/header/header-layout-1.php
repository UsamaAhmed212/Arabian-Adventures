<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Template Part for Displaying Header Section page template.
 */
?>

<!-- Header Section -->
<header id="header" class="bg-light <?php echo get_theme_mod( 'arabian_adventure_header_menu_image_radio_button' ); ?>">
    <section class="header-section">
        <div class="container-xxl px-xl-5 px-lg-4 px-3">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <nav class="navbar navbar-expand-lg py-1">
                        <div class="container-fluid p-0">
                            <?php 
                                if ( get_theme_mod( 'arabian_adventure_logo' ) ) { ?>
                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod( 'arabian_adventure_logo' ); ?>" alt="Logo">
                                </a>
                            <?php } ?>

                            <div id="menu-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div id="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div id="cross">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>

                            <?php 
                            wp_nav_menu( array(
                                'theme_location'            => 'header_menu',
                                'container'                 => 'div',
                                'container_class'           => 'collapse navbar-collapse mx-xl-4 mx-lg-3 pb-lg-0 pb-2',
                                'container_id'              => 'navbarNav',
                                'menu_class'                => 'navbar-nav',
                                'link_class'                => 'nav-item', //Custom arabian_adventures_link_class(); Function inc/theme-setup.php
                                'anchor_class'              => 'nav-link', //Custom arabian_adventures_anchor_class(); Function inc/theme-setup.php
                                'link_first_child_class'  => 'active', //Custom arabian_adventures_anchor_first_child_class(); Function inc/theme-setup.php
                                // 'menu_items_before'         => '<a href="" class="sidebar-menu-close"><span></span></a>', //Custom arabian_adventures_prefix_menu_
                                'depth'                     => '3',
                            ) );
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>