<?php 

// Custom widgets must be defined in the Elementor namespace
namespace Elementor; 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Tours_Section_Widget extends Widget_Base {

    // =========================
    // Widget Dependencies Styles Enqueue
    // =========================
	public function get_style_depends() {

		// Adventures Section Widget Css Enqueue
		wp_register_style( 'tours', ELEMENTOR_DIR_URI . '/widgets/tours/assets/css/tours.css', array(), '1.0.0', 'all' );
		
		return array(
			// 'tours',
		);
	}
	
	// =========================
	// Widget Dependencies Scripts Enqueue
	// =========================
	public function get_script_depends() {
		
		// Svg Loader Js Enqueue
		wp_register_script( 'arabian_adventures-example', ARABIAN_ADVENTURES_THEME_DIR_URI . 'assets/js/example.js', array(), '1.0.0', true );

		return array(
			// 'arabian_adventures-example',
		);
	}
 

    // =========================
	// Returns the unique name/identifier of the widget
	// =========================
	public function get_name() {
		return __( 'tours', 'arabian_adventures' );
	}

    // =========================
	// Returns the display title of the widget
	// =========================
	public function get_title() {
		return __( 'Tours', 'arabian_adventures' );
	}

    // =========================
	// Returns the icon class for the widget in Elementor
	// =========================
	public function get_icon() {
		return 'arabian-adventures-icon eicon-posts-grid';
	}

    // =========================
	// Put Widget in a Specific Category.
	// =========================
	public function get_categories() {
		return [ 'arabian-adventures' ];
	}

    // =========================
	// Returns the help URL for the widget
	// =========================
	public function get_help_url() {
		return '';
	}

    
    // =========================
	// Widgets Can be Found on the Dashboard with this Keywords.
	// =========================
	public function get_keywords() {
		return [ 
			' bx ',
			' adventures ',
			' custom ',
			' arabian_adventures ',
			' adventures uae ',
			' arabian-adventures ',
            ' experience ',
            ' tour ',
            ' gallery ',
			' images ',
			' top tours ',
			' top_tours ',
			' top-tours ',
			' tours ',
			' cards ',
			' grid ',
		];
	}


