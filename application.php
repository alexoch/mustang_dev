<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: Application of products
 *
 * */
get_header();
if ( have_posts() ) :
while (have_posts()) {
	the_post();
	?>

    <main>
        <div class="container-fluid use">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 submenu">
                    <div class="submenu-nav">
						<?php
						$menu_name = "application";
						$menu_items = wp_get_nav_menu_items($menu_name);

						$menu_list = '<ul id="menu-' . $menu_name . '">';
						foreach ((array)$menu_items as $key => $menu_item) {
							if (get_page_link() != $menu_item->url) {
								$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
							} else {
								$menu_list .= '<li class="use-active"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
							}
						}
						$menu_list .= '</ul>';
						echo $menu_list;
						?>

                        <form class="submenu-search" method="GET" action="<?php echo home_url(); ?>/search">
                            <button id="subsearch">
                                <i data-feather="search"></i>
                            </button>
                            <input type="text" id="subsearch" name="s" placeholder="<?php pll_e("поиск по применению");?>"/>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 use-description">
                    <div class="row use-video ">
                        <iframe width="860"
                                height="500"
                                src="https://www.youtube.com/embed/Bxm5SN4kpRo"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="row" style="padding: .5em 0;">
						<?php
						$menu_name = "application";
						$tag_items = wp_get_nav_menu_items($menu_name);
						$tag_list = '';
						foreach ((array)$tag_items as $key => $tag_item) {
							$tag_list  .= '<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center no-padd-mobile">';
							$tag_list  .= '<a  href="' . $tag_item->url . '" class="use-list-item">';
							//echo $tag_item->title."<br>";
							$term = get_term_by('name',$tag_item->title , 'post_tag');
							//var_dump($term);
							$tag_list .='<img  src="' . get_field('term_image', 'post_tag_' . $term->term_id) . '" alt="">';
							$tag_list .='</a>';
							$tag_list  .= '</div>';
						}
						echo $tag_list;
						?>
                    </div>
                </div>
            </div>
        </div>
    </main>

	<?php
}
endif;
get_footer();

?>
