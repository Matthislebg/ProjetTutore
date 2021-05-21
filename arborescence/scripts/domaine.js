// scrolling from sections 0 to 4
$(document).ready(function(){
    var scrollTrue = true
    var position = 0
    var timer = 1000
    var scrolling = false

    // reset position on refresh
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });
    
    $(window).on('wheel', function(e){
        if (!scrollTrue || scrolling){ // prevent scroll if already scrolling
            return
        }

        // temporary scroll desactivation
        scrollTrue = false
        setTimeout(function(){ 
            scrollTrue = true
        }, 400);
        
        var delta = e.originalEvent.deltaY // detect scroll direction
        
        if (delta > 0) { // going down
            position++
            if (position > 4){ // if the footer is reached, scroll back to the top
                position = 0
            }
            $('html, body').animate({
                scrollTop: $("section").eq(position).offset().top // scroll to the next section
            }, timer)
            scrolling = true
            setTimeout(function(){
                scrolling = false
            }, timer);
        } else { // going up
            position--
            if (position < 0){ // if the header is reached, stay on the first section
                position = 0
                timer = 0
            }
            $('html, body').animate({
                scrollTop: $("section").eq(position).offset().top // scroll to the precedent section
            }, timer)
            scrolling = true
            setTimeout(function(){
                scrolling = false
            }, timer);
            timer = 1000
        }
        console.log(position)
    })
})