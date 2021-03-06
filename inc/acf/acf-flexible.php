<?php
/**
 * Include ACF Flexible Components for the Flexible Content Page.
 *
 * @package Panda3D
 */

function panda3d_display_flexible_content() {
	while ( have_rows('flexible_content') ) : the_row();
		// Check which component we're trying to view
		if ( get_row_layout() == 'hero' ) {
			include 'flexible-components/hero.php';
		} elseif ( get_row_layout() == 'feature-images' ) {
			include 'flexible-components/feature-images.php';
		} elseif ( get_row_layout() == 'call_to_action' ) {
			include 'flexible-components/call-to-action.php';
		} elseif ( get_row_layout() == 'blog_posts' ) {
			include 'flexible-components/blog-posts.php';
		} elseif ( get_row_layout() == 'brand_showcase' ) {
			include 'flexible-components/brand-showcase.php';
		} elseif ( get_row_layout() == 'choices' ) {
			include 'flexible-components/choices.php';
		} elseif ( get_row_layout() == 'call_to_action_alt' ) {
			include 'flexible-components/call-to-action-alt.php';
		} elseif ( get_row_layout() == 'info_block' ) {
			include 'flexible-components/info-block.php';
		}
	endwhile;
}
