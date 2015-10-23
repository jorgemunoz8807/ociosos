/**
 * Created by Angel on 2/07/14.
 */

$(function(){
    $(document).ready(function(){
        var empty = "";
        var name = "Su Nombre...";
        var email = "Su Correo...";
        var message = "Su Mensaje...";
        $("input[name = txtName]:text").on("focusin", function(){
            ExecuteEvents($(this), name, empty);
        });
        $("input[name = txtName]:text").on("focusout", function(){
            ExecuteEvents($(this), empty, name);
        });
        $("input[name = txtEmail]").on("focusin", function(){
            ExecuteEvents($(this), email, empty);
        });
        $("input[name = txtEmail]").on("focusout", function(){
            ExecuteEvents($(this), empty, email);
        });
        $("textarea[name = txtMessage]").on("focusin", function(){
            ExecuteEvents($(this), message, empty);
//            $(this).addClass("selected");
        });
        $("textarea[name = txtMessage]").on("focusout", function(){
            ExecuteEvents($(this), empty, message);
        });
    });
});

function ExecuteEvents(field, compare, substitute){
    if(field.val() == compare)
    {
        field.val(substitute);
    }
}