<?php
    class Caneta {
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        public function __construct($modelo, $cor, $ponta) {
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ponta = $ponta;
            $this->setTampada(true);
        }

        // public function Caneta() {
        //     $this->cor = "Azul";
        //     $this->tampar();
        // }
        
        public function setTampada($tampada) {
            $this->tampada = $tampada;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($ponta) {
            $this->ponta = $ponta;
        }
    }
?>