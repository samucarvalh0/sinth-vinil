<?php

require_once "models/Usuario.php";

class UsuarioController
{

    private Usuario $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function login()
    {
        require "views/default/login.php";
    }

    public function autenticar()
    {
        $this->usuario->login($_POST);

        header("Location: index.php");
    }

    public function cadastro()
    {
        require "views/default/cadastro.php";
    }

    public function salvarCadastro()
    {
        $this->usuario->cadastrar($_POST);

        header("Location: ?page=login");
    }

    public function logout()
    {
        session_destroy();

        header("Location: index.php");
    }

}
?>