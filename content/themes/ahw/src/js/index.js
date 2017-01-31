$j(document).ready(function(){

	// Measure screen 
	var screenWidth = $j( window ).width();
	var screenHeight = $j( window ).height();

	// Ajax that 
	$j.ajax({
		type: 'POST',
		url: 'http://localhost/ashley-hall-world/',
		data: {
			'height': screenHeight,
			'width': screenWidth
		},
		success: function(data){
			console.log('data success');
		}
		error: function(err){
			console.log('ajax error: ', err)
		}
	})

});



