<?php

    $println = '<br>========================================<br>';

    $nome = array('nome1'=>'Felipe', 'João', 'Guilherme');

    echo $nome[0];
    echo '<br>';
    echo $nome['nome1'];

    echo $println;

    print_r($nome);

    echo $println;

    foreach ($nome as $key => $value) {
        echo $value;
        echo '<br>';
    }
    
    echo $println;

    foreach ($nome as $key => $value) {
        echo '<br>';
        echo $key;
    }

    echo $println;

    for ($i=0; $i < 10; $i++) { 
        echo $i;
        echo '<br>';
    }

    echo $println;

    for ($i=0; $i < sizeof($nome); $i++) { 
        echo $nome[$i];
        echo '<br>';
    }

    echo $println;

    $i = 0;
    while($i < 10){
        echo 'Mensagem';
        echo '<br>';
        $i++;
    }

?>