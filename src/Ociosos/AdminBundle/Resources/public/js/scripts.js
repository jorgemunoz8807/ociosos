$(document).ready( function() {
    $("#master-selected-item").click( function() {
        var checked = $(this).prop("checked");
        $(".selected-item").prop("checked", checked);
    });

    $("#link-delete-selected").click( function(event) {
        event.preventDefault();
        var iterador = $(".selected-item:checked").map(function() {return $(this).attr("data-id");});
        var array_id = iterador.get();

        if (array_id == "") {
            alert("Tiene que seleccionar algún elemento");
        }
        else {
            var route = $(this).attr("href");
            route = route.replace("pid", array_id);
            window.location.href = route;
        }
    });
});