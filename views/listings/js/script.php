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
					direccion 	= $(this).attr("direccion");
					page 		= $("#txtPagePaginacion").val();
					totalPagina = $("#txtPageTotales").val();
					getNextPage(direccion,page,totalPagina);
					// console.log("page",page);
					// console.log("direccion",direccion);

				});
			// change
				$(document).on("change","#selectDisplay",function(){
					changeDisplay($(this).val());
				});
	});
</script>