<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 14:01
 */

?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 align-items-center d-flex">
				<a class="footer-link" href="tel:+380445852108">
					<i data-feather="smartphone"></i>
					<div class="icon icon-info">
						<p>044 585 21 08</p>
						<p class="small-text">многоканальный</p>
					</div>
				</a>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 align-items-center d-flex">
				<a class="footer-link" href="https://goo.gl/maps/iXZhC3BkFNHNhLAA8">
					<i data-feather="map-pin"></i>
					<div class="icon icon-info">
						<p>г. Киев</p>
						<p>ул. Днепровская набережная, 26ж</p>
					</div>
				</a>
			</div>
			<form method="GET" action="<?php echo home_url(); ?>/search" class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-2 form-inline my-2 my-lg-0" >
				<input type="text" name="s">
				<button class="btn btn-primary my-2 my-sm-0 btn-search" type="submit">
					<i data-feather="search"></i>
				</button>
			</form>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-2 align-items-center text-center text-xl-right d-flex">
				<a href="#" class="icon icon-social">
					<i data-feather="facebook"></i>
				</a>
				<a href="#" class="icon icon-social">
					<i data-feather="instagram"></i>
				</a>
				<a href="#" class="icon icon-social">
					<i data-feather="twitter"></i>
				</a>
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/siema.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

</body>
</html>
