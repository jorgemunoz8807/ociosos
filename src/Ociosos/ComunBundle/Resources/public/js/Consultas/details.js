/**
 * Created by Angel on 7/6/14.
 */

$(function details(){
//    $("#loading").position({
//        my: "center",
//        at: "center",
//        of: scrollY
//    });

//    $("#loading").position({
//        my: "center",
//        at: "center",
//        of: document
//    });
    $("a.details").on("click", function(e){
        e.preventDefault();

        $("#loading").css({
//            top: e.pageY - 150,
//            left: e.pageX - 200
            top: $(document).scrollTop() + 200,
            left: "41%"
        });

        $("#backLoad").fadeIn("fast", function(){
            $("#loading").fadeIn("fast");
        });

        $.post(
            $(this).attr("href"),
            {
                id: parseInt($(this).attr("id"))
            },
            function(data){
                $("#loading").fadeOut("fast", function(){
                    $("#backLoad").fadeOut("fast");
                });

                var dialog_p = $("<div>",
                    {
                        id: "dialog-p"
                    }).html(data).appendTo("#main");
                var ok_action = function(){
                    dialog_p.dialog("close");
                };

                dialog_p.dialog({
                    draggable: false,
                    modal: true,
                    title: "Detalles del Producto",
                    buttons: [ {
                        text: "Ok",
                        icons: { primary: "ui-icon-circle-check" },
                        click: ok_action
                    } ],
                    show: { effect: "fadeIn", duration: "slow" },
                    hide: { effect: "fadeOut", duration: "fast" },
                    width: 600,
                    resizable: false
                });
            }
        );
    });
});
