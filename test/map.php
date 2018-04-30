<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
       #map-canvas {
        margin: 0;
        padding: 0;
        width: 700px;
        height: 500px;
      }
    </style>
    <script src="http://maps.google.com/maps/api/js?v=3&amp;key=AIzaSyCGANj9JKDjCJGovCKOtcY2GKnnHLZ-VIo"></script>
	
    <script>
		var map;
		var marker;
		var latlong = [["21.001663","75.486069"],
		["20.108977","73.914672"],
		["21.1458","79.088155"],
		["19.153061","77.305847"],
		["21.151862","79.070434"],
		["20.0831","73.79095"],
		["18.52043","73.856744"],
		["16.774832","74.486265"],
		["16.691308","74.244866"],
		["19.876165","75.343314"],
		["19.997453","73.789802"],
		["20.532949","76.184303"],
		["21.013321","75.563972"],
		["18.9513","72.82831"],
		["18.515752","73.182162"],
		["19.075984","72.877656"],
		["19.218331","72.97809"],
		["19.844006","79.36266"],
		["20.745319","78.602195"],
		["21.267052","78.577973"],
		["18.52043","73.856744"],
		["19.96955","79.304654"],
		["19.450585","72.799155"],
		["18.52043","73.856744"],
		["20.745319","78.602195"],
		["18.9833","75.7667"],
		["21.013321","75.563972"],
		["21.1458","79.088155"],
		["19.153061","77.305847"]];

		function initialize() {
		  var mapOptions = {
			zoom: 4,
			center: new google.maps.LatLng(21.7679, 78.8718),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
			  drawCircle();
		}


		function drawCircle() 
		{
			var options = {
					strokeColor: '#800000',
					strokeOpacity: 1.0,
					strokeWeight: 1,
					fillColor: '#C64D45',
					fillOpacity: 0.5,
					map: map,
					center: new google.maps.LatLng(21.7679, 78.8718),
					radius: 100000
				};

				circle = new google.maps.Circle(options);
				var bounds= circle.getBounds(); 
				for (var i = 0; i < latlong.length; i++){
				var hello =new google.maps.LatLng(latlong[i][0], latlong[i][1]);
				if(bounds.contains(hello)) 
				{
					marker= new google.maps.Marker({
					position:hello,
				});
				   marker.setMap(map);
					  console.log("Hi iam in bound");

					  }
					  else
					  {
						 console.log("Iam not in bound");
			}
			}

		}
		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>