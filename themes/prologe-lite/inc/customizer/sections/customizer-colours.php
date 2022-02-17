<?php
/**
 * Theme Settings
 * Register Colour settings and controls for Theme Customizer
 * @package Prologe
 */

/**
 * Adds all colour settings to the Customizer
 * @param object $wp_customize / Customizer Object.
 */
function prologe_lite_customize_register_colour_settings( $wp_customize ) {

/*	---------------------------------------------------------------------------
	BODY COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */

// Body background
 	$wp_customize->add_setting( 'prologe_lite_body_bg', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_body_bg', array(
		'label'   => esc_html__( 'Body Background', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_body_bg',
	) ) );

// body text
 	$wp_customize->add_setting( 'prologe_lite_body_text_color', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_body_text_color', array(
		'label'   => esc_html__( 'Body Text Colour', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_body_text_color',
	) ) );

// site header background
 	$wp_customize->add_setting( 'prologe_lite_header_bg', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_header_bg', array(
		'label'   => esc_html__( 'Site Header Background', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_header_bg',
	) ) );
	
// page title background
 	$wp_customize->add_setting( 'prologe_lite_page_header_bg', array(
		'default'        => '#ece7d7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_page_header_bg', array(
		'label'   => esc_html__( 'Page Title Header Background', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_page_header_bg',
	) ) );	

// archive header background
 	$wp_customize->add_setting( 'prologe_lite_archive_header_bg', array(
		'default'        => '#ece7d7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_archive_header_bg', array(
		'label'   => esc_html__( 'Archive Header Background', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_archive_header_bg',
	) ) );

// footer background
 	$wp_customize->add_setting( 'prologe_lite_footer_bottom_bg', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_footer_bottom_bg', array(
		'label'   => esc_html__( 'Footer Bottom Area Background', 'prologe-lite' ),
		'section' => 'colors',
		'settings'   => 'prologe_lite_footer_bottom_bg',
	) ) );
	
/*	---------------------------------------------------------------------------
	CONTENT COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */ 
		
// Content area background
 	$wp_customize->add_setting( 'prologe_lite_content_bg', array(
		'default'        => '#fdfdfc',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_content_bg', array(
		'label'   => esc_html__( 'Content Area Background', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_content_bg',
	) ) );	
	
// headings and titles
 	$wp_customize->add_setting( 'prologe_lite_headings', array(
		'default'        => '#262626',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_headings', array(
		'label'   => esc_html__( 'Headings and Titles', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_headings',
	) ) );	
	
// Linked headings and titles
 	$wp_customize->add_setting( 'prologe_lite_hover_headings', array(
		'default'        => '#0c7789',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_hover_headings', array(
		'label'   => esc_html__( 'Headings &amp; Titles Hover Colour', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_hover_headings',
	) ) );
	
// page titles
 	$wp_customize->add_setting( 'prologe_lite_page_titles', array(
		'default'        => '#23282d',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_page_titles', array(
		'label'   => esc_html__( 'Page Titles', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_page_titles',
	) ) );

// page intro
 	$wp_customize->add_setting( 'prologe_lite_page_intro', array(
		'default'        => '#8c8367',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_page_intro', array(
		'label'   => esc_html__( 'Page Intro', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_page_intro',
	) ) );

// archive prefix colour
 	$wp_customize->add_setting( 'prologe_lite_archive_prefix_colour', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_archive_prefix_colour', array(
		'label'   => esc_html__( 'Archive Prefix Heading Colour', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_archive_prefix_colour',
	) ) );


// archive header text
 	$wp_customize->add_setting( 'prologe_lite_archive_header_text', array(
		'default'        => '#8c8367',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_archive_header_text', array(
		'label'   => esc_html__( 'Archive Header Text', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_archive_header_text',
	) ) );
	
// links
 	$wp_customize->add_setting( 'prologe_lite_links', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_links', array(
		'label'   => esc_html__( 'Links', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_links',
	) ) );
	
// content links
 	$wp_customize->add_setting( 'prologe_lite_content_links', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_content_links', array(
		'label'   => esc_html__( 'Content Links', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_content_links',
	) ) );
	
