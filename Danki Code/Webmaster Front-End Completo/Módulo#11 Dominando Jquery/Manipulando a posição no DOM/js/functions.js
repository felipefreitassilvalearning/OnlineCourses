$(function(){

    /*append adiciona ao final do elemento.
    $('.box div').eq(0).append('<h3>Meu elemento adicionado dinamicamente</h3>');*/

    /*appendTo escreve-se primeiro o que, depois aonde
    var el = $('<h3>Meu Conteúdo</h3>').appendTo($('.box'));
    el.css('color','red');*/

    /*prepend vai no começo do elemento
    var el = $('<h3>Olá, mundo!</h3>').prependTo($('.box'));
    el.css('color','green');*/

    /*var ta = '<p>Meu conteúdo após a div box</p>';
    var tb = '<p>Meu conteúdo anterior a div box</p>';
    //$('.box').after(ta);
    //$('.box').before(tb);

    $(ta).insertAfter($('.box')).css('color','blue');
    $(tb).insertBefore($('.box')).css('color','red');*/

    setTimeout(function(){
        $('.box').eq(1).remove();
    },3000);

})