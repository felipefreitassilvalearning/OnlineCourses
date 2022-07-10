<?php
    class Pessoa09 {
        private $nome;
        private $idade;
        private $sexo;

        function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getIdade() {
            return $this->idade;
        }

        function setIdade($idade) {
            $this->idade = $idade;
        }

        function getSexo() {
            return $this->sexo;
        }

        function setSexo($sexo) {
            $this->sexo = $sexo;
        }
        
        function toString() {
            return (""
                    ."\tNome: ".$this->getNome()
                    ."\n\tIdade: ".$this->getIdade()
                    ."\n\tSexo: ".$this->getSexo());
        }

        function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }
    }
