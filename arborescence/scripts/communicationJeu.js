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
        if(paramOpen){
            $(".params").fadeOut();
        }else{
            $(".params").fadeIn();
        }
        paramOpen=!paramOpen;
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
    });

    
    $("body").on("click", ".envoyer", function(){

        if(($(".pseudo").val()!="")&&($(".textMsg").val()!="")){    // empêcher l'envoi de champs vides
            $.get("../pages/communicationJeu/send.php",{color: $(".color").val(), pseudo: $(".pseudo").val(), textMsg: $(".textMsg").val()});
    
            $(".flux").prepend(`
            <div class="mPost nocertif">
                <div class="mPostHead">
                    <svg viewBox="0 0 430 317">
                        <path fill="`+$(".color").val()+`" d="M353,317H318V67L215,142,112,67V317H77V164c-12.665-9-28.335-21-41-30V285L0,260C0.333,195.006,0,123.667,0,66c77.82,55.935,52.336,37.668,78,56,0.333-40.329-.333-81.671,0-122,45.329,33,91.671,67,137,100C260.329,67,306.671,33,352,0h0V122c25.664-18.332,52.336-37.668,78-56h0V260c0.082,0.169.171,0.294,0,0-11.332,7.666-24.668,17.334-36,25V134l-41,30V317ZM198,160h34v31H198V160Zm0,47h34V317H198V207Z"/>
                    </svg>
                    <h2>`+$(".pseudo").val()+`<h2>
                </div>
                <p>`+$(".textMsg").val()+`</p>
            </div>`);
    
            $(".color").val("#0B83C6");
            $(".pseudo").val("");
            $(".textMsg").val("");
            $(".nocertif").hide();
            $(".Smsg").hide();
            $(".flux").fadeIn();
            $(".notif").fadeIn();
        }
    })
    
});