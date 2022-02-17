<?php
/**
 * Sample implementation of the Custom Header feature
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 * @package Prologe
 * Set up the WordPress core custom header feature.
 */
 
register_default_headers( array(
	'default-image' => array(
		'url'           => '%s/assets/images/custom-header.jpg',
		'thumbnail_url' => '%s/assets/images/custom-header-tn.jpg',
		'description'   => esc_html__( 'Default Header Image', 'prologe-lite' ),
	),
) );

function prologe_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'prologe_lite_custom_header_args', array(
		'header-text'           => false,
		'default-image'      => get_parent_theme_file_uri( '/assets/images/custom-header.jpg' ),
		'width'                  => 1920,
		'height'                 => 1200,
		'flex-width'            => true,
		'flex-height'            => true,
	) ) );
}
add_action( 'after_setup_theme', 'prologe_lite_custom_header_setup' );
