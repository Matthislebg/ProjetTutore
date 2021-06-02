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

    $("body").on("mouseenter", ".jeuCm", function(){
        scrollTrue = false
    })
    $("body").on("mouseleave", ".jeuCm", function(){
        scrollTrue = true
    })
    
    // listen wheel event
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
        buttonswitch() // listen switch
    })

// NAV BUTTONS
    // nav buttons switch position to match section order
    function buttonswitch(){
        $("div.btnNav svg").eq(position).html('<circle cx="8" cy="8" r="8" stroke="none"/>')
        for(i=0;i<5;i++){
            if (i != position){
                $("div.btnNav svg").eq(i).html('<path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke-width="2"/>')
            }
        }
        
    }

    // click to navigate
    function navbuttons(newPosition){
        $("div.btnNav svg").eq(newPosition).on('click',function(){
            if (!scrollTrue || scrolling){ // prevent scroll if already scrolling
                return
            }            
            // temporary scroll desactivation
            scrollTrue = false
            setTimeout(function(){ 
                scrollTrue = true
            }, 400);
            
            position = newPosition
            $('html, body').animate({
                scrollTop: $("section").eq(newPosition).offset().top // go to clicked section
            }, timer)
            scrolling = true
            setTimeout(function(){
                scrolling = false
            }, timer);
            buttonswitch()
        })
    }

    // listen clicks
    navbuttons(0)
    navbuttons(1)
    navbuttons(2)
    navbuttons(3)
    navbuttons(4)
})