// bottom widget area text
 	$wp_customize->add_setting( 'prologe_lite_bottom_widget_text', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_bottom_widget_text', array(
		'label'   => esc_html__( 'Bottom Widget Area Text', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_bottom_widget_text',
	) ) );	
	
// bottom widget area links
 	$wp_customize->add_setting( 'prologe_lite_bottom_widget_li_link', array(
		'default'        => '#0c7789',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_bottom_widget_li_link', array(
		'label'   => esc_html__( 'Bottom Widget List Links', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_bottom_widget_li_link',
	) ) );
	
	// Footer text
 	$wp_customize->add_setting( 'prologe_lite_footer_text', array(
		'default'        => '#b3b3b3',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_footer_text', array(
		'label'   => esc_html__( 'Footer Text', 'prologe-lite' ),
		'section' => 'prologe_lite_content_colors',
		'settings'   => 'prologe_lite_footer_text',
	) ) );
	
/*	---------------------------------------------------------------------------
	COVER ELEMENT COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */ 
// Cover titles
 	$wp_customize->add_setting( 'prologe_lite_cover_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_text', array(
		'label'   => esc_html__( 'Cover Photo Text Colour', 'prologe-lite' ),
		'section' => 'prologe_lite_cover_element_colors',
		'settings'   => 'prologe_lite_cover_text',
	) ) );

// Cover category text
 	$wp_customize->add_setting( 'prologe_lite_cover_category_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_category_text', array(
		'label'   => esc_html__( 'Cover Photo Category Text', 'prologe-lite' ),
		'section' => 'prologe_lite_cover_element_colors',
		'settings'   => 'prologe_lite_cover_category_text',
	) ) );

// Cover category background
 	$wp_customize->add_setting( 'prologe_lite_cover_category_bg', array(
		'default'        => '#23282d',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_category_bg', array(
		'label'   => esc_html__( 'Cover Photo Category Background', 'prologe-lite' ),
		'section' => 'prologe_lite_cover_element_colors',
		'settings'   => 'prologe_lite_cover_category_bg',
	) ) );
	
// Cover category hover background
 	$wp_customize->add_setting( 'prologe_lite_cover_category_hover_bg', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_cover_category_hover_bg', array(
		'label'   => esc_html__( 'Cover Photo Category Hover Background', 'prologe-lite' ),
		'section' => 'prologe_lite_cover_element_colors',
		'settings'   => 'prologe_lite_cover_category_hover_bg',
	) ) );
	
/*	---------------------------------------------------------------------------
	WIDGET COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */  	
// Widget titles
 	$wp_customize->add_setting( 'prologe_lite_widget_titles', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_widget_titles', array(
		'label'   => esc_html__( 'Widget Titles', 'prologe-lite' ),
		'section' => 'prologe_lite_widget_colors',
		'settings'   => 'prologe_lite_widget_titles',
	) ) );		
	
// tag cloud background
 	$wp_customize->add_setting( 'prologe_lite_tagcloud_bg', array(
		'default'        => '#eaf1f3',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_tagcloud_bg', array(
		'label'   => esc_html__( 'Tag Cloud Background', 'prologe-lite' ),
		'section' => 'prologe_lite_widget_colors',
		'settings'   => 'prologe_lite_tagcloud_bg',
	) ) );	
	
// tag cloud text
 	$wp_customize->add_setting( 'prologe_lite_tagcloud_text', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_tagcloud_text', array(
		'label'   => esc_html__( 'Tag Cloud Text', 'prologe-lite' ),
		'section' => 'prologe_lite_widget_colors',
		'settings'   => 'prologe_lite_tagcloud_text',
	) ) );

// tag cloud hover background
 	$wp_customize->add_setting( 'prologe_lite_tagcloud_hover_bg', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_tagcloud_hover_bg', array(
		'label'   => esc_html__( 'Tag Cloud Hover Background', 'prologe-lite' ),
		'section' => 'prologe_lite_widget_colors',
		'settings'   => 'prologe_lite_tagcloud_hover_bg',
	) ) );

