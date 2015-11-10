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
	
}

new AHNY_Post_Type();