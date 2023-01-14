<?php
    require_once 'Animal.php';
    class Peixe extends Animal {

        private $corEscama;

        
        function locomover() {
            print("Nadando"."<br>");
        }

        
        function alimentar() {
            print("Comendo substâncias"."<br>");
        }

        
        function emitirSom() {
            print("Peixe não faz som"."<br>");
        }

        function soltarBolha() {
            print("Soltou uma bolha"."<br>");
        }

        function getCorEscama() {
            return $this -> corEscama;
        }

        function setCorEscama($corEscama) {
            $this -> corEscama = $corEscama;
        }

    }
