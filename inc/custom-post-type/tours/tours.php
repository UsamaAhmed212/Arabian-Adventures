<?php 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Custom Post Type Tours Initialize Class
class CustomPostTypeTours {

    private static $instance = null;

	public static function instance() {
        if ( is_null( self::$instance ) ) self::$instance = new self();
        
		return self::$instance;
	}

    public function __construct() {

        // Register the custom post type 'Tours' when WordPress initializes
        add_action( 'init', array( $this, 'register_custom_post_type' ) );

        // Register custom meta fields for the 'Tours' post type on initialization
        add_action( 'init', array( $this, 'register_tour_meta' ) );

        // Add meta boxes to the 'Tours' edit screen in the admin
        add_action( 'add_meta_boxes', array( $this, 'add_tours_meta_box' ) );
        
        // Save the data from the 'Tours' meta boxes when the post is saved
        add_action( 'save_post', array( $this, 'save_tours_meta_box' ) );

        // Register custom taxonomies for the custom post types on WordPress initialization
        // The priority is set to 0 to ensure it runs before most other 'init' actions
        add_action( 'init', array( $this, 'create_custom_taxonomies' ), 0 );

        // Enqueue any scripts or styles needed for the admin area
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }


    /**
     * Register a custom post type
     */
    public function register_custom_post_type() {
        $text_domain =  wp_get_theme()->get( 'TextDomain' ); // Get text domain for translations
     
        $labels = array(
            'name'                  => _x( 'Tours', 'Post type general name', $text_domain ),
            'singular_name'         => _x( 'Tours', 'Post type singular name', $text_domain ),
            'menu_name'             => _x( 'Tours', 'Admin Menu text', $text_domain ),
            'name_admin_bar'        => _x( 'Tours', 'Add New on Toolbar', $text_domain ),
            'add_new'               => __( 'Add New Tours', $text_domain ),
            'add_new_item'          => __( 'Add New Tours', $text_domain ),
            'new_item'              => __( 'New Tours', $text_domain ),
            'edit_item'             => __( 'Edit Tours', $text_domain ),
            'view_item'             => __( 'View Tours', $text_domain ),
            'all_items'             => __( 'All Tours', $text_domain ),
            'search_items'          => __( 'Search Tours', $text_domain ),
            'parent_item_colon'     => __( 'Parent Tours:', $text_domain ),
            'not_found'             => __( 'No tours found.', $text_domain ),
            'not_found_in_trash'    => __( 'No tours found in Trash.', $text_domain ),
            'featured_image'        => _x( 'Tours Featured Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', $text_domain ),
            'set_featured_image'    => _x( 'Set featured image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', $text_domain ),
            'remove_featured_image' => _x( 'Remove featured image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', $text_domain ),
            'use_featured_image'    => _x( 'Use as featured image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', $text_domain ),
            'archives'              => _x( 'Tours', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', $text_domain ),
            'insert_into_item'      => _x( 'Insert into tours', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', $text_domain ),
            'uploaded_to_this_item' => _x( 'Uploaded to this tours', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', $text_domain ),
            'filter_items_list'     => _x( 'Filter tours list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', $text_domain ),
            'items_list_navigation' => _x( 'Tours list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', $text_domain ),
            'items_list'            => _x( 'Tours list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', $text_domain ),
        );
     
        $args = array(
           'label'                 => __( 'tours', $text_domain ),
           'description'           => __( 'tours for your site', $text_domain ),
           'labels'                => $labels,
           'supports'              => array( 'title', 'thumbnail' ),
           // 'taxonomies'            => array( 'category', 'post_tag' ),
           'hierarchical'          => false,
           'public'                => true,
           'show_ui'               => true,
           'show_in_menu'          => true,
           'menu_position'         => 5,
           'menu_icon'             => 'dashicons-palmtree',
        //    'menu_icon'             => 'dashicons-admin-post',
           'show_in_admin_bar'     => true,
           'show_in_nav_menus'     => true,
           'can_export'            => true,
           'has_archive'           => true,
           'exclude_from_search'   => false,
           'publicly_queryable'    => true,
           'rewrite'               => array('slug' => 'tours', 'with_front' => false), // important for permalink
           'show_in_rest'          => true, // makes CPT Gutenberg friendly
           'capability_type'       => 'post',
        );
     
        register_post_type( 'tours', $args );
    }


    /**
     * Register all custom meta fields
     */
    function register_tour_meta() {
        //  Label
        register_post_meta('tours', 'label', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);

        //  Title
        register_post_meta('tours', 'title', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);
        
        // Duration
        register_post_meta('tours', 'duration', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);

        // Old price
        register_post_meta('tours', 'old_price', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);

        // Price
        register_post_meta('tours', 'price', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);

        // Caption
        register_post_meta('tours', 'caption', [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ]);
    }


    /**
     * Add admin meta box
     */
    public function add_tours_meta_box() {
        add_meta_box(
            'tours_meta_box',
            __( 'Tour Details', 'textdomain' ),
            array( $this, 'render_tours_meta_box' ),
            'tours',
            'normal',
            'high'
        );
    }

    /**
     * Define all meta fields for the 'tours' custom post type.
     *
     * Key   => Meta key stored in database
     * Value => Placeholder text shown in the input field
     */
    public static function get_meta_fields() {
        return [
            'label'     => 'Enter tour label',
            'duration'  => 'Enter duration (e.g., 4-6 hours)',
            'old_price' => 'Enter old price (e.g., 150 AED)',
            'price'     => 'Enter current price (e.g., 99.5 AED)',
            'caption'   => 'Enter caption (e.g., per person)',
        ];
    }

    /**
     * Render admin meta box fields
     */
    public function render_tours_meta_box($post) {
        wp_nonce_field( basename( __FILE__ ), 'tours_meta_box_nonce' );

        // Load all predefined tour meta fields (key => placeholder)
        $meta_fields = self::get_meta_fields();

        echo '<table class="form-table">';
        foreach ($meta_fields as $field => $placeholder) {
            $value = get_post_meta($post->ID, $field, true);
            echo '<tr>';
            echo '<th><label for="'.$field.'">'.ucfirst(str_replace('_',' ',$field)).'</label></th>';
            echo '<td><input type="text" name="'.$field.'" id="'.$field.'" value="'.esc_attr($value).'" placeholder="'. esc_attr($placeholder) .'" class="regular-text" /></td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    
    /**
     * Save meta box data
     */
    public function save_tours_meta_box($post_id) {
        if (!isset($_POST['tours_meta_box_nonce'])) return $post_id;
        if (!wp_verify_nonce($_POST['tours_meta_box_nonce'], basename(__FILE__))) return $post_id;
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
        if (!current_user_can('edit_post', $post_id)) return $post_id;

        // Load all predefined tour meta fields (key => placeholder)
        $meta_fields = self::get_meta_fields();

        foreach ($meta_fields as $field => $placeholder) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
    }


    /**
     * Register a Custom Taxonomy
     */
    public function create_custom_taxonomies() {
        $text_domain =  wp_get_theme()->get( 'TextDomain' ); // Get text domain for translations
    
        // Custom Taxonomy: Tours Category
        $labels = array(
            'name' => _x('Tours Categories', $text_domain),
            'singular_name' => _x('Tours Category', $text_domain),
            'search_items' => __('Search Tours Categories', $text_domain),
            'all_items' => __('All Tours Categories', $text_domain),
            'parent_item' => __('Parent Tours Category', $text_domain),
            'parent_item_colon' => __('Parent Tours Category:', $text_domain),
            'edit_item' => __('Edit Tours Category', $text_domain),
            'update_item' => __('Update Tours Category', $text_domain),
            'add_new_item' => __('Add New Tours Category', $text_domain),
            'new_item_name' => __('New Tours Category Name', $text_domain),
            'menu_name' => __('Tours Categories', $text_domain),
        );
    
        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'tours-category'),
        );
    
        register_taxonomy('tours_category', array('tours'), $args);
    
        // Custom Taxonomy: Tours Tag
        $labels = array(
            'name' => _x('Tours Tags', $text_domain),
            'singular_name' => _x('Tours Tag', $text_domain),
            'search_items' => __('Search Tours Tags', $text_domain),
            'all_items' => __('All Tours Tags', $text_domain),
            'edit_item' => __('Edit Tours Tag', $text_domain),
            'update_item' => __('Update Tours Tag', $text_domain),
            'add_new_item' => __('Add New Tours Tag', $text_domain),
            'new_item_name' => __('New Tours Tag Name', $text_domain),
            'menu_name' => __('Tours Tags', $text_domain),
        );
    
        $args = array(
            'labels' => $labels,
            'hierarchical' => false,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'tours-tag'),
        );
    
        register_taxonomy('tours_tag', array('tours'), $args);
    }

    
    /**
     * Enqueue Custom styles and Scripts
     */
    public function enqueue() {
        // Enqueue your styles
        wp_enqueue_style( 'custom-post-type-tours-style', CUSTOM_POST_TYPE_DIR_URI . '/tours/assets/css/tours.css', array(), '1.0.0', 'all' );

        // Enqueue your scripts
        wp_enqueue_script( 'custom-post-type-tours-script', CUSTOM_POST_TYPE_DIR_URI . '/tours/assets/js/tours.js', array(), '1.0.0', true );
    }

}
CustomPostTypeTours::instance();
