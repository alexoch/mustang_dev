<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
/**
 * Template Name: Main
 *
 * */
get_header();

if (have_posts()) :
	while (have_posts()) {
		the_post();
		?>
        <main>
            <div class="back">
                <img src="<?php the_field("desktop_img"); ?>" alt="<?php the_title(); ?>" class="desktop">
                <img src="<?php the_field("mobile_img"); ?>" alt="<?php the_title(); ?>" class="mobile">
            </div>
        </main>
		<?php
	}
endif;
get_footer();
?>