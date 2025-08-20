<?php 

// Custom widgets must be defined in the Elementor namespace
namespace Elementor; 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Image_Gallery_Widget extends Widget_Base {

    // =========================
    // Widget Dependencies Styles Enqueue
    // =========================
	public function get_style_depends() {

		// Adventures Section Widget Css Enqueue
		wp_register_style( 'image-gallery', ELEMENTOR_DIR_URI . '/widgets/image-gallery/assets/css/image-gallery.css', array(), '1.0.0', 'all' );
		
		return array(
			// 'image-gallery',
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
		return __( 'image_Gallery', 'arabian_adventures' );
	}

    // =========================
	// Returns the display title of the widget
	// =========================
	public function get_title() {
		return __( 'Image Gallery', 'arabian_adventures' );
	}

    // =========================
	// Returns the icon class for the widget in Elementor
	// =========================
	public function get_icon() {
		return 'arabian-adventures-icon eicon-gallery-masonry';
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
			' portfolio ',
			' photos ',
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
                'default' => __( 'Our', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'waved_title',
            [
                'label'   => __( 'Waved Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Gallery', 'arabian_adventures' ),
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
                'default' => __( 'Take a look at the desert moments captured by our guests - they may just inspire your next adventure!', 'arabian_adventures' ),
            ]
        );

        $this->end_controls_section();
        // =========================
        // END HEADING & SUBTITLE
        // =========================

        // =========================
        // SECTION: Gallery Images Repeater
        // =========================
        $this->start_controls_section(
            'images_Gallery',
            [
                'label' => __( 'Images Gallery', 'arabian_adventures' ),
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => __( 'Image', 'arabian_adventures' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_control(
            'caption',
            [
                'label' => __( 'Caption', 'arabian_adventures' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => __( 'Link', 'arabian_adventures' ),
                'type' => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'arabian_adventures' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
            ]
        );

        $this->add_control(
            'image_repeater',
            [
                'label' => __( 'Gallery List', 'arabian_adventures' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ caption }}}',
                'default' => [
                    [
                        'caption' => __( 'Dune Bashing on Red Dunes', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 101,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/1.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Camel Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 102,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/2.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Our Cars with experienced drivers', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 103,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/3.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Sunset Point for Photography', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 104,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/4.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Photography with Falcon', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 105,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/5.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Camp Activities for Kids', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 106,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/6.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Fleet of Cars', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 107,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/7.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'caption' => __( 'Extreme Adventure Safari', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 108,
                            'url' => get_template_directory_uri() . '/assets/images/portfolio/8.jpg',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                ],
            ]
        );

        $this->end_controls_section();
        // =========================
        // End Gallery Images Repeater
        // =========================
    }


	// =========================
    // Render frontend output
    // =========================
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Images Gallery Section -->
        <section class="gallery py-3">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around row-cols-lg-4 row-cols-sm-3 row-cols-2">
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
                    <?php if ( ! empty( $settings['image_repeater'] ) ) :
                        foreach ( $settings['image_repeater'] as $item ) : ?>
                        <div class="col p-0">
                            <div class="grid">
                                <figure class="effect-overlay">
                                    <div class="gallery-img">
                                        <?php 
                                            $this->remove_render_attribute( 'link' ); // Reset attributes
                                            $this->add_link_attributes( 'link', $item['link'] ); 
                                        ?>
                                        <a <?php $this->print_render_attribute_string( 'link' ); ?>>
                                            <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['caption'] ); ?>" title="<?php echo esc_attr( $item['caption'] ); ?>">
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                    <figcaption>
                                        <div>
                                            <p><?php echo esc_html( $item['caption'] ); ?></p>
                                        </div>
                                        <?php 
                                            $this->remove_render_attribute( 'link' ); // Reset attributes
                                            $this->add_link_attributes( 'link', $item['link'] ); 
                                        ?>
                                        <a <?php $this->print_render_attribute_string( 'link' ); ?>>
                                            <?php _e( 'View more', 'arabian_adventures' ); ?>
                                        </a>
                                    </figcaption>
                                </figure>
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
        <!-- Images Gallery Section -->
        <section class="gallery py-3">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around row-cols-lg-4 row-cols-sm-3 row-cols-2">
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
                    <# if ( settings.image_repeater ) { _.each( settings.image_repeater, function( item ) { #>
                        <div class="col p-0">
                            <div class="grid">
                                <figure class="effect-overlay">
                                    <div class="gallery-img">
                                        <a href="{{ item.link.url }}" class="big">
                                            <img src="{{ item.image.url }}" alt="{{ item.caption }}" title="{{ item.caption }}">
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                    <figcaption>
                                        <div>
                                            <p>{{{ item.caption }}}</p>
                                        </div>
                                        <a href="{{ item.link.url }}">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    <# }); } #>
                </div>
            </div>
        </section>
        <?php
    }
	
}
Plugin::instance()->widgets_manager->register_widget_type( new Image_Gallery_Widget() );