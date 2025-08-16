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

                            <div id="navbarNav" class="collapse navbar-collapse mx-xl-4 mx-lg-3 pb-lg-0 pb-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Desert Safaris</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Dune Buggy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Quad Bike</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Camel Ride</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sand Surfing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Overnight Desert Camping</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>