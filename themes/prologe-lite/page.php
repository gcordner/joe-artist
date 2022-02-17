<?php
/**
 * The template for displaying the main page.
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
				get_template_part( 'template-parts/content', 'page' );					
		}
	}
?>

</main><!-- #site-content -->

<?php get_footer(); ?>
