<?php
/**
 * The default template for displaying page content
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Prologe
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php
	get_template_part( 'template-parts/entry-header' );
	get_template_part( 'template-parts/featured-image' );
	?>

    <div class="post-inner container <?php echo is_page_template( 'templates/template-right.php' ) ? 'template-right' : 'thin'; ?> ">

        <?php 
			$template_left = is_page_template( 'templates/template-left.php' );
			$template_right = is_page_template( 'templates/template-right.php' );
			$template_short = is_page_template( 'templates/template-short.php' );
			
			if ( $template_left ) {
				echo '<div class="row"><div class="col-lg-8 order-lg-2"><div class="entry-content">';
				 the_content();
				 
				 echo '</div><footer class="entry-footer">';
				 get_template_part( 'template-parts/nav-multipage' );
				 
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Page', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
				 
					// Output comments wrapper if it's a post, or if comments are open,
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}
				echo '</footer></div>';
					get_sidebar();
				echo '</div>';
				
			} elseif ( $template_right ) {
				echo '<div class="row"><div class="col-lg-8"><div class="entry-content">';
				 the_content();
				 echo '</div><footer class="entry-footer">';
				 get_template_part( 'template-parts/nav-multipage' );
				 
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Page', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
					// Output comments wrapper if it's a post, or if comments are open,
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}
				echo '</footer></div>';
				get_sidebar();
				echo '</div>';
	
			} elseif ( $template_short ) {
				echo '<div class="row justify-content-center"><div class="col-lg-9"><div class="entry-content">';
				 the_content();
				 echo '</div><footer class="entry-footer">';
				 get_template_part( 'template-parts/nav-multipage' );
				 
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Page', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
					// Output comments wrapper if it's a post, or if comments are open,
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}
				echo '</footer></div></div>';

			} else {
				echo '<div class="row"><div class="col-lg-12"><div class="entry-content">';
				 the_content();
				 echo '</div><footer class="entry-footer">';
				 get_template_part( 'template-parts/nav-multipage' );
				 
				 if ( false == esc_attr(get_theme_mod( 'prologe_lite_show_edit', false ) ) ) {
					edit_post_link( __( 'Edit Page', 'prologe-lite' ), '<p class="edit-post-wrapper">', '</p>' );
				 }
					// Output comments wrapper if it's a post, or if comments are open,
					if ( ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
						echo '<div class="comments-wrapper section-inner">';
							comments_template();
						echo '</div><!-- .comments-wrapper -->';
					}
				echo '</footer></div></div>';
			}
			?>


    </div><!-- .post-inner -->

</article><!-- .post -->
