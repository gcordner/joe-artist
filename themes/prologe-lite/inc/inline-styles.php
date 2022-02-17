<?php
/**
 * Dynamic Inline Styles
 * @package Prologe
*/

// Function for sanitizing Hex color 
function prologe_lite_sanitize_hex_color( $color ){
	if ( '' === $color )
		return '';

    // 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}

/** ----------------------------------------------------
	Setup our inline styles
------------------------------------------------------*/
if( ! function_exists( 'prologe_lite_dynamic_css' ) ) :
	function prologe_lite_dynamic_css() {
	
echo '<style type="text/css" media="all">'; ?>

body {
background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_body_bg', '#000' )); ?>;	
color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_body_text_color', '#000' )); ?>;
}

#site-header {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_header_bg', '#000' )); ?>;		
}
.site-title,
.site-title a,
.site-title a:visited {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_sitetitle_colour', '#fff' )); ?>;
}
.site-description {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_tagline_colour', '#b7b7b7' )); ?>;
}

.cover-color-overlay {
	opacity: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_overlay_opacity', '0.2' )); ?>;
}
.cover-header.bg-image { 
	 background-attachment: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_fixed_background', 'fixed' )); ?>;
}

@media (max-width: 992px) {
.cover-header.bg-image { 
	 background-position: center <?php echo esc_attr(get_theme_mod( 'prologe_lite_mobile_cover_position_bg', 'center' )); ?>;
}
}

#frontpage-cta-heading {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_heading_colour', '#fff' )); ?>;
}

#frontpage-cta-intro {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_intro_colour', '#fff' )); ?>;
}

#frontpage-cta-buttons a,
#frontpage-cta-buttons a:visited {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_text_colour', '#fff' )); ?>;
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_bg_colour', '#0c7789' )); ?>;
}
#frontpage-cta-buttons a.button-outline,
#frontpage-cta-buttons a.button-outline:visited {
	background: transparent;
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_bg_colour', '#0c7789' )); ?>;
}
#frontpage-cta-buttons a:focus,
#frontpage-cta-buttons a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_text_hover_colour', '#fff' )); ?>;
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_bg_hover_colour', '#ce3b32' )); ?>;
}

#frontpage-cta-buttons a.button-outline:focus,
#frontpage-cta-buttons a.button-outline:hover {
	background: transparent;
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_cta_button_bg_hover_colour', '#ce3b32' )); ?>;
}

#site-content {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_content_bg', '#fdfdfc' )); ?>;
}
#bottom-wrapper,
#site-footer,
.widget:not(:last-child),
.widget_archive li:not(:last-child),
.widget_pages li:not(:last-child),
.widget_nav_menu li:not(:last-child),
.widget_categories li:not(:last-child),
.widget_recent_comments li:not(:last-child),
.widget_recent_entries li:not(:last-child),
.widget_nav_menu ul ul,
.widget_pages ul ul,
.single .entry-footer,
.comments-wrapper,
:not(pre) > * > code,
:not(pre) > code,
pre {
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_line_colour', '#ededed' )); ?>;
}

h1, h2, h3, h4, h5, h6, .entry-title a, .entry-title a:visited, .template-frontpage.page .entry-title {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_headings', '#000' )); ?>;
}
.entry-title a:focus, .entry-title a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_hover_headings', '#0c7789' )); ?>;
}

.archive-header {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_archive_header_bg', '#ece7d7' )); ?>;
}

#bottom-wrapper,
#site-footer {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_footer_bottom_bg', '#fff' )); ?>;
}

.singular .entry-header,
.singular .featured-media::before {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_page_header_bg', '#ece7d7' )); ?>;
}

.archive-prefix.color-accent {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_archive_prefix_colour', '#000' )); ?>;
}

#archive-title,
.page .entry-title {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_page_titles', '#23282d' )); ?>;
}
.archive-header {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_archive_header_text', '#8c8367' )); ?>;
}
.singular .intro-text p {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_page_intro', '#8c8367' )); ?>;
}
 a, 
a:visited {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_links', '#ce3b32' )); ?>;
}

.comment-metadata, 
.comment-metadata a {
	color: initial;
}
.entry-content p a:not(.button):not(.post-edit-link) {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_content_links', '#ce3b32' )); ?>;
}

.cover-header .entry-header *, .page .cover-header .intro-text p  {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_text', '#fff' )); ?>;
}

.entry-categories-inner > a  {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_category_text', '#fff' )); ?>!important;
}
.entry-categories-inner > a,
.entry-categories-inner > a:visited {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_category_bg', '#23282d' )); ?>;
}
.entry-categories a:focus,
.entry-categories a:hover {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_cover_category_hover_bg', '#ce3b32' )); ?>;
}


.widget-title {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_widget_titles', '#000' )); ?>;
}

#bottom-sidebars,
#bottom-sidebars .widget-title {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_bottom_widget_text', '#000' )); ?>;
}

#bottom-wrapper,
#bottom-sidebars .widget,
#bottom-sidebars .widget li {
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_bottom_widget_line_colour', '#ededed' )); ?>;
}

#bottom-sidebars .widget a,
#bottom-sidebars .widget a:visited,
#bottom-sidebars .widget li a,
#bottom-sidebars .widget li a:visited {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_bottom_widget_li_link', '#0c7789' )); ?>;
}

.has-drop-cap:not(:focus)::first-letter {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_dropcap', '#ce3b32' )); ?>;
}

