<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {

        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        function __construct($titulo) {
            $this -> titulo = $titulo;
            $this -> avaliacao = 1;
            $this -> views = 0;
            $this -> curtidas = 0;
            $this -> reproduzindo = false;
        }

        function getTitulo() {
            return $this -> titulo;
        }

        function setTitulo($titulo) {
            $this -> titulo = $titulo;
        }

        function getAvaliacao() {
            return $this -> avaliacao;
        }

        function setAvaliacao($avaliacao) {
            $this -> avaliacao = $avaliacao;
        }

        function getViews() {
            return $this -> views;
        }

        function setViews($views) {
            $this -> views = $views;
        }

        function getCurtidas() {
            return $this -> curtidas;
        }

        function setCurtidas($curtidas) {
            $this -> curtidas = $curtidas;
        }

        function getReproduzindo() {
            return $this -> reproduzindo;
        }

        function setReproduzindo($reproduzindo) {
            $this -> reproduzindo = $reproduzindo;
        }

        function like() {
            $this -> setCurtidas($this -> getCurtidas() + 1);
        }

        function pause() {
            $this -> setReproduzindo(false);
        }

        function play() {
            $this -> setReproduzindo(true);
        }
    }