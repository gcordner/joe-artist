<?php
/**
 * Template Name: Front Page Cover
 * Template Post Type: post, page
 * @package Prologe
 */

get_header();
?>

<main id="site-content" role="main">

    <?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-frontpage' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
