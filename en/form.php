<!-- <?php 

$file =  basename(__FILE__, '.php'); 
if($file != 'bilgi-talep'){

?>
<script type="text/javascript">
    $(document).ready(function () {

 var newWindowWidth = $(window).width();
        if (newWindowWidth < 481) {
            $("#webfrmc").html("");
console.log("gizli web");

        }
        else
        {
           $(".mobile_contact").html("");
console.log("gizli");
        }
    
});
</script>
<div class="mobile_contact visible-xs">
    <style>
  @media only screen and (max-width: 768px) {
 .frm {
    bottom:28px !important;
 }
 .wp-icon {
    bottom:0px;
 }

 .mobiledisabled {
    bottom: -40px !important;
 }

}

 @media only screen and (max-width: 1280px) {
 .wp-icon {
        right: 172px !important;
 }

 .mobiledisabled {
    bottom: -40px !important;
 }

}
    </style>
    <div class="fixed__contact active" style="display: inline-block !important;">
        <div class="pr">
        <div class="form mdisabled frm" style="    left: 82px;
    width: 85%; bottom: 94px;">
            <div class="send">
                <div class="check-animation">
                    <div class="check">
                        <em class="icon"></em>
                    </div>
                    <div class="shadow"></div>
                </div>
                <strong>REGISTRATION CREATED!</strong>
                <p>Our customer representative will contact you as soon as possible.</p>
                <a class="button-inline successOkBtn" href="#">OK</a>
            </div>
            <div class="hero">Let Us Contact You</div>
            <p>Fill in the form, we will call you now</p> 
            <form action="iletisim.php" id="form2" method="post">
                <label class="input-row nameRow">
                    <span class="animated-label">Name</span>
                    <input id="FirtsName" name="firstname" type="text" value="" />
                </label>
                <label class="input-row surnameRow">
                    <span class="animated-label">Surname</span>
                    <input id="LastName" name="lastname" type="text" value="" />
                </label>
                <label class="input-row mail-input">
                    <span class="animated-label">E-mail</span>
                    <input id="Email" name="email" type="text" value="" />
                </label>
                <label class="input-row phone-input">
                    <div class="countryCodeData">+90</div>
                   <input id="Phone" type="tel" name="phone" autocomplete="off"/>
                  
                </label>
                <label class="input-row message-input">
                    <textarea cols="20" id="Message" name="message" placeholder="Message" rows="2"></textarea>
                </label>
                <p>
                    <input type="checkbox" id="agreement" name="agreement" />
                    <label for="agreement" class="checkbox-label agreement-input"> I want to be aware of future projects, news and opportunities.

</label>
                </p>
              
                <input type="hidden" value="" id="g-recaptcha-response" />
                <button type="button" id="btnSend" class="button" style="width: 98% !important;
    margin-bottom: 24px !important;
    min-width: 0;">SEND</button>
            </form>
            <script type="text/javascript">
                var __ss_noform = __ss_noform || [];
                __ss_noform.push(['baseURI', 'https://app-3QN9FATOSO.marketingautomation.services/webforms/receivePostback/MzawMDG1sDC0AAA/']);
                __ss_noform.push(['endpoint', '71866a06-fe92-46d7-93e0-b61192cc4f9a']);
            </script>
            <script type="text/javascript" src="https://koi-3QN9FATOSO.marketingautomation.services/client/noform.js?ver=1.24" ></script>
                    <div class="formOverlay">
                        <div class="spinner">
                          <div class="bounce1"></div>
                          <div class="bounce2"></div>
                          <div class="bounce3"></div>
                        </div>
                    </div>
        </div>
        <div class="wp-icon" style="    right: 167px !important;">
</div>
        <a class="toggle mobiledisabled" style="margin-bottom: 29px;"></a>
</div>
    </div>
</div>
</div>
<?php } ?>
<div class="fixed__contact active visible-md visible-lg" style="margin-bottom:33px;" id="webfrmc">
    <div class="pr">
        <div class="form mdisabled">
            <div class="send">
                <div class="check-animation">
                    <div class="check">
                        <em class="icon"></em>
                    </div>
                    <div class="shadow"></div>
                </div>
                <strong>REGISTRATION CREATED!</strong>
                <p>Our customer representative will contact you as soon as possible.</p>
                <a class="button-inline successOkBtn" href="#">OK</a>
            </div>
            <div class="hero">Let Us Contact You</div>
            <p>Fill in the form, we will call you now</p> 
            <form action="iletisim.php" id="form2" method="post">
                <label class="input-row nameRow">
                    <span class="animated-label">Name</span>
                    <input id="FirtsName" name="firstname" type="text" value="" />
                </label>
                <label class="input-row surnameRow">
                    <span class="animated-label">Surname</span>
                    <input id="LastName" name="lastname" type="text" value="" />
                </label>
                <label class="input-row mail-input">
                    <span class="animated-label">E-mail</span>
                    <input id="Email" name="email" type="text" value="" />
                </label>
                <label class="input-row phone-input">
                    <div class="countryCodeData">+90</div>
                   <input id="Phone" type="tel" name="phone" autocomplete="off"/>
                </label>
                <label class="input-row message-input">
                    <textarea cols="20" id="Message" name="message" placeholder="Message" rows="2"></textarea>
                </label>
                <p>
                    <input type="checkbox" id="agreement" name="agreement" />
                    <label for="agreement" class="checkbox-label agreement-input">I want to be aware of future projects, news and opportunities.</label>
                </p>
         
                <input type="hidden" value="" id="g-recaptcha-response" />
                <button type="button" id="btnSend" class="button">SEND</button>
            </form>
            <script type="text/javascript">
                var __ss_noform = __ss_noform || [];
                __ss_noform.push(['baseURI', 'https://app-3QN9FATOSO.marketingautomation.services/webforms/receivePostback/MzawMDG1sDC0AAA/']);
                __ss_noform.push(['endpoint', '71866a06-fe92-46d7-93e0-b61192cc4f9a']);
            </script>
            <script type="text/javascript" src="https://koi-3QN9FATOSO.marketingautomation.services/client/noform.js?ver=1.24" ></script>
                    <div class="formOverlay">
                        <div class="spinner">
                          <div class="bounce1"></div>
                          <div class="bounce2"></div>
                          <div class="bounce3"></div>
                        </div>
                    </div>
        </div>
        <a class="toggle mdisabled visible-md visible-lg" href="javascript:void(0)" style="width: 62px;
    height: 67px;"></a>
        <div class="wp-icon" style="right: 200px; width: 55px;
    height: 51px;">



