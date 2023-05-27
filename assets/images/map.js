

		//Extract the address information and pupulate the form
        function fillInAddress(autocomplete, street, suburb, city, country, postcode) {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
  
            var street_number = '';//street number
            var route = '';//street name
            var sublocality = '';//suberb
            var locality = '';//city
            var countryname = '';//country
            var postal_code = '';//post code
            console.log(place.address_components);
  
            for (var i = 0; i < place.address_components.length; i++) {
              if (place.address_components[i].types[0] === "street_number") {
                street_number = place.address_components[i].long_name;
              }
              if (street_number == '' || street_number == undefined ) {
                if (place.address_components[i].types[0] === "premise") {
                  street_number = place.address_components[i].long_name;
                }
              }
              if (place.address_components[i].types[0] === "route") {
                route = place.address_components[i].long_name;
              }
              if (place.address_components[i].types[0] === "sublocality_level_1") {
                sublocality = place.address_components[i].long_name;
              }
              if (place.address_components[i].types[0] === "locality") {
                locality = place.address_components[i].long_name;
              }
              if (place.address_components[i].types[0] === "country") {
                countryname = place.address_components[i].long_name;
              }
              if (place.address_components[i].types[0] === "postal_code") {
                postal_code = place.address_components[i].long_name;
              }
            }
  
            if( street != '' && street != undefined ){
              if (street_number.indexOf("-") === -1 && street_number.indexOf("/") === -1) {
                var typed_address = jQuery("#"+street).val();
                //console.log(typed_address);
                if( typed_address != '' && typed_address != undefined ){
                  if (typed_address.indexOf("-") > -1) {
                    street_number = typed_address.split("-")[0].trim() + "-" + street_number;
                  } else if (typed_address.indexOf("/") > -1) {
                    street_number = typed_address.split("/")[0].trim() + "/" + street_number;
                  }
                }
              }
            }
  
            //console.log( street_number+' '+route, sublocality, locality, postal_code );
            //console.log(locality);
            if( street != '' && street != undefined ){
              jQuery("#"+street).val(street_number+' '+route);
            }
  
            if( suburb != '' && suburb != undefined ){
              jQuery("#"+suburb).val(sublocality);
            }
  
            console.log(suburb, street_number+' '+route+', '+sublocality);
            if( suburb == 'street_suburb_both' ){
              jQuery("#street").val(street_number+', '+sublocality);  
            }
  
            //console.log(city, locality);
            if( city != '' && city != undefined ){
              jQuery("#"+city).val(locality);
            }
            if( locality != '' && locality != undefined ){
              jQuery('.search-services .citydropdown').html(locality);
              jQuery('.search-hp .search-with-google').slideToggle();
            }
            if( country != '' && country != undefined ){
              jQuery("#"+country).val(countryname);
            }
            if( postcode != '' && postcode != undefined ){
              jQuery("#"+postcode).val(postal_code);
            }
  
          }
          /* End of Address Autocomplete */