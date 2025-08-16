<?php 

    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;

    get_header();

    // Header Section
    get_template_part( 'template-parts/header/header', 'layout-1' );
?>
    
    <!-- Slider Area -->
    <section id="slider">
        <div class="container-xxl p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="banner">
                        <div class="background-image">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Arabian-Adventure-Desert-Safari-Tour.jpg" alt="Arabian Adventure Desert Safari Tour"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/slider-01.jpg">
                        </div>
                        
                        <div class="banner_content">
                            <h2 class="waved-heading text-center">
                                <span>Arabian desert</span>
                                <span class="waved">
                                    <span><span>s</span></span
                                    ><span><span>a</span></span
                                    ><span><span>f</span></span
                                    ><span><span>a</span></span
                                    ><span><span>r</span></span
                                    ><span><span>i</span></span
                                    ><span><span>s</span></span>
                                </span>
                            </h2>
                            <p class="subtitle text-center m-0">Online exclusive: save 10% when booking 2 or more activities on our website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Adventures Area -->
    <section id="adventures" class="py-5">
        <div class="container-xxl px-lg-5 px-sm-4 px-3">
            <div class="row m-0 justify-content-around row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                <div class="col-12 p-0 py-2">
                    <h2 class="waved-heading">
                        <span>Our</span>
                        <span class="waved">
                            <span><span>e</span></span
                            ><span><span>x</span></span
                            ><span><span>p</span></span
                            ><span><span>e</span></span
                            ><span><span>r</span></span
                            ><span><span>i</span></span
                            ><span><span>e</span></span
                            ><span><span>n</span></span
                            ><span><span>c</span></span
                            ><span><span>e</span></span
                            ><span><span>s</span></span>
                        </span>
                        <span>last</span>
                    </h2>
                    <p class="subtitle m-0">Online exclusive: save 10% when booking 2 or more activities on our website</p>
                </div>
                <!-- card -->
                <div class="col p-0">
                    <div class="single-adventure my-2 text-center">
                        <div class="adventure-img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/adventure-1.webp" alt="">
                            <div class="adventure-details">
                                <h4><a href="#">Explore<svg viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Desert Adventures</a></h3>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="single-adventure my-2 text-center">
                        <div class="adventure-img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/topDesti6.png.webp" alt="">
                            <div class="adventure-details">
                                <h4><a href="#">Explore<svg viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Tours & Attractions</a></h3>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="single-adventure my-2 text-center">
                        <div class="adventure-img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/adventure-3.webp" alt="">
                            <div class="adventure-details">
                                <h4><a href="#">Explore<svg viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Cruise & Boat Tours</a></h3>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="single-adventure my-2 text-center">
                        <div class="adventure-img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/adventure-4.webp" alt="">
                            <div class="adventure-details">
                                <h4><a href="#">Explore<svg viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Water & Theme Parks</a></h3>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="single-adventure my-2 text-center">
                        <div class="adventure-img">
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/topDesti2.png.webp" alt="">
                            <div class="adventure-details">
                                <h4><a href="#">Explore<svg viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg></a></h4>
                            </div>
                        </div>
                        <h3><a href="#">Sustainable</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Tours Area -->
     <section class="top-tours py-3">
        <div class="container-xxl px-lg-5 px-sm-4 px-3">
            <div class="row m-0 justify-content-around">
                <div class="col-12 p-0 py-2">
                    <h2 class="waved-heading">
                        <span>Our Top</span>
                        <span class="waved">
                            <span><span>t</span></span
                            ><span><span>o</span></span
                            ><span><span>u</span></span
                            ><span><span>r</span></span
                            ><span><span>s</span></span>
                        </span>
                    </h2>
                    <p class="subtitle m-0">Online exclusive: save 10% when booking 2 or more activities on our website</p>
                </div>
                <!-- card -->
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Morning-Desert-Safari.webp" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Budget-Friendly Evening Desert Safari & BBQ Dinner with Optional Quad Bike</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        4 to 6 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">150 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">99.5 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
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
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Desert-Safari.jpg" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Private Group (up to 6 people) Red Dunes Desert Safari</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        8 to 10 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">1500 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">1300 AED</span>
                                        <span class="caption"></span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">15
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">36
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Buggy-Dune-Bashing.jpg" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Ultimate Evening Adventure Safari</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        6 to 10 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">300 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">245 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">12
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">20
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Desert-Safari-Camel-Riding.jpg" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Desert Safari Camel Riding</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        1 to 2 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">100 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">75.5 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">10
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">16
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Desert-Safari-Camel-Riding.jpg" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Desert Safari Camel Riding</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        1 to 2 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">100 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">75.5 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">10
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">16
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/Deset-Buggys.webp" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Ultimate Evening Adventure Safari</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        6 to 10 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">300 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">245 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">12
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">20
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/desert-safari-01.webp" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Private Group (up to 6 people) Red Dunes Desert Safari</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        8 to 10 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">1500 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">1300 AED</span>
                                        <span class="caption"></span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
                                    <span class="tagging">
                                        <span class="tag-content">Sale</span>
                                        <span class="vertical-promo-tag">15
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                    <span class="tagging">
                                        <span class="tag-content">Combo</span>
                                        <span class="vertical-promo-tag">36
                                            <svg class="svg-percent" width="11" height="9" viewBox="0 0 11 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 1L3 8" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"></path>
                                                <circle cx="2.5" cy="2.5" r="2" stroke="currentColor"></circle>
                                                <circle cx="8.5" cy="6.5" r="2" stroke="currentColor"></circle>
                                            </svg> off
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                    <div class="tour">
                        <a href="page.html" target="_blank" rel="noopener noreferrer">
                            <div class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/red-dunes-desert-safari.webp" alt="">
                                <span class="category">Day Trips</span>
                            </div>
                            <div class="details">
                                <span class="label">Dubai Desert Safari Tours</span>
                                <p class="title">
                                    <strong>Budget-Friendly Evening Desert Safari & BBQ Dinner with Optional Quad Bike</strong>
                                </p>
                                <div class="tour-info">
                                    <div class="duration">
                                        <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                        4 to 6 hours
                                    </div>
                                    <div class="tagging-wrap">
                                        <span class="tagging">Hotel pick-up</span>
                                        <span class="tagging">Private tour</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <div class="old-price">
                                        <span class="label">From</span>
                                        <span class="price">150 AED</span>
                                    </div>
                                    <div class="activity-price">
                                        <span class="price">99.5 AED</span>
                                        <span class="caption">per person</span>
                                    </div>
                                </div>
                                <div class="tagging-wrap">
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
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Images Gallery Section -->
    <section class="gallery py-3">
        <div class="container-xxl px-lg-5 px-sm-4 px-3">
            <div class="row m-0 justify-content-around row-cols-lg-4 row-cols-sm-3 row-cols-2">
                <div class="col-12 p-0 py-2">
                    <h2 class="waved-heading">
                        <span>Our</span>
                        <span class="waved">
                            <span><span>G</span></span
                            ><span><span>a</span></span
                            ><span><span>l</span></span
                            ><span><span>l</span></span
                            ><span><span>e</span></span
                            ><span><span>r</span></span
                            ><span><span>y</span></span>
                        </span>
                    </h2>
                    <p class="subtitle m-0">Take a look at the desert moments captured by our guests - they may just inspire your next adventure!</p>
                </div>
                <!-- Gallery images -->
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/1.jpg" alt="" title="Dune Bashing on Red Dunes">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Dune Bashing on Red Dunes</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/2.jpg" alt="" title="Camel Safari">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Camel Safari</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/3.jpg" alt="" title="Our Cars with experienced drivers">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Our Cars with experienced drivers</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/4.jpg" alt="" title="Sunset Point for Photography">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Sunset Point for Photography</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/5.jpg" alt="" title="Photography with Falcon">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Photography with Falcon</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/6.jpg" alt="" title="Camp Activities for Kids">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Camp Activities for Kids</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/7.jpg" alt="" title="Fleet of Cars">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Fleet of Cars</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="grid">
                        <figure class="effect-overlay">
                            <div class="gallery-img">
                                <a href="#" class="big">
                                    <img src="<?php echo get_template_directory_uri(); ?>./assets/images/portfolio/8.jpg" alt="" title="Extreme Adventure Safari">
                                </a>
                                <div class="clear"></div>
                            </div>
                            <figcaption>
                                <!-- <h2>Passionate <span>Loerum</span></h2> -->
                                <div>
                                    <p>Extreme Adventure Safari</p>
                                </div>
                                <a href="#">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Celebrity Visits Area -->
    <section class="celebrity-visits-info">
        <div class="container-xxl px-lg-5 px-sm-4 px-3">
            <div class="row m-0 justify-content-around">
                <div class="col-12 p-0 py-2">
                    <h2 class="waved-heading">
                        <span class="waved">
                            <span><span>F</span></span
                            ><span><span>a</span></span
                            ><span><span>m</span></span
                            ><span><span>o</span></span
                            ><span><span>u</span></span
                            ><span><span>s</span></span>
                        </span>
                        <span>Person</span>
                    </h2>
                    <p class="subtitle m-0">Famous Personalities Spotted On Our Desert Experiences</p>
                </div>
                <div class="col-12 p-0 py-2">
                    <div class="owl-carousel">
                        <div class="famous-card">
                            <img alt="JADEN SMITH" class="img-fluid rounded"
                                src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-02.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">JADEN SMITH</div>
                                <div class="famous-text">Teenage entertainers, Jaden Smith and Willow Smith, had a blast on their
                                    Platinum Heritage desert safari tour during their visit to Dubai.</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="LAURA MARANO" class="img-fluid rounded"
                                src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-01.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">LAURA MARANO</div>
                                <div class="famous-text">Laura Marano the American singer &amp; actress, was making friends with our
                                    Falcons in her desert safari tour!</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="WILL SMITH" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-04.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">WILL SMITH</div>
                                <div class="famous-text">Superstar Will Smith rocked the local Arabic headwear on his recent visit.
                                </div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="KYLIE MINOGUE" class="img-fluid rounded"
                                src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-13.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">KYLIE MINOGUE</div>
                                <div class="famous-text">I’m so proud of the Platinum Heritage Team. A Gulf News interview with
                                    Kylie
                                    Minogue reveals that her safari with us was a dream come true…</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="TED GINN, JR." class="img-fluid rounded"
                                src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-14.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">TED GINN, JR.</div>
                                <div class="famous-text">Carolina Panthers Wide Receiver, Ted Ginn, Jr., enjoying some Arabian
                                    hospitality with Platinum Heritage.</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="RAJON RONDO" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-17.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">RAJON RONDO</div>
                                <div class="famous-text"> The legend Rajon Rondo celebrating the victory of the LA Lakers with a
                                    Heritage Desert Safari. </div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="REBEL WILSON" class="img-fluid rounded"
                                src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-09.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">REBEL WILSON</div>
                                <div class="famous-text">Equally charming as she is hilarious, Rebel Wilson, comedian and star of
                                    Pitch
                                    Perfect visited us over the weekend. Here she is striking a pose on one of our vintage Land
                                    Rovers.
                                </div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="MICHAEL BUBLE" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-12.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">MICHAEL BUBLE</div>
                                <div class="famous-text">Michael Bublé had a moment with one of our beautiful falcons on a Heritage
                                    Desert Safari.</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="RICKY MARTIN" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-10.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">RICKY MARTIN</div>
                                <div class="famous-text">Famous Latin pop singer, Ricky Martin, taking a few selfies before embarking on
                                    a desert adventure!</div>
                            </div>
                        </div>
                        <div class="famous-card">
                            <img alt="JASON DERULO" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>./assets/images/famous-person/famous-person-18.jpg">
                            <div class="famous-overlay"></div>
                            <div class="famous-info">
                                <div class="famous-name">JASON DERULO</div>
                                <div class="famous-text">The popular American singer, Jason Derulo got a taste of Bedouin life on our
                                    Heritage Desert Safari.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="famous-btn">Explore More</a>
                </div>
            </div>
        </div>
    </section>

<?php
    // Footer Section
    get_template_part( 'template-parts/footer/footer', 'layout-1' );

    get_footer();