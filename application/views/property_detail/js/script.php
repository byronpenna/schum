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
		$(document).on("keypress","#txtMortage",function(e){
			txtActual = $(this).val();
			txtActual = txtActual.replace("$","");
			txtActual += getCharFromEvent(e);
			txtActual = "$"+txtActual;
			$(this).val(txtActual);
		});
		$(document).on("keypress","#txtInteres",function(e){
			e.preventDefault();
			txtInteres = $(this).val();
			txtInteres = txtInteres.replace("%","");
			txtInteres += getCharFromEvent(e);
			txtInteres = txtInteres+"%";

			$(this).val(txtInteres);
		});
		
		$(document).on("keypress","#txtTerm",function(e){
			if(!onlyNumbers(e)){
				e.preventDefault();
			}
		})
		$(document).on("click","#calculateButton",function(){
			mortageAmount = $("#txtMortage").val();
			mortageAmount = mortageAmount.replace(",","");
			mortageAmount = mortageAmount.replace("$","");
			console.log("mortage",mortageAmount);
			p = parseFloat(mortageAmount);
			i = parseFloat($("#txtInteres").val());
			n = parseInt($("#txtTerm").val());
			i *=  0.01;
			console.log("p",p);
			console.log("i",i);
			console.log("n",n);
			mortage(p,i,n);
		});
		$(document).on("click","#virtualTourBlock",function(){
			$("#modalTour").modal({show:true});
		});
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