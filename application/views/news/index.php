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
					font-size:1.4em;
				}


				@media(min-width: 501px) and (max-width:767px){

					.ourStoryDescription > h2 {
						font-size: 1.6em;
					}

					.font > p {
						width: 97%;
					}

					.sliderNew{
						margin-top: 0 !important;
					}

					.bodyContainer{
						margin-top: 10%;
					}
				}


				@media(min-width: 321px) and (max-width: 375px){
					.bodyContainer{
						margin-top: 0%;
					}


					.ourStoryDescription > h2 {
					color: #be0000;
					font-size: 1.6em;
					}
				}


				@media(min-width: 376px) and (max-width:434px){
					.bodyContainer{
						margin-top: 0%;
					}	

					.ourStoryDescription > h2 {
					color: #be0000;
					font-size: 1.6em;
					}
				}

				@media(min-width: 435px) and (max-width:500px){
					.bodyContainer{
						margin-top: 0%;
					}	

					.ourStoryDescription > h2 {
					color: #be0000;
					font-size: 1.5em;
					}
				}
				
				@media(min-width: 100px) and (max-width: 320px){
					

					.ourStoryDescription > h2 {
					color: #be0000;
					font-size: 1.6em;
					}
				}


				       @media (width:768px){
                                
.navbar-default .navbar-nav > li > a {
                            font-size: 13px;
                        }



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
			<?php $this->load->view("parts/menuresponsive.php") ?>
		</div>
		<article class="conteImgInternas">
				<img src="<?php echo base_url('img/elements/imgInternas.png'); ?>">
			</article>			
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
		<?php $this->load->view("parts/footerResponsivo.php") ?>
	</div>
</body>
</html>