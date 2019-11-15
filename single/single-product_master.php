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

	while (have_posts()) {
		the_post();
		define("MASTER_ID",get_the_ID());
		?>
        <main>
            <div class="container-fluid product-range">
                <div class="row product__section product__used ">
                    <div class="col-12 text-center">
                        <h3 class="product__title product__title--article">
							<?php the_title(); ?>
                        </h3>
                    </div>
                </div>
                <div class="row ">
					<?php
					$posts = get_posts('category_name=product_sub&order=ASC&posts_per_page=-1');
					foreach ($posts as $post) {
						setup_postdata($post);

						if (get_field("master")[0] == MASTER_ID) {
							?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product-item text-center">
                                <a href="<?php the_permalink() ?>">
                                    <div class="product-info">
                                        <p class="product-title">
											<?php the_title(); ?>
                                        </p>
                                    </div>
                                    <img src="<?php the_post_thumbnail_url(); ?>" height="335" width="299" alt=""
                                         class="product-img">
                                </a>
                            </div>
							<?php
						};
					};

					wp_reset_postdata();
					?>
                </div>
                <div class="row product__section product__used border-bt">

                    <div class="col-12 text-justify">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>

        </main>
		<?php
	}
endif;
get_footer();

?>