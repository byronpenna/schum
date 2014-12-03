$(document).ready(function(){
	// loads 
		<?php $this->load->view("parts/js/functions.php"); ?>
	// events 
		// click
				$(document).on("click",".homeSellBuy",function(){
					
				});
			// header 
				$(document).on("click",".headerPrincipal",function(){
					pagina = <?php echo "'".site_url("welcome")."'"; ?> ;
					window.location=pagina;
				});
			// menu 
				$(document).on("click",".liPadre > a",function(e){
					url = $(this).attr("href");
					window.location=url;
					
				});
				$(document).on("click",".nav li a",function(e){
					$(this).parent().removeClass("open");
					console.log("puso open");
				});
		// Hover
			// menu 
				$(document).on("mouseenter",".liPadre",function(e){
					if(document.documentElement.clientWidth > 767){
						removeOpenMenu($(this));	
					}
					
				});
				$(document).on("mouseleave",".liPadre",function(e){

					if(document.documentElement.clientWidth > 767){
						cerrarAbiertos();	
					}
					
				});
				// $(document).on("#fb > .circle-text div:hover")
				// $(".dropdown").hover(            
			 //        function() {
			 //            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
			 //            $(this).toggleClass('open');        
			 //        },
			 //        function() {
			 //            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
			 //            $(this).toggleClass('open');       
			 //        }
			 //    );

			
});