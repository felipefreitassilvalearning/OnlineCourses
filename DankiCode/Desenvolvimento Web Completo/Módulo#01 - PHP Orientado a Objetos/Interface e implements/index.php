<?php

    include('interface1.php');

    $println = '<br>===================================================<br>';

    class Teste implements Interface1
    {
        public function printOnScreen($par)
        {
            echo $par;
        }
    }

    $teste = new Teste;
    $teste->printOnScreen('Oei');

?>