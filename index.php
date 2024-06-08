<?php
date_default_timezone_set("Europe/London");
/*
Inserts html or txt pages into template

First create the required folders/files:
.htaccess (with these settings)
RewriteEngine on
Options +FollowSymLinks
RewriteCond %{REQUEST_URI} !/css|js|images|templates
RewriteRule ^([a-zA-Z0-9\-\_]+|([a-zA-Z0-9\-\_]+/[a-zA-Z0-9\-\_]+)+)/*$ ?page=$1

additional 404 settings can be applied to capture incorrect directories.
*/

//SET HEADERS
//header("Cache-Control: max-age=604800"); //30days (60sec * 60min * 24hours * 7days)
header("Content-type: text/html; charset=utf-8");
//INCLUDES
include("template.class.php");

//SET SERVER ROOT LOCATIONS
function urlRoot(){      //returns root url
	//$url = "http://localhost/choughs-nest-hotel/"; //TEST SERVER
	$url = "https://choughsnesthotel.co.uk/";
	return $url;
	}
function serverRoot(){   //returns root dir of host
	//$root = "http://localhost/choughs-nest-hotel/"; //TEST SERVER
	$root = "";
	return $root;
	}
/************************************************************/
//SET VARIABLES
//$current_page = 'http://localhost'.$_SERVER['REQUEST_URI'];
$current_page = $_SERVER['REQUEST_URI'];
$requested_page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : 'hotel' ; //specify name of homepage in nav

$query = $_SERVER['QUERY_STRING'];
$url = urlRoot();

$page_title = '';
$page_desc = '';
$pages_nav ='';
$page_heading = '';
$page_keywords = '';
$hero_image = '';
$preload_hotel_image = '';
$hero_image_alt = '';
$map_css = '';
$map_script = '';
$social_meta_links = '';

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


