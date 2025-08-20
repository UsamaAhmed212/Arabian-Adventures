<?php 

// Custom widgets must be defined in the Elementor namespace
namespace Elementor; 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Celebrity_Visits_Widget extends Widget_Base {

    // =========================
    // Widget Dependencies Styles Enqueue
    // =========================
	public function get_style_depends() {

		// Adventures Section Widget Css Enqueue
		wp_register_style( 'celebrity-visits', ELEMENTOR_DIR_URI . '/widgets/celebrity-visits/assets/css/celebrity-visits.css', array(), '1.0.0', 'all' );
		
		return array(
			// 'celebrity-visits',
		);
	}
	
	// =========================
	// Widget Dependencies Scripts Enqueue
	// =========================
	public function get_script_depends() {
		
		// Svg Loader Js Enqueue
		// wp_register_script( 'arabian_adventures-example', ELEMENTOR_DIR_URI . 'assets/js/example.js', array(), '1.0.0', true );

		return array(
			// 'arabian_adventures-example',
		);
	}
 

    // =========================
	// Returns the unique name/identifier of the widget
	// =========================
	public function get_name() {
		return __( 'celebrity_visits', 'arabian_adventures' );
	}

    // =========================
	// Returns the display title of the widget
	// =========================
	public function get_title() {
		return __( 'Celebrity Visits', 'arabian_adventures' );
	}

    // =========================
	// Returns the icon class for the widget in Elementor
	// =========================
	public function get_icon() {
		return 'arabian-adventures-icon eicon-thumbnails-down';
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
			' photos ',
            ' celebrity ',
            ' famous ',
            ' visits ',
            ' visitor ',
            ' celebrity-visits ',
            ' celebrity-gallery ',
            ' celebrity-slider ',
            ' celebrity-carousel ',
            ' celebrity-photos ',
            ' famous-persons ',
            ' famous-people ',
            ' famous-gallery ',
            ' famous-slider ',
            ' celebrity-portfolio ',
            ' celebrity-experience s'
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
                'default' => __( '', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'waved_title',
            [
                'label'   => __( 'Waved Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Famous', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'last_title',
            [
                'label'   => __( 'Last Word', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Person', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label'   => __( 'Subtitle', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => __( 'Famous Personalities Spotted On Our Desert Experiences', 'arabian_adventures' ),
            ]
        );

        $this->end_controls_section();
        // =========================
        // END HEADING & SUBTITLE
        // =========================

        // =========================
        // SECTION: Celebrity Visits Repeater
        // =========================
        $this->start_controls_section(
            'celebrities_visits',
            [
                'label' => __( 'Celebrity Details', 'arabian_adventures' ),
                'tab' => Controls_Manager::TAB_CONTENT,
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
            'name',
            [
                'label' => __( 'Name', 'arabian_adventures' ),
                'type' => Controls_Manager::TEXT,
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __( 'Description', 'arabian_adventures' ),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'celebrities_repeater',
            [
                'label' => __( 'Celebrities', 'arabian_adventures' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
                'default' => [
                    [
                        'name' => __( 'Dune Bashing on Red Dunes', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 101,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-02.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Camel Safari', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 102,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-01.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Our Cars with experienced drivers', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 103,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-04.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Sunset Point for Photography', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 104,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-13.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Photography with Falcon', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 105,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-14.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Camp Activities for Kids', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 106,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-17.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Fleet of Cars', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 107,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-09.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Extreme Adventure Safari', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 108,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-12.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Extreme Adventure Safari', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 109,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-10.jpg',
                        ],
                    ],
                    [
                        'name' => __( 'Extreme Adventure Safari', 'arabian_adventures' ),
                        'description' => __( 'Short description about the celebrity visit.', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 110,
                            'url' => get_template_directory_uri() . '/assets/images/famous-person/famous-person-18.jpg',
                        ],
                    ],
                ],
            ]
        );

        $this->end_controls_section();
        // =========================
        // END Celebrity Visits Repeater
        // =========================

        // =========================
        // SECTION: Button
        // =========================
        $this->start_controls_section(
            'section_button',
            [
                'label' => __( 'Button', 'arabian_adventures' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Text', 'arabian_adventures' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Explore More', 'arabian_adventures' ),
                // 'placeholder' => __( 'Enter button text here', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => __( 'Link', 'arabian_adventures' ),
                'type' => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'arabian_adventures' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => false,
                ]
            ]
        );

        $this->end_controls_section();
    }


	// =========================
    // Render frontend output
    // =========================
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Celebrity Visits Section -->
        <section class="celebrity-visits-info">
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
                    <div class="col-12 p-0 py-2">
                        <div class="owl-carousel">
                            <?php if ( ! empty( $settings['celebrities_repeater'] ) ) :
                                foreach ( $settings['celebrities_repeater'] as $item ) : ?>
                                    <div class="famous-card">
                                        <img class="img-fluid rounded" src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" title="<?php echo esc_attr( $item['name'] ); ?>">
                                        <div class="famous-overlay"></div>
                                        <div class="famous-info">
                                            <div class="famous-name"><?php echo esc_html( $item['name'] ); ?></div>
                                            <div class="famous-text"><?php echo esc_html( $item['description'] ); ?></div>
                                        </div>
                                    </div>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
                <?php if ( ! empty( $settings['button_text'] ) ) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $this->remove_render_attribute( 'button_link' ); // Reset attributes
                            $this->add_link_attributes( 'button_link', $settings['button_link'] ); 
                        ?>
                        <a <?php $this->print_render_attribute_string( 'button_link' ); ?> class="famous-btn">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                if (typeof $.fn.owlCarousel === 'function') {
                    // Initialize carousel using the reusable options
                    $(".owl-carousel").owlCarousel(owlOptions);
                }
            });
		</script>
        <?php
    }


	// =========================
    // Live preview in Elementor editor
    // =========================
    protected function content_template() {
        ?>
        <!-- Celebrity Visits Section -->
        <section class="celebrity-visits-info">
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

                    <div class="col-12 p-0 py-2">
                        <div class="owl-carousel">
                            <# if ( settings.celebrities_repeater ) { _.each( settings.celebrities_repeater, function( item ) { #>
                                <div class="famous-card">
                                    <img class="img-fluid rounded" src="{{ item.image.url }}" alt="{{ item.name }}" title="{{ item.name }}">
                                    <div class="famous-overlay"></div>
                                    <div class="famous-info">
                                        <div class="famous-name">{{{ item.name }}}</div>
                                        <div class="famous-text">{{{ item.description }}}</div>
                                    </div>
                                </div>
                            <# }); } #>
                        </div>
                    </div>
                </div>

                <# if ( settings.button_text ) { #>
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ settings.button_link.url }}" class="famous-btn">
                            {{{ settings.button_text }}}
                        </a>
                    </div>
                </div>
                <# } #>
            </div>
        </section>
        
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                if (typeof $.fn.owlCarousel === 'function') {
                    // Initialize carousel using the reusable options
                    $(".owl-carousel").owlCarousel(owlOptions);
                }
            });
		</script>
        <?php
    }
	
}
Plugin::instance()->widgets_manager->register_widget_type( new Celebrity_Visits_Widget() );