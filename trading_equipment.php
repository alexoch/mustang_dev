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

		<?php

		query_posts('category_name=product&order=DSC');


		while (have_posts()) {
		the_post();
		?>
			<a data-fancybox="gallery" href="img/trading equipment/1.jpg" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 product-item text-center product-big">
				<img src="img/trading equipment/1.jpg" height="335" width="299" alt="" class="product-img">
				<div class="product-info">
					<p class="product-title">
						Стеллаж #1
					</p>
				</div>
			</a>


		<?php }
		?></div>
	</div>
</main>

<?php
get_footer();

?>
