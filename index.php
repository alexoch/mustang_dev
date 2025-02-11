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
        <div class="back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main_photo-4.png" style="width: 100%;" alt=""
                 class="desktop">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/main_mobile.png" style="width: 100%;" alt=""
                 class="mobile">
        </div>
    </main>

<?php
get_footer();
?>