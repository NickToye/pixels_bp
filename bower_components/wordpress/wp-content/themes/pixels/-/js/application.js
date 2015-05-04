$(document).ready(function() {



	// Google Map
    var map;
			function initialize() {

				var mapOptions = {
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					zoom: 13,
					zoomControl: false,
					panControl: false,
					streetViewControl: false,
					scaleControl: false,
					overviewMapControl: false,
					center: new google.maps.LatLng(51.4964126, -0.1403414999999768)
				};

				map = new google.maps.Map(document.getElementById('map-canvas'),
					mapOptions);

				var icon = {
					path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
					anchor: new google.maps.Point(16.5, 51),
					fillColor: 'rgb(190,90,74)',
					fillOpacity: 1,
					strokeWeight: 1,
					strokeColor: '#000000',
					strokeOpacity: 0,
					scale: 1
				};

				var image = {
					url: 'http://pixelsandcode.local:5757/-/img/marker.png',
					size: new google.maps.Size(26,45)
				};


				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(51.4964126, -0.1403414999999768),
					map: map,
					icon: image,
					title: 'marker'
				});
			}

			google.maps.event.addDomListener(window, 'load', initialize);


});
