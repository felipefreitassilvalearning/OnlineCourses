<?php
    require_once 'Animal.php';
    class Reptil extends Animal {

        private $corEscama;

        
        function locomover() {
            print("Rastejando"."<br>");
        }

        
        function alimentar() {
            print("Comendo Vegetais"."<br>");
        }

        
        function emitirSom() {
            print("som de Réptil"."<br>");
        }

        function getCorEscama() {
            return $this -> corEscama;
        }

        function setCorEscama($corEscama) {
            $this -> corEscama = $corEscama;
        }

    }
