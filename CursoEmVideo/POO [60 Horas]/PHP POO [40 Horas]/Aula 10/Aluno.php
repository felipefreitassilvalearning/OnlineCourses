<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        function getMatricula() {
            return $this -> matricula;
        }

        function setMatricula($matricula) {
            $this -> matricula = $matricula;
        }

        function getCurso() {
            return $this -> curso;
        }

        function setCurso($curso) {
            $this -> curso = $curso;
        }

        function cancelarMatricula() {
            print("Matrícula será cancelada.<br>");
            $this -> setMatricula(0);
        }
    
        function pagarMensalidade() {
            print("Pagando mensalidade do aluno ".$this->getNome()."<br>");
        }

    }