// echo <<<HTMLBLOCK
// 	<div style="width: 100%; background: #ccc;">
// 		<p>DEBUGGING</p>
// 		<p>
// 		URL = $url</br>
// 		Request page URL = $requested_page<br />
// 		Query string = $query<br />
// 		Current page = $current_page
// 		</p>
// 	</div>
// HTMLBLOCK;
/************************************************************/	
//PAGES ARRAY
	$pages = array(
			array(	"pageURL" 		=> "",
					"pagetitle"		=> "Chough's Nest Hotel | Book your stay in Lynton &amp; Lynmouth",
					"pagedesc"		=> "BOOK DIRECT: Lynton hotel with sea views in a prime location to explore North Devon &amp; Exmoor. Dinner and B&amp;B accommodation. Exmoor Break special offers.",
					"keywords"		=> "hotel, bed and breakfast, dinner, accommodation, north devon, exmoor, national park, lynton, lynmouth, book direct, best prices",
					"nav"			=> "Hotel",
					"hero_image"	=> ["hotel_front","Chough's Nest Hotel in Lynton, Devon, Exmoor"]
					)
  
		  , array(	"pageURL" 		=> "rooms",
					"pagetitle"		=> "Rooms with Sea Views",
					"pagedesc"		=> "Book a room at Chough's Nest Hotel, with stunning sea views in Exmoor National Park. Choose from Four-poster suite, Superior, and Classic double rooms.",
					"keywords"		=> "rooms, accommodation, superior, double, suite, four poster, facilities, hotel, sea views",
					"nav"			=> "Rooms & Prices",
					"hero_image"	=> ["four_poster_nest_bedroom","Four poster room at Chough's Nest Hotel in Lynton"]
					)
		
		  , array(	"pageURL" 		=> "dining",
					"pagetitle"		=> "Dining &amp; Lite Bites Dinner Menu",
					"pagedesc"		=> "Dine at Chough's Nest Hotel. Evening meals served in our dining room with stunning views over Lynmouth Bay. View menus and book a table for dinner.",
					"keywords"		=> "dinner, food, dining, menu, eating, evening meals",
					"nav"			=> "Dinner at Chough's",
					"hero_image"	=> ["lite_bites_dinners","Dinner at Chough's Nest Hotel in Lynton"]
					)

		  , array(	"pageURL" 		=> "breakfast-menu",
					"pagetitle"		=> "Breakfast Menu",
					"pagedesc"		=> "See what's on offer for breakfast, served in our dining room with superb views of the Bristol Channel, during your stay at Chough's Nest Hotel.",
					"keywords"		=> "breakfast, menu, eating",
					"nav"			=> "",
					"hero_image"	=> ["breakfast_room_morning","Breakfast at Chough's Nest Hotel in Lynton"]
					)
					
		  , array(	"pageURL" 		=> "where-to-eat-in-Lynton-and-Lynmouth",	
					"pagetitle"		=> "Eating Out - Local Restaurant Guide",
					"pagedesc"		=> "A list of local restaurants for dining out in Lynton and Lynmouth, serving fresh food all year round.",
					"keywords"		=> "restaurant, eating, dining, cafes, lynton, lynmouth",
					"nav"			=> "Eating Out",
					"hero_image"	=> ["eating_out","Places to have dinner in Lynton &amp; Lynmouth"]
					)

		  , array(	"pageURL" 		=> "a-guide-to-Lynton-and-Lynmouth",
					"pagetitle"		=> "A Guide to Lynton &amp; Lynmouth",
					"pagedesc"		=> "Find out why Lynton &amp; Lynmouth and the local area around Chough's Nest Hotel is called Little Switzerland.",
					"keywords"		=> "lynton and lynmouth, valley of rocks, poets, sir george newnes, lynton, lynmouth, north devon, exmoor national park",
					"nav"			=> "Lynton &amp; Lynmouth",
					"hero_image"	=> ["lynmouth_harbour","Lynmouth Harbour, Exmoor, Devon"]
					)
					
		  , array(	"pageURL" 		=> "local-attractions-in-Lynton-and-Lynmouth",
					"pagetitle"		=> "Local Attractions in Lynton &amp; Lynmouth",
					"pagedesc"		=> "Lynton &amp; Lynmouth is home to the Lynton &amp; Lynmouth Cliff Railway, Watersmeet and Valley of Rocks as well as other attractions.",
					"keywords"		=> "attractions, cliff railway, valley of rocks, watersmeet, lynton, lynmouth",
					"nav"			=> "",
					"hero_image"	=> ["valley_of_rocks_sunset_from_hollerday_hill","View of Valley of Rocks in Lynton at sunset"]
					)

		  , array(	"pageURL" 		=> "local-walks-around-Lynton-and-Lynmouth",
					"pagetitle"		=> "Local Walks around Lynton &amp; Lynmouth",
					"pagedesc"		=> "Lynton &amp; Lynmouth is a walker's paradise, there are so many paths and trails to explore. Chough's Nest Hotel is located directly on the South West Coast Path.",
					"keywords"		=> "walking, hiking, trails, paths, SWCP, lynton, lynmouth",
					"nav"			=> "",
					"hero_image"	=> ["walking_paths_and_trails","Footpath near Lyn river valley at Watersmeet, Lynmouth, Devon"]
					)

		  , array(	"pageURL" 		=> "things-to-see-and-do",
					"pagetitle"		=> "Things to see and do in North Devon &amp; Exmoor",
					"pagedesc"		=> "Enjoy these visitor attractions and experiences in North Devon and Exmoor National Park during your stay at Chough's Nest Hotel.",
					"keywords"		=> "attractions, visiting, north devon, exmoor national park",
					"nav"			=> "",
					"hero_image"	=> ["exmoor_ponies","Wild Exmoor ponies on the moor North Devon"]
					)

		  , array(	"pageURL" 		=> "choughs",	
					"pagetitle"		=> "What are choughs?",
					"pagedesc"		=> "Find out about the hotel's namesake and member of the crow family, the Cornish chough (Pyrrhocorax pyrrhocorax).",
					"keywords"		=> "choughs, cornish, crow family, rare birds, conservation",
					"nav"			=> "",
					"hero_image"	=> ["red_billed_chough_pyrrhocorax_pyrrhocorax","Red-billed Chough"]
					)

		  , array(	"pageURL" 		=> "gallery",
					"pagetitle"		=> "Photo Gallery",
					"pagedesc"		=> "View images of the hotel rooms, views, Lynton &amp; Lynmouth and surrounding area at Chough's Nest Hotel.",
					"keywords"		=> "images, picutes, photo gallery, photo collection, album, sea views",
					"nav"			=> "Gallery",
					"hero_image"	=> ["view_from_choughs_nest_hotel","View of Foreland Point and Bristol Channel from Chough's Nest Hotel, Devon"]
					)
				
		  , array(	"pageURL" 		=> "contact",
					"pagetitle"		=> "Contact Us",
					"pagedesc"		=> "Contact details for Chough's Nest Hotel. View the hotel's location map and directions. How to get to Lynton &amp; Lynmouth and parking information",
					"keywords"		=> "contact, message, address, location, directions, map, lynton, lynmouth, parking",
					"nav"			=> "Contact",
					"hero_image"	=> ["hotel_front","Chough's Nest Hotel in Lynton"]
					)

		  , array(	"pageURL" 		=> "how-to-get-here",
					"pagetitle"		=> "How To Get Here",
					"pagedesc"		=> "How to find Chough's Nest Hotel with directions and information on hotel parking. Public transport timetables and local taxi information.",
					"keywords"		=> "parking, directions, location, map, how to get here, how to find us",
					"nav"			=> "",
					"hero_image"	=> ["hotel_front","Chough's Nest Hotel in Lynton"]
					)

		  , array(	"pageURL" 		=> "accessibility",
					"pagetitle"		=> "Accessibility",
					"pagedesc"		=> "Find out more about accessibility at Chough's Nest Hotel. As it is a Victorian building, there are a few things you should be aware of.",
					"keywords"		=> "accessibility, access statement, getting around, before your visit, ",
					"nav"			=> "",
					"hero_image"	=> ["hotel_front","Chough's Nest Hotel in Lynton"]
					)

		  , array(	"pageURL" 		=> "terms-and-conditions",
					"pagetitle"		=> "Booking Terms",
					"pagedesc"		=> "Terms and Conditions with Access statement, cancellation and booking policy, payment, parking and hotel information.",
					"keywords"		=> "booking policy, terms, conditions, access statement, cancellation, pets, smoking, privacy policy, check-in, check-out",
					"nav"			=> "",
					"hero_image"	=> ["hotel_front","Chough's Nest Hotel in Lynton"]
					)
					
		  , array(	"pageURL" 		=> "thanks",
					"pagetitle"		=> "Thank You",
					"keywords"		=> "",
					"nav"			=> "",
					"hero_image"	=> ["view_from_choughs_nest_hotel","Chough's Nest Hotel in Lynton"]
					)

		  , array(	"pageURL" 		=> "error",
					"pagetitle"		=> "Error",
					"keywords"		=> "",
					"nav"			=> "",
					"hero_image"	=> ["goats_on_path","Chough's Nest Hotel in Lynton"]
					)						
	
		);
