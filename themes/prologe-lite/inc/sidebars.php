<?php 
/**
 * Register theme sidebars
 * @package Prologe
*/
  
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function prologe_lite_widgets_init() {
	
 	register_sidebar( array(
		'name' => esc_html__( 'Blog Sidebar', 'prologe-lite' ),
		'id' => 'blog-sidebar',
		'description' => esc_html__( 'Sidebar for your blog and archives.', 'prologe-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Page Right Sidebar', 'prologe-lite' ),
		'id' => 'right-sidebar',
		'description' => esc_html__( 'Right sidebar for your pages.', 'prologe-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => esc_html__( 'Page Left Sidebar', 'prologe-lite' ),
		'id' => 'left-sidebar',
		'description' => esc_html__( 'Left sidebar for your pages.', 'prologe-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	
	register_sidebar( array(
		'name' => esc_html__( 'Breadcrumbs', 'prologe-lite' ),
		'id' => 'breadcrumbs',
		'description' => esc_html__( 'For breadcrumb navigation when using a plugin having a widget or shortcode.', 'prologe-lite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
	
    register_sidebar( array(
      'name'          => esc_html__( 'Bottom 1', 'prologe-lite' ),
      'id'            => 'bottom1',
      'description'   => esc_html__( 'First sidebar of the bottom group located above the copyright area.', 'prologe-lite' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
      'name'          => esc_html__( 'Bottom 2', 'prologe-lite' ),
      'id'            => 'bottom2',
	  'description'   => esc_html__( 'Second sidebar of the bottom group located above the copyright area.', 'prologe-lite' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
      'name'          => esc_html__( 'Bottom 3', 'prologe-lite' ),
      'id'            => 'bottom3',
	  'description'   => esc_html__( 'Third sidebar of the bottom group located above the copyright area.', 'prologe-lite' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
	
    register_sidebar( array(
      'name'          => esc_html__( 'Bottom 4', 'prologe-lite' ),
      'id'            => 'bottom4',
	  'description'   => esc_html__( 'Fourth sidebar of the bottom group located above the copyright area.', 'prologe-lite' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );	
	
}
add_action( 'widgets_init', 'prologe_lite_widgets_init' );



// Count the number of widgets to enable resizable widgets in the bottom group (future addon)
function prologe_lite_bottom_group() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-lg-12';
			break;
		case '2':
			$class = 'col-lg-6';
			break;
		case '3':
			$class = 'col-lg-4';
			break;
		case '4':
			$class = 'col-lg-3';
			break;
	}
	if ( $class )
		echo 'class="' . esc_attr( $class ) . '"';
}
