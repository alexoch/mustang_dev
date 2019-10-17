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
    <div class="container-fluid product__main border-bt">
		<?php
		while (have_posts()) {
		the_post();
		?>
        <div class="row product__section border-bt">
            <div class="col-6 text-center">
                <h1 class="product__title">
					<?php the_title(); ?>
                </h1>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="product__present">
            </div>
            <div class="col-6 text-center">
                <h3 class="product__title product__title--article">
                    Преимущества
                </h3>
                <?php the_field("pros");?>
                <ul class="text-left">
                    <li>Предлагаемая лента малярная имеет отлично подобранный клеевой состав, благодаря которому хорошо
                        прилипает к разным поверхностям, но легко и бесследно удаляется с них.
                    </li>
                    <li>
                        Эти качества скотч сохраняет в течение длительного времени и может эксплуатироваться в условиях
                        повышенных температур.

                    </li>
                    <li>
                        Малярный скотч цена которого отличается демократичностью, демонстрирует повышенные прочностные
                        показатели на уровне дорогостоящих аналогов.
                    </li>
                    <li>
                        Возможно нанесение логотипа.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row product__section prouct__description border-bt" style="">
            <div class="col-12 text-center">
                <style>
                    .ans {
                        display: none;
                    }

                    .anc:hover ~ .ans {
                        /*display: block;*/
                    }

                </style>
                <h3 class="product__title anc" style="" onclick="myFunction()">
                    Детальное описание <img src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/09/Arrow-Circle-Down-16.png" alt="" style="width: 15px;">
                </h3>
                <div class="col-12 text-left ans" id="ans">
					<?php the_content(); ?>
                </div>
                <script>
                    function myFunction() {
                        document.getElementById("ans").style.display= "block";
                    }
                </script>
            </div>
        </div>
        <div class="row product__section product__used border-bt" style="background-color:     #f2f2f2;">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--article">
                    Применение
                </h3>
            </div>
            <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/description product/descript.png" alt=""
                     class="product__used--img">
            </div>
            <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6" style="flex-direction: column;">
                <p class="product__used--text ">
                    <?php the_field("application");?>
                </p>

            </div>
        </div>
        <div class="row product__section product__sizes border-bt">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--article">
                    Номенклатура
                </h3>
            </div>
            <div class="col-12 text-center">
                <?php the_field("sizes");?>
            </div>
            <!--div class="col-12">
                <ul class="product__colors" style="display: none;">
                    <li>
                        <div class="product__colors--color red"></div>
                        <span>Червоний</span>
                    </li>
                    <li>
                        <div class="product__colors--color blue"></div>
                        <span>Синій</span>
                    </li>
                    <li>
                        <div class="product__colors--color yellow"></div>
                        <span>Жовтий</span>
                    </li>
                    <li>
                        <div class="product__colors--color orange"></div>
                        <span>Помаранчевий</span>
                    </li>
                    <li>
                        <div class="product__colors--color brown"></div>
                        <span>Коричневий</span>
                    </li>
                    <li>
                        <div class="product__colors--color black"></div>
                        <span>Чорний</span>
                    </li>
                    <li>
                        <div class="product__colors--color green"></div>
                        <span>Зелений</span>
                    </li>
                    <li>
                        <div class="product__colors--color multi">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="blue"></div>
                            <div class="green"></div>
                        </div>
                        <span>Райдуга</span>
                    </li>
                </ul>
            </div-->
        </div>
        <style type="text/css">
            .back{display: block;
                height: 80.2%;
                position: absolute;
                width: 100%;
                background: url(<?php echo get_template_directory_uri();?>/img/main_back4.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position-x: 13%;
                opacity: 0.3;
            }
        </style>
        <div class="back"></div>

        <div class="row product__section product__example" style="
                ">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--articles">
                    Пример использования
                </h3>
            </div>
            <div class="col-12 text-center">
                <?php the_field("usage_example")?>
            </div>
        </div>
    </div>
	<?php }
	?>

</main>

<?php
get_footer();

?>
