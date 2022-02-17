<?php
/* 
* Navigation for splitting pages into multiple pages
* @package Prologe
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

wp_link_pages(
	array(
		'before'      => '<nav class="post-nav-links" aria-label="' . esc_attr__( 'Page', 'prologe-lite' ) . '"><span class="label">' . __( 'Pages:', 'prologe-lite' ) . '</span>',
		'after'       => '</nav>',
		'link_before' => '<span class="page-number">',
		'link_after'  => '</span>',
	)
);
