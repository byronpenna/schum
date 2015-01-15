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

		$(document).on("click","navSlide",function(){

		});
		$(document).on("click",".sliderNew",function(){
			imgSrc = $(this).attr("fondo");
			$(".dvImgModal").attr("style","background:url("+imgSrc+");background-size:100% 100%"); 
			$('#myModal').modal({show:true});
		});
	});
</script>