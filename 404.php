<?php 
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    get_header();

    // Header Section
    get_template_part( 'template-parts/header/header', 'layout-1' );
?>

    <p>Not Found</p>

<?php 
    // Footer Section
    get_template_part( 'template-parts/footer/footer', 'layout-1' );

    get_footer();
