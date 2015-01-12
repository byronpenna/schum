<?php 
	$datos["opMenu"] = 2;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Our team</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    <!-- css --> 
    	<style type="text/css">
    		<?php
    			
    			$this->load->view("ourteam/css/style.php");
    			$this->load->view("ourteam/css/indexMedia.php");
    		?>
    	</style>
    <!-- scripts -->
    	<script type="text/javascript">
	    	<?php
	    		$this->load->view("parts/js/script.php");
	    	?>
    	</script>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<?php $this->load->view("parts/menushow.php") ?>
		<div class="row container-fluid sliderNew">
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodyContainer">
			<div class="row container-fluid ourTeamDescription">
				<h2>Meet Our Team</h2>
				<p>
					There Are Many Fantastic Real Estate Brokerages In Our Great City! We Work Diligently To Continue To Remain One Of Them.
				</p>
				<p>
					Our Team Culture Is Rooted In Non-Negotiable Integrity With Laser-Focused Purpose:
				</p>
				<p>
					To Serve Our Customers With Utmost Professionalism And Quality, 
					Helping Them Achieve Their Dreams And Goals, And Prosper Along the Way. 
					We Love Our Unique Brand and Believe Marketing Should Be Creative, Engaging And Actionable, 
					Generating Extraordinary Results For Our Customers. 
					We Are Passionate About Giving Back To Our Community, About Being Instrumental In Adding Quality of Life,
					And Partnering In Making Change Happen For Those Less Fortunate In Our City.
				</p>
				<p>
					Thank You For Your Trust and Business
				</p>
				<p>
					We Are Truly Blessed
				</p>
				<p class="finishP">
					Your SR Team
				</p>
			</div>
			<div class="row container-fluid">
				<div class="row container-fluid empleadosSection">
					<?php echo $cuadritosEmpleados ?>
					<!-- <div class="col-md-3 empleado">
						<div class="row">
							<div class="row container-fluid">
								<img class='imgFull' src=<?php echo "'".base_url("img/ourteam_page/alina.png")."'"; ?> >
							</div>
						</div>
						<div class="row container-fluid txtEmpleado">
							<div class="row container-fluid descripcionEmpleado">
								<h2> Alina Schumacher</h2>
								<h3> Broker / Owner </h3>
							</div>
							<div class="row container-fluid">
								<div class="col-md-6">
									<div class="col-md-6">
										<i class="fa fa-list"></i>	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>120 LISTINGS</p>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/email.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>EMAIL</p>
									</div>	
								</div>
							</div>
							<div class="row container-fluid textoEmpleado">
								<p>
									Having been born in Russia and having spent many years living in Germany, Alina has many rich and unique life experiences on which to
								</p>
							</div>
							<div class="row container-fluid accionEmpleado">
								<button type="button">Read more</button>
							</div>
						</div>
					</div>
					<div class="col-md-3 empleado">
						<div class="row">
							<img class='imgFull' src=<?php echo "'".base_url("img/ourteam_page/derrick.png")."'"; ?> >
						</div>
						<div class="row container-fluid txtEmpleado">
							<div class="row container-fluid descripcionEmpleado">
								<h2> Alina Schumacher</h2>
								<h3> Broker / Owner </h3>
							</div>
							<div class="row container-fluid">
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/listing.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>120 LISTINGS</p>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/email.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>EMAIL</p>
									</div>	
								</div>
							</div>
							<div class="row container-fluid textoEmpleado">
								<p>
									Having been born in Russia and having spent many years living in Germany, Alina has many rich and unique life experiences on which to
								</p>
							</div>
							<div class="row container-fluid accionEmpleado">
								<button type="button">Read more</button>
							</div>
						</div>
					</div>
					<div class="col-md-3 empleado">
						<div class="row">
							<img class='imgFull' src=<?php echo "'".base_url("img/ourteam_page/nicole.png")."'"; ?> >
						</div>
						<div class="row container-fluid txtEmpleado">
							<div class="row container-fluid descripcionEmpleado">
								<h2> Alina Schumacher</h2>
								<h3> Broker / Owner </h3>
							</div>
							<div class="row container-fluid">
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/listing.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>120 LISTINGS</p>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/email.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>EMAIL</p>
									</div>	
								</div>
							</div>
							<div class="row container-fluid textoEmpleado">
								<p>
									Having been born in Russia and having spent many years living in Germany, Alina has many rich and unique life experiences on which to
								</p>
							</div>
							<div class="row container-fluid accionEmpleado">
								<button type="button">Read more</button>
							</div>
						</div>
					</div>
					<div class="col-md-3 empleado">
						<div class="row">
							<img class='imgFull' src=<?php echo "'".base_url("img/ourteam_page/kelly.png")."'"; ?> >
						</div>
						<div class="row container-fluid txtEmpleado">
							<div class="row container-fluid descripcionEmpleado">
								<h2> Alina Schumacher</h2>
								<h3> Broker / Owner </h3>
							</div>
							<div class="row container-fluid">
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/listing.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>120 LISTINGS</p>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="col-md-6">
										<img class='imgFull' src=<?php echo "'".base_url("img/our_team/email.png")."'"; ?> >	
									</div>
									<div class="col-md-6 empleadoIcon">
										<p>EMAIL</p>
									</div>	
								</div>
							</div>
							<div class="row container-fluid textoEmpleado">
								<p>
									Having been born in Russia and having spent many years living in Germany, Alina has many rich and unique life experiences on which to
								</p>
							</div>
							<div class="row container-fluid accionEmpleado">
								<button type="button">Read more</button>
							</div>
						</div>
					</div> -->
				</div>
			</div>	
		</div>
		<?php $this->load->view("parts/footer.php") ?>
	</div>
</body>
</html>