<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Simone
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area" role="complementary" <?if(get_field('body_background_color')):?>style="background-color:<?=get_field('body_background_color');?>"<?endif?>>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
