<!DOCTYPE html>
<html>
<head>
	<title>Mapas casa</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
	<?php 
		$this->load->view("mapas_casa/js/script.php")
	?>
	<script type="text/javascript">
		<?php 
			$this->load->view("mapas_casa/js/functions.php");
		?>
	</script>
</head>
<body>

	<div id="map_canvas" class="map" style="width:100%; min-height:430px; height:100%;" >
		
	</div>

</body>
</html>