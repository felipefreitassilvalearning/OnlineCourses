<?php
    require_once 'Mamifero.php';
    class Cachorro12 extends Mamifero {
        function enterrarOsso() {
            print("Enterrando Osso"."<br>");
        }

        function abanarRabo() {
            print("Abanando o Rabo"."<br>");
        }

        
        function emitirSom() {
            print("Au! Au! Au!"."<br>");
        }
    }
