var map;var markers=[];function small_map(lat,lot){var styles=[{stylers:[{hue:"#696e74"},{saturation:-90},{lightness:20},]},{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{featureType:"road",elementType:"labels",stylers:[{visibility:"on"}]},{featureType:"road",elementType:"labels.text.stroke",stylers:[{visibility:"off"}]}];var styledMap=new google.maps.StyledMapType(styles,{name:"Styled Map"});var myLatlng=new google.maps.LatLng(lat,lot);var mapOptions={scrollwheel:true,zoom:16,panControl:false,zoomControl:true,scaleControl:true,mapTypeControl:false,streetViewControl:false,center:myLatlng,mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,'map_style']}};var map=new google.maps.Map(document.getElementById('small_map'),mapOptions);map.mapTypes.set('map_style',styledMap);map.setMapTypeId('map_style');var image=template_url+'assets/images/pointer.png';var myLatLng=new google.maps.LatLng(lat,lot);var beachMarker=new google.maps.Marker({position:myLatLng,map:map,icon:image});}
var styles=[{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}];function init_map(){if(!$('#new_map').length){return;}
var styledMap=new google.maps.StyledMapType(styles,{name:"Styled Map"});var myLatlng=new google.maps.LatLng(40.972672,28.655391);var mapOptions={scrollwheel:false,zoom:10,panControl:false,zoomControl:true,scaleControl:true,mapTypeControl:false,streetViewControl:false,center:myLatlng,mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,'map_style']}};map=new google.maps.Map(document.getElementById('new_map'),mapOptions);mapc=map;map.mapTypes.set('map_style',styledMap);map.setMapTypeId('map_style');var image=template_url+'assets/images/active_pin.png';var myLatLng=new google.maps.LatLng(40.972672,28.655391);var beachMarker=new google.maps.Marker({position:myLatLng,map:map,icon:image});var infowindow2=new google.maps.InfoWindow({pixelOffset:new google.maps.Size(0,45),content:"<div class='marker-content'><img src=\"http://www.kelesogluholding.com/wp-content/themes/kelesoglu_dev/assets/images/kelesoglu_logo.png\"style=\"width: 150px; margin-left: 50px; margin-right: 50px;\" /><a target=\"_blank\" href=\"http://www.kelesogluholding.com/\" class=\"project-link\">Detay  <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a><a target=\"_blank\" href=\"https://www.google.com/maps?q=40.972672,28.655391\" class=\"project-location\">Yol Tarifi Al  <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a><div class=\"clearfix\"></div></div>"});beachMarker.addListener('click',function(){infowindow2.open(map,beachMarker);$('.gm-style-iw').prev().hide();$('.gm-style-iw').next().addClass('close-button-marker');});var projectLocations2=[];var locations=[];$.ajax({url:'http://www.kelesogluholding.com/wp-content/themes/kelesoglu_dev/projectJson.php',type:'GET',contentType:'application/json; charset=utf-8',dataType:"json",success:function(data){$.each(data,function(i,item){if(item.x&&item.y){projectLocations2.push([item.x,item.y,'<img src="'+item.logo+'"/>','<a target="_blank" href="'+item.url+'" class="project-link">Detay  <i class="fa fa-caret-right" aria-hidden="true"></i></a>','<a target="_blank" href="https://www.google.com/maps?q='+item.x+','+item.y+'" class="project-location">Yol Tarifi Al  <i class="fa fa-caret-right" aria-hidden="true"></i></a><div class="clearfix"></div>']);}});updateMaker(map,projectLocations2);}});}
function init2(){var mapOptions={zoom:13,center:new google.maps.LatLng(40.972672,28.655391),styles:styles};var mapElement=document.getElementById('k-map1');var map=new google.maps.Map(mapElement,mapOptions);var image=template_url+'assets/images/pin.png';var marker=new google.maps.Marker({position:new google.maps.LatLng(40.972672,28.655391),map:map,icon:image,title:'Yakuplu Sahil'});}
function init3(){var mapOptions={zoom:13,center:new google.maps.LatLng(41.0017583,28.7752439),styles:styles};var mapElement=document.getElementById('k-map2');var map=new google.maps.Map(mapElement,mapOptions);var image=template_url+'assets/images/cennet-pin.png';var marker=new google.maps.Marker({position:new google.maps.LatLng(41.0017583,28.7752439),map:map,icon:image,title:'Küçükçekmece'});}
function init4(){var mapOptions={zoom:13,center:new google.maps.LatLng(40.9951676,29.0481928),styles:styles};var mapElement=document.getElementById('k-map3');var map=new google.maps.Map(mapElement,mapOptions);var image=template_url+'assets/images/luxin-pin.png';var marker=new google.maps.Marker({position:new google.maps.LatLng(40.9951676,29.0481928),map:map,icon:image,title:'Kadıköy'});}
var utm_source=getUrlParameter('utm_source');var utm_medium=getUrlParameter('utm_medium');var utm_campaign=getUrlParameter('utm_campaign');var utm_content=getUrlParameter('utm_content');$(document).ready(function(){if(utm_source){set_cookie_ref('utm_source',utm_source,1,location.hostname);}else{utm_source=get_cookie_ref("utm_source");}
if(utm_medium){set_cookie_ref('utm_medium',utm_medium,1,location.hostname);}else{utm_medium=get_cookie_ref("utm_medium");}
if(utm_campaign){set_cookie_ref('utm_campaign',utm_campaign,1,location.hostname);}else{utm_campaign=get_cookie_ref("utm_campaign");}
if(utm_content){set_cookie_ref('utm_content',utm_content,1,location.hostname);}else{utm_content=get_cookie_ref("utm_content");}
$(".txtboxToFilter").keydown(function(e){if($.inArray(e.keyCode,[46,8,9,27,13,110])!==-1||(e.keyCode===65&&(e.ctrlKey===true||e.metaKey===true))||(e.keyCode>=35&&e.keyCode<=40)){return;}
if((e.shiftKey||(e.keyCode<48||e.keyCode>57))&&(e.keyCode<96||e.keyCode>105)){e.preventDefault();}});$('.sendCrmForm').click(function(){$('.errorCol').removeClass('errorCol');var error=0;var name=$('.inputName');if(!name.val()){name.closest('.inputCol').addClass('errorCol');error++;}
var email=$('#Email');if(!MailKontrol(email.val())){email.closest('.inputCol').addClass('errorCol');error++;}
var phone=$('#PHone');if(!phone.val()){phone.closest('.inputCol').addClass('errorCol');error++;}
var genelkvkk=$('#genelkvkk');if(!genelkvkk.prop("checked")){genelkvkk.addClass('errorCol');error++;}
var camerakvkk=$('#camerakvkk');if(!camerakvkk.prop("checked")){camerakvkk.addClass('errorCol');error++;}
var message=$('#Message');if(!message.val()){message.closest('.inputCol').addClass('errorCol');error++;}
if(!error){sendFormData();}});init_map();$('.gotoLink').click(function(event){event.preventDefault()
var hash=$(this).attr('href');$('html, body').animate({scrollTop:$(hash).offset().top-100},800);});if($('#havadanbak').length>0){if($('#havadanbak').data('type')=='mercan'){$('#havadanbak').attr('src',"http://www.denizistanbul.com/360/mercan360");}else if($('#havadanbak').data('type')=='marina'){$('#havadanbak').attr('src',"http://www.denizistanbul.com/360/marinavilla360");}else{$('#havadanbak').attr('src',"http://www.denizistanbul.com/360/");}}});var normalIcon=template_url+"/assets/images/active_pin.png";var activeIcon=template_url+"/assets/images/active_pin.png";var infowindow=new google.maps.InfoWindow({pixelOffset:new google.maps.Size(0,45)});var marker,i;function updateMaker(map,detail){for(i=0;i<detail.length;i++){marker=new google.maps.Marker({position:new google.maps.LatLng(detail[i][0],detail[i][1]),map:map,icon:normalIcon,});markers.push(marker);google.maps.event.addListener(marker,'click',(function(marker,i){return function(){for(var j=0;j<markers.length;j++){markers[j].setIcon(normalIcon);}
var content="<div class='marker-content'>"+detail[i][2]+detail[i][3]+detail[i][4]+"</div>";infowindow.setContent(content);this.setIcon(activeIcon)
infowindow.open(map,marker);}})(marker,i));google.maps.event.addListener(marker,'click',function(){$('.gm-style-iw').prev().hide();$('.gm-style-iw').next().addClass('close-button-marker');});google.maps.event.addListener(infowindow,'closeclick',function(){for(var j=0;j<markers.length;j++){markers[j].setIcon(normalIcon);}});}
var markerCluster=new MarkerClusterer(map,markers,{imagePath:template_url+'/assets/images/icons/maps/m'});}
$(document).ready(function(){$('a.fancybox').fancybox();$(".vaziyetListesiUL li").hover(function(){$(".vaziyetListesiUL li .vaziyetImage").removeClass("active");$(this).find(".vaziyetImage").addClass("active");var id=$(this).find(".vaziyetImage").data("id");$(".yerleske_image").removeClass("active");$("#yerleske"+id).addClass("active");},function(){$("#yerleske0").addClass("active");$("#yerleske2").removeClass("active");$("#yerleske3").removeClass("active");$("#yerleske4").removeClass("active");});$(".nav-list ul li").click(function(){$(".nav-list ul li").removeClass("active");$(this).addClass("active");var _iurl="url('"+$(this).data("image")+"')";var id=$(this).data("id");$(".text").hide();$("#text_"+id).fadeIn();$("#properties-list").css({backgroundImage:_iurl});});});var homeSlider='';function loaderSpinner(){$(window).on('load',function(){if($('.videoSlider').length){$('.videoSlider video').prop("volume",0.5);}
var loader=$('.loader');var wHeight=$(window).height();var wWidth=$(window).width();var i=0;loader.css({top:wHeight/2-2.5,left:wWidth/2-200})
percont=0;$('.loader span').fadeIn(200);do{loader.animate({width:i*4},10,function(){if(percont<100){percont=percont+4;$('.loader span').html('%'+percont)}else{$('.loader span').fadeOut(200);}})
i+=4;}while(i<=100)
if(i>100){loader.animate({left:0,width:'100%'})
loader.animate({top:'0',height:'100vh'})}
if(homeSlider){homeSlider.api.pause();}
setTimeout(function(){$('body').addClass('loadEnd')
$('.loadingoverlay').fadeOut(200);if($('.videoSlider').length){$('.videoSlider video').prop('muted',false);$('.videoSlider video')[0].play();}
if(homeSlider){homeSlider.api.resume();}
$(window).resize();},1000);});}
loaderSpinner();$('.mobile-toggle').click(function(event){setTimeout(function(){if($('body').hasClass("menu-active")){$('body').removeClass("menu-active");}else{$('body').addClass("menu-active");}},100);});function getUrlParameter(sParam){var sPageURL=decodeURIComponent(window.location.search.substring(1)),sURLVariables=sPageURL.split('&'),sParameterName,i;if(sParam){for(i=0;i<sURLVariables.length;i++){sParameterName=sURLVariables[i].split('=');if(sParameterName[0]===sParam){return sParameterName[1]===undefined?true:sParameterName[1];}}}else{return sURLVariables;}}
function MailKontrol(email){var pattern=new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);return pattern.test(email);}
function getCookie(cname){var name=cname+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')
c=c.substring(1);if(c.indexOf(name)==0)
return c.substring(name.length+6,c.length);}
return"";}
function set_cookie_ref(cookie_name,cookie_value,lifespan_in_hours,valid_domain)
{var domain_string=valid_domain?("; domain="+valid_domain):'';document.cookie=cookie_name+"="+encodeURIComponent(cookie_value)+"; max-age="+60*60*lifespan_in_hours+"; path=/"+domain_string;}
function get_cookie_ref(cookie_name)
{var cookie_string=document.cookie;if(cookie_string.length!=0){var cookie_value=cookie_string.match('(^|; )[\s]*'+cookie_name+'=([^;]*)');if(cookie_value){return decodeURIComponent(cookie_value[2]);}}
return'';}
function sendFormData(){$('.sendCrmForm').hide();var firstName=$("#FirtsName").val();var email=$("#Email").val();var phone=$("#PHone").val();var message=$("#Message").val();var agreement=$("#agreement").prop('checked');var grecaptcha=$('#g-recaptcha-response').val();$('.formOverlay').fadeIn();$.get("http://www.kelesogluholding.com/save/save.php",{lang:2,grecaptcha:grecaptcha,name:firstName,email:email,phone:phone,message:message,PermissionMarketingList:agreement,utmsource:utm_source,utmmedium:utm_medium,utmcampaign:utm_campaign,utmcontent:utm_content},function(data){$('#btnSend').prop("disabled",false).removeClass("disabled");$('.formOverlay').fadeOut();$('.sendCrmForm').show();if(data.status==1){$('#form1')[0].reset();$('.send').slideDown();setTimeout(function(){location.reload();},3000);}else{alert("Bilgileriniz İletilemedi.");setTimeout(function(){location.reload();},3000);}});}
 function fixedContact(status, fixed) {
    var wv = $(window).width();
    var fixedEl = $('.fixed__contact');
    if (status === true) {
        // if (wv <= 768) {
        //     $.lockBody();
        //     $('.phone-show').css("opacity", "0");
        //     $('.phone-show').attr('href', '#');
        // }
        fixedEl.addClass('active');
    } else {
        if (fixed !== 1) {
            // if (wv <= 768) {
            //     $.unlockBody();
            //     $('.phone-show').attr('href', 'http://maps.apple.com/?q=40.972944,28.655736');
            //     $('.phone-show').css("opacity", "1").fadeIn();
            // }
            fixedEl.removeClass('active');
        } else {
            fixedEl.removeClass('active');
        }

    }
    return false;
}

