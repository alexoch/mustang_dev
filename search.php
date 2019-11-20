<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 06/09/2019
 * Time: 18:41
 */

/**
 * Template Name: Search page
 *
 * */

get_header();
?>
<?php
$s=$_GET["s"];
$args = array(
                's' =>$s
            );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {?>
  
    <div class="container-fluid border-tp">
        <div class="row">
            <div class="container col-12 mt-4 mb-4">
                <h5 class="font-weight-bold mb-0 text-uppercase">
                    Поисковые результаты для : <?php echo get_query_var('s');?>
                </h5>
            </div>
        </div>
    </div>
<div class="container shares">
  <?php
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                <div class="row shares-item mt-4 mb-3 ml-auto mr-auto">
                    <div class="col-12 text-center">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="shares-img" style="width: 33%;"/>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h4 class="shares-title font-weight-bold">
                             <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h4>
                    </div>
                    <div class="col-12">
                        <p class="shares-text"><?php the_content();?></p>
                    </div>
                </div>

                <div class="row shares-br m-auto"></div>

                 <?php
        }
        echo "</div>";
    }else{
?>
      <div class="container-fluid border-tp">
        <div class="row">
            <div class="container col-12 mt-4 mb-4">
                <h5 class="font-weight-bold mb-0 text-uppercase">
                    Ничего не найдено по вашему запросу
                </h5>
            </div>
        </div>
    </div>
        
<?php } ?>

<?php get_footer(); ?>