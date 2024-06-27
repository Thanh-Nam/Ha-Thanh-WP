<?php 
include_once("homepages/wg_slide_home.php");
include_once("homepages/wg_news_hot.php");
include_once("homepages/wg_new_category_home.php");

function init_widget_area() {
	register_sidebar(array(
		'name'          => 'Home Center Widget Area',
		'id'            => 'wg_home_center_area',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
}
add_action( 'widgets_init', 'init_widget_area' );
function create_custom_widget() {
	register_widget("Wg_Slide_Home");
	register_widget("Wg_News_Hot");
	register_widget("Wg_New_Category_Home");
}
add_action( 'widgets_init', 'create_custom_widget' );