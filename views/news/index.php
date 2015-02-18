<?php 
	$datos["opMenu"] = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<title>News - Schumacher Realty</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
	<style type="text/css">
		<?php
			$this->load->view("news/css/style.php");
		?>
		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
					font-size:1.6em;
				}
	</style>
    <script type="text/javascript">
    	<?php
    		$this->load->view("parts/js/script.php");
    	?>
	</script>
</head>
<body>
	<?php 
			$this->load->view("parts/loader-global.php");
	?>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		
<div class="row container-fluid sliderNew" style="margin-bottom:5%;height:0px;" >
			<?php $this->load->view("parts/menushow.php") ?>
		</div>
	<div class="bodyContainer">
				<div class="row container-fluid ourStoryDescription marginn font">
						<h2><?php echo $news->title; ?></h2>
						<div class='imgPrincipal'>
							<!-- <img class="grafica" src=<?php echo "'".base_url("img/news/grafica.jpg")."'" ?> "application/views/news/grafica.jpg"> -->
							<?php echo $news->img; ?>
						</div>
						<p>
							<?php echo nl2br($news->text); ?>
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
				</div>
		<?php 	
			$this->load->view("parts/footer.php");
		?>
	</div>
</body>
</html>