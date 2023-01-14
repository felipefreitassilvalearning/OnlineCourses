/*Meu plugin*/
    $.fn.aplicarCor = function(options){

        var settings = $.extend({
            //Valores padrão:
            color: "white",
            backgroundColor: "black"
        }, options );

        return this.css({
            color: settings.color,
            backgroundColor: settings.backgroundColor
        });

    };