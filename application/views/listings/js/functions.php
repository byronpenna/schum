	function getNextPage(direccion,page,totalPagina){
		page 	= parseInt(page);
		cn 		= page - 1;
		cn 		= cn * 10;
		div = "\
			<div class='imgNav' direccion='0' id='imgNavLeft'>\
				<i class='fa fa-angle-left blank'></i>\
			</div>\
		"; 
		// page= 1 cn = 0; cn*10+9 = 8;final = 9
		// page= 2 cn = 1; cn*10+9 = 19; 
		if(direccion == 0){
			cn 		-= 20;
			page 	-= 1;
		}else if(direccion == 1 && (cn+9) < totalPagina ){
			page = page + 1;
		}
		if(cn < 0){
			cn 		= 0;
			page 	= 2;
		}

		for (var i = cn; i < (cn + 10); i++) { // direccion derecha 1
			if(direccion == 0 && i == 0){
				i=1;
			}
			num = i;
			if(i == 0 && direccion == 1){
				num = 1;
			}

			if( i <= totalPagina){
				div += "\
				<div class='btnPaginacion' valor='"+num+"' style='width:auto;' id='btnPaginacion'>\
					"+num+"\
				</div>\
				";	
			}
			
		};
		div += "\
		<div class=' imgNav' direccion='1' id='imgNavRight'>\
			<i class='fa fa-angle-right blank'></i>\
		</div>\
		";
		$(".numbers").empty().append(div);
		$("#txtPagePaginacion").val(page);
	}
// null number pagination 
	function nullNumberPagination(){
		$(".btnPaginacion").each(function(i,value){
			$(this).removeClass("activeNumber");
		});
	}
// select display by 
	function changeDisplay(cb){
		$.ajax({
			data:{
				numDisplay: cb.val()
			},
			url: 		<?php echo "'".site_url('listings/searchNow')."'" ?>,
			type: 		"POST",
			beforeSend: function(){

			},
			success: function(data){
				console.log(data);
				respuesta = jQuery.parseJSON(data);
			}
		});
	}
// generic 
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
function isNotSelectedAnyOption(frm,n){
	// n representa el numero de opciones que se permiten nulas
	estado 	= false;
	cn 		= 	0; 
	$.each(frm,function(i,value){
		if(value == -1){
			cn += 1;
			if(cn == n){
				estado = true;	
			}
		}
	});
	return estado;
}
function changeDisplayBy(n){

}
function changePage(obj){
	// vars 
		direccion = <?php echo "'".site_url('listings')."'" ?>;
		if(obj.filtro == '0'){
			direccion += '/getListasCasas';
		}else{
			direccion += '/searchNowPagination';	
		}
		console.log("la direccion es: ",direccion);
	$.ajax({
		data:{
			obj: JSON.stringify(obj) 
		},
		url: 		direccion,
		type: 		"POST",
		beforeSend: function(){
			loader = "\
					<div class='loader' style='position:relative !important;'>\
						<div class='flipper'>\
							<div class='front'></div>\
							<div class='back'></div>\
						</div>\
					</div>\
					";
			// imgSrc 	= getUrl()+"/img/recursos/ajax-loader.gif";
			// img 	= "<div class='text-center'><img src='"+imgSrc+"' /></div>";
			$(".seccionCasitas").empty().append(loader);
		},
		success: function(data){
			// console.log("antes de hacer json:",data);
			datos = jQuery.parseJSON(data);
			console.log("paginacion perfecta: ",datos);
			console.log("Filtro es: ",datos.objFiltro);
			$(".seccionCasitas").empty().append(datos.html);
			$("#txtOrigen").empty().append(datos.origen);
			$(".titlePagination").empty().append(datos.pageIndicador);

		}
	});
}
function searchNow(){
	// vars 
		frm 	= serializeToJson($("#divSearch :input").serializeArray());
		limit	= $("#selectDisplay").val();
		//console.log("la data a enviar es: ",frm);
		// val
		estado = isNotSelectedAnyOption(frm,6);
	// do it
		// if(!estado){
			$.ajax({
				data:{
					frm: 	JSON.stringify(frm),
					limit: 	limit
				},
				url: 		<?php echo "'".site_url('listings/searchNow')."'" ?>,
				type: 		"POST",
				beforeSend: function(){
					loader = "\
					<div class='loader' style='position:relative !important;'>\
						<div class='flipper'>\
							<div class='front'></div>\
							<div class='back'></div>\
						</div>\
					</div>\
					";
					$(".seccionCasitas").empty().append(loader);	
					$("#conte-pagin").empty().append("");
				},
				success: function(data){
					respuesta = jQuery.parseJSON(data);
					$(".seccionCasitas").empty().append(respuesta.contenido);
					$("#txtOrigen").empty().append(respuesta.origen);
					$(".numbers").empty().append(respuesta.paginacion);
					$("#txtPageTotales").val(respuesta.paginasTotales[1])
					$(".titlePagination").empty().append(respuesta.pageIndicador);
					$("#conte-pagin").empty().append("Page 1 of "+respuesta.paginasTotales[1]);
				}
			});	
		// }else{
		// 	alert("Seleccione alguna opcion");
		// }
		

}