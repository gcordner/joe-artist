<?php
/**
 * Implement theme options in the Customizer
 * @package Prologe
 */

if ( ! class_exists( 'Prologe_Customize' ) ) {
	
	class Prologe_Customize {
			
		/**
		 * Registers Theme Options panel and sets up some WordPress core settings
		 * @param object $wp_customize / Customizer Object.
		 */
		public static function register( $wp_customize ) {

			// Add postMessage support for site title and description so we can preview changes instantly.
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'custom_logo' )->transport  = 'refresh';

			// Modify default WordPress sections and controls
			$wp_customize->get_section( 'colors' )->panel = 'colors';
			$wp_customize->get_section( 'colors' )->priority = 10;
			$wp_customize->get_section( 'colors' )->title = esc_html__( 'Main Body', 'prologe-lite' );
	
			// PANEL - PROLOGE THEME OPTIONS
			$wp_customize->add_panel( 'prologe_lite_options_panel', array(
				'priority'       => 30,
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => esc_html__( 'Prologe Theme Options', 'prologe-lite' ),
			) );

			// PANEL - COLOURS
			  $wp_customize->add_panel( 'colors', array(
				'priority' => 40,
				'title'    => esc_html__( 'Colours', 'prologe-lite' ),
			  ) ); 

			// SECTION - UPGRADE
			$wp_customize->add_section( 'prologe_lite_upgrade', array(
				'title'       => esc_html__( 'Upgrade to Pro', 'prologe-lite' ),
				'priority'    => 1,
				'panel' => 'prologe_lite_options_panel',
			) );
	
			// SECTION - BASIC
			$wp_customize->add_section( 'prologe_lite_section_basic', array(
				'title'    => esc_html__( 'Basic Settings', 'prologe-lite' ),
				'priority' => 8,
				'panel' => 'prologe_lite_options_panel',
			) );	
			
			// SECTION - BLOG
			$wp_customize->add_section( 'prologe_lite_section_blog', array(
				'title'    => esc_html__( 'Blog Settings', 'prologe-lite' ),
				'priority' => 30,
				'panel' => 'prologe_lite_options_panel',
			) );

			// SECTION - POST
			$wp_customize->add_section( 'prologe_lite_section_post', array(
				'title'    => esc_html__( 'Post Settings', 'prologe-lite' ),
				'priority' => 40,
				'panel' => 'prologe_lite_options_panel',
			) );
			
			// SECTION - PAGE
			$wp_customize->add_section( 'prologe_lite_section_page', array(
				'title'    => esc_html__( 'Page Settings', 'prologe-lite' ),
				'priority' => 42,
				'panel' => 'prologe_lite_options_panel',
			) );

			// SECTION - COVER
			$wp_customize->add_section( 'prologe_lite_section_cover', array(
				'title'             => esc_html__( 'Cover Template Settings ','prologe-lite' ),
				'priority' => 44,
				'panel' => 'prologe_lite_options_panel',
			) );

			// SECTION - CTA
			$wp_customize->add_section( 'prologe_lite_section_cta', array(
				'title'             => esc_html__( 'CTA Template Settings ','prologe-lite' ),
				'priority' => 46,
				'panel' => 'prologe_lite_options_panel',
			) );
			
			// SECTION - LABELS
			$wp_customize->add_section( 'prologe_lite_section_labels', array(
				'title'             => esc_html__( 'Label Settings ','prologe-lite' ),
				'priority' => 48,
				'panel' => 'prologe_lite_options_panel',
			) );
			
			// SECTION - CONTENT COLOURS 
			$wp_customize->add_section( 'prologe_lite_content_colors', array(
			  'title' => esc_html__( 'Content Colors', 'prologe-lite' ),
			  'priority' => 15,
			  'panel' => 'colors'
			) );

			// SECTION - COVER ELEMENT COLOURS 
			$wp_customize->add_section( 'prologe_lite_cover_element_colors', array(
			  'title' => esc_html__( 'Cover Element Colors', 'prologe-lite' ),
			  'priority' => 18,
			  'panel' => 'colors'
			) );
			
			// SECTION - NAVIGATION COLOURS 
			$wp_customize->add_section( 'prologe_lite_nav_colors', array(
			  'title' => esc_html__( 'Navigation Colors', 'prologe-lite' ),
			  'priority' => 20,
			  'panel' => 'colors'
			) );

			// SECTION - WIDGET COLOURS 
			$wp_customize->add_section( 'prologe_lite_widget_colors', array(
			  'title' => esc_html__( 'Widget Colors', 'prologe-lite' ),
			  'priority' => 25,
			  'panel' => 'colors'
			) );

			// SECTION - OTHER COLOURS 
			$wp_customize->add_section( 'prologe_lite_other_colors', array(
			  'title' => esc_html__( 'Other Colors', 'prologe-lite' ),
			  'priority' => 30,
			  'panel' => 'colors'
			) );

			// SECTION - FORM COLOURS 
			$wp_customize->add_section( 'prologe_lite_form_colors', array(
			  'title' => esc_html__( 'Form Colors', 'prologe-lite' ),
			  'priority' => 35,
			  'panel' => 'colors'
			) ); 

		}
	}

	add_action( 'customize_register', array( 'Prologe_Customize', 'register' ) );

}

	
// Embed JS file to make Theme Customizer preview reload changes asynchronously.
function prologe_lite_customize_preview_js() {
	
	// Use minified libraries if SCRIPT_DEBUG is false
	$build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	
	wp_enqueue_script( 'prologe-customize-preview', get_template_directory_uri() . '/assets/js' . $build . '/customizer' . $suffix . '.js', array( 'customize-preview' ), null, true );
}
add_action( 'customize_preview_init', 'prologe_lite_customize_preview_js' );

// Embed JS for Customizer Controls.
function prologe_lite_customizer_controls_js() {
	
	// Use minified libraries if SCRIPT_DEBUG is false
	$build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	
	wp_enqueue_script( 'prologe-customizer-controls', get_template_directory_uri() . '/assets/js' . $build . '/customizer-controls' . $suffix . '.js', array(), null, true );
}
add_action( 'customize_controls_enqueue_scripts', 'prologe_lite_customizer_controls_js' );


// Embed CSS styles Customizer Controls.
function prologe_lite_customizer_controls_css() {
	wp_enqueue_style( 'prologe-customizer-controls', get_template_directory_uri() . '/assets/css/customizer-controls.css', array(), null );
}
add_action( 'customize_controls_print_styles', 'prologe_lite_customizer_controls_css' );
