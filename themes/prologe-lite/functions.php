<?php
/**
 * Twenty Twenty functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Prologe
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which runs before the init hook. The init hook is too late for some features, such as indicating support for post thumbnails.
 */
function prologe_lite_theme_support() {

		// Add excerpt support to pages
		add_post_type_support( 'page', 'excerpt' );
		
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'prologe-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 200;
	$logo_height = 70;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'prologe-lite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'prologe-lite' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new Prologe_Script_Loader();
	add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action( 'after_setup_theme', 'prologe_lite_theme_support' );

/*	-----------------------------------------------------------------------------------------------
	CONTENT WIDTH
	Set the content width in pixels, based on the theme's design and stylesheet
--------------------------------------------------------------------------------------------------- */

// Set the default content width
$GLOBALS['content_width'] = 1100;

function prologe_lite_content_width() {
	$content_width = $GLOBALS['content_width'];
	// Check if the page has a sidebar.
	if ( is_active_sidebar( 'left-sidebar'  ) || is_active_sidebar( 'right-sidebar' ) || is_active_sidebar( 'blog-sidebar' ) ) {
		$content_width = 650;
	}	
  $GLOBALS['content_width'] = apply_filters( 'prologe_lite_content_width', $content_width );
}
add_action( 'template_redirect', 'prologe_lite_content_width', 0 );
	
	
/**
 * REQUIRED FILES
 * Include required files.
 */
 
 // Additional Functions
 require get_template_directory() . '/inc/inline-styles.php';
require get_template_directory() . '/inc/custom-header.php'; 
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/sidebars.php';
require get_template_directory() . '/inc/svg-icons.php';

//require get_template_directory() . '/inc/custom-css.php';

// Customizer
require get_template_directory() . '/classes/class-prologe-customize.php';
require get_template_directory() . '/inc/customizer/sanitize-functions.php';
require get_template_directory() . '/inc/customizer/sections/customizer-identity.php';
require get_template_directory() . '/inc/customizer/sections/customizer-basic.php';
require get_template_directory() . '/inc/customizer/sections/customizer-labels.php';
require get_template_directory() . '/inc/customizer/sections/customizer-cover.php';
require get_template_directory() . '/inc/customizer/sections/customizer-cta.php';
require get_template_directory() . '/inc/customizer/sections/customizer-blog.php';
require get_template_directory() . '/inc/customizer/sections/customizer-post.php';
require get_template_directory() . '/inc/customizer/sections/customizer-colours.php';
require( get_template_directory() . '/inc/customizer/sections/customizer-upgrade.php' );
require get_template_directory() . '/inc/customizer/controls/custom-controls.php';


// Custom Classes
require get_template_directory() . '/classes/class-prologe-svg-icons.php';
require get_template_directory() . '/classes/class-prologe-walker-comment.php';
require get_template_directory() . '/classes/class-prologe-walker-page.php';
require get_template_directory() . '/classes/class-prologe-script-loader.php';
require get_template_directory() . '/classes/class-prologe-non-latin-languages.php';


// Register and Enqueue Styles.
function prologe_lite_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// Disable the theme block front-end stylesheet.
    if ( false == esc_attr(get_theme_mod( 'prologe_lite_block_css', false ) ) ) {
		wp_enqueue_style( 'prologe-block-style', get_template_directory_uri() . '/assets/css/block-styles.css', array(), null );
	}
	
	// RTL block styles
	if ( is_rtl() ) {
	wp_enqueue_style( 'prologe-rtl-block-styles', get_template_directory_uri() . '/assets/css/block-styles-rtl.css', array(), null );
	}
	
	// Disable core gutenberg style in Front
	 if ( true == esc_attr(get_theme_mod( 'prologe_lite_block_css', false ) ) ) {	
		function prologe_lite_deregister_styles() {
			wp_dequeue_style( 'wp-block-library' );
		}
		add_action( 'wp_print_styles', 'prologe_lite_deregister_styles', 100 );
	 }
	 
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', array(), null );

	wp_enqueue_style( 'prologe-style', get_stylesheet_uri(), array(), null );

	// Add print CSS.
	wp_enqueue_style( 'prologe-print-style', get_template_directory_uri() . '/print.css', null, null, 'print' );

}

