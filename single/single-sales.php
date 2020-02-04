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
if (have_posts()) :
    the_post();
	?>

    <main>
        <div class="container shares">
            <div class="row shares-item mt-4 mb-3 ml-auto mr-auto">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h4 class="shares-title font-weight-bold">
						<?php the_title(); ?>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-right">
                    <p class="shares-date">
						<?php the_date(); ?>
                    </p>
                </div>
                <div class="col-12 text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="shares-img"/>
                </div>
                <div class="col-12">

                    <p class="shares-text"><?php the_content(); ?></p>
	                <?php
	                if(get_field("video")):
		                $video_url=get_field("video");
		                ?>

                    <video width="530" height="330" controls="controls" >
                        <source src="<?php echo $video_url; ?>" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'>
                        Тег video не поддерживается вашим браузером.
                        <a href="<?php echo $video_url; ?>">Скачайте видео</a>.
                    </video>
                    <?php endif;?>
                </div>
            </div>
            <div class="row shares-br m-auto"></div>
        </div>
    </main>


<?php
endif;
get_footer();