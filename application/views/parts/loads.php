<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css universal -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href=<?php echo "'".base_url("img/elements/casa.png")."'" ?> />
<style type="text/css">
	<?php 
		$this->load->view("resources/css/bootstrap.css"); // * 
		$this->load->view("resources/css/bootstrap-theme.css"); // *
		$this->load->view("parts/css/style.php");
		$this->load->view("parts/css/media.php");
		$this->load->view("index/css/fonts.php"); // ** 
		$this->load->view("parts/font-awesome/css/font-awesome.css");

	?>
</style>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"> -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript">
	<?php 
		$this->load->view("resources/js/bootstrap.js"); // * 
	?>
</script>
