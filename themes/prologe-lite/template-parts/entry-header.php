<?php
/**
 * Displays the post header
 * @package Prologe
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

    <div class="entry-header-inner">

        <?php
			/**
			 * Allow child themes and plugins to filter the display of the categories in the entry header.
			 * @param bool   Whether to show the categories in header, Default true.
			 */
		$show_categories = apply_filters( 'prologe_lite_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() && is_single() ) {
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

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

        <div class="intro-text section-inner <?php echo $intro_text_width; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
            <?php the_excerpt(); ?>
        </div>

        <?php
		}

		// Default to displaying the post meta.
		if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_summary_meta', false ) ) ) {
		prologe_lite_the_post_meta( get_the_ID(), 'single-top' );
		}
		?>

    </div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
