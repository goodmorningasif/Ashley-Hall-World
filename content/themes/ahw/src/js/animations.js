/**
* Animations
* 
* For site animations & transformations
*/

$j = jQuery.noConflict();

$j( document ).ready(function() {

  /**
  * Define Variables 
  */

  var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
  var isEdge = !!navigator.userAgent.match(/Windows\ NT\ 10/);

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
			still: paths.href + paths.assets + 'still-chalkboard.gif',
			gifs: paths.href + paths.assets + 'gif-chalkboard.gif',
			id: "chalkboard"
		}, {
      still: paths.href + paths.assets + 'still-swings.gif',
      gifs: paths.href + paths.assets + 'gif-swings.gif',
      id: "swings"
    }, {
      still: paths.href + paths.assets + 'still-flags.gif',
      gifs: paths.href + paths.assets + 'gif-flags.gif',
      id: "flags"
    }, {
      still: paths.href + paths.assets + 'still-bear.gif',
      gifs: paths.href + paths.assets + 'gif-bear.gif',
      id: "bear"
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
  		  top: '-=1.5px',
        right: '-=1.5px',
        width: '+=3px',
        height: '+=3px',
  		  opacity: 0.4
	  	},'fast')
	  	.delay(600)
	  	.animate({
  		  top: '+=1.5px',
        right: '+=1.5px',
        width: '-=3px',
        height: '-=3px',
  		  opacity: 0.6
	  	},'fast');

  };
  
  if (isIE11 || isEdge) {
    console.log("For best experience, please upgrade to a modern browser!")
  } else {
    setInterval(function() {
    	grow();
    }, 4000);

  }



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

