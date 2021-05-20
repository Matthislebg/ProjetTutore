$(document).ready(function(){

    $("body").on("click", ".delete", function(){
        $.get("php/delete.php",{id: $(this).attr("id")});
        $(this).parent().parent().parent().parent().fadeOut();
    })

    var certif;
    $("body").on("click", "img[src='images/check.svg']", function(){
        certif= $(this).attr("data-certif");
        $.get("php/certif.php",{id: $(this).attr("id"), certif: $(this).attr("data-certif")});

        if(certif==1){
            $(this).attr("data-certif", "0");
            $("svg[id="+$(this).attr("id")+"]>path").css({
                "opacity": "0"
            });
        }else{
            $(this).attr("data-certif", "1");
            $("svg[id="+$(this).attr("id")+"]>path").css({
                "opacity": "1"
            });
        }
    })

});