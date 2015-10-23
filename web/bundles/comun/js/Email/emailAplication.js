/**
 * Created by Dany on 2/2/2015
 */





$(function(){
    $(document).ready(function(){

        $('#send_mail').click(function(){
            var empty = "";
            //var name = $('#iddelelemento').val();
            var name = $('#nombre').val();
            var email = $('#email').val();
            var message = $('#mensaje').val();

            //alert(name);
            if(($.trim(name) == '')){
                $('#nombre').focus();
                return false;

                //$("#contact-cont text, #contact-cont[type='text']:visible:enabled:first").focus();
                //alert('Input can not be left blank');
            }
            if(($.trim(email) == '')){
                $('#email').focus();
                return false;
            }
            if(($.trim(message) == '')){
                $('#mensaje').focus();
                return false;
            }

            $('#formAplicationemail').submit();

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




    });
});

