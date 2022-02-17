<?php
/**
 * Basic Settings
 * Register Basic Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds post settings in the Customizer
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_basic_settings( $wp_customize ) {

	// Enable/Disable top search
	$wp_customize->add_setting( 'prologe_lite_enable_header_search', array(
			'default'           => true,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
		) );

	$wp_customize->add_control( 'prologe_lite_enable_header_search', array(
			'type'     => 'checkbox',
			'section'  => 'prologe_lite_section_basic',
			'label'    => esc_html__( 'Show search in header', 'prologe-lite' ),
		)
	);

	// Enable/Disable front page template title
	$wp_customize->add_setting( 'prologe_lite_show_fp_title', array(
			'default'           => false,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
		) );

	$wp_customize->add_control( 'prologe_lite_show_fp_title', array(
			'type'     => 'checkbox',
			'section'  => 'prologe_lite_section_basic',
			'label'    => esc_html__( 'Hide Front Page Template Title', 'prologe-lite' ),
		)
	);


	// Add Setting and Control for showing edit link
	$wp_customize->add_setting( 'prologe_lite_show_edit', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_edit', array(
		'label'    => esc_html__( 'Hide Edit Links on Pages &amp; Posts', 'prologe-lite' ),
		'description' => esc_html__( 'Show or hide the front-end EDIT link for posts and pages.', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_basic',
		'type'     => 'checkbox',
	) );	
	
}
add_action( 'customize_register', 'prologe_lite_customize_register_basic_settings' );
