<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

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
                                $locations = get_nav_menu_locations();
                                var_dump($locations);
                                $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );

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
                                <input type="text" id="subsearch" name="subsearch" placeholder="поиск по применению"/>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 use-description">
	                <?php
	                /* Start the Loop */
	                while ( have_posts() ) :
		                the_post();
	                ?>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 use-info">
                                <h3 class="use-info-title">
                                    <?php the_title();?>
                                </h3>

                                <p class="use-info-text">Склеивание:</p>
                                <ul class="use-info-list">
                                    <li>Пластиков;</li>
                                    <li>Металлов;</li>
                                    <li>Стекла;</li>
                                    <li>Керамики;</li>
                                    <li>Дерева;</li>
                                    <li>Акрилового стекла и картона;</li>
                                    <li>Склеивание разнородных материалов, металл + стекло;</li>
                                    <li>Склеивание прозрачных конструкций.</li>
                                </ul>

                                <p class="use-info-text">Это совершенно новый класс индустриальных двусторонних клейких
                                    лент. Теперь возможно обеспечивать надежное и долговременное крепление материалов в
                                    самых сложных условиях.</p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 use-product">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                                <a class="use-link" href="<?php the_permalink()?>">
                                    НА СТРАНИЦУ ПРОДУКТА
                                </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 p-0 use-wallpeper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/used/use 1.jpg">
                            </div>
                        </div>
                    <?php endwhile;?>
                    </div>
                </div>
            </div>
        </main>

		<?php

get_footer();

?>