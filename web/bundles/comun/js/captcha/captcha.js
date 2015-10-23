// Eliminar Cookie
var eliminarCookie = function (key) {
   //log("eliminarCookie: " + key);
   return document.cookie = key + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

$(document).ready(function () {
    $(window).unload(function() {
       //return confirm('Do you really want to close?');
       eliminarCookie('PHPSESSID');

        });




    $(function () {
        $(".captcha-container").on("click", ".refreshImage", function () {

            //$.post("newsession.php");
            $("#refreshimg").load(refreshCaptchaRoute);
            //console.log('a');


            /*var container = $(this);

             container.get(
             refreshCaptchaRoute,
             '',
             function(data, textStatus){
             container.children('img.captcha-image:first').attr('src', data);
             },
             'text'
             );*/
            return false;
        });

        console.log(verifyCaptchaRoute);


        $.validator.addMethod('validEmail', function (value, element, param) {


            var regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|cu|com|org|net|edu|gov|es)\b/;

            return regex.test(value); // return bool here if valid or not.
        }, 'Por favor escriba una dirección de correo válida');


        $("#formCommentemail").validate({
            rules: {
                captcha: {
                    required: true,
                    remote: verifyCaptchaRoute
                },
                txtEmail: {validEmail: true},
                txtMessage: {required: true},
                txtName: {required: true}

            },
            messages: {
                captcha: "El valor ingresado debe coincidir con el mostrado en la imagen, por favor revíselo.",
                txtEmail: "Por favor escriba una dirección de correo válida.",
                txtMessage: "Este campo es requerido.",
                txtName: "Este campo es requerido."


            },

            onkeyup: false
        });

    });
});




