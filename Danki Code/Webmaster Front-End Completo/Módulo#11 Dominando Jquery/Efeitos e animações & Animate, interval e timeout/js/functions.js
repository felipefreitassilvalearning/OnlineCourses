$(function(){

    var timer;  

    /*

    var timeOut = function(){
        $('.box2').animate({
            'width':'45%',
            'height':'350px',
            'marginLeft':'15px',
            'paddingTop':'50px'
        },2000);
    };

    $('body').click(function(){
        alert("Animação com timeout foi cancelada!");
        clearTimeout(timer);
    });

    $('.box1').animate({
        'width':'45%',
        'height':'350px',
        'marginRight':'150px',
        'paddingTop':'50px'
    },2000,function(){
        setTimeout(timeOut,10000);
    });

    */

    timer = setInterval(function(){
        $('.box1').fadeOut(1000,function(){
            $('.box2').fadeIn(1000,function(){
                $('.box2').fadeOut(1000,function(){
                    $('.box1').fadeIn(1000);
                });
            });
        });
    },4000);

    $('.box1').click(function(){
        $('.box2').slideToggle(1000,function(){
            $('.box1').css('display','none');
        });
    });
    
    $('.box2').click(function(){
        $('.box1').slideToggle(1000,function(){
            $('.box2').css('display','none');
        });
    });

    $('.stop').click(function(){
        console.log("Acabou o recreio.");
        clearInterval(timer);
    });

});