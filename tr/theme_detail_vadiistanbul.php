<?php
/*
 * Template Name: Detail Vadi İstanbul
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
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/vadistanbul.svg" alt="vadistanbul"/>
        </div>
		<div class="clear"></div>
	</div>

	<div class="marinaContent stickyWrapperContent" data-sticky_parent>
		<div class="tabCol"  data-sticky_column>
			<a class="gotoLink" href="#projectDetailText"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon1.png" alt=""/>Proje Hakkında</a>
			<a class="gotoLink" href="#marina_vp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon2.png" alt=""/>Konum</a>
			<a class="gotoLink" href="#marina_galeri"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon3.png" alt=""/>Galeri</a>
			<a class="gotoLink" href="#marina_tasarim_mimari"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon4.png" alt=""/>Tasarım</a>
			<a class="gotoLink" href="#marina_example"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon6.png" style="max-width:80px;" alt=""/>Örnek Daire</a> 
			<a class="gotoLink" href="#marina_ornek_daire"><img src="<?php bloginfo('template_directory'); ?>/assets/images/marina_icon5.png" style="max-width:80px;" alt=""/>Sosyal Yaşam</a> 
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
					<?php $ornek_size = get_post_meta( get_the_ID(), 'ornek_size', true );  ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
        <div class="space100"></div>
        <div id="marina_vp" class="marina_vaziyet_plani">
            
                <div class="ptdatatitle">Adres</div>
				<div class="ptadres"><p><?php echo $adres_text; ?></p><a href="https://www.google.com/maps/search/vadi+istanbul+avm/@41.1061812,28.9851227,17z/data=!3m1!4b1" class="u_yol t2" target="_blank">YOL TARİFİ</a></div>
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
            <div class="ptdatatitle">Galeri</div>
        </div>
        <div class="space100"></div>
        <div id="marina_tasarim_mimari" class="marina_tasarim_mimari relative">
            <img src="<?php echo wp_get_attachment_url($arch_bg); ?>" alt=""/>
            <div class="popupText3">
                <h2>Vadistanbul’un Master Planı<br><span>SOM architecture</span></h2>
                <p>Skidmore, Owings & Merrill LLP (SOM) is one of the largest and most influential architecture, interior design, engineering, and urban planning firms in the world. Founded in 1936, we have completed more than 10,000 projects in over 50 countries. We are renowned for our iconic buildings and our commitment to design excellence, innovation, and sustainability.</p>
            </div>
            <div class="ptdatatitle">Tasarım ve Mimarlık</div>
        </div>
        <div class="space100"></div>
		<div id="marina_tasarim_mimari" class="marina_tasarim_mimari relative">
            <img src="<?php echo wp_get_attachment_url($arch_bg2); ?>" alt=""/>
            <div class="popupText3">
                <h2>Vadistanbul’un Mimarı<br><span>iki design</span></h2>
                <p>Skidmore, Owings & Merrill LLP (SOM) is one of the largest and most influential architecture, interior design, engineering, and urban planning firms in the world. Founded in 1936, we have completed more than 10,000 projects in over 50 countries. We are renowned for our iconic buildings and our commitment to design excellence, innovation, and sustainability.</p>
            </div>
            <div class="ptdatatitle">Tasarım ve Mimarlık</div>
        </div>
        <div class="space100"></div>
        <div id="marina_example" class="marina_galeri relative">
            <div class="master-slider ms-skin-default"  id="masterslider3">
				<?php
					for($i=1; $i<=intval($ornek_size); $i++)
					{
						?>
						<div class="ms-slide" data-delay="4"><a href="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path;?>/ornek/high/<?php echo $i; ?>.jpg" data-fancybox="gallery" class="image-toggle" rel="marinagaleri"></a>
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/blank.gif" data-src="<?php bloginfo('template_directory'); ?>/assets/projects/<?php echo $gallery_path;?>/ornek/<?php echo $i; ?>.jpg"/>
						</div>
						<?php
					}
				?>
           </div>
            <div class="arrowData">
                <a class="prevData1"></a>
                <a class="nextData1"></a>
            </div>
            <div class="ptdatatitle">Örnek Daire</div>
        </div>
        <div class="space100"></div>
        <div id="marina_ornek_daire" class="marina_galeri relative">
           <div class="ptdatatitle">midclubs</div>
            <div class="slidePopup2">
                <p>Vadistanbul Sosyal Tesis</p>
                
                <p>2015 yılında "Spor ve Sağlıklı Yaşam" bilincini komşularına kazandırmak maksadıyla hizmete başlayan Vadistanbul sosyal tesis, sektörel gelişmelere hızla adaptasyon sağlayarak, ihtiyaç duyulan her konuda, amaç doğrultusunda, hedefe en kısa sürede ulaştırma adına mücadele vermektedir. Sağlığınızı korumak, yaşam kalitenizi arttırmak, komşuluk ilişkilerinizi ve sosyal bağlarınızı kuvvetlendirmek bu mücadelenin bir parçası. Siz sadece, "Harekete Geçin".</p>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/projeler/vadistanbul.jpg" alt=""/>
            <div class="ptdatatitle">Sosyal Tesis</div>
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
        if(wt > $('#marina_ornek_daire').position().top){
            $('.tabCol .gotoLink[href="#marina_ornek_daire"]').addClass('active');
        }else if(wt > $('#marina_example').position().top){
            $('.tabCol .gotoLink[href="#marina_example"]').addClass('active');
        }else if(wt > $('#marina_tasarim_mimari').position().top){
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