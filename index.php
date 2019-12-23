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
            <img src="<?php echo get_template_directory_uri(); ?>/img/main_photo-4.png" style="width: 100%;" alt="" class="desktop">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/main_mobile.png" style="width: 100%;" alt="" class="mobile">
        </div>
    </main>
    <div class="back1">
    </div>
    <div class="modal" >
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
             alt="Mustang" class="modal_logo">
        <style>
            .translations{
                margin:0;
            }
        </style>
        <div class="translations row">
            <?php
                $translations = pll_the_languages(array('raw'=>1));
                foreach ($translations as $tr){
                    $img_url=get_template_directory_uri()."/img/main/".$tr["slug"].".png";
                    ?>
                        <div class="modal_inf col-xl-4 <?php echo $tr["slug"];?>">
                            <img src="<?php echo $img_url;?>" alt="">
                            <span><?php echo $tr["name"]?></span>
                        </div>
                    <div class="modal_inf col-xl-4 <?php echo $tr["slug"];?>">
                        <img src="<?php echo $img_url;?>" alt="">
                        <span><?php echo $tr["name"]?></span>
                    </div>
                    <div class="modal_inf col-xl-4 <?php echo $tr["slug"];?>">
                        <img src="<?php echo $img_url;?>" alt="">
                        <span><?php echo $tr["name"]?></span>
                    </div>
                    <div class="modal_inf col-xl-4 <?php echo $tr["slug"];?>">
                        <img src="<?php echo $img_url;?>" alt="">
                        <span><?php echo $tr["name"]?></span>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
<?php
get_footer();
?>