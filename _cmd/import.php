<?php

class MT_Import extends WP_CLI_Command {

	private $import_path = '';

	private $image_path = '';

	private $author_id = 1;

	private $import_limit = 1000;

	private $mt_data = null;

	private $category_mappings = null;

	private $image_mappings = array();

	private $images = array();

	private function init( $import_path, $image_path ) {
		// xdebug_break();
		if ( file_exists( $import_path ) ) {
			$this->import_path = $import_path;
			$this->image_path = $image_path;
			$this->mt_data = simplexml_load_file( $import_path );
			$this->add_categories();
			$this->init_images();
		}
		else {
			WP_CLI::line( 'File not found at: ' . $import_path );
			die;
		}
	}

	public function add_posts( $args, $assoc_args ) {
		$i = 0;
		$wp_cat_id = null;

		if ( empty( $this->mt_data ) )
			$this->init( $args[0], $args[1] );

		foreach ( $this->mt_data->entry as $mt_entry ) {

			$mt_entry = (array)$mt_entry;
			$mt_entry_atts = $mt_entry['@attributes'];

			// WP_CLI::print_value( $mt_entry );

			if ( ! empty( $mt_entry_atts['title'] ) && $i < $this->import_limit ) {

				$date_stamp = strtotime( $mt_entry_atts['authored_on'] );
				$postdate = date( "Y-m-d H:i:s", $date_stamp );

				$args = array(
					'post_title' => $mt_entry_atts['title'],
					'post_author' => $this->author_id,
					'post_date' => $postdate,
					'post_status' => 'publish',
					'post_type' => 'property',
					'post_excerpt' => ! empty( $mt_entry['excerpt'] ) ? $mt_entry['excerpt'] : '',
					'post_content' => ! empty( $mt_entry['text'] ) ? $mt_entry['text'] : ''
				);

				$mt_entry_cats = $this->get_mt_categories( $mt_entry_atts['id'] );

				if ( in_array( 5, $mt_entry_cats ) ) {
					$args['post_type'] = 'post';
				}

				$post_id = $this->create_post( $args );
				$this->add_post_to_category( $post_id, $mt_entry_cats );

				if ( ! in_array( 5, $mt_entry_cats ) ) {

					$post_meta = array(
						'name' => ! empty( $mt_entry_atts['field.property-name'] ) ? $mt_entry_atts['field.property-name'] : '',
						'architect' => ! empty( $mt_entry_atts['field.property-architect'] ) ? $mt_entry_atts['field.property-architect'] : '',
						'address' => ! empty( $mt_entry['field.property-address'] ) ? $mt_entry['field.property-address'] : '',
						'price' => ! empty( $mt_entry_atts['field.property-price'] ) ? $mt_entry_atts['field.property-price'] : '',
						'status' => ! empty( $mt_entry_atts['field.property-status'] ) ? $mt_entry_atts['field.property-status'] : '',
						'listing-number' => ! empty( $mt_entry_atts['field.property-listing-number'] ) ? $mt_entry_atts['field.property-listing-number'] : '',
						'listing-provided-by' => ! empty( $mt_entry_atts['field.property-listing-provided-by'] ) ? $mt_entry_atts['field.property-listing-provided-by'] : '',
						'type' => ! empty( $mt_entry_atts['field.property-type'] ) ? $mt_entry_atts['field.property-type'] : '',
						'bedrooms' => ! empty( $mt_entry_atts['field.property-bedrooms'] ) ? $mt_entry_atts['field.property-bedrooms'] : '',
						'bathrooms' => ! empty( $mt_entry_atts['field.property-bathrooms'] ) ? $mt_entry_atts['field.property-bathrooms'] : '',
						'square-footage' => ! empty( $mt_entry_atts['field.property-square-footage'] ) ? $mt_entry_atts['field.property-square-footage'] : '',
						'lot-size' => ! empty( $mt_entry_atts['field.property-lot-size'] ) ? $mt_entry_atts['field.property-lot-size'] : '',
						'year-built' => ! empty( $mt_entry_atts['field.property-year-built'] ) ? $mt_entry_atts['field.property-year-built'] : '',
						'parking' => ! empty( $mt_entry_atts['field.property-parking'] ) ? $mt_entry_atts['field.property-parking'] : '',
						'fireplaces' => ! empty( $mt_entry_atts['field.property-fireplaces'] ) ? $mt_entry_atts['field.property-fireplaces'] : '',
						'amenities' => ! empty( $mt_entry['field.property-amenities'] ) ? $mt_entry['field.property-amenities'] : '',
						'appliances' => ! empty( $mt_entry['field.property-appliances'] ) ? $mt_entry['field.property-appliances'] : '',
						'features' => ! empty( $mt_entry['field.property-featured'] ) ? $mt_entry['field.property-features'] : ''
					);

					$this->set_post_meta( $post_id, $post_meta );
					$this->add_images( $post_id, $mt_entry_atts['id'] );
				} else {
					WP_CLI::line( 'blog post' );
				}

			}

			$i++;
		}

	}

