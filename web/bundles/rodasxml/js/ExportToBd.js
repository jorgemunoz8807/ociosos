$(function(){
    $(document).ready(function(){
        $("#validation").fadeIn("slow", function(){
            $("#count-prod").fadeIn("slow", function(){
                CountNbProd();
            });
        });
    });
});

function CountNbProd()
{
    var nb = 1,
        nbProducts = $("#count-prod").children("p.message").children("span").html();

    $("#count-prod").children("p.message").children("span").html(0).fadeIn("slow");
    ShowCountNbProd(nb, parseInt(nbProducts));
}
function ShowCountNbProd(nb, total)
{
    if(nb <= total)
    {
        $("#count-prod").children("p.message").children("span").html(nb);
//        $("#count-prod").children("p.message").children("span").fadeOut(55, function(){
//            $(this).html(nb);
//            $(this).fadeIn(55);
//        });
        nb++;
        window.setTimeout(ShowCountNbProd, 5, nb, total);
    }
    else
    {
        var imageFsh = $("<img>",
            {
                src: $("input[name = imgUri]:hidden").val()
            });
        $("#count-prod").fadeOut("slow", function(){
            $(this).children("img").remove();
            $(this).prepend(imageFsh);
            $(this).removeClass("alert-incomplete").addClass("alert-complete");
            $(this).fadeIn("slow", function(){
                $("#verify-prod").fadeIn("slow", function(){
                    VerifyInDatabase();
                });
            });
        });
    }
}

function VerifyInDatabase()
{
    var msgNoDeleted = $("<p>",
        {
            id: "deleted",
            class: "message"
        }).html("Su empresa no tenia anteriores productos"),
        imageFsh = $("<img>",
        {
            src: $("input[name = imgUri]:hidden").val()
        }),
        dialog_p = $("<div>",
        {
            id: "dialog-p"
        }),
        _initials = $("input[name = initials]:hidden").val(),
        ok_action = function(){
            dialog_p.dialog("close");
            DeleteProducts();
        },
        cancel_action = function(){
            dialog_p.dialog("close");
            window.location.replace($("input[name = redirect_route]:hidden").val());
        };
    /* To be personalized to $.ajax */
    $.post(
        $("input[name = verify_route]:hidden").val(),
        {
            initials: _initials
        },
        function(data){
            if(parseInt(data) > 0)
            {
                dialog_p.html("Su Centro ya tiene "+ parseInt(data) +" productos " +
                    " almacenados en la Base de Datos. " +
                    "Si presiona Ok se eliminaran los mismos  " +
                    "para incorporar los nuevos. Si presiona Cancelar no se " +
                    "incorporaran los nuevos productos y se mantendran los que actuales.").appendTo("#main");

                dialog_p.dialog({
                    draggable: false,
                    modal: true,
                    title: "Informar",
                    buttons: [
                        {
                            text: "Aceptar",
                            icons: { primary: "ui-icon-circle-check" },
                            click: ok_action
                        },
                        {
                            text: "Cancelar",
                            icons: { primary: "ui-icon-circle-close" },
                            click: cancel_action
                        }
                    ],
                    show: { effect: "fadeIn", duration: "slow" },
                    hide: { effect: "fadeOut", duration: "fast" },
//                    width: 600,
                    resizable: false
                });
            }
            else
            {
                $("#verify-prod").fadeOut("slow", function(){
                    $(this).children("p.message").remove();
                    $(this).children("img").remove();
                    $(this).append(imageFsh);
                    $(this).append(msgNoDeleted);
                    $(this).removeClass("alert-incomplete").addClass("alert-complete");
                    $(this).fadeIn("slow", function(){
                        var nbProducts = parseInt($("input[name = nbProducts]:hidden").val()),
                            currentPos = 0,
                            percent = parseInt((currentPos * 100) / nbProducts);

                        $("#percent").html("<p>Porciento terminado: " + percent + "%</p>");
                        $("#progressbar").progressbar({
                            value: currentPos
                        });
                        $("#progress-content").fadeIn("slow", function(){
                            $("#progressbar").fadeIn("slow", function(){
                                $("#percent").fadeIn("slow", function(){
                                    SendValues(currentPos, nbProducts);
                                });
                            });
                        });
                    });
                });
            }
        }
    );
}

