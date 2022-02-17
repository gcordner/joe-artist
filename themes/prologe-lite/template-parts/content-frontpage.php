<?php
/**
 * Displays the content when the front page cover template is used.
 * @package Prologe
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	 

	// Add class for the WP custom header image
	if ( has_header_image() ) {
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'prologe_lite_cover_overlay_bg_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}



	// Setup the call to action
	$cta_button1 = '';
	$cta_button2 = '';
	
	$cta_heading = get_theme_mod( 'prologe_lite_cta_heading' );
	$cta_intro = get_theme_mod( 'prologe_lite_cta_intro' );
	
	$cta_button_text1 = get_theme_mod( 'prologe_lite_cta_button_text1' );
	$cta_button_link1   = get_theme_mod( 'prologe_lite_cta_button_link1' );
	$cta_button_text2 = get_theme_mod( 'prologe_lite_cta_button_text2' );
	$cta_button_link2   = get_theme_mod( 'prologe_lite_cta_button_link2' );
	
	if ( $cta_button_text1 ) {
		$cta_button1 = '<a id="cta-button1" href="' . esc_url($cta_button_link1) . '" class="button" role="button"><span id="cta-button1-text">' . esc_html($cta_button_text1) . '</span></a>';
	}
	if ( $cta_button_text2 ) {
		$cta_button2 = '<a id="cta-button2" href="' . esc_url($cta_button_link2) . '" class="button button-outline" role="button"><span id="cta-button2-text">' . esc_html($cta_button_text2) . '</span></a>';
	}
	?>

    <div class="cover-header <?php echo $cover_header_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" <?php if ( has_header_image() ) { ?> style="background-image: url(
    <?php header_image(); ?>);" <?php } ?>>
        <div class="cover-header-inner-wrapper screen-height">
            <div class="cover-header-inner">
                <div class="cover-color-overlay color-accent" <?php echo $color_overlay_style; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div>

                <header class="entry-header has-text-align-center">
                    <div class="entry-header-inner section-inner no-margin">

                        <div id="frontpage-cta">

							<?php if ( $cta_heading ) { 
								echo '<h1 id="frontpage-cta-heading">' . wp_kses_post( $cta_heading ) . '</h1>';
							}
                         
							if ( $cta_intro ) { 
								echo ' <p id="frontpage-cta-intro">' . wp_kses_post( $cta_intro ) . '</p>';
							}
	
							if ( $cta_button_text1 ) { 
								echo '<div id="frontpage-cta-buttons">' . wp_kses_post($cta_button1) . '&nbsp;' . wp_kses_post($cta_button2) . '</div>';
							}
							?>
							
                        </div>

                    </div><!-- .entry-header-inner -->
                </header><!-- .entry-header -->

            </div><!-- .cover-header-inner -->
        </div><!-- .cover-header-inner-wrapper -->
    </div><!-- .cover-header -->

    <div class="post-inner container" id="post-inner">
        <div class="row">
            <div class="col">

                <div class="entry-content">
				
                    <?php if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_fp_title', false ) ) ) {
						if ( is_page_template( array( 'templates/frontpage.php' ) ) ) {
							the_title( '<h2 class="entry-title">', '</h2>' );
						} else {
							the_title( '<h1 class="entry-title">', '</h1>' );
						}
					}
						the_content();
						 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
							edit_post_link( __( 'Edit Page', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
						 }
						 
					?>
                </div><!-- .entry-content -->

            </div>
        </div>
    </div><!-- .post-inner -->

</article><!-- .post -->
