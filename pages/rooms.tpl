	<!-- Hero image -->
	[@hero_image]
	<!-- Main content-->
	<div class="w3-container">
		[@booking_bar]

		<div id="page-title" class="w3-row">
			<div class="w3-col w3-center">
				<div class="fancy short page-title">
<h1><span>Our Rooms</span></h1>
				</div>
			</div>
		</div>

		<div class="content">
			<div class="w3-row grid-wrap">
				<div class="w3-col grid-col l6 xl7 w3-margin-bottom">
					<h2>Stay in comfort</h2>
					<p>Chough's Nest Hotel has seven comfy guest bedrooms which are individually decorated
					to give them their own distinct character and charm and all have spectacular views out to sea.</p>

					<p>Bedrooms on the first floor are spacious with high-ceilings and large bay windows while second
					floor bedrooms feature all the comforts of home plus stunning views across the bay.</p>

					<a href="#view-hotel-rooms" class="button w3-margin-bottom">View our rooms</a> 

					<p>All our prices include a freshly cooked Full English breakfast and VAT.</p>
					<a href="[@URL]breakfast-menu" class="button w3-margin-bottom">View Breakfast menu</a>
				</div>
				<div class="w3-col grid-col l6 xl5">
					<h2>Hotel room facilities</h2>
					<p>The the following facilities are available to our guests:</p>
					<ul class="list">
						<li>Free private car parking</li>
						<li>Free Wi-Fi fibre broadband internet</li>
						<li>Digital Freeview smart television</li>
						<li>DAB digital radio and clock</li>
						<li>Tea and coffee facilities</li>
						<li>Complimentary toiletries</li>
						<li>Daily house-keeping</li>
						<li>Iron and ironing board </li>
						<li>Local walking maps, guide leaflets and information</li>
						<li>Drying facilities for walkers/cyclists</li>
					</ul>

				</div>
			</div>
		</div>

		<div class="w3-row fancy-card-row iris-bg floral-white-text special-offer">
			<div class="w3-col s12 w3-center fancy-card">
				<div class="fancy-card-border">
					<h2 class="gold-text">Exmoor Break Special Offer</h2>
					<h3><em>Get away for an extended break at Chough's Nest Hotel</em></h3>
					<hr class="short">
					<p>Starting from 4 nights, we offer a great discount for longer stays on all of our rooms.<br>
					<span class="small">Subject to availability, terms and conditions apply.</span></p>
					<a class="button w3-margin-top" onclick="show_availability()">
					<!-- <a class="button w3-margin-top" [@qbook_href]> -->
						Check availability
					</a>
					
					<div class="corner top-right-corner iris-bg"></div>
					<div class="corner top-left-corner iris-bg"></div>
					<div class="corner bottom-right-corner iris-bg"></div>
					<div class="corner bottom-left-corner iris-bg"></div>
				</div>
			</div>
		</div>

		<div id="availability_widget" class="w3-row champagne-bg special-offer" style="display: none;">
			<iframe id="QBOOKWIDGET_CAL" src="https://secure.hotels.uk.com/incs/calendar/calendar.php?HotelID=4541&token=8a0ad0e705958f86f4eb666f4736a64e" frameborder="0" name="calendar" scrolling="auto" width="100%" height="610"></iframe>
		</div>

		<div id="section_links_icons" class="w3-row">
			<div class="link half-width">
				<img class="link-image" src="[@URL]images/icons/desk-bell.png" alt="Check-in at Chough's Nest Hotel">
				<div class="link-text">
					<h4>Check-in</h4>
					<p><strong>Guests can check-in from 2:00pm.</strong><br>
					If you wish to arrive early to explore the area, please let us know.</p>
				</div>
			</div>
			<div class="link half-width">
				<img class="link-image" src="[@URL]images/icons/room-key.png" alt="Check-out at Chough's Nest Hotel">
				<div class="link-text">
					<h4>Check-out</h4>
					<p><strong>Check-out is by 10:30am. </strong><br>
					Please remember to return your room key to reception on departure.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="view-hotel-rooms" class="alternating-cards">
		<div class="w3-row fancy-card-row champagne-bg">
			<div class="w3-col s12 m12 l6 fancy-card-image">
				<img 
				class="lazyload"
				src="[@URL]images/room_2_360.jpg"
				data-src="[@URL]images/room_2.jpg"
				data-srcset="
				[@URL]images/room_2_360.jpg 360w,
				[@URL]images/room_2_800.jpg 768w,
				[@URL]images/room_2.jpg 1080w
				"
				width="1500" height="1125" alt="Four poster Nest bedroom"
				>
			</div>
			<div class="w3-col s12 m12 l6 w3-center fancy-card">
				<div class="fancy-card-border">
					<h2>Four Poster Nest</h2>
					<hr class="short">
					<h3>From &pound;130 per night</h3>
					<p>The 'Nest' is our premier bedroom. A very spacious king-size four-poster room which boasts 
					panoramic views of Lynmouth Bay. It has an en suite bathroom with bath and shower.</p>
					<a class="button w3-margin-top" [@qbook_href]>
						Book now
					</a>

					<div class="corner top-right-corner champagne-bg"></div>
					<div class="corner top-left-corner champagne-bg"></div>
					<div class="corner bottom-right-corner champagne-bg"></div>
					<div class="corner bottom-left-corner champagne-bg"></div>
				</div>
			</div>
		</div>

		<div class="w3-row fancy-card-row champagne-bg">
			<div class="w3-col s12 m12 l6 fancy-card-image" >
				<img 
				class="lazyload"
				src="[@URL]images/room_1_360.jpg"
				data-src="[@URL]images/room_1.jpg"
				data-srcset="
				[@URL]images/room_1_360.jpg 360w,
				[@URL]images/room_1_800.jpg 768w,
				[@URL]images/room_1.jpg 1080w
				"
				width="1500" height="1125" alt="Superior hotel bedroom"
				>
			</div>
			<div class="w3-col s12 m12 l6 w3-center fancy-card">
				<div class="fancy-card-border">
					<h2>Superior Double</h2>
					<hr class="short">
					<h3>From &pound;120 per night</h3>
					<p>Our large superior rooms feature a comfy king-size bed, 
					glorious sea views and en suite facilities with bath and shower.</p>
					<a class="button w3-margin-top" [@qbook_href]>
						Book now
					</a>
					
					<div class="corner top-right-corner champagne-bg"></div>
					<div class="corner top-left-corner champagne-bg"></div>
					<div class="corner bottom-right-corner champagne-bg"></div>
					<div class="corner bottom-left-corner champagne-bg"></div>
				</div>
			</div>
		</div>

		<div class="w3-row fancy-card-row champagne-bg">
			<div class="w3-col s12 m12 l6 fancy-card-image">
				<img 
				class="lazyload"
				src="[@URL]images/room_8_360.jpg"
				data-src="[@URL]images/room_8.jpg"
				data-srcset="
				[@URL]images/room_8_360.jpg 360w,
				[@URL]images/room_8_800.jpg 768w,
				[@URL]images/room_8.jpg 1080w
				"
				width="1500" height="1125" alt="Classic hotel double bedroom"
				>				
			</div>
			<div class="w3-col s12 m12 l6 w3-center fancy-card">
				<div class="fancy-card-border">
					<h2>Classic Double</h2>
					<hr class="short">
					<h3>From &pound;98 per night</h3>
					<p>Located on the second floor, our classic double bedrooms offer excellent value 
					for a short stay. These rooms have sea views and en suite facilities with  both bath and shower.</p>
					<a class="button w3-margin-top" [@qbook_href]>
						Book now
					</a>
					
					<div class="corner top-right-corner champagne-bg"></div>
					<div class="corner top-left-corner champagne-bg"></div>
					<div class="corner bottom-right-corner champagne-bg"></div>
					<div class="corner bottom-left-corner champagne-bg"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="section_links" class="w3-row w3-center">
		<div class="link">
			<h4><a href="[@URL]breakfast-menu">Breakfasts</a></h4>
			<p>Start the day with our delicious breakfast menu</p>
		</div>
		<div class="link">
			<h4><a href="[@URL]dining">Dinner at Chough's</a></h4>
			<p>Experience great food and amazing views from our dining room</p>
		</div>
		<div class="link">
			<h4><a href="[@URL]things-to-see-and-do">Local Area</a></h4>
			<p>Explore all that Exmoor &amp; North Devon have to offer</p>
		</div>
	</div>

	<div class="w3-container" style="margin: 64px 0;">
		<div class="content">		
			<div class="w3-row grid-wrap">
				<div class="w3-col grid-col s12 w3-margin-bottom">
					<h2>Experience comfort and charm on your North Devon holiday</h2>
					<p>At Chough's Nest Hotel, each bedroom is a cozy sanctuary designed to provide comfort and relaxation during your stay in Lynton.
					Our rooms are tastefully decorated with a blend of modern amenities and traditional charm, creating a welcoming atmosphere
					for guests.
					</p>
					<p>Expect comfortable beds adorned with crisp linens and plush pillows, ensuring a restful night's sleep after a day of
					<a href="[@URL]things-to-see-and-do">exploring the beautiful surroundings of North Devon</a>. Enjoy stunning views of Lynmouth Bay, Bristol Channel and beyond and 
					immerse yourself in the natural beauty of the Exmoor National Park.
					</p>
					<p>Whether you're travelling solo, as a couple, or as a group with family and friends, <a href="[@URL]local-walks-around-Lynton-and-Lynmouth">walking 
					the coastal path</a> or looking for a romantic break, Chough's Nest Hotel offers a variety of room types to suit your needs, including the 
					Four-poster 'Nest', Superior double rooms, or Classic double rooms on the second floor.
					</p>
					<p>
					Each room features an en suite bathroom, complete with fluffy towels and complimentary toiletries. We also provide additional
					amenities such as tea and coffee making facilities, free wi-fi, digital smart television and digital radio.
					</p>
					<p>In the morning, a hearty <a href="[@URL]breakfast-menu">Full English Breakfast menu</a> is served in our dining
					room with views overlooking the bay, and is included in the price of each room.</p>	
					<p>Experience true comfort and hospitality in our charming bedrooms, where every detail is thoughtfully curated to ensure a
					memorable stay at Chough's Nest Hotel.</p>
					<p class="w3-center" style="margin-top: 32px;"><a class="button" [@qbook_href]>Book a Room online</a></p>
				</div>
			</div>
		</div>

	</div>

	<!-- Push down subscribe form --> 
	<div style="margin-top:100px"></div>
