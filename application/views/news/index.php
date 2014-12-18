<?php 
	$datos["opMenu"] = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
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