<?php

    $adsTraffics = $_GET["utm_source"];
    setcookie("utm_source", $adsTraffics, time()+3600);
    $adsTraffic = $_COOKIE["utm_source"];


    if ($adsTraffic == 'sahibindencom_native_daire' | $adsTraffic == 'sahibindencom_native_villa' | $adsTraffic == 'sahibindencom_native_avrupa' | $adsTraffic == 'sahibindencom_native_ortadogu' ){
        echo '
            <a target="_blank" href="https://api.whatsapp.com/send?phone=905338104127&amp;text=" id="whatsapp_link">
            <img src="http://denizistanbul.com/en/assets/images/wp-icon.png" alt="whatsapp"  style="width: 49px;
                height: 48px;" />
            </a>
        ';
    }else{
        echo '
            <a target="_blank" href="https://api.whatsapp.com/send?phone=905323497653&amp;text=" id="whatsapp_link">
            <img src="http://denizistanbul.com/en/assets/images/wp-icon.png" alt="whatsapp"  style="width: 49px;
                height: 48px;" />
            </a>
        ';
    }


?>





</div>
    </div>
</div>  

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfXTd8ZAAAAAGdDdL14uKioVVhssTOFXbPOaFil', {action: 'action_name'}).then(function(token) {
            $('#g-recaptcha-response').val(token);
        });
    });

    grecaptcha.ready(function() {
        grecaptcha.execute('6LfXTd8ZAAAAAGdDdL14uKioVVhssTOFXbPOaFil', {action: 'action_name'}).then(function(token) {
            $('#g-recaptcha-response1').val(token);
        });
    });
</script> -->