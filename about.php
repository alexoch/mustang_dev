<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: About Page
 *
 * */

get_header();
while (have_posts()) {
	the_post();
	?>
    <main>
        <div class="container-fluid about ">
            <div class="row about-text">
                <style type="text/css">
                    .about-text{
                        background: url(<?php the_post_thumbnail_url(  );?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position-x: 13%;
                    }
                </style>
                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
                    <div style="    background-color: #0068c3c2!important;
                        padding: 50px;
                        color: white;">
                        <?php the_field("main_text");?>
                    </div>
                </div>
            </div>

            <div class="row about-graph border-bt border-tp">
                <div class="timeline">


	                <?php
                    $i=0;
	                $posts = get_posts('category_name=history&order=ASC&posts_per_page=-1');
	                foreach ($posts as $post) {
		                setup_postdata($post);
		                $order =($i%2) ? "right":"left";
		                $i++;
		                ?>


                        <div class="containe <?php echo $order;?>">
                            <div class="content">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo wp_strip_all_tags( get_the_content() );?></p>
                            </div>
                        </div>

		                <?php
	                }

	                wp_reset_postdata();
	                ?>


                    <!--div class="containe right">
                        <div class="content">
                            <h2>1997 </h2>
                            <p>Основание ТМ Mustang. Запуск линейки продукции ТМ Mustang.</p>
                        </div>
                    </div>
                    <div class="containe left">
                        <div class="content">
                            <h2>1998-2005</h2>
                            <p>Расширение ассортимента продукции ТМ Mustang. Построение системы дистрибуции ТМ Mustang в
                                Украине</p>
                        </div>
                    </div>
                    <div class="containe right">
                        <div class="content">
                            <h2>2013</h2>
                            <p>Начало экспорта продукции ТМ Mustang в страны СНГ</p>
                        </div>
                    </div>
                    <div class="containe left">
                        <div class="content">
                            <h2>2015</h2>
                            <p>Полный ребрендинг и запуск новой упаковки продукции ТМ Mustang </p>
                        </div>
                    </div>

                    <div class="containe right">
                        <div class="content">
                            <h2>2016</h2>
                            <p>Запуск собственных производственных мощностей в Украине</p>
                        </div>
                    </div>

                    <div class="containe left">
                        <div class="content">
                            <h2>2017</h2>
                            <p>Расширение производственных мощностей по производству клейких лент. Запуск собственного
                                производства картонной гильзы. Запуск флексографического оборудования.</p>
                        </div>
                    </div>
                    <div class="containe right">
                        <div class="content">
                            <h2>2018</h2>
                            <p>Запуск производства и упаковки изоляционной ленты ПВХ.</p>
                        </div>
                    </div>

                    <div-- class="containe left">
                        <div class="content">
                            <h2>2019</h2>
                            <p>Полный ребрендинг и запуск новой упаковки продукции ТМ Mustang. Запуск полностью
                                автоматической упаковочной линии для клейких лент.Расширение ассортимента продукции ТМ
                                Mustang.</p>
                        </div>
                    </div-->
                </div>
            </div>
        </div>

        <div class="about-slider border-tp">
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center" >
                        <div class="slide-content">
                            <h5 class="slide-title font-weight-bold mb-5">
                                Открытость для потребителя
                            </h5>
                            <p class="slide-text"><?php the_field("sub_text");?></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 " style="padding: 0;">
                        <?php
                        if (!empty(get_field("gallery"))) {
                        the_field("gallery");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<?php
}
get_footer();

?>