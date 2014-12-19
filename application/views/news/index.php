<?php 
	$datos["opMenu"] = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
	<style type="text/css">
		<?php
			$this->load->view("news/css/style.php");
		?>
	</style>
    <script type="text/javascript">
    	<?php
    		$this->load->view("parts/js/script.php");
    	?>
	</script>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>application\views\news
		<div class="row container-fluid sliderNew size" >
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodyContainer">
			<div>
				<img class="grafica" src=<?php echo "'".base_url("img/news/grafica.jpg")."'" ?> "application/views/news/grafica.jpg">
			</div>
		</div>
		<?php 	
			$this->load->view("parts/footer.php");
		?>
	</div>
</body>
</html>