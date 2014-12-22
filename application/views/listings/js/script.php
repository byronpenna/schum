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
					changePage(obj);
				});
			// change
				$(document).on("change","#selectDisplay",function(){
					changeDisplay($(this).val());
				});
	});
</script>