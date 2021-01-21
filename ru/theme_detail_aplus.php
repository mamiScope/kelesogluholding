<?php
/*
 * Template Name: Detail Aplus
 */
?>
<!doctype html>
<head>


	
	<?php include('header.php'); ?>
	
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 
<?php	
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

 ?>
	<?php endwhile; ?>
	
<?php endif; ?>
	<div class="headSliderData relativeCont pageslidedata" style="background:url('<?php echo $featured_img_url; ?>') no-repeat top center;">
        <div class="head_logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/a_plus.svg" alt=""/>
        </div>
		<div class="clear"></div>
	</div>

	<div class="marinaContent stickyWrapperContent" data-sticky_parent>
		<div class="tabCol"  data-sticky_column>
			<a class="gotoLink" href="#projectDetailText"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon1.png" alt=""/>О проекте</a>
			<a class="gotoLink" href="#marina_vp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon2.png" alt=""/>Местоположение</a>
			<a class="gotoLink" href="#marina_galeri"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon3.png" alt=""/>Галерея</a>
			<a class="gotoLink" href="#marina_tasarim_mimari"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon4.png" alt=""/>Дизайн</a>
		</div>
    <div class="marinatabContent">
        <div id="projectDetailText" class="projectDetailText">
            <?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>    
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php $arch_bg = get_post_meta( get_the_ID(), 'mimarbg', true );  ?>
					<?php $arch_bg2 = get_post_meta( get_the_ID(), 'mimarbg2', true );  ?>
					<?php $adres_text = get_post_meta( get_the_ID(), 'adres_text', true );  ?>
					<?php $adres_map = get_post_meta( get_the_ID(), 'adres_map', true );  ?>
					<?php $gallery_path = get_post_meta( get_the_ID(), 'gallery_path', true );  ?>
					<?php $gallery_size = get_post_meta( get_the_ID(), 'gallery_size', true );  ?>
					<?php $sosyal_size = get_post_meta( get_the_ID(), 'sosyal_size', true );  ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
        <div class="space100"></div>
        <div id="marina_vp" class="marina_vaziyet_plani">
            
                <div class="ptdatatitle">Адрес</div>
				<div class="ptadres"><p><?php echo $adres_text; ?></p><a href="https://www.google.com/maps/place/Atak%C3%B6y+2-5-6.+Mahallesi,+Adnan+Kahveci+Blv.+No:3,+34158+Bak%C4%B1rk%C3%B6y%2F%C4%B0stanbul/@40.978539,28.8483987,17z/data=!3m1!4b1!4m5!3m4!1s0x14caa34f2bf7a94d:0x7056f5fc9f8bf6f0!8m2!3d40.978539!4d28.8505874" class="u_yol t2" target="_blank">Схема проезда</a></div>
                <div id="small_map"></div>
            
        </div>
        <div class="space100"></div>
        <div id="marina_galeri" class="marina_galeri relative">
            <div class="master-slider ms-skin-default"  id="masterslider1">
				<?php
					for($i=1; $i<=intval($gallery_size); $i++)
					{
						?>
						<div class="ms-slide" data-delay="4"><a href="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path;?>/galeri/high/<?php echo $i; ?>.jpg" data-fancybox="gallery" class="image-toggle" rel="marinagaleri"></a>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/blank.gif" data-src="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path;?>/galeri/<?php echo $i; ?>.jpg"/>
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
            <img src="<?php echo wp_get_attachment_url($arch_bg); ?>" alt=""/>
            <div class="popupText3">
                <h2>архитектор ТЦ А Плюс Атакёй<br><span>Дара Кырмызытопрак</span></h2>
                <p>уроженка Анкары 1962 года рождения, выпускница архитектурного факультета СТУ 1982 года. Должна признать, что для получения образования и осуществления профессиональной деятельности мне повезло больше чем архитекторам предыдущего поколения поскольку Турция, в связи с поставленными стабильными и социальными целями  перешла к системе упорядочивания населенных мест, усилению чувства соседства у жителей одного района или жилого дома, начала придавать важность жилому и рабочему пространству. Если мы добавим к этому обилие материалов (сначала с импортом, затем с производством), открытый и смелый подход профиля клиента к инновациям, новые возможности для путешествий и общения, я бы сказала, что мы действительно являемся свидетелями и пионером эпохи, которая переживает значительный рывок в архитектурной отрасли.</p>
            </div>
            <div class="ptdatatitle">дизайн и архитектура</div>
        </div><div class="space100"></div>
        <div id="marina_tasarim_mimari" class="marina_tasarim_mimari relative">
            <img src="<?php echo wp_get_attachment_url($arch_bg2); ?>" alt=""/>
            <div class="popupText3">
                <h2>Архитектор ТЦ А Плюс Атакёй<br><span>Гёкхан Авджиоглу</span></h2>
                <p>в Стамбуле в 1994 году основал компанию GAD (Global Architectural Development), а в 2014 году, для проведения исследований и предоставления информации в области архитектуры и культуры поселения – фонд GAD. Эти две разные организации, учрежденные Гёкханом Авджиоглу, который завершил архитектурное образование в 1983 году в КСУ, с одной стороны разрабатывают методы строительства и развития, а с другой, развивают гипотезы об архитектурном наследии, архитектуре помещений, сегодняшних потребностях и даже жизни на других планетах в будущем и периодически делятся ими через  средства массовой информации.</p>
                <p>В течение 25 лет существования, GAD с офисом создал более 250 проектов и принимал участие в реализации значительной части из них в различных функциях и на разных этапах.</p>
            </div>
            <div class="ptdatatitle">дизайн и архитектура</div>
        </div>
        <div class="space100"></div>
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
    $(document).ready(function () {
        $('#havadanbak').attr('src','http://www.denizistanbul.com/360');
        $('.prevData1').click(function () {
            slider.api.previous();
        });
        $('.nextData1').click(function () {
            slider.api.next();
        });
        $('.prevData2').click(function () {
            slider2.api.previous();
        });
        $('.nextData2').click(function () {
            slider2.api.next();
        });

        $('.prevData3').click(function () {
            slider3.api.previous();
        });
        $('.nextData3').click(function () {
            slider3.api.next();
        });

        small_map(<?php echo $adres_map; ?>);
    });
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        var wt = $(window).scrollTop() + 110;
        $('.tabCol .gotoLink').removeClass('active');
        if(wt > $('#marina_tasarim_mimari').position().top){
            $('.tabCol .gotoLink[href="#marina_tasarim_mimari"]').addClass('active');
        }else if(wt > $('#marina_galeri').position().top){
            $('.tabCol .gotoLink[href="#marina_galeri"]').addClass('active');
        }else if(wt > $('#marina_vp').position().top){
            $('.tabCol .gotoLink[href="#marina_vp"]').addClass('active');
        }else if(wt > $('#projectDetailText').position().top){
            $('.tabCol .gotoLink[href="#projectDetailText"]').addClass('active');
        }
    }
    $(document).ready(function(){
        $(".tabCol").stick_in_parent({offset_top:150});
    });
</script>
<script>
$("body").addClass("pdetay");
$("#menu_li3 a").addClass("active");


</script>
</body>
</html>