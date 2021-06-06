$(document).ready(function(){


    var hover = false;
    var timeout,count = 0;
    var mouseJustMoved,imageSrc = ["medias/_Audiovisuel.svg","medias/_Com.svg","medias/_Design.svg","medias/_Programmation.svg"];
    var timer = false;
    var scrollTrue = true;
    var scrolling = false;
    var position = 0;


    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });


    $(document).mousemove(function(){

        mouseJustMoved=true;
        
        if(!timer){
            timer=true;
        timeout = setInterval(function(){
        if(mouseJustMoved){
            mouseJustMoved=false;
            printPic(mX, mY, count);
            count++

            if(count > 63){     // Garder la variable count sur 64 bits
            count=0;
            }
        }else{
            clearInterval(timeout);
            timer=false;
        }
        
        }, 125);
    }
    
    });


    function printPic (X, Y, i){
        
    if(position==0){
        $("body").add($("<img src="+imageSrc[Math.floor(Math.random()*imageSrc.length)]+" id="+i+" class='pop'>")).appendTo($("body"))

        $("#"+i).css({"left": X, "top": Y, "transform": "rotate("+(Math.floor(Math.random()*60)-30)+"deg)"});

        setTimeout(function(){
            $("#"+i).css({"width": "5vh"});
        }, 25)

        setTimeout(function(){
            $("#"+i).css({"width": "0vh", "transform": "rotate(0deg)"});
        }, 1000)

        setTimeout(function(){
            $("#"+i).remove();
        }, 1750)
    }

    }

    $(document).on("mousemove",function(e){

        let semiWidth = window.innerWidth/2;
        let semiHeight = window.innerHeight/2;

        mX = e.clientX;
        mY = e.clientY;


        var high;
        var color = ["rgb(29,178,80)","rgb(11,131,198)","rgb(212,73,154)","rgb(238,184,29)"];   // Définir les couleurs de la page (haut droit / haut gauche / bas droit / bas gauche)
        
        if((Math.abs(e.clientX-semiWidth) < (window.innerWidth/3.5)) || (Math.abs(e.clientY-semiHeight) < (window.innerHeight/3.5))){ // si la souris est centrée :
            
            if(high){

                if((e.clientX < semiWidth)&&(e.clientY < semiHeight)){
                    $(".logo-path2").css('fill', color[0]);
    
                } else if((e.clientX > semiWidth)&&(e.clientY < semiHeight)){
                    $(".logo-path2").css('fill', color[1])
                
    
                } else if((e.clientX < semiWidth)&&(e.clientY > semiHeight)){
                    $(".logo-path2").css('fill', color[2])
    
                
                } else if((e.clientX > semiWidth)&&(e.clientY > semiHeight)){
                    $(".logo-path2").css('fill', color[3])
                }
            }
            setTimeout(function(){
                high = 1;
            },1000);

            for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[i]);
            }

            if(hover){
                $(".logo-container").css('width', "45vh");
                hover=false;
            }else{
                $(".logo-container").hover(function(){
                    $(".logo-path2").css({
                        "opacity":"0"
                    });
                    $(".logo-container").css({
                        "width":"60vh"
                    });
                    $(".titre").text("MMI - Find Your Way");
                },function(){
                    $(".logo-container").css({
                        "width":"45vh"
                    });
                    $(".logo-path2").css({
                        "opacity":"1"
                    });
                });
            }

        }else if( (Math.abs(e.clientX-semiWidth) < (window.innerWidth/2)) || (Math.abs(e.clientY-semiHeight) < (window.innerHeight/2))){ // SI LA SOURIS EST DANS UN ANGLE:
            
            if((e.clientX < semiWidth)&&(e.clientY < semiHeight)){
                // console.log("haut gauche");
                    $(".titre").text("Développement");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[0])
                }
                
                $(".logo-path2").css('fill', color[0])
    
            } else if((e.clientX > semiWidth)&&(e.clientY < semiHeight)){
                // console.log("haut droit");
                    $(".titre").text("Communication");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[1])
                }

                $(".logo-path2").css('fill', color[1])
    
    
            } else if((e.clientX < semiWidth)&&(e.clientY > semiHeight)){
                // console.log("bas gauche");
                    $(".titre").text("Design");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[2])
                }

                $(".logo-path2").css('fill', color[2])
    
                
            } else if((e.clientX > semiWidth)&&(e.clientY > semiHeight)){
                // console.log("bas droite");
                    $(".titre").text("Audiovisuel");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[3])
                }

                $(".logo-path2").css('fill', color[3])
            }

            if(!hover){
                $(".logo-container").css('width', "38vh");
                hover=true;
            }
            high = 0;

        }
    })

    $(window).on("wheel", function(e){
        if (!scrollTrue || scrolling){      // bloquer si le cooldown est actif
            return
        }
        scrollTrue = false;
        setTimeout(function(){              // Cooldown de 0.75s
            scrollTrue = true
        }, 750);

        var delta = e.originalEvent.deltaY  // Détection du scroll
        
        if(delta > 0){                      // scroll vers le bas
            if(position==0){
                position++;
                $("html, body").animate({
                    scrollTop: $("#scrolled").offset().top
                }, 750);
            }
            
        }else{                              // scroll vers le haut
            if(position==1){
                position--;
                $("html, body").animate({
                    scrollTop: 0
                }, 750);
            }       
        }
        scrolling = true
        setTimeout(function(){
            scrolling = false
        }, 750);
    });

    $(".container_2>img[src='medias/logo.svg']").on("click", function(){
        position--;
        $("html, body").animate({
            scrollTop: 0
        }, 750);
        scrolling = true
        setTimeout(function(){
            scrolling = false
        }, 750);
    })

    $(".logo-container").on("click", function(){
        position++;
        $("html, body").animate({
            scrollTop: $("#scrolled").offset().top
        }, 750);
        scrolling = true
        setTimeout(function(){
            scrolling = false
        }, 750);
    });




    // Due à l'arborescence, nous devons remettre le script de la barre de recherche ici :

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
                
                url: "pages/search.php",
                
                data: {
                    search: bRecherche
                }, success: function(html) {
                    $(".propositions").html(html).show();
                }
            });

        }
    });

    $("section>a").hover(function(){
        $("header .container>a").css({
            "background-color": $(this).css("background-color")
        })
    }, function(){
        for(var i=0; i<4; i++){
            $("header .container>a:nth-child("+(i+1)+")").css({
                "background-color": $("section>a:nth-child("+(i+1)+")").css("background-color")
            });
        }
    });
    
})