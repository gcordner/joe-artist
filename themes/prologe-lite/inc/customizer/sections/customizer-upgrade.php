<?php
/**
 * Pro Version Upgrade Section
 * Registers Upgrade Section for the Pro Version of the theme
 * @package Prologe_Lite
 */

/**
 * Adds pro version description and CTA button
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_upgrade_settings( $wp_customize ) {
	
	// Add custom Upgrade Content control.
		$wp_customize->add_setting( 'prologe_lite_upgrade', array(
			'default' => '',
			'sanitize_callback' => '__return_false'
		) );
		
		$wp_customize->add_control( new Prologe_Lite_Customize_Static_Text_Control( $wp_customize, 'prologe_lite_upgrade', array(
			'label'	=> esc_html__('Get The Pro Version:','prologe-lite'),
			'section'	=> 'prologe_lite_upgrade',
			'description' => array('')
		) ) );	

}
add_action( 'customize_register', 'prologe_lite_customize_register_upgrade_settings' );
 