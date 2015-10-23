(function($){
    $(document).ready(function(){
        console.info("inside");
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

function SendPostValues()
{
    $("#backLoad").css("height", $("#full-cont").css("height"));
    $("#backLoad").fadeIn("fast", function(){
        $("#loading").fadeIn("fast");
    });
    $.post(
        $("form[name = termsForm]").attr("action"),
        {
            WordSearch: $('input[name = WordSearch]:text').val(),
            page: anchorNb,
            ajax: true
        },
        function (data) {
//            $("#loading").fadeOut("fast");
            $("#res-terminos").empty();
            $("#res-terminos").html(data);
            $("#loading").fadeOut("fast", function(){
                $("#backLoad").fadeOut("fast");
            });

            anchorAction();
        }
    );
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