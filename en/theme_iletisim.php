<?php/* * Template Name: Contact */?><!doctype html>
<head>

	
	<?php include('header.php'); ?>
<script src='https://www.google.com/recaptcha/api.js?render=6LeVdHEUAAAAAAbXj9bFAoe1Yd5AVlBAjiD5NjaO'></script>
<div class="new_gray_title pt_gray_title">
	<div class="container">
		<p class="">Contact<br><small>Where is Keleşoğlu Holding ?</small></p>
	</div>
</div>
<script>
	var BASEURL = "<?php echo site_url(); ?>"
</script>
<div class="new_lightgray_content ct-adress">
    <div class="container contactContent">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img_iletisim.jpg" class="half_width firstImage" alt="">
        <div class="half_contact_content absolute-center-y">
            <p><img style="top:5px;" src="<?php bloginfo('template_directory'); ?>/assets/images/lokasyon.svg" alt="">Marmara Mah. Ulusum Cad. No: 4/1<br>
			Yakuplu Sahil / İSTANBUL</p>
			<p><img style="height: 40px;" src="<?php bloginfo('template_directory'); ?>/assets/images/telephone.svg" alt="">
Keleşoğlu Holding Call Center<br><strong style="font-size: 21px;">0090 212 444 41 51</strong></p>
			<div class="clear"></div>
			<p><img style="top:2px;" src="<?php bloginfo('template_directory'); ?>/assets/images/mail.svg" alt=""><a href="mailto:info@kelesogluholding.com">info@kelesogluholding.com</a></p>
			<div class="clear"></div>
			<p><img src="<?php bloginfo('template_directory'); ?>/assets/images/time.svg" alt=""><strong>Office Work Hours</strong><br/>
			Weekdays&nbsp;09:00 - 18:00 <br>
			Weekend 10:00 – 19:00</p>
            <div class="clear"></div>
            <div id="qr_box">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/qr.png" alt="">
                <p>With Direction Code<br>Read it for directions.</p>
            </div>
        </div>
		<div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
<div class="new_gray_title pd-top-0">
	<div class="container">
		<p class="">Contact Form<br><small>Contact us</small></p>
	</div>
</div>
<div class="container form-container">
	<form id="form1" class="contactForm" action="save.php" method="get">
		<div class="send">Your Information is Delivered.</div>
		<div class="form-left">
			<div class="inputCol">
				<label class="t2">Name Surname</label>
				<input type="text" class="txtInput inputName" id="FirtsName" autocomplete="off" name="name">
				<input type="hidden" name="utmsource" class="utmsource" value="">
				<input type="hidden" name="utmmedium" class="utmmedium" value="">
				<input type="hidden" name="utmcampaign" class="utmcampaign" value="">
				<input type="hidden" name="utmadwords" class="utmadwords" value="0">
				<input type="hidden" name="clientID" class="clientID" value="0">
				<input type="hidden" name="refData" class="refData" value="">
				<input type="hidden" name="googleToken" value="" id="g-recaptcha-response" />
			</div>
			<div class="inputCol">
				<label class="t2">E-mail Address</label>
				<input type="email"  id="Email" class="txtInput" autocomplete="off" name="email">
			</div>
			<div class="inputCol">
				<label class="t2">Your Phone Number</label>
				<input type="tel" class="txtInput phone txtboxToFilter" id="PHone" autocomplete="off" name="phone">
			</div>
			</div>
			<div class="form-right">
				<div class="inputCol">
				<label class="t2">Your Message</label>
				<input type="text" class="txtInput" id="Message" autocomplete="off" name="message">
			</div>
				<div class="checkboxData">
				<input type="checkbox" name="duyuru" checked="" value="1"><label for="agreement">I want to receive commercial electronic messages regarding your advertisements, promotions and campaigns.</label>
				<input type="checkbox" name="duyuru" value="1" id="genelkvkk"><label for="genelkvkk" style="margin-top:18px;">I have read the Clarification Text Regarding Personal Customizability and I show Explicit Consent to the <a href="<?php bloginfo('template_directory'); ?>/assets/acikriza.docx" style="color:white; text-decoration: underline;">processing of my personal data within this scope</a>.
