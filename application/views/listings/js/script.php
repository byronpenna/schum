<script type="text/javascript">
	
	$(document).ready(function(){
		
		// eventos
			// click
				$(".MiSelectChulo").selecter();
				$("#selectDisplay").selecter();
				$(document).on("click","#selectDisplay",function(){
					changeDisplay($(this));
				});
				$(document).on("click",".btnSearchNow",function(){
					searchNow();
				});
				$(document).on("click",".btnPaginacion",function(){
					// vars
						obj = new Object();
						obj.pagina 		= $(this).attr("valor");
						obj.displayBy 	= $("#selectDisplay").val();
						origen 			= $("#txtOrigen").text();
						if(origen == '0'){
							obj.filtro 	= origen;
						}else{
							obj.filtro 	= origen;
						}
					// do it 
						nullNumberPagination();
						$(this).addClass("activeNumber");
						console.log("el objeto es de la paginacion:",obj);
					changePage(obj);
				});
				$(document).on("click",".imgNav",function(){
					// direccion 0 izquierda 1 derecha
					// getNextPage();
					// console.log("entro imgNav");
					direccion 	= $(this).attr("direccion");
					page 		= $("#txtPagePaginacion").val();
					totalPagina = $("#txtPageTotales").val();
					// getNextPage(direccion,page,totalPagina);
					// console.log("page",page);
					// console.log("direccion",direccion);
					


					activo = $(this).parents(".numbers").find(".activeNumber");


					if(direccion==0){

						// console.log("soy izquierda");
						imgNav = activo.prev().attr("id");
						if(imgNav == "btnPaginacion"){
							// console.log("la tiene");
							activo.prev().attr("valor");
							obj = new Object();
							obj.pagina 		= activo.prev().attr("valor");
							obj.displayBy 	= $("#selectDisplay").val();
							origen 			= $("#txtOrigen").text();
							if(origen == '0'){
								obj.filtro 	= origen;
							}else{
								obj.filtro 	= origen;
							}
						// do it 
							nullNumberPagination();
							activo.prev().addClass("activeNumber");
							activo.removeClass("activeNumber");
							// console.log("el objeto es de la paginacion:",obj);
							changePage(obj);
						}

						if(imgNav=="imgNavLeft"){
							getNextPage(direccion,page,totalPagina);

							$(".btnPaginacion").each(function(i,val){
								console.log("indice",i);
								if(i == 0 ){
									$(this).addClass("activeNumber");
									$(this).attr("valor");
									obj = new Object();
									obj.pagina 		= $(this).next().attr("valor");
									obj.displayBy 	= $("#selectDisplay").val();
									origen 			= $("#txtOrigen").text();
									if(origen == '0'){
										obj.filtro 	= origen;
									}else{
										obj.filtro 	= origen;
									}
								// do it 
									nullNumberPagination();
									$(this).next().addClass("activeNumber");
									$(this).removeClass("activeNumber");
									// console.log("el objeto es de la paginacion:",obj);
									changePage(obj);
								}
							});
						}
						// activo.prev().css("background-color","red");

					}else if(direccion==1){

						// console.log("soy derecha");

						imgNav = activo.next().attr("id");
						if(imgNav == "btnPaginacion"){
							// console.log("la tiene");
							activo.next().attr("valor");
							obj = new Object();
							obj.pagina 		= activo.next().attr("valor");
							obj.displayBy 	= $("#selectDisplay").val();
							origen 			= $("#txtOrigen").text();
							if(origen == '0'){
								obj.filtro 	= origen;
							}else{
								obj.filtro 	= origen;
							}
						// do it 
							nullNumberPagination();
							activo.next().addClass("activeNumber");
							activo.removeClass("activeNumber");
							// console.log("el objeto es de la paginacion:",obj);
							changePage(obj);
						}

						if(imgNav == "imgNavRight"){
							getNextPage(direccion,page,totalPagina);

							$(".btnPaginacion").each(function(i,val){
								console.log("indice",i);
								if(i == 0){
									$(this).addClass("activeNumber");
									$(this).attr("valor");
									obj = new Object();
									obj.pagina 		= $(this).next().attr("valor");
									obj.displayBy 	= $("#selectDisplay").val();
									origen 			= $("#txtOrigen").text();
									if(origen == '0'){
										obj.filtro 	= origen;
									}else{
										obj.filtro 	= origen;
									}
								// do it 
									nullNumberPagination();
									$(this).next().addClass("activeNumber");
									$(this).removeClass("activeNumber");
									// console.log("el objeto es de la paginacion:",obj);
									changePage(obj);
								}
							});
						}
						// activo.next().css("background-color","red");
					}
				});
			// change
				$(document).on("change","#selectDisplay",function(){
					changeDisplay($(this).val());
				});
	});
</script>