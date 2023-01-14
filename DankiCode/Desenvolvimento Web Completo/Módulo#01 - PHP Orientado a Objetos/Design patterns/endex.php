<?php

    class Carrinho
    {
        public function fecharCarrinho()
        {
            //echo 'Carrinho fechado!';
            return true;
        }
    }

    class Frete
    {
        public function calcularFrete()
        {
            //echo 'Frete calculado!';
            return true;
        }
    }

    class Pedido
    {
        public function fecharPedido()
        {
            //echo 'Pedido fechado!';
            return true;
        }
    }

    class Loja
    {
        public function finalizarCompra()
        {
            $carrinho = new Carrinho;
            $carrinho->fecharCarrinho();
            $frete = new Frete;
            $frete->calcularFrete();
            $pedido = new Pedido;
            $pedido->fecharPedido();
            
            if($carrinho && $frete && $pedido){
                echo 'Compra finalizada!';
            }
            else
            {
                echo 'Erro!';
            }
        }
    }

    $loja = new Loja;
    $loja->finalizarCompra();

?>