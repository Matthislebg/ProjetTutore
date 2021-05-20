
$(document).ready(function(){
    console.log("t");
    Scroll(1);
                
    function Scroll(dest){
        var interval = setInterval(function(){
            $("html, body").animate({scrollTop: 1000},1000);
        }, 1000);
        setTimeout({
            clearInterval(interval);
        }, 1000);
    }
        
})