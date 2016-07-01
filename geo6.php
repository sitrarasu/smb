<!DOCTYPE html>
<html>
<head>    
    <title>Getting Zoom Demo</title>
    <style type="text/css">
        html, body{ height: 100%; height: 100%; margin: 0; padding: 0; }
        #map-container{ height: 100%; width: 100%; min-width:500px; min-height:300px; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>    
</head>
<body>
    <div>
        <label id="display-zoom-label">

        </label>
    </div>
    <div id="map-container"></div>
    <script>
        // Global map variable to have access to map object everywhere in the code
        var map,
            firstBoundChangedListener,
            markers = [];

        // Add random markers
        function addMarkers(count) {
            // map is the google.maps.Map object
            var bounds = map.getBounds();
            var northEast = bounds.getNorthEast();
            var southWest = bounds.getSouthWest();
            var minLat = Math.min(northEast.lat(), southWest.lat());
            var maxLat = Math.max(northEast.lat(), southWest.lat());
            var minLng = Math.min(northEast.lng(), southWest.lng());
            var maxLng = Math.max(northEast.lng(), southWest.lng());

            var latDifference = maxLat - minLat;
            var lngDifference = maxLng - minLng;
            var latLngArray = new Array();

            for (var i = 0; i < count; i++) {
                var lat = minLat + Math.random() * latDifference;
                var lng = minLng + Math.random() * lngDifference;
                var latLng = new google.maps.LatLng(lat, lng);
                latLngArray.push(latLng);
            }

            for (var i = 0; i < latLngArray.length; i++) {
                var marker = new google.maps.Marker({
                    position: latLngArray[i],
                    title: "Marker: " + i
                });
                markers.push(marker);
                marker.setMap(map);
            }
        }
        function UpdateZoomLabel() {
            var displayZoomLabel = document.getElementById("display-zoom-label"),
                // get current zoom
                zoomValue = map.getZoom();
            displayZoomLabel.innerHTML = "The Current Map's Zoom is: " + zoomValue;
        }
        // Initialize the map object
        function initialize() {
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var mapOptions = {
                zoom: 8,
                center: latlng
            };
            map = new google.maps.Map(document.getElementById('map-container'), mapOptions);
            firstBoundChangedListener = google.maps.event.addListener(map, "bounds_changed", function () {
                if (firstBoundChangedListener) google.maps.event.removeListener(firstBoundChangedListener);
                // call add markers: add 'n' markers randomly
                addMarkers(6);
            });
            //Listen for the 'zoom_changed' event of the map
            google.maps.event.addListener(map, "zoom_changed", function () {
                //show zoom in label
                UpdateZoomLabel();
            });
            UpdateZoomLabel();
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>