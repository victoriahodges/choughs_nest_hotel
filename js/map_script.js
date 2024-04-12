var map = L.map('map_canvas').setView([51.232157, -3.837104], 13);

var contentString = '<div id="content_map" >'+
	'<img class="logo" src="images/logo/logo_iris.png" style="width: 200px;" alt="Chough\'s Nest Hotel">'+
	'<div id="bodyContent">'+
	'<p>North Walk<br />' +
	'Lynton<br />' +
	'Devon<br />' +
	'EX35 6HJ</p>' +
	'</div>'+
	'</div>';

var marker = L.icon({
	iconUrl: 'https://www.choughsnesthotel.co.uk/images/location.png',
	// shadowUrl: 'leaf-shadow.png',

	iconSize:     [64, 64], // size of the icon
	// shadowSize:   [50, 64], // size of the shadow
	iconAnchor:   [32, 64], // point of the icon which will correspond to marker's location
	// shadowAnchor: [4, 62],  // the same for the shadow
	popupAnchor:  [1, -64] // point from which the popup should open relative to the iconAnchor
});

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.232157, -3.837104],{icon: marker}).addTo(map)
	.bindPopup(contentString);
