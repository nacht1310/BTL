$(document).ready(function() {
    clickTo();
    scrollToTop();
})

function clickTo() {
    $(".submenu-item").click(function() {
        const id = $(this).attr("id");
        $('html, body').animate({
            scrollTop: $(`#${id}-pos`).offset().top
        }, "slow");
    })

    $(".header-menu").click(function() {
        const id = $(this).attr("id");
        $('html, body').animate({
            scrollTop: $(`#${id}-pos`).offset().top
        }, "fast");
    })
}

function scrollToTop() {
    $(document).on("scroll", function(){
        var pos = $(document).scrollTop();
        if (pos > 20){
            $(".scroll-to-top").show()
        } else {
            $(".scroll-to-top").hide()
        }
    })
    $(".scroll-to-top").click(function(){
        $("html, body").animate({scrollTop: 0}, "fast")
        return false
    })
}