$(function(){

    //var elWidth = $('.box').width();
    //console.log(elWidth);

    //Pegar a largura do elemento
    $('.box').width();

    //Setar a largura do elemento
    $('.box').css('width','900px');
    $('.box').css('height','300px')

    console.log("Width: "+$('.box').width()); //Com padding
    console.log("InnerWidth: "+$('.box').innerWidth()); //Descontando o padding
    console.log("OuterWidth: "+$('.box').outerWidth(true)); //Com borda e margem

    console.log("Height: "+$('.box').height()); //Com padding
    console.log("InnerHeight: "+$('.box').innerHeight()); //Descontando o padding
    console.log("OuterHeight: "+$('.box').outerHeight(true)); //Com borda e margem

})