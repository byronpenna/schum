
<!DOCTYPE html>
<html>
<head>
	<title>Property details</title>
	<!-- Parte del mail chimp --> 
		        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
		<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php"); ?>
    <!-- css -->
	    <style type="text/css">
	    	<?php 
	    		$this->load->view("property_detail/css/style.php");
	    		$this->load->view("property_detail/css/indexMedia.php");
	    	?> 
	    </style>
	    <!-- jcarrusel -->
	    <style type="text/css">	    
			<?php
				$this->load->view("property_detail/css/jsCarousel.php");
			?>	
	    </style>
	<!-- scripts --> 
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
		<script type="text/javascript">
			<?php 
				$this->load->view("parts/js/script.php");
				$this->load->view("property_detail/js/functions.php");
			?>
		</script>
		<!-- Jcarrusel -->
		<script>
		<?php
			$this->load->view("property_detail/js/jsCarousel.php");
		?>
		</script>
		<?php 
			$this->load->view("property_detail/js/script.php");
		?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew" style=<?php echo "'background:url(".$thumbnail->first.");background-repeat: none;background-position: center;background-size: 100%;'" ?> >
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		
		<div class="row container-fluid bodySection">
			<!-- ############################## -->
			<!-- <div class="row">
				
			</div> -->
			<!-- ############################## -->	
			<div class="row container-fluid miniaturasSlider">
				
					
					<div id="wrapper" style='margin-left:1%;'>
				        <div id="jsCarousel">				        	
				            <?php
								echo $thumbnail->div;
							?>
				        </div>
				    </div>				
				<!-- <div class="col-lg-1 col-sm-1">
					<div class="col-lg-offset-1 col-lg-12 col-sm-12 control ">
						<img class="imgFull rightArrow" src=<?php echo "'".base_url("img/property_detail/slider/controls/right.png")."'"; ?> />		
					</div>
				</div> -->
			</div>
            </br>
			<div class="row nameSection">
				<div class="col-lg-6">
					<h2><?php echo $house->nombreVivienda ?></h2> 
                    <h4><?php echo $house->cityTown ?> </h4>	
				</div>
			</div>
            </br>
			<div class="row container-fluid summarySection">
				<div class="row container-fluid">
						<h2>Summary</h2>
				</div>
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12 parentBoxSummary">
						<div class="col-lg-3 col-sm-4 col-md-3 paddingNull">
							<div class="col-lg-12 col-sm-12 col-md-12 boxSummary price">
								<label>List price:</label> 
								<p class="listPriceSummary">
									<small>$<?php echo $house->listPrice; ?></small>
								</p>
							</div>
						</div>
						<div class="col-lg-5 col-sm-8 col-md-5 paddingNull">
							<div class="col-lg-6 col-sm-6 col-md-6 boxSummary">								
								<label>Country/Minicipality:</label> 
								<p>
									<?php echo $house->country; ?>
								</p>
							</div>
							<div class="col-lg-3 col-sm-3 col-md-3 boxSummary">								
								<label>Year built:</label> 
								<p>
									<?php echo $house->yearBuilt; ?>
								</p>
							</div>
							<div class="col-lg-3 col-sm-3 col-md-3 boxSummary">								
								<label>Living Area:</label> 
								<p>
									<?php echo $house->livingAreaFit ?> 
								</p>
							</div>	
						</div>
						<div class="col-lg-4 col-sm-12 col-md-4 paddingNull">
							<div class="col-lg-4 col-sm-4 col-md-4 boxSummary">								
								<label>MLS ID # :</label>
								<p>
									<?php $house->mlsNumber; ?>
								</p>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 boxSummary">								
								<label>Bedrooms:</label>
								<p>
									
								</p>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 boxSummary">								
								<label>Bathrooms:</label>
								<p>
									<?php echo $house->bathroom; ?>
								</p>
							</div>	
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="row container-fluid descriptionSection ">
				<div class="col-lg-4 col-sm-4 col-md-4">
					<?php
							if($estadoCalendar){ 
						?>
						
						<a href=<?php echo "'".site_url("calendar/index/".$homeId." ")."'" ?> >
							<div class="row container-fluid blockDescriptions" id='openHouseBlock'>
								<div class="row container-fluid text-center imgBlockDescription">
									<i class="fa fa-calendar icon"></i>	
								</div>
								
									<div class="row container-fluid titleBlockDescription">
										<h2>OPEN HOUSE</h2>
									</div>

								<div class="row container-fluid txtBlockDescription text-center" id='openHouseTxtBlock'>
									<p> Sept, 20 2014 2:00PM - 4:00PM</p>
								</div>
							</div>
						</a>
					<?php 
						}
					?>

					<div class="row container-fluid blockDescriptions" id='sheetBlock'>
						<a href=<?php echo "'".$house->pdfFeature."'" ?>  >
							<div class="row container-fluid text-center imgBlockDescription">
								<i class="fa fa-file-pdf-o icon"></i>
							</div>
							<div class="row container-fluid titleBlockDescription">
								<h2>Pdf feature sheet</h2>
							</div>
							<div class="row container-fluid txtBlockDescription text-center">
								<p> click here to download</p>
							</div>
						</a>
					</div>

					<!-- <div class="row container-fluid blockDescriptions" id='virtualTourBlock'>
						<div class="row container-fluid text-center imgBlockDescription">
							<i class="fa fa-video-camera icon"></i>	
						</div>
						<div class="row container-fluid titleBlockDescription">
							<h2>Virtual tour</h2>
						</div>
						<div class="row container-fluid txtBlockDescription text-center">
							<p> Play now</p>
						</div>
					</div> -->
				</div>
				<div class="col-lg-7 col-sm-7 col-md-7 dataDescription">
					<div class="row container-fluid">
						<h2>Description</h2>
						<p>
							<!-- Vieira Masterpiece adorned with the quality materials and workmanship expected in Countryside Crossings. Gourmet island kitchen open to great room and communicating with covered deck, spacious master, triple garage and so much more. No disappointments! -->
							<?php echo $house->description; ?>
						</p>
					</div>
					<div class="row container-fluid keyFeatureBlock">
						<div class="row container-fluid">
							<h2>key features</h2>
						</div>
						<div class="row container-fluid">
							<div class="col-lg-6 col-sm-6 col-md-6">
								<p class="bold">Appliances</p>
								<p><?php echo $appliance; ?></p>	
								<p class="bold">Indoor Features</p>
								<p>Fireplace</p>
								<p class="bold">Exterior Features</p>
								<p>Stone; Stucco</p>
								<p class="bold">Other Features</p>
								<p>Ensuite; Garage; Landscaped</p>
							</div>
							<div class="col-lg-6 col-sm-6 col-md-6 additionalDetailsSection">
								<div class="row">
									<p class="bold addi">Additional Details</p>	
								</div>
								<div class="row additionalDetailsBody">
									<div class="row container-fluid rowAditionalDetails" >
										<span class='title'>Type: </span>
										<span >Residential Detachednity</span>	
									</div>		
									<div class="row container-fluid rowAditionalDetails">
										<span class='title'>Area: </span>
										<span>3P</span>
									</div>
									<div class="row container-fluid rowAditionalDetails">
										<span class='title'>Gross Tax: </span>
										<span>Not Assesed</span>
									</div>
									<div class="row container-fluid rowAditionalDetails">
										<span class='title'>Construction: </span>
										<span>Wood Frame</span>
									</div>
									<div class="row container-fluid rowAditionalDetails">
										<span class='title'>Water: </span>
										<span>Municipal/Community</span>
									</div>
									<div class="row container-fluid rowAditionalDetails">
										<span class='title'>Heating: </span>
										<span>Forced Air Natural Gas</span>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>

			</div>
			<!-- video tour -->
			<?php 
				if($house->video != 'null'){
			?>
				<div class="row container-fluid videoTourSection">
					<div class="row container-fluid">
						<h2 class="titul">Video tour</h2>	
					</div>
					<div class="row containter-fluid">
						<iframe class="youtubeVideo" src=<?php echo $house->video ?> frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			<?php 
				}
			?>
			<!-- Location -->
			<div class="row container-fluid locationSection">
				<div class="row container-fluid">
					<h2 class="titul">Location</h2>
				</div>
				<div class="row container-fluid">
					<div id='map_canvas' class="map">
						
					</div>
				</div>
			</div>

			<div class="row container-fluid agentSection">
				<?php 
					if($empleado->estado){
				?>
					<div class="col-sm-6 col-lg-6 col-md-6">
						<div class="row titulo">
							<h2>Agent for this listings</h2>	
						</div>
						<div class="row container-fluid agent paddingNull">
							<div class="col-lg-5 col-sm-6 col-md-5 paddingNull">
								<a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
									<img class="imgFull" src=<?php echo "'".$empleado->rutaImg."'"; ?> />		
								</a>
							</div>
							<div class="col-lg-7 col-sm-6 col-md-7 contactAgentText">
								<div class="row container-fluid">
									<h2><?php echo $empleado->nombre ?></h2>
								</div>
								<div class="row container-fluid ">
									<h3><?php echo $empleado->posicion ?> </h3>
								</div>
								<div class="row container-fluid inform">
										<i class="fa fa-list"></i>&nbsp;<span><?php echo $empleado->listings ?> LISTINGS&nbsp;&nbsp;</span>
										<i class="fa fa-envelope"></i>&nbsp;<a href=<?php echo "mailto:".$empleado->email." " ?> ><span><?php echo $empleado->nombre ?></span></a>
								</div>
                                <div class="row descripcionempleado">
									<div class="col-lg-12 col-sm-12 col-md-12 descript">
										<p>
											<?php echo $empleado->shortDescription; ?>
										</p>	
									</div>
								</div>
								<div class="row readMore">
									<div class="col-lg-7 col-sm-7 col-md-7">
										<a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
											<button class="readmore">Read more</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php 
					}
				?>
					<div class="col-sm-6 col-xs-12 col-md-3" id='facebook_area'>
						<!-- Plugin de facebook -->
						<div class="row titulo">
							<h2>LIKE US ON FACEBOOK</h2>
						</div>
                        <div class="col-sm-12 col-lg-12 col-sx-12 col-md-12 fbbox">
                        <iframe name="f151cbc7a8" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df884d3298%26domain%3Ddeercoder.com%26origin%3Dhttp%253A%252F%252Fdeercoder.com%252Ff32eecd288%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FSchumacherRealty&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=false" class="face col-sm-12 col-lg-12 col-sx-12 col-md-12"></iframe>
						  <!-- <div class="fb-like-box" data-href="https://www.facebook.com/SchumacherRealty" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div> -->
					     </div>
                    </div>
				</div>
			</div>
			<div class="row container-fluid calculatorSection">
				<div class="row container-fluid calcu">
					<h2 class="titul">Mortgage calculator</h2>
					<h4>What will your monthly mortgage payment be?</h4>	
				</div>		
			</div>
		</div><!-- aqui finaliza el bodySection --> 
		<?php 
			$this->load->view("parts/calculator.php");
			$this->load->view("parts/footer.php");
		?> 
	</div>
</body>
</html>