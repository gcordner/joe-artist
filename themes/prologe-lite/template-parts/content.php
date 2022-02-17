<?php
/**
 * The default template for displaying content
 * Used for both singular and index.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Prologe
 */
 
  if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php
	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}
?>

    <div class="post-inner container">
        <div class="entry-content">

            <?php 		
				if ( is_search() || ! is_singular() && 'excerpt' === get_theme_mod( 'prologe_lite_blog_content', 'full' ) ) {

					the_excerpt();	
					
							if ( false == esc_attr(get_theme_mod( 'prologe_lite_hide_excerpt_more_link', false ) ) ) {			
								prologe_lite_read_more_link();
							}
															
						} else {				
							the_content( prologe_lite_move_more_link() );
						}
			
				get_template_part( 'template-parts/nav-multipage' );	
			?>

        </div>
    </div><!-- .post-inner -->

</article><!-- .post -->
