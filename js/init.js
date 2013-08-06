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

  		$('.tooltip').tooltipster({position: 'bottom', animation: 'swing', arrow: true, speed: 800});

  		$('.nano').nanoScroller({ preventPageScrolling: true, scroll: 'top', alwaysVisible: true });

		$("img.panorama").panorama({
		    auto_start: 0,
			start_position: 3197
		});

  		/* banket view switcher */

  		var viewState = 'pan';

  		$('#btn-pan').addClass('act');
  		$('#btn-pan').transition({backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});

  		$('.controls .bt').hover( function(){
  			if( !($(this).hasClass('act')) ){
  			$(this).transition({ backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 10px rgba(73,64,55,0.3), 0 2px 0 rgba(73,64,55,0.5)'});
  			}
  		}, function(){
  			if( !($(this).hasClass('act')) ){
			$(this).transition({backgroundColor: 'rgba(217,203,176,0.8)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.4), 0 2px 0 rgba(73,64,55,0.3)'});
			}
  		});

  		$('#btn-pan').click( function(){
  			if(viewState != 'pan'){
  				$(this).addClass('act');
  				$('#btn-view').removeClass('act');

  				$(this).transition({ backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});
  				$('#btn-view').transition({backgroundColor: 'rgba(217,203,176,0.8)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.6), 0 2px 0 rgba(73,64,55,0.3)'});
  				$('.box-view').hide();
  				$('.box-pan').fadeIn();
  				viewState = 'pan';
  			}
  		});

  		$('#btn-view').click( function(){
  			if(viewState != 'view'){
  				$(this).addClass('act');
  				$('#btn-pan').removeClass('act');

  				$(this).transition({backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});
  				$('#btn-pan').transition({backgroundColor: 'rgba(217,203,176,0.8)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.6), 0 2px 0 rgba(73,64,55,0.3)'});
  				$('.box-view').fadeIn();
  				$('.box-pan').hide();
  				viewState = 'view';
  			}
  		});
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

