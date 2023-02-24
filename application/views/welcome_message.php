<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Display a custom map</title>
	<script src="https://cdn.maptiler.com/maplibre-gl-js/v2.4.0/maplibre-gl.js"></script>
	<link href="https://cdn.maptiler.com/maplibre-gl-js/v2.4.0/maplibre-gl.css" rel="stylesheet" />
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		#map {
			position: absolute;
			top: 0;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>

<body>
	<div id="map"></div>
	<script>
		const key = 'http://10.10.17.161:3650/api/';
		const map = new maplibregl.Map({
			container: 'map', // container's id or the HTML element in which MapLibre GL JS will render the map
			style: `https://api.maptiler.com/maps/streets-v2/style.json?key=${key}`, // style URL
			center: [115.930944, 0.364055, 116.472100, 0.7], // starting position [lng, lat]
			zoom: 11, // starting zoom
		});
		map.addControl(new maplibregl.NavigationControl(), 'top-right');
	</script>
</body>

</html>