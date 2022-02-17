<?php
/**
 * For displaying breadcrumbs
 * @package Prologe
*/

if ( ! is_active_sidebar( 'breadcrumbs' ) ) {
	return;
}
?>

<section id="breadcrumb-section">
    <nav id="breadcrumb-sidebar" class="widget-area">
        <?php dynamic_sidebar( 'breadcrumbs' ); ?>
    </nav>
</section>
