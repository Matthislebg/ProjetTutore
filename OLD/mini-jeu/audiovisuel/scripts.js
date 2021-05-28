$(document).on("ready",function(){

    var actuel;
    var liens = ["medias/interviews/intro_at.mp4", "medias/interviews/metiers_at.mp4", "medias/interviews/etapes_film_at.mp4", "medias/interviews/pref_at.mp4", "medias/interviews/outro_at.mp4"];
    var id = ["#intro","#partie1","#partie2","#partie3","#outro"];
    var newOrdre = [];
    var actualVideo = 0;
    var old = [];
    var diffVid;
    var vidEtat;
    var menu = false;

    var random;
    for(var i=0; i<5; i++){ // Placer les éléments de montage aléatoirement
        random = Math.floor(Math.random()*5);
        rePos(random, $(".items>li:nth-child("+random+")").attr("id"));
    }

    $(".pButton").on("click", function(){
        if($(".pButton>path").attr("d")=="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z"){
            $(".pButton>path").attr("d","M 12,26 16,26 16,10 12,10 z M 21,26 25,26 25,10 21,10 z");
            $(".videoPrev").trigger('play');
            vidEtat = "play";
        }else{
            $(".pButton>path").attr("d","M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z");
            $(".videoPrev").trigger('pause');
            vidEtat = "pause";
        }
    });

    $(".pReload").on("click", function(){
        actualVideo = -1;
        playVid();
        $(this).css({
            "transform":"rotate(180deg)"
        })
        setTimeout(function(){
            $(".pReload").css({
                "transform":"rotate(0deg)"
            });
        },500);
    })

    $(".pSkip").on("click", function(){
        playVid();
    })
    $(".volume").on("input", function(){
        $(".videoPrev").prop("volume",($(".volume").val())/100);
    })

    $(".menu").on("click", function(){
        if(menu){
            $(".param").css({
                "width":"0%"
            });
            menu = false;
        }else{
            $(".param").css({
                "width":"25%"
            });
            menu = true;
        }
    });

    $(".luminosite").on("input", function(){
        $(".filtre").css({
            "background-color": "rgb("+$(".luminosite").val()+","+$(".luminosite").val()+","+$(".luminosite").val()+")"
        });
        if(($(".luminosite").val()/127)>1){
            $("video").css({
                "opacity": (1-(($(".luminosite").val()/127)-1))
            })
        }else{
            $("video").css({
                "opacity": ($(".luminosite").val()/127)
            })
        }
    });

    $(".bordure, .bColor").on("input",function(){
        $("video").css({
            "border": "solid "+$(".bColor").val()+" "+$(".bordure").val()+"px"
        });
    });

    $(function(){
        $( ".items" ).sortable({
            distance:10,
            axis: 'x'
        });
        $( ".items" ).disableSelection();
    });

    $(document).on("mouseup", function(){    // Pour éviter les bugs, laisser la détection d'action sur le document complet, sans le refresh peut être ignoré
        setTimeout(function(){
            refreshList();
        },10);
    });

    $(document).on("click", ".deroulement>li", function(){
        rePos($(this).index(), $(this).parent().parent().attr("id"));
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
        buildVideo();
    }

    function rePos(pos, element){

        if($("#"+element).index()==pos){

        }else{

            $(".items>li:nth-child("+($("#"+element).index()+1)+")").wrap("<div id='delete'></div>");
            var li = $("#delete").html();
            $("#delete").remove();

            if(pos==4){

                $(".items>li:nth-child("+(pos)+")").wrap("<div id='delete'></div>");
                $("#delete").append(li);

            }else{
                
                $(".items>li:nth-child("+(pos+1)+")").wrap("<div id='delete'></div>");
                $("#delete").prepend(li);
            }

            $("#delete").children().unwrap();

        }
        refreshList();
    }

    function buildVideo(){
        for(var i = 0; i<5; i++){
            old[i] = newOrdre[i];
            newOrdre[$(id[i]).index()]= liens[i];
        }

        for(var i=0; i<5; i++){
            if(old[i] != newOrdre[i]){
                diffVid=true;
            }
        }

        if(diffVid){
            diffVid=false;
            actualVideo = -1;
            playVid();
        }
    }

    $(".videoPrev").on("ended",function(){
        playVid();
    });

    function playVid(){
        actualVideo++
        if(actualVideo > 4){
            $(".videoPrev").trigger('pause');
            $(".pButton>path").attr("d","M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z");
            actualVideo=0;
            $(".videoPrev>source").attr("src",newOrdre[actualVideo]);
            $(".videoPrev")[0].load();
        }else{
            $(".videoPrev>source").attr("src",newOrdre[actualVideo]);
            $(".videoPrev")[0].load();
            if(vidEtat=="play"){
                $(".videoPrev").trigger("play");
            }else{
                $(".videoPrev").trigger('pause');
            }
        }
    }

});