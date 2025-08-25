<?php 
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    get_header();

    // Header Section
    get_template_part( 'template-parts/header/header', 'layout-1' );
?>

    <?php
        // Get custom post type "tours" meta fields
        $promo_label = get_post_meta(get_the_ID(), 'promo_label', true);
        $label       = get_post_meta(get_the_ID(), 'label', true);
        $duration    = get_post_meta(get_the_ID(), 'duration', true);
        $old_price   = get_post_meta(get_the_ID(), 'old_price', true);
        $price       = get_post_meta(get_the_ID(), 'price', true);
        $caption     = get_post_meta(get_the_ID(), 'caption', true);
    ?>
    <!-- Title Section -->
     <div class="page-title-header">
        <div class="container-xxl px-xl-5 px-sm-4 px-3 pt-4">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="page-title-label"><?php echo esc_html($label); ?></div>
                    <div class="page-title_wrapper">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Media Container Section -->
    <div class="media-container">
        <div class="container-xxl px-xl-5 px-sm-4 px-3 pt-2">
            <div class="row m-0 row-cols-1">
                <div class="col p-0">
                    <div class="media-items-wrapper">
                        <div class="media-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img 
                                    src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" 
                                    alt="<?php echo esc_attr( get_the_title() ); ?>" 
                                    class=""
                                >
                            <?php endif; ?>
                        </div>
                        <?php 
                        $gallery_ids = get_post_meta( get_the_ID(), 'tours_images', true );
                        if ( $gallery_ids ) :
                            $ids = explode(',', $gallery_ids);
                            $ids = array_slice($ids, 0, 4); // Limit to first 4 images
                            foreach ( $ids as $id ) : ?>
                                <div class="media-item">
                                    <?php echo wp_get_attachment_image( $id, 'full' ); ?>
                                </div>
                            <?php endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Promo Section -->
    <div class="product-promo">
        <div class="container-xxl px-xl-5 px-sm-4 px-3 pt-2">
            <div class="row m-0 justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-7 p-0 mb-xl-0 mb-3">
                    <div class="promo-label">
                        <i class="promo-icon"></i>
                        <?php echo esc_html($promo_label); ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-6 p-0 mb-xl-0 mb-lg-3 mb-sm-0 mb-3">
                    <div class="promo-prices">
                        <div class="activity-price">
                            <span class="label">From</span>
                            <span class="price"><?php echo esc_html($price); ?></span>
                            <!-- <span class="caption">per person</span> -->
                        </div>
                        <div class="old-price">
                            <span class="price"><?php echo esc_html($old_price); ?></span>
                        </div>
                    </div>
                    <!-- <div class="promo-prices-notification">
                        <p>Price varies by vehicle, group sizes and other selections</p>
                    </div> -->
                </div>
                <div class="col-xl-3 col-sm-6 p-0">
                    <div class="promo-actions">
                        <button class="btn">Select Options</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Assistant Section -->
    <div class="booking-assistant">
         <div class="container-xxl px-xl-5 px-sm-4 px-3 pt-2">
            <div class="row m-0 justify-content-center">
                <div class="col-xl-8 col-lg-7 col-md-6 p-0">
                    <div class="tourDetailsSelection">
                        <div class="timeListStrip">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="min-clock"><path d="M7.99992 14.6667C11.6818 14.6667 14.6666 11.6819 14.6666 8.00001C14.6666 4.31811 11.6818 1.33334 7.99992 1.33334C4.31802 1.33334 1.33325 4.31811 1.33325 8.00001C1.33325 11.6819 4.31802 14.6667 7.99992 14.6667Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 3.99997V7.99997L11.5 9.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <div class="single-time-slot">Enter anytime within operating hours: 
                                <span class="operating-hours">08:00am - 08:00pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="TourSelections">
                        <div class="date-range-picker">
                            <input type="hidden" name="dateRange" class="input flatpickr-input" placeholder="Select Date" id="flatpickr-range" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 p-0 mt-md-0 mt-3">
                    <div class="SidebarWrapper">
                        <div class="bookingItineraryCard">
                            <div class="BannerContainer">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img 
                                        src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" 
                                        alt="<?php echo esc_attr( get_the_title() ); ?>" 
                                        class=""
                                    >
                                <?php endif; ?>
                                <div class="banner__GradientOverlay"></div>
                                <!-- <h2 class="banner__Header">Combo (Save 1%): Burj Khalifa At The Top + Dubai Aquarium &amp; Underwater Zoo Tickets</h2> -->
                            </div>
                            <div class="Selection__Layout_Container">
                                <div class="Selection__DescriptionLayout">
                                    <div id="selected-date">
                                        <p class="NoDateSelected">-</p>
                                    </div>
                                    <div class="Selection__TourDescription">
                                        <div class="title"><?php the_title(); ?></div>
                                        <div class="selected-time">
                                            <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" width="16"><g><path d="M8.00004 14.6666C11.6819 14.6666 14.6667 11.6819 14.6667 7.99998C14.6667 4.31808 11.6819 1.33331 8.00004 1.33331C4.31814 1.33331 1.33337 4.31808 1.33337 7.99998C1.33337 11.6819 4.31814 14.6666 8.00004 14.6666Z" stroke="currentColor"></path><path d="M8 5.33331V7.99998L9.33333 9.33331" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                                            <div class="time-slot"><?php echo esc_html($duration); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary__Layout">
                                <div class="card-total-payable">
                                    <span class="label">Total payable</span>
                                    <span class="price"><?php echo esc_html($price); ?></span>
                                </div>
                                <button class="btn disabled">Confirm & pay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    
    <?php 
    // Footer Section
    get_template_part( 'template-parts/footer/footer', 'layout-1' );

    get_footer();
