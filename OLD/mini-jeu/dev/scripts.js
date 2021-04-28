$(document).on("ready",function(){

    var id;

    $(".outils>div").hide();

    $("body").on("change","input[type='radio']", function(){

        $(".outils>div").fadeOut();

        id=$(this).attr('id');

        if(id=="div"){
            $(".div").fadeIn();

            $(document).on('input', '.div>#widthS', function() {
    
                $(".code>"+id).css({
                    "width": $(this).val()+"vw"
                })
                
            });

            $(document).on('input', '.div>#heightS', function() {
    
                $(".code>"+id).css({
                    "height": $(this).val()+"vw"
                })
                
            });
            
            $(document).on('input', '.div>#bgcolorS', function() {

                $(".code>"+id).css({
                    "background": $(this).val()
                })

            });
            
            $(document).on('input', '.div>#bRadiusS', function() {

                $(".code>"+id).css({
                    "border-radius": $(this).val()+"px"
                })

            });
            
            $(document).on('input', '.div>#borderColorS, .div>#borderSizeS', function() {

                $(".code>"+id).css({
                    "border": $('.div>#borderColorS').val()+" solid "+$('.div>#borderSizeS').val()+"px"
                })

            });
            
        }

        if(id=="h2"){
            $(".h2").fadeIn();

            $(document).on('input', '.h2>#fontS', function() {

                $(".code>div>"+id).css({
                    "font-size": ($(this).val()/100)+"rem"
                })
                
            });

            $(document).on('input', '.h2>#colorS', function() {

                $(".code>div>"+id).css({
                    "color": $(this).val()
                })
                
            });

            $(document).on('input', '.h2>#tCenterS', function() {

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

            $(document).on('input', '.h2>#mBottomS', function() {

                $(".code>div>"+id).css({
                    "margin-bottom": $(this).val()+"vw"
                })

            });

            $(document).on('input', '.h2>#mTopS', function() {

                $(".code>div>"+id).css({
                    "margin-top": $(this).val()+"vw"
                })

            });

            $(document).on('input', '.h2>#opacityS', function() {

                $(".code>div>"+id).css({
                    "opacity": $(this).val()+"%"
                })

            });

        }
        if(id=="p"){
            $(".p").fadeIn();
            
            $(document).on('input', '.p>#fontS', function() {

                $(".code>div>"+id).css({
                    "font-size": ($(this).val()/100)+"rem"
                })
                
            });

            $(document).on('input', '.p>#colorS', function() {

                $(".code>div>"+id).css({
                    "color": $(this).val()
                })
                
            });

            $(document).on('input', '.p>#tCenterS', function() {

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

            $(document).on('input', '.p>#widthS', function() {
    
                $(".code>div>"+id).css({
                    "width": $(this).val()*2+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });
            
            $(document).on('mouseleave', '.p>#widthS', function() {
                $(".code>div>"+id).css({
                    "border": "0px"
                })
            })

            
            $(document).on('input', '.p>#mAutoS', function() {

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

            $(document).on('input', '.p>#opacityS', function() {

                $(".code>div>"+id).css({
                    "opacity": $(this).val()+"%"
                })

            });

        }
        if(id=="img"){
            $(".img").fadeIn();

            $(document).on('input', '.img>#mAutoS', function() {

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

            $(document).on('input', '.img>#widthS', function() {
    
                $(".code>div>"+id).css({
                    "width": $(this).val()*2+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });

            $(document).on('input', '.img>#heightS', function() {
    
                $(".code>div>"+id).css({
                    "height": $(this).val()*1.3+"%",
                    "border": "2px solid rgb(238,184,29)"
                })
                
            });
            
            $(document).on('mouseleave', '.img>#widthS, .img>#heightS', function() {
                $(".code>div>"+id).css({
                    "border": "0px"
                })
            })

            $(document).on('input', '.img>#mTopS', function() {

                $(".code>div>"+id).css({
                    "margin-top": $(this).val()+"vw"
                })

            });

            $(document).on('input', '.img>#opacityS', function() {

                $(".code>div>"+id).css({
                    "opacity": $(this).val()+"%"
                })

            });
            
        }

    })

})