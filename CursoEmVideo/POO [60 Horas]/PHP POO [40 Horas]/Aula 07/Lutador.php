<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getNacionalidade() {
            return $this->nacionalidade;
        }

        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }

        function getIdade() {
            return $this->idade;
        }

        function setIdade($idade) {
            $this->idade = $idade;
        }

        function getAltura() {
            return $this->altura;
        }

        function setAltura($altura) {
            $this->altura = $altura;
        }

        function getPeso() {
            return $this->peso;
        }

        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }

        function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->getPeso() <= 89.3) {
                $this->categoria = "Médio";
            } elseif ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        function getVitorias() {
            return $this->vitorias;
        }

        function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }

        function getDerrotas() {
            return $this->derrotas;
        }

        function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }

        function getEmpates() {
            return $this->empates;
        }

        function setEmpates($empates) {
            $this->empates = $empates;
        }

        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        function apresentar() {
            print("------------------------------"."\n");
            print("Lutador: ".$this->getNome()."\n");
            print("Origem: ".$this->getNacionalidade()."\n");
            print($this->getIdade()." anos"."\n");
            print($this->getAltura()." m de altura"."\n");
            print("Pesando ".$this->getPeso()." Kg"."\n");
            print("Ganhou: ".$this->getVitorias()."\n");
            print("Perdeu: ".$this->getDerrotas()."\n");
            print("Empatou: ".$this->getEmpates()."\n");
        }

        function status() {
            print($this->getNome()."\n");
            print(" é um peso ".$this->getCategoria()."\n");
            print($this->getVitorias()." vitorias"."\n");
            print($this->getDerrotas()." derrotas"."\n");
            print($this->getEmpates()." empates"."\n");
        }
    }