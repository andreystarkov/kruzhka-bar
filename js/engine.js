/*

                      /\ \
     __  __  __     __\ \ \____    ____    ___     __     _____      __    ____
    /\ \/\ \/\ \  /'__`\ \ '__`\  /',__\  /'___\ /'__`\  /\ '__`\  /'__`\ /',__\
    \ \ \_/ \_/ \/\  __/\ \ \L\ \/\__, `\/\ \__//\ \L\.\_\ \ \L\ \/\  __//\__, `\
     \ \___x___/'\ \____\\ \_,__/\/\____/\ \____\ \__/.\_\\ \ ,__/\ \____\/\____/
      \/__//__/   \/____/ \/___/  \/___/  \/____/\/__/\/_/ \ \ \/  \/____/\/___/
                                                            \ \_\

*/

$(function () {

    function pendulumEffect(obj) {
        $(obj).css({
            transformOrigin: '20px 10px'
        })
            .transition({
            rotate: '25deg'
        }, 350, function () {
            var mySound = new buzz.sound("bell/bell.ogg");
            mySound.play();
            $(obj).transition({
                rotate: '-20deg'
            }, 300, function () {
                $(obj).transition({
                    rotate: '8deg'
                }, 300, function () {
                    $(obj).transition({
                        rotate: '-5deg'
                    }, 400, function () {
                        $(obj).transition({
                            rotate: '0deg'
                        });
                    });
                });
            });
        });
    }

    function floorSmack(obj) {
        obj.animate({
            'top': '-15px'
        }, 200, function () {
            obj.animate({
                'top': $('.workspace').height()
            }, 1800);
        });
    }

    var destruction = 0;

    $(".link-container").hover(function () {
        $('i', this).animate({
            'color': '#cd462f'
        });
    }, function () {
        $('i', this).animate({
            'color': '#2c2623'
        });
    });

    $('.div').dblclick(function () {
        $('.ac-item-head').fadeTo(0.5, 400);
        $(this).animate({
            'top': '-10px'
        }, 200, function () {

            $(this).animate({
                'top': $('.workspace').height()
            }, 1800, function () {

            });
        })
    });

    /* banket view switcher */

    var viewState = 'pan';

    $('#btn-pan').addClass('act');
    $('#btn-pan').transition({backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});
    $('i', '#btn-view').animate({color: 'rgba(51,29,18,0.3)'});

    $('.controls .bt').hover( function(){
        if( !($(this).hasClass('act')) ){
        $(this).transition({ backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 10px rgba(73,64,55,0.3), 0 2px 0 rgba(73,64,55,0.5)'});
         $('i', this).animate({color: 'rgba(51,29,18,0.7)'});
        }
    }, function(){
        if( !($(this).hasClass('act')) ){
        $(this).transition({backgroundColor: 'rgba(217,203,176,0.9)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.4), 0 2px 0 rgba(73,64,55,0.3)'});
        $('i', this).animate({color: 'rgba(51,29,18,0.3)'});
        }
    });

    $('#btn-pan').click( function(){
        if(viewState != 'pan'){
            $(this).addClass('act');
            $('i', this).animate({color: 'rgba(51,29,18,1)'});
            $('i', '#btn-view').animate({color: 'rgba(51,29,18,0.3)'});
            $('#btn-view').removeClass('act');

            $('#iview').trigger('iView:pause');
            $(this).transition({ backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});
            $('#btn-view').transition({backgroundColor: 'rgba(217,203,176,0.9)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.6), 0 2px 0 rgba(73,64,55,0.3)'});
            $('.box-view').hide();

            $('.box-pan').fadeIn();
            viewState = 'pan';
        }
    });

    $('#btn-view').click( function(){
        if(viewState != 'view'){
            $(this).addClass('act');
            $('#btn-pan').removeClass('act');
            $('i', this).animate({color: 'rgba(51,29,18,1)'});
            $('i', '#btn-pan').animate({color: 'rgba(51,29,18,0.3)'});
            $('#iview').trigger('iView:play');
            $(this).transition({backgroundColor: 'rgba(217,203,176,1)', boxShadow: 'inset 0 0 5px rgba(255,255,255,0.8), 0 2px 0 rgba(73,64,55,0.5)'});
            $('#btn-pan').transition({color: 'rgba(63,58,50,0.9)', backgroundColor: 'rgba(217,203,176,0.9)', boxShadow: 'inset 0 0 15px rgba(73,64,55,0.6), 0 2px 0 rgba(73,64,55,0.3)'});
            $('.box-view').fadeIn();
            $('.box-pan').hide();
            viewState = 'view';
        }
    });

    // bell rings

    $($('.ding-dong')).click(function (e) {
        pendulumEffect($(this));
    });


    $(".panorama-control-left, .panorama-control-right, .panorama-control-pause").hover(function () {
        $(this).fadeTo(300, 1);
    }, function () {
        $(this).fadeTo(200, 0.9);
    });


    $(".pane").css("display", "block");

    $(".tab_content").hide();

    /* menu tabs */

    $("ul.tabs li:first").addClass("active").show();
    $(".tab_content:first").show();

    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active");

        $(this).addClass("active");
        $(".tab_content").hide();
        $(".tab_content").find(".pane").css("display", "block");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        $(activeTab).nanoScroller({
            preventPageScrolling: true
        });
        return false;
    });

    $('.tab_content').hover(function () {
        $(this).addClass('nano');
    });

    $('ul.tabs li').hover(function () {

        $(this).animate({
            boxShadow: '0 2px 10px rgba(70,55,44,0.5)'
        }, 300);
    }, function () {
        $(this).animate({
            boxShadow: '0 0 0 rgba(0,0,0,0)'
        });
    });

    $('.nav-menu a').mouseleave(function () {
        if (!($(this).hasClass('active'))) {
            $(this).animate({
                backgroundColor: 'transparent',  boxShadow: 'inset 0 0 0 rgba(0,0,0,0)'
            });
        }
    });

    $('.nav-menu a').mouseenter(function () {
        if (!($(this).hasClass('active'))) {
            $(this).animate({
                backgroundColor: 'rgba(67,56,45,0.2)', boxShadow: 'inset 0px 0px 6px rgba(0,0,0,0.6)'
            }, 300);
        }
    });

    $('.menu-item').hover(function () {
        $('.cost', this).animate({
            backgroundColor: 'rgba(61,53,45,0.2)',
            opacity: 1
        }, {
            queue: false
        });
        $(this).animate({
            boxShadow: 'inset 0 0 60px rgba(0,0,0,0.15)'
        }, 300);
    }, function () {
        $(this).animate({
            boxShadow: 'inset 0 0 0 rgba(0,0,0,0)',
            'top': '0px'
        });
        $('.cost', this).animate({
            backgroundColor: 'transparent'
        });
    });

});