function enviarEmail(frm){
	$.ajax({
		data:{
			frm: JSON.stringify(frm)
		},
		url: 	<?php echo "'".site_url('contact_us/sendMail')."'" ?>,
		type: 	"POST",
		success: function(data){
			if(data){
				alert("Enviado correctamente");
			}
			
		}
	});
}