<?php
/**
 * The template for displaying the footer
 * Contains the opening of the #site-footer div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Prologe
 */
?>

<?php get_template_part( 'template-parts/sidebar', 'bottom' ); ?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">

    <div class="container">

        <?php get_template_part( 'template-parts/footer-menus' ); ?>

        <div class="row">
            <div class="footer-credits col-lg-6">

                <p class="footer-copyright"><?php _e( 'Copyright', 'prologe-lite' ); ?>&nbsp;&copy;
                    <?php
							echo date_i18n(
								/* translators: Copyright date format, see https://secure.php.net/date */
								_x( 'Y', 'copyright date format', 'prologe-lite' )
							);
							?>
                   <span id="copyright-name"> <?php echo esc_html(get_theme_mod( 'prologe_lite_copyright' )); ?>.&nbsp;</span><?php _e( 'All rights reserved.', 'prologe-lite' ); ?>
                </p><!-- .footer-copyright -->

            </div><!-- .footer-credits -->

            <div class="col-lg-6">
                <a class="to-the-top" href="#site-header">
                    <span class="to-the-top-long">
                        <?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'To the top %s', 'prologe-lite' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
                    </span><!-- .to-the-top-long -->
                    <span class="to-the-top-short">
                        <?php
							/* translators: %s: HTML character for up arrow */
							printf( __( 'Up %s', 'prologe-lite' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
                    </span><!-- .to-the-top-short -->
                </a><!-- .to-the-top -->
            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>
