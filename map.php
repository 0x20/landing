<!DOCTYPE html>
<html>
<head>
	

    <link rel="stylesheet" href="css/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="js/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>


	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		#map {
			width: 100%;
			height: 100%;
		}
	</style>

	
</head>
<body>

<div id='map'></div>
<script>
	var map = L.map('map').setView([51.059996, 3.73237], 18);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	var Icon = L.Icon.extend({
		options: {
			iconSize:     [174, 33],
			iconAnchor:   [90, 16],
			popupAnchor:  [0, -16]
		}
	});

	var hsIcon = new Icon({iconUrl: "https://hackerspace.gent/landing/img/logo-dark.png"}); // TODO Change to map_icon.png once the icon is live

	L.marker([51.0599962, 3.7323778], {icon: hsIcon}).bindPopup("Blekerijstraat 75, Up the stairs, Room 1:21").addTo(map);

</script>



</body>
</html>

