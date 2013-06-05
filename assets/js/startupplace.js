
$(document).ready(function() {

/***************** go to position config ************************/

	$('a[href^=#]:not([href=#])').click(function() {
	    var $target = $(this.hash);
	    $target = $target.length && $target
	    || $('[name=' + this.hash.slice(1) +']')
	    if ($target.length) {
	      var targetOffset = $target.offset().top
	      $('html,body')
	      .animate({scrollTop: targetOffset}, 500)
	      return false;
	    }
	});

/*************** static positon toggle config *******************/

	var headOffset = jQuery('#menuFloatAutomatic').offset();
	jQuery(window).scroll(function() {
	    if(jQuery(window).scrollTop() < headOffset.top) {
	        jQuery('#menuFloatAutomatic').css({ position: "static"}); 
	    } else {
	        jQuery('#menuFloatAutomatic').css({ position: "fixed", top: "0px" }); 
	    }   
	});

});