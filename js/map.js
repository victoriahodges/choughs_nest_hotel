$( document ).ready(function() {
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
		iconUrl: 'images/icons/location.png',
		iconSize:     [64, 64], // size of the icon
		iconAnchor:   [32, 64], // point of the icon which will correspond to marker's location
		popupAnchor:  [1, -64] // point from which the popup should open relative to the iconAnchor
	});
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).on('tileloadstart', function(event) {
        event.tile.setAttribute('loading', 'lazy');
    }).addTo(map);
	L.marker([51.232157, -3.837104],{icon: marker}).addTo(map)
		.bindPopup(contentString);

});