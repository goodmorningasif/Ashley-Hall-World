$j( document ).ready(function() {
	// Measure screen  
	var values = {}
	values.width = $j( window ).width();
	values.height = $j( window ).height();
	values.expire = 0;


	// make cookie  
	document.cookie = "ahwWidth=" + values.width;

});







