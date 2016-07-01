<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Google Maps JavaScript API v3 Example: Geocoding Simple</title>
<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
<script src="http://maps.google.com/maps/api/js?v=3.5&amp;sensor=false"></script>

<script type="text/javascript">
var geocoder;
var map;
function initialize() {
geocoder = new google.maps.Geocoder();
var latlng = new google.maps.LatLng(12.930, 77.616);
var myOptions = {
zoom: 18,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
}

map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}

function codeAddress() {
var address = document.getElementById("address").value;
geocoder.geocode( { 'address': address}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
map.setCenter(results[0].geometry.location);

var marker = new google.maps.Marker({
    map: map,
    draggable: true,
    position: results[0].geometry.location

});
   // Javascript//
   google.maps.event.addListener(marker, 'dragend', function(evt){
   document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
   });

   google.maps.event.addListener(marker, 'dragstart', function(evt){
   document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
   });

   google.maps.event.addListener(marker, 'dragend', function(evt){
   document.getElementById('info').innerHTML = '<p>Address:  ' + results[0].formatted_address + '</p>';
   });

   google.maps.event.addListener(marker, 'dragstart', function(evt){
   document.getElementById('info').innerHTML = '<p>Currently dragging marker...</p>';
   });



 map.setCenter(marker.position);
 marker.setMap(map);

  } else {
    alert("Geocode was not successful for the following reason: " + status);
    }
     });
        }
</script>

<style type="text/css">
#controls {
position: absolute;
bottom: 1em;
left: 100px;
width: 400px;
z-index: 20000;
padding: 0 0.5em 0.5em 0.5em;
}
html, body, #map_canvas {
        margin: 0;
        width: 100%;
        height: 100%;
}
</style>
</head>
<body onLoad="initialize()">
<div id="controls">
<input id="address" type="textbox" value="Sydney, NSW">

<input type="button" value="Geocode" onClick="codeAddress()">
<div id="current" style="background-color:white;">Nothing yet...</div>
<div id="info" style="background-color:white;">Address:</div>
</div>
</div>


<div id="map_canvas"></div>


</body>
</html>