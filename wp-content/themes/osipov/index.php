<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Denis Osipov Studio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="/wp-content/themes/osipov/fonts/stylesheet.css">
    <link rel="stylesheet" href="/wp-content/themes/osipov/css/style.min.css">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-row">
            <div class="logo">
                <img src="/wp-content/themes/osipov/img/logo.png" alt="">
            </div>
            <div class="contacts">
                <ul class="socials">
                    <li><a href="#"><img src="/wp-content/themes/osipov/img/svg/vk.svg" alt=""></a></li>
                    <li><a href="#"><img src="/wp-content/themes/osipov/img/svg/telegram.svg" alt=""></a></li>
                    <li><a href="#"><img src="/wp-content/themes/osipov/img/svg/whatsapp.svg" alt=""></a></li>
                </ul>
                <div class="address">
                    <?php if (get_field('contacts')['address_1']) { ?>
                        <p>Санкт-Петербург,<br><?= get_field('contacts')['address_1'] ?></p>
                    <?php } ?>
                    <?php if (get_field('contacts')['address_2']) { ?>
                        <p>Санкт-Петербург,<br><?= get_field('contacts')['address_2'] ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="first-block">
    <div class="container">

        <div class="promo promo-owl owl-carousel">

            <div class="item">
                <div class="price">
                    <div class="price-old">5 000 ₽</div>
                    <div class="price-new">2 500 ₽</div>
                </div>

                <div class="promo-txt">
                    <p class="promo-txt-main">За стрижку  с окрашиванием  волос любой длины</p>
                    <ul class="promo-list">
                        <li>Цена зафиксирована</li>
                        <li>Проф. материалы уже включены в стоимость</li>
                        <li>Осуществим любую вашу фантазию</li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="price">
                    <div class="price-old">12 000 ₽</div>
                    <div class="price-new">7 000 ₽</div>
                </div>

                <div class="promo-txt">
                    <p class="promo-txt-main">За стрижку  с окрашиванием  волос любой длины</p>
                    <ul class="promo-list">
                        <li>Цена зафиксирована</li>
                        <li>Проф. материалы уже включены в стоимость</li>
                        <li>Осуществим любую вашу фантазию</li>
                    </ul>
                </div>
            </div>

        </div>

        <button class="btn promo__btn" data-toggle="modal" data-target="#exampleModal">Заявка на звонок</button>
    </div>
</div>

<section class="advantages wow fadeIn">
    <div class="container">
        <h2>Все уже включено️, чтобы ваши волосы были превосходными</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="advantages__item">
                    <div class="advantages__icon"><img src="/wp-content/themes/osipov/img/svg/Ikonka_1.svg" alt="">
                    </div>
                    <div class="advantages__title">2500 или 4500 и  не рублем больше</div>
                    <div class="advantages__txt">Даже если волосы у вас до колен, а ваша идея требует 4 часа кропотливой
                        работы!
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="advantages__item">
                    <div class="advantages__icon"><img src="/wp-content/themes/osipov/img/svg/Ikonka_2.svg" alt="">
                    </div>
                    <div class="advantages__title">Волосы будут вам  благодарны</div>
                    <div class="advantages__txt">Ведь мы используем исключительно качественные материалы для окрашивания
                        компаний Matrix, Estel и Anthocyanin.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="advantages__item">
                    <div class="advantages__icon"><img src="/wp-content/themes/osipov/img/svg/Ikonka_3.svg" alt="">
                    </div>
                    <div class="advantages__title">Наши мастера  владеют техниками:</div>
                    <div class="advantages__txt">Шатуш, омбре, 3-D окрашивание, деграде, балаяж, колорирование, эффект
                        выгоревших на солнце волос, брондирование, калифорнийское мелирование и т.д.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="advantages__item">
                    <div class="advantages__icon"><img src="/wp-content/themes/osipov/img/svg/Ikonka_4.svg" alt="">
                    </div>
                    <div class="advantages__title">Стилисты помогут  с выбором</div>
                    <div class="advantages__txt">Если вы до конца не определились с прической, наши стилисты подберут
                        идеально подходящие именно вам форму и цвет волос по авторской методике 12S
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery wow fadeIn">
    <div class="container">
        <h2><?= get_field('main_gallery')['gallery_title'] ?></h2>
        <p class="subtitle"><?= get_field('main_gallery')['gallery_subtitle'] ?></p>


        <div class="gallery-owl owl-carousel"

<!--           --><?php //if (have_rows('main_gallery')['photos']):
//
//            while (have_rows('main_gallery')['photos']) : the_row(); ?>
<!---->
<!--                <a data-fancybox="gallery" href="--><?//= the_sub_field('photo'); ?><!--"><img-->
<!--                        src="--><?//= the_sub_field('photo'); ?><!--" alt=""></a>-->
<!---->
<!--            --><?php //endwhile; endif; ?>


        </div>
    </div>
</section>

<section class="team wow fadeIn">
    <div class="container">
        <h2>топ стилистов</h2>

        <div class="team__box">
            <?php if (have_rows('main_team_2') && get_field('contacts')['address_2']): ?>
            <nav>
                <div class="nav toggler team__toggler" role="tablist">
                    <a class="toggler__tab active" data-toggle="tab" href="#add-1" role="tab" aria-controls="nav-home"
                       aria-selected="true"><?= get_field('contacts')['address_1'] ?></a>
                    <a class="toggler__tab" data-toggle="tab" href="#add-2" role="tab" aria-controls="nav-profile"
                       aria-selected="false"><?= get_field('contacts')['address_2'] ?></a>
                </div>
            </nav>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="add-1" role="tabpanel" aria-labelledby="nav-home-tab">

                    <?php endif; ?>
                    <div class="row">

                        <?php if (have_rows('main_team_1')):

                            while (have_rows('main_team_1')) : the_row(); ?>
                                <div class="col-md-6 col-lg-3">
                                    <div class="team__item">
                                        <a href="" class="team__img">
                                            <img src="<?= the_sub_field('img'); ?>" alt="">
                                            <div class="insta-icon">
                                            </div>
                                        </a>
                                        <div class="team__cat"><?= the_sub_field('category'); ?></div>
                                        <div class="team__name"><?= the_sub_field('name'); ?></div>
                                    </div>
                                </div>

                            <? endwhile; endif; ?>

                    </div>
                </div>
                <?php if (have_rows('main_team_2')): ?>

                <div class="tab-pane fade" id="add-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">

                        <? while (have_rows('main_team_2')) : the_row(); ?>

                            <div class="col-md-6 col-lg-3">
                                <div class="team__item">
                                    <a href="" class="team__img">
                                        <img src="<?= the_sub_field('img'); ?>" alt="">
                                        <div class="insta-icon">
                                        </div>
                                    </a>
                                    <div class="team__cat"><?= the_sub_field('category'); ?></div>
                                    <div class="team__name"><?= the_sub_field('name'); ?></div>
                                </div>
                            </div>

                        <? endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn team__btn" data-toggle="modal" data-target="#exampleModal">Заявка</button>
    </div>
</section>

<section class="contacts wow fadeIn">
    <div class="container">
        <div class="contacts__box">
            <div class="contacts__info">
                <h2>Контакты</h2>
                <?php if (get_field('contacts')['address_1']) { ?>
                    <a href="#" class="contacts__row">
                        <div class="contacts__icon">
                            <img src="/wp-content/themes/osipov/img/svg/pin.svg" alt="">
                        </div>

                        <div class="contacts__text">Санкт-Петербург,<br><?= get_field('contacts')['address_1']; ?></div>
                    </a>
                <?php } ?>
                <?php if (get_field('contacts')['address_2']) { ?>
                    <a href="#" class="contacts__row">
                        <div class="contacts__icon">
                            <img src="/wp-content/themes/osipov/img/svg/pin.svg" alt="">
                        </div>
                        <div class="contacts__text">Санкт-Петербург,<br><?= get_field('contacts')['address_2']; ?></div>
                    </a>
                <?php } ?>
                <a href="" class="contacts__row">
                    <div class="contacts__icon">
                        <img src="/wp-content/themes/osipov/img/svg/vk-b.svg" alt="">
                    </div>
                    <div class="contacts__text">вконтакте</div>
                </a>
                <a href="" class="contacts__row">
                    <div class="contacts__icon">
                        <img src="/wp-content/themes/osipov/img/svg/insta-b.svg" alt="">
                    </div>
                    <div class="contacts__text">инстаграм</div>
                </a>
                <a href="" class="contacts__row">
                    <div class="contacts__icon">
                        <img src="/img/svg/watch.svg" alt="">
                    </div>
                    <div class="contacts__text">10:00 — 22:00</div>
                </a>
            </div>

            <div class="map">
                <iframe src="https://snazzymaps.com/embed/180114" width="100%" height="600px"
                        style="border:none;"></iframe>
            </div>
        </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="copyright">©2019 Осипов Имидж студия</div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Перезвоним и проконсультируем</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Контактная форма 1"]') ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="/wp-content/themes/osipov/js/script.min.js"></script>
</body>
</html>