<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 06/09/2019
 * Time: 18:41
 */

/** Template Name: souvenirs
 *
 * */

get_header();
?>


<main>
    <div class="container-fluid border-tp" style="display: none;">
        <div class="row">
            <div class="container col-12 mt-4 mb-4">
                <h5 class="font-weight-bold mb-0 text-uppercase">
                    Рекламно - сувенирная продукция
                </h5>
            </div>
        </div>
    </div>

    <div class="container-fluid product-range">
        <div class="row">
			<?php
			$args = [
				'category_name'  => 'souvenirs',
				'posts_per_page' => -1,
				'order'          => "ASC"
			];
			query_posts($args);
			if (have_posts()) :
				while (have_posts()) {
					the_post(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="ad-product">
                            <div class="ad-product-pic">
                                <img src="<?php the_post_thumbnail_url(); ?>" height="335" width="299" alt=""
                                      class="ad-product-img" >
                            </div>
                            <div class="ad-product-info">
                                <p class="ad-product-title">
									<?php the_title(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
					<?php
				};
			endif;
			wp_reset_query();
			?>
        </div>
    </div>
</main>

<?php

get_footer();

?>
