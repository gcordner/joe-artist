<?php
/**
 * CTA Settings
 * Register CTA Settings section, settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds post settings in the Customizer
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_cta_settings( $wp_customize ) {


	// Add Note for CTA settings
 	$wp_customize->add_setting(	'prologe_lite_cta_note',	array(
			'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );	
	$wp_customize->add_control( new Prologe_Note_Control(
		$wp_customize, 'prologe_lite_cta_note', array(
			'label' => esc_html__( 'Call To Action Settings - Front Page', 'prologe-lite' ),
			'section' => 'prologe_lite_section_cta',
			'settings' => array(),
			)
	) );
	
	// Add Setting and Control for CTA Heading.
	$wp_customize->add_setting( 'prologe_lite_cta_heading', array(
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_heading', array(
		'label'    => esc_html__( 'CTA Heading Text', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'text',
	) );	
	
	// Add Setting and Control for CTA Intro.
	$wp_customize->add_setting( 'prologe_lite_cta_intro', array(
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_intro', array(
		'label'    => esc_html__( 'CTA Intro Text', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'textarea',
	) );		
	
	// Add Setting and Control for CTA Button 1 Text.
	$wp_customize->add_setting( 'prologe_lite_cta_button_text1', array(
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_button_text1', array(
		'label'    => esc_html__( 'CTA Button 1 Text', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'text',
	) );	

	// Add Setting and Control for CTA Button 1 Link.
	$wp_customize->add_setting( 'prologe_lite_cta_button_link1', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_button_link1', array(
		'label'    => esc_html__( 'CTA Button 1 Link', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'text',
	) );
	
	// Add Setting and Control for CTA Button 2 Text.
	$wp_customize->add_setting( 'prologe_lite_cta_button_text2', array(
		'default'           => '',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_button_text2', array(
		'label'    => esc_html__( 'CTA Button 2 Text', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'text',
	) );		
	
	// Add Setting and Control for CTA Button 2 Link.
	$wp_customize->add_setting( 'prologe_lite_cta_button_link2', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'prologe_lite_cta_button_link2', array(
		'label'    => esc_html__( 'CTA Button 2 Link', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_cta',
		'type'     => 'text',
	) );	
	
	// CTA Heading Text Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_heading_colour', array(
			'default'           => '#ffffff',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_heading_colour', array(
				'label'       => __( 'CTA Heading Color', 'prologe-lite' ),
				'description' => __( 'The color used for the call-to-action heading in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );

	// CTA Intro Text Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_intro_colour', array(
			'default'           => '#ffffff',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_intro_colour', array(
				'label'       => __( 'CTA Intro Color', 'prologe-lite' ),
				'description' => __( 'The color used for the call-to-action intro in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );

	// CTA Intro Text Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_button_text_colour', array(
			'default'           => '#ffffff',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_button_text_colour', array(
				'label'       => __( 'CTA Button Text Color', 'prologe-lite' ),
				'description' => __( 'The color used for the call-to-action button text in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );

	// CTA Intro Text Hover Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_button_text_hover_colour', array(
			'default'           => '#ffffff',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_button_text_hover_colour', array(
				'label'       => __( 'CTA Button Text Hover Color', 'prologe-lite' ),
				'description' => __( 'The hover color used for the call-to-action button text in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );

	// CTA Button Background Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_button_bg_colour', array(
			'default'           => '#0c7789',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_button_bg_colour', array(
				'label'       => __( 'CTA Button Background Color', 'prologe-lite' ),
				'description' => __( 'The background or border color used for the call-to-action button text in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );
	
	// CTA Button Background Hover Color
	$wp_customize->add_setting( 'prologe_lite_cover_cta_button_bg_hover_colour', array(
			'default'           => '#ce3b32',
			'transport' => 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_cta_button_bg_hover_colour', array(
				'label'       => __( 'CTA Button Background Hover Color', 'prologe-lite' ),
				'description' => __( 'The background or border hover color used for the call-to-action button text in the front page cover photo area.', 'prologe-lite' ),
				'section'     => 'prologe_lite_section_cta',
	) ) );

	
}
add_action( 'customize_register', 'prologe_lite_customize_register_cta_settings' );
