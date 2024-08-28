	<!-- Hero image -->
	[@hero_image]
	<!-- Main content-->
	<div class="w3-container">
		[@booking_bar]

		<div id="page-title" class="w3-row">
			<div class="w3-col w3-center">
				<div class="fancy short page-title">
					<h1><span>Guest Reviews</span></h1>
				</div>
			</div>
		</div>

		<a id="back_to_top" href="#page-title" class="menu-button iris-bg floral-white-text">&uarr;</a>

		<div class="content w3-clear" id="reviews"></div>
		<div class="pagination-wrapper">
			<div class="pagination" id="pagination"></div>
		</div>


	<script>
		// Sample JSON data
const reviewsData = [
//   {
//     "review_title": "",
//     "score": "5",
//     "review_text": "",
//     "review_date": "",
//     "review_author": ""
//   },
  {
    "review_title": "An absolute delight",
    "score": "5",
    "review_text": "Having stayed here several times, I enjoyed another delightful week at the Chough's Nest at the end of June. The hotel is very comfortable and welcoming, and the rooms are beautifully appointed. Kate and Helen provide a wonderful service, and offer excellent breakfasts, freshly-baked cakes and light suppers. They were incredibly thoughtful throughout my stay, providing gluten-free options (I'm coeliac so don't have a choice) on a daily basis. Thank you so much.",
    "review_date": "8th July, 2024",
    "review_author": "Fiona E"
  },
  {
    "review_title": "Our second home",
    "score": "5",
    "review_text": "My wife and I first stayed at Chough's Nest for our honeymoon and we have returned many times since then. It always feels like going home. The hotel is located high over Lynmouth Bay and has excellent views over the bay to Countesbury Hill and inland along the Lyn Valley. Being a small hotel means that we get personal service.Kate and Helen have taken over the running of the hotel from their parents and so are well versed in friendly and efficient service. The rooms are charming and all with sea views. There is a wide selection of table served breakfast with fruit and home made cakes to take away afterwards. We always look forward to going back there and have already booked to return for our 45th Wedding Anniversary next year.",
    "review_date": "7th July, 2024",
    "review_author": "Bruce K"
  },
  {
    "review_title": "Beautiful Hotel",
    "score": "5",
    "review_text": "This was our first stay at this hotel and we will definitely be back. It was a gorgeous hotel, family run and so welcoming and friendly. The rooms have stunning sea views, the bed extremely comfortable, it's in a quiet location (a very short walk from Valley of the Rocks) the rooms were very clean and decorated lovely. Daily housekeeping service and an amazing breakfast cooked fresh every morning with excellent choices inc fruits and homemade cakes. This hotel is a little gem and we felt it was very special. ",
    "review_date": "6th July, 2024",
    "review_author": "Louise"
  },
  {
    "review_title": "Cliffside Views",
    "score": "5",
    "review_text": "Lovely 19th century hotel with limited number of rooms which gave the Choughs Nest a comfortable and intimate atmosphere. The staff was very accommodating as we had vehicle problems and were towed to the Lynmouth Public car park. The hotel proprietor came and picked us up from the car park. Breakfasts were great and included fresh baked tarts and cakes.",
    "review_date": "5th July, 2024",
    "review_author": "Simon N"
  },
  {
    "review_title": "Wonderful!",
    "score": "5",
    "review_text": "We had a comfortable room, lovely breakfasts, excellent service, great views. Looking forward to our next visit.",
    "review_date": "2nd July, 2024",
    "review_author": "Lloyd"
  },
  {
    "review_title": "Great Location &amp; Very Friendly Family Run Hotel",
    "score": "5",
    "review_text": "The Choughs Nest Hotel is located in a fantastic location and you are always assured of a very warm friendly welcome from this family run hotel. The breakfast is cooked to perfection and always to your liking. The Light bites for the evening is also a delight. We cannot praise this Hotel high enough and will return again and again.",
    "review_date": "2nd July, 2024",
    "review_author": "John M"
  },
  {
    "review_title": "Excellent friendly service and food",
    "score": "5",
    "review_text": "Excellent in every way Lovely room with very comfy bed and amazing view over sea bay and hills. Great breakfast and very nice cake to take on walk. Rooms really clean and well serviced.",
    "review_date": "27th June, 2024",
    "review_author": "Kenneth E"
  },
  {
    "review_title": "Wonderful",
    "score": "5",
    "review_text": "The Choughs Nest is just such a quintessential Victorian house, left with all its original beauty. Lovely sized rooms , looking out over the bay. The two lovely sisters running the hotel are very welcoming and friendly. The most delicious breakfast, in a beautiful room also looking over the bay, with birdfeeders outside to keep us all amused. Delicious home made cakes available every day, The best flapjack ever. Can't wait to visit again soon.",
    "review_date": "27th June, 2024",
    "review_author": "Francesca M"
  },
  {
    "review_title": "Perfection",
    "score": "5",
    "review_text": "A wonderful, comfortable and faultless stay! Thank you Helen and Kate, we'll be back",
    "review_date": "25th June, 2024",
    "review_author": "Annabel"
  },
  {
    "review_title": "Little gem with large views",
    "score": "5",
    "review_text": "This is our second time staying at the Choughs Nest, lovely place, brilliant views and a really good breakfast. Love the new decor, we'll be back.",
    "review_date": "23rd June, 2024",
    "review_author": "Simon B"
  },
  {
    "review_title": "Stunning",
    "score": "5",
    "review_text": "As soon as we walked in we felt as if the worries of the world has been left behind. It felt comfortable and was so clean and welcoming. The views are spectacular and waking up to the view of the bay just can’t be put into words. Kate and Helen are brilliant. The service from Kate front of house and the stunning breakfast from Helen is second to none. Nice touch to be able to take out a slice of cake, scone or fruit. Thank you for a great weekend. A return visit is on the cards. ",
    "review_date": "22nd June, 2024",
    "review_author": "Karen"
  },
  {
    "review_title": "Excellent place to stay ",
    "score": "5",
    "review_text": "Home from yet another lovely stay at The Choughs Nest, can't fault a thing, spotlessly clean, fantastic views from all the rooms we've stayed in. Excellent breakfasts , really set you up for the day, not forgetting the really comfy beds . Also excellent hosts .",
    "review_date": "19th June, 2024",
    "review_author": "Sue"
  },
  {
    "review_title": "Excellent",
    "score": "5",
    "review_text": "Very good accommodation. Comfortable warm bed great breakfast and excellent hosts. Close to cliff railway and easy walking distance to shopping and downtown eateries in Lynton and Lynmouth.",
    "review_date": "18th June, 2024",
    "review_author": "Pam T"
  },
  {
    "review_title": "To be repeated",
    "score": "5",
    "review_text": "We spent 3 nights in the choughs nest hotel. Everything was perfect: the spacy room with a stunning view, the hearty breakfast, the location, just everything. We hope to come again soon and explore more of Devon's beautiful North coast. Thanks to Kate and Helen!",
    "review_date": "16th June, 2024",
    "review_author": "Dominique B"
  },
  {
    "review_title": "Excellent",
    "score": "5",
    "review_text": "Lovely hotel. Very clean. Perfect views. Great hosts. Breakfast good too.",
    "review_date": "16th June, 2024",
    "review_author": "Nicola P"
  },
  {
    "review_title": "Delightful",
    "score": "5",
    "review_text": "Beautiful cosy, clean comfortable room with fantastic sea views. Delicious breakfast and lovely staff. A great location to explore Lynton and the coastal walks. I will definitely be back.",
    "review_date": "15th June, 2024",
    "review_author": "Lucy"
  },
  {
    "review_title": "A hidden gem",
    "score": "5",
    "review_text": "A beautiful house with heaps of period charm and spectacular views across the bay. Peaceful and comfortable in the manner of a more genteel era, perfectly completed by the warm welcome and attention to detail of our hosts Kate and Helen... for our group of 10 guests it was unanimous that we shall return, a faultless stay.",
    "review_date": "12th June, 2024",
    "review_author": "Richard"
  },
  {
    "review_title": "Wonderful",
    "score": "5",
    "review_text": "Nice stay at a beautiful place. Very clean and good breakfast. Enjoyed our stay very much.",
    "review_date": "7th June, 2024",
    "review_author": "Liesbeth T"
  },
  {
    "review_title": "A very enjoyable stay",
    "score": "5",
    "review_text": "We had a very enjoyable stay. Lovely views from our room. The area was very quiet and peaceful We enjoyed the breakfast and the owners were very hospitable.",
    "review_date": "7th June, 2024",
    "review_author": "Deborah C"
  },
  {
    "review_title": "Very comfortable stay",
    "score": "5",
    "review_text": "Everything excellent. For us personally we would have liked an earlier breakfast time, but we couldn't fault any aspect of the stay.",
    "review_date": "7th June, 2024",
    "review_author": "Barnes"
  },
  {
    "review_title": "Delightful",
    "score": "5",
    "review_text": "My 2nd stay at this lovely hotel.Currently being managed by the 2nd.. generation of the Hodges family. The hotel oozes charm ,is beautifully appointed ,and sits in a gloriously elevated position with amazing views across to Wales and down to Lynmouth.Breakfasts are every bit as good as my last visit and the bedrooms and public rooms are comfortable and spotlessly clean. I will not hesitate to book again when next visiting Devon.",
    "review_date": "4th June, 2024",
    "review_author": "Derek K"
  },
  {
    "review_title": "A Superb Stay",
    "score": "5",
    "review_text": "The Chough's Nest is truly a special place, perfectly located on the North Walk, with access to lovely walking paths just outside the door. The building is nestled in a bower of flowers, and it was a joy to watch scores of birds enjoying the bird feeders outside the breakfast room window. The hotel is family run, and two of the daughters, raised since childhood in the hotel business, have recently taken it over. They are excellent cooks and bakers (wonderful homemade scones!) and offer delicious dinner options five nights a week, which we took advantage of for all four nights of our stay. Their butternut squash risotto and chocolate pudding cake were deliciously memorable, along with everything else we sampled. After a long walking day, it was lovely to return to the hotel to a wonderful meal waiting for us, rather than searching out restaurants in the crowded towns. Thank you, Kate and Helen, for your spectacular hospitality. ",
    "review_date": "4th June, 2024",
    "review_author": "Kathy L"
  },
  {
    "review_title": "Great stay",
    "score": "5",
    "review_text": "We had a wonderful stay, with lovely room, great breakfast and very obliging staff. See you later in the year.",
    "review_date": "27th May, 2024",
    "review_author": "Rachel C"
  },
  {
    "review_title": "Exceptional ",
    "score": "5",
    "review_text": "Well what can I say about this Hotel. I was a little daunted when we turned onto the single track road leading to the Choughs Nest Hotel. But the reception we received was just lovely warm and friendly,after which we were shown to our room witch was full of light, spacious and spotlessly clean.Although they do not serve evening dinner they did offer us a cold menu, the food was all made in their own kitchen by a member of the family it was fantastic. After a good night's sleep we enjoyed a hearty breakfast. This is a not to be missed Hotel if your in this area. Thank you all for a lovely few days.",
    "review_date": "25th May, 2024",
    "review_author": "Vera B"
  },
  {
    "review_title": "A welcome break for my wife's birthday in a very caring hotel.",
    "score": "5",
    "review_text": "From the time we arrived we were made very welcome. Our room was excellent with first class facilities and a glorious view. Breakfast and the light evening meals were delicious and the offer of cakes and fruit to take away (even a bag was supplied) was a first for us and much appreciated. Being able to walk straight onto the valley of the rocks was an added bonus.",
    "review_date": "25th May, 2024",
    "review_author": "Rod T"
  },
  {
    "review_title": "Very welcoming and very comfortable.",
    "score": "5",
    "review_text": "We thoroughly enjoyed our short stay at Choughs Nest. The owner and his family were very friendly and welcoming. The room was a good size, clean and well appointed and had a magnificent view over the sea to Wales. It is only a short walk to the centre of Lynton and is on the coastal path to the Valley of the Rocks. But the best part of the stay was the excellent breakfasts, perfectly cooked and served with a smile. Thoughtfully, the toast was served after the cooked course and therefore still warm when we wanted to eat it. We'll visit again.",
    "review_date": "23rd May, 2024",
    "review_author": "William C"
  },
  {
    "review_title": "Lovely",
    "score": "5",
    "review_text": "We have always liked this path to the Valley of the Rocks, &amp; staying at The Chough's Nest was everything we had hoped for. Wonderful views, excellent food &amp; service. Very quiet, &amp; yet easy access to shops cafes,&amp; buses, &amp; short drive to all kinds of lovely places. We will most certainly be back.",
    "review_date": "22nd May, 2024",
    "review_author": "Mrs M"
  },
  {
    "review_title": "An excellent stay",
    "score": "5",
    "review_text": "A lovely few days recapturing memories of our honeymoon at The Chough's Nest in October 1976. We had a very comfortable, spacious room with sea view and we couldn't have been looked after any better by Kate and Helen who served an excellent breakfast (including black pudding by special request! thanks Kate) and home made light evening meals. The homemade cakes put out at breakfast which were free to take away were much appreciated, especially the Rock Cakes. Thanks for a lovely stay. ",
    "review_date": "22nd May, 2024",
    "review_author": "Sue J"
  },
  {
    "review_title": "Fabulous Stay",
    "score": "5",
    "review_text": "We used to stay at this Hotel 25 years ago so decided to relive some old memories. Very pleased we returned. The girls made us feel really welcome and our room (2) was excellent; spacious, clean, comfy and a with a superb view. Breakfast was very good and we had an evening meal that was beautifully cooked and generous. We are more than happy to recommend Choughs Nest.",
    "review_date": "22nd May, 2024",
    "review_author": "Steve R"
  },
  {
    "review_title": "Another wonderful stay at the Choughs Nest ",
    "score": "5",
    "review_text": "My wife and I have stayed here on many occasions and hope for many more. The hotel is friendly but professionally managed. The rooms are beautiful with magnificent views with a fantastic breakfast which will set you up for the day. The hotel is well placed for walks into the Valley of the rocks and other local beauty spots including Lynmouth. All in all couldn't be better. ",
    "review_date": "21st May, 2024",
    "review_author": "Peter W"
  },
  {
    "review_title": "Well run small hotel with a fantastic view.",
    "score": "5",
    "review_text": "We stayed at the hotel for four nights in May 2024. The owner/staff were very friendly and helpful. We had a good sized room, which was clean and well appointed and had a great view of the Bristol Channel. The breakfasts were of excellent quality and cooked perfectly. Overall we were extremely happy with our stay and would recommend the hotel.",
    "review_date": " 16th May, 2024",
    "review_author": "James G"
  },
  {
    "review_title": "Wonderful Stay at Chough's Nest",
    "score": "5",
    "review_text": "We have stayed at Chough's Nest many times, it was wonderful as always. The welcome was warm and friendly, the views from the room were excellent, the location was great. We enjoyed being able to leave the hotel, turn left and walk straight onto the coastal path to Valley of the Rocks, and be able to so easily access the whole of Lynton and Lynmouth. ",
    "review_date": "13th May, 2024",
    "review_author": "Bridget S"
  },
  {
    "review_title": "Fabulous",
    "score": "4",
    "review_text": "A well run friendly family hotel in a perfect location.",
    "review_date": "10th May, 2024",
    "review_author": "Sue"
  },
  {
    "review_title": "Another great stay.",
    "score": "5",
    "review_text": "I understand the daughters of John and Rosemary are running the hotel with excellent parental input. We had 5 days of a perfect break, with our room being clean and fresh and having the amazing view of the sea, like all rooms do. The breakfasts were superb and you had all you wanted for the start of the day. We have stayed before and I am positive that we shall be staying again.",
    "review_date": "6th May, 2024",
    "review_author": "Paul B"
  },
  {
    "review_title": "Excellent and a wonderful place to stay in Lynton with amazing views",
    "score": "4",
    "review_text": "Beautiful place to stay with amazing view from our window Bedrooms lovely very comfy kingsize bed, tastefully decorated And always looked after every day, with fresh towels and tea and coffee. Breakfast is served at your table, and the menu is excellent, With a choice of cereals, fresh fruit, yogurt and toast, and full English breakfast, or poached eggs, scrambled eggs, and they cater for vegetarian as well. The staff are very helpfull, if needed, and we would certainley recommend. ",
    "review_date": "6th May, 2024",
    "review_author": " Mrs K"
  },
  {
    "review_title": "Splendid",
    "score": "5",
    "review_text": "Friendly, family-run hotel. Really nice room, clean and comfortable with plenty of space and a lovely view. Good breakfasts.",
    "review_date": "6th May, 2024",
    "review_author": "Trevor H"
  },
  {
    "review_title": "Fantastic Ruby wedding anniversary",
    "score": "5",
    "review_text": "It was lovely to go back to the Choughs nest, where we had our honeymoon, and it did not disappoint in anyway, our room, The Nest, was spacious, clean and comfortable and it was made up every day, the bathroom was large and very clean, we loved the sea views and the spectacular sunrises. For breakfast there was a very good choice and all cooked beautifully and well presented, we had a light bite meal on the evening of our anniversary which was superb very special and the bakes that were available for us to take out for the day was a lovely touch. Thank you so much Kate and Helen for making our stay with you magical. Definitely hope to come back to this very special hotel.",
    "review_date": "4th May, 2024",
    "review_author": "Colin S"
  },
  {
    "review_title": "Fab!",
    "score": "4",
    "review_text": "Warm, friendly, thoughtful hospitality. Great location - a world away from ordinary everyday life. Great view of the sea and right on the coastal path. A great place to be and unwind.",
    "review_date": "3rd May, 2024",
    "review_author": "Beverley P"
  },
  {
    "review_title": "Chough's Nest",
    "score": "5",
    "review_text": "We have just returned from another visit to the Chough's Nest at Lynton and we once again could not fault this family run hotel. The views from the bedrooms and dining room are spectacular. On the Friday evening the light evening meal on offer was fantastic and we look forward to visiting again soon .",
    "review_date": "25th April, 2024",
    "review_author": "Lesley "
  },
  {
    "review_title": "Lovely",
    "score": "5",
    "review_text": "We have stayed at The Chough's Nest several times over recent years. There is always a warm welcome. The beds and linen are extremely comfortable. All the rooms have wonderful views over Lynmouth Bay. The breakfast is cooked to order and delicious.",
    "review_date": "24th April, 2024",
    "review_author": "Frances M"
  },
  {
    "review_title": "Amazing place with great hosts. Excellent stay.",
    "score": "5",
    "review_text": "Spent our honeymoon at the Choughs Nest and have just been back to celebrate our 40th anniversary. Beautiful view from a lovely spacious and clean room. Excellent breakfast. Would highly recommend.",
    "review_date": "22nd April, 2024",
    "review_author": "Nicky H"
  },
  {
    "review_title": "Wonderful Stay",
    "score": "5",
    "review_text": "A lovely stay last weekend! Very well positioned hotel with amazing view, short walk to Lynton and right on the path towards Valley of Rocks. We have been coming to Choughs for a number of years and luckily The Nest was available. Newly decorated with some slight changes which made the room feel even bigger. Lovely view. We sampled the new Light Bites menu on both evenings which was delicious. Breakfast never disappoints and oh those home made sweet treats! Thank you for looking after us. Look forward to returning! ",
    "review_date": "12th April, 2024",
    "review_author": "Gary"
  }
];

	const reviewsContainer = document.getElementById('reviews');
	const paginationContainer = document.getElementById('pagination');
	const reviewsPerPage = 8;
	let currentPage = 1;

	function displayReviews(reviews, page) {
		reviewsContainer.innerHTML = '';
		const startIndex = (page - 1) * reviewsPerPage;
		const endIndex = startIndex + reviewsPerPage;
		const reviewsToShow = reviews.slice(startIndex, endIndex);

		reviewsToShow.forEach(review => {
			const reviewDiv = document.createElement('div');
			reviewDiv.className = 'review';

			reviewDiv.innerHTML = `
				<p class="review-title">${review.review_title}</p>
				<p class="gold-text">${'★'.repeat(review.score)}</p>
				<p>${review.review_text}</p>
				<p class="w3-right">🛡️ Verified Review</p>
				<p>${review.review_date} - Reviewed by ${review.review_author}</p>
				<hr>
			`;

			reviewsContainer.appendChild(reviewDiv);
		});
	}

	function setupPagination(reviews, wrapper, rowsPerPage) {
		wrapper.innerHTML = '';
		const pageCount = Math.ceil(reviews.length / rowsPerPage);
		for (let i = 1; i <= pageCount; i++) {
			const btn = paginationButton(i);
			wrapper.appendChild(btn);
		}
	}

	function paginationButton(page) {
		const button = document.createElement('span');
		button.innerText = page;
		button.className = 'page-number';

		if (currentPage === page) button.classList.add('active');

		button.addEventListener('click', function() {
			currentPage = page;
			displayReviews(reviewsData, currentPage);
			
			const currentBtn = document.querySelector('.pagination .active');
			currentBtn.classList.remove('active');
			
			button.classList.add('active');
			document.getElementById("page-title").scrollIntoView();
		});
		return button;
	}

	// Initial display
	displayReviews(reviewsData, currentPage);
	setupPagination(reviewsData, paginationContainer, reviewsPerPage);
	</script>
	</div> <!-- container -->

	<!-- Push down subscribe form --> 
	<div style="margin-top:100px"></div>