<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

get_header();
	while (have_posts()) {
		the_post();
		?>
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


	                <?php
	                /* Start the Loop */
	                while ( have_posts() ) :
		                the_post();
		                /*
						 * Include the post format-specific template for the content. If you want to
						 * this in a child theme then include a file called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
                        echo "<h3>".get_the_title()."</h3>";
	                endwhile;
	                ?>


                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 use-description">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 use-info">
                                <h3 class="use-info-title">
                                    Двухсторонний <br> акриловый скотч
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
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 p-0 use-wallpeper">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/used/use 3.jpg">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 use-info">
                                <h3 class="use-info-title">
                                    Скотч двухсторонний <br> на тканевой основе
                                </h3>

                                <p class="use-info-text">Двухсторонний скотч на тканевой основе пригоден для склеивания
                                    изделий из стекла, бумаги, картона, дерева, пластмассы и используется во многих
                                    отраслях промышленности, а также в быту:</p>
                                <ul class="use-info-list">
                                    <li>в полиграфии, строительстве, машиностроении, швейном производстве,
                                        автомобилестроении;
                                    </li>
                                    <li>при изготовлении и монтаже рекламных конструкций;</li>
                                    <li>при проведении оформительских работ;</li>
                                    <li>в процессе изготовления и сборки мебели.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 use-product">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prodducts/1717.jpg">
                                <a class="use-link" href="products.html">
                                    НА СТРАНИЦУ ПРОДУКТА
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 use-info">
                                <h3 class="use-info-title">
                                    Изолента ПВХ
                                </h3>

                                <p class="use-info-text">Необходимость купить изоленту ПВХ прежде всего возникает в
                                    случаях проведения различных инженерно-технических работ:</p>
                                <ul class="use-info-list">
                                    <li>Пластиков;</li>
                                    <li>Металлов;</li>
                                    <li>Стекла;</li>
                                    <li>Керамики;</li>
                                    <li>для предотвращения коротких замыканий и случайного прикосновения людей в ходе
                                        электроремонтных и электромонтажных работ;
                                    </li>
                                    <li>для соединения кабельно-проводниковых изделий в процессе изготовления
                                        автомобилей, электроники и другой продукции;
                                    </li>
                                    <li>для герметизации при проведении сантехнических работ;</li>
                                    <li>с целью маркировки кабельно-проводниковой продукции.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 use-product">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prodducts/DSC_0151_b.jpg">
                                <a class="use-link" href="products.html">
                                    НА СТРАНИЦУ ПРОДУКТА
                                </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 p-0 use-wallpeper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/used/use 2.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 p-0 use-wallpeper">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/used/use 4.jpg">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 use-info">
                                <h3 class="use-info-title">
                                    Упаковочный цветной скотч
                                </h3>

                                <p class="use-info-text">В нашей компании вы можете цветной скотч купить и использовать
                                    его в следующих целях:</p>
                                <ul class="use-info-list">
                                    <li>для упаковки и маркировки отдельных грузов перед транспортировкой;</li>
                                    <li>для соединения и стабилизации консолидированных грузов;</li>
                                    <li>для организации учета различных изделий по наименованиям и типам на производстве
                                        и складах, в магазинах и офисах;
                                    </li>
                                    <li>для декоративной упаковки продукции;</li>
                                    <li>для маркировки в быту.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 use-product">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prodducts/DSC_0120_b.jpg">
                                <a class="use-link" href="products.html">
                                    НА СТРАНИЦУ ПРОДУКТА
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

		<?php
	}
get_footer();

?>