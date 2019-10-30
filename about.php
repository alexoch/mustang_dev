<?php
/**
 * Created by PhpStorm.
 * User: soche
 * Date: 24/07/2019
 * Time: 13:43
 */

/**
 * Template Name: About Page
 *
 * */

get_header();
while (have_posts()) {
	the_post();
	?>
    <main>
        <div class="container-fluid about border-tp">
            <div class="row about-text">
                <style type="text/css">
                    .about-text{
                        background: url(<?php the_post_thumbnail_url(  );?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position-x: 13%;

                    }
                    .back {
                        display: block;
                        height: 710px;
                        position: absolute;
                        top: 137px;
                        width: 100%;
                         opacity: 1;
                    }
                </style>
                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
                    <div style="    background-color: #007bffdb!important;
                        padding: 50px;
                        color: white;">
                        <!--h3 class="about-title font-weight-bold mt-3 mb-4">
                            Почему мы?
                        </h3-->
                        <p class="text-justify">
                            Торговая Марка MUSTANG берет свое начало с 1997 года и была создана с целью предоставления
                            Потребителям продуктов, обеспечивающих впечатляющие результаты их применения. Торговая
                            Марка MUSTANG на протяжении всего периода своего существования постоянно расширяет свой
                            продуктовый портфель. На данный момент Вы имеете возможность оценить высочайшее качество
                            продуктов линейки клейких лент, суперклеев и монтажной пены. Мы верим в
                            высококачественные продукты и предпочитаем размещать логотип MUSTANG только на товарах,
                            которые соответствуют строгим стандартам. MUSTANG – это бренд который имеет высокую
                            репутацию в Украине, странах СНГ и ЕС!
                            В дополнение к высококачественным товарам мы стремимся быть отличной компанией для
                            наших Сотрудников и Потребителей! Именно поэтому данный сайт будет служить Вам
                            путеводителем в мире применения наших качественных продуктов, где Вы сможете ознакомиться
                            с действительно полезной информацией!

                        </p>
                        <p>
                            <b>Миссия Компании:</b>
                        <ul>
                            <li>
                                Создавать и повышать высочайшие стандарты качества продукции TM MUSTANG – вызывая у
                                Покупателей новый уровень удовлетворенности и эмоций!
                            </li>
                            <li>
                                Развивать продуктовую линейку продукции TM MUSTANG – давая возможность Покупателям
                                использовать качественные продукты в новых сферах жизнеобеспечения.
                            </li>
                            <li>
                                Формировать культуру потребления новых продуктов TM MUSTANG - облегчая решение многих
                                бытовых и промышленных задач!
                            </li>
                            <li>
                                Создавать условия для технологического роста Компании, давать возможность для развития и
                                самореализации людям, которые стремятся вперед!
                            </li>
                        </ul>
                        <b>Наш девиз: «Надежный бренд – надежный бизнес!»</b>

                        </p>
                    </div>
                </div>
                <!--                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-5 offset-xl-2 col-xl-4">-->
                <!--                    <h3 class="about-title font-weight-bold mt-3 mb-4">-->
                <!--                        Наши преимущества-->
                <!--                    </h3>-->
                <!--                    <ul>-->
                <!--                        <li>Безупречное качество продукции ТМ MUSTANG</li>-->
                <!--                        <li>Высококонкурентная ценовая политика</li>-->
                <!--                        <li>Уникальная упаковка продукции</li>-->
                <!--                        <li>Весь спектр клейких лент</li>-->
                <!--                        <li>Оперативная логистика по всей территории Украины</li>-->
                <!--                        <li>Маркетинговая и техническая поддержка клиентов</li>-->
                <!--                    </ul>-->
                <!--                </div>-->
            </div>

            <div class="row about-graph border-bt border-tp">
                <div class="timeline">

                    <div class="containe right">
                        <div class="content">
                            <h2>1997 </h2>
                            <p>Основание ТМ Mustang. Запуск линейки продукции ТМ Mustang.</p>
                        </div>
                    </div>

                    <div class="containe left">
                        <div class="content">
                            <h2>1998-2005</h2>
                            <p>Расширение ассортимента продукции ТМ Mustang. Построение системы дистрибуции ТМ Mustang в
                                Украине</p>
                        </div>
                    </div>

                    <div class="containe right">
                        <div class="content">
                            <h2>2013</h2>
                            <p>Начало экспорта продукции ТМ Mustang в страны СНГ</p>
                        </div>
                    </div>

                    <div class="containe left">
                        <div class="content">
                            <h2>2015</h2>
                            <p>Полный ребрендинг и запуск новой упаковки продукции ТМ Mustang </p>
                        </div>
                    </div>

                    <div class="containe right">
                        <div class="content">
                            <h2>2016</h2>
                            <p>Запуск собственных производственных мощностей в Украине</p>
                        </div>
                    </div>

                    <div class="containe left">
                        <div class="content">
                            <h2>2017</h2>
                            <p>Расширение производственных мощностей по производству клейких лент. Запуск собственного
                                производства картонной гильзы. Запуск флексографического оборудования.</p>
                        </div>
                    </div>
                    <div class="containe right">
                        <div class="content">
                            <h2>2018</h2>
                            <p>Запуск производства и упаковки изоляционной ленты ПВХ.</p>
                        </div>
                    </div>

                    <div class="containe left">
                        <div class="content">
                            <h2>2019</h2>
                            <p>Полный ребрендинг и запуск новой упаковки продукции ТМ Mustang. Запуск полностью
                                автоматической упаковочной линии для клейких лент.Расширение ассортимента продукции ТМ
                                Mustang.</p>
                        </div>
                    </div>
                </div>

                <!--img src="<?php echo get_template_directory_uri(); ?>/img/about/histogram.jpg"-->
            </div>
        </div>

        <div class="about-slider border-tp">
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h5 class="slide-title font-weight-bold mb-5">
                                Открытость для потребителя
                            </h5>
                            <p class="slide-text">TM MUSTANG ярким образом принимает участие в специализированных выставках, воспринимая подобные мероприятия как возможность для обменом информацией с Партнерами как в Украине так и за ее границами! Открытый диалог с Партнерами позволяет успешно реализовывать задачи по развитию наших продуктов и услуг повышая их ценности для Покупателей! Наши посетители имеют возможность протестировать качество продукции прямо на выставочных стендах, как во время индивидуальных встреч так и во время презентационных сессий, что помогает получить лучшее представление о TM MUSTANG. Наши выставочные стенды отображают креативность и индивидуальность TM MUSTANG, несут понимание того, что одной из наших главных задач – быть полезным для каждого, сохраняя добрые и приятные эмоции от использования наших продуктов! </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0 main-slider ">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
        </div>
    </main>
	<?php
}
get_footer();

?>