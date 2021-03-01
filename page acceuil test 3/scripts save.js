$(document).ready(function(){

        
    document.addEventListener("mousemove", moving);
        
    function moving(e){

        let demLargeur = window.innerWidth/2;
        let demHauteur = window.innerHeight/2;

        var haut;
        var couleur = ["rgb(29,178,80)","rgb(11,131,198)","rgb(212,73,154)","rgb(238,184,29)"];
        
        if((Math.abs(e.clientX-demLargeur) < (window.innerWidth/3.5)) || (Math.abs(e.clientY-demHauteur) < (window.innerHeight/3.5))){ // SI LA SOURIS EST AU CENTRE:
            
            if(haut){

                if((e.clientX < demLargeur)&&(e.clientY < demHauteur)){
                    $("#under").css('fill', couleur[0]);
    
                } else if((e.clientX > demLargeur)&&(e.clientY < demHauteur)){
                    $("#under").css('fill', couleur[1])
                
    
                } else if((e.clientX < demLargeur)&&(e.clientY > demHauteur)){
                    $("#under").css('fill', couleur[2])
    
                
                } else if((e.clientX > demLargeur)&&(e.clientY > demHauteur)){
                    $("#under").css('fill', couleur[3])
                }
            }
            setTimeout(function(){
                haut = 1;
            },1000);

            for(var i = 0; i < 4; i++){
                $("div.borders div:nth-child("+(i+1)+")").css("background", couleur[i]);
            }

            $(".sizing").css('width', "45vh");


        }else if( (Math.abs(e.clientX-demLargeur) < (window.innerWidth/2)) || (Math.abs(e.clientY-demHauteur) < (window.innerHeight/2))){ // SI LA SOURIS EST DANS UN ANGLE:
            
            pathColor();            
            $(".sizing").css('width', "60vh");
            haut = 0;

        }





        function pathColor(){

            if((e.clientX < demLargeur)&&(e.clientY < demHauteur)){
                // console.log("haut gauche");

                for(var i = 1; i < 5; i++){
                $("div.borders div:nth-child("+i+")").css("background", "rgb(29,178,80)")
                }
                
                $("#under").css('fill', "rgb(29,178,80)")
    
            } else if((e.clientX > demLargeur)&&(e.clientY < demHauteur)){
                // console.log("haut droit");

                for(var i = 1; i < 5; i++){
                $("div.borders div:nth-child("+i+")").css("background", "rgb(11,131,198)")
                }

                $("#under").css('fill', "rgb(11,131,198)")
    
    
            } else if((e.clientX < demLargeur)&&(e.clientY > demHauteur)){
                // console.log("bas gauche");

                for(var i = 1; i < 5; i++){
                $("div.borders div:nth-child("+i+")").css("background", "rgb(212,73,154)")
                }

                $("#under").css('fill', "rgb(212,73,154)")
    
                
            } else if((e.clientX > demLargeur)&&(e.clientY > demHauteur)){
                // console.log("bas droite");

                for(var i = 1; i < 5; i++){
                $("div.borders div:nth-child("+i+")").css("background", "rgb(238,184,29)")
                }

                $("#under").css('fill', "rgb(238,184,29)")
            }
        }
    




    }

    
    
})