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
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xl-offset-1  text-center">
                <h3 class="product__title product__title--article">
	                <?php pll_e('Преимущества');?>
                </h3>
                <div class=" product__used--text">
					<?php the_field("pros"); ?>
                </div>
            </div>
        </div>
        <div class="row product__section product__description border-bt" style="">
            <div class="col-12 text-center">
                <h3 class="product__title anc" style="" onclick="myFunction()">
	                <?php pll_e('Детальное описание');?> <img
                            src="<?php echo home_url();?>/wp-content/uploads/2019/11/58f8bcf70ed2bdaf7c128307.png"
                            alt="" style="    width: 22px;
    position: relative;
    left: -4px;" id="ansimg">
                </h3>
                <div class="col-12 text-justify ans" id="ans">
					<?php the_content(); ?>
                </div>
                <script>
                    function myFunction() {
                        if(document.getElementById("ans").style.display == "block"){
                            document.getElementById("ans").style.display = "none";
                            document.getElementById("ansimg").style.transform="initial";
                        }else{
                            document.getElementById("ans").style.display = "block";
                            document.getElementById("ansimg").style.transform= "rotate(180deg)";
                        }

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
	                <?php pll_e('Применение');?>
                </h3>
                <div class="product__used--text ">
					<?php the_field("application"); ?>
                </div>

            </div>
        </div>
        <div class="row product__section product__sizes border-bt ">
            <div class="col-12 text-center">
                <h3 class="product__title product__title--article">
	                <?php pll_e('Номенклатура');?>
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
	                <?php pll_e('Скачать документы');?>
                </h3>
            </div>
			<?php
			$file = get_field('pasport');
			if ($file):
				// vars
				$url1 = $file['url'];
				$title = $file['title'];

			endif;
			$file = get_field('pasport_bezopasnosti');
			if ($file):
				// vars
				$url2 = $file['url'];
				$title = $file['title'];

			endif; ?>

            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-3 text-center offset-xl-3">
                <div class="row">
                    <div class=" col-12 col-sm-12  col-xl-11 product-item ">

                        <a href="<?php echo $url1; ?>" style="color: white;">
                            <div><?php pll_e('Паспорт продукта');?> </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png"
                                 alt="" style="width: 50px;margin: 10px 0;">
                            <div><?php pll_e('скачать');?></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-3 text-center  ">
                <div class="row">
                    <div class=" col-12 col-sm-12 offset-xl-1 col-xl-11 product-item ">
                        <a href="<?php echo $url2; ?>" style="color: white;">
                            <div><?php pll_e('Паспорт безопасности');?></div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/1200px-PDF_file_icon.svg.png"
                                 alt="" style="width: 50px;margin: 10px 0;">
                            <div><?php pll_e('скачать');?></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <span class="hints">
    <?php
    foreach (get_field('next_product') as $k=>$v){
    $post_data = get_post(  $v);
        ?>
        <div class="hint product-item text-center">
            <a href="<?php echo $post_data->guid; ?>">
                <div class="product-info">
                    <p class="also">
                       <?php pll_e('Также посмотрите:');?>
                    </p>
                    <p class="product-title">
					    <?php echo $post_data->post_title;  ?>
                    </p>
                </div>
                <img src="<?php echo get_the_post_thumbnail_url($v); ?>" height="335" width="299" alt=""
                     class="product-img">
            </a>
        </div>
	<?php
    }?>
    </span>

        <?php
    }
	?>
</main>
<script>
    function showHint(){
        console.log($('.hint').css('display')+' '+$('.hint:first-child').css('display')+' '+$('.hint:last-child').css('display'));

        if($('.hint:first-child').css('display') == 'none' ){
            $('.hint:last-child').hide();
            $('.hint:first-child').css('display',"flex") ;
        }else{
            $('.hint:first-child').hide();
            $('.hint:last-child').css('display',"flex");
        }
    }
    setInterval(showHint, 10000);
</script>
<?php
get_footer();
?>
