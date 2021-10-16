<?php

    $println = '<hr>';

    final class Filha
    {
        public function printHello()
        {
            echo 'Hello, World!';
        }
    }

    class Pai
    {
        public function printBye()
        {
            echo 'Bye, World!';
        }
    }

    $filha = new Filha;
    $filha->printHello();

    echo '<br>';

    $pai = new Pai;
    $pai->printBye();

    echo $println;

    class Filhota
    {
        protected function funcaoTeste()
        {
            echo 'Chamando função teste';
        }

        public function printHello()
        {
            echo 'Hello, world!';
        }
    }

    class Paizao extends Filhota
    {
        public function printHello()
        {
            parent::printHello();
            echo 'Nova função';
        }

        public function printBye()
        {
            echo 'Bye, world!';
            echo '<br>';
            $this->funcaoTeste();
        }
    }

    $paizao = new Paizao;
    $paizao->printHello();

    echo '<br>';

    $paizao = new Paizao;
    $paizao->printBye();

    echo $println;

    $paizaco = new Paizao;
    $paizaco->printBye();

?>