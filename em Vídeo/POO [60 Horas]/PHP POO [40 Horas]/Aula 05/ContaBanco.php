<?php
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function isStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                print("Conta com dinheiro\n");
            } elseif ($this->getSaldo() < 0) {
                print("Conta em débito\n");
            } else {
                $this->setStatus(false);
                print("Conta de ".$this->getDono()." fechada com sucesso\n");
            }
        }

        public function depositar($v) {
            if ($this->isStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                print("Depósito de R$$v autorizado na conta de ".$this->getDono()."\n");
            } else {
                print("Impossível depositar\n");
            }
        }

        public function sacar($v) {
            if ($this->isStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    print("Saque de R$$v autorizado na conta de ".$this->getDono()."\n");
                } else {
                    print("Saldo insuficiente\n");
                }
            } else {
                print("Impossível sacar\n");
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } else if ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->isStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    print("Mensalidade de R$$v debitada na conta de ".$this->getDono()."\n");
                } else {
                    print("Saldo insuficiente\n");
                }
            } else {
                print("Impossível pagar.\n");
            }
        }

    }
?>