<?php
/**
 * Post Settings
 *
 * Register Post Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds post settings in the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_post_settings( $wp_customize ) {


	// Add Settings and Controls for Layout.
	$wp_customize->add_setting( 'prologe_lite_single_layout', array(
		'default'           => 'right',
		'sanitize_callback' => 'prologe_lite_sanitize_select',
	) );

	$wp_customize->add_control( 'prologe_lite_single_layout', array(
		'label'    => esc_html__( 'Full Post Layout', 'prologe-lite' ),
		'description' => esc_html__( 'This will let you choose your full post layout.', 'prologe-lite' ), 
		'section'  => 'prologe_lite_section_post',
		'type'     => 'select',
		'choices'  => array(
			'right' => esc_html__( 'Post With Right Sidebar', 'prologe-lite' ),
			'left' => esc_html__( 'Post With Left Sidebar', 'prologe-lite' ),
			'full' => esc_html__( 'Post Full Width No Sidebar', 'prologe-lite' ),		
		),
	) );	
	
	// Add Note for Show hide settings
 	$wp_customize->add_setting(	'prologe_lite_blog_note',	array(
			'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );	
	$wp_customize->add_control( new Prologe_Note_Control(
		$wp_customize, 'prologe_lite_blog_note', array(
			'label' => esc_html__( 'Post Show or Hide Items', 'prologe-lite' ),
			'section' => 'prologe_lite_section_post',
			'settings' => array(),
			)
	) );
	
	// Add Setting and Control for showing post full meta info
	$wp_customize->add_setting( 'prologe_lite_single_meta_info', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );
	
	$wp_customize->add_control( 'prologe_lite_single_meta_info', array(
		'label'    => esc_html__( 'Hide Full Post Meta Info', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_post',
		'type'     => 'checkbox',
	) );		

	// Add Setting and Control for showing post categories.
	$wp_customize->add_setting( 'prologe_lite_show_post_categories', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_post_categories', array(
		'label'    => esc_html__( 'Hide Post Categories', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_post',
		'type'     => 'checkbox',
	) );

	// Add Setting and Control for showing post tags.
	$wp_customize->add_setting( 'prologe_lite_show_post_tags', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_post_tags', array(
		'label'    => esc_html__( 'Hide Tags', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_post',
		'type'     => 'checkbox',
	) );	
	
	// Add Setting and Control for showing author avatar
	$wp_customize->add_setting( 'prologe_lite_show_author_bio', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_author_bio', array(
		'label'    => esc_html__( 'Hide Author Bio Section', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_post',
		'type'     => 'checkbox',
	) );	
	
	// Add Setting and Control for showing post navigation.
	$wp_customize->add_setting( 'prologe_lite_post_navigation', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_post_navigation', array(
		'label'    => esc_html__( 'Hide previous/next post navigation', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_post',
		'type'     => 'checkbox',
	) );	


}
add_action( 'customize_register', 'prologe_lite_customize_register_post_settings' );
