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
</head>
<body>
	<div class="container-fluid">
		<?php $this->load->view("parts/header.php") ?>
		<div class="row container-fluid sliderNew" >
			<?php $this->load->view("parts/menu.php") ?>
		</div>
		<div class="bodyContainer">
			<!-- ############### --> 
				<div class="container contact">
				    <div class="row">
				        <div class="col-md-4">
				            <form>
				            <legend><span class="glyphicon glyphicon-globe"></span> CONTACT</legend>
				            <p>
					            To contact us directly, use the following information.
					            General Inquiries:
				            </p>
				            <address>
				                <strong>Mailing Address:</strong><br>
				                Schumacher Realty ltd.<br>
				                PO BOX 226, 530 Main St.<br>
				                Outbank, MB R0E 1J0<br>
				                Canada
				                <!-- <abbr title="Phone">
				                    P:</abbr>
				                (123) 456-7890 -->
				            </address>
				            <address>
				                <strong>Email Address</strong><br>
				                <a href="mailto:info@driventofinish.com">info@driventofinish.com</a>
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
					                    <div class="col-md-12">
					                        <button type="submit" class="btn btnSend pull-right" id="btnContactUs">Send Message</button>
					                    </div>
					                </div>
					                <div class="g-recaptcha" data-sitekey="6LcpHAATAAAAABswjmSR8V7PrJ-fsydsB_nQPuRk"></div>
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
	</div>
</body>
</html>