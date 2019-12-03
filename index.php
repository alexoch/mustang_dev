<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Mustang Tape
 */
get_header();

?>

<main>
	<style type="text/css">
		.back{display: block;
			height: 80.2%;
			position: absolute;
			width: 100%;
			background: url(<?php echo get_template_directory_uri();?>/img/main_back4.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position-x: 13%;
			opacity: 0.3;
		}
	</style>
	<div class="back"></div>
	<div class="main-slider" >
<?php

query_posts('category_name=main-slider&order=DSC');
if ( have_posts() ) :

	while (have_posts()) { the_post();    ?>

        <div class="slide container-fluid">

			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-2 col-xl-4 d-flex align-items-center">
					<div class="slide-content">
						<h1 class="slide-title">
                            <?php the_title();?>
						</h1>
						<p class="slide-text">
							<?php echo get_the_excerpt();?>
						</p>
						<p class="slide-price" style="visibility: hidden;">
							241.20<sup>грн/12 шт. в уп.</sup>
						</p>
						<a class="link d-inline-flex align-items-center" href="<?php the_permalink();?>">
							ПОДРОБНЕЕ
							<i data-feather="arrow-right"></i>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-end justify-content-end p-0">
					<img src="<?php the_post_thumbnail_url(); ?>" class="slide-img">
				</div>
			</div>
		</div>
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