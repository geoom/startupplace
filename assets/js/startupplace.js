
/* ***************************** Flex Slider ***************************** */

jQuery(document).ready(function($){
	
	$('#flex1').flexslider();

	$('#flex2').flexslider({
	 	animation: "slide",
	   	controlNav: "thumbnails"
	});
	
	$('.clients-carousel').flexslider({
	    animation: "slide",
		easing: "swing",
	    animationLoop: true,
	    itemWidth: 1,
	    itemMargin: 1,
	    minItems: 1,
	    maxItems: 8,
		controlNav: false,
		directionNav: false,
		move: 2
      });

});


jQuery(document).ready(function($){
	
	/* ****************************** Fancybox ***************************** */

	(function() {

		$('[rel=image]').fancybox({
			type        : 'image',
			openEffect  : 'fade',
			closeEffect	: 'fade',
			nextEffect  : 'fade',
			prevEffect  : 'fade',
			helpers     : {
				title   : {
					type : 'inside'
				}
			}
		});

		$('[rel=image-gallery]').fancybox({
			nextEffect  : 'fade',
			prevEffect  : 'fade',
			helpers     : {
				title   : {
					type : 'inside'
				},
				buttons  : {},
				media    : {}
			}
		});


	})();
	
	
	/* **************************** Back To Top ****************************** */

	jQuery('#footer-menu-back-to-top a').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 300); 
		return false; 
	});
	

	/* ***************************** Tabs ***************************** */	

	$('#myTab a').click(function(e) {
	    e.preventDefault();
	    $(this).tab('show');
	})



		// $('#myTab a:last').tab('show');
		
			
});

/* **************************** Tooltips *************************** */

jQuery(document).ready(function() {

    $('.tooltips').tooltip({
      selector: "a[rel=tooltip]"
    })

});


/* ****************************** Parallax ****************************** */

jQuery(document).ready(function($){
	
	$('#da-slider').cslider({
		autoplay	: true,
		bgincrement	: 50
	});

});

/* ***************************** Image Overlay *************************** */

jQuery(document).ready(function($) {
	
	$('.picture a').hover(function () {
		$(this).find('.image-overlay-zoom, .image-overlay-link').stop().fadeTo('fast', 1);
	},function () {
		$(this).find('.image-overlay-zoom, .image-overlay-link').stop().fadeTo('fast', 0);
	});
	
});

/* ***************************** Isotope ****************************** */

jQuery(document).ready(function($) {
	
	$('#portfolio-wrapper').imagesLoaded(function() {
		
		var $container = $('#portfolio-wrapper');
			$select = $('#filters select');

		// initialize Isotope
		$container.isotope({
		// options...
		resizable: false, // disable normal resizing
		// set columnWidth to a percentage of container width
	  	masonry: { columnWidth: $container.width() / 12 }
		});

		// update columnWidth on window resize
		$(window).smartresize(function(){
		
			$container.isotope({
			// update columnWidth to a percentage of container width
			masonry: { columnWidth: $container.width() / 12 }
			});
		});


		$container.isotope({
			itemSelector : '.portfolio-item'
		});

		$select.change(function() {
			
			var filters = $(this).val();

				$container.isotope({
					filter: filters
				});
			
			});

			var $optionSets = $('#filters .option-set'),
		  	$optionLinks = $optionSets.find('a');

		  	$optionLinks.click(function(){
			
			var $this = $(this);
			// don't proceed if already selected
			if ( $this.hasClass('selected') ) {
		  		return false;
			}
			var $optionSet = $this.parents('.option-set');
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');

			// make option object dynamically, i.e. { filter: '.my-filter-class' }
			var options = {},
				key = $optionSet.attr('data-option-key'),
				value = $this.attr('data-option-value');
			// parse 'false' as false boolean
			value = value === 'false' ? false : value;
			options[ key ] = value;
			if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
			  // changes in layout modes need extra logic
			  changeLayoutMode( $this, options )
			} else {
			  // otherwise, apply new options
			  $container.isotope( options );
			}

			return false;
			
		  });
		
	});
	
});

$(document).ready(function() {

/***************** go to position config ************************/

	$('a[href^=#]:not([href=#])').click(function() {
		widget = $(this).closest('div.widget');
		console.log(widget.attr("id"));	
		if(widget.attr("id")=="menuFloatAutomatic"){
		    var $target = $(this.hash);
		    $target = $target.length && $target
		    || $('[name=' + this.hash.slice(1) +']')
		    if ($target.length) {
		      var targetOffset = $target.offset().top
		      $('html,body')
		      .animate({scrollTop: targetOffset}, 500)
		      return false;
		    }
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