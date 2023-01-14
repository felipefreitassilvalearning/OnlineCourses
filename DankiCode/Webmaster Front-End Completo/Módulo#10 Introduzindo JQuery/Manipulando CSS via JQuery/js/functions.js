$(function(){
    
    $('#teste').css('padding-bottom','20px').css('background-color','red');

    setTimeout(function(){
        $('#teste.artigo1').css('background-color','green');
    },2000);

    setTimeout(function(){
        $('.artigo1 p').css('color','white');
    },4000);

    $('.artigo1 > p').css('color','rgba(0,0,0,0.6)');
    console.log($('.artigo1 > p').css('color'));

});