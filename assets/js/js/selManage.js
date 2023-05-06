$(document).ready(function(){

    // Country change
    $("#sel_country").change(function(){

         // Selected country id
         var country_id = $(this).val();

         // Empty state and city dropdown
         $('#sel_state').find('option').not(':first').remove();
         $('#sel_city').find('option').not(':first').remove();

         // Fetch country states
         $.ajax({
              url: 'ajaxfile.php',
              type: 'post',
              data: {request:'getCountryStates',country_id:country_id},
              dataType: 'json',
              success:function(response){

                    var len = response.length;

                    // Add data to state dropdown
                    for( var i = 0; i<len; i++){
                          var state_id = response[i]['id'];
                          var state_name = response[i]['name'];

                          $("#sel_state").append("<option value='"+ state_id +"' >"+ state_name +"</option>");

                    }
              }
         });
    });

    // State change
    $('#sel_state').change(function(){

         // Selected state id
         var state_id = $(this).val();

         // Empty city dropdown
         $('#sel_city').find('option').not(':first').remove();

         // Fetch state cities
         $.ajax({
              url: 'ajaxfile.php',
              type: 'post',
              data: {request:'getStateCities',state_id:state_id},
              dataType: 'json',
              success:function(response){

                    var len = response.length;

                    // Add data to city dropdown
                    for( var i = 0; i<len; i++){
                          var city_id = response[i]['id'];
                          var city_name = response[i]['name'];

                          $("#sel_city").append("<option value='"+ city_id +"' >"+ city_name +"</option>");

                    }
              }
         });

    });
});