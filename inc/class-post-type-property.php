<?php

/**
 * Custom post type for NY Post covers
 */
class Post_Type_Property extends AHNY_Post_Type {
	/**
	 * Name of the custom post type
	 *
	 * @var string
	 * @access public
	 */
	public $name = 'property';

	/**
	 * Date format to be used for all covers
	 *
	 * @var string
	 * @access public
	 */
	public $date_format = 'F j, Y';

	/**
	 * Constructor. Adds the init action for creating the post type and ensures it is loaded after taxonomies are initialized.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'create_post_type' ), 20 );
		add_action( 'fm_post_' . $this->name, array( $this, 'add_meta_boxes' ), 20 );
	}

	/**
	 * Creates the post type
	 *
	 * @access public
	 * @return void
	 */
	public function create_post_type() {
		$this->args = array(
			'labels' => array(
				'name' => esc_html_x( 'Properties', 'post type general name' ),
				'singular_name' => esc_html_x( 'Property', 'post type singular name' ),
				'plural_name' => esc_html_x( 'All Properties', 'post type plural name' ),
				'add_new' => esc_html_x( 'Add New', $this->name ),
				'add_new_item' => esc_html__( 'Add New Property' ),
				'edit_item' => esc_html__( 'Edit Property' ),
				'new_item' => esc_html__( 'New Property' ),
				'view_item' => esc_html__( 'View Property' ),
				'search_items' => esc_html__( 'Search Properties' ),
				'not_found' =>  esc_html__( 'No properties found' ),
				'not_found_in_trash' => esc_html__( 'No properties found in Trash' ),
			),
			'publicly_queryable' => true,
			'public' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'property',
			'map_meta_cap' => true,
			'menu_position' => 17,
			'supports'	=>	array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'has_archive' => 'properties',
			'show_in_nav_menus' => false,
		);

		$this->register_post_type();
	}

}

new Post_Type_Property();