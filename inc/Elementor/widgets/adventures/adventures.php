<?php 

// Custom widgets must be defined in the Elementor namespace
namespace Elementor; 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Adventures_Section_Widget extends Widget_Base {

    // =========================
    // Widget Dependencies Styles Enqueue
    // =========================
	public function get_style_depends() {

		// Adventures Section Widget Css Enqueue
		wp_register_style( 'adventures', ELEMENTOR_DIR_URI . '/widgets/adventures/assets/css/adventures.css', array(), '1.0.0', 'all' );
		
		return array(
			// 'adventures',
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
		return __( 'adventures', 'arabian_adventures' );
	}

    // =========================
	// Returns the display title of the widget
	// =========================
	public function get_title() {
		return __( 'Adventures', 'arabian_adventures' );
	}

    // =========================
	// Returns the icon class for the widget in Elementor
	// =========================
	public function get_icon() {
		return 'arabian-adventures-icon eicon-form-vertical';
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
			' cards ',
            ' experience ',
            ' tour ',
			' hero ', 
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
                'default' => __( 'experiences', 'arabian_adventures' ),
            ]
        );

        $this->add_control(
            'last_title',
            [
                'label'   => __( 'Last Word', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'last', 'arabian_adventures' ),
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
        // SECTION: Adventure Cards Repeater
        // =========================
        $this->start_controls_section(
            'adventure_cards',
            [
                'label' => __( 'Adventure Cards', 'arabian_adventures' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'image',
            [
                'label' => __( 'Card Image', 'arabian_adventures' ),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
        
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Card Title', 'arabian_adventures' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __( 'Desert Adventures', 'arabian_adventures' ),
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => __( 'Link URL', 'arabian_adventures' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'placeholder' => __( 'https://your-link.com', 'arabian_adventures' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
            ]
        );

        $this->add_control(
            'cards_repeater',
            [
                'label' => __( 'Adventure List', 'arabian_adventures' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
                'default' => [
                    [
                        'title' => __( 'Desert Adventures', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 101,
                            'url' => get_template_directory_uri() . '/assets/images/adventure-1.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'title' => __( 'Tours & Attractions', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 102,
                            'url' => get_template_directory_uri() . '/assets/images/topDesti6.png.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'title' => __( 'Cruise & Boat Tours', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 103,
                            'url' => get_template_directory_uri() . '/assets/images/adventure-3.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'title' => __( 'Water & Theme Parks', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 104,
                            'url' => get_template_directory_uri() . '/assets/images/adventure-4.webp',
                        ],
                        'link' => [
                            'url' => '',
                            'is_external' => true,
                            'nofollow' => false,
                        ],
                    ],
                    [
                        'title' => __( 'Sustainable', 'arabian_adventures' ),
                        'image' => [
                            'id'  => 105,
                            'url' => get_template_directory_uri() . '/assets/images/topDesti2.png.webp',
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
        // END ADVENTURE CARDS Repeater
        // =========================
    }


	// =========================
    // Render frontend output
    // =========================
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Adventures Section -->
        <section id="adventures" class="py-5">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
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
                </div>
                <div class="row m-0 justify-content-around row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    <?php if ( ! empty( $settings['cards_repeater'] ) ) :
                        foreach ( $settings['cards_repeater'] as $item ) : ?>
                            <div class="col p-0">
                                <div class="single-adventure my-2 text-center">
                                    <div class="adventure-img">
                                        <img src="<?php echo esc_url( $item['image']['url'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" title="<?php echo esc_attr( $item['title'] ); ?>">
                                        <div class="adventure-details">
                                            <h4>
                                                <?php 
                                                    $this->remove_render_attribute( 'link' ); // Reset attributes
                                                    $this->add_link_attributes( 'link', $item['link'] ); 
                                                ?>
                                                <a <?php $this->print_render_attribute_string( 'link' ); ?>>
                                                    Explore
                                                    <svg viewBox="0 0 512 512">
                                                        <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                                                    </svg>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <h3>
                                        <?php 
                                            $this->remove_render_attribute( 'link' ); // Reset attributes
                                            $this->add_link_attributes( 'link', $item['link'] ); 
                                        ?>
                                        <a <?php $this->print_render_attribute_string( 'link' ); ?>>
                                            <?php echo esc_html( $item['title'] ); ?>
                                        </a>
                                    </h3>
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
        <!-- Adventures Section -->
        <section id="adventures" class="py-5">
            <div class="container-xxl px-lg-5 px-sm-4 px-3">
                <div class="row m-0 justify-content-around row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
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
                </div>
                <div class="row m-0 justify-content-around row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    <# if ( settings.cards_repeater ) { _.each( settings.cards_repeater, function(item) { #>
                        <div class="col p-0">
                            <div class="single-adventure my-2 text-center">
                                <div class="adventure-img">
                                    <img src="{{ item.image.url }}" alt="{{ item.title }}" title="{{ item.title }}">
                                    <div class="adventure-details">
                                        <h4>
                                            <a href="{{ item.link.url }}">
                                                Explore
                                                <svg viewBox="0 0 512 512">
                                                    <path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/>
                                                </svg>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <h3><a href="{{ item.link.url }}">{{{ item.title }}}</a></h3>
                            </div>
                        </div>
                    <# }); } #>
                </div>
            </div>
        </section>
        <?php
    }
	
}
Plugin::instance()->widgets_manager->register_widget_type( new Adventures_Section_Widget() );