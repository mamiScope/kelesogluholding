 $(document).ready(function () {
var input = document.querySelector("#Phone");
		window.intlTelInput(input);
		var iti = intlTelInput(input, {
		  initialCountry: "auto",
		  preferredCountries: [ "tr" ],
		  //onlyCountries: ["tr","bh", "qa", "kw", "iq", "sa", "ae", "lb", "om", "dz", "ma", "eg", "jo", "tn", "ly", "sy", "ye"],
		  geoIpLookup: function(success, failure) {
		    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		      var countryCode = (resp && resp.country) ? resp.country : "tr";
		      success(countryCode);
		    });
		  },
		});
		$.mask.definitions['g'] = '[1-9]';
        input.addEventListener("countrychange", function() {
          var countryData = iti.getSelectedCountryData();
          //console.log(countryData);
          $('.countryCodeData').html("+"+countryData.dialCode);
          if(countryData.iso2 == "tr"){
            $("#Phone").mask("g99-9999999");
          }else{
                $('#Phone').unmask();
                setTimeout(function(){
                    $("#Phone").val("");
                },100);
            }
        });
 
});
  $(document).ready(function () {
var input = document.querySelector("#phone");
		window.intlTelInput(input);
		var iti = intlTelInput(input, {
		  initialCountry: "auto",
		  preferredCountries: [ "tr" ],
		  //onlyCountries: ["tr","bh", "qa", "kw", "iq", "sa", "ae", "lb", "om", "dz", "ma", "eg", "jo", "tn", "ly", "sy", "ye"],
		  geoIpLookup: function(success, failure) {
		    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		      var countryCode = (resp && resp.country) ? resp.country : "tr";
		      success(countryCode);
		    });
		  },
		});
		$.mask.definitions['g'] = '[1-9]';
        input.addEventListener("countrychange", function() {
          var countryData = iti.getSelectedCountryData();
          //console.log(countryData);
          $('.countryCodeData').html("+"+countryData.dialCode);
          if(countryData.iso2 == "tr"){
            $("#phone").mask("g99-9999999");
          }else{
                $('#phone').unmask();
                setTimeout(function(){
                    $("#phone").val("");
                },100);
            }
        });
 
});