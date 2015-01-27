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
	  			
	  			$(document).on("mouseenter",".imagesNewToMarket2",function(){
					$(this).fadeOut(2000,function(){
						console.log("siguiente",$(this).next().attr("src"));
						if($(this).next().attr("src") == undefined){
							$(this).parents(".container").find(".firstimg").fadeIn(2000);
						}else{
							$(this).next().fadeIn(2000);	
						}	
					});
					
					
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
		if(jsondata[index]["text"] != ""){
			$(".banner2").find("p").html(jsondata[index]["text"]).hide().fadeIn("slow");	
		}
		

		index++;

		if(index + 1 > length)
			index = 0;

	}

				
</script>
