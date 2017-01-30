$j = jQuery.noConflict();

$j(document).ready(function() {

  // growing, shrinking buttons  
  var grow = function() {
    
    var w = $j(".hover-bttn").css("width"); 

  	$j(".hover-bttn")
  	  .animate({
  		  width: "+=3px",
  		  height: "+=3px",
  		  right: "-=1.5px",
  		  top: "-=1.5px",
  		  opacity: 0.4
	  	},"fast")
	  	.delay(600)
	  	.animate({
	  		width: "-=3px",
	  		height: "-=3px",
  		  right: "+=1.5px",
  		  top: "+=1.5px",
  		  opacity: 0.6
	  	},"fast");

    console.log('grow end')
  };
  
  setInterval(function() {
  	grow();
  }, 4000);

  // scheduled animations 


  // animations on hover, pause all other  activiyt

});

