<?php

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


?>