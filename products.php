<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
/**
 * Template Name: Products
 *
 * */
get_header();
if (have_posts()) :
	while (have_posts()) {
		the_post();
		?>

        <main>
            <div class="container-fluid product-range">
                <div class="row"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="product-range-img"></div>
                <div class="row">
					<?php
					$args = [
						'category_name'  => 'product,product_master',
						'posts_per_page' => -1,
						'order'          => "ASC"
					];
					query_posts($args);
					if (have_posts()) :
						while (have_posts()) {
							the_post(); ?>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product-item text-center">
                                <?php if(has_tag("latest")):?>
                                <span class="new_prod">
                                    new
                                </span>
                                <?php endif;?>
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
					endif;
					wp_reset_query();
					?>

                </div>
            </div>
        </main>
		<?php
	};endif;
get_footer();
?>