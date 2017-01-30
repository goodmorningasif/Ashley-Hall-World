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
  		  opacity: 0.8
	  	},"fast")
	  	.animate({
	  		width: "-=3px",
	  		height: "-=3px",
  		  right: "+=1.5px",
  		  top: "+=1.5px",
  		  opacity: 1
	  	},"fast");

    console.log('grow end')
  };
  
  setInterval(function() {
  	grow();
  }, 4000);

  // scheduled animations 


  // animations on hover, pause all other  activiyt

});

