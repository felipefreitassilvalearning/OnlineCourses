<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero {
        function usarBolsa() {
            print("Usando bolsa"."<br>");
        }

        
        function locomover() {
            print("Saltando"."<br>");
        }
    }
