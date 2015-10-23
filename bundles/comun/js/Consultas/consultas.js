/* 1. To take Select Box values */
var stateVal = TakeSBValues($("select[name = ProvinciaSlct]"));
var categoryVal = TakeSBValues($("select[name = CategoriaSlct]"));
var centerVal = TakeSBValues($("select[name = CentroSlct]"));
var anchorNb = 1;

/* 2. To check when a Select Box is changed */
$("select[name = ProvinciaSlct]").on("change", function () {
    UpdateSelect($(this), "stateVal");
    SendSBValues();
});
$("select[name = CategoriaSlct]").on("change", function () {
    UpdateSelect($(this), "categoryVal");
    SendSBValues();
});
$("select[name = CentroSlct]").on("change", function () {
    UpdateSelect($(this), "centerVal");
    SendSBValues();
});
anchorAction();

/* Function when Select Boxes are changed */
function UpdateSelect(selectObject, variable) {
    anchorNb = 1;
    switch (variable) {
        case "stateVal":
            stateVal = TakeSBValues($("select[name = ProvinciaSlct]"));
            break;
        case "categoryVal":
            categoryVal = TakeSBValues($("select[name = CategoriaSlct]"));
            break;
        case "centerVal":
            centerVal = TakeSBValues($("select[name = CentroSlct]"));
            break;
        default:
            break;
    }
}

/* Function that takes the Select Boxes's values*/
function TakeSBValues(selectObj) {
    return isNaN(parseInt(selectObj.val())) ? 0 : parseInt(selectObj.val())
}

function SendSBValues()
{
//    var heightBody = $("#full-cont").css("height");
//    $("#res-consultas").empty();
    $("#backLoad").css("height", $("#full-cont").css("height"));
    $("#backLoad").fadeIn("fast", function(){
        $("#loading").fadeIn("fast");
    });
//    $("#loading").fadeIn("fast");
    $.post(
        $("form[name = consultasFrm]").attr("action"),
        {
            values: TakeSBValues($("select[name = ProvinciaSlct]")) + "," +
                TakeSBValues($("select[name = CategoriaSlct]")) + "," +
                TakeSBValues($("select[name = CentroSlct]")),
            page: anchorNb
        },
        function (data) {
//            $("#loading").fadeOut("fast");
            $("#res-consultas").empty();
            $("#res-consultas").html(data);
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

function anchorAction()
{
    var pages = $('.pagination').children('span');
    pages.children("a").click(function(e){
        e.preventDefault();
        getNbAnchor($(this).attr('href'));
        SendSBValues();
    });
}

