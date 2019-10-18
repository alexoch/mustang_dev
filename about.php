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
                    .back {
                        display: block;
                        height: 635px;
                        position: absolute;
                        top: 137px;
                        width: 100%;
                        background: url(<?php the_post_thumbnail_url(  );?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position-x: 13%;
                        opacity: 0.15;
                    }
                </style>
                 <div class="back"></div>
                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-5 offset-xl-1 col-xl-4">
                    <h3 class="about-title font-weight-bold mt-3 mb-4">
                        Почему мы?
                    </h3>
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
                </div>
                <div class="col-12 col-sm-12 col-md-12 offset-lg-1 col-lg-5 offset-xl-2 col-xl-4">
                    <h3 class="about-title font-weight-bold mt-3 mb-4">
                        Наши преимущества
                    </h3>
                    <ul>
                        <li>Безупречное качество продукции ТМ MUSTANG</li>
                        <li>Высококонкурентная ценовая политика</li>
                        <li>Уникальная упаковка продукции</li>
                        <li>Весь спектр клейких лент</li>
                        <li>Оперативная логистика по всей территории Украины</li>
                        <li>Маркетинговая и техническая поддержка клиентов</li>
                    </ul>
                </div>
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
                            <p>Расширение ассортимента продукции ТМ Mustang. Построение системы дистрибуции ТМ Mustang в Украине</p>
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
                            <p>Расширение производственных мощностей по производству клейких лент. Запуск собственного производства картонной гильзы. Запуск флексографического оборудования.</p>
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
                            <p>Полный ребрендинг и запуск новой упаковки продукции ТМ Mustang. Запуск полностью автоматической упаковочной линии для клейких лент.</p>
                        </div>
                    </div>
                </div>

                <!--img src="<?php echo get_template_directory_uri(); ?>/img/about/histogram.jpg"-->
            </div>
        </div>

        <div class="main-slider about-slider border-tp">
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h5 class="slide-title font-weight-bold mb-5">
                                Открытость для потребителя
                            </h5>
                            <p class="slide-text">TM MUSTANG – публичный и открытый для потребителя бренд. Наше
                                приоритетное направление в развитии является достижение высокого уровня лояльности к TM
                                MUSTANG.</p>
                            <p class="slide-text">Мы всегда рады ответить на любой Ваш вопрос в рамках программы MUSTANG
                                ASSISTANCE TM. </p>
                            <p class="slide-text">Данная программа призвана создать комфортные условия для коммуникаций
                                с клиентами и конечными потребителями нашей продукции.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h3 class="slide-title">
                                Открытость для потребителя
                            </h3>
                            <p class="slide-text">TM MUSTANG – публичный и открытый для потребителя бренд. Наше
                                приоритетное направление в развитии является достижение высокого уровня лояльности к TM
                                MUSTANG.</p>
                            <p class="slide-text">Мы всегда рады ответить на любой Ваш вопрос в рамках программы MUSTANG
                                ASSISTANCE TM. </p>
                            <p class="slide-text">Данная программа призвана создать комфортные условия для коммуникаций
                                с клиентами и конечными потребителями нашей продукции.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h3 class="slide-title">
                                Открытость для потребителя
                            </h3>
                            <p class="slide-text">TM MUSTANG – публичный и открытый для потребителя бренд. Наше
                                приоритетное направление в развитии является достижение высокого уровня лояльности к TM
                                MUSTANG.</p>
                            <p class="slide-text">Мы всегда рады ответить на любой Ваш вопрос в рамках программы MUSTANG
                                ASSISTANCE TM. </p>
                            <p class="slide-text">Данная программа призвана создать комфортные условия для коммуникаций
                                с клиентами и конечными потребителями нашей продукции.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0">
                        <img src="img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h3 class="slide-title">
                                Открытость для потребителя
                            </h3>
                            <p class="slide-text">TM MUSTANG – публичный и открытый для потребителя бренд. Наше
                                приоритетное направление в развитии является достижение высокого уровня лояльности к TM
                                MUSTANG.</p>
                            <p class="slide-text">Мы всегда рады ответить на любой Ваш вопрос в рамках программы MUSTANG
                                ASSISTANCE TM. </p>
                            <p class="slide-text">Данная программа призвана создать комфортные условия для коммуникаций
                                с клиентами и конечными потребителями нашей продукции.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0">
                        <img src="img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="slide container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-4 d-flex align-items-center">
                        <div class="slide-content">
                            <h3 class="slide-title">
                                Открытость для потребителя
                            </h3>
                            <p class="slide-text">TM MUSTANG – публичный и открытый для потребителя бренд. Наше
                                приоритетное направление в развитии является достижение высокого уровня лояльности к TM
                                MUSTANG.</p>
                            <p class="slide-text">Мы всегда рады ответить на любой Ваш вопрос в рамках программы MUSTANG
                                ASSISTANCE TM. </p>
                            <p class="slide-text">Данная программа призвана создать комфортные условия для коммуникаций
                                с клиентами и конечными потребителями нашей продукции.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-xl-1 col-xl-6 d-flex align-items-end justify-content-end p-0">
                        <img src="img/about/expo.jpg" class="slide-img">
                    </div>
                </div>
            </div>
        </div>
    </main>
	<?php
}
get_footer();

?>