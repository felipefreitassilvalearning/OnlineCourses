<?php
    require_once 'Animal.php';
    class Ave extends Animal {

        private $corPena;

        
        function locomover() {
            print("Voando"."<br>");
        }

        
        function alimentar() {
            print("Comendo frutas"."<br>");
        }

        
        function emitirSom() {
            print("Som de ave"."<br>");
        }

        function fazerNinho() {
            print("Construiu um ninho"."<br>");
        }

        function getCorPena() {
            return $this -> corPena;
        }

        function setCorPena($corPena) {
            $this -> corPena = $corPena;
        }

    }
