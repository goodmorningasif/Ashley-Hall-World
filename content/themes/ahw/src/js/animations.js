$j = jQuery.noConflict();

$j(document).ready(function() {

  // growing, shrinking buttons  

  var grow = function( ) {

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

  };
  
  setInterval(function() {
  	grow();
  }, 4000);

  // scheduled animations  

  var gifSchedule = function() {
  	
  	var paths = {
  		href: window.location.href,
      assets: 'content/themes/ahw/assets/'
  	};

  	var animations = {} 
  	animations.violin = {
  		still: paths.href + paths.assets + 'still-violin.gif',
  		gifs: paths.href + paths.assets + 'gif-violin.gif'
  	}
  	animations.bball = {
  		still: paths.href + paths.assets + 'still-bball.gif',
  		gifs: paths.href + paths.assets + 'gif-bball.gif'
  	}
  	animations.swimmer = {
  		still: paths.href + paths.assets + 'still-swimmer.gif',
  		gifs: paths.href + paths.assets + 'gif-swimmer.gif'
  	}
    animations.watercan = {
  		still: paths.href + paths.assets + 'still-watercan.gif',
  		gifs: paths.href + paths.assets + 'gif-watercan.gif'
    }
  	animations.bear =  {
  		still: paths.href + paths.assets + 'still-bear.gif',
  		gifs: paths.href + paths.assets + 'gif-bear.gif'
  	}


  // loop through 
  }



  // animations on hover, pause all other  activiyt

});

