<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 * Template Name: Trading equipment
 * */
get_header();
?>
<main>
    <div class="container-fluid product-range">
        <div class="row">
	        <?php
	        query_posts('category_name=stands&order=DSC');
	        if (have_posts()) :
	        while (have_posts()) {
		        the_post(); ?>
                <a data-fancybox="gallery"
                   href="<?php the_post_thumbnail_url();?>"
                   class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 text-center distributors-item">
                    <div class="trade_product">
                        <div class="trade_product-img">
                            <img src="<?php the_post_thumbnail_url();?>"
                                  alt="" >
                        </div>
                    </div>
                </a>
		        <?php
	        };
            endif;
            wp_reset_query();
            ?>
</main>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
<?php
get_footer();
?>
