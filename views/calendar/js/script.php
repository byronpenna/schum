<script type="text/javascript">
	$(document).ready(function(){
		<?php 
			$this->load->view("calendar/js/functions.php");
		?>
		// plugins 
			$(".MiSelectChulo").selecter();
		// eventos
			// click
				$(document).on("click",".searchButton",function(){
		  			searchBar();
		  		});

	});
</script>