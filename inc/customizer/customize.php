<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require_once ARABIAN_ADVENTURES_THEME_DIR . 'inc/customizer/customize-enqueue.php';


//Theme Site Identity Customizer Register
function arabian_adventure_Customizer_register( $wp_customize ) {
    /*******************************************************************
    *Theme Customizer Site Logo & Icon ( Site Identity ) Section Start
    ********************************************************************/

    //Site Logo & Icon ( Site Identity ) Section Rename
    $wp_customize->get_section('title_tagline')->title = __( 'Site Logo & Icon', 'arabian_adventure' );

    //Blog Name (Site Title) Remove
    $wp_customize->remove_control( 'blogname' );

    //Blog Description (Tagline) Remove
    $wp_customize->remove_control( 'blogdescription' );

    //Logo Customize
    $wp_customize->add_setting( 'arabian_adventure_logo', array(
        'default' => ARABIAN_ADVENTURES_THEME_DIR_URI .'assets/images/log.png',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arabian_adventure_logo', array(
        'label'         => __( 'Logo', 'arabian_adventure' ),
        'description'   => __( 'Upload your logo image here.', 'arabian_adventure' ),
        'button_labels' => array( // Optional
            'select'        => __( 'Select Logo' ),
            'change'        => __( 'Change Logo' ),
            'remove'        => __( 'Remove Logo' ),
            'default'       => __( 'Default' ),
            'placeholder'   => __( 'No Logo selected' ),
            'frame_title'   => __( 'Select Logo' ),
            'frame_button'  => __( 'Choose Logo' ),
        ),
        'priority'      => 1,
        'section'       => 'title_tagline',
        'settings'      => 'arabian_adventure_logo',
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'arabian_adventure_logo', array(
        'selector'        => '.navbar-brand',
    ) );


    //Site Icon Customize
    $wp_customize->add_control( new WP_Customize_Site_Icon_Control( $wp_customize, 'site_icon', array(
        'label'       => __( 'Site Icon', 'arabian_adventure' ),
        'description' => sprintf(
            /* translators: %s: site icon size in pixels */
            __( 'The Site Icon is used as a browser and app icon for your site. Icons must be square, and at least %s pixels wide and tall.' ),
            '<strong>16</strong>'
        ),
        'section'     => 'title_tagline',
    ) ) );
    
    /*******************************************************************
    *Theme Customizer Site Logo & Icon ( Site Identity ) Section End
    ********************************************************************/

    /************************** { --New Section-- } **************************/

    /*******************************************************************
    *Theme Customizer Theme Options Section Start
    ********************************************************************/
    // Arabian_adventure WP Customize Panel Class
    class arabian_adventure_WP_Customize_Panel extends WP_Customize_Panel {
  
        public $panel;
    
        public $type = 'arabian_adventure_panel';
    
        public function json() {
    
              $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
              $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
              $array['content'] = $this->get_content();
              $array['active'] = $this->active();
              $array['instanceNumber'] = $this->instance_number;
      
              return $array;
    
          }
    
    }

    // Arabian_adventure WP Customize Section Class
    class Arabian_adventure_WP_Customize_Section extends WP_Customize_Section {

        public $section;
    
        public $type = 'arabian_adventure_section';
    
        public function json() {
    
            $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
            $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
            $array['content'] = $this->get_content();
            $array['active'] = $this->active();
            $array['instanceNumber'] = $this->instance_number;

            if ( $this->panel ) {

            $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );

            } else {

            $array['customizeAction'] = 'Customizing';

            }

            return $array;
    
        }
    
    }

    $wp_customize->add_panel( 'arabian_adventure_theme_options', array(
        'title'          => __('Theme Options', 'arabian_adventure'),
        'description'    => __('Several settings pertaining my theme', 'arabian_adventure'),
        'priority'       => 21,
    ) );

    /***** Header Menu Layout Start *****/
    $wp_customize->add_section( new Arabian_adventure_WP_Customize_Section( $wp_customize, 'arabian_adventure_header_menu', array(
        'title'          => __('Header Menu', 'arabian_adventure'),
        'panel'          => 'arabian_adventure_theme_options',
        'priority'       => 2,
    ) ) );

    // Arabian_adventure Custom Image Radio Control Class
    class Arabian_adventure_Custom_Image_Radio_Control extends WP_Customize_Control {

        public function render_content() {
    
            if ( empty( $this->choices ) ) return;
    
            $name =  $this->id;
            ?>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <ul class="controls" id='arabian_adventure-radio-img-container'>
                <?php
                foreach ( $this->choices as $value => $label ) { ?>
                    <input <?php $this->link(); ?> type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($value); ?>" <?php $this->link(); checked($this->value(), $value); ?> />
                    <label for="<?php echo esc_attr($value); ?>" >
                        <img src="<?php echo esc_url($label); ?>" />
                    </label>
                <?php
                }
                ?>
            </ul>
            <?php
        }
    
    }

    $wp_customize->add_setting( 'arabian_adventure_header_menu_image_radio_button', array(
        'default'       => 'header-left',
    ) );
    
    $wp_customize->add_control( new Arabian_adventure_Custom_Image_Radio_Control ( $wp_customize, 'arabian_adventure_header_menu_image_radio_button', array(
        'label'			=> __( 'Header Layout', 'arabian_adventure' ),
        'choices'		=> array(
            'header-left'    => get_template_directory_uri() . '/inc/customizer/assets/images/header-left.svg',
            'header-center'  => get_template_directory_uri() . '/inc/customizer/assets/images/header-center.svg',
        ),
        'section'       => 'arabian_adventure_header_menu',
        'settings'      => 'arabian_adventure_header_menu_image_radio_button',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'arabian_adventure_header_menu_image_radio_button', array(
        'selector'        => '.header-section',
    ) );
    /***** Header Menu Layout End *****/

    /***** Footer Copyright Start *****/
    $wp_customize->add_section( new Arabian_adventure_WP_Customize_Section( $wp_customize, 'arabian_adventure_footer', array(
        'title'     => __('Footer', 'arabian_adventure'),
        'panel'     => 'arabian_adventure_theme_options',
        'priority'  => 3,
    ) ) );

    $wp_customize->add_section( new Arabian_adventure_WP_Customize_Section( $wp_customize, 'arabian_adventure_footer_copyright', array(
        'title'     => __('Footer Copyright', 'arabian_adventure'),
        'panel'     => 'arabian_adventure_theme_options',
        'section' => 'arabian_adventure_footer',
        'priority'  => 3,
    ) ) );


    // Arabian_adventure TinyMCE Custom Control
	class Arabian_adventure_TinyMCE_Custom_control extends WP_Customize_Control {
		
        /**
        * The type of control being rendered
        **/
        public $type = 'tinymce_editor';

		/**
		* Pass our TinyMCE toolbar string to JavaScript
		**/
		public function to_json() {
			parent::to_json();
			$this->json['Arabian_adventuretinymcetoolbar1'] = isset( $this->input_attrs['toolbar1'] ) ? esc_attr( $this->input_attrs['toolbar1'] ) : 'bold italic strikethrough alignleft aligncenter alignright alignjustify link';
			$this->json['Arabian_adventuretinymcetoolbar2'] = isset( $this->input_attrs['toolbar2'] ) ? esc_attr( $this->input_attrs['toolbar2'] ) : '';
			$this->json['Arabian_adventuremediabuttons'] = isset( $this->input_attrs['mediaButtons'] ) && ( $this->input_attrs['mediaButtons'] === true ) ? true : false;
		}
        
		/**
		* Render the control in the customizer
		**/
		public function render_content() {
		?>
			<div class="tinymce-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<textarea id="<?php echo esc_attr( $this->id ); ?>" class="customize-control-tinymce-editor" <?php $this->link(); ?>><?php echo esc_html( $this->value() ); ?></textarea>
			</div>
		<?php
		}

	}

    $wp_customize->add_setting( 'arabian_adventure_footer_copyright_text', array(
        'default' => 'Copyright © [heart] <a href="#">Usama Ahmed</a>',
    ) );

    $wp_customize->add_control( new Arabian_adventure_TinyMCE_Custom_control( $wp_customize, 'arabian_adventure_footer_copyright_text', array(
            'label'       => __( 'Footer Copyright Control', 'arabian_adventure' ),
            // 'description' => __( '' ),
            'input_attrs' => array(
                'toolbar1'      => 'formatselect | styleselect | bold italic strikethrough | forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | insert | fontsizeselect',
                'mediaButtons'  => true,
            ),
            'section'     => 'arabian_adventure_footer_copyright',
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'arabian_adventure_footer_copyright_text', array(
        'selector'  => '.about-content',
    ) );
    /***** Footer Copyright End *****/
    
    /*******************************************************************
    *Theme Customizer Theme Options Section End
    ********************************************************************/
}
add_action( 'customize_register', 'arabian_adventure_Customizer_register' );
