<?php

class Admin
{
    public function login($dados)
    {
        global $conn;

        $login = $dados['usuario'];
        $senha = $dados['senha'];

        $sql = "SELECT * FROM admin WHERE usuario = ? LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $login);
        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 0) {
            return false;
        }

        $admin = $resultado->fetch_assoc();

        if ($senha === $admin['senha']) {
            return $admin;
        }

        return false;
    }

    public function buscarPorId($id)
    {
        global $conn;

        $sql = "SELECT id, nome, usuario
                FROM admin
                WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();

        return $resultado->fetch_assoc();
    }
}
?>