<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        function getNome() {
            return $this -> nome;
        }

        function setNome($nome) {
            $this -> nome = $nome;
        }

        function getIdade() {
            return $this -> idade;
        }

        function setIdade($idade) {
            $this -> idade = $idade;
        }

        function getSexo() {
            return $this -> sexo;
        }

        function setSexo($sexo) {
            $this -> sexo = $sexo;
        }

        function toString() {
            return (""
                    ."Nome: ".$this -> getNome()
                    ."\nIdade: ".$this -> getIdade()
                    ."\nSexo: ".$this -> getSexo());
        }

        function fazerAniv() {
            $this -> setIdade($this -> getIdade() + 1);
        }

    }
