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
                                <input type="text" id="subsearch" name="subsearch" placeholder="поиск по применению"/>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid product-range">
                    <div class="row">
                    <?php
	                /* Start the Loop */
	                while ( have_posts() ) :
		                the_post();
	                ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product-item text-center">
                                <a href="<?php the_permalink() ?>">
                                    <div class="product-info">
                                        <p class="product-title">
					                        <?php the_title(); ?>
                                        </p>
                                    </div>
                                    <img src="<?php the_post_thumbnail_url(); ?>" height="335" width="299" alt=""
                                         class="product-img">
                                </a>
                            </div>


                    <?php endwhile;?>
                    </div>
                    </div>
                </div>
            </div>
        </main>

		<?php

get_footer();

?>