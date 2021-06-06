$(document).ready(function(){

    $("input[type='search']").on("click", function(){
        $(".propositions").css({
            "height": "fit-content",
            "height": "-moz-fit-content"
        });

        $(".recherche>img").css({
            "opacity": "0.9"
        })
    });

    $("body").on("click", function(e){
        if(!$(".recherche").is(e.target) && $(".recherche").has(e.target).length === 0){
            $(".propositions").css({
                "height": "0vw"
            });
            $(".recherche>img").css({
                "opacity": "0.5"
            })
        }
    });

    $(".search").keyup(function(){
        var bRecherche = $('.search').val();

        if(bRecherche==""){

            $(".propositions").html("");

        }else{

            $.ajax({
                type: "POST",
                
                url: "../pages/search.php",
                
                data: {
                    search: bRecherche
                }, success: function(html) {
                    $(".propositions").html(html).show();
                }
            });

        }
    });

});