<p style="display:none;">tu</p>
<!DOCTYPE html>
<html>
<head>
	<title>Property details</title>
	<!-- Parte  del mail chimp --> 
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
		<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php"); ?>
    <!-- css -->
    <style type="text/css">	    
			<?php
				$this->load->view("property_detail/css/jsCarousel.php");
			?>	
	    </style>
	    <style type="text/css">
	    	<?php 
	    		$this->load->view("property_detail/css/style.php");
	    		$this->load->view("property_detail/css/indexMedia.php");
	    	?> 
	    	.nosubrayar{
				text-decoration: none !important;
			}
	    </style>

	    <!-- jcarrusel -->
	    
	    <style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:-1%;
					z-index:100 !important;
					opacity:1;
					position: absolute;
				}

			.navbar{
				margin-bottom: 0;
			}

			 #footer_container .foot-social-ico .fa {
			    font-size: 2em;
			    vertical-align: middle;
			    margin-top:10px !important;
		     }
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
		<!-- <div id="fb-root"></div> -->
		<script>/*(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));*/</script>




		<!-- nuevo pop up -->
		<link rel="stylesheet" href="<?php echo base_url('plugins/fancyBox/source/jquery.fancybox.css') ?>" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url('plugins/fancyBox/source/jquery.fancybox.pack.js') ?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				// $(".fancybox").fancybox();


				$(".fancybox-button").fancybox({
					prevEffect		: 'none',
					nextEffect		: 'none',
					closeBtn		: false,
					helpers		: {
						title	: { type : 'inside' },
						buttons	: {}
					}
				});

			});
		</script>


		<!-- facebook -->
								<!-- <div id="fb-root"></div> -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



<!-- google + -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'en'}
</script>


<!-- pinterest -->
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>


		<?php 
	
	$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

