<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme and one of the two required files for a theme. It is used to display a page when nothing more specific matches a query.
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
	$archive_title    = '';
	$archive_subtitle = '';

	if ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

    <header class="archive-header has-text-align-center header-footer-group">

        <div class="archive-header-inner section-inner medium">

            <?php if ( $archive_title ) { ?>
            <h1 id="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
            <?php } ?>

            <?php if ( $archive_subtitle ) { ?>
            <div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
            <?php } ?>

        </div><!-- .archive-header-inner -->

    </header><!-- .archive-header -->



    <?php
	}

	if ( have_posts() ) {
	
	
	echo '<div class="container">';
	
	
	$prologe_lite_blog_layout = get_theme_mod( 'prologe_lite_blog_layout', 'full' );	
				switch ( esc_attr($prologe_lite_blog_layout ) ) {
				
				case "classic-left":
				// Classic left sidebar blog
				echo '<div class="row"><div class="col-lg-8 order-lg-2">';
				
					// start loop
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					}
					// end loop		
					
				echo '</div>';	
				get_sidebar();
				
				break;	
				
				case "classic-right":
				// Classic right sidebar blog
				echo '<div class="row"><div class="col-lg-8">';
				
					// start loop
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					}
					// end loop		
					
				echo '</div>';	
				get_sidebar();
					
				break;	
				
				default: 
				// Default blog - no sidebar
				echo '<div class="row"><div class="col-lg-12">';
				
					// start loop
					while ( have_posts() ) {
						the_post();
						
						get_template_part( 'template-parts/content', get_post_type() );
					}
					// end loop				
					
				echo '</div></div>';
	
		}	
	
		echo '</div><!-- .container -->';
	
	} 
	?>

    <?php get_template_part( 'template-parts/pagination' ); ?>


</main><!-- #site-content -->

<?php
get_footer();
