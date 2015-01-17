<script type="text/javascript">
	$(document).ready(function(){
		// // plugins
		// 	// Maps 
				initialize();
		// 	// slider 
				initSlider();
		// // eventos
			$(document).on("click",".thumbnailSlider",function(){
				// vars 
					imgSrc = $(this).attr("src");
				// do it 
					changeImage(imgSrc);
			});

			// $(document).ready(function() {
	           	$('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) { }, autoscroll: false, masked: true, itemstodisplay: 12, orientation: 'h' });
	 //           	initialize();
		    // });
		$(document).on("click","#imgModal",function(){
			direccion 		= 1;
			background 		= $(".sliderNew").attr("fondo");
			activeThumbnail = $(".thumbnailSlider[src='"+background+"']");
			slidePopup(direccion,activeThumbnail);
		});
		$(document).on("click",".navSlide",function(){
			direccion 		= $(this).attr("direccion");
			background 		= $(".sliderNew").attr("fondo");
			activeThumbnail = $(".thumbnailSlider[src='"+background+"']");
			slidePopup(direccion,activeThumbnail);
			// console.log("el backgroun del thumbnail es:",activeThumbnail.attr("src"));
		});
		$(document).on("click",".sliderNew",function(){
			imgSrc = $(this).attr("fondo");
			$("#imgModal").attr("src",""+imgSrc+""); 
			$('#myModal').modal({show:true});
		});

	});
</script>