<?php
/**
 * For displaying the bottom sidebar group
 * @package Prologe
*/

	// If no active sidebars - then load nothing
	if (   ! is_active_sidebar( 'bottom1'  )
	&& ! is_active_sidebar( 'bottom2' )
	&& ! is_active_sidebar( 'bottom3'  )		
	&& ! is_active_sidebar( 'bottom4'  )	
	)
	return;	
?>



<div id="bottom-wrapper">
    <aside id="bottom-sidebars" class="widget-area container">

        <div class="row">
            <?php if ( is_active_sidebar( 'bottom1' ) ) : ?>
            <div id="bottom1" <?php prologe_lite_bottom_group(); ?>>
                <?php dynamic_sidebar( 'bottom1' ); ?>
            </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'bottom2' ) ) : ?>
            <div id="bottom2" <?php prologe_lite_bottom_group(); ?>>
                <?php dynamic_sidebar( 'bottom2' ); ?>
            </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'bottom3' ) ) : ?>
            <div id="bottom3" <?php prologe_lite_bottom_group(); ?>>
                <?php dynamic_sidebar( 'bottom3' ); ?>
            </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'bottom4' ) ) : ?>
            <div id="bottom4" <?php prologe_lite_bottom_group(); ?>>
                <?php dynamic_sidebar( 'bottom4' ); ?>
            </div>
            <?php endif; ?>
        </div>

    </aside>
</div>
