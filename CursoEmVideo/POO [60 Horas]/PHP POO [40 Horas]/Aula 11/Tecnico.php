<?php
    require_once '..//Aula 10//Aluno.php';
    class Tecnico extends Aluno {
        private $registroProfissional;

        function getRegistroProfissional() {
            return $this -> registroProfissional;
        }

        function setRegistroProfissional($registroProfissional) {
            $this -> registroProfissional = $registroProfissional;
        }

        function praticar() {
            print("Estou praticando."."<br>");
        }
    }
