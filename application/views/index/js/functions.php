function getLimits(nav,selector1,selector2){
	limits 		= new Object();
	l1 			= parseInt(selector1.val());
	l2 			= parseInt(selector2.val());
	if(nav.attr("direccion") == 1){
		l1 = l2;
		l2 += 4;
	}else if(nav.attr("direccion") == 0 && (l1 >= 4) ){
		l2 = l1;
		l1 -= 4;
	}
	limits.l1 = l1;
	limits.l2 = l2;
	selector1.val(l1);
	selector2.val(l2);
	return limits;
}

function paginacion(limit){
	$.ajax({
		data:{
			limit: JSON.stringify(limit)
		},
		url: 	<?php echo "'".site_url('welcome/getNewsToMarketPagination')."'" ?>,
		type: 	"POST",
		success: function(data){
			if(data != ""){
				console.log(data);
				$(".pedazoNewsToMarket").empty().append(data);
				$("#txtl1").val(l1);
	  			$("#txtl2").val(l2);
			}
		}
	});
}
function paginacionEmp(limit){
	$.ajax({
		data:{
			limit: JSON.stringify(limit)
		},
		url: 	<?php echo "'".site_url('welcome/getEmpPagination')."'" ?>,
		type: 	"POST",
		success: function(data){
			console.log("la data es: ",limit);
			// console.log("nice",data);
			if(data != ""){
				$(".cuadritosEmpleadoSection").empty().append(data);	
			}
			
		}
	});
}
// slider nav 
	// hacer la cosa desde el crm
	function slide(point){
		$(".sliderNew").animate({
		    opacity: 0.50,
		}, 500, function() {
		changeSliderImg(point);
		  	$(".sliderNew").animate({
		  		opacity: 1
		  	},500,function(){
		  		
		  	});
		});
	}
	function getPoint(nav){
		// vars 
			point 		= $(".activePoint").parent();
			direccion 	= nav.attr("direccion");
		// do it 
			if(direccion == '1'){
				point = point.next();	
			}else{
				point = point.prev();
			}
			point = point.find(".pointIMG");
			if(point.length != 0){
				retorno = point;
			}else if(direccion == '1'){
				retorno = $(".pointIMG").first();
			}else if(direccion == '0'){
				retorno = $(".pointIMG").last();
			}
		return retorno;
	}
// search 
	function getSortHouse(op){
		$.ajax({
			data:{
				opcion: op
			},
			url: 	<?php echo "'".site_url('welcome/getSortHouse')."'" ?>,
			type: 	"POST",
			success: function(data){
				datos = jQuery.parseJSON(data);
				console.log(datos);
				$(".cuadritoVivienda").empty().append(datos.div);
			}
		});	
	}
	function searchBar(){
		frm = serializeToJson($(".searchBarBackground :input").serializeArray());
		url = <?php echo "'".site_url("listings/searchHome")."'"  ?> ;
		console.log(frm);
		$.each(frm,function(i,value){
			url += "/"+value;
		});
		console.log(url);
		location.href=url;
		// window.location=url+"/"+frm;
		// url = url+"/"+frm;
		// console.log(url);
		// relocate()
	}
// timer slider 
	function timerSlider(){
		var arrImg = new Array();
		$(".pointIMG").each(function(i,value){
			img = $(this).attr("other");
			if( !(img == undefined) ){
				arrImg[i] = img;	
			}else{
				$(this).addClass("hidden");
			}
		});
		// console.log(arrImg);
		return arrImg;
	}
	var slider = true;
	function startSlider(){
		// vars 
			arrImg 			= timerSlider();
			console.log("el arreglo de imageines es:",arrImg);
			atrImgActual	= $(".activePoint").attr("other");
			indexActual 	= arrImg.indexOf(atrImgActual);
			nElementos 		= arrImg.length;
			BaseUrlImg 		= <?php echo "'".base_url("img/slider/")."'"; ?>;
			setNullActive();
			if(indexActual < nElementos - 1 ){
				newIndex = indexActual + 1;
			}else{
				newIndex = 0;
			}
			
			// img = BaseUrlImg+"/img/"+arrImg[indexActual]+".png";
			img = arrImg[indexActual];
			setNewActivePoint(newIndex,BaseUrlImg);
			


			$(".sliderNew").animate({
				opacity:0.50,
			},500,function(){
				setSliderImage($(this),img);
				$(".sliderNew").animate({
			  		opacity: 1
			  	},500,function(){
			  		
			  	});
			});

	}
	function setNullActive(){
		$(".pointIMG").each(function(i,value){
			$(this).removeClass("activePoint");
		});
	}
	function setNewActivePoint(newIndex,BaseUrlImg){
		$(".pointIMG").each(function(i,value){
			$(this).attr("src",BaseUrlImg+"/control.png");
			if(newIndex == i){
				$(this).addClass("activePoint");
				$(this).attr("src",BaseUrlImg+"/activeControl.png");
			}
		});
	}
	function setSliderImage(element,url){
		element.css({
			"background": "url("+url+")",
			"background-repeat"	: "none",
			"background-size"	: "100%",
			"background-size" 	: "cover",
		});
	}
