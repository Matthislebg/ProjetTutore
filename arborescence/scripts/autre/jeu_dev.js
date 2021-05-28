$(document).on("ready",function(){

    var id;

    $(".outils>div").hide();

    $("body").on("change","input[type='radio']", function(){

        $(".outils>div").fadeOut();

        id=$(this).attr('id');

        if(id=="div"){
            $(".outils>div:nth-child(4), .outils>div:nth-child(5), .outils>div:nth-child(7)").fadeIn();

            $(document).on('input', '#widthS', function() {
    
                $(".code>"+id).css({
                    "width": $(this).val()+"vw"
                })
                
            });

            $(document).on('input', '#heightS', function() {
    
                $(".code>"+id).css({
                    "height": $(this).val()+"vh"
                })
                
            });
            
            $(document).on('input', '#bgcolorS', function() {

                console.log("changes "+$(this).val())
                $(".code>"+id).css({
                    "background": $(this).val()
                })

            });
        }
        if(id=="h2"){
            $(".outils>div:nth-child(3), .outils>div:nth-child(6), .outils>div:nth-child(8), .outils>div:nth-child(10)").fadeIn();

            $(document).on('input', '#fontS', function() {

                $(".code>div>"+id).css({
                    "font-size": ($(this).val()/100)+"rem"
                })
                
            });

            $(document).on('input', '#colorS', function() {

                $(".code>div>"+id).css({
                    "color": $(this).val()
                })
                
            });

            $(document).on('input', '#tCenterS', function() {

                if($(this).is(":checked")){
                    $(".code>div>"+id).css({
                        "text-align": "center"
                    })
                }else{
                    $(".code>div>"+id).css({
                        "text-align": "left"
                    })
                }
                
            });

            $(document).on('input', '#mBottomS', function() {

                $(".code>div>"+id).css({
                    "margin-bottom": $(this).val()+" vh"
                })

            });

        }
        if(id=="p"){
            $(".outils>div:nth-child(3), .outils>div:nth-child(4), .outils>div:nth-child(6), .outils>div:nth-child(8), .outils>div:nth-child(9), .outils>div:nth-child(10)").fadeIn();
            
            $(document).on('input', '#fontS', function() {

                $(".code>div>"+id).css({
                    "font-size": ($(this).val()/100)+"rem"
                })
                
            });

            $(document).on('input', '#colorS', function() {

                $(".code>div>"+id).css({
                    "color": $(this).val()
                })
                
            });

            $(document).on('input', '#tCenterS', function() {

                if($(this).is(":checked")){
                    $(".code>div>"+id).css({
                        "text-align": "center"
                    })
                }else{
                    $(".code>div>"+id).css({
                        "text-align": "left"
                    })
                }
                
            });

            $(document).on('input', '#widthS', function() {
    
                $(".code>div>"+id).css({
                    "width": $(this).val()*2+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });
            
            $(document).on('mouseleave', '#widthS', function() {
                $(".code>div>"+id).css({
                    "border": "0px"
                })
            })

            
            $(document).on('input', '#mAutoS', function() {

                if($(this).is(":checked")){
                    $(".code>div>"+id).css({
                        "margin": "auto"
                    })
                }else{
                    $(".code>div>"+id).css({
                        "margin": "0"
                    })
                }
                
            });

            $(document).on('input', '#mBottomS', function() {

                $(".code>div>"+id).css({
                    "margin-bottom": $(this).val()
                })
                
            });

        }
        if(id=="img"){
            $(".outils>div:nth-child(5), .outils>div:nth-child(4), .outils>div:nth-child(9)").fadeIn();

            $(document).on('input', '#mAutoS', function() {

                if($(this).is(":checked")){
                    $(".code>div>"+id).css({
                        "margin": "auto"
                    })
                }else{
                    $(".code>div>"+id).css({
                        "margin": "0"
                    })
                }
                
            });

            $(document).on('input', '#widthS', function() {
    
                $(".code>div>"+id).css({
                    "width": $(this).val()*2+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });

            $(document).on('input', '#heightS', function() {
    
                $(".code>div>"+id).css({
                    "height": $(this).val()*1.3+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });
            
            $(document).on('mouseleave', '#widthS, #heightS', function() {
                $(".code>div>"+id).css({
                    "border": "0px"
                })
            })
            
        }

    })

})