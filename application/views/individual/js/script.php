<script type="text/javascript">


	$(document).on("click",".btnViewMore",function(){
		// $(".testi2").fadeIn("slow");
		// $(this).addClass("active");
		if($(this).is(".active")){
			console.log("ya esta activo");
			$(this).html("VIEW TESTIMONIALS");
			$(".testi2").css("display","none");
			$(this).removeClass("active");
		}else{
			console.log("esta inactivo");
			$(this).html("HIDE TESTIMONIALS");
			$(".testi2").css("display","block");
			$(this).addClass("active");
		}
	});
				
</script>
