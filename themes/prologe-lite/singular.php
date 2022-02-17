<?php
/**
 * The template for displaying single posts and pages.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Prologe
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="site-content" role="main">

    <?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			
			if ( is_page() ) {
				get_template_part( 'template-parts/content', 'page' );
			} else {
				get_template_part( 'template-parts/content', 'single' );
			}
			
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
