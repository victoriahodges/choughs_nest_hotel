      function initialize() {
        var myLatLong = new google.maps.LatLng(51.232157,-3.837104);
		 var styles = [{
			featureType: "poi.business",
			stylers: [{ visibility: "off" }]
			}];

		 var myOptions = {
			center: myLatLong,
			zoom: 12,
			
			disableDefaultUI: true,
			panControl: false,
			zoomControl: true,
			scaleControl: true,
			mapTypeControl: true,
			styles: styles,
			
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
		
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
				
		 var contentString = '<div id="content_map" >'+
		'<h3 id="firstHeading" class="firstHeading"><img class="logo" src="images/logo/logo_iris.png" style="width: 200px;" alt="Chough\'s Nest Hotel"></h3>'+
		'<div id="bodyContent">'+
		'<p>North Walk<br />' +
		'Lynton<br />' +
		'Devon<br />' +
		'EX35 6HJ</p>' +
		'</div>'+
		'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		 
		var marker = new google.maps.Marker({
			position: myLatLong,
			map: map,
			title:"Chough\'s Nest Hotel, Lynton",
			icon: "https://www.choughsnesthotel.co.uk/images/location.png"
		});
		 
		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
		});
		// infowindow.open(map,marker);

		}
google.maps.event.addDomListener(window, 'load', initialize);			
      

