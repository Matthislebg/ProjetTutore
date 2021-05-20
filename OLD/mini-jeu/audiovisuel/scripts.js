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
    })

    $('.drag').on("click",function(){
        $(this).css({
            "border": "2px solid #EEB81D"
        })
    });

});