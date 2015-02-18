<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 50% }
    </style>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
	<script type="text/javascript">
		function initialize(){
			var mapOptions = {
		      center: new google.maps.LatLng(-34.397, 150.644),
		      zoom: 8,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		    var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
		    
		}
	</script>
</head>
<body >
<div class="hol" onload="initialize()">
	<div class="col-md-12">
		<div id="map_canvas" style="width:100%; height:100%">
								
		</div>	
	</div>
	
</div>
	
					

</body>
</html>