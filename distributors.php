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
			<?php
			$args = [
				'category_name'  => 'distributors',
				'posts_per_page' => -1,
				'order'          => "DSC"
			];
			query_posts($args);
			if (have_posts()) :
				while (have_posts()) {
					the_post(); ?>

                    <a class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 distributors-item d-flex justify-content-around align-items-center flex-column text-center"
                       href="<?php echo get_field("address"); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="distributors-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="distributors-img-hover"/>
                    </a>

				<?php }; endif; ?>

        </div>
    </div>
</main>


<?php

get_footer();

?>

