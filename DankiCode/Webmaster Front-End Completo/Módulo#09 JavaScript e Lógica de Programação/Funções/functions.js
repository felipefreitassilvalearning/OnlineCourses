window.onload = function(){

    /*function nomedafuncao(parâmetros){
        o que ela realiza
    }*/

    function realizarConta(num1,num2){
        console.log((36 - 2*num2 - num1) / 3);
        if((num1 == 0) || (num2 == 0)){
            console.log("Vagabundo.");
        }
    }

    realizarConta(6,0);


    /*function realizarConta(num1,num2){
        return num1+num2;
    }

    var resultado = realizarConta(10,10)

    console.log(resultado);*/


    var variavel = function(){
        console.log("Minha função através da variável");
    };

    console.log(typeof(variavel));


    var obj = {'nome':'Felipe','idade':17};

    obj.func = function(){
        console.log('Minha função');
    }

    obj.func();


    var variavel = [];

    variavel[0] = [];

    variavel[0][2] = 'Felipe';

    console.log(variavel[0][2]);


    variavel.obj = {};
    
    variavel.obj.nome = 'João';

    console.log(variavel.obj.nome);

}