<?php

    class Carrinho
    {
        public function fecharCarrinho()
        {
            echo 'Carrinho fechado!';
        }
    }

    class Frete
    {
        public function calcularFrete()
        {
            echo 'Frete calculado!';
        }
    }

    class Pedido
    {
        public function fecharPedido()
        {
            echo 'Pedido fechado!';
        }
    }

    class Loja
    {
        public function finalizarCompra()
        {
            $this->fecharCarrinho();
            //$this->calcularFrete();
            //$this->fecharPedido();
        }

        public function fecharCarrinho()
        {
            $carrinho = new Carrinho;
            $carrinho->fecharCarrinho();
        }
    }

    $loja = new Loja;
    $loja->finalizarCompra();

?>