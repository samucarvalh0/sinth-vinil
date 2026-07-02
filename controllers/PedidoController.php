<?php

require_once __DIR__ . "/../models/Pedido.php";

class PedidoController
{

    private Pedido $pedido;

    public function __construct()
    {
        $this->pedido = new Pedido();
    }

    public function checkout()
    {
        Auth::requireLogin();

        require "views/checkout.php";
    }

    public function finalizar()
    {
        Auth::requireLogin();

        $this->pedido->finalizar($_POST);

        header("Location:?page=meus-pedidos");
    }

    public function listar()
    {
        Auth::requireLogin();

        $pedidos = $this->pedido->listar(Auth::id());

        require "views/meus-pedidos.php";
    }

    public function listarAdmin()
    {
        Auth::requireAdmin();

        $pedidos = $this->pedido->listar();

        require __DIR__ . "/../admin/listPed.php";
    }

}
?>