<?php 
	$datos["opMenu"] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schumacher</title>

	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    	<link href="http://formstone.it/css/demo.css" rel="stylesheet" type="text/css" media="all">
		<script src="http://formstone.it/js/demo.js"></script>
		<script src="http://formstone.it/js/modernizr.js"></script>
    <!-- css -->
		<style type="text/css">
			<?php 
				$this->load->view("index/css/style.php");
				$this->load->view("index/css/events.php");
				$this->load->view("index/css/indexMedia.php");
				$this->load->view("index/css/jquery.fs.selecter.css");
			?>
		</style>
	<!-- scripts -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
		<script type="text/javascript">
			<?php
				$this->load->view("parts/js/script.php");
				$this->load->view("index/js/jquery.slimscroll.js");
				$this->load->view("index/js/functions.php");
				$this->load->view("index/js/jquery.fs.selecter.js");
			?>
		</script>
		<?php 
			$this->load->view("index/js/script.php");
		?>
</head>
<body>	
<div class="container-fluid"> <!-- ahorita tiene container fluid por el tonto slider -->
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew">
			<?php $this->load->view("parts/menu.php") ?>
			<div class="row container-fluid">	
				<div class="row container-fluid paddingNull navSliderSection">
					<div class="col-sm-1 col-md-1 col-lg-1">
						<div class="navSlider col-sm-6 col-md-6 col-lg-6 paddingNull" direccion='0'>
							<img class="imgFull" src=<?php echo "'".base_url("img/slider/navLeft.png")."'"; ?> />	
						</div>
					</div>
					<div class="col-sm-offset-10 col-sm-1 col-md-offset-10 col-md-1 col-lg-offset-10 col-lg-1">
						<div class="navSlider col-sm-offset-6 col-sm-6 col-md-offset-6 col-md-6 col-lg-offset-6 col-lg-6 paddingNull" direccion='1'>
							<img class="imgFull" src=<?php echo "'".base_url("img/slider/navRight.png")."'"; ?> />	
						</div>
					</div>
				</div>
				<div class="row container-fluid  searchBar">
						<div class="row container-fluid">
							<div class="col-lg-9 ">
								<div class="col-sm-3 col-md-3 col-lg-3 propertySearchSection">
									<div class="col-md-12 col-lg-12">
										<h3><img src=<?php echo "'".base_url("img/elements/search_bar/lupa.png")."'"; ?> /> Property Search</h3>			
									</div>
								</div>
							</div>
						</div>
						<div class="paddingNull row container-fluid searchBarBackground contenedorSearch">	
							<div class="searchSelect col-sm-10 col-md-10 col-lg-10">
								<div class="col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name="cbPropertyType" class="form-control searchCb">
										<option value="-1">Property Type</option>
										<?php echo $searchBar->propertyType; ?>
									</select>	
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name="cbMinBedRooms" class="form-control searchCb">
										<option value="-1">Min. Bedrooms</option>
										<?php echo $searchBar->minBedRoom;?>
									</select>
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name='cbMinBath' class="form-control searchCb">
										<option value="-1">Min. Bathroom</option>
										<?php echo $searchBar->minBath; ?>
									</select>
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name='cbMinSf' class="form-control searchCb">
										<option value="-1">Min. SF</option>
										<?php echo $searchOp->minSf; ?>
									</select>
								</div>
								<div class="col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name="cbMinPrice" class="form-control searchCb">
										<option value="-1">Min. Price</option>
										<?php echo $searchOp->minPrice; ?>
									</select>
								</div>
								<div class=" col-sm-2 col-md-2 col-lg-2 paddingNull containerSelect">
									<select name="cbMaxPrice" class="form-control searchCb">
										<option value="-1">Max. Price</option>
										<?php echo $searchOp->maxPrice; ?>
									</select>
								</div>
							</div>
							<div class="col-sm-2 col-md-2 col-lg-2 btnSearchNow paddingNull">
								<button class="controlSearchbar form-control searchButton paddingNull">
										<div class="iconLupitaSection col-lg-offset-1  col-lg-9 ">
											<i class="fa fa-search"></i>
											<div class='txtSearchNow'>Search Now</div>	
										</div> 
								</button>	
							</div>
						</div>
						<div class="row container-fluid">
							<div class="col-md-offset-5 col-md-2 sliderPoints">
								<div id="puntituos" class="col-md-11">
									<!-- <div class="pointCuadro">
										<a href="#">
											<div class="circle-slider " >
												<div>
													
												</div>
											</div>	
										</a>
										
									</div> -->
									<div class="pointCuadro" id='fb'>
										<div class="circle-text circle-slider pointIMG activePoint" other='img1'>
											<div>
											</div>
										</div>
									</div>
									<div class="pointCuadro" id='fb'>
										<div class="circle-text circle-slider pointIMG" other='img2'>
											<div>
											</div>
										</div>
									</div>
									<div class="pointCuadro" id='fb'>
										<div class="circle-text circle-slider pointIMG" other='img3'>
											<div>
											</div>
										</div>
									</div>
									<div class="pointCuadro" id='fb'>
										<div class="circle-text circle-slider pointIMG" other='img4'>
											<div>
											</div>
										</div>
									</div>
									<!-- <div class="col-md-2">
										<img class='imgFull pointIMG activePoint' other='img1' src=<?php echo "'".base_url("img/slider/activeControl.png")."'"; ?> >	
									</div>
									<div class="col-md-2">
										<img class='imgFull pointIMG' other='img2' src=<?php echo "'".base_url("img/slider/control.png")."'"; ?> >	
									</div>
									<div class="col-md-2">
										<img class='imgFull pointIMG' other='img3' src=<?php echo "'".base_url("img/slider/control.png")."'"; ?> >	
									</div>
									<div class="col-md-2">
										<img class='imgFull pointIMG' other='img4' src=<?php echo "'".base_url("img/slider/control.png")."'"; ?> >	
									</div>
									<div class="col-md-2">
										<img class='imgFull pointIMG' src=<?php echo "'".base_url("img/slider/control.png")."'"; ?> >	
									</div>
									<div class="col-md-2">
										<img class='imgFull pointIMG'  src=<?php echo "'".base_url("img/slider/control.png")."'"; ?> >	
									</div>	 -->
								</div>
							</div>
						</div> 
				</div>
			</div> 
		</div>
		<!-- Maps -->			
			<div class="row container-fluid mapSection">
				<div class="row container-fluid paddingNull" >
					<div id='divCruzado'>
					</div>
				</div>
				<div class="row container-fluid paddingNull parteMapaBusqueda">	
					<div class="col-lg-12 col-md-12 ">
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 paddingNull searchMapSection">
							<div class="row">
								<div class="col-md-7">
									<h3>Map Search</h3>		
								</div>
								<div class="col-md-5 text-left paddingNull">
									<small><?php echo $cnListing; ?> listings</small>
								</div>
							</div>
							<div class="row lateralSeachBody">
								<div class="col-lg-12">
									<div class="row">
										<select class="form-control cbMapSearch Clasemamasita">
											<option value="1">Price: low to high</option>
											<option value="2">Price: high to low</option>
										</select>
									</div>	
									<div class="row cuadritoVivienda">
										<?php echo $cuadritoCasa; ?>
									</div>

								</div>
							</div>
						</div>
						<div id="elmapa" class="red col-xs-12 col-sm-9 col-md-9 col-lg-9 paddingNull mapIdiota " >
							<div id="map_canvas" class="map" style="height: 100%;">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Video -->
		<div class="row videoSection">
			<div class="videoYoutube col-sm-offset-1 col-sm-10 col-md-offset-1 col-lg-offset-1 col-md-7 col-lg-7 ">
				<h2 class="titleVideoSection">Featured Property Video</h2>
				<!-- <iframe class="youtubeVideoHome" src="//www.youtube.com/embed/ijN9BSFcb_o" frameborder="0" allowfullscreen></iframe> -->
				<iframe class="youtubeVideoHome" src=<?php echo " '".$homeData->videoHome."' " ?> frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3 rightVideoSection">
				<div class="row container-fluid">
					<a href=<?php echo "'".site_url("calendar/general")."'" ?> >
						<div class="row container-fluid paddingNull">
							<h2 class="text-center titleVideoSection titleOpenHouse">Open House Calendar</h2>	
						</div>
						<div class="row schedule ">
							<img class="img-responsive imgCenter imgSchedule" src=<?php echo "'".base_url("img/elements/lateral_video/calendario.png")."'"; ?> >
							<h4 class="text-center">CHECK OUT OUR</h4>
							<h4 class="text-center">OPEN HOUSE THIS WEEKEND</h4>
						</div>	
					</a>
				</div>
				<div class="row container-fluid clasesupercool">
					<div class="row container-fluid paddingNull">
						<h2 class="downloadFreebookTitle">Download Free eBook</h2>	
					</div>
					
					<div class="row container-fluid ebookVideo">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-5 contanerdorIMGDownloadEbook">
								<img class="img-responsive imgCenter downloadEbookImg" src=<?php echo "'".base_url("img/video/libro_video.png")."'"; ?> >
							</div>
							<div class="col-sm-8 col-md-8 col-lg-7">
								<p class="text-left">
									Sign up to receive our 
									blog posts via e-mail 
									and get a FREE copy 
									of our eBook “Get 
									Your House Market 
									Ready!”
								</p>
							</div>	
						</div>
						<div class="row formEbook">
							<div class="row container-fluid">
								<div class="col-md-12">
									<input type="text" class="form-control" placeholder='Your name'>
								</div>		
							</div>
							<div class="row container-fluid emailFreebok">
								<div class="col-sm-9 col-md-9">
									<input type="text" class="form-control" placeholder='Your Email'>
								</div>
								<div class="col-sm-2 col-md-2 sendButtonEbook">
									<i class="fa fa-envelope mailIcon"></i>
									<!-- <img class="img-responsive imgCenter" src=<?php echo "'".base_url("img/video/mensajeVideo.png")."'"; ?> > -->
								</div>
							</div>
							<div class="row container-fluid">
								<div class="col-md-12 privacyEbook">
									<p class="text-left ">
										Privacy Guarantee: Your e-mail address 
										won’t ever be shared with anyone else.
									</p>	
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="row container-fluid likeUsCuadrito">
					<div class="row container-fluid">
						<h2>Like Us On Facebook</h2>
					</div>
					<div class="row container-fluid">
						<div id="likebox-wrapper">
							<div class="fb-like-box" data-href="https://www.facebook.com/SchumacherRealty?ref=br_tf" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>	
						</div>	
					</div>
					
				</div>
			</div>
		</div>
		<!-- News to market -->
		<div class="row videoSection newsToMarket">
			<div class="col-lg-offset-1 col-lg-10">
				<div class="row container-fluid	">
					<div class="row container-fluid">
						<div class="col-lg-4">
							<h2 class='titleNewsToMarketSection'>New To The Market</h2>									
						</div>
						<div class="col-lg-offset-6 col-lg-2 text-right n-navNewsSection">
							<img id="leftarrow" class='navNewToMarket' direccion='0' src=<?php echo "'".base_url("img/elements/news_to_market/navLeft.png")."'"; ?> />
							<img id="rightarrow" class='navNewToMarket' direccion='1' src=<?php echo "'".base_url("img/elements/news_to_market/navRight.png")."'"; ?> />
						</div>
						<input class="txtNavNewsMarket hidden" id='txtl1' value="0" >
						<input class="txtNavNewsMarket hidden" id='txtl2' value="4" >
					</div>
					<div class="row container-fluid pedazoNewsToMarket">
						<!-- casitas -->
						<?php echo $newsToMarket ?>
					</div>
				</div>
			</div>				
		</div>
		<!-- Banner 2 -->
		<div class="row">
			<div style=<?php echo "'background:url(".$homeData->commitmentBackground."); -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover; '" ?> class="col-md-12 banner2">
				<h2>Commitment</h2>
				<p>
				We elevate your real estate experience with a specialized, full-service approach that is unique within 
				the real estate industry.
				</p>	
			</div>
		</div>
		<!-- Our team -->
			<div class="row videoSection container-fluid">
				

				<div class="row container-fluid">
					<div class="col-lg-4">
						<h2 class="titleOurTeam">Meet Our Team</h2>
					</div>
					<div class="col-lg-offset-6 col-lg-2 text-right navEmpSection">
						<img id="leftArrowTeem" class='navEmpleados' src=<?php echo "'".base_url("img/elements/ourteam/navLeft.png")."'"; ?> />
						<img id="rightArrowTeem" class='navEmpleados' src=<?php echo "'".base_url("img/elements/ourteam/navRight.png")."'"; ?> />
					</div>
				</div>
				<div class="row container-fluid">
					<?php 
						echo $cuadritoEmpleado;
					?>
				</div>
				<input class="txtNavEmp hidden" id='txtl1emp' value="0" >
				<input class="txtNavEmp hidden" id='txtl2emp' value="4" >
			</div>
		<!-- Sell or buy -->
			<div class="row container-fluid buySellSection">
				<div class="col-md-6 col-lg-6">
					<a href=<?php echo "'".$homeData->home_buyer."'" ?> target="_blank" >
						<div class="col-lg-12 boxBuySell " >
							<div class="row" id='boxBuySell0'>
								<h2 class="textBuySellerBox text-center">Home buyers</h2>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-6">
					<a href=<?php echo "'".$homeData->homeSeller."'" ?> target="_blank" >
						<div class="col-lg-12 boxBuySell">
							<div class="row" id='boxBuySell2'>
								<h2 class="textBuySellerBox text-center">Home sellers</h2>
							</div>
						</div>	
					</a>	
				</div>
				
				
			</div>
		<!-- Footer -->
		<?php $this->load->view("parts/footer.php") ?>

</div>
<!-- faceboook plugin -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";

			  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</body>
</html>