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
            .back1 {
                display: block;
                height: 100vh;
                position: absolute;
                width: 100%;
                background: black;
                opacity: 0.3;
                top: 0;
            }
            .desktop{
                display:block;
            }

            .mobile{
                display:none;
            }

            @media (max-width: 640px) and (min-width: 320px){
                .desktop{
                    display:none;
                }

                .mobile{
                    display:block;
                }
            }
        </style>
        <div class="back1">
        </div>
        <div class="back">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main_photo-4.png" style="width: 100%;" alt="" class="desktop">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/main_mobile.png" style="width: 100%;" alt="" class="mobile">
        </div>
        <!--div class="main-slider" style="display: none;">
			<?php

			query_posts('category_name=main-slider&order=DSC');
			if (have_posts()) :

				while (have_posts()) {
					the_post(); ?>

                    <div class="slide container-fluid" style="">

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-2 col-xl-4 d-flex align-items-center">
                                <div class="slide-content">
                                    <h1 class="slide-title">
										<?php the_title(); ?>
                                    </h1>
                                    <p class="slide-text">
										<?php echo get_the_excerpt(); ?>
                                    </p>
                                    <p class="slide-price" style="visibility: hidden;">
                                        241.20<sup>грн/12 шт. в уп.</sup>
                                    </p>
                                    <a class="link d-inline-flex align-items-center" href="<?php the_permalink(); ?>">
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
        </div-->
    </main>
    <style>
        .modal {
            z-index: 10;
            position: absolute;
            display: block;
            top: 30%;
            left: 50%;
            margin-left: -250px;
            width: 500px;
            height: 300px;
            background: white;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }
        .modal_logo{
            width: 300px;
            display: block;
            margin: 20px auto;
        }
        .modal_inf{
            display: block;
            text-align: center;
            width: 28%;
            border: 1px solid;
            border-radius: 15px;
            margin: 0 auto;
            background: #8080802e;
            padding: 10px;
        }

    </style>
    <div class="modal" >
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mustang" class="modal_logo">
        <div class="modal_inf">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/ru.png" alt="">
            <span>Русский язык</span>
        </div>

    </div>

<?php

get_footer();

?>