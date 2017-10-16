// 调用轮播图
$(document).ready(function (e) {

    var unslider04 = $('#b04').unslider({

            dots: true

        }),

        data04 = unslider04.data('unslider');


    $('.unslider-arrow04').click(function () {

        var fn = this.className.split(' ')[1];

        data04[fn]();

    });

    $('#navli li').hover(function () {
        $(this).find('.nav').css('display', 'block');
    }, function () {

        $(this).find('.nav').css('display', 'none');
    });
    $('#teacher').hover(function () {
        $(this).find('#nav2').css('display', 'block');
    }, function () {
        $(this).find('#nav2').css('display', 'none');
    });

    imgfadeOut();
    function imgfadeOut() {
        setTimeout(function () {
            $('.con-imga').fadeOut();
            imgfadeInt();
        }, 5000);
    }

    function imgfadeInt() {
        setTimeout(function () {
            $('.con-imga').fadeIn();
            imgfadeOut();
        }, 5000);
    }


});
