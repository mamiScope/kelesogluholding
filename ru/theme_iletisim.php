<?php/* * Template Name: Contact */?><!doctype html>
<head>

	
	<?php include('header.php'); ?>
<script src='https://www.google.com/recaptcha/api.js?render=6LeVdHEUAAAAAAbXj9bFAoe1Yd5AVlBAjiD5NjaO'></script>
<div class="new_gray_title pt_gray_title">
	<div class="container">
		<p class="">Связь <br><small>Где “Келешоглу Холдинг” ?</small></p>
	</div>
</div>
<script>
	var BASEURL = "<?php echo site_url(); ?>"
</script>
<div class="new_lightgray_content ct-adress">
    <div class="container contactContent">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/img_iletisim.jpg" class="half_width firstImage" alt="">
        <div class="half_contact_content absolute-center-y">
            <p><img style="top:5px;" src="<?php bloginfo('template_directory'); ?>/assets/images/lokasyon.svg" alt="">Мармара Мах Улусум Джад. №: 4/1<br>
			Якуплу Сахиль/СТАМБУЛ</p>
			<p><img style="height: 40px;" src="<?php bloginfo('template_directory'); ?>/assets/images/telephone.svg" alt="">
			“Келешоглу Холдинг” Call-Центр<br><strong style="font-size: 21px;">0090 212 444 41 51</strong></p>
			<div class="clear"></div>
			<p><img style="top:2px;" src="<?php bloginfo('template_directory'); ?>/assets/images/mail.svg" alt=""><a href="mailto:info@kelesogluholding.com">info@kelesogluholding.com</a></p>
			<div class="clear"></div>
			<p><img src="<?php bloginfo('template_directory'); ?>/assets/images/time.svg" alt=""><strong>Часы работы офиса</strong><br/>
			Будни с 09:00 до 18:00<br>
			Выходные с 10:00 до 19:00</p>
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
		<p class="">Форма связи<br><small>Свяжитесь с нами</small></p>
	</div>
</div>
<div class="container form-container">
	<form id="form1" class="contactForm" action="save.php" method="get">
		<div class="send">Ваша информация доставлена.</div>
		<div class="form-left">
			<div class="inputCol">
				<label class="t2">Имя и фамилия</label>
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
				<label class="t2">адрес электронной почты</label>
				<input type="email"  id="Email" class="txtInput" autocomplete="off" name="email">
			</div>
			<div class="inputCol">
				<label class="t2">номер телефона</label>
				<input type="tel" class="txtInput phone txtboxToFilter" id="PHone" autocomplete="off" name="phone">
			</div>
			</div>
			<div class="form-right">
				<div class="inputCol">
				<label class="t2">ваше сообщение</label>
				<input type="text" class="txtInput" id="Message" autocomplete="off" name="message">
			</div>
				<div class="checkboxData">
				<input type="checkbox" name="duyuru" checked="" value="1"><label for="agreement">Я хочу получать коммерческие электронные сообщения о вашей рекламе, рекламных акциях и кампаниях.</label>
				<input type="checkbox" name="duyuru" value="1" id="genelkvkk"><label for="genelkvkk" style="margin-top:18px;">Я прочитал пояснительный текст относительно персональной настройки и выражаю явное согласие <a href="<?php bloginfo('template_directory'); ?>/assets/acikriza.docx" style="color:white; text-decoration: underline;">обработка моих личных данных в этой области</a>.
				<input type="checkbox" name="duyuru" value="1" id="camerakvkk" checked style="display: none;"><label for="camerakvkk" style="margin-top:18px; display: none;"> Я читаю. </label>
			</div>
			<a class="sendCrmForm sendBTN">Перейти к связи</a>
			</div>
		</form>
	</div>
</div>
<div class="clear"></div>
<div class="new_gray_title">
	<div class="container">
		<p class="">Наши офисы по продажам <br><small>Офисы по продажам в наших текущих проектах </small></p>
	</div>
</div>
<div class="kmap-light">
    <div class="container contactContent kmap-Content">
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>ДенизИстанбул</strong></p></div>
    		<div id="k-map1"></div>
    		<div class="kmap-title">
            <p>Мармара Мах Улусум Джад. №: 4/1<br>
			Якуплу Сахиль/СТАМБУЛ</p>
			<p><a href="mailto:info@denizistanbul.com">info@denizistanbul.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Часы работы офиса </strong><br/>
			Будни с 09:00 до 18:00  <br>
			Выходные с 10:00 до 19:00 </p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://denizistanbul.com" target="_blank">Детали проекта <em class="t2 icon"></em></a></div>
			<div class="clear"></div>
        	</div>
    	</div>
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>ДженнетКору </strong></p></div>
    		<div id="k-map2"></div>
    		<div class="kmap-title">
           	<p>Джумхуриет Мах. Йылдыз Джад. №: 60 <br>
			   Чамлык Мевкии Кючюкчекмедже/СТАМБУЛ</p>
			<p><a href="mailto:info@cennetkoru.com">info@cennetkoru.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Часы работы офиса </strong><br/>
			Будни с 09:00 до 18:00  <br>
			Выходные с 10:00 до 19:00 </p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://cennetkoru.com" target="_blank">Детали проекта <em class="t2 icon"></em></a></div>
			<div class="clear"></div>
        	</div>
    	</div>
    	<div class="kmap-container">
    		<div class="kmap-title"><p><strong>Luxin Кадыкёй </strong></p></div>
    		<div id="k-map3"></div>
    		<div class="kmap-title">
           	<p>Фикиртепе Мах. Озбей Джад<br>
			   Кадыкёй / СТАМБУЛ </p>
			<p><a href="mailto:info@uxinkadikoy.com">info@luxinkadikoy.com</a></p>
			<div class="clear"></div>
			<p><strong ><a style="font-size: 20px;" href="tel:+0902124444151">0090 212 444 41 51</a></strong></p>
			<div class="clear"></div>
			<p><strong>Часы работы офиса </strong><br/>
			Будни с 09:00 до 18:00  <br>
			Выходные с 10:00 до 19:00 </p>
			<div class="kmap-contact"><a class="button-inline t2" href="http://luxinkadikoy.com/" target="_blank">Детали проекта <em class="t2 icon"></em></a></div>
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