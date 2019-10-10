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
                            <ul>
                                <li class="use-active"><a href="">Строительство / Ремонт</a></li>
                                <li><a href="">Дом / Сад</a></li>
                                <li><a href="">Упаковка</a></li>
                                <li><a href="">Промышленность</a></li>
                                <li><a href="">Вентиляция / Отопление</a></li>
                                <li><a href="">Кондиционирование</a></li>
                                <li><a href="">Дизайн</a></li>
                                <li><a href="">Авто / Мото</a></li>
                                <li><a href="">Реклама / Издательское дело</a></li>
                                <li><a href="">Ремесленничество / Хобби</a></li>
                                <li><a href="">Изоляция / Герметизация</a></li>
                                <li><a href="">Выставки</a></li>
                                <li><a href="">Защита поверхностей</a></li>
                            </ul>

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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prodducts/10.jpg">
                                <a class="use-link"
                                   href="http://mustang.sportquest.com.ua/2019/09/03/%d0%b0%d1%80%d0%bc%d0%b8%d1%80%d0%be%d0%b2%d0%b0%d0%bd%d0%bd%d0%b0%d1%8f-%d0%ba%d0%bb%d0%b5%d0%b9%d0%ba%d0%b0%d1%8f-%d0%bb%d0%b5%d0%bd%d1%82%d0%b0/">
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