add_action( 'wp_enqueue_scripts', 'prologe_lite_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function prologe_lite_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );
	
	// Use minified libraries if SCRIPT_DEBUG is false
	$build  = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '/build' : '';
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';	
	
	// Comments
	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// Theme scripts
	wp_enqueue_script( 'prologe-js', get_template_directory_uri() . '/assets/js' . $build . '/theme-scripts' . $suffix . '.js', array(), null, false );
	wp_script_add_data( 'prologe-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'prologe_lite_register_scripts' );

/**
 * Fix skip link focus in IE11.
 * This does not enqueue the script because it is tiny and because it is only for IE11, thus it does not warrant having an entire dedicated blocking script being loaded.
 * @link https://git.io/vWdr2
 */
function prologe_lite_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
<script>
    /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
        var t, e = location.hash.substring(1);
        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
    }, !1);

</script>
<?php
}
add_action( 'wp_print_footer_scripts', 'prologe_lite_skip_link_focus_fix' );

/** Enqueue non-latin language styles
 * @return void
 */
function prologe_lite_non_latin_languages() {
	$custom_css = Prologe_Non_Latin_Languages::get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'prologe-style', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'prologe_lite_non_latin_languages' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function prologe_lite_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'prologe-lite' ),
		'expanded' => __( 'Desktop Expanded Menu', 'prologe-lite' ),
		'mobile'   => __( 'Mobile Menu', 'prologe-lite' ),
		'footer'   => __( 'Footer Menu', 'prologe-lite' ),
		'social'   => __( 'Social Menu', 'prologe-lite' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'prologe_lite_menus' );

/**
 * Prevent Page Scroll When Clicking the More Link
 * @link https://codex.wordpress.org/Customizing_the_Read_More#Prevent_Page_Scroll_When_Clicking_the_More_Link
 * @return string $link
 */
function prologe_lite_more_link_scroll( $link ) {
 $link = preg_replace( '|#more-[0-9]+|', '', $link );
 return $link;
}
add_filter( 'the_content_more_link', 'prologe_lite_more_link_scroll' );


/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 */
function prologe_lite_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'prologe-lite' ) . '</a>';
}

add_action( 'wp_body_open', 'prologe_lite_skip_link', 5 );


/**
 * Enqueue supplemental block editor styles.
 */
