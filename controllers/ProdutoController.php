<?php

require_once "models/Produtos.php";

class ProdutoController
{

    private Produto $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function listar()
    {
        $produtos = $this->produto->listar();

        require "views/default/catalogo.php";
    }

    public function detalhes($id)
    {
        $produto = $this->produto->buscarPorId($id);

        require "views/default/produto.php";
    }

    public function cadastrar()
    {
        $this->produto->cadastrar($_POST);

        header("Location: ?page=admin-produtos");
    }

    public function editar($id)
    {
        $this->produto->editar($id, $_POST);

        header("Location: ?page=admin-produtos");
    }

    public function excluir($id)
    {
        $this->produto->excluir($id);

        header("Location: ?page=admin-produtos");
    }

}
?>