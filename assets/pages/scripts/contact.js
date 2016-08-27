var Contact = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){var comp_address_js = $("#comp_address_js").val();var comp_phone_js = $("#comp_phone_js").val();
			  map = new GMaps({
				div: '#gmapbg',
				lat: -13.004333,
				lng: -38.494333
			  });
			   var marker = map.addMarker({
		            lat: -13.004333,
					lng: -38.494333,
		            title: 'Loop,',
		            infoWindow: {
		                content: "<b>Rent Tracker.</b>"+ comp_address_js + "<br>"+comp_phone_js
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();

jQuery(document).ready(function() {    
   Contact.init(); 
});

