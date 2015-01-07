$(document).ready(function(){
	<?php 
		$this->load->view("contact_us/js/functions.php");
	?>
	// var onloadCallback = function() {
	//     grecaptcha.render('html_element', {
	//       'sitekey' : 'your_site_key'
	//     });
	//   };
	var verifyCallback = function(response) {
	    alert(response);
	};
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
	grecaptcha.render('example3', {
          'sitekey' : 'your_site_key',
          'callback' : verifyCallback,
          'theme' : 'dark'
        });
	$(document).on("submit",".frmContact",function(e){
		e.preventDefault();
		// enviarEmail(serializeToJson($(this).serializeArray()));
	});
});