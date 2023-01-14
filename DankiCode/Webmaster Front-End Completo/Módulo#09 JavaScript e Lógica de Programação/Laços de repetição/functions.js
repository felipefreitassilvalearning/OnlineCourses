window.onload = function(){

    var repeticao = 1;

    //While --> Precisamos de uma variável inicial
    while(repeticao <= 10){
        console.log("Olá, mundo número "+repeticao);
        repeticao++;
    }

    console.log("Cheguei até o final!");

    
    for(var numero = 0; numero < 10; numero++){
        console.log("Olá, mundo!")
    }


    do{
        console.log("Olá, mundo!");
        nome = 'joao';
    }while(nome == 'Felipe');

}