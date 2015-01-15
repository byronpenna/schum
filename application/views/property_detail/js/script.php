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

		$(document).on("click",".navSlide",function(){
			direccion 		= $(this).attr("direccion");
			background 		= $(".sliderNew").attr("fondo");
			activeThumbnail = $(".thumbnailSlider[src='"+background+"']");
			console.log("el valor de direccion:",direccion);
			if(direccion == 1){
				siguienteThumbnail = activeThumbnail.parent().next().find(".thumbnailSlider");
			}else if(direccion == 0){
				siguienteThumbnail = activeThumbnail.parent().prev().find(".thumbnailSlider");
			}
			console.log("siguiente thumbnail",siguienteThumbnail.attr("src"));
			if(siguienteThumbnail.attr("src") == undefined){
				if(direccion == 1){
					activeThumbnail = $(".thumbnailSlider").first();
				}else if(direccion == 0){
					activeThumbnail = $(".thumbnailSlider").last();
				}
			}else{
				activeThumbnail = siguienteThumbnail;
			}
			$(".sliderNew").css({
				"background" 			: "url("+activeThumbnail.attr("src")+")",
				"background-repeat"		: "none",
				"background-position" 	: "50% 50%",
				"background-position" 	: "50% 50%\9 !important",
				"background-size"		: "50%",
				"background-size" 		: "50%",
			});
			$(".sliderNew").attr("fondo",activeThumbnail.attr("src")) ;
			console.log("ruta de la otra imagen",activeThumbnail.attr("src"));
			$(".dvImgModal").css({
				"background": 			"url("+activeThumbnail.attr("src")+")",
				"background-size"	: 	"100% 100%",
			});
			// console.log("el backgroun del thumbnail es:",activeThumbnail.attr("src"));
		});
		$(document).on("click",".sliderNew",function(){
			imgSrc = $(this).attr("fondo");
			$(".dvImgModal").attr("style","background:url("+imgSrc+");background-size:100% 100%"); 
			$('#myModal').modal({show:true});
		});
	});
</script>