<?php

    $println = '<br>=============<br>';

    function helloWorld(){
        echo 'Hello, World!';
    }

    helloWorld();

    echo $println;

    function somar($n1,$n2){
        return $n1+$n2;
    }

    echo somar(10,20);

    echo $println;

    function verificarNome($nome){
        if($nome == 'Felipe'){
            return true;
        } else {
            return false;
        }
    }

    if(verificarNome('Felipe')){
        echo 'Verdade!';
    }

?>