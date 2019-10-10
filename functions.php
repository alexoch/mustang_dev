<?php
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний


function mustang_scripts() {
	wp_enqueue_style( 'style-name1', get_template_directory_uri() . '/scss/fonts.css');
	wp_enqueue_style( 'style-name2', get_template_directory_uri() . '/scss/main_slider.css');
	wp_enqueue_style( 'style-name3', get_template_directory_uri() . '/scss/style.css');

	if(is_single()){
		wp_enqueue_style( 'style-name4', get_template_directory_uri() . '/scss/product.css');
	}
	if( is_page_template( 'products.php')){
		wp_enqueue_style( 'style-name5', get_template_directory_uri() . '/scss/product.css');
	}

	if( is_page_template( 'about.php')){
		wp_enqueue_style( 'style-name7', get_template_directory_uri() . '/scss/about.css');
	}

	if( is_page_template( 'contacts.php')){
		wp_enqueue_style( 'style-name7', get_template_directory_uri() . '/scss/contacts.css');
	}

	if( is_page_template( 'distributors.php')){
		wp_enqueue_style( 'style-name7', get_template_directory_uri() . '/scss/distributors.css');
	}

	if( is_page_template( 'sales.php')){
		wp_enqueue_style( 'style-name9', get_template_directory_uri() . '/scss/shares.css');
	}

	if( is_page_template( 'application.php')||is_page_template( 'tag.php')){
		wp_enqueue_style( 'style-name6', get_template_directory_uri() . '/scss/use.css');
	}
//
//
//	wp_enqueue_style( 'style-css?23', get_stylesheet_uri() );
//
//	wp_enqueue_script( 'script-name1', get_template_directory_uri() .'/js/jquery-3.3.1.min.js');
//	wp_enqueue_script( 'script-name2', get_template_directory_uri() .'/fontawesome/js/all.min.js');
//	wp_enqueue_script( 'script-name3', get_template_directory_uri() . '/js/popper.js');
//	if(is_home( 'index.php')){
//		wp_enqueue_script( 'script-name6', get_template_directory_uri() . '/owlCarousel/owl.carousel.min.js');
//		wp_enqueue_script( 'script-name4', get_template_directory_uri() . '/js/carousel.js');
//	}
//	wp_enqueue_script( 'script-name5', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
//	wp_enqueue_script( 'script-name10', get_template_directory_uri() . '/main.js');

};

add_action( 'wp_enqueue_scripts', 'mustang_scripts' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {

	$classes = [ 'nav__item' ];

	return $classes;
}
function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav__item--text"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

mustang_scripts() ;


class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {

// Displays start of a level. E.g '<ul>'

	// Displays end of a level. E.g '</ul>'
	// @see Walker::end_lvl()
	function end_lvl(&$output, $depth=0, $args=array()) {
		$output .= "</ul>\n";
	}


	// Displays end of an element. E.g '</li>'
	// @see Walker::end_el()
	function end_el(&$output, $item, $depth=0, $args=array()) {
		$output .= "</li>\n";
	}


	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		if (array_search('menu-item-has-children', $item->classes)) {
			$output .= sprintf("\n<li class='dropdown %s'><a href='%s' class=\"dropdown-toggle\" data-toggle=\"dropdown\" >%s</a>\n", ( array_search('current-menu-item', $item->classes) || array_search('current-page-parent', $item->classes) ) ? 'active' : '', $item->url, $item->title
			);
		} else {
			$output .= sprintf("\n<li class='nav-item' %s><a href='%s' class='nav-link' >%s</a>\n", ( array_search('current-menu-item', $item->classes) ) ? ' class="active nav-link"' : 'class="nav-link"', $item->url, $item->title);
		}
	}

}





/*
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH . '/single');

/**
 * Filter the single_template with our custom function
 */
add_filter('single_template', 'my_single_template');

/**
 * Single template function which will choose our template
 */
function my_single_template($single) {
	global $wp_query, $post;

	/**
	 * Checks for single template by category
	 * Check by category slug and ID
	 */
	foreach((array)get_the_category() as $cat) :

		if(file_exists(SINGLE_PATH . '/single-' . $cat->slug . '.php'))
			return SINGLE_PATH . '/single-' . $cat->slug . '.php';

		elseif(file_exists(SINGLE_PATH . '/single-' . $cat->term_id . '.php'))
			return SINGLE_PATH . '/single-' . $cat->term_id . '.php';

		else return 'single.php';

	endforeach;
}