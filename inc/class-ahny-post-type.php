<?php

class AHNY_Post_Type {
	/**
	 * Name of the custom post type
	 *
	 * @var string
	 * @access public
	 */
	public $name;

	/**
	 * Args for registering the custom post type
	 *
	 * @var array
	 * @access public
	 */
	public $args;

	/**
	 * Handles registering the post type
	 *
	 * @access protected
	 * @return void
	 */
	protected function register_post_type() {
		// Register the post type
		register_post_type( $this->name, $this->args );
	}

	/**
	 * Handles adding meta boxes for a given post type
	 *
	 * @access protected
	 * @return void
	 */
	public function add_meta_boxes() {
		// $post_types = nypost_config( 'post_types' );
		// if ( ! empty( $post_types[ $this->name ]['meta_boxes'] ) && is_array( $post_types[ $this->name ]['meta_boxes'] ) ) {
		// 	foreach ( $post_types[ $this->name ]['meta_boxes'] as $meta_box ) {
		// 		if ( is_callable( $meta_box ) ) {
		// 			call_user_func( $meta_box, $this->name );
		// 		}
		// 	}
		// }

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
					)
				),
			)
		);
		$fm_property->add_meta_box( __( 'Property Data', 'ahny' ), $post_types, $context, $priority );

	}
}

new AHNY_Post_Type();