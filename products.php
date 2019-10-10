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
?>

<main>
	<div class="container-fluid product-range">
		<div class="row">
			<?php
			$args = array(
                'category_name' => 'product,product_master'
                );
			query_posts($args);
			if ( have_posts() ) :
			while (have_posts()) { the_post();    ?>

			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 product-item text-center">
				<img src="<?php the_post_thumbnail_url(  );?>" height="335" width="299" alt="" class="product-img">
				<div class="product-info">
					<p class="product-title">
						<?php the_title();?>
					</p>
					<a class="link d-inline-flex align-items-center font-size-auto" href="<?php the_permalink()?>">
						ПОДРОБНЕЕ
						<i data-feather="arrow-right"></i>
					</a>
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