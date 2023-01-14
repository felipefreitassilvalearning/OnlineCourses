<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar() {
            if ($this->tampada) {
                echo "<p>Erro! Não posso rabiscar tampada.</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;
        }
    }
?>