// tag cloud hover text
 	$wp_customize->add_setting( 'prologe_lite_tagcloud_hover_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_tagcloud_hover_text', array(
		'label'   => esc_html__( 'Tag Cloud Hover Text', 'prologe-lite' ),
		'section' => 'prologe_lite_widget_colors',
		'settings'   => 'prologe_lite_tagcloud_hover_text',
	) ) );
	
/*	---------------------------------------------------------------------------
	OTHER COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */   
	
// border and line Colours
 	$wp_customize->add_setting( 'prologe_lite_line_colour', array(
		'default'        => '#ededed',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_line_colour', array(
		'label'   => esc_html__( 'Borders and Line  Colours', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_line_colour',
	) ) );		

// bottom area border and line Colours
 	$wp_customize->add_setting( 'prologe_lite_bottom_widget_line_colour', array(
		'default'        => '#ededed',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_bottom_widget_line_colour', array(
		'label'   => esc_html__( 'Bottom Area Widget Borders &amp; Lines', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_bottom_widget_line_colour',
	) ) );
	
// dropcap colour
 	$wp_customize->add_setting( 'prologe_lite_dropcap', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_dropcap', array(
		'label'   => esc_html__( 'Dropcap - Block Editor', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_dropcap',
	) ) );	
	
// quote elements
 	$wp_customize->add_setting( 'prologe_lite_quotes', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_quotes', array(
		'label'   => esc_html__( 'Quote Elements', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_quotes',
	) ) );



	// Table header
 	$wp_customize->add_setting( 'prologe_lite_table_header', array(
		'default'        => '#0c7789',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_table_header', array(
		'label'   => esc_html__( 'Table Header Background', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_table_header',
	) ) );

	// Table header text
 	$wp_customize->add_setting( 'prologe_lite_table_header_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_table_header_text', array(
		'label'   => esc_html__( 'Table Header Text', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_table_header_text',
	) ) );

	// Image Captions
 	$wp_customize->add_setting( 'prologe_lite_image_captions', array(
		'default'        => '#506270',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_image_captions', array(
		'label'   => esc_html__( 'Image Captions', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_image_captions',
	) ) );
	

	// Select text background
 	$wp_customize->add_setting( 'prologe_lite_select_text_bg', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_select_text_bg', array(
		'label'   => esc_html__( 'Selected Text Background', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_select_text_bg',
	) ) );	

	// Select text
 	$wp_customize->add_setting( 'prologe_lite_select_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_select_text', array(
		'label'   => esc_html__( 'Selected Text', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_select_text',
	) ) );
	
	// Block Gallery Caption Overlay
 	$wp_customize->add_setting( 'prologe_lite_gallery_overlay_colour', array(
		'default'        => '#0c7789',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_gallery_overlay_colour', array(
		'label'   => esc_html__( 'Block Gallery Overlay Colour', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_gallery_overlay_colour',
	) ) );

	// Block Gallery Caption
 	$wp_customize->add_setting( 'prologe_lite_gallery_caption_colour', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_gallery_caption_colour', array(
		'label'   => esc_html__( 'Block Gallery Caption Colour', 'prologe-lite' ),
		'section' => 'prologe_lite_other_colors',
		'settings'   => 'prologe_lite_gallery_caption_colour',
	) ) );
	
	// Overlay Color Opacity
	$wp_customize->add_setting( 'prologe_lite_block_gallery_overlay_opacity', array(			
		'default' => 0.6,
		'sanitize_callback' => 'prologe_lite_opacity_sanitize',
		'transport' => 'postMessage'
		) );
		
	$wp_customize->add_control( new Prologe_Customize_Range_Control( $wp_customize, 'prologe_lite_block_gallery_overlay_opacity', array(
			'label'       => __( 'Block Gallery Overlay Opacity', 'prologe-lite' ),
			'description' => __( 'Make sure that the contrast is high enough so that the caption is readable.', 'prologe-lite' ),
            'section'     => 'prologe_lite_other_colors',
            'settings'    => 'prologe_lite_block_gallery_overlay_opacity',
            'input_attrs' => array(
				'min'   => 0,
				'max'   => 1,
				'step'  => 0.05
            ),
        ) ) );		
	
