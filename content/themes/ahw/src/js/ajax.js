
$j( document ).ready(function() {
	// Measure screen  
	var screenWidth = $j( window ).width();
	var screenHeight = $j( window ).height();

	// Ajax that 
	$j.ajax({
		url: "http://localhost/ashley-hall-world/",
		type: "post",
		data: {
			"height": screenHeight,
			"width": screenWidth
		},
		success: function(data){
			console.log('successfully ajaxed ', screenWidth)
		},
		error: function(err){
			console.log('Ajax Error: ', err)
		}  
	});

});






