<!DOCTYPE html>
<html>
<head>
	<title>Listings</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php"); ?>
    <!-- css -->
	    <style type="text/css">
	    	<?php $this->load->view("listings/css/style.php") ?>
	    	<?php $this->load->view("listings/css/indexMedia.php") ?>
	    </style>
     <!-- scripts -->
    	<script type="text/javascript">
	    	<?php
	    		$this->load->view("parts/js/script.php");
	    		$this->load->view("listings/js/functions.php");
	    	?>
    	</script>
    	<?php 
    		$this->load->view("listings/js/script.php");
    	?>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew">
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodySection">
			<!-- Property search --> 
			<div class="row container-fluid searchSection">
				<div class="row container-fluid titleSearch">
					<div class="col-md-6 col-sm-6">
						<h2>Property Search</h2>		
					</div>
					<div class="col-md-6 col-sm-6 text-right">
						<h4>SEARCH BY MAP <i class="fa fa-globe globo"></i></h4>
					</div>
				</div>
				<div class="row container-fluid searchBar">
					<div id='divSearch' class="col-md-10 col-sm-10">
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='propertyType' class="form-control " >
								<option value='-1'>Property Type</option>
								<?php echo $searchBar->propertyType ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinBed" class="form-control ">
								<option value='-1'>Min. Bedrooms</option>
								<?php echo $searchBar->minBedRoom ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinBath" class="form-control ">
								<option value="-1">Min. Bathrooms</option>
								<?php echo $searchBar->minBath ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name="cbMinSf" class="form-control ">
								<option value='-1'>Min. SF</option>
								<?php 
									echo $searchOp->minSf;
								?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='cbMinPrice' class="form-control ">
								<option value="-1">Min. Price</option>
								<?php 
                                    echo $searchOp->minPrice; 
                                ?>
							</select>	
						</div>
						<div class="col-md-2 col-sm-2 inputPropertySearch">
							<select name='cbMaxPrice' class="form-control ">
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
							<div class="col-md-offset-6 col-sm-offset-4 col-md-6 col-sm-6 text-right">
								<h3 class="imgLine"> Display By </h3>
								<select id='selectDisplay'>
									<option value="12">12</option>
									<option value="24">24</option>
									<option value="36">36</option>
								</select>	
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
					<span class='hidden' id='txtOrigen'><?php echo $origen ?></span>
					<div class="col-lg-offset-3 col-lg-6 col-sm-offset-2 col-sm-12 paginacion ">
						<div class="col-lg-2 titlePagination paddingNull">
							Page <?php echo " ".$pageOf[0]." of ".$pageOf[1]." " ?> 
						</div>
						<div class="col-lg-8 col-sm-8 numbers">
							<?php
								echo $numsPaginacion;
							?>	
						</div>
						<div class="col-lg-2">
							
						</div>
						
					</div>
				</div>
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
</body>
</html>