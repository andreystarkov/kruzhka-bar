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


	    /* modals init */

	    $('#btn-int').click(function (e) {

	        $("#modal-int").modal({
	            minWidth: '565px',
	            maxWidth: '565px',
	            maxHeight: '700px',
	            onOpen: function (dialog) {
	                dialog.overlay.fadeIn(300, function () {
	                    dialog.data.show();
	                    dialog.container.fadeToggle(300, function () {});
	                });
	            }
	        });
	        return false;
	    });

	    $('.btn-map').click(function (e) {

	        $("#modal-map").modal({
	            minWidth: '960px',
	            maxHeight: '500px',
	            containerCss: 'overflow:hidden !important;',
	            onOpen: function (dialog) {
	                dialog.overlay.fadeIn(300, function () {
	                    dialog.data.show();
	                    dialog.container.fadeToggle(300, function () {

	                    });
	                });
	            }
	        });
	        return false;
	    });

	    $('.btn-map-b').click(function (e) { 

	        $("#modal-map-b").modal({
	            minWidth: '960px',
	            maxHeight: '500px',
	            containerCss: 'overflow:hidden !important;',
	            onOpen: function (dialog) {
	                dialog.overlay.fadeIn(300, function () {
	                    dialog.data.show();
	                    dialog.container.fadeToggle(300, function () {

	                    });
	                });
	            }
	        });
	        return false;
	    });
  	});