function prologe_lite_block_editor_styles() {

	$css_dependencies = array();

	// Enqueue the editor styles.
	wp_enqueue_style( 'prologe-block-editor-styles', get_theme_file_uri( '/assets/css/editor-blocks.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
	
	if ( is_rtl() ) {
		wp_enqueue_style( 'prologe-block-editor-rtl-styles', get_theme_file_uri( '/assets/css/editor-blocks-rtl.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
		wp_enqueue_style( 'prologe-classic-editor-rtl-styles', get_theme_file_uri( '/assets/css/editor-classic-rtl.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
	}
	
	// Add inline style for non-latin fonts.
	wp_add_inline_style( 'prologe-block-editor-styles', Prologe_Non_Latin_Languages::get_non_latin_css( 'block-editor' ) );

}

add_action( 'enqueue_block_editor_assets', 'prologe_lite_block_editor_styles', 1, 1 );

/**
 * Enqueue classic editor styles.
 */
function prologe_lite_classic_editor_styles() {
	$classic_editor_styles = array(
		'/assets/css/editor-classic.css',
	);
	add_editor_style( $classic_editor_styles );
}
add_action( 'init', 'prologe_lite_classic_editor_styles' );


/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 * @param array $mce_init TinyMCE styles.
 */
function prologe_lite_add_classic_editor_non_latin_styles( $mce_init ) {

	$styles = Prologe_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

	// Return if there are no styles to add.
	if ( ! $styles ) {
		return $mce_init;
		}

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;

}

add_filter( 'tiny_mce_before_init', 'prologe_lite_add_classic_editor_non_latin_styles' );


/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function prologe_lite_block_editor_settings() {

	// Block Editor Palette.
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => esc_html__( 'Black', 'prologe-lite' ),
			'slug'  => 'black',
			'color' => '#070707',
		),
		array(
			'name'  => esc_html__( 'Teal', 'prologe-lite' ),
			'slug'  => 'teal',
			'color' => '#0c7789',
		),
		array(
			'name'  => esc_html__( 'Red', 'prologe-lite' ),
			'slug'  => 'red',
			'color' => '#ce3b32',
		),			
		array(
			'name'  => esc_html__( 'Grey', 'prologe-lite' ),
			'slug'  => 'grey',
			'color' => '#506270',
		),
		array(
			'name'  => esc_html__( 'Taupe', 'prologe-lite' ),
			'slug'  => 'taupe',
			'color' => '#8c8367',
		),				
		array(
			'name'  => esc_html__( 'Beige', 'prologe-lite' ),
			'slug'  => 'beige',
			'color' => '#ece7d7',
		),		
		array(
			'name'  => esc_html__( 'White', 'prologe-lite' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		),	
		)
	);

// Block Editor Gradients
add_theme_support(
    'editor-gradient-presets',
    array(
        array(
            'name'     => esc_html__( 'Black to Grey', 'prologe-lite' ),
			'gradient' => 'linear-gradient(135deg,rgb(7,7,7) 0%,rgb(143,150,150) 100%)',
            'slug'     => 'black-grey'
        ),
        array(
            'name'     => esc_html__( 'Red to Light Red', 'prologe-lite' ),
           'gradient' => 'linear-gradient(135deg,rgb(206,59,50) 0%,rgb(211,144,140) 100%)',
            'slug'     =>  'red-light-red',
        ),
        array(
            'name'     => esc_html__( 'Teal to Light Teal', 'prologe-lite' ),
            'gradient' => 'linear-gradient(135deg,rgb(12,119,137) 0%,rgb(86,192,210) 100%)',
            'slug'     => 'teal-light-teal',
        ),
        array(
            'name'     => esc_html__( 'Taupe to Light Taupe', 'prologe-lite' ),
             'gradient' => 'linear-gradient(135deg,rgb(140,131,103) 0%,rgb(201,195,169) 100%)',
            'slug'     => 'taupe-light-taupe',
        ),
    )
);


	// Block Editor Font Sizes.
	add_theme_support(	'editor-font-sizes',	
	array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'prologe-lite' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'prologe-lite' ),
				'size'      => 16,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'prologe-lite' ),
				'shortName' => _x( 'R', 'Short name of the regular font size in the block editor.', 'prologe-lite' ),
				'size'      => 18,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Medium', 'Name of the medium font size in the block editor', 'prologe-lite' ),
				'shortName' => _x( 'M', 'Short name of the medium font size in the block editor.', 'prologe-lite' ),
				'size'      => 20,
				'slug'      => 'normal',
			),			
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'prologe-lite' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'prologe-lite' ),
				'size'      => 26,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'prologe-lite' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'prologe-lite' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

}

add_action( 'after_setup_theme', 'prologe_lite_block_editor_settings' );

/*	-----------------------------------------------------------------------------------------------
	ADD BODY CLASSES
	Add conditional body classes.
	@param array $classes Classes added to the body tag.
	@return array $classes Classes added to the body tag.
--------------------------------------------------------------------------------------------------- */

function prologe_lite_body_classes( $classes ) {

	global $post;
	$post_type = isset( $post ) ? $post->post_type : false;

		// Blog layout
		$prologe_lite_blog_layout = esc_attr(get_theme_mod( 'prologe_lite_blog_layout', 'center' ) );	
		if( $prologe_lite_blog_layout !== 'default' && ! is_singular() ) {
			$classes[] = 'blog-' . $prologe_lite_blog_layout;
		}		
		
		// Single layout
		$prologe_lite_single_layout = esc_attr(get_theme_mod( 'prologe_lite_single_layout', 'right' ) );	
		if( $prologe_lite_single_layout !== 'default' && is_single() ) {
			$classes[] = 'single-' . $prologe_lite_single_layout;
		}	
		
	// Check whether we're singular.
	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	// Check whether the current page is the default template
		if(basename(get_page_template()) === 'page.php'){
		$classes[] = 'default-page';
		}

	// Check if the page is using the custom header image
	if ( has_header_image() && is_front_page() ) {
		$classes[] = 'custom-header';
	}

	// Check whether the current page should have an overlay header.
	if ( is_page_template( array( 'templates/frontpage.php' ) ) ) {
		$classes[] = 'template-frontpage';
	}

	// Check whether the current page should have an overlay header.
	if ( is_page_template( array( 'templates/template-cover.php' ) ) ) {
		$classes[] = 'template-cover';
	}
	
	// Check whether the current page has full-width content.
	if ( is_page_template( array( 'templates/template-short.php' ) ) ) {
		$classes[] = 'template-short';
	}

	// Check whether the current page has full-width content.
	if ( is_page_template( array( 'templates/template-right.php' ) ) ) {
		$classes[] = 'template-right';
	}

	// Check whether the current page has full-width content.
	if ( is_page_template( array( 'templates/template-left.php' ) ) ) {
		$classes[] = 'template-left';
	}
	
	// Check for enabled search.
	if ( true === get_theme_mod( 'enable_header_search', true ) ) {
		$classes[] = 'enable-search-modal';
	}

	// Check for post thumbnail.
	if ( is_singular() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	} elseif ( is_singular() ) {
		$classes[] = 'no-post-thumbnail';
	}

	// Check whether we're in the customizer preview.
	if ( is_customize_preview() ) {
		$classes[] = 'customizer-preview';
	}
	
	// Check for the elements output in the top part of the footer.
	$has_footer_menu = has_nav_menu( 'footer' );
	$has_social_menu = has_nav_menu( 'social' );

	return $classes;

}

add_filter( 'body_class', 'prologe_lite_body_classes' );



/*	-----------------------------------------------------------------------------------------------
	ADD EXCERPT SUPPORT TO PAGES
	Allows the addition of an excerpt to your pages
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'prologe_lite_add_excerpt_support_to_pages' ) ) :
	function prologe_lite_add_excerpt_support_to_pages() {
		add_post_type_support( 'page', 'excerpt' );		
	}
	add_action( 'init', 'prologe_lite_add_excerpt_support_to_pages' );
endif;	

 
/*-----------------------------------------------------------------------------------------------
	FILTER THE EXCERPT SUFFIX
	Replaces the default [...] with a &hellip; (three dots)
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'prologe_lite_excerpt_more' ) ) :
	function prologe_lite_excerpt_more() {
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'prologe_lite_excerpt_more' );
endif;

/*-----------------------------------------------------------------------------------------------
	FILTER THE EXCERPT LENGTH
	Modify the length of automated excerpts to better fit the Clarified previews
--------------------------------------------------------------------------------------------------- */
if ( ! function_exists( 'prologe_lite_excerpt_length' ) ) {
	function prologe_lite_excerpt_length( $length ) {

		if ( is_admin() ) {
			return $length;
		}

		// Get excerpt length from customizer.
		$excerpt_length = esc_attr(get_theme_mod( 'prologe_lite_excerpt_length', '35' ) );
		// Return excerpt text.
			return $excerpt_length; // Number of words.
	}
}
add_filter( 'excerpt_length', 'prologe_lite_excerpt_length', 999 );
