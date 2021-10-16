<?php

    $println = '<br>========================<br>';

    include('Class1.php');
    include('Class2.php');

    $class1 = new \Sessao1\Class1;

    echo $println;

    use \Sessao1\Class1 as class1;
    $class1 = new class1;

?>