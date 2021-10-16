$(function(){

    var el = $('#source .texto').clone();
    $('#container').html(el.html());
    //copia

    $('#source .texto').appendTo('#container');
    //move              para        ca

})