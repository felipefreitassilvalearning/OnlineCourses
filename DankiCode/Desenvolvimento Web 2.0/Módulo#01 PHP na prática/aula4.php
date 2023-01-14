<?php

    $println = '<br>======================================<br>';

    $frase = 'Felipe é programador';

    $novaFrase = str_replace('Felipe','João',$frase);

    echo $novaFrase;

    echo $println;

    $novaFrase = substr($frase,4,8);

    echo $novaFrase;

    echo $println;

    $novaFrase = explode(' ', $frase);

    print_r($novaFrase);

    echo $println;

    $novaFrase = implode(' ', $novaFrase);

    echo $novaFrase;

?>