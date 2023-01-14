<?php

    class Pessoa{
        private $nome = 'Felipe';
        private $idade = 18;
        private $peso = '54kg';

        public function crescer(){
            $this->comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo ';
        }
    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>