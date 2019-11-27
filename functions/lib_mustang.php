<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 27/11/2019
 * Time: 10:25
 */


function mustang_scripts()
{
	wp_enqueue_style('style-name1', get_template_directory_uri() . '/scss/fonts.css');
	wp_enqueue_style('style-name2', get_template_directory_uri() . '/scss/main_slider.css');
	wp_enqueue_style('style-name3', get_template_directory_uri() . '/scss/style.css');

	if (is_single()) {
		wp_enqueue_style('style-name4', get_template_directory_uri() . '/scss/product.css');
	}
	if (is_page_template('products.php') || is_page_template('trading_equipment.php') || is_page_template('ad-products.php')) {
		wp_enqueue_style('style-name5', get_template_directory_uri() . '/scss/product.css');


	}

	if (is_page_template('about.php')) {
		wp_enqueue_style('style-name7', get_template_directory_uri() . '/scss/about.css');
	}

	if (is_page_template('contacts.php')) {
		wp_enqueue_style('style-name7', get_template_directory_uri() . '/scss/contacts.css');
		wp_enqueue_style('style-name8', get_template_directory_uri() . '/css/contacts.css');
	}

	if (is_page_template('distributors.php')) {
		wp_enqueue_style('style-name7', get_template_directory_uri() . '/scss/distributors.css');
	}

	if (is_page_template('sales.php') || is_page_template('search.php')) {
		wp_enqueue_style('style-name9', get_template_directory_uri() . '/scss/shares.css');
	}

	if (is_page_template('application.php') || is_tag()) {
		wp_enqueue_style('style-name6', get_template_directory_uri() . '/scss/use.css');
	}
}

function change_menu_item_css_classes($classes, $item, $args, $depth)
{

	$classes = ['nav__item'];

	return $classes;
}

function add_menuclass($ulclass)
{
	return preg_replace('/<a /', '<a class="nav__item--text"', $ulclass);
}


class Primary_Walker_Nav_Menu extends Walker_Nav_Menu
{

// Displays start of a level. E.g '<ul>'

	// Displays end of a level. E.g '</ul>'
	// @see Walker::end_lvl()
	function end_lvl(&$output, $depth = 0, $args = [])
	{
		$output .= "</ul>\n";
	}


	// Displays end of an element. E.g '</li>'
	// @see Walker::end_el()
	function end_el(&$output, $item, $depth = 0, $args = [])
	{
		$output .= "</li>\n";
	}


	function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
	{
		if (array_search('menu-item-has-children', $item->classes)) {
			$output .= sprintf("\n<li class='dropdown %s'><a href='%s' class=\"dropdown-toggle\" data-toggle=\"dropdown\" >%s</a>\n", (array_search('current-menu-item', $item->classes) || array_search('current-page-parent', $item->classes)) ? 'active' : '', $item->url, $item->title
			);
		} else {
			$output .= sprintf("\n<li class='nav-item' %s><a href='%s' class='nav-link' >%s</a>\n", (array_search('current-menu-item', $item->classes)) ? ' class="active nav-link"' : 'class="nav-link"', $item->url, $item->title);
		}
	}

}

/**
 * Single template function which will choose our template
 */
function my_single_template($single)
{
	global $wp_query, $post;

	/**
	 * Checks for single template by category
	 * Check by category slug and ID
	 */
	foreach ((array)get_the_category() as $cat) :

		if (file_exists(SINGLE_PATH . '/single-' . $cat->slug . '.php'))
			return SINGLE_PATH . '/single-' . $cat->slug . '.php';

		else if (file_exists(SINGLE_PATH . '/single-' . $cat->term_id . '.php'))
			return SINGLE_PATH . '/single-' . $cat->term_id . '.php';

		else return SINGLE_PATH . '/single.php';

	endforeach;
}

function my_gallery_output($output, $attr)
{
	$ids_arr = explode(',', $attr['ids']);
	$ids_arr = array_map('trim', $ids_arr);

	$pictures = get_posts([
		'posts_per_page' => -1,
		'post__in'       => $ids_arr,
		'post_type'      => 'attachment',
		'orderby'        => 'post__in',
	]);

	if (!$pictures) return 'Запрос вернул пустой результат.';

	// Вывод
	$out = '<dl class="gallery_photos">';

	// Выводим каждую картинку из галереи
	foreach ($pictures as $pic) {
		$src = $pic->guid;
		$t = esc_attr($pic->post_title);
		$title = ($t && false === strpos($src, $t)) ? $t : '';
		$out .= '
		<dt>
			<img src="' . $src . '" alt="' . $title . '" />' .
			'</dt>';
	}

	$video_url=get_field("usage_example",get_post_ancestors($ids_arr[0])[0]);
	if(!empty($video_url)){
		$out.='<dt>'.$video_url.'</dt>';
	}

	$out .= '</dl>';
	;

	return $out;
}