<?php

require_once __DIR__ . "/../models/Admin.php";

class AdminController
{

    private Admin $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function login()
    {
        require __DIR__ . "/../admin/loginAdmin.php";
    }

    public function autenticar()
    {
        $admin = $this->admin->login($_POST);

        if ($admin) {

            $_SESSION['admin'] = $admin;

            header("Location: ?page=dashboard");
            exit;
        }

        header("Location: ?page=login");
    }

    public function dashboard()
    {
        Auth::requireAdmin();

        require_once __DIR__ . "/../models/Produtos.php";
        require_once __DIR__ . "/../models/Categoria.php";
        require_once __DIR__ . "/../models/Usuario.php";
        require_once __DIR__ . "/../models/Pedido.php";

        $produtoModel = new Produto();
        $categoriaModel = new Categoria();
        $usuarioModel = new Usuario();
        $pedidoModel = new Pedido();

        $totalProdutos = $produtoModel->contar();
        $totalCategorias = $categoriaModel->contar();
        $totalUsuarios = $usuarioModel->contar();
        $totalPedidos = $pedidoModel->contar();
        $ultimosPedidos = $pedidoModel->listarUltimos(5);

        require __DIR__ . "/../admin/dashboard.php";
    }

    public function logout()
    {
        unset($_SESSION['admin']);

        header("Location: ?page=login");
        exit;
    }

}
?>