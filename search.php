<?php get_header(); ?>
<?php
$s=$_GET["s"];
$args = array(
                's' =>$s
            );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Поисковые результаты для : ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Ничего не найдено по вашему запросу</h2>
        
<?php } ?>

<?php get_footer(); ?>