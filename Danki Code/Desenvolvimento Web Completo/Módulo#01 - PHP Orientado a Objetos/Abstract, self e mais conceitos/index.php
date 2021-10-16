<?php

    $println = '<br>===================================================<br>';

    //Abstract pode apenas ser herdada, nunca instanciada diretamente
    abstract class Teste
    {
        public function func1()
        {
            echo 'Chamando função 1';
        }

        abstract function func2();
    }

    class Principal extends Teste
    {
        public function func2()
        {
            echo 'Estou declarando corretamente um método abstrato';
        }

        public static function metodoEstatico()
        {
            echo 'Método Estático';
        }

        public function funcao()
        {
            Principal::metodoEstatico();
            self::metodoEstatico();
        }
    }

    $principal = new Principal;
    $principal->func1();
    echo '<br>';
    $principal->func2();

    echo $println;

    Principal::metodoEstatico();

    echo $println;

    $principal->funcao();

?>