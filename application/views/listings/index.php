<?php 
	$datos["opMenu"] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listings - Schumacher Realty</title>
	<!-- load --> 
		
		
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    	<link href="http://formstone.it/css/demo.css" rel="stylesheet" type="text/css" media="all">
		<script src="http://formstone.it/js/demo.js"></script>
		<script src="http://formstone.it/js/modernizr.js"></script>
    <!-- css -->
	    <style type="text/css">
	    	<?php
	    	 	$this->load->view("listings/css/style.php");
	    	 	$this->load->view("listings/css/jquery.fs.selecter.css"); 
	    	 	$this->load->view("listings/css/owl.carousel.php"); 
	    	 	$this->load->view("listings/css/indexMedia.php");
	    	 ?>

	     </style>
     <!-- scripts -->
    	<script type="text/javascript">
	    	<?php
	    		$this->load->view("listings/js/jquery.fs.selecter.js");
	    		$this->load->view("listings/js/owl.carousel.php");
	    		$this->load->view("parts/js/functions.php");
	    		$this->load->view("parts/js/script.php");
	    		$this->load->view("listings/js/functions.php");
	    		
	    	?>
    	</script>
    	<?php 
    		$this->load->view("listings/js/script.php");
    	?>
    	<style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
					font-size:1.4em;
				}

				   	 @media(min-width: 100px) and (max-width:414px){
						.searchSection {
							margin-top: 5%;
							display: none;
							/*background: red;*/
						}


						.beforeHomes h2 {
						font-size: 1.6em;
						text-align: left;
						}

						.beforeHomes {
							margin-top: 0px;
							margin-bottom: 0px;
							margin-left: -10%;
							/*background: red;*/
							}

							.sliderNew{
								height: 0px;
							}

							.casa{
								/*background: red;*/
								padding: 0px;
								margin-top: 5%;
								margin-bottom: 5%;
							}

							.casa img{
								position: relative !important;
								border: 0.6em solid #CCCCCC;
							}

							.imgListing {
								width: 90%;
								margin: auto;
								min-height: 250px;
								height: 0px !important;
							}

							.descripcionCasa h3 {
							margin-top: 2%;
							font-size: 1.2em;
							}

							.descripcionCasa h5 {
								margin-top: 1%;
								font-size: 1em;
								}

								.mappin {
								font-size: 100%;
								}

								.descripcionCasa h2 {
									font-size: 1.5em;
								}

							.titleFootDescriptionCasa, .desFootDescriptionCasa {
								font-size: 0.5em;
								text-align: center;
							}

							.descripcionCasa {
								width: 90%;
								margin: auto;
								padding: 0px;
								padding-top: 2%;
								padding-left: 0px;
								padding-bottom:2%; 
								 -webkit-box-shadow: 0px 0px 0px transparent; 
								-moz-box-shadow: 0px 0px 0px transparent;
								 box-shadow: 0px 0px 0px transparent; 
								 border-bottom: 1px solid #CCCCCC;
							}

							
								.btnPaginacion{
									display:none !important;
								}

								
								.imgNav{
									width: 2%;
									padding: 0.5em;
									height: 40px;
									padding-right: 1em;
								}

								#conte-pagin {
									width: 40%;
									padding: 5px;
									display: block;
								}


					}
				@media(min-width: 100px) and (max-width:420px){

					.descripcionCasa > .row:nth-child(4) {
						margin-top: 0%; 
					}



				}

				@media(max-width:320px){
					.textEstadoCasa{
						font-size: 70px;
					}
				}	






				@media (min-device-width: 769px) and (max-device-width:800px){
						.navbar-default .navbar-nav > li > a {
							font-size: 0.6em;
						}

						.searchBar > .col-sm-2 {
							padding: 0.2%;
							margin-top: 1.6%;
						}


						.selecter-selected {
							font-size: 0.55em !important;
							width: 390% !important;
						}


						.selecter-selected {
							position: relative;
							background: #ffffff;
							border: 1px solid #cccccc;
							color: #222222;
							cursor: pointer;
							display: block;
							font-size: 13px;
							margin: 0;
							overflow: hidden;
							padding: 10px 5px;
							text-overflow: clip;
							z-index: 2;
							border-radius: 0px;
						}


						.searchBar > .col-sm-10 > .col-sm-2 {
							padding: 1%;
							margin-left: -1px;
						}


						#conte-pagin {
							width: 15%;
							padding: 5px;
						}


						.imgNav, .btnPagincion {
							width: 2%;
							padding: 0.5em;
							height: 40px;
							padding-right: 2.5%;
						}

						.elmapa{
							display: none;
						}


						.paginationSection {
						margin-top: 5%;
						/* margin-left: -40%; */
						margin-bottom: 2% !important;
						}


						
				}



				@media (width:768px){
						.navbar-default .navbar-nav > li > a {
							font-size: 0.7em;
						}


						.searchBar > .col-sm-10 > .col-sm-2 > select, .searchBar > .col-sm-2 > button {
							font-size: 0.7em;
						}

						.searchBar > .col-sm-2 {
							padding: 0.2%;
							margin-top: 2.2%;
						}


						.selecter-selected {
							font-size: 0.55em !important;
							width: 390% !important;
						}


						.selecter-selected {
							position: relative;
							background: #ffffff;
							border: 1px solid #cccccc;
							color: #222222;
							cursor: pointer;
							display: block;
							font-size: 13px;
							margin: 0;
							overflow: hidden;
							padding: 10px 5px;
							text-overflow: clip;
							z-index: 2;
							border-radius: 0px;
						}


						.searchBar > .col-sm-10 > .col-sm-2 {
							padding: 1%;
							margin-left: -1px;
						}


						#conte-pagin {
							width: 20%;
							padding: 5px;
						}


						.imgNav, .btnPagincion {
							width: 2%;
							padding: 0.5em;
							height: 40px;
							padding-right: 2.5%;
						}

						.elmapa{
							display: none;
						}	


						.imgListing {
							min-height: 150px;
						}	


						.textEstadoCasa {
							font-size: 3em;
						}		


						.descripcionCasa h3 {
							margin-top: 2%;
							font-size: 1em !important;
						}		

						.descripcionCasa h5 {
						margin-top: 1%;
						font-size: 0.8em !important;
						}

						.mappin {
						font-size: 90%;
						color: #314782;
						}


						.descripcionCasa h2 {
						margin-top: 2%;
						font-size: 1.2em !important;
						}


						.titleFootDescriptionCasa, .desFootDescriptionCasa {
						font-size: 0.6em !important;
						text-align: center;
						}


						.paginationSection {
						margin-top: 5%;
						/* margin-left: -40%; */
						margin-bottom: 2% !important;
						}
				}


    	</style>
