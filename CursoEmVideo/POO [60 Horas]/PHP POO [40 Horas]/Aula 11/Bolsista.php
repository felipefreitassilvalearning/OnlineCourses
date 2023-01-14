<?php
    require_once '..//Aula 10//Aluno.php';
    class Bolsista extends Aluno {
        private $bolsa;

        function getBolsa() {
            return $this -> bolsa;
        }

        function setBolsa($bolsa) {
            $this -> bolsa = $bolsa;
        }

        function renovarBolsa() {
            print("Renovando bolsa de ".$this -> nome."<br>");
        }

        function pagarMensalidade() {
            print($this -> nome." é bolsista! Então paga com desconto"."<br>");
        }
    }
