function validateEmail(email) { 
  // http://stackoverflow.com/a/46181/11236
  
   
    var re2 = /^\S+@\S+$/;
	return re2.test(email);
	
}

function logowanieadmin()
{
	alert("test");
}
function onEmailButton()
		{
		var email1 = $("#email-jumbotron").val();
		  if (validateEmail(email1)) {
			$("#submodal").modal();
			window.location = (""+window.location).replace(/#[A-Za-z0-9_]*$/,'')+"#jumbotron"
		  }
			
		} 
		
function sendContactEmail()
{
	/*$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
        
        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});*/
	var email2 = $("#email-kontakt").val();
	if (validateEmail(email2))
	{
		$("#kontaktmodal").modal();
		window.location = (""+window.location).replace(/#[A-Za-z0-9_]*$/,'')+"#kontakt"
		document.getElementById("kontakt-form").reset();
	}
	
}
		


	
function initialize()
 {
	 var cLodz = new google.maps.LatLng(51.761383, 19.491881);
	 var cWarszawa = new google.maps.LatLng(52.186124, 21.026006);
	 var cWroclaw = new google.maps.LatLng(51.109491, 17.024642);
	 var cPoznan = new google.maps.LatLng(52.406601, 16.933887);
	 var cKrakow = new google.maps.LatLng(50.031073, 19.967796);
	 
	var mapLodzProp = {
	center: cLodz,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var mapWroclawProp = {
	center: cWroclaw ,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var mapWarszawaProp = {
	center: cWarszawa,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var mapPoznanProp = {
	center: cPoznan,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var mapKrakowProp = {
	center: cKrakow,
	zoom:14,
	scrollwheel:false,
	draggable:true,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	
	var map = new google.maps.Map(document.getElementById("LodzGoogle"),mapLodzProp);
	var map2 = new google.maps.Map(document.getElementById("WroclawGoogle"),mapWroclawProp);
	var map3 = new google.maps.Map(document.getElementById("WarszawaGoogle"),mapWarszawaProp);
	var map4 = new google.maps.Map(document.getElementById("PoznanGoogle"),mapPoznanProp);
	var map5 = new google.maps.Map(document.getElementById("KrakowGoogle"),mapKrakowProp);
	
	var marker = new google.maps.Marker({position:cLodz,});
	var marker2 = new google.maps.Marker({position:cWroclaw,});
	var marker3 = new google.maps.Marker({position:cWarszawa,});
	var marker4 = new google.maps.Marker({position:cPoznan,});
	var marker5 = new google.maps.Marker({position:cKrakow,});
	
	marker.setMap(map);
	marker2.setMap(map2);
	marker3.setMap(map3);
	marker4.setMap(map4);
	marker5.setMap(map5);

	
}


