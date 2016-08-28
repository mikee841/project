<?php
/*
Plugin Name: Custom widget
Plugin URI: localhost
Description: Add the Custom widget to use modified pages widget
Author: Miika
Author URI: localhost
License: none
*/

class custom_widget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(false, $name = __('Custom widget'));
	}
	function form($instance)
	{

	}
	function update($new_instance, $old_instance)
	{

	}
	function widget($args, $instance)
	{
		?>
			<div class="widget custom-widget">
				<h2><?=the_field('sidebar_title')?></h2>
				<ul class="toppage-level">
					<?
						$current_page_permalink = get_the_permalink();
						$query_args = array(
								'post_parent' => 0,
								'post_type' => 'page',
								'orderby' => 'id',
								'order' => 'asc',
							);
						$query = new WP_Query($query_args);
						while($query->have_posts()) : $query->the_post();?>
							<li <?if($current_page_permalink == get_the_permalink()):?>class="active"<?endif?>><a href="<?=the_permalink()?>"><?=the_title()?></a>
							</li>
							<?
								$post = get_post();
								$subquery_args = array(
										'post_parent' => $post->ID,
										'post_type' => 'page',
										'orderby' => 'id',
										'order' => 'asc',
									);
								$subquery = new WP_Query($subquery_args);
								?>
								<ul class="subpage-level"> 
								<?
								while($subquery->have_posts()) : $subquery->the_post();?>
									<li <?if($current_page_permalink == get_the_permalink()):?>class="active"<?endif?>><a href="<?=the_permalink()?>"><?=the_title()?></a>
									</li>
								<?endwhile?>
								</ul>
						<?endwhile?>
				</ul>
			</div>
		<?
	}
}

add_action('widgets_init', function(){
	register_widget('custom_widget');
});

?>