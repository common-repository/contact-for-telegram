jQuery(document).ready(function ($) {
    $('#color').iris({
        width: 400,
        hide: true,
        change: function (event, ui) {
            // event = standard jQuery event, produced by whichever control was changed.
            // ui = standard jQuery UI object, with a color member containing a Color.js object
            // change the headline color
            $("#color").css('background', ui.color.toString());
            let color = document.getElementById("color").value;
            document.getElementById("preview").style.background = color;
        }

    });

    $(this).click(function () {
        $(this).iris('toggle'); //click came from somewhere else
    });
});