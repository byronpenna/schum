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
	$("#txtMonthlyPayments").val(m);
	$("#txtBi").val(bi);
}
function slidePopup(direccion,activeThumbnail,visibilidad){
	// if($(".visible").attr("activo") == 1){
	// 	div = ".visible";
	// }
	if(direccion == 1){
		siguienteThumbnail = activeThumbnail.parent().next().find(".thumbnailSlider");
	}else if(direccion == 0){
		siguienteThumbnail = activeThumbnail.parent().prev().find(".thumbnailSlider");
	}
	if(siguienteThumbnail.attr("src") == undefined){
		if($(".visible").attr("activo") == 1){
			$(".visible").attr("activo",0);
			div = ".hidden";
		}else if($(".hidden").attr("activo") == 1){
			$(".hidden").attr("activo",0);
			div = ".visible";
		}
		if(direccion == 1){
			activeThumbnail = $(""+div+" .thumbnailSlider").first();
		}else if(direccion == 0){
			activeThumbnail = $(""+div+" .thumbnailSlider").last();
		}
	}else{
		activeThumbnail = siguienteThumbnail;
	}
	$(".imgNewSlider").attr("src",activeThumbnail.attr("src"));
	
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
	// $(".imgNewSlider").attr("src",new_url);
	$(".imgNewSlider").removeClass("activeSlider");
	$(".imgNewSlider[src='"+new_url+"']").addClass("activeSlider");
} 
function initSlider(){
	setInterval(function(){

	},3000);
}


// Validar los keypress 
	function probarExp(exp,texto){
		return exp.test(texto);
	}

	function getCharFromEvent(e){
		asccii 		= e.which;
		character 	=  String.fromCharCode(asccii);
		return character;
	}

	function testExpression(e,expresion){
		character = getCharFromEvent(e);
		return probarExp(expresion,character);
	}