// NAVIGATION
	foreach ($pages as $page) {
		/*if current page or sub-page and nav not blank, add selected to menu item class*/		
		if ($current_page == '/home' || $current_page == '/index') {
			$current_page = "$url";	
		}
		if ($page['nav'] != "") {
			$page['selected'] = ($requested_page == $page['pageURL'] || stristr($requested_page,$page['nav'])) ? ' selected' : '';
			$pages_nav .=  <<<HTMLBLOCK
				<a  href="{$url}{$page['pageURL']}"  onclick="w3_close()" class="w3-bar-item w3-button{$page['selected']}">{$page['nav']}</a>
HTMLBLOCK;
		}
	}
//check page is requested and is not blank or home page
if (isset($_REQUEST['page']) && $_REQUEST['page'] != "" && $_REQUEST['page'] != "home") {
	if (file_exists("pages/".$_REQUEST['page'].".tpl")) {
	//CONTENT - LOAD PAGE TEMPLATES
		foreach ($pages as $page) { //Loop through array - check if page request matches URL in array
			if ($_REQUEST['page'] == $page['pageURL']) {				
				$content = new Template('pages/'.$_REQUEST['page'].'.tpl');
					//set tags within pages using values in array
					foreach ($page as $key => $value) {
						$content->set($key, $value);
					}
					$page_title = $page['pagetitle']." | Chough's Nest Hotel";
					$page_desc  = $page['pagedesc'];
					$page_keywords  = $page['keywords'];
					$hero_image = $page['hero_image'][0];
					$hero_image_alt = $page['hero_image'][1];
					$social_meta_links = <<<HTMLBLOCK
<meta property="og:title" content="{$page_title} | Book Direct for your stay in Lynton &amp; Lynmouth">
	<meta property="og:description" content="{$page_desc}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{$url}{$page['pageURL']}">
	<meta property="og:image" content="{$url}images/hero_images/{$hero_image}.jpg">
	<meta property="og:site_name" content="Chough's Nest Hotel">
HTMLBLOCK;
			}
		}		
	}
	else { // ERROR pages 
		$content = new Template('pages/error.tpl');
			$content->set("requested", $_REQUEST['page']);
			$page_title = "Error: ".$_REQUEST['page']." - ";
			$hero_image = 'goats_on_path';
			$hero_image_alt = 'goats_on_path';
	}
	
	if ($_REQUEST['page'] == "contact" || $_REQUEST['page'] == "how-to-get-here") {
		$map_css = $map_css_block;
		$map_script = $map_script_block;	
	}
}
else { // HOME page if no page requested
	$content = new Template('pages/home.tpl');
	$page_title  = $pages[0]["pagetitle"];
	$page_desc  = $pages[0]["pagedesc"];
	$page_keywords  = $pages[0]['keywords'];
	$hero_image = $pages[0]["hero_image"][0];
	$hero_image_alt = $pages[0]["hero_image"][1];
	$preload_hotel_image = '<link rel="preload" fetchpriority="high" as="image" href="'.$url.'images/hero_images/hotel_front.webp" type="image/jpeg">';
	$map_css = $map_css_block; // map also on homepage
	$map_script = $map_script_block; // map also on homepage
	$social_meta_links = <<<HTMLBLOCK
<meta property="og:title" content="Chough's Nest Hotel | Book Direct for your stay in Lynton &amp; Lynmouth">
	<meta property="og:description" content="{$page_desc}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{$url}">
	<meta property="og:image" content="{$url}images/hero_images/{$hero_image}.jpg">
	<meta property="og:site_name" content="Chough's Nest Hotel">
HTMLBLOCK;
		
}
// Set TAG values