// slider 
	function changeSliderImg(point){
		// vars 
			img 		= point.attr("other");
			BaseUrlImg 	= <?php echo "'".base_url("img/slider/")."'"; ?>;
			urlImg 		= BaseUrlImg+"/control.png";
		// point active 
			$('.pointIMG').each(function(i,value){
				$(this).attr("src",urlImg);
				$(this).removeClass("activePoint");
			});
			point.attr("src",BaseUrlImg+"/activeControl.png");
			point.addClass("activePoint");
			urlImg 	= BaseUrlImg+"/img/"+img+".png"; // encontrar metodo para verificar extencion de imagen
		// chage background
			setSliderImage($(".sliderNew"),urlImg);
	}
// para poner casas 
	function getCasas(map){
		casa = "";
		$.ajax({
			data:{

			},
			url: 	<?php echo "'".site_url('welcome/getCasas')."'" ?>,
			type: 	"POST",
			success: function(data){
				casas = jQuery.parseJSON(data);
				putCasas(casas,map);		

			}
		});	
	}
	function putCasas(casas,map){
		$.each(casas,function(key,value){
			// vars 
				var detallePopUp 	= new Object();
				var dataMarket 		= new Object();

				detallePopUp.calle 	= value.nombreVivienda;
				detallePopUp.homeId = value.homeId;
				detallePopUp.price 	= value.listPrice;
				dataMarket.icon 	= '<?php echo base_url("img/map/home.png"); ?>';
				var location 		= new google.maps.LatLng(value.latitud,value.longitud);
				var marker 			= newMarker(location,dataMarket);
				var popUp 			= newPopUp(detallePopUp);
			// do it 	
				marker.setMap(map);
			// events 
				google.maps.event.addListener(marker, 'click', function() {
				    popUp.open(map,marker);
				});
		});
	} 

// generics
	function serializeToJson(a){
		var o = {};
		$.each(a, function() {
		   if (o[this.name]) {
		       if (!o[this.name].push) {
		           o[this.name] = [o[this.name]];
		       }
		       o[this.name].push(this.value || '');
		   } else {
		       o[this.name] = this.value || '';
		   }
		});
		return o;
	}
	function newPopUp(varsContent){
		var url = <?php echo "'".site_url("property_detail/index/")."'" ?>+"/"+varsContent.homeId;
		console.log(varsContent);
		var popUp = new google.maps.InfoWindow({
		
		    content: "\
		    	<a href='"+url+"'>\
		    		<div class='popUpMap'>\
		    			<b class='calleBig'>Address:</b> <p class='calleSmall'>"+varsContent.calle+"</p> <br>\
		    			<b class='calleBig'>Price:</b> <p class='calleSmall'>"+varsContent.price+"</p> <br>\
		    		</div>\
		    	</a>",
		    height: 100
		});
		return popUp;
	} 
	function initialize(){
		// vars 
			var mainLocation = new google.maps.LatLng(<?php echo $ubicacion->latitud ?>, <?php echo $ubicacion->longitud ?>);
			var mapOptions = {
		      center: mainLocation,
		      zoom: 12,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		    var map 	= new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
		    // var marker 	= newMarker(mainLocation);

		// do it 
	    	// marker.setMap(map);
	    	getCasas(map);
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