<script type="text/javascript">

	$(document).ready(function(){
		$(".searchCb").selecter();
		$(".Clasemamasita").selecter();
		// automatic functions 
			// timerSlider();
		// plugins
	  		//Maps
	  			initialize();
	  			intervaloSlider = setInterval(function(){
		  			timerSlider();
		  			// if(slider){
		  				startSlider();	
		  			// }
	  			},6000);
	  		// tiempo();
	  		// scroll 
	  	
	  	// change 
	  		$(document).on("change",".cbMapSearch",function(){
	  			getSortHouse($(this).val());
	  		});
	  	// eventos 
	  		// mouseover
	  			var interval;
	  			$(document).on("mouseover",".imgNewsToMarket",function(){
	  				clearInterval(interval);
	  				divInputs 	= 	$(this).parents(".casaNewsToMarket").find(".sourceImageNewsToMarket");
	  				selector 	= 	$(this);
	  				slideNewsToMarket(divInputs,selector);
	  				interval 	= 	setInterval(function(){
										slideNewsToMarket(divInputs,selector);
									}, 3000 );
	  			});
	 			$(document).on("mouseleave",".imgNewsToMarket",function(){
	 				clearInterval(interval);
	 			});		
	  		// click 
	  			// paginado 
	  				// news to market 
			  			$(document).on("click",".navNewToMarket",function(){			  				
			  				limits = getLimits($(this),$("#txtl1"),$("#txtl2"));
			  				paginacion(limits);
			  			});
			  		// empleados 
			  			$(document).on("click",".navEmpleados",function(){
			  				limits = getLimits($(this),$("#txtl1emp"),$("#txtl2emp"));
			  				paginacionEmp(limits);
			  			});
			  	// slider 		
			  		$(document).on("click",".navSlider",function(){
						slider = false;
						point = getPoint($(this));
						slide(point);
						clearInterval(intervaloSlider);
						intervaloSlider = setInterval(function(){
				  			timerSlider();
				  			// if(slider){
				  				startSlider();	
				  			// }
			  			},6000);
			  		});
			  		$(document).on("click",".pointIMG",function(){
			  			slider = false;
			  			slide($(this));
			  		});
			  		$(document).on("click",".searchButton",function(){
			  			searchBar();
			  		});
		  		startCommitment();


		  		
	});	

	function startCommitment(){
		$.ajax({
			url: <?php echo "'".site_url('welcome/getCommitment')."'" ?>,
			dataType: "json",
			success: function(data){			
				length = data.length;
				jsondata = data;
				$(".banner2").find("h2").html(data[0].title).hide().fadeIn("slow");
				$(".banner2").find("p").html(data[0].text).hide().fadeIn("slow");
				setInterval(function(){
					changeBanner2();
				}, 5000);
			}			
		});
	}

	jsondata = null;
	length = null;
	index = 1;

	function changeBanner2(data){		

		$(".banner2").find("h2").html(jsondata[index]["title"]).hide().fadeIn("slow");
		$(".banner2").find("p").html(jsondata[index]["text"]).hide().fadeIn("slow");

		index++;

		if(index + 1 > length)
			index = 0;

	}

				
</script>
