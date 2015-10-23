(function($){
    $(document).ready(function(){
        $("input[name = wordSearch]:text").on("focusin", function(){
            if($(this).val() == "Buscar palabra..."){
                $(this).val("");
            }
        });
        $("input[name = wordSearch]:text").on("focusout", function(){
            if($(this).val() == ""){
                $(this).val("Buscar palabra...");
            }
        });
        var url = $("#search-img > a").attr("href");
        var word = "";
        $("input[name = wordSearch]:text").on("keyup", function(){
            //autocompletar
            word = $(this).val();
        });

        $("#search-img > a").click(function(e){
            e.preventDefault();
//            $(this).attr("href", "{{ path('buscar_termino', {'criteria': '"+ word +"'}) }}");
        });
    });

})(jQuery);