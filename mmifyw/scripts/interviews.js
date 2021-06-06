$(document).ready(function(){

    $(".popup").hide();
    $(".background").hide();

    $("section>div:nth-child(1)").on("click", function(){
        $(".popup").hide()
        $(".popup:nth-of-type(1)").fadeIn();
        $(".background").fadeIn();
    })

    $("section>div:nth-child(2)").on("click", function(){
        $(".popup").hide()
        $(".popup:nth-of-type(2)").fadeIn();
        $(".background").fadeIn();
    })

    $("section>div:nth-child(3)").on("click", function(){
        $(".popup").hide()
        $(".popup:nth-of-type(3)").fadeIn();
        $(".background").fadeIn();
    })

    $("section>div:nth-child(4)").on("click", function(){
        $(".popup").hide()
        $(".popup:nth-of-type(4)").fadeIn();
        $(".background").fadeIn();
    })
    
    $(".background").on("click",function(){
        $(".popup").fadeOut();
        $(".background").fadeOut();
    })
})