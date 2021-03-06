<?php 
	$datos["opMenu"] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schumacher Realty - Hopen Houses</title>
	
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
        <link href="http://formstone.it/css/demo.css" rel="stylesheet" type="text/css" media="all">
        <script src="http://formstone.it/js/demo.js"></script>
        <script src="http://formstone.it/js/modernizr.js"></script>
    <!-- css --> 
    	<style type="text/css">
    		<?php
                
    			$this->load->view("calendar/css/style.php");
    			$this->load->view("calendar/css/indexmedia.php");
    			$this->load->view("listings/css/jquery.fs.selecter.css"); 
                $this->load->view("listings/css/style.php");
	    	 	$this->load->view("listings/css/jquery.fs.selecter.css"); 
	    	 	$this->load->view("listings/css/indexMedia.php");
    		?>
    	</style>
    	<style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
					font-size:1.4em;
				}


				#footer_container .foot-social-ico .fa {
			    font-size: 2em;
			    vertical-align: middle;
			    margin-top:10px !important;
		     }

				.sliderNew{
					min-height: 10px !important; 
				}

    	</style>
    <!-- scripts -->
    	<script type="text/javascript">
	    	<?php
	    		$this->load->view("parts/js/script.php");
	    		$this->load->view("listings/js/jquery.fs.selecter.js");
	            $this->load->view("listings/js/jquery.fs.selecter.js");
	    		$this->load->view("parts/js/script.php");
	    		$this->load->view("listings/js/functions.php");
            ?>
    	</script>
        <?php 
    		$this->load->view("calendar/js/script.php");
    	?>
</head>
<body>
	<?php 
			$this->load->view("parts/loader-global.php");
	?>
	<?php $this->load->view("parts/menuresponsive.php") ?>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew" style="margin-bottom:0px;" >
			<?php $this->load->view("parts/menushow.php") ?>
		</div>
		<div class="bodyContainer">
			<div class="row container-fluid ">
				<div class="col-sm-offset-1 col-xs-9 row titulo">
					<h2>Open House Calendar</h2>
				</div>
				<?php 
					echo $divOpenHouse;
				?>
			</div>
			<div class="row container-fluid searchSection">
				<div class="row container-fluid titleSearch">
					<div class="col-md-6 col-sm-6">
						<h2>Property Search</h2>		
					</div>
					<div class="col-md-6 col-sm-6 text-right searchBMAP">
						<h4><a href=<?php echo "'".site_url("welcome/index/#elmapa")."'" ?> >SEARCH BY MAP</a> <i class="fa fa-globe globo"></i></h4>
					</div>
				</div>
				<div class="row container-fluid searchBar">
					<div id='divSearch' class="col-md-10 col-sm-10 searchBarBackground">
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
						<button class="form-control btnSearchNow searchButton contorno">
							<i class="fa fa-search lupita"><div></div></i><b class="serchi">Search Now</b>
						</button>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("parts/footer.php") ?>
		<?php $this->load->view("parts/footerResponsivo.php") ?>
	</div>
</body>
</html>