blockquote {
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_quotes', '#ce3b32' )); ?>;
}
.wp-block-pullquote::before  {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_quotes', '#ce3b32' )); ?>;
}

.header-inner .toggle path {
	fill: <?php echo esc_attr(get_theme_mod( 'prologe_lite_toggles', '#fff' )); ?>;
}
.overlay-header .toggle-text  {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_toggles', '#fff' )); ?>;
}

.modal-menu a,
.modal-menu ul li a {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_mobile_menu_links', '#000' )); ?>;
}

.primary-menu a,
.primary-menu ul a,
.primary-menu a:visited,
.primary-menu ul a:visited,
.primary-menu .icon::before, 
.primary-menu .icon::after{
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_main_menu_links', '#fff' )); ?>;	
}

.primary-menu ul::after {
	border-bottom-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_main_submenu_bg', '#000' )); ?>;
}
.primary-menu ul ul::after {
	border-left-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_main_submenu_bg', '#000' )); ?>;
}


.primary-menu ul::after {
	border-bottom-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_main_submenu_bg', '#000' )); ?>;	
}
.primary-menu ul {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_main_submenu_bg', '#000' )); ?>;
}

.social-icons a {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_social_icon_bg', '#ce3b32' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_social_icon', '#fff' )); ?>;
}
.social-icons .svg-icon {
	fill: <?php echo esc_attr(get_theme_mod( 'prologe_lite_social_icon', '#fff' )); ?>;
}

button, 
.button, 
.faux-button, 
.post-edit-link, 
.comment-reply-link,
.entry-content p a.post-edit-link, 
.wp-block-button__link, 
.wp-block-file .wp-block-file__button, input[type="button"], 
input[type="reset"], input[type="submit"],
button:visited, 
.button:visited,  
.faux-button:visited, 
.post-edit-link:visited, 
.comment-reply-link:visited, 
.entry-content p a.post-edit-link:visited, 
.wp-block-button__link:visited, 
.wp-block-file .wp-block-file__button, input[type="button"]:visited, 
input[type="reset"], input[type="submit"]:visited {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_button_bg', '#0c7789' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_button_text', '#fff' )); ?>;
}

button:focus, 
.button:focus,  
.faux-button:focus, 
.post-edit-link:focus, 
.comment-reply-link:focus, 
.entry-content p a.post-edit-link:focus, 
.wp-block-button__link:focus, 
.wp-block-file .wp-block-file__button, input[type="button"]:focus, 
input[type="reset"], input[type="submit"]:focus,
button:hover, 
.button:hover,  
.faux-button:hover, 
.post-edit-link:hover, 
.comment-reply-link:hover, 
.entry-content p a.post-edit-link:hover, 
.wp-block-button__link:hover, 
.wp-block-file .wp-block-file__button, input[type="button"]:hover, 
input[type="reset"], input[type="submit"]:hover  {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_button_hover_bg', '#ce3b32' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_button_hover_text', '#fff' )); ?>;
}

input, textarea  {
	border-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_input_border', '#ededed' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_input_text', '#000' )); ?>;
}

input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="date"], input[type="month"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="week"], input[type="number"], input[type="search"], input[type="tel"], input[type="color"], textarea {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_input_bg', '#fff' )); ?>;
}

.widget_tag_cloud a, 
.widget_tag_cloud a:visited {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_tagcloud_bg', '#eaf1f3' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_tagcloud_text', '#000' )); ?>;
}

.widget_tag_cloud a:focus, 
.widget_tag_cloud a:hover {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_tagcloud_hover_bg', '#ce3b32' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_tagcloud_hover_text', '#fff' )); ?>;
}

thead th {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_table_header', '#0c7789' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_table_header_text', '#fff' )); ?>;
}

#site-footer {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_footer_text', '#b3b3b3' )); ?>;
}

.footer-menu a,
.footer-menu a:visited {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_footer_menu_links', '#ce3b32' )); ?>;
}

.footer-menu a:focus,
.footer-menu a:hover {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_footer_menu_hover_links', '#000' )); ?>;
}

.to-the-top {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_to_top', '#ce3b32' )); ?>;
}

figcaption, 
.wp-caption-text {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_image_captions', '#506270' )); ?>;
}

.blocks-gallery-item:before {
	background: <?php echo esc_attr(get_theme_mod( 'prologe_lite_gallery_overlay_colour', '#0c7789' )); ?>;
}

.blocks-gallery-grid .blocks-gallery-image figcaption,
.blocks-gallery-grid .blocks-gallery-item figcaption,
.wp-block-gallery .blocks-gallery-image figcaption,
.wp-block-gallery .blocks-gallery-item figcaption  {
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_gallery_caption_colour', '#fff' )); ?>;
}

.blocks-gallery-item:hover:before {
	opacity: <?php echo esc_attr(get_theme_mod( 'prologe_lite_block_gallery_overlay_opacity', '0.6' )); ?>;
}

::-moz-selection {
	background-color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_select_text_bg', '#ce3b32' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_select_text', '#fff' )); ?>;
}
::selection { 
	background-color:  <?php echo esc_attr(get_theme_mod( 'prologe_lite_select_text_bg', '#ce3b32' )); ?>;
	color: <?php echo esc_attr(get_theme_mod( 'prologe_lite_select_text', '#fff' )); ?>;
}

<?php echo '</style>';
}
endif;

add_action( 'wp_head', 'prologe_lite_dynamic_css', 99 );