	public function set_featured_images( $args, $assoc_args ) {
		if ( empty( $this->mt_data ) )
			$this->init( $args[0], $args[1] );

		$properties = get_posts( array(
			'post_type' => 'property',
			'posts_per_page' => -1
		) );

		foreach( $properties as $property ) {
			$this->set_featured_image( $property->ID );
		}
	}

	private function set_featured_image( $post_id ) {
		$property_meta = get_post_meta( $post_id, 'property-meta' );
		set_post_thumbnail( $post_id, $property_meta[0]['slideshow'][0]['image_id'] );
	}

	private function create_post( $args ) {
		if ( null === $existing_post = get_page_by_title( $args['post_title'], 'OBJECT', 'property' ) ) {
			$post_id = wp_insert_post( $args );
			WP_CLI::line( 'Adding post ' . $args['post_title'] . ' at ' . $post_id );
			return $post_id;
		} else {
			WP_CLI::line( 'Post ' . $args['post_title'] . ' at ' . $existing_post->ID . ' already exists' );
			return $existing_post->ID;
		}
	}

	private function add_post_to_category( $post_id, $mt_entry_cats ) {
		// WP_CLI::print_value( $mt_entry_cats );
		if ( ! empty( $post_id ) && ! empty( $mt_entry_cats ) ) {
			if ( in_array( 2, $mt_entry_cats ) ) {
				wp_set_post_categories( $post_id, array( $this->category_mappings[2] ), true );
			}
			if ( in_array( 3, $mt_entry_cats ) ) {
				wp_set_post_categories( $post_id, array( $this->category_mappings[3] ), true );
			}
		}
	}

	private function set_post_meta( $post_id, $post_meta ) {
		WP_CLI::line( 'Adding postmeta for ' . $post_id );
		update_post_meta( $post_id, 'property-meta', $post_meta );
	}

	private function add_categories() {
		foreach ( $this->mt_data->category as $mt_category ) {
			$mt_category = (array)$mt_category;
			$mt_category = $mt_category['@attributes'];
			$cat_id = wp_create_category( $mt_category['label'] );
			$this->category_mappings[$mt_category['id']] = $cat_id;
		}
	}

	private function get_mt_categories( $entry_id ) {
		$entry_cats = array();
		foreach( $this->mt_data->placement as $placement ) {
			$placement = (array)$placement;
			$placement = $placement['@attributes'];
			if ( $entry_id === $placement['entry_id'] ) {
				$mt_entry_cats[] = $placement['category_id'];
			}
		}
		return $mt_entry_cats;
	}

	private function add_images( $post_id, $mt_entry_id ) {
		$attachments = array();
		// WP_CLI::print_value( $this->image_mappings[$mt_entry_id] );
		foreach( $this->image_mappings[$mt_entry_id] as $asset_id ) {
			// WP_CLI::print_value( $this->images[$asset_id] );
			$file_path = $this->image_path . $asset_id . '-' . $this->images[$asset_id];
			if ( file_exists( $file_path ) ) {
				// xdebug_break();
				// WP_CLI::line( 'image exists' );
				$upload_file = wp_upload_bits( $this->images[$asset_id], null, file_get_contents( $file_path ) );
				if ( ! $upload_file['error'] ) {
					$wp_filetype = wp_check_filetype( $this->images[$asset_id], null );
					$attachment = array(
						'post_mime_type' => $wp_filetype['type'],
						'post_title' => preg_replace( '/\.[^.]+$/', '', $this->images[$asset_id] ),
						'post_content' => '',
						'post_status' => 'publish'
					);
					$attachment_id = wp_insert_attachment( $attachment, $upload_file['file'] );
					$attachments[] = array(
						'image_id' => $attachment_id
					);
				}
			} else {
				WP_CLI::line( 'can\'t find image at ' . $file_path );
			}
		}

		if ( ! empty( $attachments ) ) {
			// xdebug_break();
			$property_meta = get_post_meta( $post_id, 'property-meta' );
			$property_meta[0]['slideshow'] = $attachments;
			update_post_meta( $post_id, 'property-meta', $property_meta[0] );
			$this->set_featured_image( $post_id );
		}
	}

	private function init_images() {
		foreach( $this->mt_data->image as $image ) {
			$image = (array)$image;
			$image = $image['@attributes'];
			// WP_CLI::print_value( $image );
			$this->images[$image['id']] = $image['file_name'];
		}

		foreach( $this->mt_data->objectasset as $objectasset ) {
			$objectasset = (array)$objectasset;
			$objectasset = $objectasset['@attributes'];
			// WP_CLI::print_value( $image );
			$this->image_mappings[$objectasset['object_id']][] = $objectasset['asset_id'];
		}
	}

}
WP_CLI::add_command( 'mtimport', 'MT_Import' );