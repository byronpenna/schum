<?php 
	$datos["opMenu"] = 4;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Our story</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    <script type="text/javascript">
    	<?php
    		$this->load->view("parts/js/script.php");
    	?>
	</script>
	<style type="text/css">
		<?php
			$this->load->view("our_story/css/style.php");
		?>
	</style>
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<?php $this->load->view("parts/menushow.php") ?>
		<div class="row container-fluid sliderNew size" >
			<?php $this->load->view("parts/menu.php") ?>
		</div>
			<div class="row container-fluid ourStoryDescription marginn font">
					<h2><?php echo $ourStory->titulo ?></h2>
					<p>
						<?php echo nl2br($ourStory->texto) ?>
					</p>
					<!-- <p>
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
					</p> -->
				</div>
		<div class="bodyContainer">
			
		</div>
		<?php 	
			$this->load->view("parts/footer.php");
		?>
	</div>
</body>
</html>