$('.fixed__contact .toggle').on('click', function (e) {
        e.preventDefault();
        formClickEvent = true;
        if ($('.fixed__contact').hasClass('active')) {
            fixedContact(false);

        } else {
            fixedContact(true);
        }
    });

$('.input-row input').on('focus', function () {
        $(this).parent().find('.animated-label').addClass('active');
    });
    $('.input-row input').on('blur', function () {
        if ($(this).val().length == 0) {
            $(this).parent().find('.animated-label').removeClass('active');
        }
    });

    var utm_source = getUrlParameter('utm_source');
var utm_medium = getUrlParameter('utm_medium');
var utm_campaign = getUrlParameter('utm_campaign');
var utm_content = getUrlParameter('utm_content');

$(document).ready(function () {

    if (utm_source) {
        set_cookie_ref('utm_source', utm_source, 1, location.hostname);
    } else {
        utm_source = get_cookie_ref("utm_source");
    }
    if (utm_medium) {
        set_cookie_ref('utm_medium', utm_medium, 1, location.hostname);
    } else {
        utm_medium = get_cookie_ref("utm_medium");
    }
    if (utm_campaign) {
        set_cookie_ref('utm_campaign', utm_campaign, 1, location.hostname);
    } else {
        utm_campaign = get_cookie_ref("utm_campaign");
    }
    if (utm_content) {
        set_cookie_ref('utm_content', utm_content, 1, location.hostname);
    } else {
        utm_content = get_cookie_ref("utm_content");
    }

    //     $(window).on('scroll', function () {
    //     if ($(window).scrollTop() >= 250) {
    //         fixedContact(false, 1);
    //     }
    // });
    $("#btnSend").on("click", function (e) {
       
        console.log("bas");
        e.preventDefault();
        var $this = $(this);
        var error = 0;
        $('label.error').remove();
        $('.error').removeClass('error');
        var firstname = $('#FirtsName');
        if (!firstname.val()) {
            firstname.addClass('error');
            firstname.closest('label').append('<label class="error">Lütfen ad girin.</label>');
            error++;
        }
        var surname = $('#LastName');
        if (!surname.val()) {
            surname.addClass('error');
            surname.closest('label').append('<label class="error">Lütfen soyad girin.</label>');
            error++;
        }
        var email = $('#Email');
        if (!MailKontrol(email.val())) {
            email.addClass('error');
            email.closest('label').append('<label class="error">Lütfen geçerli bir email adresi girin.</label>');
            error++;
        }
        var phone = $('#Phone');
        if (!phone.val()) {
            phone.addClass('error');
            phone.closest('label').append('<label class="error">Lütfen iletmek istediğiniz mesajı girin.</label>');
            error++;
        }
        if (!error) {
             fbq('track', 'CompleteRegistration'); 
        gtag('event', 'conversion', {'send_to': 'AW-447616123/dVVoCOWK9e8BEPuouNUB'});
            $this.prop("disabled", true).addClass("disabled");
            sendFormDatax();
        } else {
            console.log("Form Valid Değil");
        }
    });

    // Mobil form için

    $('.input-row input').on('focus', function () {
        $(this).parent().find('.animated-label').addClass('active');
    });
    $('.input-row input').on('blur', function () {
        if ($(this).val().length == 0) {
            $(this).parent().find('.animated-label').removeClass('active');
        }
    });

    // Main Animation
    $('.mouse_scroll').on('click', function () {
        $('html, body').animate({scrollTop: $('.homepage_slider').height()}, 1000);
    });

    $('.successOkBtn').click(function(){
        $('.send').fadeOut();
    });


});


