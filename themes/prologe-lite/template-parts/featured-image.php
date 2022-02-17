<?php
/**
 * Displays the featured image
 * @package Prologe
 */

if ( has_post_thumbnail() && ! post_password_required() ) {

	$featured_media_inner_classes = '';

	// Make the featured media thinner on archive pages.
	if ( ! is_singular() ) {
		$featured_media_inner_classes .= ' medium';
	}
	?>

<figure class="featured-media">

    <div class="featured-media-inner <?php echo esc_attr($featured_media_inner_classes); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">

        <?php
			the_post_thumbnail();

			$caption = get_the_post_thumbnail_caption();

			if ( $caption ) {
				if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_featured_image_caption', false ) ) ) {
				?>

        <figcaption class="wp-caption-text"><?php echo esc_html( $caption ); ?></figcaption>

        <?php
				}
			}
			?>

    </div><!-- .featured-media-inner -->

</figure><!-- .featured-media -->

<?php
}
