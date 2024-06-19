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
include("server_root.php");

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
$gallery_css = '';
$gallery_script = '';
$social_meta_links = '';


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
include("js_script_blocks.php");
include("page_data.php");
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
	<meta property="og:image" content="{$url}images/hero_images/{$hero_image}.webp">
	<meta property="og:site_name" content="Chough's Nest Hotel">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="{$page_title} | Book Direct for your stay in Lynton &amp; Lynmouth">
	<meta name="twitter:description" content="{$page_desc}">
	<meta name="twitter:image" content="{$url}images/hero_images/{$hero_image}.webp" />
HTMLBLOCK;
			}
		}		
	}
	else { // ERROR pages 
		$content = new Template('pages/error.tpl');
			$content->set("requested", $_REQUEST['page']);
			$page_title = "Error: ".$_REQUEST['page']." - ";
			$hero_image = 'lynmouth_telescope';
			$hero_image_alt = "Chough's Nest Hotel, Lynton &amp; Lynmouth, Devon, Exmoor National Park";
	}
	
	if ($_REQUEST['page'] == "contact" || $_REQUEST['page'] == "how-to-get-here") {
		$map_css = $map_css_block;
		$map_script = $map_script_block;	
	}
	if ($_REQUEST['page'] == "gallery" || $_REQUEST['page'] == "how-to-get-here") {
		$gallery_css = $unite_gallery_css_block;
		$gallery_script = $unite_gallery_script_block;	
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
	<meta property="og:image" content="{$url}images/hero_images/{$hero_image}.webp">
	<meta property="og:site_name" content="Chough's Nest Hotel">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Chough's Nest Hotel | Book Direct for your stay in Lynton &amp; Lynmouth">
	<meta name="twitter:description" content="{$page_desc}">
	<meta name="twitter:image" content="{$url}images/hero_images/{$hero_image}.webp" />
HTMLBLOCK;
		
}
// Set TAG values

$from_date = date('Y-m-d');
$to_date = date('Y-m-d',strtotime('+1 day'));

// hero and booking bar
include("content_blocks.php");

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
		"map_css"			=>	$map_css,
		"map_script"		=>	$map_script,
		"gallery_css"		=>	$gallery_css,
		"gallery_script"	=>	$gallery_script,
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