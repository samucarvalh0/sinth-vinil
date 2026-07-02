<?php

class Usuario
{

    public function login($dados)
    {
        // SELECT usuario
    }

    public function cadastrar($dados)
    {
        // INSERT usuario
    }

    public function editar($id,$dados)
    {
        // UPDATE usuario
    }

    public function buscarPorId($id)
    {
        // SELECT usuario
    }

    public function contar()
    {
        global $conn;

        $sql = "SELECT COUNT(*) as total FROM clientes";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        return $row['total'] ?? 0;
    }

}
?>