<?php 
	$datos["opMenu"] = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    <script type="text/javascript">
    	<?php
    		$this->load->view("parts/js/script.php");
    	?>
	</script>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew" >
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodyContainer">
			
		</div>
		<?php 	
			$this->load->view("parts/footer.php");
		?>
	</div>
</body>
</html>