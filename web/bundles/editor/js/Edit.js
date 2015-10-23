$(function(){
    $(document).ready(function(){
        if($("#message").children("p").html() != ' ')
        {
            $("#message").fadeIn("slow").delay(2500).fadeOut("slow");
//            $("#message").delay(2000);
//            $("#message").fadeOut("slow");
        }
    });
    $("add-viewer").click(function(e){
//        e.preventDefault();

    });
});



