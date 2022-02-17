<?php
/**
 * The default template for displaying the full post
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
	get_template_part( 'template-parts/featured-image' );
	?>

    <div class="post-inner container">


        <?php $prologe_lite_single_layout = get_theme_mod( 'prologe_lite_single_layout', 'right' );	
				switch ( esc_attr($prologe_lite_single_layout ) ) {
	
				case "full":
				// Default blog - no sidebar
				echo '<div class="row justify-content-center"><div class="col-lg-9"><div class="entry-content">';
						the_content();	
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Post', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
				 
				 // Single bottom post meta.
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_post_tags', false ) ) ) {
					prologe_lite_the_post_meta( get_the_ID(), 'single-bottom' );
				 }
				 
				  if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_author_bio', false ) ) ) {
					echo '<footer class="entry-footer">';
						get_template_part( 'template-parts/entry-author-bio' );
					echo '</footer>';
				  }
					
					if ( ( is_single() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}					
				echo '</div></div></div>';
				break;
				
				case "left":
				// Classic left sidebar blog
				echo '<div class="row"><div class="col-lg-8 order-lg-2"><div class="entry-content">';
						the_content();	
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Post', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
				 // Single bottom post meta.
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_post_tags', false ) ) ) {
					prologe_lite_the_post_meta( get_the_ID(), 'single-bottom' );
				 }				 
				  if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_author_bio', false ) ) ) {
					echo '<footer class="entry-footer">';
						get_template_part( 'template-parts/entry-author-bio' );
					echo '</footer>';
				  }
					
					if ( ( is_single() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}				
				echo '</div></div>';
					get_sidebar();
				echo '</div>';
				break;
				
				default:
				// Classic right sidebar blog
				echo '<div class="row"><div class="col-lg-8"><div class="entry-content">';
						the_content();		
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Post', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
					 // Single bottom post meta.
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_post_tags', false ) ) ) {
					prologe_lite_the_post_meta( get_the_ID(), 'single-bottom' );
				 }		
				  if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_author_bio', false ) ) ) {
					echo '<footer class="entry-footer">';
						get_template_part( 'template-parts/entry-author-bio' );
					echo '</footer>';
				  }
					
					if ( ( is_single() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}
				echo '</div></div>';
					get_sidebar();
				echo '</div>';
				
			}
		?>


    </div><!-- .post-inner -->

    <?php  if ( false == esc_attr(get_theme_mod( 'prologe_lite_post_navigation', false ) ) ) {
		get_template_part( 'template-parts/navigation' ); 
	}
	?>

</article><!-- .post -->
