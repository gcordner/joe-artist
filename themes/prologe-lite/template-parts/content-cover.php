<?php
/**
 * Displays the content when the cover template is used.
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

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'prologe-fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'prologe_lite_cover_overlay_bg_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}

	?>

    <div class="cover-header <?php echo $cover_header_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" <?php echo $cover_header_style; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>
        <div class="cover-header-inner-wrapper screen-height">
            <div class="cover-header-inner">
                <div class="cover-color-overlay color-accent" <?php echo $color_overlay_style; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div>

                <header class="entry-header has-text-align-center">
                    <div class="entry-header-inner section-inner">

                        <?php

							/**
							 * Allow child themes and plugins to filter the display of the categories in the article header.
							 *
							 * @since 1.0.0
							 *
							 * @param bool Whether to show the categories in article header, Default true.
							 */
							$show_categories = apply_filters( 'prologe_lite_show_categories_in_entry_header', true );

							if ( true === $show_categories && has_category() ) {
								if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_post_categories', false ) ) ) {
								?>

                        <div class="entry-categories">
                            <span class="screen-reader-text"><?php _e( 'Categories', 'prologe-lite' ); ?></span>
                            <div class="entry-categories-inner">
                                <?php the_category( ' ' ); ?>
                            </div><!-- .entry-categories-inner -->
                        </div><!-- .entry-categories -->

                        <?php
								}
							}

							the_title( '<h1 class="entry-title">', '</h1>' );

							if ( is_page() ) {
							
							
							$intro_text_width = '';
							
							if ( has_excerpt() ) {
							?>

                        <div class="intro-text section-inner <?php echo esc_attr( $intro_text_width ); ?>">
                            <?php the_excerpt(); ?>
                        </div>
						


                        <?php
								}
							} else {

								$intro_text_width = '';

								if ( is_singular() ) {
									$intro_text_width = ' small';
								} else {
									$intro_text_width = ' thin';
								}

								if ( has_excerpt() ) {
									?>

                        <div class="intro-text section-inner <?php echo esc_attr( $intro_text_width ); ?>">
                            <?php the_excerpt(); ?>
                        </div>

                        <?php
								}
									if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_summary_meta', false ) ) ) {
										prologe_lite_the_post_meta( get_the_ID(), 'single-top' );
									}
							}
							?>

                    </div><!-- .entry-header-inner -->
                </header><!-- .entry-header -->

            </div><!-- .cover-header-inner -->
        </div><!-- .cover-header-inner-wrapper -->
    </div><!-- .cover-header -->

    <?php if ( is_page_template( array( 'templates/template-cover.php' ) ) ) {
			get_template_part( 'template-parts/sidebar', 'breadcrumbs' ); 
		}
		?>

    <div class="post-inner container" id="post-inner">
        <div class="row">
            <div class="col">
                <div class="entry-content">

                    <?php 
				the_content(); 
				
				if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Post', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );	
				}
                wp_link_pages(
					array(
						'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'prologe-lite' ) . '"><span class="label">' . __( 'Pages:', 'prologe-lite' ) . '</span>',
						'after'       => '</nav>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					)
				);
				?>

                </div><!-- .entry-content -->
                <?php	
					if ( is_single() ) {
					echo '<footer class="entry-footer">';
						get_template_part( 'template-parts/entry-author-bio' );
					echo '</footer>';
				}
				?>
            </div>
        </div>
    </div><!-- .post-inner -->

    <?php



	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

    <div class="comments-wrapper container">

        <?php comments_template(); ?>

    </div><!-- .comments-wrapper -->

    <?php
	}

	if ( false == esc_attr(get_theme_mod( 'prologe_lite_post_navigation', false ) ) && is_single() ) {
		get_template_part( 'template-parts/navigation' ); 
	}
	
	?>

</article><!-- .post -->