function DeleteProducts()
{
    var msgDeleting = $("<p>",
            {
                id: "deleting",
                class: "message"
            }).html("Eliminando los productos..."),
        msgDeleted = $("<p>",
            {
                id: "deleted",
                class: "message"
            }).html("Los productos anteriores de su empresa fueron eliminados"),
        _initials = $("input[name = initials]:hidden").val(),
        imageFsh = $("<img>",
            {
                src: $("input[name = imgUri]:hidden").val()
            });

    $("#verify-prod").children("p.message").remove();
    $("#verify-prod").append(msgDeleting);

    $.post(
        $("input[name = delete_route]:hidden").val(),
        {
            initials: _initials
        },
        function(data){
            $("#verify-prod").fadeOut("slow", function(){
                $(this).children("p.message").remove();
                $(this).children("img").remove();
                $(this).append(imageFsh);
                $(this).append(msgDeleted);
                $(this).removeClass("alert-incomplete").addClass("alert-complete");
                $(this).fadeIn("slow", function(){
                    var nbProducts = parseInt($("input[name = nbProducts]:hidden").val()),
                        currentPos = 0,
                        percent = parseInt((currentPos * 100) / nbProducts);

                    $("#percent").html("<p>Porciento terminado: " + percent + "%</p>");
                    $("#progressbar").progressbar({
                        value: currentPos
                    });
                    $("#progress-content").fadeIn("slow", function(){
                        $("#progressbar").fadeIn("slow", function(){
                            $("#percent").fadeIn("slow", function(){
                                SendValues(currentPos, nbProducts);
                            });
                        });
                    });
                });
            });
        }
    );
}

function SendValues(currentPos, nbProducts)
{
    var _filename = $("input[name = filename]:hidden").val();
    var _pathFile = $("input[name = pathFile]:hidden").val();

    if(currentPos != nbProducts)
    {
        $.post(
            $("input[name = route]:hidden").val(),
            {
                position: currentPos,
                filename: _filename,
                pathFile: _pathFile
            },
            function (data) {
                $("#progressbar").progressbar({
                    value: parseInt((currentPos * 100) / nbProducts)
                });
                $("#progress-details").empty();
                $("#progress-details").html(data);
                $("#percent").empty();
                $("#percent").html("<p> Porciento terminado: " + parseInt((currentPos * 100) / nbProducts) + "% </p>");
                currentPos++;
                SendValues(currentPos, nbProducts);
            }
        );
    }
    else if(currentPos == nbProducts)
    {
        $("#progressbar").progressbar({
            value: parseInt((currentPos * 100) / nbProducts)
        });
        $("#percent").empty();
        $("#percent").html("<p> Porciento terminado: " + parseInt((currentPos * 100) / nbProducts) + "% </p>");

        var messageFsh = $("<p>",
            {
                id: "finish",
                class: "message"
            }).html("Todos los productos fueron insertados satisfactoramente");
        var imageFsh = $("<img>",
            {
                src: $("input[name = imgUri]:hidden").val()
            });
        $("#progress-details").fadeOut("slow", function(){
            $("#percent").fadeOut("slow", function(){
                $("#progressbar").fadeOut("slow", function(){
                    $("#progress-content").fadeOut("slow", function(){
                        $("#progress-details").remove();
                        $("#percent").remove();
                        $("#progressbar").remove();
                        $("#progress-content").children("p.message").remove();
                        $("#progress-content").children("img").remove();
                        $("#progress-content").append(imageFsh);
                        $("#progress-content").append(messageFsh);
                        $("#progress-content").removeClass("alert-incomplete").addClass("alert-complete");
                        $("#progress-content").fadeIn("slow");
                    })
                });
            });
        });

    }
}