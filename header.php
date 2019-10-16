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
	<title>Mustang Main</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<?php wp_head();?>
	<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
</head>
<body>
<header >
	<nav class="navbar navbar-expand-xl navbar-light">
		<a class="navbar-brand" href="<?php echo home_url(); ?>">
            <div class="nav_item_l"></div>
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Mustang">
            <div class="nav_item_r"></div>
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
			            $menu_list .= '<div class="nav_item_l"></div>';
                        $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			            $menu_list .= '<div class="nav_item_r"></div>';
			            $menu_list .= '</li>';
		            } else {
		                $menu_list .= '<li class="nav-item active">';
			            $menu_list .= '<div class="nav_item_l"></div>';
			            $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
			            $menu_list .= '<div class="nav_item_r"></div>';
			            $menu_list .= '</li>';
		            }
	            }
	            echo $menu_list;
	            ?>

                <!--li class="nav-item active">
                    <div class="nav_item_l"></div>
					<a class="nav-link" href="<?php echo home_url(); ?>">Главная</a>
                    <div class="nav_item_r"></div>
                </li>
				<li class="nav-item">
                    <div class="nav_item_l"></div>
                    <a class="nav-link" href="<?php echo home_url(); ?>/products">АССОРТИМЕНТ</a>
                    <div class="nav_item_r"></div>
                </li>
				<li class="nav-item">
                    <div class="nav_item_l"></div>
					<a class="nav-link" href="<?php echo home_url(); ?>/application">ПРИМЕНЕНИЕ</a>
                    <div class="nav_item_r"></div>
                </li>
				<li class="nav-item">
                    <div class="nav_item_l"></div>
					<a class="nav-link" href="<?php echo home_url(); ?>/about">ПРО КОМПАНИЮ</a>
                    <div class="nav_item_r"></div>
                </li>
				<li class="nav-item">
                    <div class="nav_item_l"></div>
					<a class="nav-link" href="<?php echo home_url(); ?>/distributors">ДЛЯ ДИСТРИБЬЮТЕРОВ</a>
                    <div class="nav_item_r"></div>
                </li>
				<li class="nav-item">
                    <div class="nav_item_l"></div>
					<a class="nav-link" href="<?php echo home_url(); ?>/contacts">КОНТАКТЫ</a>
                    <div class="nav_item_r"></div>
				</li-->
			</ul>
			<form class="form-inline my-2 my-lg-0" style="display: none;">
				<button class="btn btn-primary my-2 my-sm-0 btn-search" type="submit">
					<i data-feather="search"></i>
				</button>
			</form>
		</div>
	</nav>
</header>
<div class="shadow_header"></div>

