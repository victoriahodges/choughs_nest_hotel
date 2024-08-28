<?php

$map_css_block = <<<HTMLBLOCK
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" type="text/css" as="style" onload="this.onload = null; this.rel = 'stylesheet'; "
	integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw=="
	crossorigin="anonymous" referrerpolicy="no-referrer">
HTMLBLOCK;

$map_script_block = <<<HTMLBLOCK
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js" 
	integrity="sha512-puJW3E/qXDqYp9IfhAI54BJEaWIfloJ7JWs7OeD5i6ruC9JZL1gERT1wjtwXFlh7CjE7ZJ+/vcRZRkIYIb6p4g=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{$url}js/map.js" defer></script>
HTMLBLOCK;

$unite_gallery_css_block = <<<HTMLBLOCK
<!-- UNITE GALLERY -->
<link rel="preload" href='{$url}css/unite-gallery.css' type="text/css" as="style" onload="this.onload = null; this.rel = 'stylesheet'; ">

HTMLBLOCK; 
$unite_gallery_script_block = <<<HTMLBLOCK
<script>
	var src = $('#gallery img').attr("src");
	var alt = $('#gallery img').attr("alt");
	$('#gallery img').attr('data-image', src);
	$('#gallery img').attr('data-description', alt);
</script>

<script type="text/javascript" src="{$url}js/unitegallery.min.js" defer></script> 
	<script type="text/javascript" src="{$url}js/themes/tilesgrid/ug-theme-tilesgrid.js" defer></script>
	<script src="{$url}js/gallery.js" defer></script>
HTMLBLOCK; 


?>