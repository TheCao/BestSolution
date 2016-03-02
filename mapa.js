//<script type="text/javascript">
	
	function setMap()
	{
		var pktWroclaw = new google.maps.LatLng(51.761416, 10.491974);
		google.maps.event.addDomListener(window, 'load', initializeMap);
		
	}
	function initializeMap() {
	var mapProp = {
	center:pktWroclaw,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var map = new google.maps.Map(document.getElementById("WroclawGoogle"),mapProp);

	var marker = new google.maps.Marker({
	position:pktWroclaw,
	});

	marker.setMap(map);
	}

	
//</script>