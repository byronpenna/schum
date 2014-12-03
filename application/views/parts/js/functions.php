// menu 	
	function removeOpenMenu(li){
		cerrarAbiertos();
		li.addClass("open");
	}
	function cerrarAbiertos(){
		$(".nav li").each(function(i,value){
			$(this).removeClass("open");
		});
	}
// generic 
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
// maps 
	function newMarker(location,data){
		if(data.icon == undefined){
			data.icon = "";
		}
		var marker = new google.maps.Marker({
			position: location,
			title: "casa de prueba",
			icon: data.icon
		});
		return marker;
	}
	function newPopUp(varsContent){
		var popUp = new google.maps.InfoWindow({
		    content: "\
		    		<div class='popUpMap'>\
		    			<b>Calle:</b> "+varsContent.calle+" <br>\
		    		</div>",
		    height: 100
		});
		return popUp;
	}