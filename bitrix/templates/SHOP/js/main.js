$(document).ready(function () {

    var k = 0.25,
        $header = $('#header'),
        headerHeight = $header.height(),
        contentMinHeight = $(window).height() - ($('header').height() + $('footer').height() + parseInt($('footer').css('padding-top')) + parseInt($('footer').css('padding-bottom'))),
        $logo = $('#logo'),
        touch = $('#touch-menu'),
        menu = $('nav > ul'),
        logoHeight = $('.logo').height(),
        contentWidth = $('.content').width(),
        itemTitle = $('a.item .title');

    //  стрелка скролла вверх страницы
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', //  ID элемента
            topDistance: '400', // расстояние после которого появится кнопка (px)
            topSpeed: 500, // скорость переноса (миллисекунды)
            animation: 'fade', // вид анимации: fade, slide, none
            animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
            animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
            scrollText: ' ', // текст
            activeOverlay: false // задать CSS цвет активной точке scrollUp, например: '#00FFFF'
        });
    });
//  END стрелка скролла вверх страницы

//    фикс меню

    $('#header').scrollToFixed();

//   END фикс меню

//    анимация лого при скролле
    $(window).on('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop,
            logoImageHeight = $('.logo').height() * 0.6;
        scrollTop = scrollTop * k;
        $('.logo').height(logoHeight - scrollTop);
        console.log(scrollTop);
        $('header').css('padding-top', 30 -scrollTop/2);
        if ((25 - scrollTop) > 7) {
            $('.header-num').css('margin-top', 25 - scrollTop/2);
        }
        if ($('.logo').height() <= 0 && $(window).width() > 640) {
            $header.css({
                'border-bottom': '1px solid #d7d7d7'
            });
        } else {
            $header.css({
                'border-bottom': '1px solid #fff'
            });
        }
    }).trigger('scroll');
    window.onscroll = function() {
        var height = 51;
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        height = height - scrollTop;
        //
        // var headerPadTop = 30 - 0.588 * scrollTop;
        var headerPadBottom = 40 - 0.5 * scrollTop;
        // var navPadTop = 16 - 0.31 * scrollTop;
        //
        // if ( scrollTop > 0 ) {
        //     $('header').addClass('fixed')
        // } else {
        //     $('header').removeClass('fixed')
        // }
        // if ( height < 0 ) {
        //     $('.logo > img').css('height', 0);
        // } else {
            // $('.logo > img').css('height', height + 'px');
        // }



        // if ( headerPadTop < 0 ) {
        //     $('header').css('padding-top', 0);
        // } else {
        //     $('header').css('padding-top', headerPadTop + 'px');
        // };
        if ( headerPadBottom < 0 ) {
            $('header').css('padding-bottom', 0);
        } else {
            // $('header').css('padding-top', headerPadBottom + 'px');
        }
        // if ( navPadTop < 0 ) {
        //     $('nav').css('padding-top', 0);
        // } else {
        //     $('nav').css('padding-top', navPadTop + 'px');
        // }


        // var navMarTop = - 0.235 * scrollTop;
        // console.log(navMarTop);
        // if ( navMarTop >= -12 ) {
        //     $('nav').css('margin-top', navMarTop + 'px');
        // }
        // if ( navMarTop < -12 ) {
        //     $('nav').css('margin-top', '-12px');
        // }
    };



//   END анимация лого при скролле

//    scroll
    jQuery("a.scrollto").click(function () {
        elementClick = jQuery(this).attr("href");
        destination = jQuery(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 600);
        return false;
    });
//    //scroll

//  contacts tabs
    $(function() {

        $('ul.tabs').on('click', 'li:not(.current)', function() {
            $(this).addClass('current').siblings().removeClass('current')
                .parents('div.contacts_tabs').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
        })

    });
//  END contacts tabs

//    menu
    var touch 	= $('#touch-menu');
    var menu 	= $('nav > ul');

    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
//    END menu


});