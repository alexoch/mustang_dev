<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 06/09/2019
 * Time: 18:41
 */

/**
 * Template Name: Distributors
 *
 * */

get_header();
?>

<main>
	<div class="container-fluid distributors">
		<div class="row">
			<a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 distributors-item d-flex justify-content-around align-items-center flex-column text-center" href="http://mustang.sportquest.com.ua/wp-content/uploads/2019/11/catalog-mustang.pdf">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/pdf.png" alt="" class="distributors-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/pdf.png" class="distributors-img-hover" />
				<h6 class="distributors-title">
					Каталог <br> скачать pdf
				</h6>
			</a>
			<a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 distributors-item d-flex justify-content-around align-items-center flex-column text-center" href="http://mustang.sportquest.com.ua/souvenirs/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/souvenir.png" alt="" class="distributors-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/souvenir.png" class="distributors-img-hover" />
				<h6 class="distributors-title">
					Рекламно - сувенирная <br> продукция
				</h6>
			</a>
			<a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 distributors-item d-flex justify-content-around align-items-center flex-column text-center" href="http://mustang.sportquest.com.ua/trading-equipment/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/equipment.png" alt="" class="distributors-img">
				<img src="<?php echo get_template_directory_uri(); ?>/distributors/equipment.png" class="distributors-img-hover" />
				<h6 class="distributors-title">
					Торговое <br> оборудование
				</h6>
			</a>
			<a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 distributors-item d-flex justify-content-around align-items-center flex-column text-center" href="http://mustang.sportquest.com.ua/sales">
				<img src="<?php echo get_template_directory_uri(); ?>/img/distributors/stock.png" alt="" class="distributors-img-hover" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/distributors/stock.png" alt="" class="distributors-img" />
                <h6 class="distributors-title">
					Акции
				</h6>
			</a>
		</div>
	</div>
</main>


<?php

get_footer();

?>

