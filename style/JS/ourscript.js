$(document).ready(function () {
    $(".card").hover(
        function () {
            $(this).addClass('shadow-lg').css('cursor', 'pointer');
        },
        function () {
            $(this).removeClass('shadow-lg');
        }
    );

   
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

});