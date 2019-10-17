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
if ( have_posts() ) :

	while (have_posts()) {
		the_post();
		$master_id=get_the_ID();
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
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 text-center">
                    </div>

					<?php

					query_posts('category_name=product_sub&order=DSC');
					if (have_posts()) :

						while (have_posts()) {

							the_post();
							var_dump(get_field("master"));
                            echo get_field("master")->id." ".$master_id;
							//if (get_field("master")==$master_id){
							?>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 product-item text-center">
                                <img src="<?php the_post_thumbnail_url(); ?>" height="335" width="299" alt=""
                                     class="product-img">
                                <div class="product-info">
                                    <p class="product-title">
										<?php the_title(); ?>
                                    </p>
                                    <a class="link d-inline-flex align-items-center font-size-auto"
                                       href="<?php the_permalink() ?>">
                                        ПОДРОБНЕЕ
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
							<?php
							//};
						};
					endif;
					wp_reset_query();
					?>
                </div>
                <div class="row product__section product__used border-bt">
                    <div class="col-12 text-center">
                        <h3 class="product__title product__title--article">
                            Применение
                        </h3>
                    </div>
                    <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/description product/descript.png"
                             alt="" class="product__used--img">
                    </div>
                    <div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6" style="flex-direction: column;">
                        <p class="product__used--text ">
                            Армированная лента не только прочна, имеет высокую клейкость, устойчива к влиянию влаги, но
                            и обладает отличными диэлектрическими качествами, что обуславливает ее широкое применение в
                            различных областях:


                        </p>
                        <ul>
                            <li>для герметизации сантехнического оборудования, труб, фитингов;

                            </li>
                            <li> для склеивания гидроизоляционных материалов;

                            </li>
                            <li> с целью герметизации различных швов, стыков, щелей;

                            </li>
                            <li> в качестве изоляционного материала для защиты кабельно-проводниковой продукции;

                            </li>
                            <li> при проведении мелких ремонтных работ;

                            </li>
                            <li> для упаковки тяжелой тары;

                            </li>
                            <li> в качестве средства контрольного оклеивания.
                            </li>

                        </ul>

                    </div>
                </div>

                <div class="row product__section product__example">
                    <div class="col-12 text-center">
                        <h3 class="product__title product__title--articles">
                            Пример использования
                        </h3>
                    </div>
                    <div class="col-12 text-center">
                        <iframe src="https://www.youtube.com/embed/4B2HtYH2dlQ" style="width: 65%; height: 65vh;"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </main>
		<?php
	}
	endif;
get_footer();

?>