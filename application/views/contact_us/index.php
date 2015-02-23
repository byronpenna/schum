<?php 
	$datos["opMenu"] = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact - Schumacher Realty</title>
	<!-- load --> 
    	<?php $this->load->view("parts/loads.php",$datos); ?>
    <script type="text/javascript">
    	<?php
    		$this->load->view("parts/js/script.php");
    		$this->load->view("contact_us/js/script.php");
    	?>
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
	        $("#recaptcha-anchor-label").text("Something different.");
	    });
	</script>
	<style type="text/css">
		<?php 
			$this->load->view("contact_us/css/style.php");
		?>
	</style>
	 <script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
	<style type="text/css" media="screen">
    		.amostrar{
					width:100%;
					margin-left:0px;
					z-index:900000000;
					opacity:1;
					font-size:1.4em;
				}
				.nosubrayar{
				text-decoration: none !important;
			}



@media(min-width: 100px) and (max-width:767px){
	/*iframe{
		margin-top: -12%;
	}	

	iframe .rc-anchor-checkbox-label {
		font-family: Roboto;
		font-size: 12px;
		font-weight: 400;
		line-height: 17px;
		width: 85px;
	}*/

	.btnSubmit1{
		display:none;
	}

	.btnSubmit2{
		display: block;
		margin-top: 2.5%;
		/* margin-left: -10%; */
		position: absolute;
	}

	.frmContact{
		padding-bottom: 15%;
	}


	.rc-anchor {
		border-radius: 3px;
		box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
		-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
		-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.08);
		height: 74px;
		width: 90% !important;
	}
		
		.contact {
	margin-top: 0;
	}
}


	@media(min-width: 769px) and (max-width:800px){
		.btnSubmit1{
			display: none;
		}
		
		.btnSubmit2{
			margin-top: -8%;
		}
		
	}

	@media(width:768px){
		.btnSubmit1{
			display: none;
		}
		
		.btnSubmit2{
			margin-top: -8%;
		}
		

		.navbar-default .navbar-nav > li > a {
                            font-size: 13px;
                        }
	}

	</style>
</head>
<body>
	<?php 
			$this->load->view("parts/loader-global.php");
	?>

	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew" style="padding:0px;height:0px;" >
			<?php $this->load->view("parts/menushow.php") ?>

		</div>


		<article class="conteImgInternas">
				<img src="<?php echo base_url('img/elements/imgInternas.png'); ?>">
			</article>			
		<div class="bodyContainer">
			<?php $this->load->view("parts/menuresponsive.php") ?>
			<!-- ############### --> 
				<div class="container contact">
				    <div class="row">
				        <div class="col-md-4">
				            <form>
					            <legend>CONTACT</legend>
					            <p>
						            To Contact Us Directly, Use The Following Information.
						            <br>
						            <br>
						            <b>General Inquiries:</b>
						            <br>
						            <a class='nosubrayar' href="mailto:info@driventofinish.com">Info@DrivenToFinish.com</a>
					            </p>
					            <address>
					                <strong>Mailing Address:</strong><br>
					                Schumacher Realty Ltd.<br>
					                PO BOX 226, 530 Main St.<br>
					                Oakbank, MB R0E 1J0<br>
					                Canada
					                <!-- <abbr title="Phone">
					                    P:</abbr>
					                (123) 456-7890 -->
					            </address>
				            </form>
				        </div>
				        <div class="col-md-8">
				            <div class="well well-sm">
                        <!-- class='frmContact' -->
                        <!-- action=<?php echo site_url("prueba") ?> method='POST' -->
				                <form  class="frmContact">
					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label for="name">Name</label>
					                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
					                        </div>
					                        <div class="form-group">
					                            <label for="email">Email Address</label>
					                            <div class="input-group">
					                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
					                                </span>
					                                <input type="email" name='emailT' class="form-control" id="email" placeholder="Enter email" required="required" /></div>
					                        </div>
					                        <div class="form-group">
					                            <label for="subject">Subject</label>
					                            <input type="text" name='subject' class='form-control'>
					                            <!-- <select id="subject" name="subject" class="form-control" required="required">
					                                <option value="na" selected="">Choose One:</option>
					                                <option value="service">General Customer Service</option>
					                                <option value="suggestions">Suggestions</option>
					                                <option value="product">Product Support</option>
					                            </select> -->
					                        </div>
					                        <div class="form-group">
					                            <label for="name">Message</label>
					                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
					                        </div>
					                    </div>
					                    <div class="col-md-12 btnSubmit1">
					                        <button type="submit" class="btn btnSend pull-right" id="btnContactUs">Send Message</button>
					                    </div>

					                </div>
					                <div class="g-recaptcha" data-sitekey="6LcpHAATAAAAABswjmSR8V7PrJ-fsydsB_nQPuRk"></div>
					                <button type="submit" class="btn btnSend pull-right btnSubmit2" id="btnContactUs">Send Message</button>
				                </form>
				            </div>
				        </div>
				        
				    </div>
				</div>

			<!-- -->
		</div>
		<?php 	
			$this->load->view("parts/footer.php");
		?>
		<?php $this->load->view("parts/footerResponsivo.php") ?>
	</div>
</body>
</html>