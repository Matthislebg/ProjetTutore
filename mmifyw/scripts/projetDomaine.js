$(document).ready(function(){
    function checkNext(){
        for (let i = 1; i < 5; i++) {
            if ( $('#radio-'+ i).prop('checked') ){
                console.log('#radio-'+ i++)
                $('#radio-'+ i++).prop('checked', true)
            }
        }
    }

    function checkLast(){
        for (let i = 4; i > 0; i--) {
            if ( $('#radio-'+ i).prop('checked') ){
                console.log('#radio-'+ i--)
                $('#radio-'+ i--).prop('checked', true)
            }
        }
    }

    $('.projetCheckNext').on('click',function(){
        if ( $('#radio-4').prop('checked') ){
            $('.carrousel').css('animation','0.5s linear tremble')
            setTimeout(function(){
                $('.carrousel').css('animation','')
            }, 500)
        }
        checkNext()
    })
    $('.projetCheckLast').on('click',function(){
        if ( $('#radio-1').prop('checked') ){
            $('.carrousel').css('animation','0.5s linear tremble')
            setTimeout(function(){
                $('.carrousel').css('animation','')
            }, 500)
        }
        checkLast()
    })
})