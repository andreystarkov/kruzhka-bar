(function ($) {
    $.fn.extend({

        ac: function (options) {
            var settings = $.extend({ expandedItem: 0, expandSpeed: 200, toggle: false, expandText: '&ndash;', collapseText: '+', buttons: true, hiddenItem: -1, itemsOrder: [] }, options);
            return this.each(function () {

                var expandedItem = settings.expandedItem;
                var speed = settings.expandSpeed;
                var expandText = settings.expandText;
                var collapseText = settings.collapseText;
                var isToggle = settings.toggle;

                var ac = $(this);
                if (!ac.hasClass('ac'))
                    ac.addClass('ac');

                if (settings.itemsOrder != null && settings.itemsOrder != undefined && settings.itemsOrder.length > 0) {
                    if (settings.itemsOrder.length != ac.find('.ac-item').length) {
                        alert('Parameter value mismatch with total items');
                    }
                    else {
                        var items = ac.find('.ac-item').clone(true);
                        ac.find('.ac-item').remove();

                        $(settings.itemsOrder).each(function () {
                            ac.append(items.eq(this));
                        });
                    }
                }
                $('.ac-item', ac).each(function () {
                    var body = $(this).find('.ac-item-body');
                    var h = body.outerHeight();
                    body.data('h', h);
                    $(this).find('.ac-item-head').addClass('ac-border-bottom');
                    body.addClass('ac-border-bottom');
                    if (settings.buttons)
                        $(this).find('.ac-item-head-container').prepend('<div class="ac-icon"><span>' + collapseText + '</span></div>');
                });
                if (settings.hiddentItem > -1) {
                    var hiddenItem = $('.ac-item', ac).eq(settings.hiddenItem).hide();

                    hiddenItem.find('.ac-item-head', ac).last().removeClass('ac-border-bottom');
                    hiddenItem.find('.ac-item-body', ac).last().removeClass('ac-border-bottom');
                }
                $('.ac-item .ac-item-head', ac).last().removeClass('ac-border-bottom');
                $('.ac-item .ac-item-body', ac).last().removeClass('ac-border-bottom');
                $('.ac-item:first').addClass('ac-item-first');
                $('.ac-item:last').addClass('ac-item-last');
                $('.ac-item', ac).removeClass('expanded').addClass('collapsed');
                $('.ac-item.collapsed .ac-item-body', ac).css({ height: 0 });
                expandItem($('.ac-item', ac).eq(expandedItem));

				$('.ac-item-body').css('height', '0');
				
                  $('.ac-item.collapsed').hover(function() {
                     $(this).css({'z-index': '999999'});
                     $('.ac-heading', this).animate({color: 'rgba(255,255,255,1)'}, {duration: 300, queue: false}); 
                     $(this).animate({boxShadow: '0 8px 22px rgba(0,0,0,0.6)'}, {duration: 300, queue: false}); 
                  /*   $(this).transition({ scale: 1.01 }); */
                }, function(){
                    /*   $(this).transition({ scale: 1 }); */
                       $('.ac-heading', this).animate({color: 'rgba(255,255,255,0.8)'});
                       $(this).animate({boxShadow: '0 5px 10px rgba(0,0,0,0.4)'}, {duration: 300}); 
                       $(this).css({'z-index': '8'});
                });
                

                $('.ac-item-head-container', ac).click(function () {
                    var currentItem = $(this).parents('.ac-item');
                    var previousItem = ac.find('.ac-item.expanded');
                    var isExpanded = currentItem.hasClass('expanded');
                    if (!isToggle) {
                        if (!isExpanded) {

                            collapseItem(previousItem);
                            expandItem(currentItem);

                        }
                    }
                    else {
                        if (isExpanded)
                            collapseItem(currentItem);
                        else
                            expandItem(currentItem);
                    }
                });
 
                function expandItem(item) {
                    var body = item.find('.ac-item-body');
                    var h = body.data('h');
					item.find("ul.tabs li:first").addClass("active").show(); 
					item.find(".tab_content:first").show(); 
                    body.animate({ height: h }, speed, function () {
                        item.removeClass('collapsed').addClass('expanded').find('.ac-icon span').html(expandText);
                     
                    });
                    
                }
                function collapseItem(item) {
                    var body = item.find('.ac-item-body');
                    body.animate({ height: 0 }, speed, function () {

                        item.removeClass('expanded').addClass('collapsed').find('.ac-icon span').html(collapseText);
                      
                    });

                }
            });
        }
    });
})(jQuery);