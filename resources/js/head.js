$(window).bind('load', function() {

    fixedHeader();
});

$(window).bind('scroll', function() {

    fixedHeader();
})

function fixedHeader() {


    var windowWidth = $(window).width();
    if (windowWidth < 960) {
        innerPagesHeader();
    } else {
        homeHeader();
    }


}


function homeHeader() {
    var obj = $('.main-header');
    scrollTop = $(window).scrollTop();
    var banHeight = $('.home-banner').height();
    var WindowHeight = $(window).height();

    var headerHeight = WindowHeight / 2;
    var transY = scrollTop;
    if (scrollTop > 200) {
        transY = 200;
    }

    var trans = 'translateY(-' + transY + 'px)';

    obj.css({
        'transform': trans,
        '-webkit-transform': trans,
        '-moz-transform': trans,
        '-ms-transform': trans,
        '-o-transform': trans,
    });

    if (scrollTop > headerHeight) {
        if (!$('body').hasClass('hide_header_onscroll')) {
            $('body').addClass('hide_header_onscroll');
        }
    } else {
        if ($('body').hasClass('hide_header_onscroll')) {
            $('body').removeClass('hide_header_onscroll');
        }
    }
    if (scrollTop > (WindowHeight - 100)) {
        if (!$('body').hasClass('fixed_header')) {
            $('body').addClass('fixed_header');
            $('body').addClass('set_header');
        }

    } else {
        if ($('body').hasClass('fixed_header')) {
            $('body').removeClass('set_header');
            $('body').removeClass('fixed_header');
            setTimeout(function() { $('body').removeClass('fixed_header'); }, 500);
        }
    }
}

function innerPagesHeader() {
    var obj = $('.main-header');
    scrollTop = $(window).scrollTop();
    var mainHeaderH = $('.main-header').height();
    if (scrollTop > mainHeaderH) {
        if (!$('body').hasClass('fixed_header')) {
            $('body').addClass('fixed_header');
        }
    } else {
        if ($('body').hasClass('fixed_header')) {
            $('body').removeClass('fixed_header');
        }
    }

}