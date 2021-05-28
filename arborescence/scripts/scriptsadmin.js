$(document).ready(function(){
    console.log("admin")
    
    $("body").on("click", ".delete", function(){
        console.log("delete")
        $.get("../pages/communicationJeu/delete.php",{id: $(this).attr("id")});
        $(this).parent().parent().parent().parent().fadeOut();
    })

    var certif;
    $("body").on("click", "img[src='../../medias/communicationJeu/check.svg']", function(){
        certif= $(this).attr("data-certif");
        $.get("../pages/communicationJeu/certif.php",{id: $(this).attr("id"), certif: $(this).attr("data-certif")});

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