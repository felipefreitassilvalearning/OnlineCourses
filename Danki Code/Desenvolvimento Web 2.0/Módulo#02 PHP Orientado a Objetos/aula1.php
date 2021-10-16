<?php

    $println = '<br>=============<br>';

    class Felipe
    {
        function __construct()
        {
            echo 'Olá, mundo!';
        }
    }

    new Felipe();

    echo $println;

    class nomeFelipe
    {
        function __construct($nome)
        {
            echo $nome;
        }
    }

    new nomeFelipe('Felipe');

    echo $println;

    class varFelipe
    {
        public $nome = 'João';

        public function printNome(){
            return 'Felipe';
        }
    }

    $varFelipe = new varFelipe();

    echo $varFelipe->printNome();

    echo $println;
    
    echo $varFelipe->nome;

?>