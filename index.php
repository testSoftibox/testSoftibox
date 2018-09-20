<!DOCTYPE html>
<html>
<head>fsd
	<title></title>
	<style>
		#mapid { height: 600px; }
	</style>
	<link rel="stylesheet" href="leaflet.css"
   />
   <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
   <link rel="stylesheet" href="http://ignf.github.io/geoportal-extensions/leaflet-latest/dist/GpPluginLeaflet.css" />

</head>
<body>
    <h2>Voici le titre de la modification</h2>
	<div id="mapid">
		
	</div>
</body>
</html>

<!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="leaflet.js"></script>
 <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
 <script src="http://ignf.github.io/geoportal-extensions/leaflet-latest/dist/GpPluginLeaflet.js"></script>
 <script type="text/javascript">
 	var mymap = L.map('mapid').setView([46.60, 2.56], 8);

/*L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoicmF0b25nYXJhbnRvIiwiYSI6ImNqbTdubWdncDQ0emIza3F2aXQxOTh5b2oifQ.NbvtsHeJOHQKrBgrUIs3fg'
}).addTo(mymap);*/
mapLink = 
            '<a href="http://www.esri.com/">Esri</a>';
        wholink = 
            'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';
L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; '+mapLink+', '+wholink,
            id: 'mapbox.streets',
            maxZoom: 18,
            }).addTo(mymap);
//image satelite
/*var mymap = L.map('mapid').setView([46.60, 2.56], 14);
        mapLink = 
            '<a href="http://www.esri.com/">Esri</a>';
        wholink = 
            'i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community';
        L.tileLayer(
            'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; '+mapLink+', '+wholink,
            id: 'mapbox.streets',
            maxZoom: 18,
            }).addTo(mymap);*/

//secon image satelite
/*var mymap = L.map('mapid').setView([46.60, 2.56], 14);
var osm = L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"),
    mqi = L.tileLayer('http://{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png', {
attribution: 'proper attribution goes here',
subdomains: ['otile1', 'otile2', 'otile3', 'otile4']});
//df
var baseMaps = {
    "OpenStreetMap": osm,
    "MapQuestImagery": mqi
};

var overlays =  {//add any overlays here

    };

L.control.layers(baseMaps,overlays, {position: 'bottomleft'}).addTo(mymap);*/
//fin satelite

//tracage de routes
L.Routing.control({
  waypoints: [
    L.latLng(46.58, 0.34),
    L.latLng(46.65, 0.07)
  ]
}).addTo(mymap);

//other tiles
/*L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        minZoom: 0,
        maxZoom: 10
    }).addTo(mymap);
    L.tileLayer('http://tile.stamen.com/watercolor/{z}/{x}/{y}.jpg', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        minZoom: 11,
        maxZoom: 16
    }).addTo(mymap);
   */

//ajout de marqueur
var marker = L.marker([46.58, 0.34]).addTo(mymap);
var marker2 = L.marker([46.65, 0.07]).addTo(mymap);
var marker3 = L.marker([47.35, 0.73]).addTo(mymap);
//message popup

//infos bulle
marker.bindTooltip("Avec plus de 27 000 étudiants, Poitiers est une grande ville universitaire depuis la création de son Université <br>en 1431, deuxième pôle universitaire de la région après sa capitale").openTooltip();
marker3.bindTooltip("La commune, comptant 136 252 habitants en 2015,<br> est au centre d'une unité urbaine de 453 042 habitants (en 2015)").openTooltip();
//click in map
function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}

mymap.on('click', onMapClick);
 </script>
