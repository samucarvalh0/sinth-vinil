<?php

require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController
{

    private Categoria $categoria;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function listarAdmin()
    {
        Auth::requireAdmin();

        $categorias = $this->categoria->listar();

        require __DIR__ . "/../admin/listCategorias.php";
    }

    public function criarAdmin()
    {
        Auth::requireAdmin();

        require __DIR__ . "/../admin/cadCategorias.php";
    }

    public function salvarAdmin()
    {
        Auth::requireAdmin();

        $resultado = $this->categoria->cadastrar($_POST);

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode(['success' => $resultado]);
            exit;
        }

        header("Location:?page=admin-categorias");
        exit;
    }

    public function editarAdmin($id)
    {
        Auth::requireAdmin();

        $categoria = $this->categoria->buscarPorId($id);

        require __DIR__ . "/../admin/editCategorias.php";
    }

    public function atualizarAdmin()
    {
        Auth::requireAdmin();

        $this->categoria->editar($_POST['id'], $_POST);

        header("Location:?page=admin-categorias");
        exit;
    }

    public function excluirAdmin($id)
    {
        Auth::requireAdmin();

        $this->categoria->excluir($id);

        header("Location:?page=admin-categorias");
        exit;
    }

}
?>