</head>
<body>
	<?php $this->load->view("parts/loader-global.php");?>
	<?php $this->load->view("parts/menuresponsive.php") ?>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew">
		<?php /*$this->load->view("parts/menu.php") */?>	
		<?php $this->load->view("parts/menushow.php") ?>
		</div>
		<article class="conteImgInternas">
			<img src="<?php echo base_url('img/elements/imgInternas.png'); ?>">
		</article>
		<div class="bodySection">
			<!-- Property search -->
			<div class="row container-fluid searchSection">
				<div class="row container-fluid titleSearch">
					<div class="col-md-6 col-sm-6">
						<h2>Property Search</h2>		
					</div>
					<div class="col-md-6 col-sm-6 text-right elmapa">
						<h4><a href=<?php echo "'".site_url("welcome/index/#elmapa")."'" ?> >SEARCH BY MAP</a> <i class="fa fa-globe globo"></i></h4>
					</div>
				</div>
				<div class="row container-fluid searchBar">
					<div id='divSearch' class="col-md-10 col-sm-10">
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='propertyType' class="form-control MiSelectChulo" >
								<option value='-1'>Property Type</option>
								<?php echo $searchBar->propertyType ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinBed" class="form-control MiSelectChulo">
								<option value='-1'>Min. Bedrooms</option>
								<?php echo $searchBar->minBedRoom ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinBath" class="form-control MiSelectChulo">
								<option value="-1">Min. Bathrooms</option>
								<?php echo $searchBar->minBath ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinSf" class="form-control MiSelectChulo">
								<option value='-1'>Min. SF</option>
								<?php 
									echo $searchOp->minSf;
								?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='cbMinPrice' class="form-control MiSelectChulo">
								<option value="-1">Min. Price</option>
								<?php 
                                    echo $searchOp->minPrice; 
                                ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='cbMaxPrice' class="form-control MiSelectChulo">
								<option value="-1">Max. Price</option>
								<?php 
                                    echo $searchOp->maxPrice; 
                                ?>
							</select>		  
						</div>
					</div>
					<div class="col-md-2 col-sm-2 inputPropertySearch">
						<button class="form-control btnSearchNow contorno">
							<i class="fa fa-search lupita"><div></div></i><b class="serchi">Search Now</b>
						</button>
					</div>
				</div>
			</div>
			<!-- Results -->
			<div class="row container-fluid resultSection">
				<div class="row container-fluid	beforeHomes">
					<div class="col-md-6 col-sm-6 ">
						<h2>Results</h2>	
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="row container-fluid displaySection">
							<div style="display:none" class="col-md-offset-6 col-sm-offset-4 col-md-6 col-sm-6 text-right AlADerecha">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 DivDisplay">
									<h3 class="imgLine"> Display By </h3>	
								</div>
								<div class="miClaseChula col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<select id='selectDisplay'>
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
								</div>	
							</div>
							<!-- <div class="col-md-2 col-sm-2"> -->
								
							<!-- </div>	 -->
						</div>
					</div>
				</div>
				<!-- <div class="row container-fluid">
					<div class="row container-fluid">
						<div class="col-md-3 casa ">
							<div class="row">
								<img class='imgFull' src=<?php echo "'".base_url("img/listings/h1.png")."'"; ?> />
							</div>
							<div class="row container-fluid descripcionCasa">
								<div class="row container-fluid">
									<h3>364 OAKWOOD AVENUE</h2>	
								</div>
								<div class="row container-fluid">
									<h5>Winnipeg, Riverview</h5>
								</div>
								<div class="row container-fluid">
									<h2>$ 634,900</h2>
								</div>
								<div class="row container-fluid">
									<div class="col-md-4">
										<span class='titleFootDescriptionCasa'>SQ FT:</span><span class='desFootDescriptionCasa'>110 ft</span>
									</div>
									<div class="col-md-4">
										<span class='titleFootDescriptionCasa'>BED:</span> <span class='desFootDescriptionCasa'>3</span>
									</div>
									<div class="col-md-4">
										<span class='titleFootDescriptionCasa'>BATH:</span> <span class='desFootDescriptionCasa'>2</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 red">
							aa
						</div>
						<div class="col-md-3 pink">
							aa
						</div>
						<div class="col-md-3 red">
							aa
						</div>
					</div>
				</div> -->
				<div class="row seccionCasitas cuadritos">
					<?php echo $casas; ?> 
				</div>
			</div>

			<!-- Paginado -->
				<div class="row container-fluid paginationSection">
						<center>
					<span class='hidden' id='txtOrigen'><?php echo $origen ?></span>
							<input type="hidden" id='txtPagePaginacion' value=<?php echo "'".($pageOf[0]+1)."'" ?> >
							<input type="hidden" id='txtPageTotales' 	value=<?php echo "'".$pageOf[1]."'" ?> >
							<div id="conte-pagin">
								Page <?php echo " ".$pageOf[0]." of ".$pageOf[1]." " ?>
							</div>
							<?php
								echo $numsPaginacion;
							?>
						</center>
				</div>
				<div class="loadMore"></div>
				<!-- <div class="row container-fluid calculatorSection">
					<h2>Mortgage calculator</h2>
					<h4>What will your monthly mortgage payment be?</h4>	
				</div> -->
		</div>
		
	</div>
	<!-- footer -->
			<?php 
				// $this->view("parts/calculator.php"); 
				$this->view("parts/footer.php");
			?>
			<?php $this->load->view("parts/footerResponsivo.php") ?>
</body>
</html>