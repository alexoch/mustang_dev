<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: Adverts
 *
 * */

get_header();

?>
<main>
	<div class="container-fluid product-range">
		<div class="row">
			<?php

			query_posts('category_name=adverts&order=DSC');
			if ( have_posts() ) :

				while (have_posts()) { the_post();    ?>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 product-item text-center">
                        <img src="img/ad/3240431718.jpg" height="335" width="299" alt="" class="product-img">
                        <div class="product-info">
                            <p class="product-title">
                                Рекламно-сувенирная <br> продукция #1
                            </p>
                            <a class="link d-inline-flex align-items-center font-size-auto" href="#">
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