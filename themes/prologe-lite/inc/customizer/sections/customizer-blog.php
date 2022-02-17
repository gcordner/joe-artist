<?php
/**
 * Blog Settings
 *
 * Register Blog Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds blog settings in the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_blog_settings( $wp_customize ) {
	

// Add Settings and Controls for blog layout.
	$wp_customize->add_setting( 'prologe_lite_blog_layout', array(
		'default'           => 'center',
		'sanitize_callback' => 'prologe_lite_sanitize_select',
	) );

	$wp_customize->add_control( 'prologe_lite_blog_layout', array(
		'label'    => esc_html__( 'Blog Layout', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'settings' => 'prologe_lite_blog_layout',
		'type'     => 'select',
		'choices'  => array(
			'center' => esc_html__( 'Centered without Sidebar', 'prologe-lite' ),
			'classic-left' => esc_html__( 'Classic with Left Sidebar', 'prologe-lite' ),
            'classic-right' => esc_html__( 'Classic with Right Sidebar', 'prologe-lite' ),
		),
	) );
	
	// Add Settings and Controls for blog summary.
	$wp_customize->add_setting( 'prologe_lite_blog_content', array(	
		'default'           => 'full',
		'sanitize_callback' => 'prologe_lite_sanitize_select',				
	) );

	$wp_customize->add_control( 'prologe_lite_blog_content', array(
		'label'    => esc_html__( 'Blog Summary Type', 'prologe-lite' ),
		'description' => esc_html__( 'This will let you choose between a full post with an inserted Read More button or a post summary excerpt.', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'settings' => 'prologe_lite_blog_content',
		'type'     => 'radio',
		'choices'  => array(
			'full'   => esc_html__( 'Full Content', 'prologe-lite' ),
			'excerpt' => esc_html__( 'Post Excerpt', 'prologe-lite' ),
		),	
	) );		

// Add Setting and Control for Excerpt Length.
	$wp_customize->add_setting( 'prologe_lite_excerpt_length', array(
		'default'           => 35,
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'prologe_lite_excerpt_length', array(
		'label'    => esc_html__( 'Excerpt Length', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'type'     => 'number',
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 1,
        ),		
	) );	
	
	
	// show hide heading
 	$wp_customize->add_setting(	'prologe_lite_blog_show_hide_note',	array(
			'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );	
	$wp_customize->add_control( new Prologe_Note_Control(
		$wp_customize, 'prologe_lite_blog_show_hide_note', array(
			'label' => esc_html__( 'Blog Show or Hide Items', 'prologe-lite' ),
			'section' => 'prologe_lite_section_blog',
			'settings' => array(),
			)
	) );	
	
	
	
	
	// Add Setting and Control for showing summary image caption.
	$wp_customize->add_setting( 'prologe_lite_show_featured_image_caption', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_featured_image_caption', array(
		'label'    => esc_html__( 'Hide the featured image caption', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'type'     => 'checkbox',
	) );
	
	// Add Setting and Control for showing summary meta.
	$wp_customize->add_setting( 'prologe_lite_show_summary_meta', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_summary_meta', array(
		'label'    => esc_html__( 'Hide Post Summary Meta Info', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'type'     => 'checkbox',
	) );	
	
	// Add Setting and Control for showing summary comments.
	$wp_customize->add_setting( 'prologe_lite_show_summary_comments', array(
		'default'           => false,
		'transport'         => 'postMessage',
		'sanitize_callback' => 'prologe_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'prologe_lite_show_summary_comments', array(
		'label'    => esc_html__( 'Hide Post Summary Comment Count', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_blog',
		'type'     => 'checkbox',
	) );	
}
add_action( 'customize_register', 'prologe_lite_customize_register_blog_settings' );
