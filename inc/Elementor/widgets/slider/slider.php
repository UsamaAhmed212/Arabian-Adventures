<?php 

// Custom widgets must be defined in the Elementor namespace
namespace Elementor; 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Slider_Section_Widget extends Widget_Base {

	// =========================
    // Widget Dependencies Styles Enqueue
    // =========================
	public function get_style_depends() {

		// Slider Section Widget Css Enqueue
		wp_register_style( 'slider', ELEMENTOR_DIR_URI . '/widgets/slider/assets/css/slider.css', array(), '1.0.0', 'all' );
		
		return array(
			// 'slider',
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
		return __( 'arabian_adventures_slider', 'arabian_adventures' );
	}

    // =========================
	// Returns the display title of the widget
	// =========================
	public function get_title() {
		return __( 'Slider', 'arabian_adventures' );
	}

    // =========================
	// Returns the icon class for the widget in Elementor
	// =========================
	public function get_icon() {
		return 'arabian-adventures-icon eicon-banner';
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
			' slider ',
			' banner ',
			' hero ', 
		];
	}


    // =========================
    // Register widget controls (Elementor editor)
    // =========================
	protected function register_controls() {

        // =========================
        // SLIDER CONTENT SECTION
        // =========================
        $this->start_controls_section(
            'slider_content',
            [
                'label' => __( 'Slider Content', 'arabian_adventures' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // Background Image
        $this->add_control(
            'image',
            [
                'label'   => __( 'Background Image', 'arabian_adventures' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => get_template_directory_uri() . '/assets/images/slider-01.jpg',
                ],
            ]
        );

        // Main Title
        $this->add_control(
            'title',
            [
                'label'   => __( 'Main Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
				// 'label_block' 	=> true,
                'default' => __( 'Arabian desert', 'arabian_adventures' ),
            ]
        );

        // Waved Title (animated letters)
        $this->add_control(
            'waved',
            [
                'label'   => __( 'Waved Title', 'arabian_adventures' ),
                'type'    => Controls_Manager::TEXT,
				// 'label_block' 	=> true,
                'default' => __( 'safaris', 'arabian_adventures' ),
            ]
        );

        // Subtitle
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
        // END SLIDER CONTENT SECTION
        // =========================

	}


	// =========================
    // Render frontend output
    // =========================
	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <!-- Slider Section -->
        <section id="slider">
            <div class="container-xxl p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="banner">
                            <div class="background-image">
                                <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>" title="<?php echo esc_attr( $settings['title'] ); ?>">
                            </div>
                            <div class="banner_content">
                                <h2 class="waved-heading text-center">
                                    <span><?php echo esc_html( $settings['title'] ); ?></span>
                                    <span class="waved">
                                        <?php
                                        if ( ! empty( $settings['waved'] ) ) {
                                            $letters = str_split( $settings['waved'] );
                                            foreach ( $letters as $letter ) {
                                                echo '<span><span>' . esc_html( $letter ) . '</span></span>';
                                            }
                                        }
                                        ?>
                                    </span>
                                </h2>
                                <p class="subtitle text-center m-0">
                                    <?php echo esc_html( $settings['subtitle'] ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
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
        <!-- Slider Section -->
        <section id="slider">
            <div class="container-xxl p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="banner">
                            <div class="background-image">
                                <img src="{{ settings.image.url }}" alt="{{ settings.title }}" title="{{ settings.title }}">
                            </div>
                            <div class="banner_content">
                                <h2 class="waved-heading text-center">
                                    <span>{{{ settings.title }}}</span>
                                    <span class="waved">
                                        <# if ( settings.waved ) {
                                            var letters = settings.waved.split('');
                                            _.each( letters, function( letter ) { #>
                                                <span><span>{{{ letter }}}</span></span>
                                            <# });
                                        } #>
                                    </span>
                                </h2>
                                <p class="subtitle text-center m-0">
                                    {{{ settings.subtitle }}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
	
}
Plugin::instance()->widgets_manager->register_widget_type( new Slider_Section_Widget() );