function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    if (sParam) {
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    } else {
        return sURLVariables;
    }
}

function MailKontrol(email) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(email);
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length + 6, c.length);
    }
    return "";
}

function set_cookie_ref(cookie_name, cookie_value, lifespan_in_hours, valid_domain)
{
    var domain_string = valid_domain ? ("; domain=" + valid_domain) : '';
    document.cookie = cookie_name + "=" + encodeURIComponent(cookie_value) +
            "; max-age=" + 60 * 60 * lifespan_in_hours +
            "; path=/" + domain_string;
}
function get_cookie_ref(cookie_name)
{
    var cookie_string = document.cookie;
    if (cookie_string.length != 0) {
        var cookie_value = cookie_string.match('(^|; )[\s]*' + cookie_name + '=([^;]*)');
        if (cookie_value) {
            return decodeURIComponent(cookie_value[2]);
        }
    }
    return '';
}

//Mobil İçin 

function sendFormMobileData() {
    var firstName = $("#firtsName").val();
    var lastName = $("#lastName").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var country = $('.countryCodeData').html();
     var grecaptcha = $("#g-recaptcha-response").val();
    var message = $("#message").val();
    var agreement = $("#aagreement").prop('checked');
    var uber = $("#uber").is(':checked');
    $('.formOverlay').fadeIn();
    $.get("http://www.kelesogluholding.com//wp-content/themes/kelesoglu_dev/demo.php", {name: firstName, surname: lastName, email: email, phone: phone,country: country, message: message, PermissionMarketingList: agreement, utmsource: utm_source, utmmedium: utm_medium, utmcampaign: utm_campaign, utmcontent: utm_content}, function (data) {
        $('#btnSendd').prop("disabled", false).removeClass("disabled");
        $('.formOverlay').fadeOut();
        if (data.status == 1) {
            $('#form1')[0].reset();
            $('.send').fadeIn();
            //window.location.href = "/tesekkurler";
        }else{
            alert("Bilgileriniz İletilemedi.");
        }
    });
}

function sendFormDatax() {
    var firstName = $("#FirtsName").val();
    var lastName = $("#LastName").val();
    var email = $("#Email").val();
    var phone = $("#Phone").val();
     var grecaptcha = $("#g-recaptcha-response").val();
    var message = $("#Message").val();
    var country = $('.countryCodeData').html();
    var agreement = $("#agreement").prop('checked');
    var uber = $("#uber").is(':checked');
    $('.formOverlay').fadeIn();
    $.get("../../save/save.php", {lang:2,name: firstName, surname: lastName,grecaptcha:grecaptcha, email: email, phone: phone,country: country, message: message, PermissionMarketingList: agreement, utmsource: utm_source, utmmedium: utm_medium, utmcampaign: utm_campaign, utmcontent: utm_content}, function (data) {
        $('#btnSend').prop("disabled", false).removeClass("disabled");
        $('.formOverlay').fadeOut();
        if (data.status == 1) {
            console.log("yolladı");
            $('#form2')[0].reset();
            $('.send').fadeIn();
            //window.location.href = "/tesekkurler";
        }else{
            alert("Bilgileriniz İletilemedi.");
        }
    });
}