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
	<?php wp_head();?>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
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
	            $menu_name = "Header-menu";
	            $menu_items = wp_get_nav_menu_items($menu_name);

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
			</ul>
			
		</div>
	</nav>
</header>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php home_url();?>">Главная</a></li>
        <?php
            if (is_page()){
                array_push($res, get_the_title());
            }
            if(is_single()){

            }
        ?>
        <li class="breadcrumb-item"><a href="<?php echo get_home_url().'/products';?>">Продукция</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
    </ol>
</nav>