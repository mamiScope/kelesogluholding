<?php
/*
 * Template Name: Detail Koru Florya
 */
?>
<!doctype html>

<head>



    <?php include('header.php'); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>
        <?php endwhile; ?>

    <?php endif; ?>
    <div class="headSliderData relativeCont pageslidedata" style="background:url('<?php echo $featured_img_url; ?>') no-repeat top center;">
        <div class="head_logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/koruflorya.svg" alt="" />
        </div>
        <div class="clear"></div>
    </div>

    <div class="marinaContent stickyWrapperContent" data-sticky_parent>
        <div class="tabCol" data-sticky_column>
            <a class="gotoLink" href="#projectDetailText"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon1.png" alt="" />О проекте</a>
            <a class="gotoLink" href="#marina_vp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon2.png" alt="" />Местоположение</a>
            <a class="gotoLink" href="#marina_galeri"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon3.png" alt="" />Галерея</a>
            <a class="gotoLink" href="#marina_tasarim_mimari"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon4.png" alt="" />Дизайн</a>
            <a class="gotoLink" href="#marina_ornek_daire"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon5.png" style="max-width:80px;" alt="" />Социальная жизнь</a>
        </div>
        <div class="marinatabContent">
            <div id="projectDetailText" class="projectDetailText">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php $arch_bg = get_post_meta(get_the_ID(), 'mimarbg', true);  ?>
                        <?php $arch_bg2 = get_post_meta(get_the_ID(), 'mimarbg2', true);  ?>
                        <?php $adres_text = get_post_meta(get_the_ID(), 'adres_text', true);  ?>
                        <?php $adres_map = get_post_meta(get_the_ID(), 'adres_map', true);  ?>
                        <?php $gallery_path = get_post_meta(get_the_ID(), 'gallery_path', true);  ?>
                        <?php $gallery_size = get_post_meta(get_the_ID(), 'gallery_size', true);  ?>
                        <?php $sosyal_size = get_post_meta(get_the_ID(), 'sosyal_size', true);  ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="space100"></div>
            <div id="marina_vp" class="marina_vaziyet_plani">

                <div class="ptdatatitle">Адрес</div>
                <div class="ptadres">
                    <p><?php echo $adres_text; ?></p><a href="https://www.google.com/maps/place/Koru+Florya+Sat%C4%B1%C5%9F+Ofisi/@40.9837957,28.7803322,17z/data=!3m1!4b1!4m8!3m7!1s0x14caa3c589a171c1:0x8cab00d0cdaa4f8f!5m2!1s2018-10-22!2i2!8m2!3d40.9837957!4d28.7825209" class="u_yol t2" target="_blank">Схема проезда</a>
                </div>
                <div id="small_map"></div>

            </div>
            <div class="space100"></div>
            <div id="marina_galeri" class="marina_galeri relative">
                <div class="master-slider ms-skin-default" id="masterslider1">
                    <?php
                    for ($i = 1; $i <= intval($gallery_size); $i++) {
                    ?>
                        <div class="ms-slide" data-delay="4"><a href="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path; ?>/galeri/high/<?php echo $i; ?>.jpg" data-fancybox="gallery" class="image-toggle" rel="marinagaleri"></a>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/blank.gif" data-src="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path; ?>/galeri/<?php echo $i; ?>.jpg" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="arrowData">
                    <a class="prevData1"></a>
                    <a class="nextData1"></a>
                </div>
                <div class="ptdatatitle">Галерея</div>
            </div>
            <div class="space100"></div>
            <div id="marina_tasarim_mimari" class="marina_tasarim_mimari relative">
                <img src="<?php echo wp_get_attachment_url($arch_bg); ?>" alt="" />
                <div class="popupText3">
                    <h2>Архитектор КоруФлорья – «Крафт Мимарлык» <br><span>Хакан Багджи & Назлы Кынастепе</span></h2>
                    <p>«КРАФТ МИМАРЛЫК», учрежденная Назлы Кынастепе и Хаканом Багджи в 2008 году, предоставляет услуги в качестве архитектора проекта (концепция, лицензия, реализация, координация) в таких крупномасштабных архитектурных проектах, как торговые центры, жилмассивы, конференц-залы, офисы, транспортные узлы, стадионы, гостиницы и высотные здания.</p>
                    <p>«КРАФТ МИМАРЛЫК», целью которой является создание функциональных, впечатляющих объектов, сочетающих современную архитектуру с традиционными привычками пользователей, находит в этом процессе функциональные, экономичные и быстрые решения. Подчеркивая в своих проектах близнецов природы – зелень и экологию, стремится интегрировать их с современным интерьером и экстерьером зданий.
                    </p>
                </div>
                <div class="ptdatatitle">дизайн и архитектура</div>
            </div>
            <div class="space100"></div>
            <div id="marina_tasarim_mimari" class="marina_tasarim_mimari relative">
                <img src="<?php echo wp_get_attachment_url($arch_bg2); ?>" alt="" />
                <div class="popupText3">
                    <h2>Архитектор КоруФлорья - Бродвей Малян
                        <br><span>Питер Воган</span></h2>
                    <p>Питер имеет более чем 20-летний опыт работы во всех областях урбанизированной среды и был ответственным за разработку и реализацию масштабных проектов в Великобритании и на международном уровне. В настоящее время он  работает в лондонской студии и серьёзно сосредоточен на локальных решениях и командном подходе, которые реализуются посредством семинаров и участия клиентов.</p>

                    <p>Питер обладает большим опытом в проектировании крупномасштабных жилых / многофункциональных комплексов, специализируясь на высотных зданиях, таких как 50-этажные небоскрёбы Сейрантепе в Турции и высотные жилые здания «Port Baku Residence» в Азербайджане.</p>
                </div>
                <div class="ptdatatitle">дизайн и архитектура</div>
            </div>
            <div class="space100"></div>
            <div id="marina_ornek_daire" class="marina_galeri relative">
                <div class="ptdatatitle">midclubs</div>
                <div class="slidePopup2">
                    <p>Социальный объект КоруФлорья</p>

                    <p>Проект КоруФлорья продолжает предоставлять своим жителям широкий спектр качественных услуг для отдыха и развлечений, включая крытый бассейн, турецкую баню, СПА, фитнес-центр.</p>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/projeler/koruflorya.jpg" alt="" />
                <div class="ptdatatitle">Социальный объект</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>



    <?php include('footer.php'); ?>
    <script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/skins/default/style.css" />
    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/masterslider.js"></script>
    <script type="text/javascript">
        var slider = new MasterSlider();
        slider.setup('masterslider1', {
            width: 1500,
            height: 900,
            space: 1,
            loop: true,
            preload: 0,
            centerControls: true,
            autoplay: false,
            view: 'parallaxMask',
            layout: 'boxed',
            fullscreenMargin: 0,
            instantStartLayers: true,
            swipe: true,
        });
        var slider2 = new MasterSlider();
        slider2.setup('masterslider2', {
            width: 1500,
            height: 900,
            space: 1,
            loop: true,
            preload: 0,
            centerControls: true,
            autoplay: false,
            view: 'parallaxMask',
            layout: 'boxed',
            fullscreenMargin: 0,
            instantStartLayers: true,
            swipe: true,
        });
        var slider3 = new MasterSlider();
        slider3.setup('masterslider3', {
            width: 1500,
            height: 900,
            space: 1,
            loop: true,
            preload: 0,
            centerControls: true,
            autoplay: false,
            view: 'parallaxMask',
            layout: 'boxed',
            fullscreenMargin: 0,
            instantStartLayers: true,
            swipe: true,
        });
        $(document).ready(function() {
            $('#havadanbak').attr('src', 'http://www.denizistanbul.com/360');
            $('.prevData1').click(function() {
                slider.api.previous();
            });
            $('.nextData1').click(function() {
                slider.api.next();
            });
            $('.prevData2').click(function() {
                slider2.api.previous();
            });
            $('.nextData2').click(function() {
                slider2.api.next();
            });

            $('.prevData3').click(function() {
                slider3.api.previous();
            });
            $('.nextData3').click(function() {
                slider3.api.next();
            });

            small_map(<?php echo $adres_map; ?>);

        });
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            var wt = $(window).scrollTop() + 110;
            $('.tabCol .gotoLink').removeClass('active');
            if (wt > $('#marina_ornek_daire').position().top) {
                $('.tabCol .gotoLink[href="#marina_ornek_daire"]').addClass('active');
            } else if (wt > $('#marina_tasarim_mimari').position().top) {
                $('.tabCol .gotoLink[href="#marina_tasarim_mimari"]').addClass('active');
            } else if (wt > $('#marina_galeri').position().top) {
                $('.tabCol .gotoLink[href="#marina_galeri"]').addClass('active');
            } else if (wt > $('#marina_vp').position().top) {
                $('.tabCol .gotoLink[href="#marina_vp"]').addClass('active');
            } else if (wt > $('#projectDetailText').position().top) {
                $('.tabCol .gotoLink[href="#projectDetailText"]').addClass('active');
            }
        }
        $(document).ready(function() {
            $(".tabCol").stick_in_parent({
                offset_top: 150
            });
        });
    </script>
    <script>
        $("body").addClass("pdetay");
        $("#menu_li3 a").addClass("active");
    </script>
    </body>

    </html>