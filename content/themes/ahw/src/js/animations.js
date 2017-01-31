$j = jQuery.noConflict();

$j( document ).ready(function() {

  /**
  * Define Variables 
  */

	var paths = { href: window.location.href, assets: 'content/themes/ahw/assets/' };
	var animations = [ 
		{
			still: paths.href + paths.assets + 'still-violin.gif',
			gifs: paths.href + paths.assets + 'gif-violin.gif',
			id: "violin"
		}, {
			still: paths.href + paths.assets + 'still-bball.gif',
			gifs: paths.href + paths.assets + 'gif-bball.gif',
			id: "bball"
		}, {
			still: paths.href + paths.assets + 'still-gate.gif',
			gifs: paths.href + paths.assets + 'gif-gate.gif',
			id: "gate1"
		}, {
			still: paths.href + paths.assets + 'still-swimmer.gif',
			gifs: paths.href + paths.assets + 'gif-swimmer.gif',
			id: "swimmer"
		}, {
			still: paths.href + paths.assets + 'still-watercan.gif',
			gifs: paths.href + paths.assets + 'gif-watercan.gif',
			id: "watercan"
	  }, {
			still: paths.href + paths.assets + 'still-bear.gif',
			gifs: paths.href + paths.assets + 'gif-bear.gif',
			id: "bear"
		}, {
			still: paths.href + paths.assets + 'still-gate2.gif',
			gifs: paths.href + paths.assets + 'gif-gate2.gif',
			id: "gate2"
		}
	];



  /**
  * GIF SCHEDULER
  * 
  * Recursive function loops through array of gifs objects
  * and swaps out still images with animated gifs.
  */

  var grow = function( ) {

  	$j('.hover-bttn')
  	  .animate({
  		  width: '+=3px',
  		  height: '+=3px',
  		  right: '-=1.5px',
  		  top: '-=1.5px',
  		  opacity: 0.4
	  	},'fast')
	  	.delay(600)
	  	.animate({
	  		width: '-=3px',
	  		height: '-=3px',
  		  right: '+=1.5px',
  		  top: '+=1.5px',
  		  opacity: 0.6
	  	},'fast');

  };
  
  setInterval(function() {
  	grow();
  }, 4000);



  /**
  * GIF SCHEDULER
  * 
  * Recursive function loops through array of gifs objects
  * and swaps out still images with animated gifs.
  * Current version only points back to the same image, 
  * which restarts the gif. 
  */


	// Swapper function
	var srcSwapper = function(counter, timer){
    
    $j('#' + animations[counter].id)
      .attr('src', animations[counter].gifs);

    animationScheduler(++counter, timer)
	};

 
  // Scheduler function
  var animationScheduler = function(counter, timer) {
  
    // base case -> if counter is greater than array lenth, restart animation
    if (counter >= animations.length) {
    	animationScheduler(0, 5000);
    	return;
    }

    // recursive case -> go to swapper function
    setTimeout(srcSwapper.bind(null, counter, timer), timer)
  }


  // Initiate function
  animationScheduler(0, 8000);
	


  /**
  * HOVER ANIMIATION
  * 
  * Activates animation on hover
  */
   
  $j( '.gifs' ).hover(function(){
    
    var current = $j(this).attr('id');

    for (var key in animations) {
    	if (animations[key].id === current) {
       
        $j( '#' + current ).attr('src', animations[key].gifs);
    		// console.log('currently hovering over ', $j(this).attr('id'));
    	}
    }
  });

});

