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
?>

<main>
	<div class="container-fluid use">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 submenu">
				<h5 class="submenu-title text-center">
					ПРИМЕНЕНИЕ
				</h5>

				<div class="submenu-nav">
					<?php
					$menu_name = "application";
					$menu_items = wp_get_nav_menu_items( $menu_name );

					$menu_list = '<ul id="menu-' . $menu_name . '">';
					foreach ( (array) $menu_items as $key => $menu_item ){
						if(get_page_link()!=$menu_item->url ){
							$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
						}else{
							$menu_list .= '<li class="use-active"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
						}
					}
					$menu_list .= '</ul>';
					echo $menu_list;
					?>

                    <form class="submenu-search">
						<button id="subsearch">
							<i data-feather="search"></i>
						</button>
						<input type="text" id="subsearch" name="subsearch" placeholder="поиск по применению" />
					</form>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 use-description">
				<div class="row use-video">
					<?php the_content();?>
				</div>
				<div class="row" style="padding: .5em 0;">

					<?php
					$menu_name = "application";
					$menu_items = wp_get_nav_menu_items( $menu_name );
					foreach ( (array) $menu_items as $key => $menu_item ){
						$menu_list='<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center">';

                        $menu_list .= '<a href="' . $menu_item->url . '"><img src="' . the_field('term_image', 'tag_'.$menu_item->id) . '"></a>';
						$menu_list.='</div>';
					}
					echo $menu_list;
					?>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center">
						<img src="<?php the_field('term_image', 'tag_11'); ?>" alt="">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center">
						<img src="<?php echo get_template_directory_uri() ;?>/img/used/2.jpg">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center">
						<img src="<?php echo get_template_directory_uri() ;?>/img/used/3.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();

?>
