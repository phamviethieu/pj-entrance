$(document).ready(function() {
    if ($(window).scrollTop() > 200) {
        $(".back-to-top").show(3000);
        console.log("ok");
    } else {
        $(".back-to-top").hide(3000);
    }
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').show(3000);
        } else {
            $('.back-to-top').hide(3000);
        }
    });

    $('.back-to-top').click(function() {

        $("html,body").animate({ scrollTop: 0 }, 600);
        return false;

    });
});