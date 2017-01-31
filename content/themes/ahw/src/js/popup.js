/**
* VIDEO POPUP
* 
*/

// Open popup
$j( '.hover-bttn' ).click(function(e){
	e.preventDefault();
  $j( '#popup-overlay' ).fadeIn("slow",function(){
    $j( '#map-popup' ).fadeIn("slow", function(){
      
    })
  });

  console.log($j(this).attr('id'), ' was clicked');
});

// Close popup
$j( '.close-bttn' ).click(function(e){
	e.preventDefault();
  $j( '#map-popup' ).fadeOut("slow",function(){
    $j( '#popup-overlay' ).fadeOut("slow", function(){
      
    })
  });
  console.log($j(this).attr('class'), ' was clicked');
});