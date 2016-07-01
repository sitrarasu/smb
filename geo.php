





<!DOCTYPE html>
<html>

<head>
  <title>Our Company</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else { 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
	$("#location").html(latitude+","+longitude);
   /*  $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    }); */ 
}
</script>
</head>

<body>

  <h1 id="location"></h1>
  
</body>
</html>