$from_date = date('Y-m-d');
$to_date = date('Y-m-d',strtotime('+1 day'));

$hero_image_block =  <<<HTMLBLOCK
<div id="hero" class="w3-row" style="position: relative;">
	<div class="w3-col hero-wrap">
		<img 
			src="{$url}images/hero_images/{$hero_image}.webp"
			fetchpriority="high"
			style="width:100%; height: 100%;"
			height="756" width="1560" alt="{$hero_image_alt}"
		>
		<div class="hero-overlay"></div>
	</div>
</div>
HTMLBLOCK;

$booking_bar = <<<HTMLBLOCK
<div id="booking-bar" class="w3-row w3-center booking-form iris-bg">
	<form  action="#" method="post" id="bookingform" autocomplete="off" target="_blank">
		<label class="floral-white-text">BOOKING</label>
		<div class="booking-form-inputs">
		<input type="text" id="pickarrivaldate" placeholder="Arrival" name="pickarrivaldate" readonly="readonly">
		<input type="text" id="pickdeparturedate" placeholder="Departure" name="pickdeparturedate" readonly="readonly">
		</div>
		<input type="hidden" id="arrivaldate" value="$from_date" name="arrivaldate">
		<input type="hidden" id="departuredate" value="$to_date" name="departuredate">
		<input type="hidden" id="nights" value="1" name="nights">
		
		<input onclick="setActionUrl()" class="button-primary" type="submit" value="Book Direct">
	</form>
</div>
HTMLBLOCK;

$qbook_href ='href="https://web-bookings.hotels.uk.com/#/booking/4541/items/availability?k=YS1KvPZvRfrRZlPNVAOaiWYVt" target="_blank"';

$tags = array (
	
		"URL"				=> 	urlRoot(),
		"year"				=>	date('Y'),
		"booking_date"		=>  'from='.$from_date.'&to='.$to_date,
		"title"				=>	$page_title,
		"description"		=>	$page_desc,
		"keywords"			=>	$page_keywords,
		"navigation"		=>	$pages_nav,
		"hero_image"		=>	$hero_image_block,
		"preload_image"		=>  $preload_hotel_image,
		"booking_bar"		=>	$booking_bar,
		"qbook_href"		=>	$qbook_href,
		"map_css"		=>	$map_css,
		"map_script"		=>	$map_script,
		"social_meta_links"	=>	$social_meta_links
);

//Loop through tags in page content templates
	foreach ($tags as $key => $value) {
		$content->set($key, $value);
		};

$pagesTemplates[] = $content;

$pagesContents = Template::merge($pagesTemplates);

// LAYOUT TEMPLATE
	$layout = new Template("templates/layout.tpl");

//Loop through tags in layout templates
	foreach ($tags as $key => $value) {
		$layout->set($key, $value);
	};

	$layout->set("content", $pagesContents);
	
	// Finally we can output our final page.
	echo $layout->output();
	
?>