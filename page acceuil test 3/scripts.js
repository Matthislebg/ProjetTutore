$(document).ready(function(){



    var timeout,count = 0;

    var imageSrc = ["image/matthis1.jpg","image/matthis2.png","image/matthis3.png","image/matthis4.png"];

    
    $(document).mousedown(function(e){



        timeout = setInterval(function(){
            
            printPic(mX, mY, count);
            count++

            if(count > 62){     // Garder la variable count sur 64 bits
            count=0;
            }

        }, 150);
    
        return false;
    });
    
    $(document).mouseup(function(){
        clearInterval(timeout);
        return false;
    });




    function printPic (X, Y, i){
        

        $("body").add($("<img src="+imageSrc[Math.floor(Math.random()*imageSrc.length)]+" id="+i+" class='pop'>")).appendTo($("body"))

        $("#"+i).css({"left": X, "top": Y});

        setTimeout(function(){
            $("#"+i).css("width", "25vh");
        }, 25)

        setTimeout(function(){
            $("#"+i).css("width", "0vh");
        }, 1000)

        setTimeout(function(){
            $("#"+i).remove();
        }, 1750)

    }





    $(document).on("mousemove",function(e){


        let semiWidth = window.innerWidth/2;
        let semiHeight = window.innerHeight/2;

        mX = e.clientX;
        mY = e.clientY;


        var high;
        var color = ["rgb(29,178,80)","rgb(11,131,198)","rgb(212,73,154)","rgb(238,184,29)"];   // Définir les couleurs de la page (haut droit / haut gauche / bas droit / bas gauche)
        
        if((Math.abs(e.clientX-semiWidth) < (window.innerWidth/3.5)) || (Math.abs(e.clientY-semiHeight) < (window.innerHeight/3.5))){ // If mouse is centered: 
            
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

            $(".logo-container").css('width', "45vh");


        }else if( (Math.abs(e.clientX-semiWidth) < (window.innerWidth/2)) || (Math.abs(e.clientY-semiHeight) < (window.innerHeight/2))){ // SI LA SOURIS EST DANS UN ANGLE:
            
            if((e.clientX < semiWidth)&&(e.clientY < semiHeight)){
                // console.log("haut gauche");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[0])
                }
                
                $(".logo-path2").css('fill', color[0])
    
            } else if((e.clientX > semiWidth)&&(e.clientY < semiHeight)){
                // console.log("haut droit");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[1])
                }

                $(".logo-path2").css('fill', color[1])
    
    
            } else if((e.clientX < semiWidth)&&(e.clientY > semiHeight)){
                // console.log("bas gauche");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[2])
                }

                $(".logo-path2").css('fill', color[2])
    
                
            } else if((e.clientX > semiWidth)&&(e.clientY > semiHeight)){
                // console.log("bas droite");

                for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", color[3])
                }

                $(".logo-path2").css('fill', color[3])
            }

            $(".logo-container").css('width', "60vh");
            high = 0;

        }



    })

    
    
})


