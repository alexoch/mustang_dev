<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 27/11/2019
 * Time: 11:36
 */
/** 404 page
 * @package Mustang Tape
 */
get_header();
?>

<h3> <?php pll_e("К сожалению данная страница отсутствует на сайте");?></h3>
<a href="<?php home_url();?>" style="display: block;margin: 0 auto;"><?php pll_e("Перейти на главную");?></a>

<?php
get_footer();
?>
