<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 14:01
 */

?>
<div class="back1">
</div>
<div class="modal container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
         alt="Mustang" class="modal_logo row">
    <style>
        .translations {
            margin: 0;
        }
    </style>
    <div class="translations row justify-content-center">
		<?php
		$args = [
			'category_name'  => 'languages',
			'posts_per_page' => -1,
			'order'          => "ASC"
		];
		query_posts($args);
		if (have_posts()) :
		while (have_posts()) {
			the_post();
			?>
            <div class="modal_lang col-12 col-xl-4 ">
                <div class="modal_inf ">
                    <a href="<?php the_field("address"); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    <span><?php the_title();?></span></a>
                </div>
            </div>
			<?php
		}endif;
		wp_reset_postdata();
		?>
    </div>
</div>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-2 align-items-center d-flex">
				<a class="footer-link" href="tel:+380445852108">
					<i data-feather="smartphone"></i>
					<div class="icon icon-info">
						<p><?php pll_e('044 585 21 08');?></p>
						<p class="small-text"><?php pll_e('многоканальный');?></p>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 align-items-center d-flex">
				<a class="footer-link" href="https://goo.gl/maps/iXZhC3BkFNHNhLAA8">
					<i data-feather="map-pin"></i>
					<div class="icon icon-info">
						<p><?php pll_e('г. Киев');?></p>
						<p><?php pll_e('ул. Днепровская набережная, 26ж');?></p>
					</div>
				</a>
			</div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-1 align-items-center d-flex">
                <style>
                    .dropdown-menu{
                        min-width: 6rem;
                    }
                </style>
                    <?php foreach (pll_the_languages(array('raw'=>1)) as $k =>$v){ if($v["current_lang"]){
                        $pic=$v["flag"];
                    }}; ?>

                <div class="btn-group">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo $pic;?>" alt="" style="width:26px ;">
                    </button>
                    <div class="dropdown-menu">

                <?php

                echo $post_id;
                $args = [
		            'category_name'  => 'languages',
		            'posts_per_page' => -1,
		            'order'          => "ASC"
	            ];
	            query_posts($args);

	            if (have_posts()) :
		            while (have_posts()) {
			            the_post();

			            echo $post_id;
			            ?>

                        <a href="<?php the_permalink(pll_get_post(POSTID, get_field("lang_short")));?>" class="dropdown-item <?php echo get_field("lang_short") ;?>">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" style="width: 45px;" alt="">
                        </a>

		            <?php }endif;?>
                    </div>
                </div>
            </div>
			<form method="GET" action="<?php echo home_url(); ?>/search" class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-3 form-inline my-2 my-lg-0" >
				<input type="text" name="s" class="search_i">
				<button class="btn btn-primary my-2 my-sm-0 btn-search" type="submit">
					<i data-feather="search"></i>
				</button>
			</form>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-2 align-items-center text-center text-xl-right d-flex">


                <?php
				$args = [
					'category_name'  => 'social',
					'posts_per_page' => -1,
					'order'          => "ASC"
				];
				query_posts($args);
				if (have_posts()) :
				while (have_posts()) {
				the_post(); ?>

                <a href="<?php the_field("link");?>" class="icon icon-social">
					<i data-feather="<?php the_title();?>"></i>
				</a>

                <?php }endif;?>
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha256-3h45mwconzsKjTUULjY+EoEkoRhXcOIU4l5YAw2tSOU=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha256-etrwgFLGpqD4oNAFW08ZH9Bzif5ByXK2lXNHKy7LQGo=" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha256-zUQGihTEkA4nkrgfbbAM1f3pxvnWiznBND+TuJoUv3M=" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/siema.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

<script src="https://vjs.zencdn.net/7.6.6/video.js"></script>

</body>
</html>
