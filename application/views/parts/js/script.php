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






			var menu = $('.amostrar');
          var men  = $('.aocultar');
          var negritos = $('.listaNegritos');
          var contenedor = $('.menu-contenedor');
          var cont_offset = contenedor.offset();
          // Cada vez que se haga scroll en la página
          // haremos un chequeo del estado del menú
          // y lo vamos a alternar entre 'fixed' y 'static'.

          $(window).on('scroll', function() {
             //alert($(window).scrollTop());
            if($(window).scrollTop() > cont_offset.top) {
              menu.addClass('menu-fijo');
              men.addClass('hidemenu');
              menu.addClass('showmenu');
              negritos.css('color','#FFFFFF');
            } else {
              menu.removeClass('menu-fijo');
              men.removeClass('hidemenu');
              menu.removeClass('showmenu');
              negritos.css('color','#555555');
            }
          });

			
});