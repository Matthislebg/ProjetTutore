$(document).ready(function(){



// - Changer l'heure et le réseau automatiquement - //

    var time;
    var oldtime;

    refreshTime();

    function refreshTime(){

        time = new Date().toLocaleString(navigator.language,{hour: '2-digit', minute:'2-digit'});

        if(time != oldtime){    // Si l'heure (hh-mm) est différente de l'ancienne heure, alors :
            $(".heure").text(time);     //  changer l'heure en html
            oldtime=time;    // Remplacer l'ancienne heure
        }
        $(".reseau").text(navigator.connection.effectiveType);  // Définir le réseau (slow-2g / 2g / 3g / 4g) en fonction du débit

    }

    setInterval(refreshTime, 1000); // Execution de refreshTime() toute les secondes

// -- //

    $(".params").hide();
    var paramOpen=false;

    $(".paramlogo").on("click", function(){
        $(".params").fadeIn();
        paramOpen=true;
    });

    $(document).on("click", function(){

        if(paramOpen){

            $(document).mouseup(function(e){
                if(!$(".params, .paramlogo").is(e.target) && $(".params, .paramlogo").has(e.target).length === 0){
                    $(".params").fadeOut();
                    paramOpen=false;
                }
        });
        }
    })

    var compteur = $(".textMsg").val().length;

    $(".counter").text(compteur);

    $(".textMsg").on("keyup keydown", function(){
        compteur = $(".textMsg").val().length;
        $(".counter").text(compteur);
        if(compteur >= 200){
            $(".charact").css({"color": "red"})
        }else{
            $(".charact").css({"color": "black"})
        }
    });

    $(".Smsg").hide();
    $(".msg").on("click", function(){
        $(".flux").hide();
        $(".Smsg").fadeIn();
    })
    $(".logo").on("click", function(){
        $(".Smsg").hide();
        $(".flux").fadeIn();
    })

    $(".paramlogo").on("click", function(){
        $(".notif").fadeOut();
    })

    $(".notif").hide();

    if(window.location.href.indexOf("success") > -1){
        $(".notif").fadeIn();
    }

    for(i=0; i<$(".rdmFill").length; i++){
        $(".flux>.mPost:nth-child("+(i+1)+") .rdmFill").css({
            "fill": "rgb("+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+")"
        })
    }

    $(".nocertif").hide();

    $(".switch>input").on("change", function(){
        if($(".switch>input").is(":checked")){
            $(".nocertif").fadeOut();
        }else{
            $(".nocertif").fadeIn();
        }
    })
    
});