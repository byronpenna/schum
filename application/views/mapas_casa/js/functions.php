function initialize(){
	// vars 
		// var locationMap = new google.maps.LatLng(-34.397, 150.644);
		var locationMap = getLocation(-34.397, 150.644);
		var mapOptions = {
	      center: locationMap,
	      zoom: 8,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    // var location = getLocation();
	// do it 
	    var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
	    getMarker(locationMap,map);
}
// function putMarker(){

// }
function getLocation(lat,longi){
	var location = new google.maps.LatLng(lat,longi);
	return location;
}
function getMarker(location,mapa){
	// vars 
		var marker = new google.maps.Marker({
			position: location,
			title: "Marcador de prueba",
			map: mapa
		});
	// do it
		// marker.setMap(mapa);
}