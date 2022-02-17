<?php
/**
 * Label options
 * @package Prologe
 */

function prologe_lite_customize_register_label_settings( $wp_customize ) {
	

	// Add a copyright setting and control.
	$wp_customize->add_setting( 'prologe_lite_copyright', array(
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'prologe_lite_copyright', array(
		'label'    => esc_html__( 'Copyright Name', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_labels',
		'type'     => 'text',
	) );	
	
	// Add Setting and Control for Read More Text.
	$wp_customize->add_setting( 'prologe_lite_read_more_text', array(
		'default'           => esc_html__( 'Read More', 'prologe-lite' ),
		'transport'         => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'prologe_lite_read_more_text', array(
		'label'    => esc_html__( 'Read More Text', 'prologe-lite' ),
		'section'  => 'prologe_lite_section_labels',
		'type'     => 'text',
	) );	

}
add_action( 'customize_register', 'prologe_lite_customize_register_label_settings' );
