$(function(){

    /*
    
    var timer;

    $(window).scroll(function(){
        console.log("Scroll ativo");
    });

    $(window).resize(function(){
        //console.log("Minha tela está sendo redimensionada!");
        clearTimeout(timer);
        timer = setTimeout(function(){
            location.href = "file:///D:/Programming/Cursos/Danki%20Code/Curso%20Webmaster%20Front-End%20Completo/M%C3%B3dulo%2310%20Introduzindo%20JQuery/Mais%20sobre%20eventos/index.html";
        },1000);

    });

    $('a').click(function(e){
        //ou
        e.preventDefault();
        /*ou
        return false; * /
    });

    */

    $('body').click(function(){
        $('.box').css('opacity','0.1');
    })

    $('.box').click(function(e){
        e.stopPropagation();
    })

})