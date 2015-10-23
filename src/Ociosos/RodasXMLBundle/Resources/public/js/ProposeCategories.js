$(function() {
    $("#propose-link").click(function(e) {
        e.preventDefault();

        var informations = "",
            dialog_p = $("<div>",
                {
                    id: "dialog-p"
                }),
            ok_action = function(){
                dialog_p.dialog("close");
                window.location.replace($("input[name = redirect_route]:hidden").val());
            };
        $("p.category").each(function(){
            informations += $(this).html() +"~";
        });

        $.ajax({
            type: "POST",
            url: $(this).attr("href"),
            data: {
                informationText: informations,
                filename: $("input[name = filename]:hidden").val(),
                pathFile: $("input[name = pathFile]:hidden").val()
            }
        }).done(function(data) {
                dialog_p.html(data);
                dialog_p.dialog({
                    draggable: false,
                    modal: true,
                    title: "Mensaje",
                    buttons: [
                        {
                            text: "Aceptar",
                            icons: { primary: "ui-icon-circle-check" },
                            click: ok_action
                        }],
                    show: { effect: "fadeIn", duration: "slow" },
                    hide: { effect: "fadeOut", duration: "fast" },
                    resizable: false
                });
            }).fail(function(errorData){
                dialog_p.html("Hubo un error: " + errorData + ". Intente en otro momento enviar la solicitud");
                dialog_p.dialog({
                    draggable: false,
                    modal: true,
                    title: "Error",
                    buttons: [
                        {
                            text: "Aceptar",
                            icons: { primary: "ui-icon-circle-check" },
                            click: ok_action
                        }],
                    show: { effect: "fadeIn", duration: "slow" },
                    hide: { effect: "fadeOut", duration: "fast" },
                    resizable: false
                });
            });
    });
});
