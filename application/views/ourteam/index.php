<?php 
	$datos["opMenu"] = 2;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meet Our Team - Schumacher Realty</title>
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
    	<style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
					font-size:14px;
				}
				.textoEmpleado p{
					word-break:break-word;
				}
    	</style>
</head>
<body>
	<?php 
			$this->load->view("parts/loader-global.php");
	?>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		
		<div class="row container-fluid sliderNew">
			<?php $this->load->view("parts/menushow.php") ?>
		</div>
		<article class="conteImgInternas">
			<img src="<?php echo base_url('img/elements/imgInternas.png'); ?>">
		</article>
		<div class="bodyContainer">
			<?php $this->load->view("parts/menuresponsive.php") ?>
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
					
				</div>
			</div>	
		</div>
		<?php $this->load->view("parts/footer.php") ?>
		<?php $this->load->view("parts/footerResponsivo.php") ?>
	</div>
</body>
</html>