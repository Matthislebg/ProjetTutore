$(document).on("ready",function(){

    $(".pButton").on("click", function(){
        if($(".pButton>path").attr("d")=="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z"){
            $(".pButton>path").attr("d","M 12,26 16,26 16,10 12,10 z M 21,26 25,26 25,10 21,10 z");
            $(".videoPrev").trigger('play');
        }else{
            $(".pButton>path").attr("d","M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z");
            $(".videoPrev").trigger('pause');
        }
    });

    $(".videoPrev").on("ended",function(){
        $(".videoPrev").trigger('pause');
        $(".pButton>path").attr("d","M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z");
    });

    $(function  () {
        $( ".items" ).sortable({
            distance:10,
            axis: 'x'
        });
        $( ".items" ).disableSelection();
    });

    var actuel;
    refreshList();

    $(".drag").on("mouseup", function(){    // Le index commence à 0
        setTimeout(function(){
            refreshList();
        },10);
    });

    $(".deroulement>li").on("click", function(){
        $(this).index();
        if($(this).parent().parent().hasClass("intro")){
            
        }else if($(this).parent().parent().hasClass("partie1")){
            
        }else if($(this).parent().parent().hasClass("partie2")){

        }else if($(this).parent().parent().hasClass("partie3")){

        }else if($(this).parent().parent().hasClass("outro")){

        }
    });

    function refreshList(){
        for(var i=0; i<5; i++){
            actuel=$(".drag:nth-child("+(i+1)+")");
            actuel.children(".deroulement").children("li").css({
                "background-color": "transparent"
            });
            actuel.children(".deroulement").children("li:nth-child("+(actuel.index()+1)+")").css({
                "background-color": "#dda200"
            });
        }
    }

});