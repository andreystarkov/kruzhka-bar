	$(function() {      

	   $("body").queryLoader2({	
	        percentage: true,
	        barHeight: 1,
	        completeAnimation: "fade",
	        minimumTime: 100
	    });

		$('#button-less').ac({expadSpeed: 5000, buttons: false, toggle: false });

		$('#iview').iView({ pauseTime: 7000, directionNav: false, controlNav: true, captionSpeed: 2000, 
			captionEasing: 'easeInOutSine', timerX: 20, 
			controlNavHoverOpacity: 0, timer: 'Pie', timerY: 20 });
  
  		$('.tooltip-bottom').tooltipster({position: 'bottom', animation: 'fall', speed: 500});

  		$('.tooltip-top').tooltipster({position: 'top', animation: 'swing', arrow: false, speed: 500});

  		$('.nano').nanoScroller({ preventPageScrolling: true, scroll: 'top', alwaysVisible: true });

  	});

