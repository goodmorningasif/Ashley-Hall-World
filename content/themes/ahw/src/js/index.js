$j(function(){

	// Measure screen  
	var screenWidth = $j( window ).width();
	var screenHeight = $j( window ).height();

	// Ajax that 
	$j.post('http://localhost/ashley-hall-world/', 
		{ width: screen.width, height: screen.height },
		function(json){
			if (json.outcome == 'success') {
				console.log('success');
			} else {
				console.log('ajax fail');
			}
		}, 'json');
});



