<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->leitor = $leitor;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function getAutor() {
            return $this->autor;
        }

        function setAutor($autor) {
            $this->autor = $autor;
        }

        function getTotPaginas() {
            return $this->totPaginas;
        }

        function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }

        function getPagAtual() {
            return $this->pagAtual;
        }

        function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }

        function getAberto() {
            return $this->aberto;
        }

        function setAberto($aberto) {
            $this->aberto = $aberto;
        }

        function getLeitor() {
            return $this->leitor;
        }

        function setLeitor($leitor) {
            $this->leitor = $leitor;
        }

        function detalhes() {
            return (""
                    ."Título: ".$this->getTitulo()
                    ."\nAutor: ".$this->getAutor()
                    ."\nPágina Atual: ".$this->getPagAtual()
                    ."\nTotal de Páginas: ".$this->getTotPaginas()
                    ."\nAberto: ".$this->getAberto()
                    ."\nLeitor: \n".$this->getLeitor()->toString());
        }

        function abrir() {
            $this->setAberto(true);
        }

        function fechar() {
            $this->setAberto(false);
        }

        function folhear($pagina) {
            if ($pagina <= $this->getTotPaginas()) {
                $this->setPagAtual($pagina);
            } else {
                $this->setPagAtual($this->getTotPaginas());
            }
        }

        function avancarPag() {
            $this->setPagAtual($this->getPagAtual() + 1);
        }

        function voltarPag() {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
