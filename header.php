<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 14:00
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head(); define("POSTID", get_the_ID());?>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>
<header class="shadow_header">
	<nav class="navbar navbar-expand-xl navbar-light">
		<a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Mustang" >

        </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
	            <?php
	            $menu_name = "header_menu";
	            $locations = get_nav_menu_locations();
	            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		            $menu_items = wp_get_nav_menu_items($menu->term_id );
	            }

	            $menu_list = '';
	            foreach ((array)$menu_items as $key => $menu_item) {
		            if (get_page_link() != $menu_item->url) {
			            $menu_list .= '<li class="nav-item">';
			            $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			            $menu_list .= '</li>';
		            } else {
		                $menu_list .= '<li class="nav-item active">';
			            $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			            $menu_list .= '</li>';
		            }
	            }
	            echo $menu_list;
	            ?>
                <li class="nav-item active">
                    <a  href="<?php echo get_page_link(pll_get_post(1129)); ?>" >
                        <img src="<?php echo get_the_post_thumbnail_url( pll_get_post(1129));?>" alt="" class="new_page_menu">
                    </a>
                </li>
			</ul>
			
		</div>
	</nav>
</header>
<?php if (!is_home()){
        if(!is_front_page()){
    ?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php
        $q_obj = get_queried_object();
        $b_c=get_breadcrumbs($q_obj );
        foreach ($b_c as $k=>$v){
            if($v!=""){
	            echo '<li class="breadcrumb-item active" aria-current="page"><a href="'.$v.'">'.$k.'</a></li>';
            }else{
                echo '<li class="breadcrumb-item active" aria-current="page">'.$k.'</li>';
            }
        }
        ?>

    </ol>
</nav>

<?php }} ?>