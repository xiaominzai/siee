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
        $("#li_bottom").css("border-bottom", "1px solid #fff!important");
    }, function () {
        $(this).find('#nav2').css('display', 'none');
    });

    imgfadeOut();
    function imgfadeOut() {
        setTimeout(function () {
            $("#con-img li:lt(4)").fadeOut();
            imgfadeInt();
        }, 4000);
    }

    function imgfadeInt() {
        setTimeout(function () {
            $('#con-img li:lt(4)').fadeIn();
            imgfadeOut();
        }, 4000);
    }


});
