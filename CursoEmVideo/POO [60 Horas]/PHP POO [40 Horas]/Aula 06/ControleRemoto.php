<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;

        function __construct() {
            $this->setVolume(50);
            $this->setLigado(true);
            $this->setTocando(false);
        }

        public function getVolume() {
            return $this->volume;
        }
    
        private function setVolume($volume) {
            $this->volume = $volume;
        }
    
        private function getLigado() {
            return $this->ligado;
        }
    
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
    
        private function getTocando() {
            return $this->tocando;
        }
    
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        public function ligar() {
            $this->setLigado(true);
        }
    
        public function desligar() {
            $this->setLigado(false);
        }
    
        public function abrirMenu() {
            print("----- MENU -----\n");
            print("Está ligado? ".$this->getLigado()."\n");
            print("Está tocando? ".$this->getTocando()."\n");
            print("Volume: ".$this->getVolume()."\n");
            for ($i = 0; $i < $this->getVolume(); $i += 10) {
                print("| ");
            }
            print("\n");
        }
    
        public function fecharMenu() {
            print("Fechando menu\n");
        }
    
        public function maisVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 5);
            } else {
                print("Impossível aumentar volume.\n");
            }
        }
    
        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 5);
            } else {
                print("Impossível diminuir volume.\n");
            }
        }
    
        public function ligarMudo() {
            if (($this->getLigado()) && ($this->getVolume() > 0)) {
                $this->setVolume(0);
            }
        }
    
        public function desligarMudo() {
            if (($this->getLigado()) && ($this->getVolume() == 0)) {
                $this->setVolume(50);
            }
        }
    
        public function play() {
            if (($this->getLigado()) and !($this->getTocando())) {
                $this->setTocando(true);
            } else {
                print("Não consegui reproduzir\n");
            }
        }
    
        public function pause() {
            if (($this->getLigado()) && ($this->getTocando())) {
                $this->setTocando(false);
            } else {
                print("Não consegui pausar\n");
            }
        }
    }
