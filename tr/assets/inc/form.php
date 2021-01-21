<div class="mobile_contact">
    <a class="iconMobile" href="<?php echo site_url('bilgi-talep') ?>"></a>
</div>
<div class="fixed__contact">
    <div class="pr">
        <div class="form mdisabled">
            <div class="send">
                <div class="check-animation">
                    <div class="check">
                        <em class="icon"></em>
                    </div>
                    <div class="shadow"></div>
                </div>
                <strong>KAYDINIZ OLUŞTURULDU!</strong>
                <p>Müşteri temsilcimiz en kısa zamanda sizinle iletişime geçecektir.</p>
                <a class="button-inline" href="#">TAMAM</a>
            </div>
            <div class="hero">Sizinle İletişime Geçelim</div>
            <p>Aşağıdaki iletişim formu ile size en kısa sürede dönüş yapabiliriz.</p>
            <form action="iletisim.php" id="form1" method="post">
                <label class="input-row">
                    <span class="animated-label">Adınız</span>
                    <input id="FirtsName" name="firstname" type="text" value="" />
                </label>
                <label class="input-row">
                    <span class="animated-label">Soyadınız</span>
                    <input id="LastName" name="lastname" type="text" value="" />
                </label>
                <label class="input-row mail-input">
                    <span class="animated-label">E-Posta Adresiniz</span>
                    <input id="Email" name="email" type="text" value="" />
                </label>
                <label class="input-row phone-input">
                    <span class="animated-label">Telefon Numaranız</span>
                    <input id="Phone" name="phone" type="text" value="" />
                </label>
                <label class="input-row message-input">
                    <textarea cols="20" id="Message" name="message" placeholder="Mesaj" rows="2"></textarea>
                </label>
                <p>
                    <input type="checkbox" id="agreement" name="agreement" />
                    <label for="agreement" class="checkbox-label agreement-input">Gelecek projeler, haberler ve fırsatlardan haberdar olmak istiyorum.</label>
                </p>
                <div class="g-recaptcha"data-sitekey="6LdWgUsUAAAAALDxqAheCiYVZmX2oVSqg3GFPJ14" data-callback="sendFormData" data-size="invisible"></div>
                <button type="button" id="btnSend" class="button">GÖNDER</button>
            </form>
            <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script> -->
            <script type="text/javascript">
                var __ss_noform = __ss_noform || [];
                __ss_noform.push(['baseURI', 'https://app-3QN9FATOSO.marketingautomation.services/webforms/receivePostback/MzawMDG1sDC0AAA/']);
                __ss_noform.push(['endpoint', '71866a06-fe92-46d7-93e0-b61192cc4f9a']);
            </script>
            <script type="text/javascript" src="https://koi-3QN9FATOSO.marketingautomation.services/client/noform.js?ver=1.24" ></script>
        </div>
        <a class="toggle mdisabled" href="javascript:void(0)"></a>
        <div class="call-button">
            <a href="tel:4445151">
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
            </a>
        </div>
        <!-- /newformaction -->
    </div>
</div>