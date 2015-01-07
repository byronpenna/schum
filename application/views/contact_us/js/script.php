$(document).ready(function(){
	<?php 
		$this->load->view("contact_us/js/functions.php");
	?>
	function serializeToJson(a){
		var o = {};
		$.each(a, function() {
		   if (o[this.name]) {
		       if (!o[this.name].push) {
		           o[this.name] = [o[this.name]];
		       }
		       o[this.name].push(this.value || '');
		   } else {
		       o[this.name] = this.value || '';
		   }
		});
		return o;
	}
	$(document).on("submit",".frmContact",function(e){
		e.preventDefault();
		enviarEmail(serializeToJson($(this).serializeArray()));
	});
});