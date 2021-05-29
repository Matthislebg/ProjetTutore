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
        checkNext()
    })
    $('.projetCheckLast').on('click',function(){
        checkLast()
    })
})