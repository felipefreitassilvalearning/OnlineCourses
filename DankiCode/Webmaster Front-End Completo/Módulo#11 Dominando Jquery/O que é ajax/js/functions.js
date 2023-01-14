$(function(){

    $.ajax({
        'url':'conteudo.hmtl',
        //'method':'post',
        //data: {'nome':'felipe','idade':'17'},
    }).done(function(data){
        $('#container').appendTo(data);
    });

});