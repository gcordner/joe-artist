<?php
/**
 * Site Identity Settings
 * Site Identity Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds post settings in the Customizer
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_identity_settings( $wp_customize ) {
		 
	// Add Display Tagline Setting.
	$wp_customize->add_setting( 'prologe_lite_show_site_desc', array(
		'default'           => false,
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_site_desc', array(
		'label'    => esc_html__( 'Hide Site Tagline', 'prologe-lite' ),
		'section'  => 'title_tagline',
		'type'     => 'checkbox',
	) );	
	
	
// Site Title Colour
 	$wp_customize->add_setting( 'prologe_lite_sitetitle_colour', array(
		'default'        => '#fff',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_sitetitle_colour', array(
		'label'   => esc_html__( 'Site Title Colour', 'prologe-lite' ),
		'section' => 'title_tagline',
		'settings'   => 'prologe_lite_sitetitle_colour',
	) ) );		
	
// Site desc Colour
 	$wp_customize->add_setting( 'prologe_lite_tagline_colour', array(
		'default'        => '#b7b7b7',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_tagline_colour', array(
		'label'   => esc_html__( 'Site Tagline Colour', 'prologe-lite' ),
		'section' => 'title_tagline',
		'settings'   => 'prologe_lite_tagline_colour',
	) ) );		
	  	
	
}
add_action( 'customize_register', 'prologe_lite_customize_register_identity_settings' );