    // =========================
    // Register widget controls (Elementor editor)
    // =========================
	protected function register_controls() {

        // =========================
        // SECTION: Heading & Subtitle
        // =========================
        $this->start_controls_section(
            'heading_section',
            [
                'label' => __( 'Heading & Subtitle', 'arabian_adventures' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'main_title',
            [
                'label'   => __( 'Main Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Our Top', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'waved_title',
            [
                'label'   => __( 'Waved Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'tours', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'last_title',
            [
                'label'   => __( 'Last Word', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( '', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'   => __( 'Subtitle', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => __( 'Online exclusive: save 10% when booking 2 or more activities on our website', 'arabian_adventures' ),
            ]
        );

        $this->end_controls_section();
        // =========================
        // END HEADING & SUBTITLE
        // =========================

        // =========================
        // SECTION: Tours Repeater
        // =========================
        $this->start_controls_section(
            'tours_section',
            [
                'label' => __( 'Tours', 'arabian_adventures' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label'   => __( 'Image', 'arabian_adventures' ),
                'type'    => Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'category',
            [
                'label'       => __( 'Category', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => __( 'Enter category', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'label',
            [
                'label'       => __( 'Label', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => __( 'Enter label', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Tour Title', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter tour title', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'duration',
            [
                'label'       => __( 'Duration', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => __( 'Enter duration (e.g. 4 to 6 hours)', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'tags',
            [
                'label'       => __( 'Tags', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'placeholder' => __( 'tag, tag`', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'old_price',
            [
                'label'       => __( 'Old Price', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter old price', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'price',
            [
                'label'       => __( 'Price', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter price', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'caption',
            [
                'label'       => __( 'Caption', 'arabian_adventures' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter caption', 'arabian_adventures' ),
            ]
        );
        
        $repeater->add_control(
            'link',
            [
                'label' => __( 'Tour Link', 'plugin-name' ),
                'type' => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'arabian_adventures' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
            ]
        );

        $this->add_control(
            'tours_repeater',
            [
                'label'       => __( 'Tours List', 'arabian_adventures' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
                'default' => [
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Budget-Friendly Evening Desert Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 101,
                            'url' => get_template_directory_uri() . '/assets/images/Morning-Desert-Safari.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '4 to 6 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '150 AED', 'arabian_adventures' ),
                        'price'   => __( '99.5 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Private Group (up to 6 people) Red Dunes Desert Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 102,
                            'url' => get_template_directory_uri() . '/assets/images/Desert-Safari.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '8 to 10 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '1500 AED', 'arabian_adventures' ),
                        'price'   => __( '1300 AED', 'arabian_adventures' ),
                        'caption'   => __( '', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Ultimate Evening Adventure Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 103,
                            'url' => get_template_directory_uri() . '/assets/images/Buggy-Dune-Bashing.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '6 to 10 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '300 AED', 'arabian_adventures' ),
                        'price'   => __( '245 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Desert Safari Camel Riding', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 104,
                            'url' => get_template_directory_uri() . '/assets/images/Desert-Safari-Camel-Riding.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '1 to 2 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '100 AED', 'arabian_adventures' ),
                        'price'   => __( '75.5 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Desert Safari Camel Riding', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 105,
                            'url' => get_template_directory_uri() . '/assets/images/Desert-Safari-Camel-Riding.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '1 to 2 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '100 AED', 'arabian_adventures' ),
                        'price'   => __( '75.5 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Ultimate Evening Adventure Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 106,
                            'url' => get_template_directory_uri() . '/assets/images/Deset-Buggys.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '6 to 10 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '300 AED', 'arabian_adventures' ),
                        'price'   => __( '245 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Private Group (up to 6 people) Red Dunes Desert Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 107,
                            'url' => get_template_directory_uri() . '/assets/images/desert-safari-01.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '8 to 10 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '1500 AED', 'arabian_adventures' ),
                        'price'   => __( '1300 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                    [
                        'category'   => __( 'Day Trips', 'arabian_adventures' ),
                        'label'   => __( 'Dubai Desert Safari Tours', 'arabian_adventures' ),
                        'title'   => __( 'Budget-Friendly Evening Desert Safari & BBQ Dinner with Optional Quad Bike', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 108,
                            'url' => get_template_directory_uri() . '/assets/images/red-dunes-desert-safari.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                            // 'custom_attributes' => '',
                        ],
                        'duration'   => __( '4 to 6 hours', 'arabian_adventures' ),
                        'tags'   => __( 'Hotel pick-up, Private tour', 'arabian_adventures' ),
                        'old_price'   => __( '150 AED', 'arabian_adventures' ),
                        'price'   => __( '99.5 AED', 'arabian_adventures' ),
                        'caption'   => __( 'per person', 'arabian_adventures' ),
                    ],
                ],
            ]
        );

        $this->end_controls_section();
        // =========================
        // END TOURS REPEATER
        // =========================
    }


	// =========================
    // Render frontend output
    // =========================
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="top-tours py-3">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around">
                    <div class="col-12 p-0 py-2">
                        <h2 class="waved-heading">
                            <span><?php echo esc_html( $settings['main_title'] ); ?></span>
                            <span class="waved">
                                <?php
                                if ( ! empty( $settings['waved_title'] ) ) {
                                    $letters = str_split( $settings['waved_title'] );
                                    foreach ( $letters as $letter ) {
                                        echo '<span><span>' . esc_html( $letter ) . '</span></span>';
                                    }
                                }
                                ?>
                            </span>
                            <span><?php echo esc_html( $settings['last_title'] ); ?></span>
                        </h2>
                        <p class="subtitle m-0"><?php echo esc_html( $settings['subtitle'] ); ?></p>
                    </div>

                    <?php if ( ! empty( $settings['tours_repeater'] ) ) : ?>
                        <?php foreach ( $settings['tours_repeater'] as $item ) : ?>
                            <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                                <div class="tour">
                                    <?php 
                                        $this->remove_render_attribute( 'link' ); // Reset attributes
                                        $this->add_link_attributes( 'link', $item['link'] ); 
                                    ?>
                                    <a <?php $this->print_render_attribute_string( 'link' ); ?>>
                                        <div class="thumbnail">
                                            <img src="<?php echo esc_url( $item['image']['url'] ?: Utils::get_placeholder_image_src() ); ?>" alt="">
                                            <span class="category"><?php echo esc_html( $item['category'] ); ?></span>
                                        </div>
                                        <div class="details">
                                            <span class="label"><?php echo esc_html( $item['label'] ); ?></span>
                                            <p class="title"><strong><?php echo esc_html( $item['title'] ); ?></strong></p>
                                            <div class="tour-info">
                                                <div class="duration">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                                    <?php echo esc_html( $item['duration'] ); ?>
                                                </div>
                                                <div class="tagging-wrap">
                                                    <?php 
                                                    $tags = explode( ',', $item['tags'] );
                                                    foreach ( $tags as $tag ) :
                                                        ?>
                                                        <span class="tagging"><?php echo esc_html( trim( $tag ) ); ?></span>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="old-price">
                                                    <span class="label">From</span>
                                                    <span class="price"><?php echo esc_html( $item['old_price'] ); ?></span>
                                                </div>
                                                <div class="activity-price">
                                                    <span class="price"><?php echo esc_html( $item['price'] ); ?></span>
                                                    <span class="caption"><?php echo esc_html( $item['caption'] ); ?></span>
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
                                    </a>
                                </div>
                            </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </section>
        <?php
    }


	// =========================
    // Live preview in Elementor editor
    // =========================
    protected function content_template() {
        ?>
        <section class="top-tours py-3">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around">
                    <div class="col-12 p-0 py-2">
                        <h2 class="waved-heading">
                            <span>{{{ settings.main_title }}}</span>
                            <span class="waved">
                                <# if ( settings.waved_title ) {
                                    var letters = settings.waved_title.split('');
                                    _.each( letters, function(letter) { #>
                                        <span><span>{{{ letter }}}</span></span>
                                    <# }); 
                                } #>
                            </span>
                            <span>{{{ settings.last_title }}}</span>
                        </h2>
                        <p class="subtitle m-0">{{{ settings.subtitle }}}</p>
                    </div>

                    <# if ( settings.tours_repeater.length ) { _.each( settings.tours_repeater, function( item ) { #>
                        <div class="col-lg-3 col-md-4 col-6 p-0 mb-3">
                            <div class="tour">
                                <a href="{{ item.link.url }}">
                                    <div class="thumbnail">
                                        <img src="{{ item.image.url ? item.image.url : '<?php echo Utils::get_placeholder_image_src(); ?>' }}" alt="">
                                        <span class="category">{{{ item.category }}}</span>
                                    </div>
                                    <div class="details">
                                        <span class="label">{{{ item.label }}}</span>
                                        <p class="title"><strong>{{{ item.title }}}</strong></p>
                                        <div class="tour-info">
                                            <div class="duration">
                                                <svg width="16" height="16" viewBox="0 0 16 16"><path d="M8.5 5.5a.5.5 0 00-1 0V8c0 .14.05.26.15.36l2.01 2.02a.5.5 0 10.7-.7L8.5 7.8V5.5z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.96a6 6 0 100-12 6 6 0 000 12zm5-6a5 5 0 11-10 0 5 5 0 0110 0z"></path></svg>
                                                {{{ item.duration }}}
                                            </div>
                                            <div class="tagging-wrap">
                                                <# _.each( item.tags.split(','), function( tag ) { #>
                                                    <span class="tagging">{{{ tag.trim() }}}</span>
                                                <# }); #>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="old-price">
                                                <span class="label">From</span>
                                                <span class="price">{{{ item.old_price }}}</span>
                                            </div>
                                            <div class="activity-price">
                                                <span class="price">{{{ item.price }}}</span>
                                                <span class="caption">{{{ item.caption }}}</span>
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
                                </a>
                            </div>
                        </div>
                    <# }); } #>
                </div>
            </div>
        </section>
        <?php
    }
	
}
Plugin::instance()->widgets_manager->register_widget_type( new Tours_Section_Widget() );