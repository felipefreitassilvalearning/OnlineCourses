$(function(){
    
    function validarCliqueHover(){

        $('.artigo1').click(function(){
            $('.artigo2').css('background-color','purple');
        });

        $('.artigo1').hover(function(){
            $('.artigo2').css('background-color','red');
        },function(){
            $('.artigo2').css('background-color','rgb(100,100,100)');
        });

    }

    //Focus/Blur método MEMO:
    /*$('textarea').focus(function(){
        alert('Agora estou na textarea');
    });

    $('textarea').blur(function(){
        alert('Estou saindo da textarea');
    });*/

    //Focus/Blur método lógico:
    $('textarea').focus(function(){
        alert('Agora entrei na textarea');
    }).blur(function(){
        alert('Estou saindo da textarea');
    });

    function validarFormulario(){
        $('select').change(function(){
            console.log("Meu select foi alterado");
        });
    }

    validarCliqueHover();
    validarFormulario();

});