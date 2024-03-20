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
	$url = "http://choughsnesthotel.co.uk/test-site-2024/";
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
$pagesNav ='';
$page_heading = '';
$page_keywords = '';
$map_script = '';
$eating_out_script = '';


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
					"pagetitle"		=> "",
					"pagedesc"		=> "Chough's Nest Hotel - BOOK DIRECT for your stay in Lynton &amp; Lynmouth. The hotel has stunning sea views in a prime location for exploring North Devon. Family-run Bed and breakfast accommodation. Exmoor Short Break Special offers available. Best Price Guarantee",
					"keywords"		=> "hotel, bed and breakfast, accommodation, north devon, exmoor, national park, lynton, lynmouth, book direct, best prices",
					"nav"			=> "Hotel")
					
		  , array(	"pageURL" 		=> "rooms",	
					"pagetitle"		=> "Rooms - Four Poster, Superior or Classic Double Bedrooms",
					"pagedesc"		=> "Rooms at Chough's Nest Hotel feature glorious views of the sea and Exmoor National Park. Four-poster suite, Superior bedrooms and Classic double bedrooms",
					"keywords"		=> "room, accommodation, superior, double, four poster, facilities, hotel, sea views",
					"nav"			=> "Rooms & Tariffs")		  
					
		  , array(	"pageURL" 		=> "terms",
					"pagetitle"		=> "Booking Terms",
					"pagedesc"		=> "Terms and Conditions with Access statement, cancellation and booking policy.",
					"keywords"		=> "booking policy, terms, conditions, access statement, cancellation, pets, smoking, privacy policy, check-in, check-out",
					"nav"			=> "")		

		
		  , array(	"pageURL" 		=> "dining",	
					"pagetitle"		=> "Dinner at Chough's Nest",
					"pagedesc"		=> "Prices and tariffs for ".date('Y').", including Exmoor Break Special offers and reduced rates for booking direct online.",
					"keywords"		=> "tariff, prices, rates, value, book direct,",
					"nav"			=> "Dinner at Chough's")	
					
		  , array(	"pageURL" 		=> "where-to-eat",	
					"pagetitle"		=> "Eating Out - Local Restaurant Guide",
					"pagedesc"		=> "A list of restaurants, cafes and bars in Lynton and Lynmouth, serving fresh food all year round.",
					"keywords"		=> "restaurant, eating, dining, cafes, lynton, lynmouth",
					"nav"			=> "Eating Out")					

					
		  , array(	"pageURL" 		=> "things-to-see-and-do",	
					"pagetitle"		=> "Lynton &amp; Lynmouth",
					"pagedesc"		=> "The local area around Chough's Nest Hotel is called Little Switzerland. Home to the Lynton &amp; Lynmouth Cliff Railway, Watersmeet and Valley of Rocks as well as other attractions.",
					"keywords"		=> "attractions, cliff railway, valley of rocks, watersmeet, lynton, lynmouth, north devon, exmoor national park",
					"nav"			=> "Things To See &amp; Do")
				
		  , array(	"pageURL" 		=> "local-area",	
					"pagetitle"		=> "Lynton &amp; Lynmouth",
					"pagedesc"		=> "The local area around Chough's Nest Hotel is called Little Switzerland. Home to the Lynton &amp; Lynmouth Cliff Railway, Watersmeet and Valley of Rocks as well as other attractions.",
					"keywords"		=> "attractions, cliff railway, valley of rocks, watersmeet, lynton, lynmouth, north devon, exmoor national park",
					"nav"			=> "")
					
		  , array(	"pageURL" 		=> "contact",	
					"pagetitle"		=> "Contact - Location &amp; Map",
					"pagedesc"		=> "Send a message, view the hotel's location map and directions. How to get to Lynton &amp; Lynmouth.",
					"keywords"		=> "contact, message, address, location, directions, map, lynton, lynmouth",
					"nav"			=> "Contact")
					
		  , array(	"pageURL" 		=> "thanks",	
							"pagetitle"		=> "Thank You",
							"keywords"		=> "",
							"nav"			=> "")	

		  , array(	"pageURL" 		=> "error",	
					"pagetitle"		=> "Error",
					"keywords"		=> "",
					"nav"			=> "")						
	
		);
