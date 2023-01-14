$(function(){

    var el = $('.box');

    var meutexto = 'Olá, mundo!';
    el.html("<div class=\"teste\">"+meutexto+"</div>");
    el.html(el.html() + '<h1 class="texto1">Meu Texto via javascript!</h1>');

    //console.log(el.html());


    $('.box2').text("<div></div>");
    $('.box2').text($('.box2').text() + "Olá, mundo!");

    console.log(el.text());


    $('input[type=text]').val("Olá, mundo!");

    $('textarea').text("Olá, mundo!");   
    
});