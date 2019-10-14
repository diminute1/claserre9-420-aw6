$(document).ready(function () {



    $(".card").hover(
        function () {
            $(this).addClass('shadow-lg').css('cursor', 'pointer');
        },
        function () {
            $(this).removeClass('shadow-lg');
        }
    );

    $("a").css("color","black")
    $("a").mouseover(function () {
        $("a").css({
            "color":"black",
            "text-decoration":"none"
        });

    });

    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 2000);

    $('footer').css({
        "position":"fixed",
        "left":"0",
        "bottom":"0",
        "text-align":"center",
        "width":"100%",
        "background-color":"#EAECEE",
        "vertical-align":"middle",
    })

    $('footer').height(70);

    $("<br/> <br/> <br/> <br/>").insertBefore("footer")


});