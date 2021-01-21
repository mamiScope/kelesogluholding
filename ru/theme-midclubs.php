<?php 
/*
 * Template Name: Midclubs
 */
 ?>
<!doctype html>
<head>

    
   <?php include('header.php');
$template_url = get_bloginfo('template_directory');
$slideData = get_mobile();
?>
<style type="text/css">
.page-template-theme-midclubs .yatirim_content h2{font-size: 50px;font-weight: 700;color:#fff;}
.page-template-theme-midclubs .yatirim_content ul{margin-bottom: 10px;}
.page-template-theme-midclubs .yatirim_content ul li{color: #706f6f; list-style: disc; margin-left: 16px; padding: 5px 0;}
.page-template-theme-midclubs .gonyeLogo{width: 150px; margin: 10px; margin-left: 0;}
.wRow img{ width: 100%;}
</style>
<!-- masterslider -->
<?php if ($slideData['tabletmobile']) { ?>
    <div class="relative videoSliderMobile">
        <video id="sliderVideoData" style="width:100%;" poster="http://www.scope.digital/dev/cennetkoru/wp-content/uploads/2018/03/midclubs_bg.jpg" >
            <source id="mp4" src="https://player.vimeo.com/external/272334406.hd.mp4?s=b4f94bb16fa4f80a7f18ff45a67ba306c0ecb2c0&profile_id=175" type="video/mp4"/>
            </video>
            <span class="playBtn videoPlaySlider"></span>
        </div>
    <?php } else { ?>
        <div class="master-slider ms-skin-default videoSlider" id="masterslider">
            <div class="ms-slide" data-fill-mode="fit" data-delay="5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/blank.gif" data-src="http://www.scope.digital/dev/cennetkoru/wp-content/uploads/2018/03/midclubs_bg.jpg"/>     
                <video id="sliderVideoData" data-autopause="false" data-mute="true" poster="http://www.scope.digital/dev/cennetkoru/wp-content/uploads/2018/03/midclubs_bg.jpg" data-loop="true" data-fill-mode="fill">
                    <source id="mp4" src="https://player.vimeo.com/external/272334406.hd.mp4?s=b4f94bb16fa4f80a7f18ff45a67ba306c0ecb2c0&profile_id=175" type="video/mp4"/>
                    </video>
                </div>
            </div>
        <?php } ?>
        <!-- end of masterslider -->
        <div class="clear"></div>
        <div class="new_gray_title">
            <div class="container">
                <p class=""><img class="dibImage" src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" alt="" />&nbsp;&nbsp; <span style="color: #e2a022;">midclubs</span></p>
            </div>
        </div>
        <div class="clear"></div>

        <div class="dark_row">
            <div class="container">
                <a href="http://www.denizistanbul.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs-denizistanbul.jpg" alt="" class="left_half three_half" /></a>
                <a href="http://www.cennetkoru.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs-cennetkoru.jpg" alt="" class="left_half three_half" /></a>
                <a href="http://www.luxinkadikoy.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs-luxinkadikoy.jpg" alt="" class="left_half three_half" /></a>
                <div class="yatirim_content absolute-center-y">
                    <h2><span style="color: #e2a022;">midclubs</span><br>
                    с разным дизайном для каждого проекта
                    </h2>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="light_row">
    <div class="container">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs2.jpg" alt="" class="left_half">
        <div class="yatirim_content absolute-center-y midclubs-content">
            <p style="font-size: 38px; line-height: 1; color: #c6c6c6;">К вашим услугам самый престижный спортивный и жизненный клуб Стамбула в CennetKoru (ДженнетКору) !</p>
            <ul>
<li>Открытые и крытые плавательные бассейны</li>
<li>Сауна</li>
<li>Витамин бар (Vitamin Bar)</li>
<li>Настольный теннис</li>
<li>Турецкая баня (хамам)</li>
<li>Кинотеатр</li>
<li>Игровая комната (PlayStation)</li>
            </ul>               
            <p style="color:#c6c6c6;"> Будут доступны только для жителей ДженнетКору.</p>
        </div>
        <div class="clear"></div>
    </div>
</div>

        <div class="dark_row">
            <div class="container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs3.jpg" alt="" class="left_half" />
                <div class="yatirim_content absolute-center-y">
                    <h2 class="h2D" style="text-align: right;">В сердце <br>ДенизИстанбула !</h2>
                    <p style="text-align: right;">                        
                    midclubs, в плане расположения занимает место в самом центре этапов ДенизИстанбул, на участке площадью <strong style="color:#fff;">13.000</strong> м2. Обещает предоставить возможность полноценного жизненного опыта, имея просторное помещение, где одновременно могут заниматься спортом <strong style="color:#fff;">250</strong> человек, парковку на <strong style="color:#fff;">180</strong> машиномест и зону отдыха. Роскошное тренажерное оборудование и удобные решения, используемые внутри, обеспечат вам возможность насладиться спортом.</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="light_row">
    <div class="container">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/midclubs4.jpg" alt="" class="left_half" />
        <div class="yatirim_content absolute-center-y midclubs-content">
            <h2>ДенизИстанбул спроектирован <span style="color: #e2a022;">midclubs</span>.
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/gonye.png" alt="" class="gonyeLogo"></h2>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="space100"></div>
<div class="container" id="midcontainer">
    <div id="grid" class="midc wRow imageGrid">
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/1-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/1-8.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/2-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/2-8.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/3-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/3-8.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/4-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/212.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/5-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/21-1.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/6-8.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/6-8.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/7-6.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/7-6.jpg" alt=""/></a></div>
        <div class="wRow_50 picture-item"><a data-fancybox="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/high/8-6.jpg" class="image-toggle"><img src="<?php bloginfo('template_directory'); ?>/assets/images/8-6.jpg" alt=""/></a></div>
    </div>
</div>
<div class="space100"></div>
<div class="clear"></div>
        <?php include('footer.php'); ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/style/masterslider.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/skins/default/style.css" />
        <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/jquery.easing.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/masterslider/masterslider.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.shuffle.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.shuffle.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var $grid = $('#grid');
                var $sizer = $grid.find('.shuffle__sizer');
                $grid.shuffle({
                    itemSelector: '.picture-item',
                    sizer: $sizer
                });
                setTimeout(function(){
                    $grid.shuffle('update');
                },8000);
                setTimeout(function(){
                    $grid.shuffle('update');
                },12000);

                $("#grid a").fancybox({
                    cyclic  :   false,
                });

            });
        </script>
        <?php if (!$slideData['tabletmobile']) { ?>
            <script type="text/javascript">
                var videoSlider = new MasterSlider();
                if ($(window).width() > 768) {
                    videoSlider.setup('masterslider', {
                    width: $(window).width(),
                    height: $(window).height(),
                    space: 1,
                    loop: true,
                    preload: 0,
                    centerControls: true,
                    autoplay: false,
                    view: 'parallaxMask',
                    layout: 'fullscreen',
                    fullscreenMargin: 100,
                    instantStartLayers: false,
                    swipe: false,
                });
                }
                if ($(window).width() <= 768) {
                    videoSlider.setup('masterslider', {
                    width: $(window).width(),
                    height: ($(window).height()) / 4,
                    space: 1,
                    loop: true,
                    preload: 0,
                    centerControls: true,
                    autoplay: false,
                    view: 'parallaxMask',
                    fullscreenMargin: 100,
                    instantStartLayers: false,
                    swipe: false,
                });
                }
            </script>
        <?php } else { ?>
            <script>
                $(document).ready(function () {
                    $('.videoPlaySlider').click(function () {
                        $('#sliderVideoData').get(0).play();
                        $(this).hide();
                    });
                });
            </script>

        <?php } ?>
        <script type="text/javascript">                    
            $( window ).scroll(function() {
                var scrollWindow = $(window).scrollTop();
                var vid = $('#sliderVideoData').get(0);
                if (scrollWindow >= 600) {
                 console.log("scroll ok");
                 vid.volume = 0.0;
             }   
             else{
                vid.volume = 1.0;
            }                     
        });
    </script>
    <script>
$("#menu_li8 a").addClass("active");
</script>
    <?php get_footer(); ?>