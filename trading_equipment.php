<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: Trading equipment
 *
 * */
get_header();
?>
<main>
    <div class="container-fluid border-tp">
        <div class="row">
            <div class="container col-12 mt-4 mb-4">
                <h5 class="font-weight-bold mb-0 text-uppercase">
                    Торговое оборудование
                </h5>
            </div>
        </div>
    </div>

    <div class="container-fluid product-range">
        <div class="row">
            <a data-fancybox="gallery" href="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0221-1.jpg"
               class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center trade_product">
                <img src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0221-1.jpg" height="335"
                     width="299" alt="" class="product-img">
                <div class="product-info">
                    <p class="product-title">
                        Стеллаж #1
                    </p>
                </div>
            </a>
            <!--a data-fancybox="gallery" href="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0196-1.jpg"
               class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 product-item text-center product-big">
                <img src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0196-1.jpg" height="335"
                     width="299" alt="" class="product-img">
                <div class="product-info">
                    <p class="product-title">
                        Стеллаж #2
                    </p>
                </div>
            </a-->
            <a data-fancybox="gallery" href="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0123-1.jpg"
               class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center trade_product">
                <div style="position: relative;">
                <img src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0123-1.jpg" height="335"
                     width="299" alt="" class="product-img" style=" position: absolute;
  top: 50%;
  transform: translateY(-50%);">
                </div>

                <div class="trade_product-info">
                    <p class="trade_product-title">
                        Стеллаж #3
                    </p>
                </div>
            </a>
            <a data-fancybox="gallery" href="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0102-1.jpg"
               class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 text-center trade_product">
                <div style="">
                    <img src="http://mustang.sportquest.com.ua/wp-content/uploads/2019/10/dsc_0102-1.jpg" height="335"
                          width="299" alt="" class="product-img">
                </div>
                <div class="trade_product-info">
                    <p class="trade_product-title">
                        Стеллаж #4
                    </p>
                </div>
            </a>

        </div>
</main>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<?php
get_footer();

?>
