<?php

    include('Exemplo.class.php');

    $println = '<br>=============<br>';

    $exemplo = new Exemplo();
    $exemplo->var2 = 'Felipe';
    echo $exemplo->var2;

    echo $println;

    $exemplo2 = new Exemplo();
    $exemplo2->var2 = 'João';
    echo $exemplo2->var2;

    echo $println;
    
    echo Exemplo::$var3;

    echo $println;
    
    Exemplo::$var3 = 'Outra variável';
    echo Exemplo::$var3;

    echo $println;

    Exemplo::metodoEstatico();

    echo $println;

    $exemplo4 = new Exemplo();
    $exemplo4->setVar1('Felipe');
    echo $exemplo4->pegaVar1();

    echo $println;

    $exemplo5 = new Exemplo();
    $exemplo5->setVar1('João');
    echo $exemplo5->pegaVar1();

?>