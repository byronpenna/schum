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
	$.ajax({
		data:{
			obj: JSON.stringify(obj) 
		},
		url: 		direccion,
		type: 		"POST",
		success: function(data){
			console.log("antes de hacer json:",data);
			datos = jQuery.parseJSON(data);
			console.log("paginacion perfecta: ",datos);
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
		console.log("la data a enviar es: ",frm);
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
				success: function(data){
					respuesta = jQuery.parseJSON(data);
					$(".seccionCasitas").empty().append(respuesta.contenido);
					$("#txtOrigen").empty().append(respuesta.origen);
					$(".numbers").empty().append(respuesta.paginacion);
					$(".titlePagination").empty().append(respuesta.pageIndicador);
				}
			});	
		// }else{
		// 	alert("Seleccione alguna opcion");
		// }
		

}