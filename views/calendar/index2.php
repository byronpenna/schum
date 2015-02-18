<!DOCTYPE html>
<html>
<head>
	<title>SCHUMACHER</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php"); ?>
    <!-- css --> 
    	<style type="text/css">
    		<?php
    			$this->load->view("calendar/css/style.php");
    			$this->load->view("calendar/css/indexmedia.php");
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
		<div class="row container-fluid sliderNew">
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodyContainer">
			<div class="row container-fluid ">
				<div class="col-sm-offset-1 col-xs-9 row titulo">
					<h2>Open House Calendar</h2>
				</div>
				<div class="col-sm-10 col-sm-offset-1  col-md-9 col-sx-10 col-lg-9 calendar">
					<div class="col-sm-3 col-md-3 col-lg-3 photosection">
						<img src="http://50.62.42.134/Archivos/Compania_17/Usuarios/Usuario_88/Catalogo_1520/casa2.jpg" class="imgfull row">
						<h2>364 OAKWOOD AVENUE</h2>
						<i class="fa fa-map-marker icono"></i><h3> Winnipeg, Riverview</h3>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 descriptionsection">
						<div class="col-xs-12">
							<h2>Description</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices a metus vel efficitur. Fusce rhoncus sapien nec nibh congue, ut ornare nulla accumsan. Pellentesque ut tempor justo.</p>
						</div>
						<div class="col-xs-12 botto">
							<h4 class="price">$634,900|</h4><h4 class="descr">SQ FT:1.010 ft2|</h4><h4 class="descr">BED: 2|</h4><h4 class="descr">BATH: 2</h4>
						</div>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						<div class="horario col-xs-12" >
							<i class="fa fa-calendar icon"></i>
							<h3>DATE: 25/OCT/2014</h3>
							<h3>TIME: 2:00 PM - 7:00 PM</h3>
							<h3>DATE: 25/OCT/2014</h3>
							<h3>TIME: 2:00 PM - 7:00 PM</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

