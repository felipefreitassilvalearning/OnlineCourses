<?php
    require_once 'Lobo.php';
    class Cachorro extends Lobo {

        function emitirSom() {
            print("Au! Au! Au!"."<br>");
        }

        // Visto que o php não permite polimorfismo por sobrecarga...

        function reagirFrase($frase) {
            $frase = strtolower($frase);
            if ($frase == "toma comida" || $frase == "olá") {
                print("Abanar e Latir"."<br>");
            } else {
                print("Rosnar"."<br>");
            }
        }

        function reagirHoraMin($hora, $min) {
            if ($hora < 12) {
                print("Abanar"."<br>");
            } elseif ($hora >= 18) {
                print("Ignorar"."<br>");
            } else {
                print("Abanar e Latir"."<br>");
            }
        }

        function reagirDono($dono) {
            if ($dono) {
                print("Abanar"."<br>");
            } else {
                print("Rosnar e Latir"."<br>");
            }
        }

        function reagirIdadePeso($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                    print("Abanar"."<br>");
                } else {
                    print("Latir"."<br>");
                }
            } else {
                if ($peso < 10) {
                    print("Rosnar"."<br>");
                } else {
                    print("Ignorar"."<br>");
                }
            }
        }
    }