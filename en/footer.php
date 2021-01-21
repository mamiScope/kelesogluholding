        <?php include('form.php'); ?>
<?php if(!@$footerHide){ ?>
<div class="new_gray_title">
	<div class="container">
		<p class="">Projects Location<br><small>We continue working on the projects at the most distinguished locations of Istanbul.</small></p>
	</div>
</div>
	 
<div id="new_map"></div>

<footer>
	<div id="bg-mark"></div>
	<div id="footer_mid">
		<div class="container">
			<div class="footer-col">
				<div class="footer-col-title">About Us</div>
				<div class="footer-col-desc">
					<p style="color:#ecc025;">We take pride in what we do - whether it’s constructing a project, breaking ground on new technology, or getting involved in the community.  
<br><br>
Our work spans beyond building buildings; it impacts people and makes a difference.</p>
				</div>
			</div>
			<div class="footer-col">
				<div class="footer-col-title">Site Map</div>
				<div class="footer-col-desc">
					<ul class="footer-nav">
						<li><a href="<?php bloginfo('url'); ?>/">Homepage</a></li>
						<li><a href="<?php bloginfo('url'); ?>/projects">Projects</a></li>
						<li><a href="<?php bloginfo('url'); ?>/design-and-architecture">Design and Architecture</a></li>
						<li><a href="<?php bloginfo('url'); ?>/about-kelesoglu">About Keleşoğlu</a></li>
						<li><a class="midclubs_color" href="<?php bloginfo('url'); ?>/midclubs">midclubs</a></li>
						<li><a href="<?php bloginfo('url'); ?>/sustanability">Sustanability</a></li>
						<li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/assets/verisahibibasvuruformu.docx">About Applications to be<br> Made by Personal Data Owner<br> to Data Controller Data Owner<br> Application Form</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-col">
				<div class="footer-col-title">Contact</div>
				<div class="footer-col-desc">
					<p>Marmara Mah. Ulusum Cad. No: 4/1 Yakuplu Sahil / İSTANBUL</p>
					<p><a href="tel:+902128502299" class="t2">+90(212) 850 22 99</a><br/>
						<a href="mailto:info@kelesogluholding.com" class="t2">info@kelesogluholding.com</a></p>
					<ul class="footer-social">
						<li class="facebook"> <a href="https://www.facebook.com/KelesogluHolding"><i class="fa fa-facebook"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com/kelesogluholding"><i class="fa fa-instagram"></i></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/company/10651007?trk=prof-exp-company-name"><i class="fa fa-linkedin"></i></a></li>
						<li class="youtube"> <a href="https://www.youtube.com/channel/UCiVD4Dug43qkyewjFM0HRfQ"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<div class="clear"></div>
					<div class="footer-career"><a class="button-inline t2" href="https://www.kariyer.net/firma-profil/kelesoglu-holding-55846-133179" target="_blank">Career</a></div>
				</div>
			</div>
			<div class="footer-col">
				<div class="footer-col-title">Press Releases</div>
				<div class="footer-col-desc footer-last">
					<ul class="footer-news">
						<li><a class="t2" href="http://www.milliyet.com.tr/yakuplu-da-hudut-kapisi-coskusu-ekonomi-2705585/" target="_blank">Yakuplu’da ‘hudut kapısı’ coşkusu var<br/><span>Milliyet.com.tr - 18.07.2018</span></a></li>
						<li><a class="t2" href="http://www.milliyet.com.tr/-gokyuzu-residence--sirkethaberleri-2468326/
" target="_blank">'Doğru yatırım ve yüksek getiri için Denizİstanbul'<br/><span>Milliyet.com.tr - 14.06.2017</span></a></li>
						<li><a class="t2" href="http://www.milliyet.com.tr/deniz-istanbul-denizle-bulusuyor/ekonomi/detay/2197407/default.htm
" target="_blank">Deniz İstanbul deniz ile buluşuyor<br/><span>Milliyet.com.tr - 21.02.2016</span></a></li>
						<li><a class="t2" href="https://www.emlaktasondakika.com/haber/konut-projeleri/deniz-istanbul-marina-evlerinde-marina-keyfi/112238" target="_blank">Denizistanbul Marina Evleri’nde marina keyfi <br/><span>Emlaktasonnokta.com.tr - 17.02.2016</span></a></li>
						<!--<li><a class="t2" href="http://www.milliyet.com.tr/-sahil-kasabasina-1-milyar-/ekonomi/detay/2156898/default.htm" target="_blank">‘Sahil Kasabası’na 1 milyar $ yatırım yatıracak<br/><span>Emlaktasonnokta.com.tr - 02.12.2015</span></a></li>-->
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="kvkk">
				<p class="footer_copy">This website uses cookies. Cookies are text files that are placed on your computer to analyze how you use the website. Your browser automatically accepts cookies. If you want to disable cookies or get more information about the subject, please review the <a href="#" target="_blank">Privacy Policy</a>.By continuing to browse our website, you are deemed to have accepted our policy regarding the use of cookies.</p>
			</div>
		</div>
	</div>
	
	<div id="footer_bottom">
		<div class="container">
			  Creating Places "<strong>Together</strong>"  <img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.svg" alt="">
		</div>
	</div>
</footer>
<?php } ?>
	<script defer type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAS3G_514ToOqMOnF6QEjsVGpwSlozjoqk"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" type="text/javascript" charset="utf-8"></script> 
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js" type="text/javascript" charset="utf-8"></script> 
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/js-marker-clusterer/1.0.0/markerclusterer_compiled.js"></script>
	<script defer src="<?php bloginfo('template_directory'); ?>/assets/js/func.js?v=12" type="text/javascript" charset="utf-8"></script> 
	    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/jquery.maskedinput.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/intlTelInput.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/plugins/telinput.js?v=3"></script>