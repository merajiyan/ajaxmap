<!DOCTYPE html>
<html>
<head>
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	
</head>
<body>

<div id="mapid" style="width: 600px; height: 400px;margin:0 auto;"></div>

<script type="text/javascript">
	var mymap = L.map('mapid').setView([35.70, 51.39], 11);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic2luYW1lcmFqaXlhbiIsImEiOiJjampoMHZtY3MxbTRyM3BwMnU0eTg2aGNiIn0.hAqeiwlFjvmytLPHSM_4uQ', {
		maxZoom: 17,
		attribution: 'Instrumentation Project',
		id: 'mapbox.streets'
	}).addTo(mymap);
	var layerGroup = L.layerGroup().addTo(mymap);
	
	function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			layerGroup.clearLayers();
			eval(this.responseText);
		}
	  };
	  xhttp.open("GET", "myphp.php", true);
	  xhttp.send();
	}
	setInterval(loadDoc,1500);
</script>

</body>
</html>