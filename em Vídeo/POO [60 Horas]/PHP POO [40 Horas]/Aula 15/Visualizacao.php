<?php
    require_once '../Aula 14/Gafanhoto.php';
    require_once '../Aula 14/Video.php';
    class Visualizacao {
        private $espectador;
        private $filme;

        function __construct($espectador, $filme) {
            $this -> espectador = $espectador;
            $this -> filme = $filme;
            $this -> espectador -> setTotAssistido($this -> espectador -> getTotAssistido() + 1);
            $this -> filme -> setViews($this -> filme -> getViews() + 1);
        }

        function getEspectador() {
            return $this -> espectador;
        }

        function setEspectador($espectador) {
            $this -> espectador = $espectador;
        }

        function getFilme() {
            return $this -> filme;
        }

        function setFilme($filme) {
            $this -> filme = $filme;
        }

        function avaliar() {
            $this -> filme -> setAvaliacao(5);
        }

        function avaliarNota($nota) {
            $this -> filme -> setAvaliacao($nota);
        }

        function avaliarPorc($porc) {
            $novaNota = 0;

            if ($porc <= 20) {
                $novaNota = 3;
            } elseif ($porc <= 50) {
                $novaNota = 5;
            } elseif ($porc <= 90) {
                $novaNota = 8;
            } else {
                $novaNota = 10;
            }

            $this -> filme -> setAvaliacao($novaNota);
        }
    }