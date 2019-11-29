<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: Sales
 *
 * */

get_header();

?>

<main>
    <div class="container-fluid border-tp border-bt" style="display: none;">
        <div class="row">
            <div class="container col-12 mt-4 mb-4">
                <h5 class="font-weight-bold mb-0 text-uppercase">
                    Акции
                </h5>
            </div>
        </div>
    </div>

    <div class="container shares">
		<?php
		query_posts('category_name=sales&order=DSC');
		if (have_posts()) :

			while (have_posts()) {
				the_post(); ?>

                <div class="row shares-item mt-4 mb-3 ml-auto mr-auto">

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h4 class="shares-title font-weight-bold">
	                        <?php the_title();?>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-right">
                        <p class="shares-date">
	                        <?php the_date();?>
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <img src="<?php the_post_thumbnail_url();?>" alt="" class="shares-img" style="width: 33%;"/>
                    </div>
                    <div class="col-12">
                        <p class="shares-text"><?php the_content();?></p>
                    </div>
                </div>

                <div class="row shares-br m-auto"></div>


				<?php
			};
		endif;
		wp_reset_query();
		?>

    </div>
</main>

<?php

get_footer();

?>

