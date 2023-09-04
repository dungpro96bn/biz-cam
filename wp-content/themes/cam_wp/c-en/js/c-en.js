jQuery(function ($) {
    // userAgent
    const ua = navigator.userAgent;
    const uaLowerCase = navigator.userAgent.toLowerCase();
    const isSp = ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0);
    const isTablet = ua.indexOf('iPad') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('A1_07') > 0 || ua.indexOf('SC-01C') > 0 || uaLowerCase.indexOf('macintosh') > 0 && 'ontouchend' in document;
    const isPc = (!isSp && !isTablet);

    AOS.init({
        once: true,
        duration: 1000,
        delay: 0,
    });


    // only IE
    if (ua.indexOf('Trident') !== -1) {
        $('#c-en .sizes').each(function () {
            var objElement = $(this);
            var objOmg = new Image();
            objOmg.src = objElement.attr('src');
            if (objOmg.width != 0) {
                objElement.css({'width': objOmg.width / 2});
            }
        });
    }


    // fadein
    $(window).on('load', function () {
        $(window).scroll(function () {
            $('#c-en .js-fadein').each(function () {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > ptop - windowHeight - 500) {
                    $(this).addClass('scroll-in');
                }
            });
        });

        $('#c-en .js-fadein').each(function () {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > ptop - windowHeight - 500) {
                $(this).addClass('scroll-in');
            }
        });
    });



    $('.scroll').click(function (event) {
        event.preventDefault();
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        var target_offset = $('#' + target).offset();
        var target_top = target_offset.top;
        $('html, body').animate({scrollTop: target_top}, 500, 'swing');
        return false;
    });


    $(".toggle-btn .btn-table").click(function () {
        $(".table-company .list-company").toggleClass("is-open");
        $(".table-company .content-toggle").slideToggle();
        $(this).toggleClass("is-open");
    });


    $('.item-tab a').click(function (event) {
        event.preventDefault();
        $('.introduction-block .list-tab .item-tab a').removeClass("is-active");
        $(".introduction-block .introduction-tab").removeClass("is-active");
        var url = $(this).attr('href');
        var dest = url.split('#');
        var target = dest[1];
        $(this).addClass("is-active");
        $('#' + target).addClass("is-active");
    });



    if (isSp) {
        // only sp

    } else if (isTablet) {
        // only tablet

    } else if (isPc) {
        // only pc

    }


});