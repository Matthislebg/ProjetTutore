$(document).ready(function(){


    var timeout,count = 0;
    var mouseJustMoved;
    var imageSrc = ["../medias/_Audiovisuel.svg","../medias/_Com.svg","../medias/_Design.svg","../medias/_Programmation.svg"];
    var headers = ["Audiovisuel","Communication","Design","Programmation"];
    var image = "../medias/logo.svg";
    var timer = false;
    var position = 0;

    console.log($.trim($("header .container_2>h1").text()))

    for(var i=0;i<4;i++){
        if($.trim($("header .container_2>h1").text())==headers[i]){
            image=imageSrc[i];
        }
    }


    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });


    $("section").mousemove(function(e){

        mX = e.pageX;
        mY = e.pageY;

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
            $("body").add($("<img src="+image+" id="+i+" class='pop'>")).appendTo($("body"))

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
})