/*	---------------------------------------------------------------------------
	NAV COLOURS
	Settings and Controls
------------------------------------------------------------------------------ */	
	// mobile toggle
 	$wp_customize->add_setting( 'prologe_lite_toggles', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_toggles', array(
		'label'   => esc_html__( 'Mobile Menu Toggle', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_toggles',
	) ) );	
	
	// mobile menu links
 	$wp_customize->add_setting( 'prologe_lite_mobile_menu_links', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_mobile_menu_links', array(
		'label'   => esc_html__( 'Mobile Menu Links', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_mobile_menu_links',
	) ) );
	
	// main menu links
 	$wp_customize->add_setting( 'prologe_lite_main_menu_links', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_main_menu_links', array(
		'label'   => esc_html__( 'Main Menu Links', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_main_menu_links',
	) ) );	
	
	// main submenu bg
 	$wp_customize->add_setting( 'prologe_lite_main_submenu_bg', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_main_submenu_bg', array(
		'label'   => esc_html__( 'Main SubMenu Background', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_main_submenu_bg',
	) ) );	
	
	// Social menu bg
 	$wp_customize->add_setting( 'prologe_lite_social_icon_bg', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_social_icon_bg', array(
		'label'   => esc_html__( 'Social Menu Icon Background', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_social_icon_bg',
	) ) );	
	
	// Social menu icon
 	$wp_customize->add_setting( 'prologe_lite_social_icon', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_social_icon', array(
		'label'   => esc_html__( 'Social Menu Icon', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_social_icon',
	) ) );	

	// Footer menu links
 	$wp_customize->add_setting( 'prologe_lite_footer_menu_links', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_footer_menu_links', array(
		'label'   => esc_html__( 'Footer Menu Links', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_footer_menu_links',
	) ) );	
	
	// Footer menu hover links
 	$wp_customize->add_setting( 'prologe_lite_footer_menu_hover_links', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_footer_menu_hover_links', array(
		'label'   => esc_html__( 'Footer Menu Hover Links', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_footer_menu_hover_links',
	) ) );
	
	// To the Top
 	$wp_customize->add_setting( 'prologe_lite_to_top', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_to_top', array(
		'label'   => esc_html__( 'Scroll to Top', 'prologe-lite' ),
		'section' => 'prologe_lite_nav_colors',
		'settings'   => 'prologe_lite_to_top',
	) ) );	
	
/*---------------------------------------------------------------------------
	FORM COLOURS
	Settings and Controls
---------------------------------------------------------------------------- */		
	
	// Button background
 	$wp_customize->add_setting( 'prologe_lite_button_bg', array(
		'default'        => '#0c7789',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_button_bg', array(
		'label'   => esc_html__( 'Button Background', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_button_bg',
	) ) );	
	
	// Button text
 	$wp_customize->add_setting( 'prologe_lite_button_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_button_text', array(
		'label'   => esc_html__( 'Button Text', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_button_text',
	) ) );	
	
	// Button hover background
 	$wp_customize->add_setting( 'prologe_lite_button_hover_bg', array(
		'default'        => '#ce3b32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_button_hover_bg', array(
		'label'   => esc_html__( 'Button Hover Background', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_button_hover_bg',
	) ) );	
	
	// Button hover text
 	$wp_customize->add_setting( 'prologe_lite_button_hover_text', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_button_hover_text', array(
		'label'   => esc_html__( 'Button Hover Text', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_button_hover_text',
	) ) );	
	
	// Input Borders
 	$wp_customize->add_setting( 'prologe_lite_input_border', array(
		'default'        => '#ededed',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_input_border', array(
		'label'   => esc_html__( 'Input Borders', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_input_border',
	) ) );	
	
	// Input Background
 	$wp_customize->add_setting( 'prologe_lite_input_bg', array(
		'default'        => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_input_bg', array(
		'label'   => esc_html__( 'Input Background', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_input_bg',
	) ) );	
	
	// Input Text
 	$wp_customize->add_setting( 'prologe_lite_input_text', array(
		'default'        => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prologe_lite_input_text', array(
		'label'   => esc_html__( 'Input Text', 'prologe-lite' ),
		'section' => 'prologe_lite_form_colors',
		'settings'   => 'prologe_lite_input_text',
	) ) );	
	

}
add_action( 'customize_register', 'prologe_lite_customize_register_colour_settings' );
