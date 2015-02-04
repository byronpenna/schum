<!DOCTYPE html>
<html>
<head>
	<title>Individual page</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php"); ?>
    	    <!-- css --> 
    	<style type="text/css">
    		<?php
    			$this->load->view("individual/css/style.php");
    			$this->load->view("individual/css/indexMedia.php");
    		?>
    	</style>
    	<style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
				}
    	</style>
    	<script type="text/javascript">
	    	<?php 
	    		$this->load->view("parts/js/script.php");
	    	?>
    	</script>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="col-lg-12 paddingNull">
			<div class="row container-fluid sliderNew">
				<?php $this->load->view("parts/menushow.php") ?>
			</div>	
		</div>
		<div class="row container-fluid individualSection">
			<div class="col-sm-4 col-md-3 col-lg-3 individualTarjeta">
				<div class="row">
					<!-- src=<?php echo "'".base_url("img/individual/alina.png")."'"; ?> -->
					<img class="imgFull" src=<?php echo "'".$empleado->rutaImg."'";  ?>  >	
				</div>
				<div class="row container-fluid descriptionIndividual">
					<div class="row container-fluid txtContact">
						<div class="col-lg-6">
							<h3 class='contactTitle'>Contact</h3>		
						</div>
					</div>
					<div class="row container-fluid">
						<div class="col-lg-9">
							<span class='direccion'>
								<?php echo nl2br($empleado->contact); ?>
							</span>	
						</div>
					</div>
					<div class="row container-fluid contact">
						<div class="row container-fluid">
							<a href=<?php echo "mailto:".$empleado->email ?> >
								<div class="col-lg-7">
									<h3>
										<!-- <img class='imgDetail' src=<?php echo "'".base_url("img/icons/email.png")."'"; ?> >	 -->
										<i class="fa fa-envelope iconDescripcionPersona"></i>
										<span class='spanInfo'>
											Email <?php echo $empleado->simpleName ?> 
										</span>
									</h3>		
								</div>	
							</a>
							
						</div>
						<div class="row container-fluid">
							<div class="col-lg-7">
								<h3>
									<!-- <img class='imgDetail' src=<?php echo "'".base_url("img/icons/phone.png")."'"; ?> >	 -->
									<i class="fa fa-phone iconDescripcionPersona"></i>
									<span class='spanInfo'>
										<?php echo $empleado->phone ?>
									</span>
								</h3>		
							</div>
						</div>
						<div class="row container-fluid ">
							<div class="col-md-7 col-lg-7">
								<h3>
									<i class="fa fa-globe iconDescripcionPersona"></i>
									<span class='spanInfo'>
										<?php echo $idiomas; ?>
									</span>	
								</h3>
								<!-- <div class="col-md-2 col-lg-2 paddingNull"> -->
									<!-- <img class='imgFull' src=<?php echo "'".base_url("img/icons/world.png")."'"; ?> > -->

								<!-- </div>	
								<div class="col-md-8 col-lg-8 idiomas">
									
								</div> -->
								
								<!-- <h2>English</h2>
								<h2>Spanish</h2>
								<h2>Russian</h2> -->		
							</div>
						</div>
						
					</div>
				</div>
				<div class="row container-fluid viewListingSection">
					<div class="col-lg-12">
						<a href=<?php echo "'".site_url("listings/getListingFromAgent/".$idEmp." ")."'" ?> >
							<button class="form-control">View listings</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-7 col-md-8 col-lg-8 dataDescription">
				<div class="row container-fluid generalData">
					<h2> <?php echo $empleado->nombre ?> </h2>
					<h3> <?php echo $empleado->posicion ?> </h3>
				</div>
				<div class="row container-fluid ">
					<div class="row container-fluid dataContent">
						<p>
							<?php echo $empleado->descripcion ?>	
						</p>
						
					</div>
					<div class="row container-fluid awardsContent">
						<!-- ################## -->
							<?php 
								if($divAwards != ""){
							?>
								<div class="row container-fluid">
									<h3>Awards</h3>		
								</div>
								<div class="row container-fluid divAward">
									<!-- <img class="imgFull" src=<?php echo "'".base_url("img/individual/awards.png")."'"; ?> >	 -->
									<?php echo $divAwards; ?>
								</div>
							<?php 
								}
							?>
						<!-- ################## -->
							<?php 
								if($testimonios != ""){
							?>
								<div class="row container-fluid">
									<h3>What Others Are Saying</h3>
								</div>
								<?php 	
									echo $testimonios;
								?>
								<div class="row container-fluid dataOtherSay">
									<div class="col-md-5 col-lg-4">
										<button class="form-control botonChulo">
											MORE TESTIMONIALS	
										</button>	
									</div>
								</div>
							<?php 
								}
							?>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("parts/footer.php") ?>
	</div>
</body>
</html>