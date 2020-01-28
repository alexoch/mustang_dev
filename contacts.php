<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */
/**
 * Template Name: Contacts
 *
 * */
get_header();

?>

    <main>
        <div class="container-fluid contacts ">
            <div class="row">
                <div id="map">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:amcharts="http://amcharts.com/ammap"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 -5 640 420"
                         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                         xsi:schemaLocation="http://amcharts.com/ammap
                                                http://amcharts.com/ammap ">
						<?php
						$posts = get_posts('category_name=regions&posts_per_page=-1');
						foreach ($posts as $post) {
							setup_postdata($post);
							?>

                            <g id="<?php the_title();?>" class="land <?php the_field("class",get_field("master"));?>">
                                <?php the_field("region");?>
                            </g>
							<?php
						}; ?>
                        <g id="Crimea">
                            <path class="" title="Crimea"
                                  d="M490.96,359.66L491.03,359.95L490.5,360.26L489.75,361.56L487.77,361.6L486.11,360.81L485.35,361.23L485.13,362.3L486.36,363.11L485.79,363.7L484.35,364.11L483.65,364.76L483.94,365.92L484.15,365.14L484.35,365.7L483.14,368.26L483.78,371.97L484.93,373.89L482.12,375.77L478.27,376.08L477.01,377.26L470.34,376.16L469.16,376.37L468.58,377.16L467.69,377.62L466.11,377.33L463.78,378.31L463.49,377.62L462.8,377.23L462.81,376.36L461.56,374.99L458.72,373.12L455.14,372.01L452.25,372.62L450.25,373.73L448.43,375.77L448.5,376.99L449.72,377.6L447.46,378.76L447.31,379.37L447.68,379.97L448.52,380.39L448.34,380.67L446.2,379.67L444.15,379.89L443.73,380.42L443.87,381.19L443.38,382.14L441.79,382.53L440.76,383.16L439.95,384.97L439.75,386.63L438.14,388.1L437.01,387.7L437.07,387.02L436.42,386.35L435.42,386.09L435.03,386.36L434.24,385.84L432.62,386.32L432.61,386.73L431.83,386.98L431.05,386.71L426.24,387.19L424.24,388.33L422.16,388.99L417.01,392L415.57,393.8L414.06,397.68L413.34,398.05L413.28,399.69L411.88,399.46L410.89,400.08L409.98,401.71L407.19,402.29L405.83,405.38L403.57,405.79L402.66,406.51L401.06,406.62L400.51,407.03L397.42,406.46L397.42,406.46L397.46,405.64L397.8,405.31L398.53,405.31L399.01,404.43L396.45,400.24L396.06,397.94L393.21,396.52L392.92,395.98L392.97,394.23L394.13,393.54L394.27,393.15L394.03,392.05L392.34,391.04L389.92,391.99L389.06,391.18L388.96,390.43L389.39,389.95L390.36,390.09L391.03,389.75L390.7,388.26L390.17,387.79L387.99,387.71L387.12,387.17L386.26,387.29L386.26,387.29L386.41,385.88L387.05,385.95L387.74,385.54L388.19,384.52L388.41,382.54L387.97,379.39L388.12,378.38L386.73,374.17L385.09,371.83L382.91,369.82L380.77,368.8L379.51,369.88L377.97,369.95L377.22,371.18L376.44,371.16L375.38,369.91L373.93,369.42L372.71,368.52L369.82,365L367.21,362.62L364.51,360.91L362.79,360.57L359.45,360.73L355.85,363.18L350.54,361.62L351.17,360.93L351.21,360.28L350.05,359.24L352.15,356.41L353.71,355.15L356.4,353.54L357.31,353.27L357.76,353.48L357.89,352.84L360.55,351.24L361.04,351.66L361.52,351.4L361.76,351.66L362.4,350.57L362.2,350.2L361.55,350.22L361.65,349.95L364.64,347.47L370.9,343.97L372.34,343.73L372.89,342.67L373.57,339.52L373.32,340.37L373.74,341.11L374.96,342.04L375.74,342.17L379.49,340.55L381.98,338.13L382.78,338.64L383.01,338.18L383.61,338.01L383.61,337.42L384.02,337.17L384.35,337.14L384.56,337.84L385.53,337.48L385.75,338.1L386.02,338.09L386.82,336.47L387.24,336.54L388.41,335.43L389.22,336.26L389.84,336.39L390.75,337.77L390.65,334.62L391.17,334.65L392.22,333.67L393.22,333.87L393.37,333.59L392.88,332.5L390.04,332.31L389.25,332.62L389.19,332.94L388.53,332.71L389.01,331.91L388.44,327.54L389.39,326.07L388.47,323.55L388.47,323.55L389.17,323.3L388.44,319.06L389.43,318.89L389.43,318.89L390.85,320.29L391.38,320.42L391.7,321.95L392.06,321.61L392.38,321.74L392.25,322.61L392.65,323.16L393.32,323.41L393.69,323.08L394.49,324.22L394.71,324.3L395.75,322.79L395.18,322.57L394.95,321.49L395.53,321.1L396.21,321.6L396.92,322.68L396.92,323.26L396.04,324.34L396.28,324.77L395.54,324.51L395.46,325L396.45,325.1L397.68,326.13L398.17,327.86L398.03,328.15L397.62,327.93L397.49,328.75L397.82,328.31L398.26,328.75L398.44,328.59L398.41,327.31L398.84,326.81L399.35,326.61L399.65,326.84L399.33,326.98L399.43,327.48L399.83,328.5L400.13,328.56L400.43,328.38L399.71,327.36L401.51,327.05L401.05,326.57L400.29,326.83L399.25,326.1L399.66,325.51L402.25,325.13L403.8,326.46L404.29,326.47L404.65,327.89L405.93,328.32L407.21,329.85L407.84,330.04L406.33,331.61L406.06,331.58L405.91,330.93L404.97,331L405.66,332.38L406.75,332.43L406.63,333.09L408.12,332.67L408.41,332.26L408.83,332.66L408.97,332.33L408.53,332.02L408.23,329.97L407.64,329.52L407.85,328.97L407.14,328.79L407.47,329.3L407.1,329.41L406.08,327.9L405.47,327.48L405.06,327.71L405.31,326.74L406.45,327.65L407.11,327.31L408.42,327.95L408.83,327.82L409.68,328.55L409.67,329.16L409.19,329.3L409.69,330.38L409.9,330.17L409.59,329.37L410.68,327.63L411.17,328.05L410.79,329.1L411.06,329.93L412.38,330.28L412.42,330.67L412.93,330.17L412.68,329.71L412.89,329.33L412.1,329.09L412.15,328.77L413.02,328.69L413.54,328.27L414.71,329.77L415.34,331.53L418.05,333.73L417.67,335.13L417.97,336.24L418.93,335.71L419.66,333.84L420.79,334.48L421.3,334.15L420.32,331.65L420.77,331.07L420.36,330.67L423.19,332.5L423.55,333.18L422.82,335.57L420.31,336.76L420.3,337.77L419.01,338.9L418.87,339.52L417.18,339.62L417.61,340.59L420.08,340.07L422.18,337.75L423.84,336.48L426.33,335.68L427.07,335.11L427.6,336.04L427.23,336.67L426.41,336L424.37,337.1L423.83,339.81L427.03,338.69L427.16,339.66L427.54,339.56L428.06,340.14L427.38,341.15L426.89,341.35L426.76,342.16L425.5,342.33L424.31,343.63L424.9,343.82L425.07,344.34L426.91,343.51L427.39,343.61L428.2,343L431.26,342.16L429.35,343.71L429.85,343.86L429.82,344.91L431.19,344.01L431.73,344.71L431.31,344.96L431.3,345.52L431.87,346.06L432.54,345.58L434.25,345.26L434.07,346.28L434.76,347.04L436.25,347.5L438.29,351.43L439.09,354.96L438.27,355.96L436.82,356.51L436.32,357.22L437.32,359.62L438.34,361.06L440.01,362.25L440.53,362.2L440.91,361.74L441.95,361.91L444.65,363.66L447.25,364.69L447.62,365.18L446.61,366.1L447.42,366.67L447.38,367.23L448.03,366.03L450.56,365.48L450.89,365.79L451.01,364.06L449.44,363.87L448.37,361.98L447.08,361.18L446.2,359.45L445.67,359.62L442.91,354.93L441.4,352.87L440.45,352.11L437.96,348.38L437.29,347.93L436.53,346.2L435.95,345.55L435.53,345.55L434.3,341.83L433.36,340.51L433.36,340.51L433.92,340.22L433.92,340.22L437.67,347.52L445.66,358.58L449.06,362.28L450.94,363.69L452.91,364.65L455.88,363.21L459.7,362.24L459.94,361.43L461.02,360.4L461.09,359.94L460.68,359.42L463.17,357.38L463.09,356.11L464.09,355.52L464.88,355.87L463.96,356.74L464.71,358.09L466.64,359.79L468.32,360.5L469.92,360.37L471.08,359.55L471.69,358.69L471.61,357.15L472.07,356.72L474.62,355.77L478.85,355.16L480.02,355.68L480.74,355.4L481.73,355.77L483.13,356.82L484.47,356.32L485.33,356.38L487.07,357.75L487.94,357.96L488.4,357.75L488.61,357.15L489.35,357.24L489.95,358.05L489.81,358.75z"/>
                            <text x="380" y="360" class="svg-text">Крым</text>
                        </g>
                    </svg>
                </div>

				<?php
				$i = 0;
				$posts = get_posts('category_name=managers_info&order=ASC&posts_per_page=-1');
				foreach ($posts as $post) {
					setup_postdata($post);
					if ($i == 0) {
						$offset = "offset-xl-2 first-map";
					} else {
						$offset = '';
					}
					$i++;
					?>
                    <style>


                        <?php the_field("class");?> path, <?php the_field("class");?>.land.active path{
                            fill: <?php the_field("color");?>;
                        }
                        /*.hover_map_west path, .hover_map_west.land.active path{
                            fill: #cec804;
                        }
                        .hover_map_south path,.hover_map_south.land.active path {
                            fill: #59c1ff;
                        }
                        .hover_map_central path,.hover_map_central.land.active path {
                            fill: #FFEB3B;
                        }*/

                    </style>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4  col-xl-4  manager_info <?php echo $offset . ' ';
					the_field("class"); ?>">
                        <div class="manager_border ">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="manager_pic">
                            <div class="manager_info_text">
                                <div class="manager_title">
                                    <span class="manager_name"><?php the_title(); ?></span>
                                </div>
                                <div class="manager_dsc">
									<?php the_field("name"); ?>
                                    <span class="manager_subt"><?php the_field("manager_subt"); ?></span>
                                    <a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a>
                                    <a href="mail:<?php the_field("email"); ?>"><?php the_field("email"); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
				};
				wp_reset_postdata();
				?>


            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-5 offset-xl-1 col-xl-5 d-flex justify-content-around flex-column">
                    <div class="contacts-info">
                        <h3 class="contacts-title">
                            <?php the_field("first_title"); ?>
                        </h3>
	                    <?php the_field("first_p"); ?>
                        <!--p class="contacts-text">ООО "УКРПАК ХОЛДИНГ"</p>
                        <p class="contacts-text">г. Киев, ул. Днепровская набережная, 26ж</p-->
                    </div>

                    <div class="contacts-info">
                        <h3 class="contacts-title">
	                        <?php the_field("second_title"); ?>
                        </h3>
	                    <span class="contacts-text">
                        <?php the_field("schedule"); ?>
                        </span>
                        <!--p class="contacts-text">C понедельника по пятницу: 9:00 – 18:00</p>
                        <p class="contacts-text">Выходные: суббота, воскресенье</p-->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 contacts-map p-0">
                    <a href="<?php the_field("map_link"); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt=""
                             style="width:100%;">
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        /*
		@init feather icons
		*/
        feather.replace();
    </script>
<?php
get_footer();
?>