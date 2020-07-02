<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'script_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');

function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
	wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	wp_enqueue_style('font-awesome-min', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css');
	wp_deregister_script('jquery-core');
	wp_register_script('jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script('jquery');
}

function script_theme() {
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
	wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
}

function theme_register_nav_menu() {
	register_nav_menu('top', 'Меню в шапке');
	register_nav_menu('down', 'Меню в подвале');
}

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => 'right_sidebar',
		'description'   => 'Это панель с правой стороны сайта',
	) );
}