// NAVIGATION

	foreach ($pages as $page) {
		/*if current page or sub-page and nav not blank, add selected to menu item class*/		
		if ($current_page == '/home' || $current_page == '/index') {
			$current_page = $url;	
		}
		if ($page['nav'] == 'External Link') { //external link address
			$url = "";
		}
		if ($page['nav'] != "") {
		$page['selected'] = ($requested_page == $page['pageURL'] || stristr($requested_page,$page['nav'])) ? ' selected' : '';
		$pagesNav .=  <<<HTMLBLOCK
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
					$page_title = $page['pagetitle'].' - ';
					$page_desc  = $page['pagedesc'];
					$page_keywords  = $page['keywords'];
			}
		}		
	}
	else { // ERROR pages 
		$content = new Template('pages/error.tpl');
			$content->set("requested", $_REQUEST['page']);
			$page_title = "Error: ".$_REQUEST['page']." - ";	
	}
	
	if ($_REQUEST['page'] == "contact") {
		$map_script = <<<HTMLBLOCK
<script src="https://maps.googleapis.com/maps/api/js?key=****&amp;sensor=true"></script>
<script src="{$url}js/map_script.js"></script>
   
HTMLBLOCK;
		
	}
	if ($_REQUEST['page'] == "where-to-eat") {
		$eating_out_script = <<<HTMLBLOCK
<script src="{$url}js/eating_out_script.js"></script>
   
HTMLBLOCK;
		
	}
}
else { // HOME page if no page requested
	$content = new Template('pages/home.tpl');
		$page_title  = $pages[0]["pagetitle"];
		$page_desc  = $pages[0]["pagedesc"];
		
}
// Set TAG values

include("edit-tariff/tariff.php");
include("tariff_block.include.php");

$map_script = <<<HTMLBLOCK
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIU3D53Jg_CPi3-M1dYOaxJVxBVXeyO-4&amp;sensor=true"></script>
<script src="{$url}js/map_script.js"></script>
   
HTMLBLOCK;

$from_date = date('Y-m-d');
$to_date = date('Y-m-d',strtotime('+1 day'));

$booking_bar = <<<HTMLBLOCK
	<div id="booking-bar" class="w3-row booking-form iris-bg">
		<form  action="#" method="post" id="bookingform" autocomplete="off" target="_blank">
			<label class="floral-white-text">BOOKING</label>
			<div class="booking-form-inputs">
			<input type="text" id="pickarrivaldate" placeholder="Arrival" name="pickarrivaldate" readonly="true" />
			<input type="text" id="pickdeparturedate" placeholder="Departure" name="pickdeparturedate" readonly="true" />
			</div>
			<input type="hidden" id="arrivaldate" value="$from_date" name="arrivaldate" />
			<input type="hidden" id="departuredate" value="$to_date" name="departuredate" />
			<input type="hidden" id="nights" value="1" name="nights" />
			
			<input onclick="setActionUrl()" class="button-primary" type="submit" value="Book Direct" />
		</form>
	</div>
HTMLBLOCK;

$tags = array (
	
		"URL"				=> 	urlRoot(),
		"year"				=>	date('Y'),
		"booking_date"		=>  'from='.$from_date.'&to='.$to_date,
		"title"				=>	$page_title,
		"description"		=>	$page_desc,
		"keywords"			=>	$page_keywords,
		"navigation"		=>	$pagesNav,
		"booking_bar"		=>	$booking_bar,
		
		"tariff_block" 		=>  $tariff_block,
		"children_12_16_tariff" => $children_12_16_tariff,
		"min_nest_price"	=>  $min_nest_price,
		"min_superior_price"	=>  $min_superior_price,
		"min_classic_price"	=>  $min_classic_price,

		"map_script"		=>	$map_script,
		"eating_out_script" =>  $eating_out_script
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