?>	
</head>
<body>


	<?php 
			$this->load->view("parts/loader-global.php");
	?>
	
	<!-- ###################3 -->
		<div class='modal' id='modalTour'>
			<div id='dialogoModal' class="modal-dialog">
			    <div id='contenidoModal' class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title"></h4>
			        </div>
			        <div class="modal-body">
						<iframe src=<?php echo "'".$house->videoTour."'" ?> class="iframeVirtual"></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="myModal">
			<div id='dialogoModal' class="modal-dialog">
		      <div id='contenidoModal' class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		          <h4 class="modal-title"></h4>
		        </div>
		        <div class="modal-body">
		          <div class='dvImgModal'>
		          	<img id='imgModal' >
		          	<div class="navs">
		          		<div class="col-lg-1 navControl">
		          			<img src=<?php echo "'".base_url("img/slider/navLeft.png")."'" ?> class='navSlide' direccion='0'>
		          		</div>
		          		<div class="col-lg-offset-11 col-md-1 col-md-offset-11 col-sm-4 col-sm-offset-11 col-lg-1 col-xs-1 col-xs-offset-9 navControl navControlDer">
		          			<img src=<?php echo "'".base_url("img/slider/navRight.png")."'" ?> class='navSlide' direccion='1'>
		          		</div>
		          	</div>
		          </div>
		        </div>

		        <!-- <div class="modal-footer">
		          <a href="#" data-dismiss="modal" class="btn">Close</a>
		          <a href="#" class="btn btn-primary">Save changes</a>
		        </div> -->
		      </div>
		    </div>
		</div>
	<!-- #################### -->
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		
		<?php $this->load->view("parts/menuresponsive.php") ?>


		<img src="<?php echo  base_url('img/elements/derecha.png') ?>" class="imgControls derResponsive navSlide"  direccion="1"/>
		<img src="<?php echo base_url('img/elements/izquierda.png') ?>" class="imgControls izResponsive navSlide"  direccion="0" />
		<div class="row nameSection nameSection1">
				<div class="col-lg-6">
					<h2><?php echo $house->nombreVivienda ?></h2> 
                    <h4><?php echo $house->cityTown ?> </h4>	
				</div>
			</div>
			<?php $this->load->view("parts/menushow.php") ?>

		<div class="row container-fluid conteSlider">
			<?php //$this->load->view("parts/menu.php") ?>
			<!-- mismo thumbnail solo que con diferente estructura del html -->
			<?php echo $thumbnail->div ?>
			<!-- <a class="fancybox-button " rel="fancybox-button" href="<?php echo $thumbnail->first; ?>">
				<img class="imgNewSlider" src="<?php echo $thumbnail->first; ?>" />
			</a>
			<a class="fancybox-button " rel="fancybox-button" href="<?php echo $thumbnail->first; ?>">
				<img class="imgNewSlider" src="<?php echo $thumbnail->first; ?>" />
			</a>
			<a class="fancybox-button " rel="fancybox-button" href="<?php echo $thumbnail->first; ?>">
				<img class="imgNewSlider" src="<?php echo $thumbnail->first; ?>" />
			</a> -->
			
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
								echo $thumbnail->min;
							?>
				        </div>
				    </div>				
				<!-- <div class="col-lg-1 col-sm-1">
					<div class="col-lg-offset-1 col-lg-12 col-sm-12 control ">
						<img class="imgFull rightArrow" src=<?php echo "'".base_url("img/property_detail/slider/controls/right.png")."'"; ?> />		
					</div>
				</div> -->
			</div>
            <br>
			<div class="row nameSection">
				<div class="col-lg-6">
					<h2><?php echo $house->nombreVivienda ?></h2> 
                    <h4><?php echo $house->cityTown ?> </h4>	
				</div>
			</div>


			<article class="conte-share">
 
			<!-- facebook -->
			<div class="fb-share-button" data-href="<?php echo $url_actual; ?>" data-layout="button_count"></div>



			<!-- twitter -->
			<a href="<?php echo $url_actual; ?>" class="twitter-share-button">Tweet</a>


			<!-- google + -->
			<div class="g-plusone" data-href="<?php echo $url_actual; ?>"></div>

			<!-- pinterest -->
			<a href="<?php echo $url_actual; ?>" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-config="beside" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" style="vertical-align: baseline;" /></a>
			

			</article>	
            <br>
			<div class="row container-fluid summarySection">
				<!-- <div class="row container-fluid"> -->
						<h2>Summary</h2>
				<!-- </div> -->
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12 parentBoxSummary">
						<div class="col-lg-3 col-sm-4 col-md-3 paddingNull">
							<div class="col-lg-12 col-sm-12 col-md-12 boxSummary price">
								<label>List Price:</label> 
								<p class="listPriceSummary">
									$<?php echo $house->listPrice; ?>
								</p>
							</div>
						</div>
						<div class="col-lg-5 col-sm-8 col-md-5 paddingNull">
							<div class="col-lg-6 col-sm-6 col-md-6 boxSummary">								
								<label>City/Town:</label> 
								<p>
									<?php echo $house->cityTown; ?>
								</p>
							</div>
							<div class="col-lg-3 col-sm-3 col-md-3 boxSummary">								
								<label>Year Built:</label> 
								<p>
									<?php echo $house->yearBuilt; ?>
								</p>
							</div>
							<div class="col-lg-3 col-sm-3 col-md-3 boxSummary">								
								<label>Living Area:</label> 
								<p>
									<?php echo $house->livingAreaFit ?> ft&sup2;
								</p>
							</div>	
						</div>
						<div class="col-lg-4 col-sm-12 col-md-4 paddingNull">
							<div class="col-lg-4 col-sm-4 col-md-4 boxSummary">								
								<label>MLS # :</label>
								<p>
									<?php echo $house->mlsNumber; ?>
								</p>
							</div>
							<div class="col-lg-4 col-sm-4 col-md-4 boxSummary">								
								<label>Bedrooms:</label>
								<p>
									<?php echo $house->rooms ?>
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

			<!-- inicio del sumary responsive -->

			<div class="summarySection summarySection1">
				<!-- <div class="row container-fluid"> -->
						<h2>Summary</h2>
				<!-- </div> -->
				<div class="row">
					<div class="parentBoxSummary">
							<div class="boxSummary">
								<label>List Price:</label> 
								<p class="listPriceSummary">
									$<?php echo $house->listPrice; ?>
								</p>
							</div>
							<div class="boxSummary">								
								<label>City/Town:</label> 
								<p>
									<?php echo $house->cityTown; ?>
								</p>
							</div>
							<div class="boxSummary">								
								<label>Year Built:</label> 
								<p>
									<?php echo $house->yearBuilt; ?>
								</p>
							</div>
							<div class="boxSummary">								
								<label>Living Area:</label> 
								<p>
									<?php echo $house->livingAreaFit ?> ft&sup2;
								</p>
							</div>	
							<div class=" boxSummary mls">								
								<label>MLS # :</label>
								<p>
									<?php echo $house->mlsNumber; ?>
								</p>
							</div>
							<div class=" boxSummary">								
								<label>Bedrooms:</label>
								<p>
									<?php echo $house->rooms ?>
								</p>
							</div>
							<div class=" boxSummary">								
								<label>Bathrooms:</label>
								<p>
									<?php echo $house->bathroom; ?>
								</p>
							</div>		
					</div>
				</div>
			</div>


			<!-- sumary responsive -->


			<div class="row container-fluid">
						<h2 id="desPD">Description</h2>
						<div class="col-xs-12">
							<p style="text-align:justify;" class="pDescription">
								<!-- Vieira Masterpiece adorned with the quality materials and workmanship expected in Countryside Crossings. Gourmet island kitchen open to great room and communicating with covered deck, spacious master, triple garage and so much more. No disappointments! -->
								<?php echo nl2br($house->description); ?>
							</p>
						</div>

						<article class="contenedor-cubos col-md-12">
						<?php
							if($estadoCalendar){ 
						?>
							<article style="background:#be0000;" class="cubos-colores">
								<a href=<?php echo "'".site_url("calendar/index/".$homeId." ")."'" ?> >
									<div class=" blockDescriptions" id='openHouseBlock'>
										<div class=" text-center imgBlockDescription">
											<i class="fa fa-calendar icon"></i>	
										</div>
										
											<div class=" titleBlockDescription">
												<h2>OPEN HOUSE</h2>
											</div>

										<div class=" txtBlockDescription text-center" id='openHouseTxtBlock'>
											<p><?php echo date("M, d Y",strtotime($FechaOpenHouse[0]->startDate))." ".date("g:iA ",strtotime($FechaOpenHouse[0]->age_hora_inicio ))." - ".date("g:iA  ",strtotime($FechaOpenHouse[0]->age_hora_fin )); ?></p>
											<p><?php 
												if(isset($FechaOpenHouse[1]->startDate)){
											 		echo date("M, d Y",strtotime($FechaOpenHouse[1]->startDate))." ".date("g:iA ",strtotime($FechaOpenHouse[1]->age_hora_inicio ))." - ".date("g:iA  ",strtotime($FechaOpenHouse[1]->age_hora_fin ));
											 	}
											 	?></p>
										</div>
									</div>
								</a>
							</article>
						<?php 
							}
						?>
						<?php 
									
							if($house->pdfFeature != "#"){
						?>
							<article class=" blockDescriptions cubos-colores" id='sheetBlock' style="background:#314782;">
									<br>
									<a href=<?php echo "'".$house->pdfFeature."'" ?>  >
										<div class=" text-center imgBlockDescription">
											<i class="fa fa-file-pdf-o icon"></i>
										</div>
										<div class=" titleBlockDescription">
											<h2>Pdf feature sheet</h2>
										</div>
										<div class=" txtBlockDescription text-center">
											<p> click here to download</p>
										</div>
									</a>
								
							</article>
						<?php 
							}
						?>
						<?php 
							if($house->videoTour != "#"){
						?>
							<article class=" blockDescriptions cubos-colores" id='virtualTourBlock' style="background:#314782;">
								<br>
								<div class=" text-center imgBlockDescription">
									<i class="fa fa-video-camera icon"></i>	
								</div>
								<div class=" titleBlockDescription">
									<h2>Virtual tour</h2>
								</div>
								<div class=" txtBlockDescription text-center">
									<p> Play now</p>
								</div>
							</article>
						<?php 
							}
						?>
					</article>
			<div class="row container-fluid descriptionSection ">
				<h2>key features</h2>
				<div class="col-lg-12 col-sm-12 col-md-12 dataDescription">
					<!-- <div class="row container-fluid">
						<h2>Description</h2>
						<p>
							Vieira Masterpiece adorned with the quality materials and workmanship expected in Countryside Crossings. Gourmet island kitchen open to great room and communicating with covered deck, spacious master, triple garage and so much more. No disappointments!
							<?php echo $house->description; ?>
						</p>
					</div> -->
					<div class="row container-fluid keyFeatureBlock">
						<!-- <div class="row container-fluid"> -->
							
						<!-- </div> -->
						<div class="row container-fluid silicon">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 afterSilicon">
								<div class="col-lg-12 col-sm-12 col-md-12 ">
									<!-- <p class="bold">Appliances</p>
									<p><?php echo $appliance; ?></p>	
									<p class="bold">Indoor Features</p>
									<p>Fireplace</p>
									<p class="bold">Exterior Features</p>
									<p>Stone; Stucco</p>
									<p class="bold">Other Features</p>
									<p>Ensuite; Garage; Landscaped</p> -->

									<?php echo $keys; ?>
									<?php print_r($roomsKey); ?>
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
				<!-- <div class="row container-fluid"> -->
					<h2 class="titul">Location</h2>
				<!-- </div> -->
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
						<article class="row titulo">
							<h2>Property Listing Represented By</h2>	
						</article>
						<div class="row container-fluid agent paddingNull">
							<div class="col-lg-5 col-sm-6 col-md-5 paddingNull agentImg">
								<a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
                                    <div class="imgfull">
									   <img class="imgfull" src=<?php echo "'".$empleado->rutaImg."'"; ?> />
                                    </div>
								</a>
							</div>
							<div class="col-lg-7 col-sm-6 col-md-7 contactAgentText">
								<article class="row container-fluid empName">
									<h2><?php echo $empleado->nombre ?></h2>
								</article>
								<div class="row container-fluid empPosicion">
									<h3><?php echo $empleado->posicion ?> </h3>
								</div>
								<div class="row container-fluid inform">
										<div class="listingSort">
											<a class='nosubrayar' href=<?php echo site_url('listings/getListingFromAgent/'.$empleado->idEmpleado); ?>  >
												<i class="fa fa-list"></i>&nbsp;<span><?php echo $empleado->listings ?> ACTIVE LISTINGS </span>
											</a>
										</div>
										<div class="listingSort">
											<i class="fa fa-envelope"></i>&nbsp;<a href=<?php echo "mailto:".$empleado->email." " ?> ><span><?php echo $empleado->nombre ?></span></a>	
										</div>
										
								</div>
                                <div class="row descripcionempleado">
									<div class="col-lg-12 col-sm-12 col-md-12 descript">
										<p>
											<?php echo $empleado->shortDescription; ?>
										</p>	
									</div>
								</div>
									<!-- <a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
										<button class="readmore">Read more</button>
									</a> -->
									<article class="conteRead">
									
										<button class="readmore">
											<a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
												About <?php echo $empleado->simpleName; ?> <!-- Derrick es variable -->
											</a>
										</button>
									<button class="readmore">
										<a href="mailto:<?php echo $empleado->email ?>?subject=Property Inquiry: <?php echo $house->nombreVivienda ?>">
											More Info
										</a>
									</button>
									<button class="readmore">
										<a href="mailto:<?php echo $empleado->email ?>?subject=Showing Request For: <?php echo $house->nombreVivienda ?>">Book a Showing</a> 
									</button>

									</article>
									<!-- <a href="#">
										<button class="readmore">More Info</button>
									</a> -->
							</div>


								<div class="col-lg-7 col-sm-6 col-md-7 contactAgentText contactAgentText1">
										<button class="readmore">
											<a href=<?php echo "'".site_url("individual/index/".$empleado->idEmpleado." ")."'" ?> >
												About <?php echo $empleado->simpleName; ?> <!-- Derrick es variable -->
											</a>
										</button>
									<button class="readmore">
										<a href="mailto:<?php echo $empleado->email ?>?subject=Property Inquiry: <?php echo $house->nombreVivienda ?>">
											More Info
										</a>
									</button>
									<button class="readmore">
										<a href="mailto:<?php echo $empleado->email ?>?subject=Showing Request For: <?php echo $house->nombreVivienda ?>">Book a Showing</a> 
									</button>
									<!-- <a href="#">
										<button class="readmore">More Info</button>
									</a> -->
							</div>




						</div>
					</div>
				<?php 
					}
				?>
					<div class="col-sm-12 col-xs-12 col-md-3" id='facebook_area'>
						<!-- Plugin de facebook -->
						<div class="row titulo arreglosChulos">
							<h2>LIKE US ON FACEBOOK</h2>
						</div>
                        <div class="col-sm-12 col-lg-12 col-sx-12 col-md-12 afterArreglos">
                        <!-- <iframe name="f151cbc7a8" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df884d3298%26domain%3Ddeercoder.com%26origin%3Dhttp%253A%252F%252Fdeercoder.com%252Ff32eecd288%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FSchumacherRealty&amp;locale=en_US&amp;sdk=joey&amp;show_border=true&amp;show_faces=true&amp;stream=false" class="face col-sm-12 col-lg-12 col-sx-12 col-md-12"></iframe> -->
                       

						<div id="fb-root"></div>
								<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								</script>
								<div class="fb-like-box" data-href="https://www.facebook.com/SchumacherRealty" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>






                        <!-- <div class="col-sm-12 col-lg-12 col-sx-12 col-md-12 conteFB">
                        <div class="facebookcool">
                        	<a href="https://www.facebook.com/SchumacherRealty"  target="_blanck"a><i class="fa fa-facebook-square"></i></a>
                        </div>
                        	<p class="textoFB">/SchumacherRealty</p>
                        </div> -->
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


			<article class="conte-readmore">
				<button class="readmore">
					<a href="tel: +1 204 444 3000" >
						Call Agent
					</a>
				</button>
				<button class="readmore">
					<a href="mailto:<?php echo $empleado->email ?>?subject=Property Inquiry: <?php echo $house->nombreVivienda ?>">
						More Info
					</a>
				</button>
				<button class="readmore">
					<a href="mailto:<?php echo $empleado->email ?>?subject=Showing Request For: <?php echo $house->nombreVivienda ?>">Book a Showing</a> 
				</button>
			</article>
		</div><!-- aqui finaliza el bodySection --> 
		<?php 
			$this->load->view("parts/calculator.php");
			$this->load->view("parts/footer.php");
		?> 
		<?php $this->load->view("parts/footerResponsivo.php") ?>
	</div>
	
</body>
</html>