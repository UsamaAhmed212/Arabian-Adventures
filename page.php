<?php 
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    get_header();

    // Header Section
    get_template_part( 'template-parts/header/header', 'layout-1' );

    // Start the loop
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    endif;

    // Footer Section
    get_template_part( 'template-parts/footer/footer', 'layout-1' );

    get_footer();
