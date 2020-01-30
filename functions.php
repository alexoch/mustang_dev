<?php
require_once "functions/lib_mustang.php";
add_action('wp_enqueue_scripts', 'mustang_scripts');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);
add_filter('wp_nav_menu', 'add_menuclass');
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'application' => 'Меню в применении'


	] );
} );
mustang_scripts();
/*
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH . '/single');
/**
 * Filter the single_template with our custom function
 */
add_filter('single_template', 'my_single_template');
/*
 * Изменение вывода галереи через шоткод
 * Смотреть функцию gallery_shortcode в http://wp-kama.ru/filecode/wp-includes/media.php
 * $output = apply_filters( 'post_gallery', '', $attr );
 */
add_filter('post_gallery', 'my_gallery_output', 10, 2);
