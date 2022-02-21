<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full" role="footer">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row footer-credits">

				 <?php dynamic_sidebar( 'footerfull' ); ?>
                <!-- <div class="col-7 credits">
                <p>&copy; 2022 verve records | <a href="#">terms</a> | <a href="#">privacy</a> | <a href="#">cookie choices</a></p>
        </div>
        <div class="col-7 col-sm-12 social-icons">

</div> -->
			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;