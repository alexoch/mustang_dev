<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
/*
* Category Template: product_master
*/

get_header();
if (have_posts()) :
	?>

    <main>
        <div class="container shares">
            <div class="row shares-item mt-4 mb-3 ml-auto mr-auto">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h4 class="shares-title font-weight-bold">
						<?php the_title(); ?>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-right">
                    <p class="shares-date">
						<?php the_date(); ?>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="shares-img"/>
                </div>
                <div class="col-12">
                    <p class="shares-text"><?php the_content(); ?></p>
                </div>
            </div>
            <div class="row shares-br m-auto"></div>
        </div>
    </main>


<?php
endif;
get_footer();