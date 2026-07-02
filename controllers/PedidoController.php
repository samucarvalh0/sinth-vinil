<?php

require_once "models/Pedido.php";

class PedidoController
{

    private Pedido $pedido;

    public function __construct()
    {
        $this->pedido = new Pedido();
    }

    public function checkout()
    {
        require "views/checkout.php";
    }

    public function finalizar()
    {
        $this->pedido->finalizar($_POST);

        header("Location: ?page=meus-pedidos");
    }

    public function listar()
    {
        $pedidos = $this->pedido->listar();

        require "views/meus-pedidos.php";
    }

    public function detalhes($id)
    {
        $pedido = $this->pedido->buscar($id);

        require "views/pedido.php";
    }

}
?>