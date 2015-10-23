/**
 * Created by Dany on 2/2/2015
 */





$(function(){
    $(document).ready(function(){
        var empty = "";
        //var name = $('#iddelelemento').val();
        var name = $('#nombre').val();
        var email = $('#email').val();
        var message = $('#mensaje').val();


        $('#submit').click(function(){

            //alert(name);
            if(name == '' || name=='Su Nombre...' ){
                $("input:text:visible").focus();
                //$("#contact-cont text, #contact-cont[type='text']:visible:enabled:first").focus();
                //alert('Input can not be left blank');
            }
            //if(email == '' || email=='Su Correo...' ){
            //    $("input:text:visible:first").focus();
            //
            //    //alert('Input can not be left blank');
            //}


            //if(message == '' || message=='Descripción de la solicitud...' ){
            //    //$(message).focus();
            //    $("#contact-cont textarea, #contact-cont[type='text']:visible:enabled:first").focus();
            //    //alert('Input can not be left blank');
            //}
        });




//        $("input[name = txtName]:text").on("focusin", function(){
//            ExecuteEvents($(this), name, empty);
//        });
//        $("input[name = txtName]:text").on("focusout", function(){
//            ExecuteEvents($(this), empty, name);
//        });
//        $("input[name = txtEmail]").on("focusin", function(){
//            ExecuteEvents($(this), email, empty);
//        });
//        $("input[name = txtEmail]").on("focusout", function(){
//            ExecuteEvents($(this), empty, email);
//        });
//        $("textarea[name = txtMessage]").on("focusin", function(){
//            ExecuteEvents($(this), message, empty);
////            $(this).addClass("selected");
//        });
//        $("textarea[name = txtMessage]").on("focusout", function(){
//            ExecuteEvents($(this), empty, message);
//        });
    });
});


//
//function ExecuteEvents(field, compare, substitute){
//    if(field.val() == compare)
//    {
//        field.val(substitute);
//    }
//}