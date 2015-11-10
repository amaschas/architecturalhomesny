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
			'map_meta_cap' => true,
			'menu_position' => 17,
			'supports'	=>	array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
			'taxonomies' => array( 'category', 'post_tag' ),
			'has_archive' => 'properties',
			'show_in_nav_menus' => false,
		);

		$this->register_post_type();
	}

	/**
	 * Handles adding meta boxes for a given post type
	 *
	 * @access protected
	 * @return void
	 */
	public function add_meta_boxes() {

		if ( class_exists( 'Fieldmanager_Field' ) ) {

			$fm_property = new Fieldmanager_Group(
				array(
					'name' => 'property-meta',
					'children' => array(
						'name' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The name of the property.', 'ahny' ),
								'label' => __( 'Property Name', 'ahny' ),
							)
						),
						'architect' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The name of the architect.', 'ahny' ),
								'label' => __( 'Architect', 'ahny' ),
							)
						),
						'address' => new Fieldmanager_Textarea(
							array(
								'description' => __( 'The property address.', 'ahny' ),
								'label' => __( 'Property Address', 'ahny' ),
							)
						),
						'price' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The price of the property.', 'ahny' ),
								'label' => __( 'Property Price', 'ahny' ),
							)
						),
						'status' => new Fieldmanager_Select(
							array(
								'label' => __( 'Property Status', 'ahny' ),
								'first_empty' => false,
								'options' => array( __( 'Active', 'ahny' ), __( 'Inactive', 'ahny' ) ),
							)
						),
						'listing-number' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The property listing number.', 'ahny' ),
								'label' => __( 'Listing Number', 'ahny' ),
							)
						),
						'listing-provided-by' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'Who provided the listing?.', 'ahny' ),
								'label' => __( 'Listing Provided By', 'ahny' ),
							)
						),
						'type' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The property type.', 'ahny' ),
								'label' => __( 'Property Type', 'ahny' ),
							)
						),
						'bedrooms' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The number of bedrooms.', 'ahny' ),
								'label' => __( 'Number of Bedrooms', 'ahny' ),
							)
						),
						'bathrooms' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The number of bathrooms.', 'ahny' ),
								'label' => __( 'Number of Bathrooms', 'ahny' ),
							)
						),
						'square-footage' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The square footage of the property.', 'ahny' ),
								'label' => __( 'Square Footage', 'ahny' ),
							)
						),
						'lot-size' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The property lot size.', 'ahny' ),
								'label' => __( 'Lot Size', 'ahny' ),
							)
						),
						'year-built' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The year the property was built.', 'ahny' ),
								'label' => __( 'Year Built', 'ahny' ),
							)
						),
						'parking' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'The property parking amenities.', 'ahny' ),
								'label' => __( 'Parking', 'ahny' ),
							)
						),
						'fireplaces' => new Fieldmanager_Textfield(
							array(
								'description' => __( 'Fireplaces on the property.', 'ahny' ),
								'label' => __( 'Fireplaces', 'ahny' ),
							)
						),
						'amenities' => new Fieldmanager_Textarea(
							array(
								'description' => __( 'The property amenities.', 'ahny' ),
								'label' => __( 'Property Amenities', 'ahny' ),
							)
						),
						'appliances' => new Fieldmanager_Textarea(
							array(
								'description' => __( 'Available appliances.', 'ahny' ),
								'label' => __( 'Appliances', 'ahny' ),
							)
						),
						'features' => new Fieldmanager_Textarea(
							array(
								'description' => __( 'Property features.', 'ahny' ),
								'label' => __( 'Features', 'ahny' ),
							)
						),
						'slideshow' => new Fieldmanager_Group(
								array(
								'limit' => 0,
								'add_more_label' => __( 'Add another image', 'ahny' ),
								'sortable' => true,
								'label' => __( 'Gallery Images', 'ahny' ),
								'children' => array(
									'image_id' => new Fieldmanager_Media( array(
										'preview_size' => 'medium',
										'label' => __( 'Select an image for the gallery', 'ahny' ),
										'button_label' => __( 'Select Image', 'ahny' ),
										'modal_button_label' => __( 'Use Image', 'ahny' ),
										'modal_title' => __( 'Select an image for the gallery', 'ahny' ),
									) )
								) 
							)
						)
					),
				)
			);
			$fm_property->add_meta_box( __( 'Property Data', 'ahny' ), 'property', 'normal' , 'default' );
		}
	}

}

new Post_Type_Property();