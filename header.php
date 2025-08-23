<?php 
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        if ( has_site_icon()  && get_option( 'site_icon' ) ) { ?>
        <!-- Title Bar Logo -->
        <link rel="icon" href="<?php echo get_theme_mod( 'site_icon' ); ?>" type="image/png">
    <?php } ?>

    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

    <?php 
    wp_head(); ?>
</head>
<body>
