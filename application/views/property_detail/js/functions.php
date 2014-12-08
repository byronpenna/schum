function initialize(){
	var lat 		= <?php echo $coordenadas->latitud ?> 	;
	var lon 		= <?php echo $coordenadas->longitud ?> 	;
	var mainLocation = new google.maps.LatLng(lat,lon);
	var mapOptions = {
      center: mainLocation,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var estado 	= <?php echo $coordenadas->estado ?> ; 
    var map 	= new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
    if(estado == 1){
    	putCasas(map,mainLocation);
    }
}
function putCasas(map,location){
	var dataMarker = new Object();
	dataMarker.icon = '<?php echo base_url("img/map/home.png"); ?>';
	marker = newMarker(location,dataMarker);	
	marker.setMap(map);
}
function newMarker(location,data){
	if(data.icon == undefined){
		data.icon = "";
	}
	var marker = new google.maps.Marker({
		position: location,
		title: "casa de prueba",
		icon: data.icon
	});
	return marker;
}
function changeImage(url){
	// esto servia para el plugin de las thumbnails pero como no funciona en el server por el momento estara comentado
		// new_url = url.split("/");
		// new_url[new_url.length - 1] = new_url[new_url.length - 1].substring(1, new_url[new_url.length - 1].length);
		// new_url = (new_url.join()).replace(/\,/g, "/");
	new_url = url;
	$(".sliderNew").css({
		"background" 			: "url("+new_url+")",
		"background-repeat"		: "none",
		"background-position" 	:"50% 50%",
		"background-position" 	:"50% 50%\9 !important",
		"background-size"		: "50%",
		"background-size" 		: "50%",
	});
} 
function initSlider(){
	setInterval(function(){

	},3000);
}