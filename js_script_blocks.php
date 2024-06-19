<?php

$map_css_block = <<<HTMLBLOCK
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" type="text/css" as="style" onload="this.onload = null; this.rel = 'stylesheet'; "
	integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw=="
	crossorigin="anonymous" referrerpolicy="no-referrer">
HTMLBLOCK;

$map_script_block = <<<HTMLBLOCK
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js" 
	integrity="sha512-puJW3E/qXDqYp9IfhAI54BJEaWIfloJ7JWs7OeD5i6ruC9JZL1gERT1wjtwXFlh7CjE7ZJ+/vcRZRkIYIb6p4g=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
	var map = L.map('map_canvas').setView([51.232157, -3.837104], 13);
	var contentString = '<div id="content_map" >'+
		'<img class="logo" src="{$url}images/logo/logo_iris.png" style="width: 200px;" alt="Chough\'s Nest Hotel">'+
		'<div id="bodyContent">'+
		'<p>North Walk<br />' +
		'Lynton<br />' +
		'Devon<br />' +
		'EX35 6HJ</p>' +
		'</div>'+
		'</div>';
	var marker = L.icon({
		iconUrl: '{$url}/images/icons/location.png',
		iconSize:     [64, 64], // size of the icon
		iconAnchor:   [32, 64], // point of the icon which will correspond to marker's location
		popupAnchor:  [1, -64] // point from which the popup should open relative to the iconAnchor
	});
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);
	L.marker([51.232157, -3.837104],{icon: marker}).addTo(map)
		.bindPopup(contentString);
	</script>
HTMLBLOCK;

$unite_gallery_css_block = <<<HTMLBLOCK
<!-- UNITE GALLERY -->
<link rel="preload" href='{$url}css/unite-gallery.css' type="text/css" as="style" onload="this.onload = null; this.rel = 'stylesheet'; ">

HTMLBLOCK; 
$unite_gallery_script_block = <<<HTMLBLOCK
<script type="text/javascript" src="{$url}js/unitegallery.min.js"></script> 
	<script type="text/javascript" src="{$url}js/themes/tilesgrid/ug-theme-tilesgrid.js"></script>
	<script>
	$("#gallery").unitegallery({
		gallery_theme: "tilesgrid",
		theme_navigation_type: "bullets",
		theme_bullets_margin_top: 20,
		tile_width: 230,					//tile width
		tile_height: 230,					//tile height
		tile_enable_shadow: false,			//enable shadow of the tile
		tile_border_color: "#F0EAD6",		//tile outline color
		tile_background_color: "#F0EAD6",		//tile outline color
		lightbox_type: "compact",	
		lightbox_slider_image_border: false,		
		lightbox_overlay_color: "#000",		//the color of the overlay. if null - will take from css
		lightbox_overlay_opacity:0.8,			//the opacity of the overlay. for compact type - 0.6
		lightbox_textpanel_title_text_align: "center",	
		lightbox_textpanel_title_font_family: 'Merriweather',
		lightbox_textpanel_title_font_size: 18,
	});
	</script>
HTMLBLOCK; 


?>