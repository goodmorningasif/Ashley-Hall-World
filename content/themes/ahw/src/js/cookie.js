$j( document ).ready(function() {
	// Measure screen  
	var values = {}
	values.width = $j( window ).width();
	values.height = $j( window ).height();
	values.expire = 0;
	values 


	// make cookie 
	document.cookie = "ahwWidth=" + values.width;
	document.cookie = "ahwHeight=" + values.height;
	console.log("cookie set");

});







