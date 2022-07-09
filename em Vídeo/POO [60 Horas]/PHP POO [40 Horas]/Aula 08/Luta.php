<?php
    require_once '..//Aula 07//Lutador.php';
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        function getDesafiado() {
            return $this->desafiado;
        }
    
        function setDesafiado($desafiado) {
            $this->desafiado = $desafiado;
        }
    
        function getDesafiante() {
            return $this->desafiante;
        }
    
        function setDesafiante($desafiante) {
            $this->desafiante = $desafiante;
        }
    
        function getRounds() {
            return $this->rounds;
        }
    
        function setRounds($rounds) {
            $this->rounds = $rounds;
        }
    
        function isAprovada() {
            return $this->aprovada;
        }
    
        function setAprovada($aprovada) {
            $this->aprovada = $aprovada;
        }
    
        function marcarLuta($l1, $l2) {
            if (($l1->getCategoria() == $l2->getCategoria())
                    && ($l1 != $l2)) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
    
        function lutar() {
            if ($this->aprovada) {
                print("### DESAFIADO ###"."\n");
                $this->desafiado->apresentar();
                print("### DESAFIANTE ###"."\n");
                $this->desafiante->apresentar();
    
                print("==== RESULTADO DA LUTA ===="."\n");
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        print("Empate"."\n");
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
    
                    case 1:
                        print("Vitória do: ".$this->desafiado->getNome()."\n");
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
    
                    case 2:
                        print("Vitória do: ".$this->desafiante->getNome()."\n");
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }
                print("==========================="."\n");
            } else {
                print("A luta não pode acontecer"."\n");
            }
        }
    
    }