<?php 
    /* Template Name: Tours */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    get_header();

    // Header Section
    get_template_part( 'template-parts/header/header', 'layout-1' );
?>

    <!-- Top Tours Area -->
    <?php
    $args = [
        'post_type' => 'tours',     // Our custom post type
        'posts_per_page' => -1,     // Get all tours
    ];

    $tours = new WP_Query($args);

    if ($tours->have_posts()) : ?>
        <section class="top-tours py-3">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around">
                    <!-- card -->
                <?php while ($tours->have_posts()) : $tours->the_post(); 
                    // Get meta fields
                    $label     = get_post_meta(get_the_ID(), 'label', true);
                    $duration  = get_post_meta(get_the_ID(), 'duration', true);
                    $old_price = get_post_meta(get_the_ID(), 'old_price', true);
                    $price     = get_post_meta(get_the_ID(), 'price', true);
                    $caption   = get_post_meta(get_the_ID(), 'caption', true);

                    // Get taxonomy terms
                    $categories = get_the_terms(get_the_ID(), 'tours_category'); // Categories
                    $tags       = get_the_terms(get_the_ID(), 'tours_tag');      // Tags
                ?>
                    <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                        <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                            <div class="tour">
                                <div class="thumbnail">
                                    <?php if(has_post_thumbnail()) the_post_thumbnail('full'); ?>
                                    <?php if($categories && !is_wp_error($categories)) : 
                                        $last_category = end($categories); 
                                    ?>
                                    <span class="category"><?php echo esc_html($last_category->name); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="details">
                                    <span class="label"><?php echo esc_html($label); ?></span>
                                    <p class="title"><strong><?php the_title(); ?></strong></p>
                                    <div class="tour-info">
                                        <div class="duration">
                                            <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                            <?php echo esc_html($duration); ?>
                                        </div>
                                        <?php if($tags && !is_wp_error($tags)) : ?>
                                            <div class="tagging-wrap">
                                                <?php foreach($tags as $tag) : ?>
                                                    <span class="tagging"><?php echo esc_html($tag->name); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="price">
                                        <div class="old-price">
                                            <span class="label">From</span>
                                            <span class="price"><?php echo esc_html($old_price); ?></span>
                                        </div>
                                        <div class="activity-price">
                                            <span class="price"><?php echo esc_html($price); ?></span>
                                            <span class="caption"><?php echo esc_html($caption); ?></span>
                                        </div>
                                    </div>
                                    <!-- <div class="tagging-wrap">
                                        <span class="tagging">
                                            <span class="tag-content">Sale</span>
                                            <span class="vertical-promo-tag">18
                                                <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                    <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                    <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                                </svg> off
                                            </span>
                                        </span>
                                        <span class="tagging">
                                            <span class="tag-content">Combo</span>
                                            <span class="vertical-promo-tag">26
                                                <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                    <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                    <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                                </svg> off
                                            </span>
                                        </span>
                                    </div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php 
    else :
        echo '<p>No Tours Found.</p>';
    endif;
    ?>

    <?php
    // Footer Section
    get_template_part( 'template-parts/footer/footer', 'layout-1' );

    get_footer();