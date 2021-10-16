$(function(){

    /*$('a').click(function(){
        alert('Olá, Mundo!');
    });

    $('body').on('click','a',function(){
        alert('Olá, Mundo!')
        return false;
    });

    setTimeout(function(){
        $('body').html('<a href="">Meu Link!</a>');
    },3000);*/

    var funcr = function(){
        $('input[type=text]').eq($(this).index()).css('background-color','red');
    }

    var funcg = function(){
        $(this).css('background-color','green');
    }

    $('input[type=text]').keyup(funcr);
    $('input[type=text]').keydown(funcg);
    
})