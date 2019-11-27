<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
get_header();
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php home_url();?>">Главная</a></li>
        <li class="breadcrumb-item"><a href="<?php echo get_home_url().'/products';?>">Продукция</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
    </ol>
</nav>
<main>
    <div class="container-fluid product__main border-bt">
		<?php
		while (have_posts()) {
		the_post();
		?>
        <div class="row product__section border-bt">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 text-center">
                <h1 class="product__title">
					<?php the_title(); ?>
                </h1>
				<?php
				if (!empty(get_field("galereya"))) {
					the_field("galereya");
				} else {
					echo "<img src=\"" . get_the_post_thumbnail_url() . "\" alt=\"\" class=\"product__present\">";
				}
				?>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-1  text-center">
                <h3 class="product__title product__title--article">
                    Преимущества
                </h3>
                <div class="text-left product__used--text">
					<?php the_field("pros"); ?>
                </div>
            </div>
        </div>
        <div class="row product__section product__description border-bt" style="">
            <div class="col-12 text-center">
                <h3 class="product__title anc" style="" onclick="myFunction()">
                    Детальное описание <img
                            src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/11/58f8bcf70ed2bdaf7c128307.png"
                            alt="" style="    width: 22px;
    position: relative;
    left: -4px;">
                </h3>
                <div class="col-12 text-justify ans" id="ans">
					<?php the_content(); ?>
                </div>
                <script>
                    function myFunction() {
                        document.getElementById("ans").style.display = "block";
                    }
                </script>
            </div>
        </div>
        <div class="row product__used border-bt" style="background-color:     #f2f2f2;">

            <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6 ">
                <img src="<?php the_field("application_pic"); ?>" alt=""
                     class="product__used--img">
            </div>
            <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6" style="flex-direction: column;">
                <h3 class="product__title product__title--article">
                    Применение
                </h3>
                <div class="product__used--text ">
					<?php the_field("application"); ?>
                </div>

            </div>
        </div>
        <div class="row product__section product__sizes border-bt ">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--article">
                    Номенклатура
                </h3>
            </div>
            <div class="col-12 text-center overflow-auto">
				<?php the_field("sizes"); ?>
            </div>
        </div>

        <div class="row product__section product__example" style="
                ">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--articles">
                    Скачать документы
                </h3>
            </div>
            <?php if(!empty(get_field("documents"))) {
                ?>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 offset-2 text-center product_docs">
                <?php the_field("documents");?>
            </div>
                <?
            }   else{
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 offset-2 product-item text-center">
                    <a href="<?php the_permalink() ?>" style="color: white;">
                        Скачать документ
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product-item text-center">
                    <a href="<?php the_permalink() ?>" style="color: white;">
                        Скачать документ
                    </a>
                </div>
            <?php
            }
             ?>


        </div>
    </div>
	<?php }
	?>

</main>
<?php
get_footer();
?>
