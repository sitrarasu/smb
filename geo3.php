<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
   
  </head>
  <body>
    <input id="searchTextField" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
   
	
	
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            //document.getElementById('city2').value = place.name;
            //document.getElementById('cityLat').value = place.geometry.location.lat();
            //document.getElementById('cityLng').value = place.geometry.location.lng();
            //alert("This function is working!");
            //alert(place.name);
           alert(place.geometry.location.lat()+','+place.geometry.location.lng());

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>


<?php ?>

  </body>
</html>