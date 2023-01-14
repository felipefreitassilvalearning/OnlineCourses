<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        function getEspecialidade() {
            return $this -> especialidade;
        }

        function setEspecialidade($especialidade) {
            $this -> especialidade = $especialidade;
        }

        function getSalario() {
            return $this -> salario;
        }

        function setSalario($salario) {
            $this -> salario = $salario;
        }

        function receberAum($aumento) {
            $this -> setSalario($this -> getSalario() + $aumento);
        }

    }