. </label>
				<input type="checkbox" name="duyuru" value="1" id="camerakvkk" checked style="display: none;"><label for="camerakvkk" style="margin-top:18px; display: none;"><a href="<?php bloginfo('template_directory'); ?>/assets/03-KVKK-EK-IV ZIYARETCI VE-VEYA KAMERALI BOLGE AYDINLATMA METNI.docx" style="color:white; text-decoration: underline;">Visitor and-or Area Lighting Text with Camera</a> I read
. </label>
			</div>
			<a class="sendCrmForm sendBTN">Contact us</a>
			</div>
		</form>
	</div>
</div>
<div class="clear"></div>
<div class="new_gray_title">
	<div class="container">
		<p class="">Sales Offices<br><small>Sales office for ongoing projects</small></p>
	</div>
</div>
<div class="kmap-light">
    <div class="container contactContent kmap-Content">
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>Deniz İstanbul</strong></p></div>
    		<div id="k-map1"></div>
    		<div class="kmap-title">
            <p>Marmara Mah. Ulusum Cad. No: 4/1<br>
			Yakuplu Sahil / İSTANBUL</p>
			<p><a href="mailto:info@denizistanbul.com">info@denizistanbul.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Office Work Hours</strong><br/>
			Weekdays&nbsp;09:00 - 18:00 <br>
			Weekend 10:00 – 19:00</p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://denizistanbul.com" target="_blank">Project Detail <em class="t2 icon"></em></a></div>
			<div class="clear"></div>
        	</div>
    	</div>
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>Cennet Koru</strong></p></div>
    		<div id="k-map2"></div>
    		<div class="kmap-title">
           	<p>Cumhuriyet Mah. Yıldız Cad. No. 60<br>
			Çamlık Mevkii Küçükçekmece/İSTANBUL</p>
			<p><a href="mailto:info@cennetkoru.com">info@cennetkoru.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Office Work Hours</strong><br/>
			Weekdays&nbsp;09:00 - 18:00 <br>
			Weekend 10:00 – 19:00</p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://cennetkoru.com" target="_blank">Project Detail <em class="t2 icon"></em></a></div>
			<div class="clear"></div>
        	</div>
    	</div>
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>Luxin Kadıköy</strong></p></div>
    		<div id="k-map3"></div>
    		<div class="kmap-title">
           	<p>Fikirtepe Mah. Özbey Cad.<br>
			Kadıköy / İSTANBUL</p>
			<p><a href="mailto:info@uxinkadikoy.com">info@luxinkadikoy.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Office Work Hours</strong><br/>
			Weekdays&nbsp;09:00 - 18:00 <br>
			Weekend 10:00 – 19:00</p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://luxinkadikoy.com/" target="_blank">Project Detail <em class="t2 icon"></em></a></div>
			<div class="clear"></div>
        	</div>
    	</div>
    </div>
</div>
</div>
<div class="clear"></div>

<?php include('footer.php'); ?>
	
<script>
	 $(document).ready(function(){
	 	init2();
	 	init3();
	 	init4();

			$('.inputCol .txtInput').focus(function(){
				$(this).closest('div').addClass('focus');
			});
			$('.inputCol .txtInput').blur(function(){
				if(!$(this).val()){
					$(this).closest('div').removeClass('focus');
				}
			});
		
	 	    });
$("#menu_li7 a").addClass("active");
</script>
<script>
    var widgetId = grecaptcha.ready(function() {
        grecaptcha.execute('6LeVdHEUAAAAAAbXj9bFAoe1Yd5AVlBAjiD5NjaO', {action: 'action_name'}).then(function(token) {
            $('#g-recaptcha-response').val(token);
        });
    });
</script>
</body>
</html>