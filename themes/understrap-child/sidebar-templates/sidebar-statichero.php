<?php
/**
 * Static hero sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Joe Artist Hero Widget Area ******************* -->

	<div class="wrapper" id="wrapper-static-hero">

			<div class="container-fluid" id="wrapper-static-content" tabindex="-1">

				<div class="row">

					<?php dynamic_sidebar( 'statichero' ); ?>

				</div>

			</div>

	</div><!-- #wrapper-static-hero -->

	<?php
endif;
