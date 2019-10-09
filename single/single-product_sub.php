<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
get_header();

?>
<main>
	<div class="container-fluid product__main border-bt">
		<div class="row product__section border-bt">
			<div class="col-12 text-center">
				<h1 class="product__title">
					Пакувальний кольоровий скотч
				</h1>
			</div>
			<div class="col-12 text-center">
				<img src="img/description product/title.png"  alt="" class="product__present">
			</div>
		</div>
		<div class="row product__section product__advantages border-bt">
			<div class="col-12 text-center">
				<h3 class="product__title product__title--article">
					Переваги
				</h3>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
				<img src="img/description product/per1.png" height="211" width="275" alt="" class="product__advantages--img">
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
				<img src="img/description product/per2.png" height="207" width="273" alt="" class="product__advantages--img">
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
				<img src="img/description product/per3.png" height="206" width="273" alt="" class="product__advantages--img">
			</div>
		</div>
		<div class="row product__section prouct__description border-bt" style="display: none;">
			<div class="col-12 text-center">
				<h3 class="product__title">
					Детальний опис
				</h3>
			</div>
		</div>
		<div class="row product__section product__used border-bt">
			<div class="col-12 text-center">
				<h3 class="product__title product__title--article">
					Використання
				</h3>
			</div>
			<div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6">
				<img src="img/description product/descript.png" alt="" class="product__used--img">
			</div>
			<div class="col-12 col-sm-1s col-md-12 col-lg-6 col-xl-6">
				<p class="product__used--text">
					Незалежно від того, легкі чи важкі коробки,
					комплектація чи герметизація, короткі перевезення
					по залізницею або довгі закордонні морські
					перевезення - для надійного задоволення всіх
					цих вимог, ми розробили ряд пакувальних стрічок,
					які забезпечують безпечні поставки незалежно
					від способу перевезення
				</p>
			</div>
		</div>
		<div class="row product__section product__sizes border-bt">
			<div class="col-12 text-center">
				<h3 class="product__title product__title--article">
					Розміри та кольори
				</h3>
			</div>
			<div class="col-12 text-center">
				<table class="product__table">
					<tr>
						<td>Артикул</td>
						<td>Назва</td>
						<td>Кількість у ящику</td>
					</tr>
					<tr>
						<td>ATC100</td>
						<td>40мкм*45мкм*100</td>
						<td>72</td>
					</tr>
					<tr>
						<td>ATC200</td>
						<td>40мкм*45мкм*200</td>
						<td>72</td>
					</tr>
					<tr>
						<td>ATC300</td>
						<td>40мкм*45мкм*300</td>
						<td>36</td>
					</tr>
					<tr>
						<td>ATК100</td>
						<td>40мкм*45мкм*100 Радуга</td>
						<td>72</td>
					</tr>
				</table>
			</div>
			<div class="col-12">
				<ul class="product__colors">
					<li>
						<div class="product__colors--color red"></div>
						<span>Червоний</span>
					</li>
					<li>
						<div class="product__colors--color blue"></div>
						<span>Синій</span>
					</li>
					<li>
						<div class="product__colors--color yellow"></div>
						<span>Жовтий</span>
					</li>
					<li>
						<div class="product__colors--color orange"></div>
						<span>Помаранчевий</span>
					</li>
					<li>
						<div class="product__colors--color brown"></div>
						<span>Коричневий</span>
					</li>
					<li>
						<div class="product__colors--color black"></div>
						<span>Чорний</span>
					</li>
					<li>
						<div class="product__colors--color green"></div>
						<span>Зелений</span>
					</li>
					<li>
						<div class="product__colors--color multi">
							<div class="red"></div>
							<div class="yellow"></div>
							<div class="blue"></div>
							<div class="green"></div>
						</div>
						<span>Райдуга</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="row product__section product__example">
			<div class="col-12 text-center">
				<h3 class="product__title product__title--articles">
					Приклад використання
				</h3>
			</div>
			<div class="col-12 text-center">
				<iframe src="https://www.youtube.com/embed/4B2HtYH2dlQ" style="width: 65%; height: 65vh;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</main>

<?php

get_footer();

?>
