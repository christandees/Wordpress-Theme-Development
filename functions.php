<?php
add_theme_support('menus');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

register_nav_menu('primary_nav', 'Primary Navigation');


register_sidebar(array('name' => 'sidebar-widget',
	'id'            => 'sidebar-1',
	'before_widget' => '<div class="col-4"><div class="widget">',
	'after_widget' =>  '</div><hr width="87%"><hr width="87%"></div>',
	'before_title' => '<h3 class="widget-title">',
						'after_title' => '</h3>'));

include_once('about_widget.php');
include_once('my_test_widget.php');
?>