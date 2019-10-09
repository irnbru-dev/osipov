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
    <?php wp_head(); ?>
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
                    <li><a href="<?= get_field('contacts')['vk_link'] ?>" target="_blank"><img src="/wp-content/themes/osipov/img/svg/vk.svg" alt=""></a></li>
                    <li><a href="<?= get_field('contacts')['tg_link'] ?>"  target="_blank"><img src="/wp-content/themes/osipov/img/svg/telegram.svg" alt=""></a></li>
                    <li><a href="<?= get_field('contacts')['whats_link'] ?>"  target="_blank"><img src="/wp-content/themes/osipov/img/svg/whatsapp.svg" alt=""></a></li>
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

<?php $bg = get_field('main_background'); ?>

<div class="first-block" style="background-image: url(<?= $bg['url'] ?>)">
    <div class="container">

        <div class="promo promo-owl owl-carousel">

            <?php if (have_rows('main_slider')):

                while (have_rows('main_slider')) : the_row();
                    while (have_rows('main_offer')) : the_row(); ?>

                        <div class="item">
                            <div class="price">
                                <div class="price-old"><?= the_sub_field('old_price'); ?></div>
                                <div class="price-new"><?= the_sub_field('new_price'); ?></div>
                            </div>

                            <div class="promo-txt">
                                <p class="promo-txt-main"><?= the_sub_field('text'); ?></p>
                                <ul class="promo-list">
                                    <?= the_sub_field('list'); ?>
                                </ul>
                            </div>
                        </div>
                    <? endwhile; ?>
                <? endwhile; ?>
            <? endif; ?>
        </div>

        <button class="btn promo__btn" data-toggle="modal" data-target="#exampleModal">Заявка на звонок</button>
    </div>
</div>

<section class="advantages wow fadeIn">
    <div class="container">
        <h2><?= get_field('main_advantages_title') ?></h2>
        <div class="row">

            <?php if (have_rows('main_advantages')):

                while (have_rows('main_advantages')) : the_row(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="advantages__item">
                            <div class="advantages__icon"><img src="<?= the_sub_field('icon'); ?>" alt="">
                            </div>
                            <div class="advantages__title"><?= the_sub_field('title'); ?></div>
                            <div class="advantages__txt"><?= the_sub_field('text'); ?></div>
                        </div>
                    </div>
                <? endwhile; ?>
            <? endif; ?>
        </div>
    </div>
</section>

<section class="gallery wow fadeIn">
    <div class="container">
        <h2><?= get_field('main_gallery')['gallery_title'] ?></h2>
        <p class="subtitle"><?= get_field('main_gallery')['gallery_subtitle'] ?></p>


        <div class="gallery-owl owl-carousel"

            <?php if (have_rows('main_gallery')):

                while (have_rows('main_gallery')) : the_row();
                    while (have_rows('photos')) : the_row(); ?>

                       <?php $gallery_img = get_field('photo');?>

                        <a data-fancybox="gallery" href="<?= the_sub_field('photo'); ;?>">
                            <img src="<?= the_sub_field('photo'); ;?>" alt="">
                        </a>

                    <? endwhile; ?>
                <? endwhile; endif; ?>

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
                                        <a href="<?= the_sub_field('instalink'); ?>" class="team__img" target="_blank">
                                            <img src="<?= the_sub_field('img'); ?>" alt="">
                                            <div class="insta-icon">
                                            </div>
                                        </a>
                                        <div class="team__cat"><?= the_sub_field('category'); ?></div>
                                        <div class="team__name"><?= the_sub_field('name'); ?></div>
                                    </div>
                                </div>

                            <? endwhile; ?>
                        <? endif; ?>

                    </div>
                </div>
                <?php if (have_rows('main_team_2')): ?>

                    <div class="tab-pane fade" id="add-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">

                            <? while (have_rows('main_team_2')) : the_row(); ?>

                                <div class="col-md-6 col-lg-3">
                                    <div class="team__item">
                                        <a href="<?= the_sub_field('instalink'); ?>" class="team__img" target="_blank">
                                            <img src="<?= the_sub_field('img'); ?>" alt="">
                                            <div class="insta-icon">
                                            </div>
                                        </a>
                                        <div class="team__cat"><?= the_sub_field('category'); ?></div>
                                        <div class="team__name"><?= the_sub_field('name'); ?></div>
                                    </div>
                                </div>

                            <? endwhile; ?>

                        </div>
                    </div>
                <? endif; ?>
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
                    <div class="contacts__row">
                        <div class="contacts__icon">
                            <img src="/wp-content/themes/osipov/img/svg/pin.svg" alt="">
                        </div>

                        <div class="contacts__text">Санкт-Петербург,<br><?= get_field('contacts')['address_1']; ?></div>
                    </div>
                <?php } ?>
                <?php if (get_field('contacts')['address_2']) { ?>
                    <div class="contacts__row">
                        <div class="contacts__icon">
                            <img src="/wp-content/themes/osipov/img/svg/pin.svg" alt="">
                        </div>
                        <div class="contacts__text">Санкт-Петербург,<br><?= get_field('contacts')['address_2']; ?></div>
                    </div>
                <?php } ?>
                <a href="<?= get_field('contacts')['vk_link'] ?>" class="contacts__row" target="_blank">
                    <div class="contacts__icon">
                        <img src="/wp-content/themes/osipov/img/svg/vk-b.svg" alt="">
                    </div>
                    <div class="contacts__text">Вконтакте</div>
                </a>
                <a href="<?= get_field('contacts')['main_instalink'] ?>" class="contacts__row"  target="_blank">
                    <div class="contacts__icon">
                        <img src="/wp-content/themes/osipov/img/svg/insta-b.svg" alt="">
                    </div>
                    <div class="contacts__text">Инстаграм</div>
                </a>
                <div class="contacts__row">
                    <div class="contacts__icon">
                        <img src="/wp-content/themes/osipov/img/svg/watch.svg" alt="">
                    </div>
                    <div class="contacts__text"><?= get_field('contacts')['time'] ?></div>
                </div>
            </div>

            <div class="map">
                <iframe src="https://snazzymaps.com/embed/180114" width="100%" height="600px"
                        style="border:none;"></iframe>
            </div>
        </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="copyright">© <?php date('Y') ?> <?= get_field('contacts')['copyright']?></div>
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

<?php wp_footer(); ?>
</body>
</html>