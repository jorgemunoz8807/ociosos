(function($){
    $(document).ready(function(){
        anchorAction();
    });
})(jQuery);

var anchorNb = 1;

function anchorAction()
{
    var pages = $('.pagination').children('span');
    pages.children("a").click(function(e){
        console.info("click event");
        e.preventDefault();
        getNbAnchor($(this).attr('href'));
        SendPostValues();
    });
}

function getNbAnchor($anchor)
{
    var number = "";
    var foundedFlg = false;
    for(var i = 0; i<$anchor.length; i++)
    {
        if($anchor.charAt(i) == '=')
        {
            foundedFlg = true;
        }
        else if(foundedFlg)
        {
            number += $anchor.charAt(i);
        }
    }
    anchorNb = parseInt(number);
}

function SendPostValues()
{
//    $("#backLoad").css("height", $("#full-cont").css("height"));
//    $("#backLoad").fadeIn("fast", function(){
//        $("#loading").fadeIn("fast");
//    });
    $("#backLoad").fadeIn("fast", function(){
        $("#res-terminos").slideUp("slow", function(){
            $("#res-terminos").empty();
            $("#loading").css({
                top: $(document).scrollTop() + 200,
                left: '41%'
            });
            $("#loading").fadeIn("fast");
        });
    });
    $.post(
        $("form[name = termsForm]").attr("action"),
        {
            wordSearch: $('input[name = word]:hidden').val(),
            page: anchorNb,
            ajax: true
        },
        function (data) {
//            $("#loading").fadeOut("fast");
//            $("#res-terminos").empty();
//            $("#res-terminos").html(data);
//            $("#loading").fadeOut("fast", function(){
//                $("#backLoad").fadeOut("fast");
//            });
//
//            anchorAction();
            $("#res-terminos").html(data);
            $("#res-terminos").slideDown("slow", function(){
                $("#loading").fadeOut("fast", function(){
                    $("#backLoad").fadeOut("fast");
                });
            });
            anchorAction();
        }
    );
}

