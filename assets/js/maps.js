var map;
function initMap() {
	var myLatlng = new google.maps.LatLng(-23.568851, -46.69231703);
	var mapOptions = {
		zoom: 17,
		center: myLatlng,
		scrollwheel: false,
		styles: [
			{
				featureType: "water",
				stylers: [
					{
						color: "#6196AD"
					}
				]
			},
			{
				featureType: "road",
				elementType: "geometry.fill",
				stylers: [
					{
						color: "#FCFFF5"
					}
				]
			},
			{
				featureType: "road",
				elementType: "geometry.stroke",
				stylers: [
					{
						color: "#808080"
					},
					{
						lightness: 54
					}
				]
			},
			{
				featureType: "landscape.man_made",
				elementType: "geometry.fill",
				stylers: [
					{
						color: "#dde1d4"
					}
				]
			},
			{
				featureType: "poi.park",
				elementType: "geometry.fill",
				stylers: [
					{
						color: "#73AB7D"
					}
				]
			},
			{
				featureType: "road",
				elementType: "labels.text.fill",
				stylers: [
					{
						color: "#767676"
					}
				]
			},
			{
				featureType: "road",
				elementType: "labels.text.stroke",
				stylers: [
					{
						color: "#ffffff"
					}
				]
			},
			{
				featureType: "road.highway",
				elementType: "geometry.fill",
				stylers: [
					{
						color: "#7e7341"
					}
				]
			},
			{
				featureType: "landscape.natural",
				elementType: "geometry.fill",
				stylers: [
					{
						visibility: "on"
					},
					{
						color: "#dee6e6"
					}
				]
			},
			{
				featureType: "poi.park",
				stylers: [
					{
						visibility: "on"
					}
				]
			},
			{
				featureType: "poi.sports_complex",
				stylers: [
					{
						visibility: "on"
					}
				]
			},
			{
				featureType: "poi.medical",
				stylers: [
					{
						visibility: "on"
					}
				]
			},
			{
				featureType: "poi.business",
				stylers: [
					{
						visibility: "simplified"
					}
				]
			}
		]
	};
	var map = new google.maps.Map(
		document.getElementById("map-canvas"),
		mapOptions
	);
	var marker = new google.maps.Marker({
		position: myLatlng,
		title: "Êxito ADM"
	});
	marker.setMap(map);
}
