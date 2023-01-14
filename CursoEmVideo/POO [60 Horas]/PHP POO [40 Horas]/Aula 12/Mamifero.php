<?php
    require_once 'Animal.php';
    class Mamifero extends Animal {

        private $corPelo;

        
        function locomover() {
            print("Correndo"."<br>");
        }

        
        function alimentar() {
            print("Mamando"."<br>");
        }

        
        function emitirSom() {
            print("Som de Mamífero"."<br>");
        }

        function getCorPelo() {
            return $this -> corPelo;
        }

        function setCorPelo($corPelo) {
            $this -> corPelo = $corPelo;
        }

    }
