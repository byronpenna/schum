function getCharFromEvent(e){
	asccii 		= e.which;
	character 	=  String.fromCharCode(asccii);
	return character;
}
function probarExp(exp,texto){
	return exp.test(texto);
}
function decimal(){

}
function onlyNumbers(e){
	exp = /[0-9]/;
	txt = getCharFromEvent(e);
	return probarExp(exp,txt);
}
function mortage(p,i,n){
	numerador 	= i * (Math.pow((1 + i),n));
	console.log("numerador",numerador);
	denominador	= (Math.pow((1+i),n)) - 1;
	console.log("Denominador",denominador);
	respTem 	= numerador / denominador;   
	console.log("Respuesta temp",respTem);
	m 	= p * respTem;
	m 	= m / 12;
	bi 	= m / 2;
	m 	= m.toFixed(2);
	bi 	= bi.toFixed(2);
	// console.log(m);
	$("#txtMonthlyPayments").val("$ "+m);
	$("#txtBi").val("$ "+bi);
}
function slidePopup(direccion,activeThumbnail){
	if(direccion == 1){
		siguienteThumbnail = activeThumbnail.parent().next().find(".thumbnailSlider");
	}else if(direccion == 0){
		siguienteThumbnail = activeThumbnail.parent().prev().find(".thumbnailSlider");
	}
	if(siguienteThumbnail.attr("src") == undefined){
		if(direccion == 1){
			activeThumbnail = $(".thumbnailSlider").first();
		}else if(direccion == 0){
			activeThumbnail = $(".thumbnailSlider").last();
		}
	}else{
		activeThumbnail = siguienteThumbnail;
	}
	$(".sliderNew").css({
		"background" 			: "url("+activeThumbnail.attr("src")+")",
		"background-repeat"		: "none",
		"background-position" 	: "50% 50%",
		"background-position" 	: "50% 50%\9 !important",
		"background-size"		: "50%",
		"background-size" 		: "50%",
	});
	$("#imgModal").attr("src",""+activeThumbnail.attr("src")+"");
	$(".sliderNew").attr("fondo",activeThumbnail.attr("src")) ;
	console.log("ruta de la otra imagen",activeThumbnail.attr("src"));
	$(".dvImgModal").css({
		"background": 			"url("+activeThumbnail.attr("src")+")",
		"background-size"	: 	"100% 100%",
	});
}
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
		title: "",
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
	$(".sliderNew").attr("fondo",new_url);
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